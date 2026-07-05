<?php
declare(strict_types=1);
require dirname(__DIR__) . '/app/bootstrap.php';

try {
    $ready = table_exists('admins');
} catch (Throwable) {
    $ready = false;
}
if (!$ready) {
    redirect('/install.php');
}

$view = (string) ($_GET['view'] ?? 'dashboard');

if ($view === 'logout') {
    session_destroy();
    redirect('/admin/?view=login');
}

if ($view === 'login') {
    admin_login_view();
    exit;
}

$admin = require_admin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_csrf();
    handle_admin_post($view);
}

admin_header($view);
match ($view) {
    'pages' => pages_view(),
    'page' => page_edit_view(),
    'modules' => modules_view(),
    'module' => module_edit_view(),
    'faqs' => faqs_view(),
    'faq' => faq_edit_view(),
    'settings' => settings_view(),
    'design' => design_view(),
    'leads' => leads_view(),
    'account' => account_view(),
    default => dashboard_view(),
};
admin_footer();

function admin_login_view(): void
{
    $error = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_csrf();
        $email = trim((string) ($_POST['email'] ?? ''));
        $password = (string) ($_POST['password'] ?? '');
        $stmt = db()->prepare('SELECT * FROM admins WHERE email = ? LIMIT 1');
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        $locked = $user && $user['locked_until'] && strtotime($user['locked_until']) > time();
        if ($user && !$locked && password_verify($password, $user['password_hash'])) {
            db()->prepare('UPDATE admins SET failed_logins = 0, locked_until = NULL, last_login_at = NOW() WHERE id = ?')->execute([$user['id']]);
            $_SESSION['admin_id'] = (int) $user['id'];
            audit_log('login', 'admin');
            redirect('/admin/');
        }
        if ($user) {
            $failed = (int) $user['failed_logins'] + 1;
            $lockUntil = null;
            if ($failed >= (int) app_config('security.max_login_attempts', 8)) {
                $lockUntil = date('Y-m-d H:i:s', time() + ((int) app_config('security.lock_minutes', 20) * 60));
                $failed = 0;
            }
            db()->prepare('UPDATE admins SET failed_logins = ?, locked_until = ? WHERE id = ?')->execute([$failed, $lockUntil, $user['id']]);
        }
        $error = $locked ? 'Login ist voruebergehend gesperrt.' : 'Login fehlgeschlagen.';
    }
    ?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="stylesheet" href="/admin/admin.css">
</head>
<body class="login-body">
<main class="login-card">
    <h1>Admin</h1>
    <p>Inhalte, Design, Module und Leads bearbeiten.</p>
    <?php if ($error): ?><p class="alert"><?= e($error) ?></p><?php endif; ?>
    <form method="post">
        <?= csrf_field() ?>
        <label>E-Mail <input type="email" name="email" required autofocus></label>
        <label>Passwort <input type="password" name="password" required></label>
        <button type="submit">Einloggen</button>
    </form>
</main>
</body>
</html>
<?php
}

