<?php
declare(strict_types=1);
require __DIR__ . '/app/bootstrap.php';

try {
    $ready = table_exists('pages') && table_exists('modules');
} catch (Throwable) {
    $ready = false;
}

if (!$ready) {
    http_response_code(503);
    echo '<!doctype html><html lang="de"><meta charset="utf-8"><title>Setup erforderlich</title><body style="font-family:Arial,sans-serif;padding:40px;max-width:780px"><h1>Setup erforderlich</h1><p>Die Datenbank ist noch nicht eingerichtet. Bitte <a href="/install.php">Installationsroutine starten</a>.</p></body></html>';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form'] ?? '') === 'contact') {
    require_csrf();
    $trap = trim((string) ($_POST['website'] ?? ''));
    if ($trap === '') {
        $name = trim((string) ($_POST['name'] ?? ''));
        $email = trim((string) ($_POST['email'] ?? ''));
        $message = trim((string) ($_POST['message'] ?? ''));
        if ($name !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) && $message !== '' && !empty($_POST['consent'])) {
            $stmt = db()->prepare('INSERT INTO leads (name, company, email, phone, topic, message, consent, ip_hash, user_agent, created_at) VALUES (?, ?, ?, ?, ?, ?, 1, ?, ?, NOW())');
            $stmt->execute([
                $name,
                trim((string) ($_POST['company'] ?? '')),
                $email,
                trim((string) ($_POST['phone'] ?? '')),
                trim((string) ($_POST['topic'] ?? '')),
                $message,
                hash('sha256', (string) ($_SERVER['REMOTE_ADDR'] ?? '')),
                substr((string) ($_SERVER['HTTP_USER_AGENT'] ?? ''), 0, 255),
            ]);
            $_SESSION['flash_success'] = 'Danke. Deine Anfrage wurde gespeichert.';
        } else {
            $_SESSION['flash_error'] = 'Bitte Name, gueltige E-Mail, Nachricht und Datenschutz-Hinweis ausfuellen.';
        }
    }
    redirect(route_url('kontakt') . '#kontaktformular');
}

$route = trim((string) ($_GET['route'] ?? ''), '/');
if ($route === '') {
    $pathInfo = trim((string) ($_SERVER['PATH_INFO'] ?? ''), '/');
    $requestPath = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '', '/');
    $route = $pathInfo !== '' ? $pathInfo : $requestPath;
    if ($route === 'index.php') {
        $route = '';
    }
}
if ($route === '') {
    $route = 'home';
}

$module = null;
if (str_starts_with($route, 'modul/')) {
    $module = module_by_slug(substr($route, 6));
    if (!$module) {
        render_404();
    }
    render_module($module);
    exit;
}

$page = page_by_slug($route);
if (!$page) {
    render_404();
}
render_page($page);

function nav_pages(): array
{
    return db()->query('SELECT slug, nav_label FROM pages WHERE is_published = 1 AND show_in_nav = 1 ORDER BY sort_order ASC, nav_label ASC')->fetchAll();
}

function html_head(array $page, string $type = 'page'): void
{
    $tokens = design_tokens();
    $title = $page['meta_title'] ?: $page['title'];
    $description = $page['meta_description'] ?: $page['hero_subtitle'] ?: setting('site_subclaim');
    $canonical = $page['canonical'] ?: absolute_route_url($page['slug'] === 'home' ? 'home' : $page['slug']);
    if ($type === 'module') {
        $canonical = absolute_route_url('modul/' . $page['slug']);
    }
    $jsonLd = trim((string) ($page['json_ld'] ?? ''));
    ?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($description) ?>">
    <?php if (!empty($page['noindex'])): ?><meta name="robots" content="noindex,nofollow"><?php endif; ?>
    <link rel="canonical" href="<?= e($canonical) ?>">
    <meta property="og:title" content="<?= e($page['og_title'] ?: $title) ?>">
    <meta property="og:description" content="<?= e($page['og_description'] ?: $description) ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <?php if (!empty($page['og_image'])): ?><meta property="og:image" content="<?= e($page['og_image']) ?>"><?php endif; ?>
    <link rel="icon" href="/assets/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="/assets/theme.css">
    <style>
    :root {
    <?php foreach ($tokens as $key => $value): ?>
        --<?= e($key) ?>: <?= e($value) ?>;
    <?php endforeach; ?>
    }
    </style>
    <?php if ($jsonLd !== ''): ?><script type="application/ld+json"><?= $jsonLd ?></script><?php endif; ?>
    <script type="application/ld+json"><?= json_encode_pretty([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => setting('site_name', 'Unternehmenspflichten.de'),
        'url' => url('/'),
        'email' => setting('contact_email'),
    ]) ?></script>
</head>
<body>
<a class="skip-link" href="#inhalt">Zum Inhalt springen</a>
<?php
}

