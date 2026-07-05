<?php
// Vercel-Einstieg: delegiert an die echte Anwendung im Projekt-Root.
// So bleibt die App unveraendert auch auf klassischem PHP-Hosting lauffaehig.
require dirname(__DIR__) . '/index.php';