function handle_admin_post(string $view): void
{
    $action = (string) ($_POST['action'] ?? '');
    if ($action === 'change_password') {
        $user = admin_user();
        if (!$user) {
            redirect('/admin/?view=login');
        }
        $stmt = db()->prepare('SELECT * FROM admins WHERE id = ? LIMIT 1');
        $stmt->execute([(int) $user['id']]);
        $admin = $stmt->fetch();
        $current = (string) ($_POST['current_password'] ?? '');
        $new = (string) ($_POST['new_password'] ?? '');
        $repeat = (string) ($_POST['new_password_repeat'] ?? '');
        if (!$admin || !password_verify($current, $admin['password_hash'])) {
            redirect('/admin/?view=account&error=current');
        }
        if (strlen($new) < 12 || $new !== $repeat) {
            redirect('/admin/?view=account&error=new');
        }
        db()->prepare('UPDATE admins SET password_hash = ?, failed_logins = 0, locked_until = NULL WHERE id = ?')->execute([
            password_hash($new, PASSWORD_DEFAULT),
            (int) $user['id'],
        ]);
        audit_log('change_password', 'admin');
        redirect('/admin/?view=account&saved=1');
    }

    if ($action === 'save_page') {
        $id = (int) $_POST['id'];
        $stmt = db()->prepare('UPDATE pages SET nav_label=?, title=?, hero_title=?, hero_subtitle=?, cta_label=?, cta_url=?, body_html=?, meta_title=?, meta_description=?, og_title=?, og_description=?, og_image=?, canonical=?, json_ld=?, noindex=?, is_published=?, show_in_nav=?, sort_order=? WHERE id=?');
        $stmt->execute([
            trim((string) $_POST['nav_label']),
            trim((string) $_POST['title']),
            trim((string) $_POST['hero_title']),
            trim((string) $_POST['hero_subtitle']),
            trim((string) $_POST['cta_label']),
            trim((string) $_POST['cta_url']),
            sanitize_html((string) $_POST['body_html']),
            trim((string) $_POST['meta_title']),
            trim((string) $_POST['meta_description']),
            trim((string) $_POST['og_title']),
            trim((string) $_POST['og_description']),
            trim((string) $_POST['og_image']),
            trim((string) $_POST['canonical']),
            trim((string) $_POST['json_ld']),
            !empty($_POST['noindex']) ? 1 : 0,
            !empty($_POST['is_published']) ? 1 : 0,
            !empty($_POST['show_in_nav']) ? 1 : 0,
            (int) $_POST['sort_order'],
            $id,
        ]);
        audit_log('save_page', (string) $id);
        redirect('/admin/?view=page&id=' . $id . '&saved=1');
    }

    if ($action === 'save_module') {
        $id = (int) $_POST['id'];
        $stmt = db()->prepare('UPDATE modules SET category=?, status=?, title=?, headline=?, summary=?, audience=?, includes_text=?, boundary_text=?, cta_label=?, cta_url=?, source_label=?, source_url=?, is_featured=?, is_active=?, sort_order=? WHERE id=?');
        $stmt->execute([
            trim((string) $_POST['category']),
            trim((string) $_POST['status']),
            trim((string) $_POST['title']),
            trim((string) $_POST['headline']),
            trim((string) $_POST['summary']),
            trim((string) $_POST['audience']),
            trim((string) $_POST['includes_text']),
            trim((string) $_POST['boundary_text']),
            trim((string) $_POST['cta_label']),
            trim((string) $_POST['cta_url']),
            trim((string) $_POST['source_label']),
            trim((string) $_POST['source_url']),
            !empty($_POST['is_featured']) ? 1 : 0,
            !empty($_POST['is_active']) ? 1 : 0,
            (int) $_POST['sort_order'],
            $id,
        ]);
        audit_log('save_module', (string) $id);
        redirect('/admin/?view=module&id=' . $id . '&saved=1');
    }

    if ($action === 'new_module') {
        $title = trim((string) ($_POST['title'] ?? 'Neues Modul'));
        $slug = slugify($title);
        $stmt = db()->prepare('INSERT INTO modules (slug, category, status, title, headline, summary, boundary_text, sort_order) VALUES (?, "Roadmap", "roadmap", ?, ?, "Kurzbeschreibung ersetzen.", "Keine fachliche oder rechtliche Bewertung durch die Plattform.", 100)');
        $stmt->execute([$slug, $title, $title]);
        redirect('/admin/?view=module&id=' . (int) db()->lastInsertId());
    }

    if ($action === 'new_page') {
        $title = trim((string) ($_POST['title'] ?? 'Neue Seite'));
        $slug = slugify($title);
        $stmt = db()->prepare('INSERT INTO pages (slug, nav_label, title, hero_title, hero_subtitle, body_html, meta_title, meta_description, sort_order, show_in_nav) VALUES (?, ?, ?, ?, "Text ersetzen.", "<p>Inhalt ersetzen.</p>", ?, "Meta Description ersetzen.", 80, 0)');
        $stmt->execute([$slug, $title, $title, $title, $title]);
        redirect('/admin/?view=page&id=' . (int) db()->lastInsertId());
    }

    if ($action === 'new_faq') {
        $question = trim((string) ($_POST['question'] ?? 'Neue Frage'));
        $stmt = db()->prepare('INSERT INTO faqs (owner_type, owner_slug, question, answer, sort_order, is_active) VALUES ("global", "", ?, "Antwort ersetzen.", 100, 1)');
        $stmt->execute([$question]);
        redirect('/admin/?view=faq&id=' . (int) db()->lastInsertId());
    }

    if ($action === 'save_faq') {
        $id = (int) $_POST['id'];
        $stmt = db()->prepare('UPDATE faqs SET owner_type=?, owner_slug=?, question=?, answer=?, sort_order=?, is_active=? WHERE id=?');
        $stmt->execute([
            trim((string) $_POST['owner_type']),
            trim((string) $_POST['owner_slug']),
            trim((string) $_POST['question']),
            trim((string) $_POST['answer']),
            (int) $_POST['sort_order'],
            !empty($_POST['is_active']) ? 1 : 0,
            $id,
        ]);
        audit_log('save_faq', (string) $id);
        redirect('/admin/?view=faq&id=' . $id . '&saved=1');
    }

    if ($action === 'save_settings') {
        foreach ($_POST['settings'] ?? [] as $key => $value) {
            db()->prepare('UPDATE settings SET setting_value = ? WHERE setting_key = ?')->execute([(string) $value, (string) $key]);
        }
        audit_log('save_settings');
        redirect('/admin/?view=settings&saved=1');
    }

    if ($action === 'save_design') {
        foreach ($_POST['tokens'] ?? [] as $key => $value) {
            db()->prepare('UPDATE design_tokens SET token_value = ? WHERE token_key = ?')->execute([(string) $value, (string) $key]);
        }
        audit_log('save_design');
        redirect('/admin/?view=design&saved=1');
    }

    if ($action === 'lead_status') {
        $id = (int) $_POST['id'];
        db()->prepare('UPDATE leads SET status = ?, notes = ? WHERE id = ?')->execute([
            trim((string) $_POST['status']),
            trim((string) $_POST['notes']),
            $id,
        ]);
        audit_log('lead_status', (string) $id);
        redirect('/admin/?view=leads&id=' . $id . '&saved=1');
    }
}

