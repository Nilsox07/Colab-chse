# Vorab-Abgleich zum Lastenheft fuer unternehmenspflichten.de

Stand: 2026-06-18

## 1. Thema und abgeleitete Richtung

Thema: unternehmenspflichten.de

Die Seite wird als eigenstaendige B2B-Plattform fuer Betriebe positioniert, die Pruefungen, Fristen, Unterlagen und Nachweise verwalten wollen. Kein Rechtsberatungsprodukt, kein personalisierter Pflichtbescheid, keine Compliance-Garantie.

Kernversprechen:

> Nichts vergessen. Alles nachweisen koennen.

Haupt-Handlung:

> Kostenlosen Nachweisordner starten / Demo-Check ansehen / Kontakt aufnehmen.

Primaerer Besucher:

- B2B
- Deutschland
- Inhaber, Geschaeftsfuehrer, Verwaltung, Office Management, Hausverwaltung, Handwerk, kleine Industrie, Handel
- eher Desktop bei ernsthafter Einrichtung, aber mobil fuer Erstkontakt und schnelle Recherche

## 2. Design-Entscheidung

Designrichtung:

- ruhig
- vertrauenswuerdig
- sachlich
- modern
- keine verspielte Legal-Tech-Optik
- keine uebertriebene SaaS-Hero-Show

Farbwelt:

- heller Hintergrund
- dunkler Text
- eine klare Primaerfarbe fuer Aktionen
- eine zweite Akzentfarbe fuer Status/Ordner/Fristen
- viel Weissraum, aber nicht leer

Begruendung:

Die Zielgruppe will Ordnung, Kontrolle und Vertrauen. Die Seite darf nicht wie ein aggressiver Abmahn- oder Angst-Funnel wirken. Sie muss nach Werkzeug, Ablage, Nachweis und Betriebssicherheit aussehen.

## 3. Inhaltlicher Rahmen

Die Seite verkauft nicht:

- Rechtsberatung
- Steuerberatung
- Fachberatung
- rechtssichere Compliance
- Garantie, dass alle Pflichten erfuellt sind

Die Seite verkauft:

- Fristenverwaltung
- Nachweisordner
- Dokumentenablage
- Erinnerungen
- Export fuer Profis
- Themen-Sortierer ohne Rechtsurteil
- Partnervermittlung

## 4. Seitenstruktur nach Lastenheft

Pflichtseiten:

- Startseite
- Leistungen/Angebot
- Ueber uns
- Kontakt
- Impressum
- Datenschutz
- 404-Seite

Sinnvolle zusaetzliche Seiten fuer dieses Thema:

- Funktionen
- Branchen
- Preise
- Partner
- Sicherheit/Datenschutz
- Beispiel-Nachweisordner

Noch zu entscheiden beim Bau:

- Ob Preise direkt sichtbar sind oder nur "ab"-Preise.
- Ob "Demo starten" oder "Kostenlos testen" die Haupt-CTA wird.

Empfehlung:

- Haupt-CTA: "Nachweisordner starten"
- Zweit-CTA: "Beispiel ansehen"

## 5. Schema.org / strukturierte Daten

Umsetzung als JSON-LD, weil Google JSON-LD empfiehlt.

Geplante Typen:

- Organization fuer die Plattform/Betreiberdaten
- WebSite fuer die gesamte Website
- WebPage pro Seite
- BreadcrumbList pro Unterseite
- Service fuer die Angebotsseite/Funktionsseiten
- SoftwareApplication nur, wenn die Seite das SaaS-Produkt konkret beschreibt
- FAQPage nur, wenn die Fragen sichtbar auf der Seite stehen

Nicht automatisch nutzen:

- LocalBusiness, solange keine echte lokale Vor-Ort-Dienstleistung im Mittelpunkt steht
- Review/Rating, solange keine echten Bewertungen vorhanden sind
- Product mit Preis/Rating, solange kein klarer kaufbarer Online-Vertrag existiert

Wichtig:

- Strukturierte Daten muessen sichtbaren Seiteninhalt widerspiegeln.
- Rich Snippets sind moeglich, aber nicht garantiert.
- JSON-LD muss im Admin pro Seite ergaenzbar sein, aber serverseitig validiert/gesichert werden.

Quellen:

- Google Structured Data Guidelines: https://developers.google.com/search/docs/appearance/structured-data/sd-policies
- Google JSON-LD Empfehlung: https://developers.google.com/search/docs/appearance/structured-data/intro-structured-data
- Schema.org Organization: https://schema.org/Organization
- Schema.org LocalBusiness: https://schema.org/LocalBusiness
- Schema.org FAQPage: https://schema.org/FAQPage

## 6. Animationen

Viele kleine Animationen sind sinnvoll, aber nur subtil:

