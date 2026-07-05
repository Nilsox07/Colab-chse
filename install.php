<?php
declare(strict_types=1);
require __DIR__ . '/app/bootstrap.php';

$configured = !empty(app_config('db.name')) && !empty(app_config('db.user'));
$token = (string) ($_GET['token'] ?? $_POST['token'] ?? '');
$tokenOk = hash_equals((string) app_config('app.setup_token'), $token);
$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_csrf();
    if (!$tokenOk) {
        $error = 'Setup-Token ist ungültig.';
    } elseif (!$configured) {
        $error = 'Datenbankdaten fehlen in app/config.local.php.';
    } else {
        try {
            create_schema();
            seed_defaults();
            $email = trim((string) ($_POST['email'] ?? ''));
            $password = (string) ($_POST['password'] ?? '');
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 12) {
                $error = 'Bitte gültige E-Mail und ein Admin-Passwort mit mindestens 12 Zeichen angeben.';
            } else {
                create_admin_if_missing($email, $password);
                audit_log('install', 'schema');
                $message = 'Installation/Migration abgeschlossen. Admin ist unter /admin/ erreichbar.';
            }
        } catch (Throwable $e) {
            $error = 'Installation fehlgeschlagen: ' . $e->getMessage();
        }
    }
}
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Installation Unternehmenspflichten.de</title>
    <style>
        body{font-family:Arial,sans-serif;background:#f6f7f4;color:#17211d;margin:0;padding:40px}
        main{max-width:760px;margin:auto;background:#fff;border:1px solid #d9ded8;border-radius:8px;padding:28px}
        label{display:grid;gap:6px;margin:14px 0;font-weight:700}
        input{min-height:42px;padding:8px 10px;border:1px solid #cfd6d1;border-radius:6px;font:inherit}
        button{min-height:44px;border:0;border-radius:8px;background:#0f5b55;color:#fff;font-weight:700;padding:0 18px}
        .ok{color:#2f7d4f}.err{color:#a63a2b}.note{color:#5b6762}
        code{background:#edf1ee;padding:2px 5px;border-radius:4px}
    </style>
</head>
<body>
<main>
    <h1>Installation</h1>
    <p class="note">Diese Routine legt Tabellen an, seedet Startinhalte und erstellt den ersten Admin, falls noch keiner existiert.</p>
    <?php if (!$configured): ?>
        <p class="err">Datenbank ist noch nicht konfiguriert. Lege <code>app/config.local.php</code> anhand der Beispieldatei an.</p>
    <?php endif; ?>
    <?php if (!$tokenOk): ?>
        <p class="err">Öffne diese Seite mit gültigem Setup-Token: <code>/install.php?token=...</code></p>
    <?php endif; ?>
    <?php if ($message): ?><p class="ok"><?= e($message) ?></p><?php endif; ?>
    <?php if ($error): ?><p class="err"><?= e($error) ?></p><?php endif; ?>
    <form method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="token" value="<?= e($token) ?>">
        <label>Admin E-Mail <input type="email" name="email" required value="admin@unternehmenspflichten.de"></label>
        <label>Admin Passwort <input type="password" name="password" required minlength="12"></label>
        <button type="submit">Installieren / migrieren</button>
    </form>
    <p class="note">Nach erfolgreicher Installation sollte das Setup-Token geändert oder die Datei per FTP entfernt werden.</p>
</main>
</body>
</html>