function admin_header(string $view): void
{
    ?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin &middot; Unternehmenspflichten.de</title>
    <link rel="stylesheet" href="/admin/admin.css">
</head>
<body>
<aside class="admin-sidebar">
    <a class="admin-brand" href="/admin/">UP Admin</a>
    <nav>
        <?= admin_link('dashboard', 'Dashboard', $view) ?>
        <?= admin_link('pages', 'Seiten', $view) ?>
        <?= admin_link('modules', 'Module', $view) ?>
        <?= admin_link('faqs', 'FAQ', $view) ?>
        <?= admin_link('settings', 'Einstellungen', $view) ?>
        <?= admin_link('design', 'Design', $view) ?>
        <?= admin_link('leads', 'Leads', $view) ?>
        <?= admin_link('account', 'Account', $view) ?>
        <a href="/" target="_blank">Website ansehen</a>
        <a href="/admin/?view=logout">Logout</a>
    </nav>
</aside>
<main class="admin-main">
<?php if (!empty($_GET['saved'])): ?><p class="notice">Gespeichert.</p><?php endif; ?>
<?php
}

function admin_footer(): void
{
    echo '</main></body></html>';
}

function admin_link(string $view, string $label, string $current): string
{
    $class = $view === $current ? ' class="active"' : '';
    return '<a' . $class . ' href="/admin/?view=' . e($view) . '">' . e($label) . '</a>';
}

