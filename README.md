# Unternehmenspflichten.de

Schlanke Marketing-Website mit eigenem CMS fuer eine geplante B2B-Nachweisplattform.
Betriebe, Haendler und deren Berater verwalten damit spaeter Fristen, Pflichtnachweise,
Portalbelege und Exportordner. Die Website selbst ist der Lead- und SEO-Kanal; das
eigentliche SaaS-Produkt entsteht in spaeteren Ausbaustufen (siehe `STRATEGIE.md`).

Leitplanke ueberall: **keine Rechtsberatung**. Die Plattform organisiert Nachweise und
Fristen, die fachliche Bewertung bleibt bei Betrieb und Beratern (RDG-Grenze).

## Stack

- PHP 8.1+ (keine Composer-/Node-Pflicht auf dem Server)
- MySQL/MariaDB (PDO, `utf8mb4`)
- HTML/CSS/Vanilla-JS, keine externen CDNs
- Theme ueber CSS-Variablen aus der Datenbank (im Admin editierbar)

## Projektstruktur

| Pfad | Zweck |
|------|-------|
| `index.php` | Frontend-Router und Seiten-/Modul-Templates |
| `admin/` | Login, CRUD fuer Seiten/Module/FAQ/Einstellungen/Design/Leads |
| `app/bootstrap.php` | Config laden, Session, PDO-Singleton |
| `app/helpers.php` | Escaping, CSRF, HTML-Whitelist, Settings, Auth, Audit-Log |
| `app/schema.php` | Tabellen anlegen und Startinhalte seeden |
| `app/config.php` | Basiskonfiguration ohne Zugangsdaten |
| `app/config.local.sample.php` | Vorlage fuer die lokale Konfiguration |
| `install.php` | Setup-Routine (Schema + Seed + erster Admin), Token-geschuetzt |
| `sitemap.php`, `robots.txt`, `llms.txt` | SEO-Basics |
| `assets/` | Theme-CSS, Favicon, Vanilla-JS |

## Lokale Einrichtung

1. `app/config.local.php` aus `app/config.local.sample.php` erzeugen und mit echten
   DB-Daten und einem langen, zufaelligen `setup_token` befuellen. Diese Datei ist
   ueber `.gitignore` ausgeschlossen und darf **nie** committet werden.
2. Datenbank anlegen (`utf8mb4`).
3. `install.php?token=DEIN_TOKEN` aufrufen, Admin-E-Mail und ein Passwort mit
   mindestens 12 Zeichen vergeben. Die Routine legt Tabellen an und seedet Inhalte.
4. Admin unter `/admin/` erreichbar.

## Vorschau-/Demo-Modus ohne Datenbank

Ist keine Datenbank erreichbar (z. B. bei einem Vercel-Deployment ohne MySQL),
faellt die Seite automatisch in einen Vorschau-Modus: Alle oeffentlichen Seiten,
Module und Ratgeber rendern das volle Design aus `app/content_defaults.php`
(gemeinsame Quelle mit dem DB-Seed). Ein dezentes Banner weist darauf hin, und das
Kontaktformular speichert nichts. Sobald eine echte Datenbank angebunden und per
`install.php` eingerichtet ist, uebernimmt automatisch der Datenbankinhalt – ohne
Code-Aenderung. Der Admin-Bereich braucht eine Datenbank und ist im Vorschau-Modus
nicht nutzbar.

Hinweis Vercel: PHP ist dort nur ueber ein Community-Runtime moeglich, Sessions und
Datei-Uploads sind nicht persistent. Fuer den Live-Betrieb mit Datenbank und Admin
ist klassisches PHP-Hosting vorgesehen (siehe Go-Live-Checkliste). Interne Links
laufen ueber `?route=` und funktionieren auch ohne mod_rewrite.

Die mitgelieferte `vercel.json` aktiviert das PHP-Runtime (`vercel-php`), liefert
statische Dateien direkt aus und leitet Seitenaufrufe an `index.php`. Ohne diese
Datei wuerde Vercel `index.php` nur als Download ausliefern. Im Vercel-Projekt als
Framework-Preset "Other" (ohne Build-Command) belassen. `.htaccess` wird auf Vercel
ignoriert; der Schutz von `app/` erfolgt dort ueber `vercel.json`.

## Sicherheit (wichtig vor Go-Live)

- **Zugangsdaten rotieren:** In einer frueheren Repo-Version lagen echte DB-Zugangsdaten
  und ein Setup-Token in `app/config.local.php`. Diese gelten als kompromittiert.
  DB-Passwort und Setup-Token neu setzen, bevor die Seite live geht.
- `app/config.local.php` ist jetzt untracked (`.gitignore`); auf dem Server manuell anlegen.
- Nach der Installation `install.php` entfernen oder das Token aendern.
- `admin/` und `app/` sind in `robots.txt` gesperrt; zusaetzlich per Server-Konfiguration
  (Verzeichnisschutz) absichern.

## Go-Live-Checkliste

Technik:

- [ ] `config.local.php` mit echten Werten, neues DB-Passwort, neues `setup_token`
- [ ] Installation ausgefuehrt, Admin-Login funktioniert
- [ ] `install.php` entfernt/gesperrt
- [ ] `.htaccess` liegt im Web-Root (erzwingt HTTPS, Verzeichnisschutz, Caching);
      `app/.htaccess` sperrt das Applikationsverzeichnis
- [ ] optional sprechende URLs: `'pretty_urls' => true` unter `app` in `config.local.php`
      (nur mit mod_rewrite; ohne bleibt `/index.php?route=...` aktiv und funktioniert)
- [ ] `sitemap.php` und `robots.txt` erreichbar

Inhalt und Recht (im Admin editierbar):

- [ ] Impressum: Betreiber, Anschrift, E-Mail, ggf. USt-ID
- [ ] Datenschutzerklaerung final geprueft
- [ ] Kontakt-E-Mail und Empfaengeradresse fuer Leads
- [ ] Startseiten- und Modultexte gegen die Positionierung gegengelesen
- [ ] SEO: Meta-Titel/Description je Seite, Canonical, Open Graph

Statistik/Mail (hostingabhaengig):

- [ ] Zugriffsstatistik geklaert (z. B. AWStats beim Hoster oder cookielos Matomo)
- [ ] SMTP fuer spaeteren Mailversand vorbereiten (aktuell werden Leads nur in der DB gespeichert)

## Inhaltliche Startausrichtung

Der Launch fuehrt bewusst mit der **Produkt-/Haendler-Nachweisakte** (GPSR, VerpackG/LUCID,
neue EU-Pflichten) als staerkstem Keil; Pruef-/Fristen-Tracker, KI-Verordnungs-Akte und das
Kanzlei-/Berater-Cockpit folgen. Konkrete SEO-Landingpages liegen als Seiten im CMS vor
(GPSR, LUCID, DGUV V3, E-Rechnung, KI-Verordnung, Offenlegung). Begruendung und
Ausbaustufen stehen in `STRATEGIE.md`.