function site_header(): void
{
    ?>
<header class="site-header">
    <div class="wrap header-inner">
        <a class="brand" href="<?= e(route_url('home')) ?>" aria-label="Startseite">
            <span class="brand-mark">UP</span>
            <span><?= e(setting('site_name', 'Unternehmenspflichten.de')) ?></span>
        </a>
        <button class="nav-toggle" data-nav-toggle aria-expanded="false">Menue</button>
        <nav class="site-nav" data-nav>
            <?php foreach (nav_pages() as $nav): ?>
                <a href="<?= e(route_url($nav['slug'])) ?>"><?= e($nav['nav_label']) ?></a>
            <?php endforeach; ?>
            <a class="nav-cta" href="<?= e(cms_url((string) setting('primary_cta_url', '/kontakt'))) ?>"><?= e(setting('primary_cta_label', 'Demo anfragen')) ?></a>
        </nav>
    </div>
</header>
<?php
}

function site_footer(): void
{
    ?>
<footer class="site-footer">
    <div class="wrap footer-grid">
        <div>
            <strong><?= e(setting('site_name')) ?></strong>
            <p><?= e(setting('legal_boundary')) ?></p>
        </div>
        <div>
            <strong>Kontakt</strong>
            <p><a href="mailto:<?= e(setting('contact_email')) ?>"><?= e(setting('contact_email')) ?></a></p>
        </div>
        <div>
            <strong>Rechtliches</strong>
            <p><a href="<?= e(route_url('impressum')) ?>">Impressum</a><br><a href="<?= e(route_url('datenschutz')) ?>">Datenschutz</a></p>
        </div>
    </div>
</footer>
<script src="/assets/site.js" defer></script>
</body>
</html>
<?php
}

function render_page(array $page): void
{
    html_head($page);
    site_header();
    ?>
<main id="inhalt">
    <?php if ($page['slug'] === 'home'): ?>
        <?php render_home($page); ?>
    <?php else: ?>
        <section class="page-hero">
            <div class="wrap narrow">
                <p class="eyebrow"><?= e($page['nav_label']) ?></p>
                <h1><?= e($page['hero_title']) ?></h1>
                <?php if ($page['hero_subtitle']): ?><p class="lead"><?= e($page['hero_subtitle']) ?></p><?php endif; ?>
                <?php if ($page['cta_label'] && $page['cta_url']): ?><a class="button" href="<?= e(cms_url((string) $page['cta_url'])) ?>"><?= e($page['cta_label']) ?></a><?php endif; ?>
            </div>
        </section>
        <section class="content-section">
            <div class="wrap narrow prose">
                <?= sanitize_html((string) $page['body_html']) ?>
                <?php if ($page['slug'] === 'module'): render_module_overview(); endif; ?>
                <?php if ($page['slug'] === 'kontakt'): render_contact_form(); endif; ?>
            </div>
        </section>
    <?php endif; ?>
</main>
<?php
    site_footer();
}