function dashboard_view(): void
{
    $counts = [
        'Seiten' => (int) db()->query('SELECT COUNT(*) FROM pages')->fetchColumn(),
        'Module' => (int) db()->query('SELECT COUNT(*) FROM modules')->fetchColumn(),
        'Neue Leads' => (int) db()->query("SELECT COUNT(*) FROM leads WHERE status = 'new'")->fetchColumn(),
    ];
    ?>
<h1>Dashboard</h1>
<p class="intro">Alles Wichtige ist ueberschreibbar: Seiten, SEO, Module, Quellen, Designwerte, Rechtstexte und Leads.</p>
<div class="stat-grid">
    <?php foreach ($counts as $label => $count): ?>
        <div class="stat"><b><?= e($count) ?></b><span><?= e($label) ?></span></div>
    <?php endforeach; ?>
</div>
<section class="panel">
    <h2>Launch-Schnitt</h2>
    <ul>
        <li>Startkeil 1: Pruef-/Fristen-Tracker.</li>
        <li>Startkeil 2: Produkt-/Haendler-Nachweisakte.</li>
        <li>Beraterzugang und Portalbelege bleiben nach vorne sichtbar.</li>
        <li>Keine Rechtsberatung, keine Pflichtentscheidung, keine Ergebniszusage.</li>
    </ul>
</section>
<?php
}

function pages_view(): void
{
    $pages = db()->query('SELECT id, slug, nav_label, title, is_published, show_in_nav, sort_order FROM pages ORDER BY sort_order ASC')->fetchAll();
    ?>
<h1>Seiten</h1>
<form class="inline-form" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="action" value="new_page">
    <input name="title" placeholder="Neue Seite">
    <button type="submit">Anlegen</button>
</form>
<div class="table">
    <?php foreach ($pages as $p): ?>
        <a class="table-row" href="/admin/?view=page&id=<?= (int) $p['id'] ?>">
            <span><b><?= e($p['nav_label']) ?></b><small>/<?= e($p['slug'] === 'home' ? '' : $p['slug']) ?></small></span>
            <span><?= e($p['title']) ?></span>
            <span><?= $p['is_published'] ? 'online' : 'offline' ?> &middot; <?= $p['show_in_nav'] ? 'Navigation' : 'versteckt' ?></span>
        </a>
    <?php endforeach; ?>
</div>
<?php
}

function faqs_view(): void
{
    $faqs = db()->query('SELECT * FROM faqs ORDER BY owner_type, owner_slug, sort_order ASC')->fetchAll();
    ?>
<h1>FAQ</h1>
<form class="inline-form" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="action" value="new_faq">
    <input name="question" placeholder="Neue Frage">
    <button type="submit">Anlegen</button>
</form>
<div class="table">
    <?php foreach ($faqs as $faq): ?>
        <a class="table-row" href="/admin/?view=faq&id=<?= (int) $faq['id'] ?>">
            <span><b><?= e($faq['question']) ?></b><small><?= e($faq['owner_type']) ?> / <?= e($faq['owner_slug']) ?></small></span>
            <span><?= e(substr($faq['answer'], 0, 90)) ?></span>
            <span><?= $faq['is_active'] ? 'aktiv' : 'inaktiv' ?> &middot; <?= (int) $faq['sort_order'] ?></span>
        </a>
    <?php endforeach; ?>
</div>
<?php
}