- sanfte Fade-/Slide-In-Effekte beim Scrollen
- Hover-Animationen auf Buttons und Karten
- leichte Status-/Fristen-Highlights
- dezente Linien-/Ordner-/Dokument-Bewegungen im Hero
- kleine Counter/Progress-Indikatoren
- aktive Navigations-/Fokuszustaende
- Mikrointeraktionen beim Formular

Nicht nutzen:

- nervige Parallax-Effekte
- dauerblinkende Elemente
- grosse Autoplay-Bewegungen
- Animationen, die Layout verschieben

Pflicht:

- prefers-reduced-motion respektieren
- keine CLS-Probleme erzeugen
- Animationen nur mit CSS/kleinem Vanilla-JS

## 7. Technische Muss-Punkte aus dem Lastenheft

Stack:

- PHP 8.1+
- Flat-File JSON
- HTML/CSS/Vanilla-JS
- keine Composer-/Node-Pflicht auf dem Server
- keine externen CDNs
- lokale Schriften/Assets

Admin:

- Login mit password_hash/password_verify
- CSRF
- Brute-Force-Bremse
- HTML-Whitelist fuer Editorinhalte
- Bildupload mit Typ-/Groessenpruefung
- SEO-Felder pro Seite
- JSON-LD pro Seite
- Theme-Werte zentral editierbar

SEO:

- sprechende URLs per .htaccess
- Canonical pro Seite
- noindex-Schalter
- sitemap.xml
- robots.txt
- Open Graph
- Breadcrumbs
- llms.txt

Performance:

- WebP
- srcset
- width/height
- lazy loading
- Gzip/Brotli und Cache in .htaccess
- schlankes CSS/JS

Recht:

- Impressum
- Datenschutz
- Kontaktformular mit Einwilligung
- keine Cookie-Banner, solange keine Cookies/externes Tracking
- Statistik zuerst ueber All-Inkl/AWStats dokumentieren, sonst Matomo cookielos als Option

## 8. Noch unklar / mit Platzhalter zu loesen

Diese Punkte sind nicht blockierend, muessen aber als Platzhalter/Admin-Feld/README-Hinweis umgesetzt werden:

- Betreibername fuer Impressum
- vollstaendige Adresse
- Telefonnummer
- E-Mail-Adresse
- Umsatzsteuer-ID, falls vorhanden
- Verantwortlicher fuer Datenschutz
- SMTP-Zugangsdaten
- Empfaengeradresse fuer Kontaktformular
- finale Domain mit www/non-www
- finales Logo
- echte Produkt-/Preisnamen
- alte URLs fuer 301-Weiterleitungen, falls es eine Vorgaengerseite gibt
- ob All-Inkl-Statistik genutzt werden kann
- ob spaeter Online-Vertragsschluss/Checkout kommt; dann BFSG-Frage neu pruefen

Umsetzung:

- nicht nachfragen
- realistische Platzhalter einbauen
- alles im Admin aenderbar machen
- README mit Go-Live-Checkliste schreiben

## 9. BFSG-Einschaetzung

Wenn die Website nur B2B-Information, Kontaktformular und Demo-Anfrage anbietet, ist BFSG wahrscheinlich nicht der zentrale Pflichtfall.

Wenn spaeter ein Online-Vertrag, Checkout, Buchung oder Verbraucherleistung eingebaut wird, muss die BFSG-Frage neu geprueft werden.

Unabhaengig davon wird barrierearm gebaut:

- semantisches HTML
- Skip-Link
- Tastaturbedienung
- Fokus sichtbar
- Kontraste
- Labels
- Alt-Texte

## 10. To-do vor dem Bau

1. Ordnerstruktur festlegen.
2. PHP-Router fuer sprechende URLs bauen.
3. Content-/Settings-JSON anlegen.
4. Admin mit Login, CSRF, Brute-Force und Editor bauen.
5. Theme-System mit CSS-Variablen bauen.
6. Seiten-Templates bauen.
7. Startseiteninhalt auf RDG-sicheres Konzept ausrichten.
8. Schema.org-JSON-LD zentral erzeugen und pro Seite erweiterbar machen.
9. Kontaktformular mit SMTP-Konfig-Platzhalter bauen.
10. README und Go-Live-Checkliste erstellen.
11. Tests: Links, Formularvalidierung, Admin, SEO-Ausgabe, responsive Darstellung.

## 11. Aktuell schwachster Punkt

Der groesste offene Punkt ist nicht Technik, sondern die echten Betreiber-/Kontakt-/Impressumsdaten und SMTP-Daten. Ohne diese kann die Seite technisch fertig gebaut werden, aber nicht live-rechtlich final sein.

Zweiter Punkt: Statistik. Aus der lokalen Umgebung kann nicht geprueft werden, ob All-Inkl/AWStats im Hosting aktiv ist. Das muss als README-Go-Live-Schritt markiert werden.
