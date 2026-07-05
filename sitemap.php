<?php
declare(strict_types=1);
require __DIR__ . '/app/bootstrap.php';
header('Content-Type: application/xml; charset=UTF-8');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
if (db_ready()) {
    try {
        foreach (db()->query('SELECT slug, updated_at FROM pages WHERE is_published = 1 AND noindex = 0') as $page) {
            $loc = absolute_route_url($page['slug'] === 'home' ? 'home' : $page['slug']);
            echo "  <url><loc>" . e($loc) . "</loc><lastmod>" . e(date('Y-m-d', strtotime($page['updated_at']))) . "</lastmod></url>\n";
        }
        foreach (db()->query('SELECT slug, updated_at FROM modules WHERE is_active = 1') as $module) {
            echo "  <url><loc>" . e(absolute_route_url('modul/' . $module['slug'])) . "</loc><lastmod>" . e(date('Y-m-d', strtotime($module['updated_at']))) . "</lastmod></url>\n";
        }
    } catch (Throwable) {
        echo "  <url><loc>" . e(url('/')) . "</loc></url>\n";
    }
} else {
    // Vorschau-Modus ohne Datenbank: Standard-Inhalte aus content_defaults.php
    foreach (content_defaults()['pages'] as $p) {
        $loc = absolute_route_url($p[0] === 'home' ? 'home' : $p[0]);
        echo "  <url><loc>" . e($loc) . "</loc></url>\n";
    }
    foreach (content_defaults()['modules'] as $m) {
        if ((int) $m[14] !== 1) {
            continue;
        }
        echo "  <url><loc>" . e(absolute_route_url('modul/' . $m[0])) . "</loc></url>\n";
    }
}
echo "</urlset>\n";