function faq_edit_view(): void
{
    $id = (int) ($_GET['id'] ?? 0);
    $stmt = db()->prepare('SELECT * FROM faqs WHERE id = ?');
    $stmt->execute([$id]);
    $faq = $stmt->fetch();
    if (!$faq) {
        echo '<h1>FAQ nicht gefunden</h1>';
        return;
    }
    ?>
<h1>FAQ bearbeiten</h1>
<form class="edit-form" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="action" value="save_faq">
    <input type="hidden" name="id" value="<?= (int) $faq['id'] ?>">
    <div class="grid-2">
        <?= input_field('owner_type', 'Owner Type (global/module/page)', $faq['owner_type']) ?>
        <?= input_field('owner_slug', 'Owner Slug (leer bei global)', $faq['owner_slug']) ?>
    </div>
    <?= input_field('question', 'Frage', $faq['question']) ?>
    <?= textarea_field('answer', 'Antwort', $faq['answer']) ?>
    <?= input_field('sort_order', 'Sortierung', $faq['sort_order'], 'number') ?>
    <label class="check"><input type="checkbox" name="is_active" value="1" <?= $faq['is_active'] ? 'checked' : '' ?>> aktiv</label>
    <button type="submit">FAQ speichern</button>
</form>
<?php
}

function page_edit_view(): void
{
    $id = (int) ($_GET['id'] ?? 0);
    $stmt = db()->prepare('SELECT * FROM pages WHERE id = ?');
    $stmt->execute([$id]);
    $p = $stmt->fetch();
    if (!$p) {
        echo '<h1>Seite nicht gefunden</h1>';
        return;
    }
    ?>
<h1>Seite bearbeiten: <?= e($p['nav_label']) ?></h1>
<form class="edit-form" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="action" value="save_page">
    <input type="hidden" name="id" value="<?= (int) $p['id'] ?>">
    <div class="grid-2">
        <?= input_field('nav_label', 'Navigationslabel', $p['nav_label']) ?>
        <?= input_field('sort_order', 'Sortierung', $p['sort_order'], 'number') ?>
    </div>
    <?= input_field('title', 'Seitentitel intern', $p['title']) ?>
    <?= input_field('hero_title', 'H1 / Hero-Titel', $p['hero_title']) ?>
    <?= textarea_field('hero_subtitle', 'Hero-Unterzeile', $p['hero_subtitle']) ?>
    <div class="grid-2">
        <?= input_field('cta_label', 'Button-Text', $p['cta_label']) ?>
        <?= input_field('cta_url', 'Button-Link', $p['cta_url']) ?>
    </div>
    <?= textarea_field('body_html', 'Inhalt HTML (Whitelist wird serverseitig gefiltert)', $p['body_html'], 12) ?>
    <h2>SEO</h2>
    <?= input_field('meta_title', 'Meta Title', $p['meta_title']) ?>
    <?= textarea_field('meta_description', 'Meta Description', $p['meta_description']) ?>
    <?= input_field('canonical', 'Canonical URL optional', $p['canonical']) ?>
    <div class="grid-2">
        <?= input_field('og_title', 'OG Title', $p['og_title']) ?>
        <?= input_field('og_image', 'OG Bild URL', $p['og_image']) ?>
    </div>
    <?= textarea_field('og_description', 'OG Description', $p['og_description']) ?>
    <?= textarea_field('json_ld', 'JSON-LD optional', $p['json_ld'], 6) ?>
    <label class="check"><input type="checkbox" name="noindex" value="1" <?= $p['noindex'] ? 'checked' : '' ?>> noindex</label>
    <label class="check"><input type="checkbox" name="is_published" value="1" <?= $p['is_published'] ? 'checked' : '' ?>> veroeffentlicht</label>
    <label class="check"><input type="checkbox" name="show_in_nav" value="1" <?= $p['show_in_nav'] ? 'checked' : '' ?>> in Navigation zeigen</label>
    <button type="submit">Seite speichern</button>
</form>
<?php
}

function modules_view(): void
{
    $modules = db()->query('SELECT id, slug, category, status, title, is_featured, is_active, sort_order FROM modules ORDER BY sort_order ASC')->fetchAll();
    ?>
<h1>Module</h1>
<form class="inline-form" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="action" value="new_module">
    <input name="title" placeholder="Neues Modul">
    <button type="submit">Anlegen</button>
</form>
<div class="table">
    <?php foreach ($modules as $m): ?>
        <a class="table-row" href="/admin/?view=module&id=<?= (int) $m['id'] ?>">
            <span><b><?= e($m['title']) ?></b><small>/modul/<?= e($m['slug']) ?></small></span>
            <span><?= e($m['category']) ?></span>
            <span><?= e($m['status']) ?> &middot; <?= $m['is_featured'] ? 'Startseite' : 'nicht featured' ?> &middot; <?= $m['is_active'] ? 'aktiv' : 'inaktiv' ?></span>
        </a>
    <?php endforeach; ?>
</div>
<?php
}