function render_home(array $page): void
{
    ?>
<section class="hero">
    <div class="wrap hero-grid">
        <div class="hero-copy">
            <p class="eyebrow"><?= e(setting('hero_eyebrow')) ?></p>
            <h1><?= e(setting('site_claim')) ?></h1>
            <p class="lead"><?= e(setting('site_subclaim')) ?></p>
            <div class="button-row">
                <a class="button" href="<?= e(cms_url((string) setting('primary_cta_url'))) ?>"><?= e(setting('primary_cta_label')) ?></a>
                <a class="button button-ghost" href="<?= e(cms_url((string) setting('secondary_cta_url'))) ?>"><?= e(setting('secondary_cta_label')) ?></a>
            </div>
        </div>
        <div class="product-visual" aria-label="Beispielansicht Fristen und Nachweise">
            <div class="visual-toolbar"><span></span><span></span><span></span></div>
            <div class="visual-row urgent"><b>Feuerloescher Wartung</b><em>faellig in 18 Tagen</em></div>
            <div class="visual-row"><b>LUCID Mengenbeleg</b><em>eingereicht</em></div>
            <div class="visual-row warn"><b>Portalquittung fehlt</b><em>offen</em></div>
            <div class="visual-export">Exportordner fuer Steuerberater/Sifa vorbereiten</div>
        </div>
    </div>
</section>

<section class="section">
    <div class="wrap split">
        <div>
            <p class="eyebrow"><?= e(setting('home_modules_eyebrow')) ?></p>
            <h2><?= e(setting('home_modules_heading')) ?></h2>
            <p><?= e(setting('home_modules_intro')) ?></p>
        </div>
        <div class="card-stack">
            <?php foreach (all_modules(true) as $module): ?>
                <article class="module-card">
                    <span class="status"><?= e(status_label($module['status'])) ?></span>
                    <h3><?= e($module['title']) ?></h3>
                    <p><?= e($module['summary']) ?></p>
                    <a href="<?= e(route_url('modul/' . $module['slug'])) ?>">Details ansehen</a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section muted">
    <div class="wrap">
        <p class="eyebrow"><?= e(setting('home_process_eyebrow')) ?></p>
        <h2><?= e(setting('home_process_heading')) ?></h2>
        <div class="steps">
            <div><span>1</span><h3><?= e(setting('home_step_1_title')) ?></h3><p><?= e(setting('home_step_1_text')) ?></p></div>
            <div><span>2</span><h3><?= e(setting('home_step_2_title')) ?></h3><p><?= e(setting('home_step_2_text')) ?></p></div>
            <div><span>3</span><h3><?= e(setting('home_step_3_title')) ?></h3><p><?= e(setting('home_step_3_text')) ?></p></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="wrap trust-box">
        <div>
            <p class="eyebrow"><?= e(setting('home_trust_eyebrow')) ?></p>
            <h2><?= e(setting('home_trust_heading')) ?></h2>
        </div>
        <p><?= e(setting('legal_boundary')) ?></p>
    </div>
</section>
<?php render_faqs('global', ''); ?>
<?php
}

function render_module_overview(): void
{
    echo '<div class="module-list">';
    foreach (all_modules(false) as $module) {
        echo '<article class="module-card wide">';
        echo '<span class="status">' . e(status_label($module['status'])) . '</span>';
        echo '<h2>' . e($module['title']) . '</h2>';
        echo '<p>' . e($module['summary']) . '</p>';
        echo '<a href="' . e(route_url('modul/' . $module['slug'])) . '">Modulseite oeffnen</a>';
        echo '</article>';
    }
    echo '</div>';
}

function render_module(array $module): void
{
    $page = [
        'slug' => $module['slug'],
        'title' => $module['title'],
        'hero_title' => $module['headline'],
        'hero_subtitle' => $module['summary'],
        'meta_title' => $module['title'] . ' | Unternehmenspflichten.de',
        'meta_description' => $module['summary'],
        'og_title' => $module['title'],
        'og_description' => $module['summary'],
        'og_image' => '',
        'canonical' => '',
        'json_ld' => '',
        'noindex' => 0,
    ];
    html_head($page, 'module');
    site_header();
    ?>
<main id="inhalt">
    <section class="page-hero">
        <div class="wrap narrow">
            <p class="eyebrow"><?= e($module['category']) ?> &middot; <?= e(status_label($module['status'])) ?></p>
            <h1><?= e($module['headline']) ?></h1>
            <p class="lead"><?= e($module['summary']) ?></p>
            <?php if ($module['cta_label'] && $module['cta_url']): ?><a class="button" href="<?= e(cms_url((string) $module['cta_url'])) ?>"><?= e($module['cta_label']) ?></a><?php endif; ?>
        </div>
    </section>
    <section class="content-section">
        <div class="wrap module-detail">
            <article class="detail-card">
                <h2>Zielgruppe</h2>
                <p><?= nl2br(e($module['audience'])) ?></p>
            </article>
            <article class="detail-card">
                <h2>Was verwaltet wird</h2>
                <p><?= nl2br(e($module['includes_text'])) ?></p>
            </article>
            <article class="detail-card boundary">
                <h2>Grenze</h2>
                <p><?= nl2br(e($module['boundary_text'])) ?></p>
            </article>
            <?php if ($module['source_url']): ?>
            <article class="detail-card source">
                <h2>Quelle</h2>
                <p><a href="<?= e($module['source_url']) ?>" rel="nofollow noopener" target="_blank"><?= e($module['source_label'] ?: $module['source_url']) ?></a></p>
                <p class="small">Stand der redaktionellen Einordnung: <?= e(date('d.m.Y', strtotime($module['updated_at']))) ?></p>
            </article>
            <?php endif; ?>
        </div>
    </section>
    <?php render_faqs('module', $module['slug']); ?>
</main>
<?php
    site_footer();
}

