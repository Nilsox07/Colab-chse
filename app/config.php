<?php
declare(strict_types=1);

/*
 * Basiskonfiguration.
 *
 * Fuer den Live-Betrieb kann eine app/config.local.php mit denselben Keys
 * angelegt werden. Diese Datei bleibt bewusst ohne Zugangsdaten.
 */
return [
    'app' => [
        'name' => 'Unternehmenspflichten.de',
        'base_url' => 'https://unternehmenspflichten.de',
        'env' => 'production',
        'force_https' => true,
        'pretty_urls' => false,
        'setup_token' => 'change-this-token-before-upload',
        'timezone' => 'Europe/Berlin',
    ],
    'db' => [
        'host' => 'localhost',
        'port' => 3306,
        'name' => '',
        'user' => '',
        'pass' => '',
        'charset' => 'utf8mb4',
    ],
    'mail' => [
        'enabled' => false,
        'from' => 'kontakt@unternehmenspflichten.de',
        'to' => 'kontakt@unternehmenspflichten.de',
    ],
    'security' => [
        'session_name' => 'up_session',
        'max_login_attempts' => 8,
        'lock_minutes' => 20,
        'upload_max_bytes' => 2097152,
    ],
];