function module_edit_view(): void
{
    $id = (int) ($_GET['id'] ?? 0);
    $stmt = db()->prepare('SELECT * FROM modules WHERE id = ?');
    $stmt->execute([$id]);
    $m = $stmt->fetch();
    if (!$m) {
        echo '<h1>Modul nicht gefunden</h1>';
        return;
    }
    ?>
<h1>Modul bearbeiten: <?= e($m['title']) ?></h1>
<form class="edit-form" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="action" value="save_module">
    <input type="hidden" name="id" value="<?= (int) $m['id'] ?>">
    <div class="grid-2">
        <?= input_field('category', 'Kategorie', $m['category']) ?>
        <?= input_field('sort_order', 'Sortierung', $m['sort_order'], 'number') ?>
    </div>
    <label>Status
        <select name="status">
            <?php foreach (['start', 'next', 'partner', 'roadmap'] as $status): ?>
                <option value="<?= e($status) ?>" <?= $m['status'] === $status ? 'selected' : '' ?>><?= e($status) ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <?= input_field('title', 'Titel', $m['title']) ?>
    <?= input_field('headline', 'Headline', $m['headline']) ?>
    <?= textarea_field('summary', 'Kurzbeschreibung', $m['summary']) ?>
    <?= textarea_field('audience', 'Zielgruppe', $m['audience']) ?>
    <?= textarea_field('includes_text', 'Was verwaltet wird', $m['includes_text']) ?>
    <?= textarea_field('boundary_text', 'Grenze / Disclaimer', $m['boundary_text']) ?>
    <div class="grid-2">
        <?= input_field('cta_label', 'CTA Text', $m['cta_label']) ?>
        <?= input_field('cta_url', 'CTA URL', $m['cta_url']) ?>
    </div>
    <div class="grid-2">
        <?= input_field('source_label', 'Quelle Label', $m['source_label']) ?>
        <?= input_field('source_url', 'Quelle URL', $m['source_url']) ?>
    </div>
    <label class="check"><input type="checkbox" name="is_featured" value="1" <?= $m['is_featured'] ? 'checked' : '' ?>> auf Startseite zeigen</label>
    <label class="check"><input type="checkbox" name="is_active" value="1" <?= $m['is_active'] ? 'checked' : '' ?>> aktiv</label>
    <button type="submit">Modul speichern</button>
</form>
<?php
}

function settings_view(): void
{
    $settings = db()->query('SELECT * FROM settings ORDER BY group_name, setting_key')->fetchAll();
    ?>
<h1>Einstellungen und Texte</h1>
<form class="edit-form" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="action" value="save_settings">
    <?php foreach ($settings as $s): ?>
        <?php if ($s['field_type'] === 'textarea'): ?>
            <label><?= e($s['label']) ?><textarea name="settings[<?= e($s['setting_key']) ?>]" rows="4"><?= e($s['setting_value']) ?></textarea><small><?= e($s['group_name']) ?> &middot; <?= e($s['setting_key']) ?></small></label>
        <?php else: ?>
            <label><?= e($s['label']) ?><input name="settings[<?= e($s['setting_key']) ?>]" value="<?= e($s['setting_value']) ?>"><small><?= e($s['group_name']) ?> &middot; <?= e($s['setting_key']) ?></small></label>
        <?php endif; ?>
    <?php endforeach; ?>
    <button type="submit">Einstellungen speichern</button>
</form>
<?php
}