function render_faqs(string $ownerType, string $ownerSlug): void
{
    $stmt = db()->prepare('SELECT question, answer FROM faqs WHERE is_active = 1 AND ((owner_type = ? AND owner_slug = ?) OR (owner_type = "global" AND owner_slug = "")) ORDER BY sort_order ASC');
    $stmt->execute([$ownerType, $ownerSlug]);
    $faqs = $stmt->fetchAll();
    if (!$faqs) {
        return;
    }
    ?>
<section class="section muted">
    <div class="wrap narrow">
        <p class="eyebrow"><?= e(setting('faq_eyebrow')) ?></p>
        <h2><?= e(setting('faq_heading')) ?></h2>
        <div class="faq-list">
            <?php foreach ($faqs as $faq): ?>
                <details>
                    <summary><?= e($faq['question']) ?></summary>
                    <p><?= e($faq['answer']) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
}

function render_contact_form(): void
{
    $success = $_SESSION['flash_success'] ?? '';
    $error = $_SESSION['flash_error'] ?? '';
    unset($_SESSION['flash_success'], $_SESSION['flash_error']);
    ?>
<form class="contact-form" id="kontaktformular" method="post" action="<?= e(route_url('kontakt')) ?>">
    <?= csrf_field() ?>
    <input type="hidden" name="form" value="contact">
    <p class="form-message success"><?= e($success) ?></p>
    <p class="form-message error"><?= e($error) ?></p>
    <label>Name <input name="name" required autocomplete="name"></label>
    <label>Firma <input name="company" autocomplete="organization"></label>
    <label>E-Mail <input name="email" type="email" required autocomplete="email"></label>
    <label>Telefon <input name="phone" autocomplete="tel"></label>
    <label>Thema <select name="topic"><option>Pruef-/Fristen-Tracker</option><option>Produkt-/Haendler-Nachweisakte</option><option>Beraterzugang</option><option>Sonstiges</option></select></label>
    <label>Nachricht <textarea name="message" rows="6" required></textarea></label>
    <label class="hp">Website <input name="website" tabindex="-1" autocomplete="off"></label>
    <label class="check"><input type="checkbox" name="consent" value="1" required> Ich bin einverstanden, dass meine Angaben zur Bearbeitung der Anfrage gespeichert werden.</label>
    <button class="button" type="submit">Anfrage speichern</button>
</form>
<?php
}

function render_404(): never
{
    http_response_code(404);
    $page = [
        'slug' => '404',
        'title' => 'Seite nicht gefunden',
        'hero_title' => 'Seite nicht gefunden',
        'hero_subtitle' => 'Der angeforderte Inhalt existiert nicht oder wurde verschoben.',
        'meta_title' => 'Seite nicht gefunden',
        'meta_description' => '404',
        'og_title' => '',
        'og_description' => '',
        'og_image' => '',
        'canonical' => absolute_route_url('404'),
        'json_ld' => '',
        'noindex' => 1,
    ];
    html_head($page);
    site_header();
    echo '<main id="inhalt"><section class="page-hero"><div class="wrap narrow"><h1>Seite nicht gefunden</h1><p class="lead">Zurueck zur Startseite oder zu den Modulen.</p><a class="button" href="' . e(route_url('home')) . '">Startseite</a></div></section></main>';
    site_footer();
    exit;
}
