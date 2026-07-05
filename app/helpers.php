<?php
declare(strict_types=1);

function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function url(string $path = ''): string
{
    $base = rtrim((string) app_config('app.base_url', ''), '/');
    $path = '/' . ltrim($path, '/');
    return $base . ($path === '/' ? '' : $path);
}

function path_url(string $path = ''): string
{
    $path = '/' . ltrim($path, '/');
    return $path === '/' ? '/' : $path;
}

function route_url(string $route = 'home'): string
{
    $route = trim($route, '/');
    if ($route === '' || $route === 'home') {
        return '/';
    }
    if (app_config('app.pretty_urls', false)) {
        return '/' . $route;
    }
    return '/index.php?route=' . rawurlencode($route);
}

function absolute_route_url(string $route = 'home'): string
{
    return url(route_url($route));
}

function cms_url(string $target): string
{
    $target = trim($target);
    if ($target === '') {
        return '#';
    }
    if (preg_match('/^(https?:|mailto:|tel:|#)/i', $target)) {
        return $target;
    }
    $path = trim(parse_url($target, PHP_URL_PATH) ?: '', '/');
    if ($path === '') {
        return '/';
    }
    return route_url($path);
}

function current_path(): string
{
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    return '/' . trim($path, '/');
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrf_field(): string
{
    return '<input type="hidden" name="csrf_token" value="' . e(csrf_token()) . '">';
}

function require_csrf(): void
{
    $token = (string) ($_POST['csrf_token'] ?? '');
    if ($token === '' || !hash_equals((string) ($_SESSION['csrf_token'] ?? ''), $token)) {
        http_response_code(400);
        exit('Ungueltige Formularanfrage.');
    }
}

function redirect(string $path): never
{
    header('Location: ' . $path);
    exit;
}

function sanitize_html(string $html): string
{
    $allowed = '<p><br><strong><b><em><i><ul><ol><li><a><h2><h3><h4><blockquote><table><thead><tbody><tr><th><td><span>';
    $clean = strip_tags($html, $allowed);
    $clean = preg_replace('/\s+on[a-z]+\s*=\s*(".*?"|\'.*?\'|[^\s>]+)/i', '', $clean) ?? $clean;
    $clean = preg_replace('/href\s*=\s*("|\')\s*javascript:[^"\']*("|\')/i', 'href="#"', $clean) ?? $clean;
    $clean = preg_replace('/style\s*=\s*(".*?"|\'.*?\')/i', '', $clean) ?? $clean;
    return $clean;
}

function slugify(string $value): string
{
    $value = strtolower(trim($value));
    $map = ["\xC3\xA4" => 'ae', "\xC3\xB6" => 'oe', "\xC3\xBC" => 'ue', "\xC3\x84" => 'ae', "\xC3\x96" => 'oe', "\xC3\x9C" => 'ue', "\xC3\x9F" => 'ss'];
    $value = strtr($value, $map);
    $value = preg_replace('/[^a-z0-9]+/', '-', $value) ?? $value;
    return trim($value, '-') ?: 'seite';
}

function json_encode_pretty(mixed $value): string
{
    return json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?: '{}';
}

function content_defaults(): array
{
    static $data = null;
    if ($data === null) {
        $data = require APP_DIR . '/content_defaults.php';
    }
    return $data;
}

/**
 * Ist eine eingerichtete Datenbank erreichbar? Wenn nicht, laeuft die Seite im
 * Vorschau-/Demo-Modus und liefert die Standard-Inhalte aus content_defaults.php.
 */
function db_ready(): bool
{
    static $ready = null;
    if ($ready !== null) {
        return $ready;
    }
    try {
        $ready = table_exists('pages') && table_exists('modules');
    } catch (Throwable) {
        $ready = false;
    }
    return $ready;
}

function fallback_page(array $t): array
{
    return [
        'id' => 0,
        'slug' => $t[0], 'nav_label' => $t[1], 'title' => $t[2],
        'hero_title' => $t[3], 'hero_subtitle' => $t[4],
        'cta_label' => $t[5], 'cta_url' => $t[6], 'body_html' => $t[7],
        'meta_title' => $t[8], 'meta_description' => $t[9],
        'sort_order' => (int) $t[10], 'show_in_nav' => (int) $t[11],
        'og_title' => '', 'og_description' => '', 'og_image' => '',
        'canonical' => '', 'json_ld' => '', 'noindex' => 0, 'is_published' => 1,
        'updated_at' => '2026-07-01 00:00:00',
    ];
}

function fallback_module(array $t): array
{
    return [
        'id' => 0,
        'slug' => $t[0], 'category' => $t[1], 'status' => $t[2], 'title' => $t[3],
        'headline' => $t[4], 'summary' => $t[5], 'audience' => $t[6], 'includes_text' => $t[7],
        'boundary_text' => $t[8], 'cta_label' => $t[9], 'cta_url' => $t[10],
        'source_label' => $t[11], 'source_url' => $t[12],
        'is_featured' => (int) $t[13], 'is_active' => (int) $t[14], 'sort_order' => (int) $t[15],
        'updated_at' => '2026-07-01 00:00:00',
    ];
}

function setting(string $key, mixed $default = ''): mixed
{
    static $cache = null;
    if ($cache === null) {
        $cache = [];
        if (db_ready()) {
            foreach (db()->query('SELECT setting_key, setting_value FROM settings') as $row) {
                $cache[$row['setting_key']] = $row['setting_value'];
            }
        } else {
            foreach (content_defaults()['settings'] as $k => $s) {
                $cache[$k] = $s[0];
            }
        }
    }
    return $cache[$key] ?? $default;
}

function design_tokens(): array
{
    static $tokens = null;
    if ($tokens !== null) {
        return $tokens;
    }
    $tokens = [];
    if (db_ready()) {
        foreach (db()->query('SELECT token_key, token_value FROM design_tokens') as $row) {
            $tokens[$row['token_key']] = $row['token_value'];
        }
    } else {
        foreach (content_defaults()['design'] as $k => $d) {
            $tokens[$k] = $d[0];
        }
    }
    return $tokens;
}

function admin_user(): ?array
{
    if (empty($_SESSION['admin_id']) || !table_exists('admins')) {
        return null;
    }
    $stmt = db()->prepare('SELECT id, email, role FROM admins WHERE id = ?');
    $stmt->execute([(int) $_SESSION['admin_id']]);
    $user = $stmt->fetch();
    return $user ?: null;
}

function require_admin(): array
{
    $user = admin_user();
    if (!$user) {
        redirect('/admin/?view=login');
    }
    return $user;
}

function audit_log(string $action, string $target = '', array $meta = []): void
{
    if (!table_exists('audit_logs')) {
        return;
    }
    $userId = $_SESSION['admin_id'] ?? null;
    $stmt = db()->prepare('INSERT INTO audit_logs (admin_id, action, target, meta_json, ip_hash, created_at) VALUES (?, ?, ?, ?, ?, NOW())');
    $stmt->execute([
        $userId,
        $action,
        $target,
        json_encode($meta, JSON_UNESCAPED_UNICODE),
        hash('sha256', (string) ($_SERVER['REMOTE_ADDR'] ?? '')),
    ]);
}

function page_by_slug(string $slug): ?array
{
    if (!db_ready()) {
        foreach (content_defaults()['pages'] as $p) {
            if ($p[0] === $slug) {
                return fallback_page($p);
            }
        }
        return null;
    }
    $stmt = db()->prepare('SELECT * FROM pages WHERE slug = ? AND is_published = 1 LIMIT 1');
    $stmt->execute([$slug]);
    $page = $stmt->fetch();
    return $page ?: null;
}

function module_by_slug(string $slug): ?array
{
    if (!db_ready()) {
        foreach (content_defaults()['modules'] as $m) {
            if ($m[0] === $slug && (int) $m[14] === 1) {
                return fallback_module($m);
            }
        }
        return null;
    }
    $stmt = db()->prepare('SELECT * FROM modules WHERE slug = ? AND is_active = 1 LIMIT 1');
    $stmt->execute([$slug]);
    $module = $stmt->fetch();
    return $module ?: null;
}

function all_modules(bool $featuredOnly = false): array
{
    if (!db_ready()) {
        $out = [];
        foreach (content_defaults()['modules'] as $m) {
            if ((int) $m[14] !== 1) {
                continue;
            }
            if ($featuredOnly && (int) $m[13] !== 1) {
                continue;
            }
            $out[] = fallback_module($m);
        }
        usort($out, static fn(array $a, array $b): int => $a['sort_order'] <=> $b['sort_order']);
        return $out;
    }
    $sql = 'SELECT * FROM modules WHERE is_active = 1';
    if ($featuredOnly) {
        $sql .= ' AND is_featured = 1';
    }
    $sql .= ' ORDER BY sort_order ASC, title ASC';
    return db()->query($sql)->fetchAll();
}

function status_label(string $status): string
{
    return match ($status) {
        'start' => 'Startmodul',
        'next' => 'Naechster Ausbau',
        'partner' => 'Partner-/Beraterthema',
        'roadmap' => 'Roadmap',
        default => 'Modul',
    };
}