function design_view(): void
{
    $tokens = db()->query('SELECT * FROM design_tokens ORDER BY token_key')->fetchAll();
    ?>
<h1>Design</h1>
<form class="edit-form" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="action" value="save_design">
    <div class="grid-2">
        <?php foreach ($tokens as $t): ?>
            <label><?= e($t['label']) ?>
                <input type="<?= $t['field_type'] === 'color' ? 'color' : 'text' ?>" name="tokens[<?= e($t['token_key']) ?>]" value="<?= e($t['token_value']) ?>">
                <small>--<?= e($t['token_key']) ?></small>
            </label>
        <?php endforeach; ?>
    </div>
    <button type="submit">Design speichern</button>
</form>
<?php
}

function leads_view(): void
{
    $id = (int) ($_GET['id'] ?? 0);
    if ($id) {
        $stmt = db()->prepare('SELECT * FROM leads WHERE id = ?');
        $stmt->execute([$id]);
        $lead = $stmt->fetch();
        if ($lead) {
            ?>
<h1>Lead #<?= (int) $lead['id'] ?></h1>
<section class="panel">
    <p><b><?= e($lead['name']) ?></b> &middot; <?= e($lead['company']) ?> &middot; <a href="mailto:<?= e($lead['email']) ?>"><?= e($lead['email']) ?></a></p>
    <p><?= nl2br(e($lead['message'])) ?></p>
    <form method="post" class="edit-form">
        <?= csrf_field() ?>
        <input type="hidden" name="action" value="lead_status">
        <input type="hidden" name="id" value="<?= (int) $lead['id'] ?>">
        <?= input_field('status', 'Status', $lead['status']) ?>
        <?= textarea_field('notes', 'Interne Notiz', $lead['notes']) ?>
        <button type="submit">Lead speichern</button>
    </form>
</section>
<?php
        }
    }
    $leads = db()->query('SELECT id, name, company, email, topic, status, created_at FROM leads ORDER BY created_at DESC LIMIT 200')->fetchAll();
    ?>
<h1>Leads</h1>
<div class="table">
    <?php foreach ($leads as $lead): ?>
        <a class="table-row" href="/admin/?view=leads&id=<?= (int) $lead['id'] ?>">
            <span><b><?= e($lead['name']) ?></b><small><?= e($lead['email']) ?></small></span>
            <span><?= e($lead['topic']) ?> &middot; <?= e($lead['company']) ?></span>
            <span><?= e($lead['status']) ?> &middot; <?= e($lead['created_at']) ?></span>
        </a>
    <?php endforeach; ?>
</div>
<?php
}

function account_view(): void
{
    $user = admin_user();
    $error = (string) ($_GET['error'] ?? '');
    ?>
<h1>Account</h1>
<?php if ($error === 'current'): ?><p class="alert">Das aktuelle Passwort stimmt nicht.</p><?php endif; ?>
<?php if ($error === 'new'): ?><p class="alert">Das neue Passwort muss mindestens 12 Zeichen haben und zweimal gleich eingegeben werden.</p><?php endif; ?>
<section class="panel">
    <p><b><?= e($user['email'] ?? '') ?></b></p>
    <form method="post" class="edit-form">
        <?= csrf_field() ?>
        <input type="hidden" name="action" value="change_password">
        <?= input_field('current_password', 'Aktuelles Passwort', '', 'password') ?>
        <?= input_field('new_password', 'Neues Passwort', '', 'password') ?>
        <?= input_field('new_password_repeat', 'Neues Passwort wiederholen', '', 'password') ?>
        <button type="submit">Passwort aendern</button>
    </form>
</section>
<?php
}

function input_field(string $name, string $label, mixed $value, string $type = 'text'): string
{
    return '<label>' . e($label) . '<input type="' . e($type) . '" name="' . e($name) . '" value="' . e($value) . '"></label>';
}

function textarea_field(string $name, string $label, mixed $value, int $rows = 5): string
{
    return '<label>' . e($label) . '<textarea name="' . e($name) . '" rows="' . (int) $rows . '">' . e($value) . '</textarea></label>';
}
