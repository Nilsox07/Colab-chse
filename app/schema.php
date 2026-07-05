<?php
declare(strict_types=1);

function create_schema(): void
{
    $pdo = db();
    $pdo->exec("CREATE TABLE IF NOT EXISTS admins (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(190) NOT NULL UNIQUE,
        password_hash VARCHAR(255) NOT NULL,
        role VARCHAR(50) NOT NULL DEFAULT 'owner',
        failed_logins INT NOT NULL DEFAULT 0,
        locked_until DATETIME NULL,
        last_login_at DATETIME NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $pdo->exec("CREATE TABLE IF NOT EXISTS pages (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        slug VARCHAR(190) NOT NULL UNIQUE,
        nav_label VARCHAR(190) NOT NULL,
        title VARCHAR(255) NOT NULL,
        hero_title VARCHAR(255) NOT NULL,
        hero_subtitle TEXT NULL,
        cta_label VARCHAR(190) NULL,
        cta_url VARCHAR(255) NULL,
        body_html MEDIUMTEXT NULL,
        meta_title VARCHAR(255) NULL,
        meta_description TEXT NULL,
        og_title VARCHAR(255) NULL,
        og_description TEXT NULL,
        og_image VARCHAR(255) NULL,
        canonical VARCHAR(255) NULL,
        json_ld MEDIUMTEXT NULL,
        noindex TINYINT(1) NOT NULL DEFAULT 0,
        is_published TINYINT(1) NOT NULL DEFAULT 1,
        show_in_nav TINYINT(1) NOT NULL DEFAULT 1,
        sort_order INT NOT NULL DEFAULT 100,
        updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $pdo->exec("CREATE TABLE IF NOT EXISTS modules (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        slug VARCHAR(190) NOT NULL UNIQUE,
        category VARCHAR(120) NOT NULL,
        status VARCHAR(40) NOT NULL DEFAULT 'roadmap',
        title VARCHAR(255) NOT NULL,
        headline VARCHAR(255) NOT NULL,
        summary TEXT NOT NULL,
        audience TEXT NULL,
        includes_text TEXT NULL,
        boundary_text TEXT NULL,
        cta_label VARCHAR(190) NULL,
        cta_url VARCHAR(255) NULL,
        source_label VARCHAR(255) NULL,
        source_url VARCHAR(255) NULL,
        is_featured TINYINT(1) NOT NULL DEFAULT 0,
        is_active TINYINT(1) NOT NULL DEFAULT 1,
        sort_order INT NOT NULL DEFAULT 100,
        updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $pdo->exec("CREATE TABLE IF NOT EXISTS faqs (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        owner_type VARCHAR(40) NOT NULL DEFAULT 'global',
        owner_slug VARCHAR(190) NOT NULL DEFAULT '',
        question VARCHAR(255) NOT NULL,
        answer TEXT NOT NULL,
        sort_order INT NOT NULL DEFAULT 100,
        is_active TINYINT(1) NOT NULL DEFAULT 1
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $pdo->exec("CREATE TABLE IF NOT EXISTS settings (
        setting_key VARCHAR(190) PRIMARY KEY,
        setting_value MEDIUMTEXT NULL,
        label VARCHAR(190) NOT NULL,
        group_name VARCHAR(80) NOT NULL DEFAULT 'general',
        field_type VARCHAR(40) NOT NULL DEFAULT 'text'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $pdo->exec("CREATE TABLE IF NOT EXISTS design_tokens (
        token_key VARCHAR(120) PRIMARY KEY,
        token_value VARCHAR(255) NOT NULL,
        label VARCHAR(190) NOT NULL,
        field_type VARCHAR(40) NOT NULL DEFAULT 'text'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $pdo->exec("CREATE TABLE IF NOT EXISTS leads (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(190) NOT NULL,
        company VARCHAR(190) NULL,
        email VARCHAR(190) NOT NULL,
        phone VARCHAR(80) NULL,
        topic VARCHAR(190) NULL,
        message TEXT NOT NULL,
        consent TINYINT(1) NOT NULL DEFAULT 0,
        status VARCHAR(40) NOT NULL DEFAULT 'new',
        notes TEXT NULL,
        ip_hash VARCHAR(64) NULL,
        user_agent VARCHAR(255) NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    $pdo->exec("CREATE TABLE IF NOT EXISTS audit_logs (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        admin_id INT UNSIGNED NULL,
        action VARCHAR(190) NOT NULL,
        target VARCHAR(190) NULL,
        meta_json TEXT NULL,
        ip_hash VARCHAR(64) NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        INDEX (created_at),
        INDEX (admin_id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
}

function seed_defaults(): void
{
    seed_settings();
    seed_design();
    seed_pages();
    seed_modules();
    seed_faqs();
}

function upsert_setting(string $key, string $value, string $label, string $group = 'general', string $type = 'text'): void
{
    $stmt = db()->prepare('INSERT INTO settings (setting_key, setting_value, label, group_name, field_type)
        VALUES (?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE label = VALUES(label), group_name = VALUES(group_name), field_type = VALUES(field_type)');
    $stmt->execute([$key, $value, $label, $group, $type]);
}

function upsert_design(string $key, string $value, string $label, string $type = 'text'): void
{
    $stmt = db()->prepare('INSERT INTO design_tokens (token_key, token_value, label, field_type)
        VALUES (?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE label = VALUES(label), field_type = VALUES(field_type)');
    $stmt->execute([$key, $value, $label, $type]);
}

// Startinhalte stammen aus app/content_defaults.php (gemeinsame Quelle fuer
// DB-Seed und Vorschau-Fallback). Hier nur noch in die Datenbank schreiben.

function seed_settings(): void
{
    foreach (content_defaults()['settings'] as $key => $s) {
        upsert_setting((string) $key, $s[0], $s[1], $s[2], $s[3]);
    }
}

function seed_design(): void
{
    foreach (content_defaults()['design'] as $key => $d) {
        upsert_design((string) $key, $d[0], $d[1], $d[2]);
    }
}

function seed_pages(): void
{
    $stmt = db()->prepare('INSERT INTO pages (slug, nav_label, title, hero_title, hero_subtitle, cta_label, cta_url, body_html, meta_title, meta_description, sort_order, show_in_nav)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE nav_label = VALUES(nav_label), sort_order = VALUES(sort_order), show_in_nav = VALUES(show_in_nav)');
    foreach (content_defaults()['pages'] as $p) {
        $stmt->execute($p);
    }
}

function seed_modules(): void
{
    $stmt = db()->prepare('INSERT INTO modules (slug, category, status, title, headline, summary, audience, includes_text, boundary_text, cta_label, cta_url, source_label, source_url, is_featured, is_active, sort_order)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE category = VALUES(category), status = VALUES(status), sort_order = VALUES(sort_order)');
    foreach (content_defaults()['modules'] as $m) {
        $stmt->execute($m);
    }
}

function seed_faqs(): void
{
    $stmt = db()->prepare('INSERT INTO faqs (owner_type, owner_slug, question, answer, sort_order)
        SELECT ?, ?, ?, ?, ? FROM DUAL
        WHERE NOT EXISTS (SELECT 1 FROM faqs WHERE owner_type = ? AND owner_slug = ? AND question = ?)');
    foreach (content_defaults()['faqs'] as $f) {
        $stmt->execute([$f[0], $f[1], $f[2], $f[3], $f[4], $f[0], $f[1], $f[2]]);
    }
}

function create_admin_if_missing(string $email, string $password): void
{
    $count = (int) db()->query('SELECT COUNT(*) FROM admins')->fetchColumn();
    if ($count > 0) {
        return;
    }
    $stmt = db()->prepare('INSERT INTO admins (email, password_hash, role, created_at) VALUES (?, ?, "owner", NOW())');
    $stmt->execute([$email, password_hash($password, PASSWORD_DEFAULT)]);
}
