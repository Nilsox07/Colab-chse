# Lastenheft-Erweiterung fuer unternehmenspflichten.de

Stand: 2026-06-18

Diese Datei ergaenzt `lastenheft_webseite.md`. Das urspruengliche Lastenheft ist gut fuer eine editierbare Website. Fuer unternehmenspflichten.de fehlen aber einige Punkte, damit daraus ein tragfaehiges Verkaufs-, SEO-/GEO-, Admin- und spaeteres SaaS-Fundament wird.

## 1. Wichtigste neue Erkenntnisse

### FAQ-Rich-Results nicht mehr als SEO-Hebel einplanen

Google zeigt FAQ-Rich-Results seit Mai 2026 nicht mehr in der Suche an und entfernt/entfernte die FAQ-Search-Appearance aus den Tools.

Folge:

- FAQ-Inhalte weiterhin bauen, weil sie fuer Nutzer, GEO und interne Suche gut sind.
- FAQPage-Schema nur nutzen, wenn echte sichtbare FAQ auf der Seite stehen.
- Nicht als "Rich-Snippet-Hebel" verkaufen oder einplanen.

Quelle:

- Google FAQPage structured data: https://developers.google.com/search/docs/appearance/structured-data/faqpage
- Google Search Updates: https://developers.google.com/search/updates

### GEO/AI-Suche ist kein eigenes Trick-System

Google schreibt fuer AI Features keinen geheimen Sonderstandard vor. Die Grundlage bleibt: crawlbare Inhalte, gute Seitenstruktur, klare Quellen, strukturierte Daten, hilfreiche Inhalte.

Folge:

- GEO/AEO ueber klare Antwortbloecke, Quellen, Entities, Themenstruktur und interne Links bauen.
- Kein "KI-Ranking-Versprechen" machen.
- `llms.txt` als billige Zukunftswette behalten, aber nicht als Rankingmassnahme verkaufen.

Quelle:

- Google AI Features and your website: https://developers.google.com/search/docs/appearance/ai-features
- Google SEO Starter Guide: https://developers.google.com/search/docs/fundamentals/seo-starter-guide

### WCAG 2.2 AA als Ziel nehmen

Das Lastenheft nennt WCAG 2.1 AA. Besser ist WCAG 2.2 AA als Bauziel, weil WCAG 2.2 neuer ist und 2.1/2.0 mit abdeckt.

Zusaetzlich beachten:

- sichtbarer Fokus
- Fokus darf nicht verdeckt werden
- Mindestgroesse/Abstand fuer Klickziele
- keine Pflicht zu Dragging ohne Alternative
- keine doppelte Eingabe unnoetig abfragen
- einfache Authentifizierung
- Hilfe/Kontakt konsistent platzieren

Quelle:

- WCAG 2.2: https://www.w3.org/TR/WCAG22/
- W3C WCAG Overview: https://www.w3.org/WAI/standards-guidelines/wcag/

## 2. Produktgrenze: Website vs. spaetere App

Das Lastenheft beschreibt eine Website mit Admin. Fuer unternehmenspflichten.de muss die Architektur aber sauber trennen:

- Marketing-Website: `/`
- Website-CMS/Admin: `/admin`
- spaetere Produkt-App: `/app`
- spaeterer Login fuer Kunden: `/login`

Wichtig:

- Der Website-Admin ist nicht automatisch die SaaS-App.
- Flat-File JSON reicht fuer die Marketing-Website.
- Sobald echte Kundenkonten, viele Uploads, Fristen, Objekte, Rollen und Exporte kommen, sollte eine echte Datenbank eingeplant werden.

Empfehlung fuer den Start:

- Website/CMS weiter als Flat-File JSON bauen.
- Datenmodell aber so strukturieren, dass spaeter MySQL/SQLite/Postgres moeglich ist.
- Keine Produktdaten und Website-Inhalte in unklaren JSON-Kloetzen vermischen.

## 3. CMS muss mehr koennen als Texte bearbeiten

Zusaetzlich zum Lastenheft braucht das Backend Module fuer:

- Navigation
- Footer
- CTA-Bloecke
- Preise/Pakete
- Features
- Branchen
- FAQ
- Quellen
- Stand-/Review-Datum
- Testimonials/Logos
- Partnerkategorien
- Redirects
- Formulare
- Tracking-Events
- rechtliche Hinweisbausteine
- gesperrte Woerter/Formulierungen

## 4. Content-Governance als Pflichtmodul

Das ist fuer dieses Projekt kritisch, weil veraltete oder zu harte Aussagen Abmahn- und Vertrauensrisiko sind.

Jede Inhaltsseite braucht:

- Status: Entwurf / Veroeffentlicht / Archiviert
- Versionen
- letzte Aenderung
- geaendert von
- Stand-Datum
- naechste Review-Faelligkeit
- Quellenpflicht
- Freigabe-Haken
- Rollback

Admin-Warnungen:

- Quelle fehlt
- Stand-Datum fehlt
- Review ueberfaellig
- riskantes Wort gefunden
- Seite hat keine klare CTA
- Seite hat keine Meta Description
- Seite hat kein Schema
- Seite ist nicht intern verlinkt

## 5. RDG-/Abmahn-Schutz direkt ins CMS

Nicht nur im Konzept, sondern technisch im Admin erzwingen.

Gesperrte oder warnpflichtige Begriffe:

- rechtssicher
- compliant
- garantiert
- alle Pflichten erfuellt
- Pflicht erfuellt
- rechtskonform
- sicher compliant
- Audit-ready
- trifft dich
- gilt fuer dich
- du bist betroffen
- du bist nicht betroffen

Speicherlogik:

- Warnung beim Speichern riskanter Begriffe
- optionales hartes Blockieren fuer bestimmte Begriffe
- Hinweis: "Bitte als allgemeine Information formulieren"
- Standardbaustein: "Diese Information ersetzt keine Rechts-, Steuer- oder Fachberatung."

## 6. Themen-Sortierer als eigenes Produktprinzip

Die Engine darf bleiben, aber nur als Sortierer.

Erlaubte Ausgabe:

> Betriebe mit diesen Merkmalen befassen sich typischerweise mit folgenden Themen.

Nicht erlaubte Ausgabe:

> Diese Pflicht trifft dich zu.

Backend braucht dafuer:

- Themen
- Merkmale
- Tags
- Gewichtung
- Quellen
- Schwellenwert-Text als allgemeine Information
- Nachweisvorlagen
- Button: "In Ordner uebernehmen"
- Button: "Mit Profi klaeren"

Wichtig:

- Das System erklaert, warum ein Thema angezeigt wird.
- Es sagt nicht, dass es rechtlich gilt.
- Nutzer hakt selbst ab, was er uebernimmt.

## 7. Schema.org genauer planen

Pflicht:

- `Organization`
- `WebSite`
- `WebPage`
- `BreadcrumbList`
- `Service`

Moeglich:

- `SoftwareApplication`, wenn das Tool konkret beschrieben wird
- `FAQPage`, nur wenn echte FAQ sichtbar sind, aber nicht als Google-Rich-Result-Hebel einplanen
- `Article` fuer Ratgeberseiten mit Autor/Stand/Review

Nicht ohne echte Grundlage:

- `Review`
- `AggregateRating`
- `Product`
- `LocalBusiness`

Zusaetzlich:

- `dateModified`
- `lastReviewed`, wo passend
- `publisher`
- `about`
- `mainEntity`
- `sameAs`, wenn echte Profile vorhanden sind

Quelle:

- Google Structured Data Guidelines: https://developers.google.com/search/docs/appearance/structured-data/sd-policies
- Schema.org Organization: https://schema.org/Organization
- Schema.org FAQPage: https://schema.org/FAQPage

## 8. GEO-/AEO-Seitenstruktur

Jede wichtige Seite soll enthalten:

- Kurzantwort oben
- 3-5 Bullet-Antworten
- klare Definition
- "Fuer wen ist das nuetzlich?"
- "Was kann man hier speichern/exportieren?"
- Quellenbox
- Stand-Datum
- verwandte Themen
- naechster Schritt
- Profi-Hinweis, wenn noetig

Fuer AI-Suche wichtig:

- eindeutige Entitaeten
- eindeutige Begriffe
- keine leeren Marketingfloskeln
- kurze, zitierbare Abschnitte
- starke interne Verlinkung
- Glossar

## 9. Interne Suche

Fehlt im Lastenheft.

Notwendig fuer Nutzer und Admin:

- Suche ueber Seiten
- Suche ueber Themen
- Suche ueber Branchen
- Suche ueber FAQ
- Suche ueber Quellen
- Suche ueber Vorlagen

Spaeter fuer Produkt-App:

- Suche ueber Fristen
- Suche ueber Objekte
- Suche ueber Uploads
- Suche ueber Exporte

## 10. Glossar

Sehr wichtig fuer SEO/GEO und Nutzerverstaendnis.

Startbegriffe:

- Pflicht
- Nachweis
- Frist
- Pruefung
- Unterweisung
- Betreiberpflicht
- Dokumentation
- Pruefbericht
- Wartung
- Quelle
- Stand-Datum
- Fachberatung
- Nachweisordner
- Themen-Sortierer

## 11. Design-Editor erweitern

Das Lastenheft nennt Theme-Felder. Es fehlt ein echtes internes Design-Bearbeitungstool.

Ergaenzen:

- Live-Vorschau
- Theme-Presets
- Farbkontrast-Pruefung
- Button-Stile
- Karten-Stile
- Abstaende
- Schatten
- Radius
- Hero-Varianten
- Animationsstaerke
- Animationen global an/aus
- reduzierte Bewegung testen
- Reset auf Standarddesign

Grenze:

- kein freier Drag-and-drop-Baukasten
- nur vorgegebene, sichere Komponenten

## 12. Komponenten statt freiem Layout

Backend soll Inhalte in festen Komponenten bearbeiten koennen:

- Hero
- Feature-Karten
- CTA-Band
- Preisboxen
- FAQ
- Quellenbox
- Branchenkarten
- Ablauf/Steps
- Vergleichstabelle
- Vertrauensbox
- Kontaktbox
- Formular
- Hinweisbox
- Partnerbox

Vorteil:

- alles editierbar
- kein Layout-Chaos
- SEO/Semantik bleibt sauber
- Design bleibt konsistent

## 13. Animationen als System

Nicht nur ein paar Effekte im CSS, sondern als kleines Animationssystem:

- `data-animate="fade-up"`
- `data-animate="fade"`
- `data-animate="scale"`
- `data-animate="line"`
- `data-animate-delay`
- globale Einstellung im Admin: aus / dezent / normal
- `prefers-reduced-motion` immer respektieren

Animationen duerfen nie:

- Layout verschieben
- Formulare stoeren
- Text schwer lesbar machen
- permanent nerven

## 14. Conversion-Tracking ohne Drittanbieter-Zwang

Nicht nur Besucher messen.

Erfassen:

- CTA-Klicks
- Formularstarts
- Formularabschluesse
- Preis-Klicks
- Demo-Klicks
- Beispielordner-Klicks
- Download-Klicks
- ausgehende Partner-Klicks

Umsetzung:

- lokales Event-Log als JSON/CSV oder serverseitige Logdatei
- keine personenbezogene Detailanalyse im MVP
- Datenschutzerklaerung ergaenzen
- spaeter Matomo Events, wenn Matomo genutzt wird

## 15. Besucherstatistik konkret fuer All-Inkl

All-Inkl bietet im KAS Statistiken/Traffic und Webalizer unter `/usage/`, wenn aktiv.

Ergaenzen:

- README-Schritt: KAS -> Einstellungen -> Logs & Statistiken aktivieren
- `/usage/` mit Verzeichnisschutz absichern
- nicht oeffentlich erreichbar lassen

Quelle:

- All-Inkl Traffic-Statistik: https://all-inkl.com/en/support/tutorials/kas/statistics/evaluation-possibilities/traffic_107.html
- All-Inkl Webalizer: https://all-inkl.com/wichtig/anleitungen/kas/statistik/webalizer-vorinstalliert/erlaeuterung_74.html

## 16. Mail-Zustellbarkeit

Kontaktformular darf nicht nur "SMTP senden". Es braucht Zustellbarkeits-Checkliste:

- SPF
- DKIM
- DMARC
- Absenderdomain passt zur Domain
- Reply-To ist Nutzeradresse, From ist eigene Domain
- SMTP-Test im Admin
- Testmail-Funktion
- Mail-Log
- Fehler-Log
- Retry-Hinweis

Quelle:

- Gmail Sender Guidelines: https://support.google.com/mail/answer/81126
- Google SPF/DKIM/DMARC: https://knowledge.workspace.google.com/admin/security/set-up-spf
- Yahoo Sender Best Practices: https://senders.yahooinc.com/best-practices/

## 17. Leads im Backend speichern

Kontaktformulare nicht nur per Mail schicken.

Lead-Modul:

- Eingang speichern
- Status: neu / gelesen / beantwortet / qualifiziert / Spam / erledigt
- Notizen
- CSV-Export
- Datenschutz-Loeschfunktion
- IP nur falls noetig und kurz
- Einwilligungstext speichern
- Zeitstempel speichern

## 18. Formular- und Spam-Schutz erweitern

Zusaetzlich zu Honeypot:

- Rate Limit pro IP/Session
- Mindest-Ausfuellzeit
- Maximal-Laenge
- Blocklist fuer offensichtliche Spam-Muster
- serverseitige Validierung
- optional Turnstile/Captcha erst bei Missbrauch
- niemals Formularinhalt ungefiltert in Admin/Mail ausgeben

## 19. Admin-Sicherheit nach OWASP haerter fassen

Ergaenzen:

- Session-Cookies: Secure, HttpOnly, SameSite
- Session-Regeneration nach Login
- automatische Session-Abmeldung
- Re-Login fuer sensible Aktionen
- Admin-Auditlog
- optional 2FA
- CSP
- HSTS erst nach aktivem HTTPS
- Security-Header
- kein Stacktrace im Live-Betrieb
- Backup-Download nur nach Re-Login

Quellen:

- OWASP ASVS: https://owasp.org/www-project-application-security-verification-standard/
- OWASP HTTP Security Headers: https://cheatsheetseries.owasp.org/cheatsheets/HTTP_Headers_Cheat_Sheet.html
- OWASP CSP Cheat Sheet: https://cheatsheetseries.owasp.org/cheatsheets/Content_Security_Policy_Cheat_Sheet.html

## 20. Upload-Sicherheit deutlich verschaerfen

Das Lastenheft sagt Bildtypen begrenzen. Das reicht nicht.

Ergaenzen:

- zufaellige Dateinamen
- Dateiendung und MIME pruefen
- Bild per GD/Imagick neu schreiben
- SVG im MVP verbieten oder stark sanitizen
- Uploads nicht als PHP ausfuehrbar
- `.htaccess` in Upload-Ordner: PHP-Ausfuehrung aus
- Maximalgroesse
- Bilddimensionen begrenzen
- Dateiliste im Admin nur escaped ausgeben

Quelle:

- OWASP File Upload Cheat Sheet: https://cheatsheetseries.owasp.org/cheatsheets/File_Upload_Cheat_Sheet.html

## 21. Flat-File-Daten sicher schreiben

Bei JSON-Speicherung fehlen:

- file locking
- atomare Writes: erst temp-Datei, dann rename
- Backup vor jeder kritischen Aenderung
- Daten-Schema-Version
- Migrationen
- Validierung vor Speichern
- Restore-Test
- JSON-Dateien ausserhalb Webroot oder per `.htaccess` sperren

## 22. Backup/Restore nicht nur Backup-Hinweis

Notwendig:

- manueller Backup-Button im Admin
- Backup vor Theme-/Content-Grossaenderung
- Backup enthaelt JSON + Uploads + Config-Hinweis
- Restore-Anleitung
- Restore-Test in README
- Speicherbegrenzung alter Backups

## 23. Staging und Preview

Fehlt im Lastenheft.

Ergaenzen:

- Vorschau vor Veroeffentlichung
- Entwurf-Version
- Staging-Modus lokal/unter Subdomain
- Wartungsmodus
- "Veroeffentlichen" getrennt von "Speichern"

## 24. Rollen und Rechte

Nicht jeder Admin soll alles duerfen.

Rollen:

- Superadmin
- Redakteur
- SEO
- Support/Lead-Bearbeitung
- Nur Lesen

Mindestens vorbereiten:

- Rollenfeld im Admin-User
- Rechte-Matrix in Config

## 25. Rechtliche SaaS-Vorbereitung

Wenn spaeter echte Nutzerkonten/App/Zahlung kommen, fehlen:

- AGB/Nutzungsbedingungen
- AVV/DPA fuer Auftragsverarbeitung
- TOMs
- Loeschkonzept
- Datenexport fuer Kunden
- Account-Loeschung
- Rollen/Rechte fuer Kundenkonten
- Aufbewahrungsfristen
- Preisangaben mit/ohne MwSt.
- Vertragsabschluss-/Kuendigungslogik
- BFSG neu pruefen, sobald Online-Vertrag/Checkout fuer Verbraucher relevant wird

## 26. Onboarding fuer Kundenfreundlichkeit

Die Website braucht nicht nur Text, sondern einen klaren Einstieg:

- "Was willst du verwalten?"
- Geraete
- Fahrzeuge
- Produkte
- Standorte
- Unterweisungen
- Wartungen
- Versicherungen
- eigene Fristen

Danach:

- Beispielordner erzeugen
- erste Frist anlegen
- Upload anbieten
- Export zeigen

Auch wenn es im MVP nur als Demo/Mockup laeuft, muss der Besucher den Nutzen sehen.

## 27. Beispiel-Nachweisordner als Lead-Magnet

Sehr wichtig fuer Conversion:

- Beispiel-PDF
- Beispiel-ZIP-Struktur
- Demo-Screenshot
- "So sieht ein Export fuer Pruefer/Sifa/Steuerberater aus"

Paywall:

- ansehen kostenlos
- eigenen Ordner/exportieren kostenpflichtig

## 28. Preislogik im Backend

Nicht hart coden.

Bearbeitbar:

- Paketname
- Preis
- Intervall
- Zielgruppe
- Featureliste
- Limits
- CTA
- hervorgehobenes Paket
- Hinweis "zzgl. MwSt." falls B2B
- Setup-Preis

## 29. Redirect-Manager

Nicht nur alte URLs einmalig in `.htaccess`.

Backend-Modul:

- alte URL
- neue URL
- Status 301/302
- aktiv/inaktiv
- Notiz

Export in `.htaccess` oder Router.

## 30. Fehlerseiten und leere Zustaende

Nicht nur 404.

Ergaenzen:

- 403
- 500
- Wartungsseite
- Formularfehler
- Uploadfehler
- leere Suche
- keine Leads
- keine Seiten
- keine Quellen

Alles nutzerfreundlich und mit naechstem Schritt.

## 31. Testmatrix

Vor Fertigmeldung nicht nur visuell pruefen.

Testen:

- Handy klein
- Handy gross
- Tablet
- Desktop
- Tastaturbedienung
- reduzierte Bewegung
- hoher Zoom 200 Prozent
- Formulare
- Admin-Login
- CSRF
- Upload erlaubte Datei
- Upload verbotene Datei
- SEO-Tags
- JSON-LD-Validerbarkeit
- sitemap/robots
- 404
- .htaccess URLs
- Backup erzeugen
- Restore-Anleitung nachvollziehbar

## 32. Prioritaet fuer den Bau

Muss sofort rein:

1. RDG-/Abmahn-Wortfilter im Admin.
2. Content-Governance mit Stand/Quelle/Review.
3. Themen-Sortierer als Sortierer, nicht Urteil.
4. WCAG 2.2 AA statt nur 2.1.
5. JSON-LD ohne FAQ-Rich-Result-Versprechen.
6. Lead-Speicherung im Backend.
7. Mail-DNS-Checkliste SPF/DKIM/DMARC.
8. Upload-Haertung nach OWASP.
9. JSON file locking/atomic writes/backups.
10. Preis-/Paketverwaltung im Admin.

Spaeter, aber vorbereiten:

1. Kunden-App unter `/app`.
2. echte Datenbank.
3. Rollen/Rechte fuer Kunden.
4. AVV/TOMs/AGB.
5. Partnerportal.
6. Staging/Release-Workflow.

## 33. Weitere Luecken nach Zusatzpruefung

Diese Punkte fehlen ebenfalls noch oder sind im urspruenglichen Lastenheft zu schwach beschrieben.

### 33.1 Datenloeschung und Aufbewahrung

Es braucht ein klares Loesch- und Aufbewahrungskonzept.

Ergaenzen:

- Kontaktanfragen nach X Monaten loeschen/anonymisieren
- alte Leads loeschen
- Uploads loeschen, wenn sie nicht mehr genutzt werden
- Admin kann personenbezogene Daten exportieren und loeschen
- Papierkorb mit Frist statt sofortigem endgueltigem Loeschen
- Dokumentation in Datenschutzerklaerung

Warum:

- spaeter wichtig fuer DSGVO, Kundenvertrauen und Datenhygiene

### 33.2 AVV/TOMs/Trust-Unterlagen vorbereiten

Wenn die Plattform spaeter Nachweise, Uploads oder Kundendaten verarbeitet, braucht sie B2B-Vertrauensunterlagen.

Ergaenzen:

- AVV nach Art. 28 DSGVO vorbereiten
- TOMs nach Art. 32 DSGVO beschreiben
- Unterauftragsverarbeiter-Liste
- Hosting-/Datenstandort
- Sicherheitsmassnahmen
- Backup-/Restore-Konzept
- Incident-Prozess
- spaeter Trust-Seite

Quellen:

- Art. 28 DSGVO: https://gdpr-info.eu/art-28-gdpr/
- Art. 32 DSGVO: https://gdpr-info.eu/art-32-gdpr/

### 33.3 Incident-Response-Prozess

Fehlt komplett.

Ergaenzen:

- Was passiert bei gehacktem Admin?
- Was passiert bei Datenverlust?
- Was passiert bei Mail-Missbrauch?
- Was passiert bei verdacht auf Datenschutzverletzung?
- Wer wird informiert?
- Wo wird der Vorfall dokumentiert?
- welche Logs werden gesichert?

Im MVP mindestens:

- internes Incident-Log
- README-Prozess
- Notfallkontakte
- Backup-Restore-Schritte

### 33.4 Monitoring und Fehlerlogs

Die Seite soll nicht nur gebaut, sondern ueberwacht werden.

Ergaenzen:

- PHP-Fehlerlog ausserhalb Webroot
- Formularfehler loggen
- SMTP-Fehler loggen
- Uploadfehler loggen
- 404-Log fuer kaputte Links
- einfache Uptime-Pruefung als README-Hinweis
- Admin-Dashboard mit letzten Fehlern

### 33.5 Performance-Budget

Das Lastenheft sagt schnell, aber nicht messbar genug.

Ergaenzen:

- CSS-Budget
- JS-Budget
- Bild-Budget fuer Hero
- maximale Anzahl Fonts/Schnitte
- LCP-Zielbild definieren
- keine Animation darf LCP/CLS verschlechtern
- Lighthouse-Zielwerte dokumentieren

Empfehlung:

- Startseite initial unter 200 KB eigenes CSS/JS
- keine externen Fonts
- Hero-Bild responsive und voroptimiert

### 33.6 Redaktionsfreigabe fuer riskante Inhalte

Bei diesem Thema darf nicht jeder Text direkt live.

Ergaenzen:

- Entwurf
- Review
- Freigabe
- Veroeffentlicht
- Archiviert
- Pflicht-Review fuer Seiten mit Rechts-/Pflichtbezug
- Admin-Warnung, wenn riskante Seite ohne Quelle live soll

### 33.7 Quellen-Monitoring

Quellen nur speichern reicht nicht.

Ergaenzen:

- Quelle zuletzt geprueft
- naechste Pruefung
- Quelle nicht erreichbar
- Quelle weitergeleitet
- Quelle geaendert, manuell pruefen
- betroffene Seiten anzeigen

MVP:

- manuelle Review-Fristen

Spaeter:

- automatischer Link-/Statuscheck

### 33.8 Partner-Marktplatz-Regeln

Partnervermittlung ist wichtig, aber braucht Regeln.

Ergaenzen:

- Partnerkategorie
- Qualifikationsnachweis
- Region
- Leistung
- Provisionsmodell
- Hinweis "keine Empfehlung/keine Garantie"
- Lead-Status
- Lead-Abrechnung
- Sperrliste
- Beschwerdeprozess

Wichtig:

- keine verdeckte Rechts-/Versicherungs-/Finanzvermittlung
- klare Kennzeichnung, wenn Provision fliesst

### 33.9 Zahlungs- und Rechnungslogik vorbereiten

Auch wenn Stripe spaeter kommt, Website/CMS sollte vorbereitet sein.

Ergaenzen:

- Preise netto/zzgl. MwSt. fuer B2B
- Monats-/Jahrespreis
- Setup-Gebuehr
- Paketlimits
- Rechnungsdaten
- Kuendigungslogik
- Testphase
- Gutschein/Partnercode
- UTM-/Kampagnenquelle am Lead speichern

### 33.10 Vertrags- und Kuendigungsseiten

Wenn spaeter online gekauft wird:

- AGB
- AVV
- Datenschutz
- Widerruf nur falls Verbraucher relevant
- Kuendigungsprozess
- Preisangaben
- Leistungsbeschreibung
- SLA/Verfuegbarkeit nur, wenn wirklich zugesagt

Bis dahin:

- keine Online-Kaufstrecke ohne diese Klaerung

### 33.11 Datenexport fuer Kunden

Sehr wichtig fuer Vertrauen.

Ergaenzen:

- alle eigenen Inhalte exportieren
- Leads exportieren
- Seiten exportieren
- Nachweise exportieren
- Upload-Archiv exportieren
- Account-Loeschung spaeter

Das verhindert Lock-in-Angst.

### 33.12 Import-Assistent

Ein Nachweisordner lebt von schnellem Start.

Ergaenzen:

- CSV-Import fuer Produkte/Geraete/Fahrzeuge
- Beispiel-CSV
- Fehleranzeige
- Duplikatserkennung
- Import-Vorschau
- Rueckgaengig machen

### 33.13 E-Mail-Vorlagen im Admin

Nicht hart coden.

Bearbeitbar:

- Kontaktformular-Eingangsmail intern
- Bestaetigung an Nutzer
- Lead-Weiterleitung an Partner
- SMTP-Testmail
- spaeter Frist-Erinnerungen
- spaeter Export-Benachrichtigung

### 33.14 Kampagnen- und Attributionsdaten

Damit man weiss, was Geld bringt.

Ergaenzen:

- UTM-Parameter speichern
- Referrer speichern
- Landingpage speichern
- CTA speichern
- Kampagne im Lead anzeigen
- CSV-Export

Datenschutz:

- sparsam
- keine unnoetigen personenbezogenen Trackingprofile
- Datenschutzerklaerung anpassen

### 33.15 Rechtliche Seiten als Datenobjekte

Impressum/Datenschutz nicht nur statische Seiten.

Ergaenzen:

- eigene Admin-Maske fuer Betreiberangaben
- Datenschutz-Module je Funktion aktivieren/deaktivieren
- Statistik ja/nein
- Kontaktformular ja/nein
- Matomo ja/nein
- Lead-Speicherung ja/nein
- Partnerweiterleitung ja/nein

So bleibt die Datenschutzerklaerung spaeter konsistent.

### 33.16 Accessibility-Erklaerung vorbereiten

Wenn BFSG spaeter greift oder man bewusst transparent sein will:

- Accessibility-Seite vorbereiten
- bekannte Barrieren
- Kontakt fuer Barriere melden
- letzte Pruefung
- WCAG-Ziel

Nicht zwingend fuer reine B2B-Info-Seite, aber gut vorbereitet.

Quellen:

- WCAG 2.2: https://www.w3.org/TR/WCAG22/
- Bundesfachstelle BFSG FAQ: https://www.bundesfachstelle-barrierefreiheit.de/DE/Barrierefreiheitsstaerkungsgesetz/FAQ/faq_node

### 33.17 Internationalisierung vorbereiten

Deutschland zuerst, aber spaeter skalierbar.

Ergaenzen:

- Sprachfelder vorbereiten
- hreflang spaeter
- URLs pro Sprache
- rechtliche Texte pro Land trennen
- keine automatische Uebersetzung von Pflicht-/Rechtstexten ohne Review

### 33.18 Konkurrenz- und Snippet-Monitoring

Fuer SEO/GEO spaeter wichtig.

Ergaenzen:

- Zielkeywords je Seite
- Search-Console-Notizen
- Snippet-Titel/Description testen
- Konkurrenz-URLs je Thema speichern
- Ranking nicht im MVP, aber Feldstruktur vorbereiten

### 33.19 Trust-Elemente ohne Fake

Die Seite braucht Vertrauen, aber keine erfundenen Siegel.

Ergaenzen:

- echte Quellen
- echte Screenshots
- echter Beispielordner
- echte Partner erst anzeigen, wenn vorhanden
- keine Fake-Bewertungen
- keine Fake-Logos
- keine erfundenen Kundenzahlen

### 33.20 Grenzen fuer KI-generierte Inhalte

Wenn KI beim Texten hilft:

- KI-Text nie ohne Review bei Pflicht-/Rechtsthemen veroeffentlichen
- Quellenpflicht
- riskante Woerter pruefen
- menschliche Freigabe
- "Stand"-Datum
- keine erfundenen Paragraphen/Quellen

## 34. Neue Top-Prioritaet nach Nachtrag

Zusaetzlich zu Abschnitt 32 sollten diese Punkte beim Bau direkt mitgedacht werden:

1. Loesch-/Aufbewahrungskonzept.
2. AVV/TOMs/Trust-Vorbereitung.
3. Incident- und Fehlerlogik.
4. UTM-/Lead-Attribution.
5. CSV-Import-Assistent.
6. E-Mail-Vorlagen im Admin.
7. Rechtliche Seiten als modulare Datenobjekte.
8. Partner-Regeln und Provisionskennzeichnung.
9. Datenexport fuer Kunden.
10. KI-Content-Grenzen.

## 35. Weitere fehlende Punkte nach Rechts-/Betriebspruefung

### 35.1 Cookie-, LocalStorage- und TDDDG-Inventar

Nicht nur "kein Cookie-Banner" sagen, sondern technisch dokumentieren, was im Browser gespeichert oder ausgelesen wird.

Ergaenzen:

- Cookie-/Storage-Inventar im Backend oder README
- Zweck je Cookie/Storage-Eintrag
- technisch notwendig ja/nein
- Laufzeit
- Anbieter
- Rechtsgrundlage/Einwilligung ja-nein
- Consent-Schalter vorbereitet, falls spaeter externe Tools kommen
- keine externen Skripte ohne Freigabe

Wichtig:

- Auch LocalStorage, SessionStorage und Fingerprinting-nahe Daten koennen TDDDG-relevant sein.
- Admin-Session-Cookies sind technisch notwendig.
- Marketing-/Tracking-Cookies brauchen Opt-in.

Quellen:

- TDDDG/TTDSG-Einordnung: https://www.dr-datenschutz.de/cookies-und-datenschutz-zwischen-tdddg-und-dsgvo/
- TDDDG Consent-Ueberblick: https://help.piwik.pro/support/privacy/how-to-make-your-website-compliant-with-tdddg/

### 35.2 Kuendigungsbutton-Sperre fuer spaetere Abo-Strecke

Wenn spaeter Verbrauchern ueber die Website ein entgeltlicher laufender Vertrag ermoeglicht wird, muss die Kuendigungsbutton-Frage geprueft werden.

Ergaenzen:

- kein Online-Abo/Checkout fuer Verbraucher ohne Kuendigungsprozess
- vorbereitete Route `/kuendigung` oder `/vertraege-hier-kuendigen`, falls relevant
- Dokumentation der Kuendigungsanfrage
- Bestaetigungsseite
- Bestaetigung per E-Mail

Quelle:

- Paragraph 312k BGB: https://www.gesetze-im-internet.de/bgb/__312k.html

### 35.3 Verbraucherstreitbeilegung / VSBG

Wenn Verbraucher angesprochen oder Verbrauchertraege geschlossen werden, braucht Impressum/AGB ggf. VSBG-Hinweise.

Ergaenzen:

- Admin-Feld: Teilnahme an Verbraucherschlichtung ja/nein/verpflichtet
- Textbaustein im Impressum/AGB
- nur aktivieren, wenn Verbraucherbezug besteht

Quellen:

- Paragraph 36 VSBG: https://www.gesetze-im-internet.de/vsbg/__36.html
- Bundesamt fuer Justiz: https://www.bundesjustizamt.de/DE/Themen/Verbraucherrechte/Verbraucherstreitbeilegung/Unternehmen/Unternehmen_node.html

### 35.4 Preisangaben sauber trennen: B2B vs. Verbraucher

Die Plattform soll B2B sein. Trotzdem muss die Darstellung sauber sein.

Ergaenzen:

- Preise als netto zzgl. USt. kennzeichnen, wenn rein B2B
- Zielgruppe klar als Unternehmen/Betriebe benennen
- falls Verbraucher angesprochen werden: Bruttopreise/PAngV pruefen
- Setup-Gebuehr klar ausweisen
- monatlich/jaehrlich klar trennen
- Mindestlaufzeit klar anzeigen
- keine "ab"-Preise ohne erklaerte Bedingungen

Quelle:

- Preisangabenverordnung: https://www.gesetze-im-internet.de/pangv_2022/BJNR492110021.html

### 35.5 Mandantentrennung fuer spaetere App

Sobald Kundenkonten kommen, ist das der wichtigste technische Sicherheitsblock.

Ergaenzen:

- jede Tabelle/Datei spaeter mit tenant_id/owner_id
- Objektzugriff immer pruefen
- keine Dateipfade erratbar
- Exporte nur fuer eigenen Mandanten
- Admin/Superadmin getrennt von Kundenrollen
- Tests gegen IDOR/Broken Access Control

MVP-Hinweis:

- Website-CMS ist noch keine Kunden-App.
- Bei `/app` muss Mandantentrennung von Anfang an ins Datenmodell.

### 35.6 Webhooks und Zahlungsanbieter

Wenn Stripe/Payment spaeter kommt:

- Webhook-Signaturen pruefen
- idempotente Verarbeitung
- Payment-Status getrennt vom User-Status
- Rechnung/Beleg-Logik
- fehlgeschlagene Zahlung
- Mahn-/Retry-Prozess
- Planwechsel
- Kuendigung
- Testmodus/Live-Modus strikt trennen

Nicht in Website-MVP einbauen, aber Datenmodell/README als spaeteren Block markieren.

### 35.7 Transaktionale E-Mails vs. Marketing

Nicht jede E-Mail ist gleich.

Ergaenzen:

- Kontaktformular-Bestaetigung = transaktional
- Frist-Erinnerung = transaktional
- Newsletter/Angebote = Marketing, nur mit Einwilligung
- Abmeldelink fuer Marketing
- List-Unsubscribe fuer spaetere Massenmails
- E-Mail-Vorlagen kategorisieren

Quelle:

- Gmail Sender Guidelines: https://support.google.com/mail/answer/81126

### 35.8 Lizenzinventar

Fehlt oft, ist aber wichtig.

Ergaenzen:

- Schriftenlizenz
- Iconlizenz
- Bildlizenz
- JS-/Editor-Lizenz
- PHPMailer-Lizenz
- Quelle/Download-Datum
- lokale Kopie
- Update-Hinweis

Keine unklare Stock-Bilder oder zufaellige Icons.

### 35.9 Update- und Dependency-Policy

Auch ohne Composer/Node gibt es Bibliotheken.

Ergaenzen:

- Liste aller Drittdateien
- Version
- Quelle
- Lizenz
- Update-Pruefung alle 3-6 Monate
- Sicherheitsupdates fuer Editor/PHPMailer/Matomo
- PHP-Version jaehrlich pruefen

### 35.10 Secrets und Konfiguration

Fehlt als Betriebsdetail.

Ergaenzen:

- keine Secrets im Git/Download-Paket
- Beispielconfig statt echter config
- Dateirechte dokumentieren
- SMTP-Passwort rotierbar
- Admin-Passwort resetbar
- Notfall-Admin nur lokal/CLI oder ueber geschuetzten Reset-Prozess

### 35.11 Private Uploads vs. oeffentliche Medien

Unterscheiden:

- oeffentliche Bilder fuer Website
- private Nachweise/Dokumente spaeter

Fuer private Dokumente spaeter:

- nie direkt aus `/uploads` oeffentlich ausliefern
- Download nur ueber PHP mit Rechtepruefung
- Dateinamen nicht original oeffentlich zeigen
- Export-Log
- Loeschfunktion

### 35.12 Exporte rechtlich defensiv beschriften

PDF/ZIP-Exporte duerfen nicht wie ein Zertifikat wirken.

Ergaenzen:

- Exporttitel: "Nachweisordner" statt "Compliance-Zertifikat"
- Exportdatum
- Datenquelle: vom Nutzer hochgeladen/eingetragen
- Hinweis: keine rechtliche Pruefung durch Plattform
- offene Punkte separat
- Profi-Hinweis

### 35.13 Druckansicht

Bei Nachweisen und B2B-Entscheidern nuetzlich.

Ergaenzen:

- Print-CSS fuer wichtige Seiten
- Kontakt/Preise/Leistungen sauber druckbar
- Quellenboxen druckbar
- keine Navigation/Animation im Druck

### 35.14 Browser- und Geraete-Support

Festlegen:

- aktuelle Chrome/Edge/Firefox/Safari
- iOS Safari
- Android Chrome
- keine Optimierung fuer veralteten Internet Explorer
- Admin mindestens Desktop-tauglich, Frontend mobil sehr gut

### 35.15 Support-Grenzen und Support-Skripte

Support darf nicht aus Versehen Rechtsberatung leisten.

Ergaenzen:

- Support darf technische Bedienung erklaeren
- Support darf keine rechtliche Bewertung geben
- Textbausteine fuer riskante Fragen
- Eskalation zu Fachpartner
- Support-Kategorien im Backend

### 35.16 Abuse-/Quota-Regeln

Damit Uploads/Formulare nicht missbraucht werden.

Ergaenzen:

- Speicherlimits pro Paket
- Uploadlimit pro Datei/Tag
- Formularlimit
- Exportlimit
- Rate Limits
- temporaere Sperren
- Admin-Warnung bei Missbrauch

### 35.17 AI-Crawler- und Robots-Policy

Nicht nur robots.txt, sondern bewusste Entscheidung:

- welche Seiten indexierbar
- welche Exporte/Uploads nie indexierbar
- Admin/app disallow
- noindex fuer Danke-/Testseiten
- X-Robots-Tag fuer Dateien
- Umgang mit AI-Crawlern spaeter festlegen

### 35.18 Datenklassifizierung

Fuer spaetere App wichtig.

Kategorien:

- oeffentlich
- intern
- personenbezogen
- vertraulich
- besonders kritisch

Jede Datenklasse bekommt:

- Speicherort
- Zugriff
- Aufbewahrung
- Export
- Loeschregel

### 35.19 Rechtstext-Generator vermeiden

Nicht selbst Impressum/Datenschutz/AGB "rechtssicher generieren".

Erlaubt:

- Betreiberfelder verwalten
- Textbausteine ein-/ausblenden
- Hinweise geben, was noch fehlt

Nicht erlauben:

- Garantie, dass Rechtstexte korrekt sind
- automatische Rechtsberatung fuer Nutzer

### 35.20 Post-Launch-Betriebsplan

Fehlt als verbindlicher Abschnitt.

Ergaenzen:

- woechentlicher Link-/Formularcheck
- monatlicher Backup-/Restore-Check
- monatlicher Quellen-Review fuer Top-Seiten
- quartalsweise Security-/Dependency-Updates
- quartalsweise SEO/Search-Console-Check
- jaehrliche Datenschutz-/Rechtstext-Pruefung

## 36. Neue offene Entscheidungen

Diese Punkte muessen nicht vor dem ersten Bau gefragt werden, aber im Dokument als Entscheidung markiert sein:

1. Bleibt es dauerhaft B2B-only oder spaeter auch Verbraucher?
2. Gibt es spaeter Online-Checkout oder nur Anfrage/Angebot?
3. Werden Kundennachweise privat in der App gespeichert oder nur Website-Leads?
4. Wird Matomo wirklich gebraucht oder reicht All-Inkl/Webalizer plus Event-Log?
5. Wird der Themen-Sortierer oeffentlich nutzbar oder erst nach Login?
6. Werden Partner bezahlt/provisioniert oder nur empfohlen?
7. Sollen Exporte rechtlich als reine Nutzer-Daten-Zusammenstellung formuliert werden? Empfehlung: ja.

## 37. Weitere Luecken nach SaaS-/Datenrechtspruefung

### 37.1 EU Data Act / Datenportabilitaet fuer spaetere SaaS

Wenn aus der Website eine echte SaaS-App wird, muss Datenportabilitaet von Anfang an mitgedacht werden.

Ergaenzen:

- Kundendaten exportierbar machen
- maschinenlesbare Exportformate
- Uploads gesammelt exportierbar
- Fristen/Objekte/Quellen/Leads exportierbar
- keine kuenstlichen Wechselhindernisse
- Vertrags-/AGB-Hinweis zu Datenexport und Beendigung
- Loeschung nach Vertragsende
- Migrationspfad fuer Kunden

Warum:

- Der EU Data Act hat seit September 2025 relevante Regeln fuer Datenzugang, Portabilitaet und Wechsel im digitalen Dienstleistungsumfeld.
- Ob und wie die Plattform konkret darunterfaellt, muss vor einer echten SaaS-App juristisch geprueft werden.

Quellen:

- EU Data Act explained: https://digital-strategy.ec.europa.eu/en/factpages/data-act-explained
- EU Data Act Cloud/SaaS Switching Ueberblick: https://www.lw.com/en/insights/eu-data-act-significant-new-switching-requirements-due-to-take-effect-for-data-processing-services

### 37.2 Verzeichnis von Verarbeitungstaetigkeiten

Fuer Betrieb und spaetere AVV/TOMs fehlt ein internes Datenschutzverzeichnis.

Ergaenzen:

- Verarbeitung: Kontaktformular
- Verarbeitung: Lead-Speicherung
- Verarbeitung: Admin-Logs
- Verarbeitung: SMTP/Mailversand
- Verarbeitung: Uploads
- Verarbeitung: Statistik/Event-Log
- Verarbeitung: spaetere Kundenkonten
- Zweck
- Datenkategorien
- betroffene Personen
- Rechtsgrundlage
- Empfaenger/Auftragsverarbeiter
- Speicherfrist
- technische Schutzmassnahmen

Quelle:

- DSGVO Art. 30: https://gdpr-info.eu/art-30-gdpr/

### 37.3 Datenschutzverletzungen: 72-Stunden-Prozess

Incident-Response reicht nicht. Es braucht einen konkreten Datenschutzvorfall-Prozess.

Ergaenzen:

- Zeitpunkt der Kenntnisnahme dokumentieren
- Art des Vorfalls
- betroffene Datenkategorien
- betroffene Personengruppen
- Anzahl Betroffene/Datensaetze, falls bekannt
- Risikoabschaetzung
- Meldung an Aufsichtsbehoerde, falls erforderlich
- Information Betroffener, falls hohes Risiko
- Massnahmen zur Eindammung
- Nachweisakte zum Vorfall

Quelle:

- DSGVO Art. 33: https://gdpr-info.eu/art-33-gdpr/
- EDPB Guidelines Personal Data Breach Notification: https://www.edpb.europa.eu/system/files/2023-04/edpb_guidelines_202209_personal_data_breach_notification_v2.0_en.pdf

### 37.4 Datenschutz-Folgenabschaetzung als Pruefpunkt

Nicht sofort zwingend, aber als Pruefschritt vorbereiten.

Ausloeser koennen spaeter sein:

- umfangreiche Uploads sensibler Betriebsdaten
- systematische Auswertung von Nutzerdaten
- KI-Sortierung mit hohem Einfluss
- Partnerweiterleitungen
- besondere Kategorien personenbezogener Daten, falls Kunden sie hochladen

Ergaenzen:

- DPIA-Prueffrage in Datenschutz-Checkliste
- "besondere Daten nicht hochladen"-Hinweis im MVP, sofern nicht noetig
- spaeter Upload-Kategorien begrenzen

Quelle:

- DSGVO Art. 35: https://gdpr-info.eu/art-35-gdpr/

### 37.5 AI-Act-Transparenz fuer KI-Funktionen

Wenn KI sichtbar eingesetzt wird, muss Transparenz eingeplant werden.

Ergaenzen:

- klar anzeigen, wenn Nutzer mit KI interagiert
- KI-Ausgaben als Vorschlaege kennzeichnen
- keine KI-Rechtsentscheidung
- Quellenpflicht bei Pflicht-/Rechtsthemen
- menschliche Freigabe fuer veroeffentlichte Inhalte
- KI-Logik in Datenschutz/Produktbeschreibung erlaeutern
- AI-generierte oeffentliche Inhalte nicht als menschlich geprueft darstellen

Quelle:

- EU AI Act Ueberblick: https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai
- AI Act Transparency / Art. 50: https://artificialintelligenceact.eu/article/50/

### 37.6 AI-Output-Qualitaetskontrolle

Fuer dieses Projekt besonders wichtig.

Ergaenzen:

- KI darf keine Paragraphen erfinden
- KI darf keine Quellen erfinden
- KI darf keine "Pflicht gilt"-Aussagen formulieren
- KI-Ausgaben in riskanten Bereichen nur als Entwurf
- Admin-Warnung bei KI-generiertem Content ohne Quelle
- Versionshinweis, wenn KI Text vorbereitet hat

### 37.7 Datenminimierung im Uploadbereich

Nutzer koennten sensible Daten hochladen, die fuer die Plattform nicht noetig sind.

Ergaenzen:

- Upload-Hinweis: keine Gesundheitsdaten, Ausweiskopien, besonderen personenbezogenen Daten hochladen, sofern nicht erforderlich
- Dateikategorien definieren
- spaeter automatische Warnung bei problematischen Dateinamen/Kategorien
- Loeschfunktion prominent

### 37.8 Subprozessoren und Drittanbieter-Register

Fuer Vertrauen und AVV wichtig.

Ergaenzen:

- Hostinganbieter
- SMTP-Anbieter
- Statistik/Matomo, falls genutzt
- Zahlungsanbieter, falls spaeter genutzt
- KI-Anbieter, falls genutzt
- Backup-Speicher, falls extern
- Zweck
- Datenarten
- Land
- AVV vorhanden ja/nein
- Drittlandtransfer ja/nein

### 37.9 Datenresidenz und Drittlandtransfer

Wenn spaeter KI, Payment oder Mailanbieter genutzt werden:

- EU/EWR bevorzugen
- Drittlandtransfer dokumentieren
- Standardvertragsklauseln/Transferpruefung als Pruefpunkt
- keine sensiblen Kundenuploads ohne klare Rechts-/AVV-Lage an KI-Dienste senden

### 37.10 Support-Zugriff auf Kundendaten

Support braucht klare Grenzen.

Ergaenzen:

- Support sieht Kundendaten nur, wenn noetig
- Zugriff protokollieren
- temporaere Freigabe durch Kunde, spaeter
- keine Downloads ohne Zweck
- kein Teilen von Kundendaten mit Partnern ohne Freigabe

### 37.11 Admin- und Kundenaktionen beweisbar machen

Fuer Nachweise und Streitfaelle:

- wer hat was angelegt/geaendert/geloescht
- wann wurde exportiert
- wann wurde eine Frist erledigt
- wann wurde eine Datei hochgeladen/geloescht
- wann wurde ein Partner angefragt
- wann wurde ein Lead weitergeleitet

MVP:

- Auditlog fuer Admin und Lead-Aktionen

Spaeter App:

- Auditlog fuer Kundenaktionen

### 37.12 API-Strategie nicht unbewusst blockieren

Noch keine API bauen, aber vorbereiten:

- saubere IDs
- Datenmodell konsistent
- Exportformate stabil
- keine Businesslogik nur im Template verstecken
- spaeter API-Tokens getrennt von Passwoertern
- Rate-Limit-Konzept

### 37.13 Rechtliche Grenzen fuer Partnervermittlung

Partnervermittlung kann in regulierte Bereiche rutschen.

Pruefen/markieren:

- Versicherung
- Finanzberatung
- Rechtsberatung
- Steuerberatung
- medizinische Beratung
- Sachverstaendige/Pruefer

Umsetzung:

- Plattform vermittelt Kontakt/Anfrage
- Partner macht Fachleistung
- keine fachliche Empfehlung als "bester Anbieter"
- Provision transparent, wenn relevant

### 37.14 Keine Dark Patterns

Fuer Vertrauen und Abmahnrisiko wichtig.

Nicht nutzen:

- versteckte Kosten
- irrefuehrende Countdown-Timer
- vorangekreuzte Einwilligungen
- schwer auffindbare Kuendigung
- "nur noch heute"-Druck ohne Wahrheit
- unklare Paketlimits

### 37.15 Produkt-Telemetrie sparsam planen

Spaeter will man wissen, was genutzt wird.

Erlaubt/sinnvoll:

- Feature-Nutzung aggregiert
- Fehlerquoten
- Export-Anzahl
- aktive Objekte
- aktive Fristen

Grenze:

- keine unnoetige personenbezogene Detailueberwachung
- Datenschutzhinweis
- Opt-out fuer nicht notwendige Analyse, falls noetig

### 37.16 Datenqualitaet und Duplikate

Fuer Import und Nachweisordner wichtig.

Ergaenzen:

- Duplikaterkennung
- Pflichtfelder je Objektart
- Validierungsregeln
- fehlende Datei markieren
- unvollstaendige Datensaetze sichtbar machen
- Importfehler mit Zeilennummer

### 37.17 Barrierefreiheit im Admin

Nicht nur Frontend.

Ergaenzen:

- Admin mit Tastatur bedienbar
- klare Fehlermeldungen
- Fokusfuehrung
- Kontrast
- grosse Klickziele
- keine reinen Drag-and-drop-Funktionen

### 37.18 Suchmaschinen-Schutz fuer private Dateien

Noch einmal explizit:

- private Uploads nie im sitemap.xml
- private Uploads nie oeffentlich verlinken
- `X-Robots-Tag: noindex` fuer Downloads
- `robots.txt` plus echter Zugriffsschutz, nicht nur robots
- signierte/kurzlebige Downloadlinks spaeter

### 37.19 Datenbank-Migration planen

Wenn erst Flat-File und spaeter DB:

- JSON-Schema-Version
- Migrationsskript
- Export/Import-Testdaten
- eindeutige IDs
- keine Dateinamen als Primaerschluessel
- Trennung Contentdaten vs. Nutzerdaten

### 37.20 Rechtlich sichere Beispielinhalte

Demo-Inhalte duerfen keine falschen Pflichten suggerieren.

Ergaenzen:

- Beispielordner klar als Beispiel markieren
- fiktive Firma
- keine echten Kundendaten
- keine Aussage, dass der Beispielordner fuer jeden Betrieb passt
- Quellen/Stand auch bei Beispielseiten

## 38. Neue Top-Prioritaet nach SaaS-/Datenrechtspruefung

Wenn spaeter aus der Website eine echte Plattform wird, gehoeren diese Punkte vor den App-Bau:

1. Datenportabilitaet/Data-Act-Pruefung.
2. Verzeichnis der Verarbeitungstaetigkeiten.
3. Datenschutzvorfall-Prozess mit 72-Stunden-Logik.
4. AI-Act-Transparenz fuer sichtbare KI-Funktionen.
5. Subprozessoren-/Drittanbieterregister.
6. Support-Zugriffsprotokolle.
7. Private Datei-Auslieferung nur mit Rechtepruefung.
8. Datenbank-Migrationsplan.
9. API-/Exportstrategie.
10. Rechtlich defensive Beispielinhalte.

## 39. Weitere Luecken nach Rechnungs-, Cyber- und Plattformpruefung

### 39.1 E-Rechnung fuer eigene B2B-Abrechnung

Wenn die Plattform zahlende B2B-Kunden bekommt, muss die eigene Rechnungsstellung sauber vorbereitet werden.

Ergaenzen:

- E-Rechnungen empfangen koennen
- spaeter E-Rechnungen ausstellen koennen
- Formate: XRechnung/ZUGFeRD pruefen
- Rechnungsnummernkreis
- Netto/USt./Brutto sauber trennen
- Rechnungsempfaenger und Leistungszeitraum
- Setup-Gebuehr getrennt vom Abo
- Storno/Gutschrift
- Archivierung im empfangenen/erzeugten Format
- Export fuer Steuerberater

Quelle:

- BMF FAQ E-Rechnung, Stand Maerz 2026: https://www.bundesfinanzministerium.de/Content/DE/FAQ/e-rechnung.html
- E-Rechnung Bund B2B: https://e-rechnung-bund.de/e-rechnung/e-rechnung-zwischen-unternehmen-b2b/

### 39.2 GoBD-/Archivierungslogik fuer eigene Belege

Nicht nur Kunden-Nachweise, auch eigene Geschaeftsdaten muessen sauber behandelt werden.

Ergaenzen:

- Rechnungen unveraenderbar archivieren
- Zahlungsbelege archivieren
- E-Mail-Korrespondenz mit Vertragsrelevanz aufbewahren
- Export fuer Steuerberater
- keine manuellen Aenderungen an finalen Rechnungen ohne Storno/Korrektur
- Verfahrensdokumentation als spaeterer Betriebsbaustein

### 39.3 Cyber Resilience Act als Pruefpunkt

Wenn die Plattform spaeter als Softwareprodukt/Download/On-Premise-Komponente oder stark produktisiertes digitales Element angeboten wird, muss der Cyber Resilience Act geprueft werden.

Ergaenzen:

- CRA-Scope-Pruefung vor Produktisierung
- Vulnerability-Disclosure-Prozess
- Security-Update-Prozess
- SBOM/Komponentenliste vorbereiten
- Sicherheitskontakt
- CVE-/Schwachstellenlog
- sichere Standardkonfiguration
- Supportzeitraum fuer Sicherheitsupdates

Quelle:

- EU Cyber Resilience Act: https://digital-strategy.ec.europa.eu/en/policies/cyber-resilience-act

### 39.4 NIS2/BSI-Scope als Pruefpunkt

Wenn die Plattform groesser wird, fuer kritische Branchen arbeitet oder managed/security-nahe Dienste anbietet, muss NIS2/BSI-Scope geprueft werden.

Ergaenzen:

- keine unbewusste Positionierung als Managed Service Provider
- keine Admin-Zugriffe auf Kundensysteme ohne separate Regeln
- Scope-Review bei Enterprise-Kunden
- Incident-Meldeprozess getrennt von DSGVO
- Lieferanten-/Dienstleister-Sicherheitsnachweise vorbereiten
- Mindest-ISMS-Light: Risiko, Assets, Backups, Zugriff, Incident, Lieferanten

Quelle:

- BSI/NIS-Richtlinie: https://www.bsi.bund.de/EN/Das-BSI/Auftrag/Gesetze-und-Verordungen/NIS-Richtlinie/nis-richtlinie_node.html

### 39.5 DSA/DDG-Scope bei Nutzerinhalten

Wenn Nutzer Inhalte hochladen, die nur privat fuer ihren Betrieb gespeichert werden, ist das anders als oeffentliche Nutzerinhalte. Sobald Inhalte geteilt, oeffentlich gemacht, kommentiert oder an Dritte vermittelt werden, muss DSA/DDG genauer geprueft werden.

Ergaenzen:

- kein oeffentliches User-Content-Feature im MVP
- Uploads sind private Betriebsunterlagen
- falls spaeter oeffentliche Vorlagen/Kommentare/Partnerprofile: DSA-Scope pruefen
- Meldeweg fuer rechtswidrige Inhalte vorbereiten, falls Hosting-/Plattformpflichten greifen
- Sperr-/Entfernungsprozess
- Begruendung an Nutzer bei Entfernung/Sperre
- Kontaktstelle fuer Behoerden/Nutzer, falls erforderlich

Quellen:

- EU Digital Services Act: https://digital-strategy.ec.europa.eu/en/policies/digital-services-act
- Digitale-Dienste-Gesetz: https://gesetz-digitale-dienste.de/
- Bundesregierung DDG/DSA: https://www.bundesregierung.de/breg-de/aktuelles/digitale-dienste-gesetz-2250526

### 39.6 Acceptable-Use-Policy fuer Uploads

Nutzer duerfen nicht alles hochladen.

Ergaenzen:

- keine illegalen Inhalte
- keine Schadsoftware
- keine fremden personenbezogenen Daten ohne Berechtigung
- keine besonders sensiblen Daten, wenn nicht noetig
- keine urheberrechtswidrigen Inhalte
- keine Ausweiskopien/Gesundheitsdaten im MVP
- Missbrauch fuehrt zu Sperrung/Loeschung

### 39.7 Urheberrecht und Nutzungsrechte bei Uploads

Fuer Bilder, Dokumente und Vorlagen wichtig.

Ergaenzen:

- Nutzer bestaetigt, dass er Uploads nutzen darf
- Plattform bekommt nur notwendiges Nutzungsrecht zur Speicherung/Verarbeitung/Export
- keine Weitergabe an Partner ohne Freigabe
- Loeschung auf Wunsch, soweit keine Aufbewahrungspflicht entgegensteht
- Vorlagen/Downloads der Plattform urheberrechtlich klaeren

### 39.8 Sicherheit.txt und Responsible Disclosure

Fuer Vertrauen und Security gut.

Ergaenzen:

- `/.well-known/security.txt`
- Sicherheitskontakt
- Ablauf fuer Schwachstellenmeldungen
- keine Bug-Bounty versprechen, wenn nicht gewollt
- PGP optional

### 39.9 Umgebungstrennung

Fehlt noch als technischer Betriebsstandard.

Ergaenzen:

- lokal/dev
- staging
- production
- keine echten Kundendaten in dev/staging
- getrennte SMTP-Testdaten
- getrennte Payment-Testdaten
- Konfigurationsanzeige im Admin: Umgebung
- robots/noindex fuer staging

### 39.10 Deployment- und Release-Prozess

Nicht nur FTP-Upload.

Ergaenzen:

- Versionsnummer
- Changelog
- Backup vor Deployment
- Wartungsmodus
- Smoke-Test nach Upload
- Rollback-Anleitung
- Liste geaenderter Dateien

### 39.11 Datenbank-Alternative frueher bewerten

Flat-File reicht fuer Website-CMS, aber viele geplante Module werden mit JSON schnell fragil.

Pruefpunkt:

- Wenn Lead-Modul, Versionierung, Auditlog, Redirects, Quellen, Preise und Uploadmetadaten wachsen, SQLite oder MySQL frueh pruefen.
- All-Inkl kann MySQL; Shared Hosting muss nicht zwingend datenbankfrei bleiben.

Empfehlung:

- Website-Inhalte koennen JSON bleiben.
- Logs/Leads/Audit/Quellen/Redirects besser tabellarisch planen.

### 39.12 Rechtliche Trennung Demo vs. echtes Produkt

Wenn die Website Produktfunktionen zeigt, muss klar sein:

- Demo ist Beispiel
- kein echter Pflichtbescheid
- keine echte Fachpruefung
- keine Garantie
- Beispiel-Daten fiktiv
- Export ist Beispiel-Export

### 39.13 SLA und Verfuegbarkeit nicht vorschnell versprechen

Nicht schreiben:

- 24/7 garantiert
- immer verfuegbar
- revisionssicher
- auditfest

Erlaubt:

- "fuer laufende Pflege ausgelegt"
- "regelmaessige Backups empfohlen"
- "Export fuer interne Kontrolle/Pruefer"

Spaeter Enterprise:

- SLA separat definieren
- Wartungsfenster
- Supportzeiten
- Reaktionszeiten

### 39.14 Kundensupport-Wissensbasis

Fehlt als Skalierungshebel.

Ergaenzen:

- Hilfeartikel im CMS
- Onboarding-FAQ
- Video/Screen-Anleitungen spaeter
- Statusseiten fuer haeufige Fehler
- Supportformular mit Kategorie
- keine Rechtsberatung im Hilfezentrum

### 39.15 Produktmetriken fuer Retention

Nicht nur Traffic/Leads messen.

Spaeter messen:

- angelegte Objekte pro Konto
- aktive Fristen
- erledigte Fristen
- Uploads
- Exporte
- Nutzer, die 7/30 Tage aktiv waren
- abgebrochene Onboardings
- leere Konten

Datenschutz:

- aggregiert
- sparsam
- transparent

### 39.16 Churn-/Kuendigungsgruende

Wenn Abo kommt:

- Kuendigungsgrund optional abfragen
- Export vor Kuendigung anbieten
- Datenloeschfrist anzeigen
- kein Dark Pattern
- Reaktivierung moeglich

### 39.17 Support fuer Steuerberater/Sifa/Pruefer als Nutzergruppe

Profi-Export ist stark, aber Profis koennen spaeter eigene Workflows brauchen.

Vorbereiten:

- Profi-Ansicht
- Mandantenliste
- Exportempfang
- Rueckfrage an Betrieb
- Checkliste zuruecksenden
- keine fachliche Plattformbewertung

### 39.18 Beschwerde- und Korrekturprozess fuer Inhalte

Wenn eine Pflichtseite falsch/veraltet ist:

- "Fehler melden"-Button
- Quelle vorschlagen
- Prioritaet
- interne Aufgabe
- Korrekturhistorie
- betroffene Seiten anzeigen

### 39.19 Rechtliche Review-Termine als Systemfelder

Nicht nur "Stand", sondern:

- naechster Review
- Review-Frequenz
- Verantwortlicher
- Rechtsgebiet
- Risiko hoch/mittel/niedrig
- Quelle kritisch ja/nein

### 39.20 Datenethik / Angstmarketing-Grenze

Dieses Projekt kann leicht nach Panik-Funnel aussehen.

Regel:

- keine uebertriebenen Bussgeld-Drohungen
- keine Fake-Dringlichkeit
- keine "du machst dich strafbar"-Rhetorik ohne klare Quelle
- Fokus auf Ordnung, Nachweis, Frist, Export

## 40. Naechste Prioritaet nach diesem Nachtrag

Wenn noch weiter geplant wird, dann nicht mehr "noch mehr Features", sondern Entscheidung:

1. Website-MVP wirklich schlank halten.
2. App-Funktionen nur als Demo/Lead-Magnet zeigen.
3. E-Rechnung/Payment erst bei echter Zahlung bauen.
4. DSA/DDG nur vorbereiten, solange keine oeffentlichen Nutzerinhalte existieren.
5. CRA/NIS2 nur als Scope-Pruefung, nicht als MVP-Baustelle.
6. Datenbank frueh neu bewerten, sobald Lead-/Audit-/Quellenmodule gross werden.

## 41. Letzte Lueckenrunde: Domain, Betroffenenrechte und Betriebsdetails

### 41.1 Betroffenenrechte-Prozess

Die Datenschutzerklaerung nennt Rechte, aber das System braucht einen Bearbeitungsprozess.

Ergaenzen:

- Anfrage auf Auskunft
- Anfrage auf Berichtigung
- Anfrage auf Loeschung
- Anfrage auf Einschraenkung
- Anfrage auf Datenuebertragbarkeit
- Widerspruch
- Identitaetspruefung
- Frist: grundsaetzlich innerhalb eines Monats reagieren
- Fristverlaengerung dokumentieren
- Antwort dokumentieren

Quellen:

- DSGVO Art. 12: https://gdpr-info.eu/art-12-gdpr/
- DSGVO Art. 15: https://gdpr-info.eu/art-15-gdpr/
- DSGVO Art. 17: https://gdpr-info.eu/art-17-gdpr/
- DSGVO Art. 20: https://gdpr.eu/article-20-right-to-data-portability/

### 41.2 Domain- und DNS-Sicherheit

Fehlt bisher fast komplett.

Ergaenzen:

- Domaininhaber dokumentieren
- Registrar-Zugang absichern
- 2FA beim Registrar
- DNS-Zonen-Backup
- CAA-Record setzen, wenn Zertifizierungsstelle feststeht
- SPF/DKIM/DMARC fuer Mail
- MX/SPF/DKIM/DMARC im README dokumentieren
- Subdomain-Strategie: `www`, `app`, `admin`, `staging`, `assets` nur wenn noetig
- nicht genutzte Subdomains vermeiden

Quelle:

- CAA RFC 8659: https://datatracker.ietf.org/doc/html/rfc8659

### 41.3 HSTS und HTTPS-Haertung vorsichtig planen

HTTPS erzwingen ist Pflicht. HSTS ist sinnvoll, aber Preload ist eine harte Entscheidung.

Ergaenzen:

- erst HTTPS sauber testen
- dann HSTS aktivieren
- `includeSubDomains` nur, wenn alle Subdomains HTTPS koennen
- HSTS preload erst nach bewusster Freigabe
- README-Warnung: Preload ist nicht mal eben rueckgaengig zu machen

Quellen:

- MDN HSTS: https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Headers/Strict-Transport-Security
- HSTS Preload: https://hstspreload.org/

### 41.4 security.txt nach RFC 9116

In Abschnitt 39 steht security.txt schon als Idee. Es sollte konkret spezifiziert werden.

Ergaenzen:

- Pfad: `/.well-known/security.txt`
- Pflichtfeld: Contact
- Canonical URL
- Policy-URL optional
- Encryption/PGP optional
- Expires-Datum
- Sicherheitskontakt darf nicht ins Leere laufen

Quelle:

- RFC 9116: https://www.rfc-editor.org/info/rfc9116/

### 41.5 Konto-/Daten-Lifecycle

Wenn spaeter Kundenkonten kommen:

- Testaccount
- aktiver Account
- pausierter Account
- gesperrter Account
- gekuendigter Account
- geloeschter Account
- Archivierungsphase
- endgueltige Loeschung

Wichtig:

- Datenloeschung nicht mit Account-Sperre verwechseln
- Exporte vor Loeschung anbieten
- rechtliche Aufbewahrung eigener Rechnungsdaten trennen von Kundenuploads

### 41.6 Offboarding-Prozess

Fehlt noch.

Ergaenzen:

- Kunde kuendigt
- Export anbieten
- Datenaufbewahrung erklaeren
- Loeschdatum nennen
- Partnerzugriffe beenden
- API-Tokens deaktivieren
- Sessions invalidieren
- Rechnungen bleiben nach steuerlichen Regeln erhalten

### 41.7 Bot-, Scraper- und KI-Missbrauchsschutz

Da die Seite viel wertvollen Pflicht-/Quellencontent hat:

- Rate Limits fuer Such-/Sortierfunktionen
- Caching fuer oeffentliche Seiten
- Schutz gegen Massenabfragen
- robots.txt
- klare AI-Crawler-Policy spaeter
- keine privaten Daten in indexierbaren Antworten
- Monitoring ungewoehnlicher Abrufe

### 41.8 Internes Admin-Handbuch

README fuer Upload reicht nicht. Fuer Betrieb braucht es ein Admin-Handbuch.

Inhalte:

- Seite bearbeiten
- Quelle aktualisieren
- Review erledigen
- riskante Woerter behandeln
- Lead bearbeiten
- Backup erstellen
- Restore testen
- SMTP testen
- Upload pruefen
- Fehlerlog lesen
- neue Landingpage anlegen

### 41.9 Datenvalidierung fuer Admin-Felder

Nicht nur Frontend-Formulare.

Ergaenzen:

- URL-Felder validieren
- Canonical muss absolute URL sein
- Schema.org JSON muss valides JSON sein
- Preisfelder numerisch
- E-Mail-Felder validieren
- Datumfelder normalisieren
- noindex-Schalter eindeutig
- leere Pflichtfelder blockieren

### 41.10 JSON-LD-Sicherheitsgrenze

Wenn Admin JSON-LD bearbeiten darf:

- nur JSON, kein HTML/Script-Mix
- JSON parsen und neu serialisieren
- keine ungefilterte Ausgabe aus Adminfeld
- Groessenlimit
- erlaubte Schema-Typen optional begrenzen
- Fehlerhinweis im Admin

### 41.11 Canonical-/Indexierungs-Fallen

Ergaenzen:

- keine Canonicals auf falsche Domain
- noindex-Seiten nicht in sitemap
- Weiterleitungsziele nicht noindex
- 404 nicht indexierbar
- Staging komplett noindex + robots + Passwort
- `www`/non-`www` festlegen
- Trailing slash Strategie festlegen

### 41.12 Rechtliche Kontaktdaten nicht nur als Text

Impressumsdaten sollten strukturiert vorliegen:

- Betreibername
- Rechtsform
- Vertretungsberechtigter
- Adresse
- E-Mail
- Telefon, falls gewuenscht
- USt-ID
- Registergericht/Registernummer, falls vorhanden
- Aufsichtsbehoerde, falls spaeter noetig

Vorteil:

- Impressum, Schema.org, Footer und Datenschutz greifen auf dieselben Daten zu.

### 41.13 Admin-Wiederherstellung ohne Sicherheitsloch

Passwort vergessen muss geloest sein, aber sicher.

Ergaenzen:

- Reset nur ueber einmaligen Token mit Ablaufzeit
- oder manueller Reset ueber config/CLI
- kein Standardpasswort im Livebetrieb
- Setup-Assistent erzwingt neues Admin-Passwort
- initiale Install-Datei nach Einrichtung sperren/loeschen

### 41.14 Installationsmodus

Fuer FTP/Shared Hosting nuetzlich:

- beim ersten Aufruf Setup-Assistent
- Admin anlegen
- Basisdomain setzen
- Mailtest optional
- Schreibrechte pruefen
- Uploadordner pruefen
- Config erzeugen
- danach Installationsmodus deaktivieren

### 41.15 Schreibrechte- und Speicherplatz-Check

Shared Hosting kann an Dateirechten scheitern.

Ergaenzen:

- Admin-Dashboard zeigt: JSON schreibbar ja/nein
- Uploadordner schreibbar ja/nein
- Backupordner schreibbar ja/nein
- freier Speicherplatz, wenn ermittelbar
- PHP-Version
- aktivierte Extensions

### 41.16 Lokale Entwicklung vs. Live-Daten

Damit spaeter keine echten Daten versehentlich in Testsystemen landen:

- anonymisierte Testdaten
- keine echten Leads in Repo
- keine echten Uploads in Demo
- Demo-Reset-Funktion
- Beispielinhalte getrennt von Produktivdaten

### 41.17 Rechtliche Prueffelder bei Partnern

Partnerdaten brauchen mehr Struktur:

- Firma
- Ansprechpartner
- Leistung
- Qualifikation
- Region
- Haftpflicht/Versicherung, falls relevant
- Provisionsvereinbarung
- AVV, falls Datenverarbeitung
- Freigabe-Status
- Beschwerden
- Deaktiviert ja/nein

### 41.18 Vertraulichkeit von Partner- und Lead-Daten

Partner sollen nicht mehr sehen als noetig.

Ergaenzen:

- Lead erst nach Freigabe weitergeben
- nur notwendige Daten an Partner
- Weitergabe protokollieren
- Widerruf/Loeschung beachten
- Partner bekommt keine Vollakte ohne explizite Auswahl

### 41.19 Plausibilitaetspruefung fuer Fristen

Auch wenn keine Rechtsentscheidung getroffen wird:

- Datum in Vergangenheit warnen
- Wiederholung unplausibel warnen
- doppelte Frist erkennen
- Frist ohne Objekt warnen
- Frist ohne Erinnerung warnen
- Frist ohne Verantwortlichen spaeter warnen

Keine Rechtsbewertung, nur Datenqualitaet.

### 41.20 Finale Grenze: Was bewusst nicht gebaut wird

Damit das Projekt nicht ausufert, als Negativliste in die README:

- kein Rechtsberatungsportal
- kein Steuerberatungsportal
- keine automatische Pflichtentscheidung
- kein Versicherungs-/Finanzvertrieb
- kein oeffentliches Forum im MVP
- kein Kundendaten-Upload in KI-Dienste im MVP
- kein Online-Checkout im ersten Website-MVP
- keine Enterprise-SLA

## 42. Schlussmarke fuer die Planung

Ab hier sind weitere Punkte wahrscheinlich keine Lastenheft-Luecken mehr, sondern Produktentscheidungen oder spaetere Betriebsprozesse.

Naechster sinnvoller Schritt:

1. V1-Umfang aus allen Dateien schneiden.
2. Muss/Kann/Spaeter markieren.
3. Website-MVP bauen.
4. App-MVP separat planen.
5. Rechtliche Spezialpunkte nur als Pruefpunkte dokumentieren, nicht alle sofort bauen.

## 43. Mikro-Luecken fuer spaetere Zahlungs-, Export- und Nachweisfaehigkeit

### 43.1 EU-USt/VIES bei spaeteren EU-B2B-Kunden

Wenn spaeter Kunden ausserhalb Deutschlands, aber innerhalb der EU zahlen, braucht die Abrechnung weitere Felder.

Ergaenzen:

- Land des Kunden
- USt-ID des Kunden
- VIES-Pruefung als spaeterer Prozess
- Ergebnis/Zeitpunkt der Pruefung dokumentieren
- Reverse-Charge-Hinweis, falls anwendbar
- eigene USt-ID in Stammdaten
- Rechnungslogik Deutschland/EU/Drittland trennen

Nicht im Website-MVP noetig, aber bei EU-Ausbau wichtig.

Quelle:

- EU VIES: https://ec.europa.eu/taxation_customs/vies/
- Your Europe VIES: https://europa.eu/youreurope/business/taxation/vat/check-vat-number-vies/index_en.htm

### 43.2 Barrierefreie PDF-/ZIP-Exporte

Wenn die Plattform PDF-Nachweisordner erzeugt, sollten diese nicht nur optisch schoen, sondern auch zugaenglich sein.

Ergaenzen:

- PDF-Titel/Metadaten
- Dokumentensprache
- logische Lesereihenfolge
- Ueberschriftenstruktur
- Alt-Texte fuer Bilder/Logos
- Tabellen nur mit Struktur
- Text nicht nur als Bild
- Lesezeichen bei laengeren PDFs
- PDF/UA als spaeterer Zielstandard pruefen

Quelle:

- PDF Association PDF/UA: https://pdfa.org/resource/iso-14289-pdfua/
- W3C PDF Techniques: https://www.w3.org/TR/2014/NOTE-WCAG20-TECHS-20140311/pdf.html

### 43.3 Rechtstext- und Vertragsversionierung

Wenn spaeter Nutzerkonten, AGB, AVV oder kostenpflichtige Pakete kommen, muss nachvollziehbar sein, welche Version wann galt.

Ergaenzen:

- AGB-Version
- Datenschutz-Version
- AVV-Version
- Preis-/Paket-Version
- Datum der Veroeffentlichung
- Datum der Zustimmung
- Nutzer/Konto, das zugestimmt hat
- IP/User-Agent optional und sparsam
- alte Versionen abrufbar
- Aenderungshinweise

### 43.4 Zustimmung nicht mit Kenntnisnahme verwechseln

Nicht alles braucht Einwilligung. Aber wenn Zustimmung erforderlich ist, muss sie getrennt dokumentiert werden.

Ergaenzen:

- Checkbox fuer AGB/AVV nur bei Vertragsschluss
- Checkbox fuer Datenschutz nicht als "Einwilligung" missbrauchen, wenn nur Information
- Marketing-Einwilligung separat
- Partnerweitergabe separat
- Widerruf dokumentieren

### 43.5 Zeit-, Zeitzonen- und Fristenlogik

Bei Fristen/Erinnerungen darf die Zeitlogik nicht schwammig sein.

Ergaenzen:

- Standard-Zeitzone: Europe/Berlin
- Datum ohne Uhrzeit fuer Tagesfristen
- Uhrzeit nur, wenn noetig
- Sommerzeit beachten
- Fristfaelligkeit klar anzeigen
- Erinnerungszeit definieren
- Systemzeit/Serverzeit in Admin anzeigen
- Export enthaelt Erstellungszeit und Zeitzone

### 43.6 Beweiswert von Nachweisen nicht uebertreiben

Nachweise sind nur so gut wie die eingegebenen Daten.

Ergaenzen:

- "vom Nutzer eingetragen"
- "vom Nutzer hochgeladen"
- "nicht inhaltlich geprueft"
- "Export erstellt am"
- "offene Punkte"
- "fehlende Nachweise"
- "Quelle/Stand"

Nicht schreiben:

- beweissicher
- revisionssicher
- gerichtsfest
- amtlich geprueft

### 43.7 Webformular-Datenqualitaet

Kontakt- und Leadformulare brauchen Qualitaetsfelder.

Ergaenzen:

- Firma
- Branche
- Rolle
- Website
- Mitarbeitergroesse optional
- Hauptinteresse
- Einwilligung/Datenschutzhinweis
- UTM/Referrer
- Freitext begrenzen
- Spam-Score

### 43.8 Zustandsmaschine fuer Leads

Nicht nur Statusliste, sondern erlaubte Uebergaenge.

Beispiel:

- neu
- geprueft
- Rueckfrage
- qualifiziert
- Partner vorgeschlagen
- Partner angefragt
- erledigt
- abgelehnt
- geloescht/anonymisiert

Jeder Statuswechsel:

- Zeitstempel
- Nutzer/Admin
- Notiz optional

### 43.9 Mandantenfaehige Nummernkreise

Spaeter fuer Exporte, Fristen, Rechnungen, Leads wichtig.

Ergaenzen:

- Exportnummer
- Leadnummer
- Kundennummer
- Rechnungsnummer
- Objekt-ID
- Datei-ID
- nicht aus Dateinamen ableiten
- nicht erratbar, wenn extern sichtbar

### 43.10 Datenintegritaet bei Exporten

Wenn ein PDF/ZIP exportiert wird:

- Exportmanifest erzeugen
- Liste aller enthaltenen Dateien
- Zeitstempel
- Ersteller
- Hashwerte optional spaeter
- offene Punkte
- Hinweis auf nicht gepruefte Inhalte

Damit wirkt der Export professionell, ohne "Zertifikat" zu behaupten.

### 43.11 Quellen-Urheberrecht und Zitiergrenzen

Offizielle Quellen verlinken ja, aber nicht blind ganze Texte kopieren.

Ergaenzen:

- kurze Zusammenfassungen statt Vollkopien
- Quellenlink
- Zitat nur sparsam
- Herausgeber/Stand speichern
- keine fremden kostenpflichtigen Inhalte uebernehmen
- Screenshots fremder Seiten vermeiden

### 43.12 Rechtliche Sprache zentral pflegen

Hinweisbausteine nicht auf jeder Seite einzeln hardcoden.

Zentrale Bausteine:

- keine Rechtsberatung
- keine Steuerberatung
- keine Fachberatung
- keine Garantie
- Nutzerangaben ungeprueft
- Profi-Hinweis
- Quelle/Stand-Hinweis

Vorteil:

- spaeter eine Aenderung wirkt ueberall.

### 43.13 Produktnamen und Claims pruefen

Vor Launch pruefen:

- Domain/Marke
- Produktname
- Slogan
- Claims
- keine fremden Marken verletzen
- keine irrefuehrende Amts-/Behoerdennaehe

Nicht wirken wie:

- offizielles Behoerdenportal
- gesetzlich anerkannte Pruefstelle
- Zertifizierungsstelle

### 43.14 Kundenkommunikation bei Aenderungen

Wenn Inhalte, Preise oder Bedingungen sich aendern:

- Aenderungslog
- Admin-Hinweis
- Kundenmail spaeter
- In-App-Hinweis spaeter
- alte Version abrufbar
- Wirksamkeitsdatum

### 43.15 Finaler Planungs-Stopp

Weitere Punkte waeren jetzt fast nur noch Spezialfaelle.

Ab hier gilt:

- nicht mehr weiter aufblasen
- V1 schneiden
- Muss/Kann/Spaeter markieren
- Website von spaeterer App trennen
- Produktversprechen klein und sauber halten

## 44. Letzte sinnvolle Ergaenzungen vor dem Bau

Dieser Block ist kein weiteres Aufblasen des Produkts. Das sind die letzten Punkte, die beim echten Launch, beim Kassieren oder beim spaeteren Betrieb schnell weh tun koennen, wenn sie fehlen.

### 44.1 Regulierungs-Sperre fuer Partnerangebote

Partnerumsatz ist gut, aber nicht jede Vermittlung ist harmlos.

Sperren oder separat pruefen:

- Versicherungen
- Finanzierungen
- Darlehen
- Inkasso
- Steuerberatung
- Rechtsberatung
- Immobilienvermittlung
- Energieberatung mit Foerdermittelbezug
- Zertifizierungen, die eine Akkreditierung voraussetzen

Warum:

- Versicherungsvermittlung kann unter Paragraph 34d GewO fallen.
- Immobilien-/Darlehensvermittlung kann unter Paragraph 34c GewO fallen.
- Inkasso/Rechtsdienstleistungen koennen RDG-Registrierungspflichten ausloesen.

Fuer V1 daher:

- nur neutrale Anfrageweiterleitung an einfache Dienstleister
- keine Abschlussvermittlung fuer regulierte Produkte
- keine Provision bei regulierten Bereichen ohne Einzelfreigabe
- Partnerkategorie im Admin mit Status: frei, pruefen, gesperrt

Quellen:

- https://www.gesetze-im-internet.de/gewo/__34d.html
- https://www.gesetze-im-internet.de/gewo/__34c.html
- https://www.gesetze-im-internet.de/rdg/__10.html

### 44.2 Login-Sicherheit konkreter fassen

Das Lastenheft nennt Admin-Schutz, aber fuer einen echten Betrieb sollten die Mechaniken konkreter werden.

Ergaenzen:

- Passwort-Reset mit einmaligem Token
- Token mit kurzer Laufzeit
- Session-Rotation nach Login
- SameSite/HttpOnly/Secure Cookies
- optional 2FA fuer Admin
- Wiederherstellungscodes fuer 2FA
- Admin-Session-Zeitlimit
- Login-E-Mail bei neuem Geraet optional spaeter
- Admin-Aktionslog fuer kritische Aenderungen

V1:

- Passwort-Reset
- Session-Rotation
- sichere Cookies
- Aktionslog

2FA kann direkt vorbereitet und spaeter aktiviert werden.

### 44.3 Installations- und Server-Check

Da das System auf normalem Shared Hosting laufen soll, braucht es einen Installationscheck.

Pruefen:

- PHP-Version
- noetige PHP-Erweiterungen
- Schreibrechte fuer Datenordner
- Datenordner ausserhalb des Webroots oder per .htaccess geschuetzt
- Upload-Limit
- Mailversand
- HTTPS erkannt
- mod_rewrite/URL-Rewriting
- Zeitzone
- Dateisperren moeglich
- Backup-Pfad beschreibbar

Admin-Anzeige:

- gruen = ok
- gelb = Warnung
- rot = blockiert Launch

Das spart spaeter stundenlange Fehlersuche.

### 44.4 Status-, Wartungs- und Notfallmodus

Wenn die Seite live ist, braucht sie einen kontrollierten Fehlerzustand.

Ergaenzen:

- Wartungsmodus im Admin
- oeffentliche Wartungsseite
- Fehlerseite ohne technische Details
- interne Fehler-ID
- Admin-Fehlerlog
- Health-Check-URL fuer Monitoring
- Kontakt-Hinweis bei Stoerung

Wichtig:

- niemals PHP-Fehler oeffentlich anzeigen
- niemals Pfade, Stacktraces oder Serverdaten ausgeben

### 44.5 Inhaltliche Qualitaetsampel fuer SEO-Seiten

Damit keine duennern Pflicht-/Branchenseiten indexiert werden, braucht jede SEO-Seite eine Ampel.

Indexierbar erst wenn vorhanden:

- eindeutige Suchfrage
- kurze direkte Antwort
- Quelle
- Stand-Datum
- mindestens eine konkrete Vorlage/Checkliste/Export-Idee
- interne Links
- Meta Title
- Meta Description
- Canonical
- keine verbotenen Claims

Wenn nicht vollstaendig:

- noindex
- Entwurf
- oder nur intern sichtbar

Das verhindert, dass Google viele halbfertige Seiten als schwache Domain-Signale liest.

### 44.6 Quellen-Monitoring als Redaktionsarbeit

Nicht jede Quelle muss taeglich geprueft werden, aber jede Quelle braucht ein Review-Intervall.

Felder pro Quelle:

- URL
- Herausgeber
- Thema
- letzter Check
- naechster Check
- Risiko: niedrig, mittel, hoch
- betroffene Seiten
- Notiz zur letzten Aenderung

Review-Regel:

- hohe Haftungsnaehe: monatlich
- mittlere Haftungsnaehe: quartalsweise
- niedrige Haftungsnaehe: halbjaehrlich

Das ist wichtig, weil die Seite nicht an der Technik stirbt, sondern an veralteten Aussagen.

### 44.7 Kein offizieller Eindruck durch Domain und Layout

Bei unternehmenspflichten.de muss klar sein:

- privat betrieben
- nicht amtlich
- nicht beauftragt
- keine Behoerde
- keine Zertifizierungsstelle

Ergaenzen:

- Footer-Hinweis "Privates Informations- und Organisationstool"
- Impressum sehr sichtbar
- keine Bundesadler-/Amtsoptik
- keine Farben/Signets, die Behoerdennaehe vortaeuschen
- keine Formulierungen wie "amtlich", "zugelassen", "anerkannt", "offiziell"

### 44.8 Trennung von Marketingseite, Demo und echter Kundendatenwelt

V1 soll direkt sauber trennen:

- Marketingseiten
- Demo-Daten
- Admin-CMS
- echte Leads
- spaetere Kunden-App

Warum:

- Demo darf nie echte Kundendaten enthalten.
- Admin darf nicht versehentlich Demo-Inhalte exportieren.
- spaeterer SaaS-Bereich darf nicht mit Marketing-CMS vermischt werden.

Technisch:

- eigener Datenordner je Bereich
- klare Dateinamen
- eigene Berechtigungen
- eigene Backup-Regeln

### 44.9 Launch-Reihenfolge als harte Bremse

Vor dem Bau alles denken: ja.

Aber der Bau darf nicht mit allem gleichzeitig starten.

Reihenfolge:

1. Marketingseite mit CMS, SEO, Schema, Animationen, Rechtstext-Platzhaltern, Kontakt.
2. Admin fuer Inhalte, Quellen, Seiten, Preise, Leads, Einstellungen.
3. Demo-Nachweisordner als Leadmagnet.
4. Themen-Sortierer nur als allgemeiner Orientierungsfilter, ohne Rechtsurteil.
5. Export/ZIP/PDF spaeter als bezahlter Kern.
6. Kundenlogin und echte Akte spaeter separat.

Damit wird schnell etwas veroeffentlicht, ohne die spaetere Plattform zu verbauen.

## 45. Aktueller Schlussstand

Nach dieser Ergaenzung sind keine grossen fehlenden Pflichtbereiche mehr offen, die vor dem Bau zwingend weiter recherchiert werden muessen.

Was jetzt noch offen ist, sind keine Konzeptluecken mehr, sondern Umsetzungsentscheidungen:

- genaue Texte
- Designrichtung
- Preisanker
- Betreiberangaben
- Hostingdaten
- SMTP
- finale Domain
- Datenschutz-/Impressumsfinalisierung
- spaetere App-Architektur

Fuer die Website selbst ist das Lastenheft plus diese Erweiterung jetzt ausreichend, um mit dem Bau zu starten.

## 46. Nachrecherche: weitere Zielgruppen- und Angebotsmodule

Stand: 2026-06-18

Der Bau wurde bewusst gestoppt. Diese Nachrecherche sammelt weitere sinnvolle Module, die zur Plattform passen koennen. Wichtig: Auch hier bleibt das Prinzip gleich.

Die Plattform verkauft:

- Erinnern
- Verwalten
- Dokumentieren
- Quellen zeigen
- Nachweise sammeln
- Exporte vorbereiten
- Partner vermitteln

Die Plattform verkauft nicht:

- Rechtsurteil
- Steuerurteil
- Fachurteil
- "Du bist betroffen"
- "Du bist sicher compliant"
- amtliche Zertifizierung

### 46.1 Arbeitgeber-Basisakte

Zielgruppe:

- jeder Betrieb mit Beschaeftigten
- Handwerk
- Gastronomie
- Pflege/Betreuung nicht als Pflege-Geldthema, sondern als Arbeitgeber
- Handel
- Praxen
- kleine Industrie
- Dienstleister

Moegliche Inhalte:

- Arbeitszeiterfassung
- Mindestlohn-/Arbeitszeit-Aufzeichnungen
- Aushangpflichtige Gesetze
- Betriebliche Eingliederung, BEM
- Schwerbehindertenanzeige/Ausgleichsabgabe
- Datenschutzbeauftragten-Thema
- Arbeitsschutz-Unterweisungen
- Ersthelfer
- Betriebsarzt/Sifa-Betreuung

Produktform:

- Arbeitgeber-Fristenordner
- Mitarbeiter-Nachweisordner
- Unterweisungs- und Aushang-Checkliste
- Quellen- und Vorlagenbibliothek
- Export fuer Steuerberater, Lohnbuero, Sifa, Pruefer

RDG-Grenze:

- keine automatische Entscheidung "Pflicht besteht"
- Nutzer waehlt Thema selbst oder sieht nur allgemeine Themenvorschlaege
- bei BEM, Schwerbehindertenabgabe, Datenschutzbeauftragtem und Arbeitsrecht klar zum Profi verweisen

Bewertung:

- sehr passend
- sehr breit
- stark sticky
- aber juristisch sensibler als reine Geraete-/Prueffristen

Start-Status:

- als SEO-/Content-Cluster ja
- als automatischer Rechner nein
- als Tracker/Ordner ja

Quellen:

- Arbeitszeiterfassung BMAS: https://www.bmas.de/DE/Arbeit/Arbeitsrecht/Arbeitnehmerrechte/Regelungen-zur-Arbeitszeit/Fragen-und-Antworten/faq-arbeitszeiterfassung.html
- Mindestlohn-Dokumentation BMAS: https://www.bmas.de/DE/Arbeit/Arbeitsrecht/Mindestlohn/Dokumentationspflicht/dokumentationspflicht-art.html
- MiLoG Paragraph 17: https://www.gesetze-im-internet.de/milog/__17.html
- BEM Paragraph 167 SGB IX: https://www.gesetze-im-internet.de/sgb_9_2018/__167.html
- BDSG Paragraph 38 Datenschutzbeauftragte: https://www.gesetze-im-internet.de/bdsg_2018/__38.html
- Kuenstlersozialkasse Abgabepflicht: https://www.kuenstlersozialkasse.de/unternehmen-und-verwerter/wer-ist-abgabepflichtig

### 46.2 Arbeitsschutz- und Pruefakte

Zielgruppe:

- fast alle Arbeitgeber
- Handwerk
- Produktion
- Lager
- Bueros mit Elektrogeraeten
- Filialbetriebe
- Werkstaetten
- Vermieter/gewerbliche Immobilien

Moegliche Inhalte:

- DGUV V3 / elektrische Anlagen und Betriebsmittel
- Betriebssicherheitsverordnung / Arbeitsmittel
- ueberwachungsbeduerftige Anlagen
- Gefaehrdungsbeurteilung
- Unterweisungen
- Erste Hilfe im Betrieb
- Flucht- und Rettungswege
- Feuerloescher
- Brandschutzhelfer/Brandschutzorganisation
- Betriebsarzt und Fachkraft fuer Arbeitssicherheit nach DGUV Vorschrift 2

Produktform:

- Pruefkalender
- Anlagen- und Arbeitsmittelverzeichnis
- Unterweisungsnachweis
- Geraete-QR-Code
- PDF/ZIP-Nachweisordner
- Dienstleister-Anfrage fuer Pruefungen

RDG-Grenze:

- sehr gut beherrschbar, wenn der Nutzer Geraete/Anlagen selbst anlegt
- keine Rechtsbewertung
- nur Organisation und Nachweis

Bewertung:

- einer der besten Startbereiche
- hohe Wiederholung
- viele Betriebe
- klares Geld ueber Pruefpartner moeglich

Start-Status:

- V1-nahe
- priorisieren

Quellen:

- BAuA Gefaehrdungsbeurteilung: https://www.baua.de/DE/Themen/Arbeitsgestaltung/Gefaehrdungsbeurteilung/Handbuch-Gefaehrdungsbeurteilung/Grundlagenwissen/Grundlagen/Grundlagen_dossier
- DGUV Gefaehrdungsbeurteilung: https://www.dguv.de/de/praevention/themen-a-z/gefaehrdungsbeurteilung/index.jsp
- BetrSichV: https://www.gesetze-im-internet.de/betrsichv_2015/BJNR004910015.html
- TRBS 1201 BAuA: https://www.baua.de/DE/Angebote/Regelwerk/TRBS/pdf/TRBS-1201.pdf
- DGUV wiederkehrende Pruefungen: https://publikationen.dguv.de/widgets/pdf/download/article/787
- ASR A2.3 Fluchtwege: https://www.baua.de/DE/Angebote/Regelwerk/ASR/pdf/ASR-A2-3.pdf
- ASR A2.2 Brandschutz/Feuerloescher: https://www.baua.de/DE/Angebote/Regelwerk/ASR/pdf/ASR-A2-2.pdf

### 46.3 Fuhrpark-Akte

Zielgruppe:

- Handwerker
- Lieferdienste
- Pflegedienste
- Aussendienst
- Bau
- Garten-/Landschaftsbau
- Logistik
- Firmen mit Dienstwagen

Moegliche Inhalte:

- Fahrzeugverzeichnis
- DGUV Vorschrift 70 / Fahrzeugpruefung
- Fuehrerscheinkontrolle als Nachweisprozess
- Fahrerunterweisung
- Ladungssicherung
- Fahrtenschreiber/Tachographen-Themen
- HU/AU/Versicherung/Leasing-Fristen
- Schaden- und Wartungsdokumentation

Produktform:

- Fuhrpark-Fristenordner
- Fahrer-Unterweisungsnachweis
- Fuehrerschein-Kontrollprotokoll
- Fahrzeugakte mit QR-Code
- Partnervermittlung: Werkstatt, Pruefer, Schulung

RDG-Grenze:

- keine Aussage, wie oft im Einzelfall kontrolliert werden muss
- Nutzer dokumentiert eigene Kontrollen
- Hinweis auf Halterverantwortung nur allgemein

Bewertung:

- sehr passend
- sehr konkret
- online gut machbar
- hohes Cross-Selling zu Pruefung/Wartung/Versicherung, Versicherungen aber reguliert und nur nach separater Pruefung

Start-Status:

- gutes V2-Modul
- fuer SEO schon frueh eigene Seiten moeglich

Quellen:

- DGUV Vorschrift 70 Fahrzeuge: https://publikationen.dguv.de/widgets/pdf/download/article/1125
- BALM Fahrtenschreiber FAQ: https://www.balm.bund.de/SharedDocs/FAQs/DE/Fahrpersonalrecht/Fahrpersonalrecht_05_8.html
- BGHM Ladungssicherung: https://www.bghm.de/arbeitsschuetzer/themen/ladungssicherung

### 46.4 Immobilien- und Gebaeudeakte

Zielgruppe:

- Hausverwaltungen
- Gewerbevermieter
- Betreiber von Nichtwohngebaeuden
- Filialisten
- Hotels
- Praxen
- Gastronomie
- Vereine mit Gebaeuden

Moegliche Inhalte:

- Aufzugspruefungen
- Feuerloescher
- Flucht- und Rettungsplaene
- Legionellen/Trinkwasser
- Rauchwarnmelder
- Energieausweis
- Wartung technischer Gebaeudeausruestung
- Mietobjekt-Nachweise

Produktform:

- Objektakte
- Anlagenakte
- Fristenkalender
- Pruefberichte hochladen
- ZIP-Export je Immobilie
- Partnervermittlung zu Pruefern/Wartungsfirmen/Laboren

RDG-Grenze:

- keine mietrechtliche Einzelfallbewertung
- keine Aussage, ob genau dieses Objekt rechtlich betroffen ist
- Nutzer legt Objekt und Pruefpunkte an oder bekommt allgemeine Themenliste

Bewertung:

- sehr gut passend
- hohe Zahlungsbereitschaft bei Hausverwaltungen
- gute SEO-Mikrofragen
- Partnerumsatz stark

Start-Status:

- V1/V2-nah, wenn einfache Objektakte gebaut wird

Quellen:

- GEG Energieausweise BBSR: https://www.bbsr-geg.bund.de/GEGPortal/DE/Energieausweise/Regelungen/Regelungen-node.html
- Trinkwasser/Legionellen BMG: https://www.bundesgesundheitsministerium.de/fileadmin/Dateien/3_Downloads/T/Trinkwasserverordnung/Stammtext_TrinkwV_und_Legionellen.pdf
- Aufzuege/BetrSichV DEKRA: https://www.dekra.de/de/faq-aufzugpruefung/
- ASR A2.2 BAuA: https://www.baua.de/DE/Angebote/Regelwerk/ASR/pdf/ASR-A2-2.pdf

### 46.5 Gastro-, Lebensmittel- und Hygieneakte

Zielgruppe:

- Gastronomie
- Baeckereien
- Metzgereien
- Lebensmittelhandel
- Catering
- Kitas/Schulen nur vorsichtig und eher spaeter
- Vereine mit Lebensmittelabgabe

Moegliche Inhalte:

- HACCP-Dokumentation
- Temperaturkontrollen
- Reinigungsplaene
- Hygieneunterweisungen
- Schaedelingskontrolle
- IfSG-Belehrungen
- Allergen-/Kennzeichnungsthemen nur vorsichtig

Produktform:

- Hygieneordner
- Kontrolllisten
- Erinnerungen
- Tages-/Wochenprotokolle
- Export fuer Lebensmittelkontrolle
- Partnervermittlung: Hygieneschulung, Schaedelingsbekaempfung, Labor

RDG-Grenze:

- keine individuelle HACCP-Gefahrenanalyse automatisieren
- keine Produktaussage zu Allergenen/Etiketten ohne Fachpruefung
- als Dokumentations- und Erinnerungsordner sauberer

Bewertung:

- sehr sticky
- viele kleine Betriebe
- hohe Kontrollangst, aber nicht mit Angst werben
- mobil wichtig

Start-Status:

- V2/V3, wenn mobile Nutzung und einfache Tageslisten vorhanden sind

Quellen:

- IHK HACCP: https://www.ihk.de/pfalz/infrastruktur-und-digitale-wirtschaft/sach-und-fachkundepruefungen-unterrichtungen/gastronomie/lebensmittelhygieneschulung-informationen/haccp-konzept/haccp-in-der-praxis-4498730
- RKI Hygieneplan: https://www.rki.de/DE/Themen/Infektionskrankheiten/Krankenhaushygiene/Infektionshygiene-A-Z/H/Hygieneplan/hygieneplan-inhalt.html

### 46.6 Praxis- und Medizinprodukteakte

Zielgruppe:

- Arztpraxen
- Zahnarztpraxen
- Heilmittelerbringer
- Pflege-/Therapieeinrichtungen, aber nicht als Pflegegeld-Thema
- Labore

Moegliche Inhalte:

- MPBetreibV-Dokumentation
- Medizinprodukte-Bestandsverzeichnis
- Medizinproduktebuch
- Einweisungen
- Instandhaltung
- sicherheits- und messtechnische Kontrollen
- Hygieneplan
- Vorkommnismeldungen nur als Quellen-/Prozesshinweis

Produktform:

- Praxis-Nachweisordner
- Medizinprodukteakte
- Pruef-/Einweisungsfristen
- Export fuer Begehung/Pruefung
- Partnervermittlung an Hygienefachleute/Medizintechnik

RDG-/Haftungsgrenze:

- fachlich deutlich heikler
- keine medizinische, hygienische oder regulatorische Einzelfallbewertung
- nur spaeter mit Partnern/Fachfreigabe

Bewertung:

- hohe Zahlungsbereitschaft
- aber hohes Fachrisiko
- fuer Start nicht ideal

Start-Status:

- spaeter
- nicht V1

Quellen:

- MPBetreibV: https://www.gesetze-im-internet.de/mpbetreibv_2025/BJNR0260B0025.html
- BfArM Vorkommnisse melden: https://www.bfarm.de/DE/Medizinprodukte/Antraege-und-Meldungen/Vorkommnis-melden/_node.html
- RKI Hygieneplan: https://www.rki.de/DE/Themen/Infektionskrankheiten/Krankenhaushygiene/Infektionshygiene-A-Z/H/Hygieneplan/hygieneplan-inhalt.html

### 46.7 Handel-, Import- und Produktdatenakte

Zielgruppe:

- Onlinehaendler
- Importeure
- Markeninhaber
- Amazon-/Marketplace-Haendler
- Hersteller
- Grosshandel
- EU-Warenverkehr

Moegliche Inhalte:

- VerpackG/LUCID
- EORI
- Intrastat
- OSS/IOSS
- Produktsicherheit/GPSR
- CE-/Produktakte
- WEEE/BattG
- CBAM
- EUDR
- Digitaler Produktpass / Batteriepass

Produktform:

- Produktakte
- Lieferanten-/Dokumentensammlung
- Datenfelder je Produkt/SKU
- Fristen und Meldungen
- Quellenuebersicht
- Partnervermittlung: Labor, CE-Berater, Verpackungslizenzierung, Zoll, Steuerberater

RDG-/Steuergrenze:

- keine Zoll-/Steuerentscheidung automatisch berechnen
- keine Aussage "Registrierung ist Pflicht"
- keine Produktkonformitaet bestaetigen
- starke Partnerlogik noetig

Bewertung:

- kommerziell stark
- aber fachlich komplex
- gut fuer Content und spaetere Produktakte

Start-Status:

- als Content-Cluster ja
- als Vollmodul spaeter

Quellen:

- Zoll EORI: https://www.zoll.de/DE/Fachthemen/Zoelle/EORI-Nummer/Beantragung-einer-EORI-Nummer/beantragung-einer-eori-nummer_node.html
- Destatis Intrastat: https://www.destatis.de/DE/Service/Online-Melden/online-meldung-aussenhandel.html
- BZSt OSS: https://www.bzst.de/DE/Unternehmen/Umsatzsteuer/One-Stop-Shop_EU/one_stop_shop_eu_node.html
- ZSVR Verpackungsregister: https://www.verpackungsregister.org/
- EU CBAM: https://taxation-customs.ec.europa.eu/carbon-border-adjustment-mechanism_en
- DEHSt CBAM 2026: https://www.dehst.de/EN/Topics/CBAM/CBAM-definitive-regime-2026/CBAM-authorisation-definitive-regime/cbam-authorisation-definitive-regime_node.html
- EU EUDR: https://green-forum.ec.europa.eu/nature-and-biodiversity/deforestation-regulation-implementation_en
- ESPR/EU 2024/1781: https://eur-lex.europa.eu/eli/reg/2024/1781/oj/eng
- EU Battery Regulation summary: https://eur-lex.europa.eu/EN/legal-content/summary/sustainability-rules-for-batteries-and-waste-batteries.html

### 46.8 Hinweisgeber- und Meldestellen-Thema

Zielgruppe:

- Unternehmen ab typischerweise 50 Beschaeftigten
- Branchen mit hoeherem Compliance-Druck
- Unternehmensgruppen

Moegliche Inhalte:

- allgemeine Infoseite
- Frist-/Nachweisordner fuer interne Meldestelle
- Dokumentation: Prozess vorhanden, Verantwortliche, Schulung, Aktualisierung
- Partnervermittlung an Meldestellenanbieter oder Kanzlei

Nicht in V1 bauen:

- eigene Hinweisgeber-Meldestelle
- anonyme Meldeplattform
- Fallbearbeitung
- juristische Bewertung von Hinweisen

Warum:

- Sicherheits-, Vertraulichkeits- und Rechtsrisiko deutlich hoeher
- eigene Meldeplattform braucht technisch und organisatorisch mehr als eine Marketingseite

Bewertung:

- gutes SEO-/Lead-Thema
- gute Partnerumsatz-Chance
- kein Startmodul fuer Eigenbetrieb

Quellen:

- HinSchG: https://www.gesetze-im-internet.de/hinschg/BJNR08C0B0023.html
- BMJ Hinweisgeberschutz: https://www.bmjv.de/SharedDocs/Pressemitteilungen/DE/2022/0727_Hinweisgeberschutz.html

### 46.9 Energie-, Nachhaltigkeits- und Lieferkettenakte

Zielgruppe:

- produzierende Betriebe
- energieintensive Unternehmen
- groessere Mittelstaendler
- Importeure
- Lieferanten groesserer Kunden
- Immobilien-/Industriebetriebe

Moegliche Inhalte:

- Energieaudit/EDL-G
- EnEfG
- Abwaerme
- LkSG/interne Dokumentation
- EUDR
- CBAM
- Produktpass/Batteriepass

Produktform:

- Dokumenten- und Fristenordner
- Quellenmonitor
- Aufgabenliste
- Partnervermittlung an Energieberater, Nachhaltigkeitsberater, Zoll-/CBAM-Fachleute

RDG-Grenze:

- keine Konzern-/Schwellenwertentscheidung automatisieren
- keine Aussage zu direkter Betroffenheit
- nur allgemeine Orientierung plus Profi-Export

Bewertung:

- hohe Tickets
- weniger Kunden noetig
- aber fachlich komplex und schnell veraltet

Start-Status:

- nicht V1 als Kern
- als Landingpages/Partner-Leads sehr interessant

Quellen:

- BAFA LkSG: https://www.bafa.de/SharedDocs/Pressemitteilungen/DE/Lieferketten/2023_20_ausweitung_anwendungsbereich.html
- EU EUDR: https://green-forum.ec.europa.eu/nature-and-biodiversity/deforestation-regulation-implementation_en
- EU CBAM: https://taxation-customs.ec.europa.eu/carbon-border-adjustment-mechanism_en

### 46.10 Outbound-Vertrieb und Newsletter als eigene Rechtsfalle

Wenn die Plattform spaeter Leads ueber Newsletter, Cold-Mail oder Partnerkampagnen aufbaut, braucht das einen eigenen Block.

Ergaenzen:

- Newsletter nur mit sauberem Double-Opt-in
- DOI-Zeitpunkt/IP/Quelle speichern
- Abmeldelink in jeder Mail
- keine ungefragten Werbemails an Unternehmen als Standardkanal
- Bestandskunden-Ausnahme nur sehr eng und separat pruefen
- Kontaktformular-Anfragen nicht automatisch in Newsletter schieben
- Partnerweitergabe nur mit klarer Zustimmung

Bewertung:

- fuer Umsatz wichtig
- aber nicht auf Risiko spielen

Quelle:

- UWG Paragraph 7: https://www.gesetze-im-internet.de/uwg_2004/__7.html

### 46.11 Neue Priorisierung nach der Nachrecherche

Wenn die Plattform nicht verzetteln soll, ist diese Reihenfolge am staerksten:

1. Arbeitsschutz- und Pruefakte
2. Arbeitgeber-Basisakte
3. Immobilien- und Gebaeudeakte
4. Fuhrpark-Akte
5. Handel-/Import-/Produktdatenakte
6. Gastro-/Hygieneakte
7. Energie-/Nachhaltigkeits-/Lieferkettenakte
8. Hinweisgeber nur als Partner-/Content-Thema
9. Medizinprodukte/Praxis nur spaeter mit Fachpartner

Warum:

- Die ersten vier sind nachweis-, fristen- und objektgetrieben.
- Sie lassen sich online verwalten, ohne sofort Rechtsberatung zu spielen.
- Sie haben wiederkehrende Fristen und damit Abo-Logik.
- Sie passen zu "Nichts vergessen. Alles nachweisen koennen."

### 46.12 Was daraus fuer die Website folgt

Die Website sollte nicht alle Module gleich gross verkaufen.

Besser:

- Startseite verkauft das Grundsystem: Fristen, Nachweise, Ordner, Export.
- Darunter "Beliebte Aktenbereiche" mit 4 Startclustern.
- Weitere Bereiche in einer "Themenbibliothek" als SEO-/GEO-Struktur.
- Jede Themen-Seite hat einen kleinen konkreten Nutzen:
  - Fristenliste
  - Nachweis-Checkliste
  - Dokumentenordner-Beispiel
  - Quelle/Stand
  - Profi-Export/Partner-Hinweis

Startcluster fuer die Website:

- Arbeitsschutz & Pruefungen
- Arbeitgeber & Personal
- Gebaeude & Immobilien
- Fuhrpark & Fahrzeuge

Weitere Cluster nur sichtbar als Bibliothek:

- Handel & Import
- Lebensmittel & Hygiene
- Energie & Nachhaltigkeit
- Produktdaten & Lieferketten

Gesperrt oder nur Partner:

- Rechtsberatung
- Steuerberatung
- Versicherungsvermittlung
- Finanzierungsvermittlung
- Inkasso
- eigene Hinweisgeber-Meldestelle
- Medizinprodukte-Fachurteile

### 46.13 Neues Fazit

Es gibt noch mehr passende Bereiche als vorher sichtbar waren. Aber sie bestaetigen eher die Kernrichtung, statt sie zu aendern.

Der beste Kern bleibt:

> Digitale Fristen-, Pruef- und Nachweisakte fuer Betriebe.

Die besten Startmodule nach weiterer Suche:

1. Arbeitsschutz/Pruefungen
2. Arbeitgeber-Basisakte
3. Immobilien/Gebaeude
4. Fuhrpark
5. Handel/Import/Produktdaten als spaeterer starker Geldblock

Nicht direkt starten:

- Medizin/Praxis
- Hinweisgeber-Meldestelle
- Lieferketten-/CBAM-/EUDR-Vollautomatik
- juristische Pflichtfinder-Ausgabe

Damit ist die Plattform breiter, aber nicht beliebig: Alles muss am Ende in Objekt, Frist, Nachweis, Quelle oder Export passen.

## 47. Weitere Nachrecherche: Spezial-Cluster mit hoher Nachweislogik

Stand: 2026-06-18

Diese Runde erweitert die Plattform um Bereiche, die besonders gut zur digitalen Akte passen, weil sie aus wiederkehrenden Pruefungen, Unterweisungen, Bestellnachweisen, Betriebsanweisungen, Meldungen oder Dokumenten bestehen.

### 47.1 Gefahrstoff-, Sicherheitsdatenblatt- und Betriebsanweisungsakte

Zielgruppe:

- Handwerk
- Bau und Sanierung
- Werkstaetten
- Reinigung
- Lackierereien
- Labore
- Produktion
- Lager
- Friseure/Kosmetik mit Chemikalien
- Hausmeisterdienste
- Landwirtschaft/Gartenbau

Moegliche Inhalte:

- Gefahrstoffverzeichnis
- Sicherheitsdatenblaetter
- Betriebsanweisungen
- Gefahrstoff-Unterweisungen
- Schutzmassnahmen-Nachweise
- PSA-Nachweise
- Expositions-/Taetigkeitsnotizen
- Lieferanten-/SDB-Aktualisierungen
- Asbest-Unterlagen fuer Bestandsbau
- Explosionsschutzdokument nur als Partner-/Fachthema

Produktform:

- Gefahrstoffordner je Standort
- SDB-Ablage mit Versionsdatum
- Erinnerungen fuer SDB-Review
- Betriebsanweisungsbibliothek als Vorlage, aber nicht als fachlich fertige Freigabe
- Unterweisungsnachweis
- Export fuer Sifa, BG, Pruefer, Kunde

RDG-/Fachgrenze:

- keine automatische Gefaehrdungsbeurteilung
- keine fertige fachliche Expositionsbewertung
- keine Aussage "diese Betriebsanweisung ist ausreichend"
- Fachfreigabe durch Sifa/Arbeitsschutzpartner vorsehen

Bewertung:

- sehr stark fuer Abo
- sehr nah am urspruenglichen Gefahrstoff-Gedanken
- viele kleine Betriebe haben Schmerzen damit
- fachlich anspruchsvoll, aber als Akte/Tracker gut machbar

Start-Status:

- als eigener Startcluster moeglich
- mindestens als Unterbereich von Arbeitsschutz & Pruefungen aufnehmen

Quellen:

- BAuA Gefahrstoffverordnung: https://www.baua.de/DE/Themen/Chemikalien-Biostoffe/Gefahrstoffe/Taetigkeiten-mit-Gefahrstoffen/Gefahrstoffverordnung
- DGUV Sicherheitsdatenblatt: https://www.dguv.de/ifa/fachinfos/reach/sicherheitsdatenblatt/index.jsp
- BAuA Sicherheitsdatenblatt: https://www.baua.de/DE/Themen/Chemikalien-Biostoffe/Gefahrstoffe/Sicherheitsdatenblatt
- BG Verkehr Gefahrstoffverzeichnis/SDB: https://www.bg-verkehr.de/arbeitssicherheit-gesundheit/themen/gefahrstoffe/umgang-und-dokumentation/gefahrstoffverzeichnis-und-sicherheitsdatenblatt
- TRGS 555 Betriebsanweisung: https://www.bgbau.de/fileadmin/Gisbau/TRGS555_2017.pdf
- DGUV Explosionsschutzdokument: https://publikationen.dguv.de/widgets/pdf/download/article/3360

### 47.2 Asbest- und Bestandsbau-Akte

Zielgruppe:

- Maler
- Elektriker
- SHK
- Trockenbau
- Bodenleger
- Dachdecker
- Sanierer
- Hausverwaltungen
- Wohnungsunternehmen
- Bauunternehmen

Moegliche Inhalte:

- Objektbaujahr
- Asbest-Risikohinweise als allgemeine Information
- Unterlagen vom Auftraggeber
- Fotos/Probenberichte
- TRGS-519-Sachkundenachweise
- Anzeigen an Behoerden als Frist-/Dokumentablage
- Schutzmassnahmen-Protokolle
- Freigaben durch Fachkundige
- Entsorgungsnachweise

Produktform:

- Bestandsbau-Projektakte
- Asbest-Dokumentenordner
- Sachkunde- und Genehmigungsfristen
- Partnervermittlung: Labor, Schadstoffgutachter, Arbeitsschutz, Entsorger

Grenze:

- keine Asbest-Erkundung automatisieren
- keine Aussage, ob Material asbesthaltig ist
- keine Sanierungsfreigabe
- keine juristische Bewertung der Veranlasserpflicht

Bewertung:

- sehr aktuell
- sehr hohe Zahlungsbereitschaft im Handwerk
- starkes SEO-Thema
- fachlich heikel, daher Partnerlogik wichtig

Start-Status:

- Content/Lead stark
- als Vollmodul spaeter oder mit Fachpartner

Quellen:

- BAuA GefStoffV/Aenderungen: https://www.baua.de/DE/Themen/Chemikalien-Biostoffe/Gefahrstoffe/Taetigkeiten-mit-Gefahrstoffen/Gefahrstoffverordnung
- BG BAU Asbest-Leitfaden: https://www.bgbau.de/fileadmin/Medien-Objekte/Medien/Broschuere_Flyer/Leitfaden_Asbest_Bauen_im_Bestand.pdf
- TRGS 519 BAuA: https://www.baua.de/DE/Angebote/Regelwerk/TRGS/pdf/TRGS-519.pdf
- Baden-Wuerttemberg Asbest Anzeige/Zulassung: https://um.baden-wuerttemberg.de/de/umwelt-natur/umwelt-und-gesundheit/asbest/was-tun-wenn-asbest-vorhanden-ist/zulassung-und-anzeige

### 47.3 Umwelt-, Abfall- und Anlagenakte

Zielgruppe:

- produzierende Betriebe
- Werkstaetten
- Entsorger
- Bauunternehmen
- Kliniken/Praxen mit Spezialabfaellen
- Industrie
- Betriebe mit Tanks, Oelen, Chemikalien, Kuehlanlagen
- Landwirtschaft/Logistik mit relevanten Anlagen

Moegliche Inhalte:

- Gewerbeabfall-Dokumentation
- gefaehrliche Abfaelle
- eANV-Unterlagen
- Entsorgungsnachweise
- Abfallbeauftragter
- AwSV-Anlagendokumentation
- Pruefberichte fuer Anlagen mit wassergefaehrdenden Stoffen
- 42. BImSchV: Verdunstungskuehlanlagen, Kuehltuerme, Nassabscheider
- Betriebstagebuch
- Probenahmen/Laborberichte
- Emissionserklaerung/BUBE nur als Fristen- und Dokumentenhinweis

Produktform:

- Umweltakte je Standort
- Abfallregister-/Nachweisordner
- Anlagenkataster
- Pruef- und Meldungsfristen
- Partnervermittlung: Entsorger, Umweltberater, Sachverstaendige, Labor

Grenze:

- keine Einstufung gefaehrlicher Abfaelle automatisieren
- keine AwSV-Gefaehrdungsstufe berechnen
- keine BImSchG-Genehmigungsbewertung
- keine Umweltrechtsberatung

Bewertung:

- hoher Ticket-Wert
- weniger Kunden noetig
- sehr gute Partnerprovisionen
- stark fuer Industrie und groessere Betriebe

Start-Status:

- nicht V1-Kern
- aber als "Industrie & Umwelt"-Cluster frueh sichtbar machen

Quellen:

- UBA wassergefaehrdende Stoffe/AwSV: https://www.umweltbundesamt.de/themen/chemikalien/wassergefaehrdende-stoffe
- 42. BImSchV Gesetz: https://www.gesetze-im-internet.de/bimschv_42/BJNR237900017.html
- UBA 42. BImSchV/KaVKA: https://www.umweltbundesamt.de/presse/pressemitteilungen/gesundheitsgefahr-durch-legionellen-neue-pflichten
- Emissionserklaerung Hessen: https://verwaltungsportal.hessen.de/leistung?leistung_id=L100001_378613559
- LANUK NRW Emissionserklaerung: https://www.lanuk.nrw.de/themen/industrieanlagen/berichtspflichten/emissionserklaerung
- Abfallbeauftragtenverordnung: https://www.gesetze-im-internet.de/abfbeauftrv_2017/BJNR278900016.html
- BMUKN eANV: https://www.bundesumweltministerium.de/themen/kreislaufwirtschaft/abfallarten-und-abfallstroeme/abfallverzeichnis-und-nachweisverfahren/elektronisches-abfallnachweisverfahren-fragen-und-antworten
- Nachweisverordnung: https://www.gesetze-im-internet.de/nachwv_2007/BJNR229810006.html

### 47.4 Gefahrgut- und Transportpflichten-Akte

Zielgruppe:

- Logistik
- Speditionen
- Bau
- Chemiehandel
- Farben/Lacke
- Batterie-/Akkubetriebe
- Laborversand
- Entsorger
- Betriebe, die Gefahrgut verpacken, verladen oder versenden

Moegliche Inhalte:

- Gefahrgutbeauftragten-Nachweise
- ADR-Unterweisungen
- Schulungsfristen
- Befreiungs-/Ausnahmeunterlagen nur als Ablage
- Befoerderungspapiere als Dokumentenablage
- Verpackungs-/Kennzeichnungsnachweise
- Unfall-/Mangelprotokolle

Produktform:

- Gefahrgutakte
- Schulungs- und Zertifikatskalender
- Dokumentenablage je Sendungsart
- Partnervermittlung: Gefahrgutbeauftragter, ADR-Schulung, Verpackungsberater

Grenze:

- keine Einstufung von Gefahrgut
- keine Verpackungsanweisung automatisch festlegen
- keine Entscheidung, ob Gefahrgutbeauftragter bestellt werden muss

Bewertung:

- gutes Spezialmodul
- stark fuer Partnerumsatz
- schmaler Markt, aber hoher Schmerz

Start-Status:

- spaeter/Partner

Quellen:

- Gefahrgutbeauftragtenverordnung: https://www.gesetze-im-internet.de/gbv_2011/BJNR034100011.html
- IHK Gefahrgut/Schulungen: https://www.ihk.de/nordwestfalen/branchen/verkehr-und-logistik/gefahrguttransport/ueberblick-gefahrgutvorschriften/informationen-gefahrgut-zu-schulende-personen-4848296
- IHK Muenchen Gefahrgut: https://www.ihk-muenchen.de/ratgeber/verkehr/wirtschaftsverkehr/gefaehrliche-stoffe-und-gueter/

### 47.5 GoBD-, Kassen- und Archivakte

Zielgruppe:

- Gastronomie
- Einzelhandel
- Handwerk mit Kasse
- Friseure/Kosmetik
- kleine Dienstleister
- Onlinehaendler
- alle Betriebe mit digitalen Belegen

Moegliche Inhalte:

- Verfahrensdokumentation als Ordnerstruktur
- Kassenmeldepflicht
- TSE-/Kassenunterlagen
- E-Rechnungsannahme
- Belegablage
- Aufbewahrungsfristen
- Export fuer Steuerberater
- Systemliste: Kasse, Rechnungstool, Belegarchiv, Bank, Steuerkanzlei

Produktform:

- Steuer-/Pruefer-Nachweisordner
- Verfahrensdoku-Assistent als Dokumentationshilfe
- Kassenakte
- Aufbewahrungsfristen-Kalender
- Steuerberater-Export

Steuerberatungsgrenze:

- keine steuerliche Beurteilung
- keine GoBD-Garantie
- keine fertige steuerliche Verfahrensdokumentation ohne Steuerberater-Freigabe
- Steuerberater als Partner/Exportempfaenger

Bewertung:

- riesiger Markt
- sehr nah an Geld
- aber Steuerberatungsnaehe beachten
- guter Leadmagnet: "Welche Unterlagen gehoeren in die Kassenakte?"

Start-Status:

- als Content- und Exportmodul frueh interessant
- Voll-Assistent erst nach Steuerberater-Abgleich

Quellen:

- DATEV Verfahrensdokumentation: https://www.datev.de/web/de/berufsgruppenuebergreifend/ratgeber/rechnungswesen/verfahrensdokumentation-gemaess-gobd-erstellen
- BMF Kassenmitteilung 2024: https://www.bundesfinanzministerium.de/Content/DE/Downloads/BMF_Schreiben/Weitere_Steuerthemen/Abgabenordnung/2024-06-28-mitteilungsverpflichtung-nach-AO.pdf
- Finanzamt NRW Kassenmeldepflicht: https://www.finanzamt.nrw.de/steuerinfos/unternehmen/gewinnermittlung-und-mitteilungspflicht/mitteilungspflicht-fuer
- IHK Muenchen GoBD: https://www.ihk-muenchen.de/ratgeber/steuern/finanzverwaltung/grundsaetze-elektronische-buchfuehrung-gobd/
- IHK Koeln Aufbewahrung: https://www.ihk.de/koeln/hauptnavigation/recht-steuern/steuern/aufbewahrung-von-geschaeftsunterlagen-5905058

### 47.6 Bau-, Baustellen- und Projektakte

Zielgruppe:

- Bauunternehmen
- Handwerker
- Architekten/Bauleiter
- Projektentwickler
- Hausverwaltungen bei Sanierungen
- Bauherren mit mehreren Gewerken

Moegliche Inhalte:

- Baustellenakte
- SiGeKo-/SiGePlan-Unterlagen
- Vorankuendigung
- Unterlage fuer spaetere Arbeiten
- Bautagebuch/Bautagesberichte
- Mangel-/Foto-Dokumentation
- Abnahmeprotokolle
- Gewaehrleistungsfristen als Fristenverwaltung
- Nachunternehmer-Unterlagen
- Unterweisungen
- Asbest-/Gefahrstoff-Unterlagen

Produktform:

- Projektakte je Baustelle
- Foto-/Mangelprotokoll
- Fristenkalender
- ZIP-Export fuer Bauherr, Architekt, Auftraggeber, Gutachter
- Partnervermittlung: SiGeKo, Gutachter, Schadstofflabor, Arbeitsschutz

Grenze:

- keine VOB-/BGB-Rechtsberatung
- keine automatische Maengelruege
- keine Entscheidung, ob SiGeKo im Einzelfall Pflicht ist
- nur Doku, Fristen, Vorlagen, Export

Bewertung:

- geldstark
- hoher Dokumentationsbedarf
- Konkurrenz vorhanden, aber oft bausoftwarelastig; Nische "Nachweisordner fuer kleine Bau-/Handwerksbetriebe" ist gut

Start-Status:

- gutes spaeteres Vertikalpaket
- Asbest/Arbeitsschutz vorher staerken

Quellen:

- BAuA SiGePlan: https://www.baua.de/DE/Themen/Arbeitsgestaltung/Arbeitsstaetten/Bauwirtschaft/Sicherheits-und-Gesundheitsschutzplan
- Baustellenverordnung: https://www.gesetze-im-internet.de/baustellv/BaustellV.pdf
- BG BAU Baustellenverordnung: https://bgbauaktuell.bgbau.de/bg-bau-aktuell-12021/artikel-12021/schwerpunkt-baustellenverordnung

### 47.7 Beauftragten- und Qualifikationsakte

Zielgruppe:

- Betriebe ab ca. 20 Beschaeftigten
- Industrie
- Logistik
- Produktion
- Umwelt-/Abfallbetriebe
- Immobilien-/Anlagenbetreiber

Moegliche Rollen/Nachweise:

- Sicherheitsbeauftragte
- Ersthelfer
- Brandschutzhelfer
- Datenschutzbeauftragter
- Abfallbeauftragter
- Gefahrgutbeauftragter
- Immissionsschutzbeauftragter
- Stoerfallbeauftragter
- Gewaesserschutzbeauftragter
- Sifa/Betriebsarzt-Betreuung
- Kranfuehrer, Staplerfahrer, befaehigte Personen

Produktform:

- Beauftragtenregister
- Qualifikations- und Fortbildungsfristen
- Bestellurkunden/Aufgabenuebertragung
- Schulungsnachweise
- Vertretungslogik
- Export fuer BG, Behoerde, Kunde, Audit

Grenze:

- keine Entscheidung, welche Beauftragten rechtlich zwingend sind
- nur allgemeine Quellen/Schwellenwerte zeigen
- Bestellung und Fachkunde muss Betrieb/Profi klaeren

Bewertung:

- extrem passend zur Akte
- sehr sticky
- guter Einstieg fuer groessere Kunden

Start-Status:

- als Querschnittsmodul frueh einplanen

Quellen:

- DGUV Sicherheitsbeauftragte: https://www.dguv.de/fb-org/sachgebiete/sicherheitsbeauftragte/faqs/index.jsp
- BGHM Sicherheitsbeauftragte DGUV Vorschrift 1: https://www.bghm.de/arbeitsschuetzer/schriften-und-regelwerk/dguv-vorschriften/dguv-vorschrift-1/organisation-des-arbeitsschutzes/20-bestellung-und-aufgaben-von-sicherheitsbeauftragten
- 5. BImSchV: https://www.gesetze-im-internet.de/bimschv_5_1993/BJNR143300993.html
- 12. BImSchV: https://www.gesetze-im-internet.de/bimschv_12_2000/12._BImSchV.pdf

### 47.8 Arbeitsmittel-Tiefenpakete

Diese Themen sind keine eigene Plattform, aber sehr gute SEO- und Tool-Unterseiten im Arbeitsschutz-Cluster.

Moegliche Mini-Akten:

- Leiter-/Trittpruefung
- Regalpruefung
- kraftbetaetigte Tueren und Tore
- Krane/Hebezeuge
- Druckbehaelter
- Stapler/Flurfoerderzeuge
- PSA gegen Absturz
- Hubarbeitsbuehnen
- Rolltore/Brandschutztore

Produktform:

- Arbeitsmittelverzeichnis
- Pruefplaketten-/QR-Code-Logik
- Pruefprotokoll-Upload
- Mangelstatus
- naechste Pruefung
- Export je Arbeitsmittelgruppe

Bewertung:

- sehr gut fuer pSEO
- sehr gut fuer Abo-Stickiness
- praktisch kein RDG-Problem, wenn Nutzer selbst anlegt

Start-Status:

- V1-nah als Vorlagenkatalog

Quellen:

- DGUV Leitern/Tritte: https://www.bgbau.de/fileadmin/Medien-Objekte/Medien/DGUV-Informationen/208_016/208_016.pdf
- DGUV Regale: https://publikationen.dguv.de/widgets/pdf/download/article/785
- ASR A1.7 Tueren/Tore: https://www.baua.de/DE/Angebote/Regelwerk/ASR/pdf/ASR-A1-7.pdf
- DGUV Krane: https://publikationen.dguv.de/widgets/pdf/download/article/1157

### 47.9 Kita-, Bildungs- und Betreiberakte

Zielgruppe:

- private Kita-Traeger
- freie Traeger
- Schulen in freier Traegerschaft
- Nachmittagsbetreuung
- Vereine mit Kinderbetreuung
- Spielplatzbetreiber

Moegliche Inhalte:

- Hygieneplan
- Schutzkonzept/Gewaltschutzkonzept
- Betriebserlaubnis-Unterlagen
- Erste-Hilfe-Nachweise
- Spielplatzpruefungen
- Brandschutz/Fluchtwege
- Unterweisungen
- Unfall-/Meldeordner

Produktform:

- Einrichtungsakte
- Spielplatzakte
- Hygiene-/Schutzkonzept-Ablage
- Fristen und Pruefnachweise
- Export fuer Traeger, Aufsicht, Unfallkasse

Grenze:

- Schutzkonzepte nicht fachlich/juristisch automatisch erstellen
- keine paedagogische oder aufsichtsrechtliche Einzelfallbewertung
- nur Ablage, Checklisten, Quellen, Partner

Bewertung:

- guter Nischenmarkt
- Vertrauen sehr wichtig
- fachlich sensibel
- nicht direkt V1, aber stark fuer spaeter

Start-Status:

- spaeter, mit Fachpartnern

Quellen:

- RKI Hygieneplan: https://www.rki.de/DE/Themen/Infektionskrankheiten/Krankenhaushygiene/Infektionshygiene-A-Z/H/Hygieneplan/hygieneplan-inhalt.html
- SGB VIII Paragraph 45: https://www.sozialgesetzbuch-sgb.de/sgbviii/45.html
- Kita Schutzkonzept Bayern: https://www.stmas.bayern.de/kinderbetreuung/kinderschutz-kita.php
- Tuev Nord Spielplatzpruefung: https://www.tuev-nord.de/de/dienstleistungen/pruefung-und-gutachten/spielplatz-inspektionen/
- Sichere Kita Spielplatzpruefung: https://www.sichere-kita.de/aussengelaende/hinweise/pruefung-und-wartung-von-spielplatzgeraeten

### 47.10 Neue Einordnung nach Spezial-Clustern

Durch diese weitere Suche verschiebt sich die beste Startlogik leicht.

Der staerkste Kern ist jetzt:

1. Arbeitsschutz-, Pruef- und Arbeitsmittelakte
2. Gefahrstoff- und Betriebsanweisungsakte
3. Arbeitgeber-/Beauftragtenakte
4. Gebaeude-/Immobilienakte
5. Fuhrparkakte

Sehr starke spaetere Vertikalen:

- Bau-/Asbest-/Baustellenakte
- Umwelt-/Abfall-/Anlagenakte
- GoBD-/Kassen-/Archivakte
- Handel-/Import-/Produktdatenakte

Partner-only oder spaeter mit Fachleuten:

- Gefahrgut-Fachbewertung
- Immissionsschutz/Stoerfall/Gewaesserschutz
- Kita-Schutzkonzepte
- Medizinprodukte/Praxis
- Steuer-/GoBD-Freigabe

### 47.11 Was auf die Website noch drauf sollte

Die Website sollte zusaetzlich zu den bisherigen Startclustern einen Abschnitt bekommen:

> Aktenbereiche, die Betriebe typischerweise dokumentieren

Mit Kacheln:

- Pruefungen & Arbeitsmittel
- Gefahrstoffe & Betriebsanweisungen
- Personal & Beauftragte
- Gebaeude & Brandschutz
- Fuhrpark & Fahrzeuge
- Kasse & Belege
- Bau & Sanierung
- Umwelt & Abfall

Wichtig:

- Nicht jede Kachel als voll fertiges Modul verkaufen.
- Einige Kacheln als "Themenbibliothek" und "Partner anfragen" markieren.
- Hauptverkauf bleibt der Nachweisordner, nicht die Rechtsauskunft.

### 47.12 Neues Fazit

Die weitere Suche bestaetigt: Das beste Geschaeft ist nicht eine Pflichtfinder-Seite, sondern eine Aktenplattform fuer alles, was Betriebe nachweisen, pruefen, unterweisen, bestellen oder spaeter vorlegen muessen.

Der beste Claim bleibt:

> Nichts vergessen. Alles nachweisen koennen.

Noch schaerfer als Produktversprechen:

> Die digitale Betriebsakte fuer Pruefungen, Fristen, Unterweisungen und Nachweise.

Damit sind die neu gefundenen Bereiche nicht Ablenkung, sondern echte Unterordner derselben Plattform.

## 48. Weitere Tiefenrecherche: Fristen-, Melde- und Spezialakten

Diese Runde geht tiefer in Pflichten, die nicht unbedingt als eigenes Startmodul taugen, aber fuer SEO, Angebotsseiten, Nachweisordner, Partnerumsatz oder spaetere Branchenpakete wertvoll sind.

Wichtig: Die Plattform bleibt ein Akten-, Erinnerungs- und Export-System. Sie sortiert Themen und Quellen, aber sie entscheidet nicht verbindlich, ob eine Pflicht im Einzelfall besteht.

### 48.1 Arbeitsmedizin-, Mutterschutz-, Jugendarbeitsschutz- und Biostoffakte

Zielgruppen:

- Arbeitgeber mit gewerblichen, handwerklichen oder medizinischen Taetigkeiten
- Praxen, Labore, Pflege-/Betreuungseinrichtungen ohne Pflegegeldthema
- Kitas, Schulen, Reinigungsbetriebe, Werkstaetten
- Ausbildungsbetriebe mit minderjaehrigen Azubis
- Betriebe mit biologischen Arbeitsstoffen

Moegliche Inhalte:

- Vorsorgekartei fuer arbeitsmedizinische Vorsorge
- Angebots-/Pflichtvorsorge-Termine
- Mutterschutz-Gefaehrdungsbeurteilung als Ablagepunkt
- Meldung/Benachrichtigung bei Schwangerschaft als Frist-/Aufgabenpunkt
- Erstuntersuchung/Nachuntersuchung bei Jugendlichen
- Biostoff-Gefaehrdungsbeurteilungen und Unterweisungen
- Impf-/Vorsorgehinweise als Nachweisablage, ohne medizinische Bewertung

Produktform:

- Personal-Schutzakte
- Vorsorge- und Eignungsnachweisordner
- Termin- und Erinnerungslogik
- Uploads fuer Bescheinigungen und Unterweisungen
- Export fuer Betriebsarzt, Sifa, Aufsicht oder interne Kontrolle

Grenze:

- keine medizinische Bewertung
- keine Mutterschutz-Einzelfallentscheidung
- keine automatische Aussage "diese Vorsorge ist Pflicht"
- Nutzer oder Fachpartner legt fest, welche Vorsorge/Pruefung angelegt wird

Bewertung:

- sehr passend fuer wiederkehrende Fristen
- sticky, weil Beschaeftigte wechseln
- gut fuer Arbeitgeber-Basisakte
- fachlich sensibel, daher eher Tracker als Check-Automat

Start-Status:

- als Unterordner in Arbeitgeber-/Arbeitsschutzakte aufnehmen
- keine eigene Landingpage als Hauptprodukt in V1

Quellen:

- ArbMedVV Vorsorgekartei: https://www.gesetze-im-internet.de/arbmedvv/BJNR276810008.html
- BAuA Arbeitsmedizin FAQ: https://www.baua.de/DE/Die-BAuA/Aufgaben/Geschaeftsfuehrung-von-Ausschuessen/AfAMed/FAQ/FAQ_node.html
- Mutterschutzgesetz: https://www.gesetze-im-internet.de/muschg_2018/BJNR122810017.html
- BGHM Mutterschutz: https://www.bghm.de/arbeitsschuetzer/themen/mutterschutz
- Jugendarbeitsschutz-Untersuchungen NRW: https://www.arbeitsschutz.nrw.de/fachthemen/fachthemen-von-z/jugendarbeitsschutz/aerztliche-untersuchungen-vor-ausbildung-und
- BioStoffV: https://www.gesetze-im-internet.de/biostoffv_2013/BJNR251410013.html
- BAuA TRBA 250: https://www.baua.de/DE/Angebote/Regelwerk/TRBA/TRBA-250.html

### 48.2 Arbeitgeber-Meldekalender: BG, SV, Unfall, Schwerbehinderung, KSK

Zielgruppen:

- alle Arbeitgeber
- Betriebe mit Steuerberater/Lohnbuero
- wachsende Kleinbetriebe ab ca. 5 bis 20 Mitarbeitern
- Agenturen, Shops, Handwerk, Gastro, Dienstleister

Moegliche Inhalte:

- digitaler Lohnnachweis zur gesetzlichen Unfallversicherung
- Unfallanzeige bei Arbeitsunfaellen
- Unternehmensnummer/BG-Zuordnung als Stammdatenfeld
- SV-Meldeportal als Prozesshinweis
- Schwerbehindertenanzeige/Ausgleichsabgabe
- Kuenstlersozialabgabe-Meldung fuer Unternehmen mit Kreativ-/Publizistikleistungen
- Wiedervorlagen fuer Steuerberater/Lohnbuero

Produktform:

- Arbeitgeber-Jahreskalender
- Fristenkarte pro Jahr
- Dokumentenablage je Meldung
- Exportordner "Lohnbuero/Steuerberater"
- Erinnerungen an Verantwortliche
- Nachweis, dass Meldungen vorbereitet/abgelegt wurden

Grenze:

- keine Beitragsberechnung als Rechts-/Sozialversicherungsurteil
- keine automatische Pflichtfeststellung bei KSK oder Schwerbehindertenabgabe
- bei Berechnungen auf amtliche Tools oder Profi verweisen

Bewertung:

- sehr stark fuer Retention
- viele Betriebe haben echte Fristenangst
- guter SEO-Longtail: "Lohnnachweis BG Frist", "Unfallanzeige Arbeitgeber", "KSK Meldung Frist"
- hoher Nutzen ohne eigene Fachentscheidung, wenn sauber als Kalender/Ordner gebaut

Start-Status:

- als Startbestandteil der Arbeitgeberakte aufnehmen
- Startseite kann "Jahresfristen fuer Arbeitgeber" als Modul zeigen

Quellen:

- DGUV Lohnnachweis Fristen: https://www.dguv.de/de/versicherung/uv-meldeverfahren/faq/fristen/index.jsp
- DGUV Unfallanzeige: https://www.dguv.de/de/ihr_partner/unternehmen/unfallanzeige/index.jsp
- DGUV Unternehmensnummer: https://www.dguv.de/de/versicherung/unternehmensnummer/index.jsp
- SV-Meldeportal: https://info.sv-meldeportal.de/
- Bundesagentur/IW-Elan Schwerbehindertenanzeige: https://www.iw-elan.de/
- SGB IX Paragraph 163: https://www.gesetze-im-internet.de/sgb_9_2018/__163.html
- Kuenstlersozialkasse Pflichten Unternehmer: https://www.kuenstlersozialkasse.de/unternehmen-und-verwerter/pflichten-unternehmer-und-verwerter

### 48.3 Datenschutz-Nachweisakte fuer Kunden

Zielgruppen:

- fast alle B2B-Dienstleister
- Agenturen, SaaS-Anbieter, Online-Shops, Praxen
- Handwerksbetriebe mit Kundendaten
- Vereine/Traeger als spaetere Nische

Moegliche Inhalte:

- Verzeichnis von Verarbeitungstaetigkeiten
- AV-Vertraege und Unterauftragnehmerliste
- TOM-Dokumentation
- Datenschutz-Folgenabschaetzung als Ablage-/Pruefpunkt
- Datenschutzvorfall-Protokoll
- Loeschkonzept und Aufbewahrungsnotizen
- Betroffenenanfragen als Ticket-/Nachweislogik

Produktform:

- Datenschutzordner
- AVV-/TOM-Ablage
- Vorfall- und Anfragejournal
- Export fuer Datenschutzbeauftragten oder Kundenpruefung
- Quellenbibliothek mit Stand-Datum

Grenze:

- keine Datenschutzrechtsberatung
- keine automatische Entscheidung "DSFA erforderlich"
- keine fertige Rechtsmeinung zu TOM-Angemessenheit
- klare Weiterleitung an Datenschutzbeauftragte/Fachpartner

Bewertung:

- sehr passend zur Nachweislogik
- starke Konkurrenz durch Datenschutztools
- trotzdem gutes Modul, weil es in der Betriebsakte als Unterordner Sinn macht
- eher Bindungsmodul als Hauptkeil

Start-Status:

- als Basisordner aufnehmen
- keine aggressive V1-Positionierung gegen reine Datenschutztools

Quellen:

- BfDI Verzeichnis von Verarbeitungstaetigkeiten: https://www.bfdi.bund.de/DE/Fachthemen/Inhalte/Allgemein/Verzeichnis-Verarbeitungstaetigkeiten.html
- DSGVO Artikel 30: https://dsgvo-gesetz.de/art-30-dsgvo/
- DSGVO Artikel 35: https://dsgvo-gesetz.de/art-35-dsgvo/
- Stiftung Datenschutz TOM: https://stiftungdatenschutz.org/ehrenamt/praxisratgeber/praxisratgeber-detailseite/technische-und-organisatorische-massnahmen-318
- DSGVO Artikel 28: https://dsgvo-gesetz.de/art-28-dsgvo/

### 48.4 GwG-, Transparenzregister- und LEI-Akte

Zielgruppen:

- Immobilienmakler
- Gueterhaendler mit hochwertigen Waren
- Finanz-/Versicherungsvermittler nur vorsichtig
- Kfz-Handel, Kunst-/Edelmetallhandel
- Gesellschaften mit wirtschaftlich Berechtigten
- DORA-/Finanznahe Betriebe mit LEI-Thema als spaeteres Spezialfeld

Moegliche Inhalte:

- GwG-Risikoanalyse als Ablagepunkt
- interne Sicherungsmassnahmen
- Schulungsnachweise
- Identifizierungs-/Sorgfaltspflichten als Checklistenablage
- Transparenzregister-Unterlagen
- LEI-Stammdaten und Verlaengerungsfristen

Produktform:

- Geldwaesche-Nachweisordner
- Schulungs- und Pruefkalender
- Partnervermittlung zu GwG-Beratern
- Export fuer Behoerde, internen Verantwortlichen oder Fachberater

Grenze:

- hohe Rechtsnaehe
- keine automatische GwG-Pflichtentscheidung
- keine Risikoanalyse generieren, nur Vorlage/Ablage/Partner
- keine Verdachtsmeldeberatung

Bewertung:

- hoher Schmerz bei betroffenen Zielgruppen
- gute Zahlungsbereitschaft, aber heikel
- besser als Partner-/Spezialpaket statt Kernprodukt

Start-Status:

- nicht V1-Kern
- spaeter als Branchenpaket "Immobilien/Kfz/Gueterhandel" mit Fachpartner

Quellen:

- Transparenzregister: https://www.transparenzregister.de/
- BVA Transparenzregister FAQ: https://www.bva.bund.de/DE/Das-BVA/Aufgaben/T/Transparenzregister/transparenzregister_node.html
- Zoll FIU Sorgfaltspflichten: https://www.zoll.de/DE/FIU/Fachliche-Informationen/Geldwaeschepraevention-Nichtfinanzunternehmen/Sorgfaltspflichten/sorgfaltspflichten_node.html
- Berlin Geldwaesche Downloads: https://www.berlin.de/sen/wirtschaft/wirtschaftsrecht/geldwaesche/downloads/
- BaFin LEI/DORA FAQ: https://www.bafin.de/SharedDocs/FAQs/DE/DORA/Meldewesen_IKT_Vorfaelle/Technische_Fragen_zum_Meldeverfahren/02.html

### 48.5 A1-, Entsendungs- und Auslandsarbeit-Akte

Zielgruppen:

- Handwerksbetriebe mit Auslandsbaustellen
- Monteure, Messebauer, Servicetechniker
- Beratungen, Agenturen, IT-Dienstleister mit EU-Kundenterminen
- Logistik/Transport
- Bau und Anlagenbau

Moegliche Inhalte:

- A1-Bescheinigungen je Reise/Person
- Entsendemeldungen und Nachweise
- Projekt-/Reiseakte
- Wiedervorlagen fuer befristete Bescheinigungen
- Ablage fuer Sozialversicherungstraeger, Zoll, Kunde

Produktform:

- Auslandsreise-/Entsendeakte
- Mitarbeiter- und Projektordner
- Fristen und Wiedervorlagen
- Export fuer Lohnbuero, Projektleiter, Zollpruefung

Grenze:

- keine arbeitsrechtliche Entsendungsberatung
- keine automatische Entscheidung zu Ziellandpflichten
- keine Sozialversicherungsberatung
- nur Dokumenten-/Fristenverwaltung plus Quellenhinweise

Bewertung:

- sehr gutes Nischenpaket
- online umsetzbar
- hohe Schmerzhaftigkeit, weil Auslandsarbeit oft spontan passiert
- als Add-on fuer Handwerk/Bau/Service stark

Start-Status:

- als Add-on in V1-Datenmodell vorbereiten
- als SEO-/Landingpage spaeter starten

Quellen:

- DRV A1 FAQ: https://www.deutsche-rentenversicherung.de/SharedDocs/FAQ/a1_bescheinigung/a1_bescheinigung_faq_liste.html
- DVKA elektronisches Antragsverfahren: https://www.dvka.de/de/arbeitgeber-erwerbstaetige/antraege-finden/elektronisches-antragsverfahren.html
- Zoll Entsendung Meldungen: https://www.zoll.de/DE/Fachthemen/Arbeit/Zeitarbeit-Arbeitnehmerueberlassung/Mindestarbeitsbedingungen/Meldungen-bei-Entsendung/meldungen-bei-entsendung_node.html
- Zoll Anmeldung Entsendung: https://www.zoll.de/DE/Fachthemen/Arbeit/Anmeldungen-bei-Entsendung/Anmeldung/anmeldung_node.html
- IHK Konstanz A1-Bescheinigung: https://www.ihk.de/konstanz/international/laenderinformationen/entsendung2/a1-bescheinigung-4493064

### 48.6 Physikalische Einwirkungen und Spezial-Arbeitsschutz

Zielgruppen:

- Industrie, Metall, Holz, Bau, Werkstaetten
- Betriebe mit lauten Maschinen
- Betriebe mit Hand-Arm-/Ganzkoerpervibration
- Laseranwender, Kosmetik/Medizin/Industrie
- Betriebe mit elektromagnetischen Feldern
- Hoehenarbeit, Dach, Geruest, Wartung

Moegliche Inhalte:

- Laerm-/Vibrationsunterlagen
- Messberichte
- Unterweisungen
- PSA-Pruefungen gegen Absturz
- Laserschutzbeauftragten-Unterlagen
- EMF-Gefaehrdungsbeurteilung als Ablagepunkt
- Arbeitsmedizinische Vorsorgeverweise

Produktform:

- Spezial-Arbeitsschutzordner
- Mess- und Unterweisungsakte
- Fristen fuer Wiederholungspruefungen
- Partnervermittlung zu Messstellen/Sifa/Pruefern

Grenze:

- keine Messung ersetzen
- keine Grenzwertbewertung automatisch
- keine technische Gefaehrdungsbeurteilung generieren
- nur Dokumentation, Erinnerung, Quellen, Partner

Bewertung:

- stark fuer Fachbetriebe mit realen Risiken
- weniger breit, aber gute Zahlungsbereitschaft
- sehr passend als Erweiterung der Arbeitsschutzakte

Start-Status:

- Datenmodell vorbereiten
- als spaetere Branchen-/Gefaehrdungspakete einbauen

Quellen:

- LaermVibrationsArbSchV: https://www.gesetze-im-internet.de/l_rmvibrationsarbschv/BJNR026110007.html
- BAuA TRLV Laerm: https://www.baua.de/DE/Angebote/Regelwerk/TRLV/TRLV-Laerm.html
- OStrV: https://www.gesetze-im-internet.de/ostrv/BJNR096010010.html
- BAuA elektromagnetische Felder: https://www.baua.de/DE/Themen/Arbeitsgestaltung/Physikalische-Faktoren/Elektromagnetische-Felder/Gesetzliche-Regelungen
- EMFV: https://www.gesetze-im-internet.de/emfv/BJNR253110016.html
- DGUV PSA gegen Absturz FAQ: https://www.dguv.de/fb-psa/fragen-und-antworten/faq-absturz/index.jsp

### 48.7 Erlaubnis-, Lizenz- und Branchenzulassungsakte

Zielgruppen:

- Bewachungsunternehmen
- Gueterkraftverkehr/Transportunternehmen
- Handwerksbetriebe
- Gastronomie und Lebensmittelbetriebe
- Makler/Vermittler nur mit Vorsicht
- erlaubnispflichtige Gewerbe

Moegliche Inhalte:

- Erlaubnisse und Genehmigungen
- Sachkundenachweise
- Registerauszuege
- Schulungs-/Unterrichtungsnachweise
- Fristen fuer Erneuerung, Weiterbildung, Versicherungen
- Betriebsnummern, Lizenznummern, Ansprechpartner

Produktform:

- Lizenz- und Erlaubnisordner
- Nachweisexport fuer Auftraggeber/Behoerde
- Erinnerungen fuer Ablaufdaten
- QR-/Schnellnachweis fuer Fahrzeuge/Objekte/Standorte

Grenze:

- keine Bewertung, ob Gewerbe erlaubnispflichtig ist
- keine Erlaubnisberatung
- keine rechtliche Vertretung gegenueber Behoerden

Bewertung:

- sehr guter Produktfit, weil alles dokumenten- und fristengetrieben ist
- je Branche kleines, aber klares Paket
- SEO stark ueber konkrete "Nachweis/Erlaubnis/Frist"-Suchanfragen

Start-Status:

- als spaeteres Branchenpaket stark
- in V1 als generischer "Lizenzen und Genehmigungen"-Ordner aufnehmen

Quellen:

- BewachV: https://www.gesetze-im-internet.de/bewachv_2019/BJNR069200019.html
- IHK Hannover Bewachungsgewerbe: https://www.ihk.de/hannover/hauptnavigation/recht/gewerberecht/aktuelle-meldungen-zum-bewachungsgewerbe-5316122
- BALM Gemeinschaftslizenzen: https://www.balm.bund.de/DE/Themen/Genehmigungen/Gemeinschaftslizenzen/gemeinschaftslizenzen_node.html
- HWK Muenchen Handwerksrolle: https://www.hwk-muenchen.de/artikel/handwerksrolle-74,0,7358.html
- IHK Frankfurt Lebensmittelpflichtschulungen: https://www.frankfurt-main.ihk.de/branchenthemen/portal-gastronomie-tourismus-und-gesundheitswirtschaft/wichtige-informationen-zum-gaststaettengewerbe/pflichtschulungen-im-lebensmittelbereich-5249032

### 48.8 Exportkontroll-, Zoll- und Praeferenzakte

Zielgruppen:

- Hersteller und Haendler mit Auslandsgeschaeft
- Maschinenbau, Elektronik, Ersatzteile
- Online-Haendler mit B2B-Ausland
- Forschungsnahe Unternehmen
- Importeure/Exporteure

Moegliche Inhalte:

- ATLAS-Ausfuhrunterlagen
- Ausfuhrgenehmigungen
- Exportkontroll-Checklisten als Ablage, nicht als Entscheidung
- Dual-Use-Unterlagen
- Lieferantenerklaerungen
- Ursprung/Praeferenznachweise
- interne Verantwortlichkeiten

Produktform:

- Export-Nachweisordner
- Lieferantenerklaerungs-Verwaltung
- Wiedervorlagen fuer Erklaerungen/Genehmigungen
- Export fuer Zollberater, IHK, internen Exportverantwortlichen

Grenze:

- keine Gueterlisten-Einstufung automatisieren
- keine Embargo-/Sanktionsberatung
- keine Genehmigungspflicht verbindlich berechnen
- Fachpartner fuer Exportkontrolle zwingend anbieten

Bewertung:

- sehr hoher Wert bei wenigen Kunden
- aber fachlich gefaehrlich, daher kein Startkeil
- stark als Partner-Lead und Premium-Add-on

Start-Status:

- spaeter, nicht V1
- Content/SEO nur defensiv und quellenbasiert

Quellen:

- BAFA Exportkontrolle: https://www.bafa.de/DE/Aussenwirtschaft/Ausfuhrkontrolle/ausfuhrkontrolle_node.html
- BAFA Gueterlisten: https://www.bafa.de/DE/Aussenwirtschaft/Ausfuhrkontrolle/Gueterlisten/gueterlisten_node.html
- Zoll ATLAS Ausfuhr: https://www.zoll.de/DE/Fachthemen/Zoelle/ATLAS/ATLAS-Ausfuhr/atlas-ausfuhr_node.html
- Zoll Dual-Use-Gueter: https://www.zoll.de/DE/Fachthemen/Aussenwirtschaft-Bargeldverkehr/Warenausfuhr/Waren/Dual-Use-Gueter/dual-use-gueter_node.html
- IHK Stuttgart Lieferantenerklaerung: https://www.ihk.de/stuttgart/fuer-unternehmen/international/import-export/warenursprung/zollvorteile-praeferenzen/lieferantenerklaerung-mit-praeferenz-683660

### 48.9 Gebaeudewasser-, Legionellen- und Kuehlanlagenakte

Zielgruppen:

- Vermieter/gewerbliche Immobilienbetreiber
- Hotels, Fitnessstudios, Sportanlagen
- Pflege-/Betreuungseinrichtungen als Gebaeudebetreiber
- Industrie mit Verdunstungskuehlanlagen, Kuehltuermen, Nassabscheidern
- Hausverwaltungen

Moegliche Inhalte:

- Legionellenuntersuchungen
- Probennahmeberichte
- Trinkwasser-Risikoabschaetzungen als Ablagepunkt
- Kuehlanlagen-Betriebstagebuch
- Wartungs- und Laborberichte
- Meldungen/Anzeigen als Aufgabenpunkt

Produktform:

- Wasser-/Kuehlanlagenakte
- Laborbericht-Ablage
- Fristen und Wiederholungsuntersuchungen
- Export fuer Gesundheitsamt, Hausverwaltung, Betreiber, Dienstleister

Grenze:

- keine Trinkwasserbewertung
- keine Gefaehrdungsanalyse erstellen
- keine technische Sanierungsentscheidung
- Partner fuer Labor/Sachverstaendige

Bewertung:

- sehr guter Fit fuer Immobilien-/Gebaeudeakte
- wiederkehrend und nachweislastig
- gutes Branchenpaket fuer Hausverwaltungen/Hotels/Fitness

Start-Status:

- als Modul unter Gebaeudeakte aufnehmen
- bei V1 mindestens als Ordner-/Fristenart vorbereiten

Quellen:

- UBA Legionellen Trinkwasser-Installationen: https://www.umweltbundesamt.de/system/files/medien/421/dokumente/twk_08_1-0-18_endfassung_uba-empfehlung_systemische_untersuchung_legionellen.pdf
- UBA Trinkwasser Regelwerk: https://www.umweltbundesamt.de/themen/wasser/trinkwasser/rechtliche-grundlagen-empfehlungen-regelwerk
- 42. BImSchV: https://www.gesetze-im-internet.de/bimschv_42/BJNR237900017.html

### 48.10 Ausbildungs- und Azubi-Nachweisakte

Zielgruppen:

- Ausbildungsbetriebe
- Handwerk
- Handel
- Gastronomie
- Industrie
- Praxen und Kanzleien mit Azubis

Moegliche Inhalte:

- Ausbildungsnachweise/Berichtshefte als Upload oder Freigabeprozess
- Ausbildungsplaene
- Unterweisungsnachweise
- Erstuntersuchung bei minderjaehrigen Azubis
- Pruefungs-/IHK-/HWK-Fristen
- Ausbilder-Zuordnung

Produktform:

- Azubi-Akte
- digitaler Nachweisordner je Azubi
- Freigabe-/Kenntnisnahme-Workflow
- Export fuer IHK/HWK/Pruefung

Grenze:

- kein Ersatz fuer offizielle IHK/HWK-Portale, wo diese zwingend sind
- keine arbeitsrechtliche Bewertung
- keine paedagogische Beurteilung

Bewertung:

- guter Zusatz fuer Arbeitgeberakte
- sehr konkret und suchbar
- kann fuer kleine Betriebe wertvoll sein, wenn sie keinen grossen HR-Stack nutzen

Start-Status:

- spaeteres Add-on
- in V1 als Dokumentenordner vorbereiten

Quellen:

- BBiG Paragraph 14: https://www.gesetze-im-internet.de/bbig_2005/__14.html
- BIBB Ausbildungsnachweis: https://www.bibb.de/de/141441.php
- IHK Stuttgart Berichtsheft: https://www.ihk.de/stuttgart/fuer-azubis/vertraege/berichtsheft-670862
- IHK Nord Westfalen Ausbildungsnachweis: https://www.ihk.de/nordwestfalen/bildung/ausbildung/auszubildende/ausbildungsnachweis-3556872

### 48.11 Was diese Runde neu zur Produktlogik sagt

Die Suche zeigt: Es gibt noch sehr viele Einzelpflichten, aber die Website darf nicht als "Pflichtenlexikon mit 1.000 Urteilen" starten.

Die richtige Verpackung ist:

- Hauptprodukt: digitale Betriebsakte
- Kernfunktion: Fristen, Nachweise, Unterlagen, Exporte
- SEO: konkrete Pflichtseiten mit Quellen, Datum, Schwellenwerten und neutralen Formulierungen
- Tool je Seite: Checkliste, Fristnotiz, Dokumentenupload, Kalender, Export
- Keine Tool-Aussage: "Du musst das"
- Nutzeraktion: "In meine Akte uebernehmen"

Damit bleibt der Nutzen hoch, aber die juristische Subsumtion bleibt beim Nutzer oder Fachpartner.

### 48.12 Endlosigkeitsbremse: Was jetzt noch wirklich gesucht werden sollte

Die Suche ist theoretisch endlos, weil jeder Rechtsbereich wieder Unterpflichten hat. Ab jetzt sollte nur noch aufgenommen werden, wenn mindestens drei von fuenf Punkten erfuellt sind:

1. Es betrifft viele Betriebe oder eine klar zahlungsfaehige Nische.
2. Es erzeugt wiederkehrende Fristen oder Nachweise.
3. Es ist online als Akte/Tracker/Export loesbar.
4. Es kann ohne Rechtsurteil verkauft werden.
5. Es hat klare Quellen und konkrete SEO-Suchfragen.

Nicht mehr aktiv verfolgen:

- reine Informationspflichten ohne Wiederkehr
- Themen, die nur Anwalt/Steuerberater/Fachingenieur leisten kann
- politische/foerderrechtliche Spezialfaelle
- Verbraucherrechte ohne B2B-Nachweisordner
- Einzelfallberechnungen mit hoher Haftung

### 48.13 Aktualisierte Startlogik nach dieser Runde

Startpaket 1: Arbeitsschutz-, Pruef- und Arbeitsmittelakte

- DGUV V3
- Feuerloescher/Brandschutz
- Leitern, Regale, Tore, Krane, Anschlagmittel
- Unterweisungen
- Ersthelfer/Betriebsarzt/Sifa
- Vorsorge-/Arbeitsmedizin-Ablage

Startpaket 2: Arbeitgeber- und Jahresmeldeakte

- Arbeitszeit/Mindestlohn-Ablage
- Aushang-/Unterweisungsordner
- BG-Lohnnachweis
- Unfallanzeige-Ablage
- Schwerbehindertenanzeige als Fristpunkt
- KSK als optionaler Fristpunkt

Startpaket 3: Gebaeude-, Immobilien- und Betreiberakte

- Brandschutz
- Aufzuege/Tore/Anlagen
- Trinkwasser/Legionellen
- Miet-/Wartungsvertraege
- Objekt-/Standortexport

Startpaket 4: Gefahrstoff- und Betriebsanweisungsakte

- Sicherheitsdatenblaetter
- Gefahrstoffverzeichnis
- Betriebsanweisungen als Vorlagen/Ablage
- Unterweisungen
- Partner fuer Fachbewertung

Startpaket 5: Fuhrpark-, Lizenz- und Genehmigungsakte

- Fahrzeuge, Fahrer, UVV
- Fuehrerscheinkontrolle als Ablagepunkt
- Fahrerqualifikation
- Gueterkraft-/Transportlizenzen
- A1/Entsendung spaeter als Add-on

Spaetere Premium-Pakete:

- Export/Zoll/Praeferenz
- GwG/Transparenzregister
- Datenschutz-Nachweisakte
- Umwelt/AwSV/Abfall/Kuehlanlagen
- Bau/Asbest/Baustellen
- Azubi-/Ausbildungsakte

### 48.14 Praktisches Angebotsraster fuer die Website

Jede Zielgruppe bekommt nicht "alle Pflichten", sondern einen sofort verstaendlichen Ordner:

- Handwerk: Pruefungen, Unterweisungen, Fahrzeuge, Baustellen, A1
- Gastro/Hotel/Fitness: Hygiene, Mitarbeiter, Brandschutz, Trinkwasser, Geraete
- Hausverwaltung/Immobilien: Gebaeude, Wartungen, Brandschutz, Trinkwasser, Aufzuege
- Werkstatt/Produktion: Arbeitsmittel, Gefahrstoffe, Laerm/Vibration, PSA, Maschinen
- Handel/Import: Produktunterlagen, Verpackung/WEEE, Lager, Datenschutz, Kasse
- Dienstleister/Agentur: Arbeitgeberfristen, KSK, Datenschutz, Kunden-/AVV-Nachweise
- Transport/Logistik: Fuhrpark, Fahrer, Lizenzen, Gefahrgut-Partner, Ausland/A1
- Ausbildungsbetrieb: Azubi-Akten, Berichtshefte, Unterweisungen, Jugendschutz

Das kann auf einer Website gemeinsam existieren, wenn die Navigation nach "Akte/Ordner" statt nach Gesetzesnamen gebaut wird.

### 48.15 Geldlogik nach dieser Nachrecherche

Die besten Umsaetze entstehen nicht durch immer neue Pflichtseiten, sondern durch mehr gespeicherte Objekte:

- Standort
- Mitarbeiter
- Fahrzeug
- Arbeitsmittel
- Maschine
- Gefahrstoff
- Gebaeudeobjekt
- Lizenz/Genehmigung
- Vertrag
- Nachweis
- Partneranfrage

Preismodell daraus:

- Einstieg: 39 bis 79 EUR monatlich fuer kleine Betriebe
- Standard: 99 bis 199 EUR monatlich fuer Betriebe mit mehreren Ordnern
- Pro/Standorte: 249 bis 499 EUR monatlich
- Premium/Partner- oder Einrichtungsservice: 499 bis 2.500 EUR einmalig
- Partner-Leads: Provision je Pruefung, Schulung, Wartung, Beratung, Messung

Realistischer Kern:

- Wenige, tiefe Module schlagen viele flache Pflichtseiten.
- SEO bringt Suchverkehr, aber Abo-Retention entsteht durch Erinnerungen und Nachweisordner.
- Die Website sollte gross wirken, aber das Produkt startet mit den Ordnern, die am wenigsten Rechtsurteil brauchen.

## 49. Noch tiefere Nachrecherche: Betreiber-, Energie-, Technik- und Spezialregister

Diese Runde bestaetigt: Das Feld ist fast endlos. Die besten weiteren Themen sind aber nicht "noch mehr Gesetze", sondern konkrete Betreiberakten, bei denen ein Unternehmen Nachweise, Messungen, Registerdaten, Pruefberichte oder Meldefristen sauber sammeln muss.

### 49.1 Kaelte-, Klima-, Waermepumpen- und F-Gase-Akte

Zielgruppen:

- Supermaerkte, Lebensmitteleinzelhandel, Gastro, Hotels
- Kuehlhaeuser, Logistik, Produktion
- Gebaeudebetreiber mit Klimaanlagen
- Betriebe mit Waermepumpen oder stationaeren Kaelteanlagen
- Elektro-/TGA-Dienstleister als Partnerkanal

Moegliche Inhalte:

- Anlagenstammdaten
- Kaeltemittel/Fuellmengen
- Dichtheitskontrollen
- Reparatur- und Nachkontrollberichte
- Wartungsberichte
- Aufzeichnungen mit Aufbewahrungsfrist
- energetische Inspektion von Klimaanlagen als separater Fristpunkt

Produktform:

- F-Gase-Anlagenakte
- Dichtheitskontroll-Kalender
- Wartungs-/Pruefbericht-Upload
- Export fuer Betreiber, TGA-Firma, Behoerde
- Partnervermittlung zu zertifizierten Fachbetrieben

Grenze:

- keine Berechnung, ob eine konkrete Anlage kontrollpflichtig ist
- keine technische Bewertung von Kaeltemitteln oder Leckagen
- keine Ersatzplanung fuer Fachbetriebe
- Nutzer/Fachbetrieb legt Anlage und Intervall an

Bewertung:

- sehr stark als Spezialordner
- hohe Wiederkehr
- echter B2B-Schmerz, weil Kontrollen, Berichte und Anlagenwechsel dokumentiert werden muessen
- stark fuer Gastro, Hotel, LEH, Immobilien, Produktion

Start-Status:

- als Premium-Unterordner der Gebaeude-/Betreiberakte einplanen
- nicht als Massen-Startkeil, aber sehr guter Add-on-Kandidat

Quellen:

- UBA F-Gase Dichtheitskontrollen: https://www.umweltbundesamt.de/themen/klima-energie/fluorierte-treibhausgase-fckw/rechtliche-regelungen/haeufig-gestellte-fragen-zur-f-gas-verordnung/abschnitt-2-dichtheitskontrollen
- UBA F-Gase Aufzeichnungen: https://www.umweltbundesamt.de/themen/klima-energie/fluorierte-treibhausgase-fckw/rechtliche-regelungen/haeufig-gestellte-fragen-zur-f-gas-verordnung/abschnitt-3-aufzeichnungen
- UBA neue F-Gas-Verordnung: https://www.umweltbundesamt.de/themen/klima-energie/fluorierte-treibhausgase-fckw/rechtliche-regelungen/haeufig-gestellte-fragen-zur-neuen-f-gas-verordnung
- GEG energetische Inspektion Klimaanlagen: https://www.gesetze-im-internet.de/geg/BJNR172810020.html

### 49.2 Explosionsschutz-, Druckanlagen- und Ueberwachungsanlagenakte

Zielgruppen:

- Lackierereien, Holz-/Metallbetriebe, Chemie, Labore
- Baeckereien/Mehlstaub-Bereiche
- Betriebe mit Loesemitteln, Gasen, Stauben
- Betriebe mit Druckbehaeltern, Dampfkesseln, Kompressoren
- Betreiber ueberwachungsbeduerftiger Anlagen

Moegliche Inhalte:

- Explosionsschutzdokument als Ablage
- Zonenplaene/Ex-Schutz-Unterlagen
- Pruefberichte vor Inbetriebnahme
- wiederkehrende Pruefberichte
- Instandhaltungsfreigaben/Erlaubnisscheine
- Befaehigte Personen / ZUeS-Unterlagen
- technische Aenderungen an Anlagen

Produktform:

- Ex-Schutz-/Druckanlagenakte
- Pruefkalender
- Anlagenhistorie
- Partnervermittlung an Prueforganisationen/Sifa/Sachverstaendige
- Export fuer Behoerde, Versicherer, Auditor, internen Betreiber

Grenze:

- keine Ex-Zoneneinteilung erzeugen
- keine Druckgeraete-/Anlagenklassifizierung berechnen
- keine technische Gefaehrdungsbeurteilung ersetzen
- nur Akte, Fristen, Uploads, Quellen und Partner

Bewertung:

- weniger Masse, aber hoher Ticketwert
- sehr guter Partnerumsatz
- starke Haftungsgrenze noetig
- fuer V1 als Datenmodell vorbereiten, Content defensiv

Start-Status:

- spaeteres Premium-/Partnerpaket
- nicht als automatischer Check bauen

Quellen:

- GefStoffV Paragraph 6 Explosionsschutzdokument: https://www.gesetze-im-internet.de/gefstoffv_2010/__6.html
- BetrSichV: https://www.gesetze-im-internet.de/betrsichv_2015/BJNR004910015.html
- BAuA TRBS 1201 Teil 1: https://www.baua.de/DE/Angebote/Regelwerk/TRBS/TRBS-1201-Teil-1.html
- BAuA TRBS 1203 befaehigte Personen: https://www.baua.de/DE/Angebote/Regelwerk/TRBS/TRBS-1203.html
- BAuA TRBS 2141 Dampf und Druck: https://www.baua.de/DE/Angebote/Regelwerk/TRBS/TRBS-2141.html

### 49.3 Fettabscheider-, Abwasser- und Indirekteinleiterakte

Zielgruppen:

- Gastronomie, Hotels, Kantinen, Baeckereien, Metzgereien
- Lebensmittelproduktion
- Kfz-Werkstaetten, Waschplaetze, Industrie
- Hausverwaltungen mit Gewerbemietern

Moegliche Inhalte:

- Fettabscheider-Stammdaten
- Betriebstagebuch
- Entsorgungsnachweise
- Eigenkontrollen
- Wartungen
- Generalinspektionen
- Umweltamt-Anzeigen/Genehmigungen als Aufgabenpunkt
- Oelabscheider/Leichtfluessigkeitsabscheider als verwandter Ordner

Produktform:

- Abscheiderakte
- Betriebstagebuch digital
- Entsorgungs- und Wartungskalender
- Export fuer Umweltamt, Vermieter, Betreiber, Dienstleister
- Partnervermittlung zu Wartung/Entsorgung/Fachkundigen

Grenze:

- keine wasserrechtliche Genehmigungsentscheidung
- keine Dimensionierung der Anlage
- keine technische Bewertung der Abwasserqualitaet

Bewertung:

- sehr konkreter Online-Fit
- gute Zielgruppen, weil Betreiber das Thema oft vergessen
- starker lokaler SEO-Longtail
- passt perfekt zu Gastro-/Gebaeudeakte

Start-Status:

- als starkes Spezialmodul aufnehmen
- fuer Gastro/Hotel/Food sehr frueh interessant

Quellen:

- IHK Fettabscheider Merkblatt: https://www.ihk.de/blueprint/servlet/resource/blob/2263670/c24324c598cb651db6e6f26ed28ea945/ihk-merkblatt-fettabscheideranlagen-data.pdf
- Abwasserverordnung: https://www.gesetze-im-internet.de/abwv/BJNR056610997.html
- IHK Lebensmittelhygiene Gastronomie: https://www.ihk.de/gera/standortpolitik/branchen/gastgewerbe/lebensmittelhygiene-in-der-gastronomie-3154846

### 49.4 Energieanlagen-, PV-, Speicher- und Ladepunktakte

Zielgruppen:

- Gewerbeimmobilien mit PV
- Betriebe mit Eigenverbrauchsanlagen
- Hausverwaltungen
- Hotels, Autohaeuser, Parkraumbetreiber
- Einzelhandel mit oeffentlichen Ladepunkten
- Betreiber von Stromspeichern und KWK-/EEG-Anlagen

Moegliche Inhalte:

- Marktstammdatenregister-Daten
- Betreiberwechsel
- Inbetriebnahme-/Stilllegungsfristen
- EEG-/Netzbetreiber-Meldungen
- Ladepunkt-Anzeigen an die Bundesnetzagentur
- Netzbetreiber-Unterlagen
- Wartungs-/Pruefberichte
- Messkonzepte und Zaehlerdaten als Ablage

Produktform:

- Energieanlagenakte
- MaStR-/Ladepunkt-Fristenordner
- Standort- und Betreiberwechsel-Checkliste
- Export fuer Netzbetreiber, Steuerberater, Elektrofachbetrieb, Immobilienverwaltung

Grenze:

- keine energierechtliche Beratung
- keine technische Netzanschlussplanung
- keine Foerder-/Verguetungsberechnung als verbindliche Aussage

Bewertung:

- sehr starkes Zukunftsthema
- gute Zahlungsbereitschaft bei Immobilien/Gewerbe
- klare Register-/Melde-/Nachweislogik
- passt zu Gebaeude- und Energieakte

Start-Status:

- spaeteres Premium-Add-on, Datenmodell sofort vorbereiten

Quellen:

- Bundesnetzagentur Marktstammdatenregister: https://www.bundesnetzagentur.de/DE/Fachthemen/ElektrizitaetundGas/Monitoringberichte/Marktstammdatenregister/start.html
- MaStR Fristen: https://www.marktstammdatenregister.de/MaStRHilfe/subpages/registrierungVerpflichtendFristen.html
- Bundesnetzagentur Ladeinfrastruktur: https://www.bundesnetzagentur.de/DE/Fachthemen/ElektrizitaetundGas/E-Mobilitaet/start.html
- Bundesnetzagentur Ladepunkt-FAQ: https://www.bundesnetzagentur.de/DE/Fachthemen/ElektrizitaetundGas/E-Mobilitaet/FAQ/start.html

### 49.5 Energieaudit-, EnEfG-, Abwaerme- und Rechenzentrumsakte

Zielgruppen:

- energieintensive Unternehmen
- Produktion, Logistik, Kuehlung, Rechenzentren
- groessere Handels-/Filialbetriebe
- Immobilienbetreiber mit grossen Nichtwohngebaeuden

Moegliche Inhalte:

- Energieaudit-Unterlagen
- EnMS-/UMS-Nachweise
- Umsetzungsplaene fuer wirtschaftliche Energieeinsparmassnahmen
- Gesamtendenergieverbrauch
- Abwaerme-Meldungen
- Rechenzentrums-Energieeffizienzregister
- Fristenkalender
- Audit- und Partnerexport

Produktform:

- Energiepflichten-Nachweisordner
- Audit-/Massnahmenplan-Ablage
- Abwaerme-Meldeakte
- Partnervermittlung zu Energieauditoren/ISO-50001-Beratern

Grenze:

- keine Energieaudit-Leistung ersetzen
- keine Schwellenwertentscheidung verbindlich treffen
- keine Wirtschaftlichkeitsberechnung als Rechts-/Fachurteil

Bewertung:

- sehr hoher Ticketwert, aber kleinere Zielgruppe
- gut als Premium-Leadkanal und Partnerumsatz
- Content muss extrem aktuell sein

Start-Status:

- nicht V1-Masse
- als Premium-/Partnerpaket stark

Quellen:

- BAFA Energieaudit/EnEfG: https://www.bafa.de/DE/Energie/Energieberatung/Energieaudit/energieaudit_node.html
- BAFA Merkblatt EnEfG: https://www.bafa.de/SharedDocs/Downloads/DE/Energie/ea_merkblatt_energieefffizienzgesetz.pdf
- BfEE Plattform fuer Abwaerme: https://www.bfee-online.de/BfEE/DE/Effizienzpolitik/Plattform_fuer_Abwaerme/plattform_fuer_abwaerme_node.html
- BfEE Energieeffizienzregister Rechenzentren: https://www.bfee-online.de/BfEE/DE/Effizienzpolitik/Energieeffizienzregister_Rechenzentren/energieeffizienzregister_rechenzentren_node.html

### 49.6 Produktverantwortungsakte: Verpackung, Elektro, Batterie, Energie-Label

Zielgruppen:

- Online-Haendler
- Importeure
- Eigenmarken-Haendler
- Elektronikhaendler
- Hersteller/Private-Label-Anbieter
- Marktplatzverkaeufer

Moegliche Inhalte:

- LUCID-Registrierung
- Systembeteiligungsvertraege
- Verpackungsmengenmeldungen
- Vollstaendigkeitserklaerung
- WEEE-Registrierungen
- Batterie-Registrierungen
- Jahres-Statistik-/Mitteilungsunterlagen
- EPREL-/Energiekennzeichnungsunterlagen fuer betroffene Produkte
- PPWR-Aenderungen als Watchlist

Produktform:

- EPR-/Produktverantwortungsakte
- Marken-/Produkt-/Registerordner
- Fristenkalender
- Dokumentenexport fuer Marktplatz, Lieferant, Pruefer, Partner
- Partnervermittlung zu Systemen, WEEE-Bevollmaechtigten, Pruefern

Grenze:

- keine automatische Einstufung als Hersteller/Vertreiber
- keine verbindliche Produktklassifizierung
- keine Rechtsberatung zu Import-/Eigenmarken-Konstellationen
- Nutzer uebernimmt Themen selbst in seine Akte

Bewertung:

- sehr passend zur urspruenglichen Haendler-/Shop-Idee, aber ohne Shopkonform-Abhaengigkeit
- hoher SEO-Wert
- klare Registerdaten und Fristen
- guter Partnerumsatz

Start-Status:

- als eigener starker Websitebereich spaeter
- bei Start als "Handel/Import"-Ordner vorbereiten

Quellen:

- ZSVR LUCID Registrierung: https://www.verpackungsregister.org/registrierung/alle-informationen-zur-registrierung
- ZSVR Datenmeldung: https://www.verpackungsregister.org/systembeteiligung-und-datenmeldung/datenmeldung
- ZSVR Vollstaendigkeitserklaerung: https://www.verpackungsregister.org/systembeteiligung-und-datenmeldung/vollstaendigkeitserklaerung
- stiftung ear WEEE-Registrierung: https://www.stiftung-ear.de/anleitungen/weee-registrierung-beantragen/
- stiftung ear Batterie-Registrierung: https://www.stiftung-ear.de/anleitungen/batterie-registrierung-beantragen/
- EU Energy Label/EPREL: https://energy-efficient-products.ec.europa.eu/ecodesign-and-energy-label/understanding-energy-label_en

### 49.7 Gefaehrliche-Abfaelle-, eANV- und Entsorgungsnachweisakte

Zielgruppen:

- Werkstaetten, Lackierereien, Industrie
- Bau/Rueckbau/Sanierung
- Labore, Praxen mit Sonderabfaellen
- Entsorger, Sammler, Beforderer, Makler
- Betriebe mit Oelen, Chemikalien, Batterien, kontaminierten Materialien

Moegliche Inhalte:

- Erzeugernummern
- Uebernahmescheine
- Begleitscheine
- Entsorgungsnachweise
- Register
- eANV-Unterlagen
- Entsorgerzertifikate
- AVV-Abfallschluessel als Stammdatenfeld

Produktform:

- Entsorgungsnachweisordner
- Abfallstrom-Akte
- Register-/Belegexport
- Partnervermittlung an Entsorger/Abfallbeauftragte

Grenze:

- keine Einstufung eines Abfalls als gefaehrlich/nicht gefaehrlich
- keine AVV-Schluessel-Entscheidung
- keine Entsorgungsberatung
- nur Ablage, Fristen, Quellen, Partner

Bewertung:

- sehr starker Produktfit
- gute Zahlungsbereitschaft bei betroffenen Betrieben
- viele Betriebe haben Papierchaos
- als Premium-Ordner sehr sinnvoll

Start-Status:

- als Umwelt-/Abfallpaket spaeter stark
- Datenmodell fuer Nachweise sofort kompatibel halten

Quellen:

- ZKS Nachweisverordnung: https://www.zks-abfall.de/nachweisverordnung
- Nachweisverordnung: https://www.gesetze-im-internet.de/nachwv_2007/BJNR229810006.html
- KrWG Registerpflicht Paragraph 49: https://www.gesetze-im-internet.de/krwg/__49.html
- IHK Abfallnachweisverfahren: https://www.ihk.de/lippe-detmold/hauptnavigation/beraten-und-informieren/umweltschutz/abfallrecht/nachweisverfahren-4209194

### 49.8 Praxis-, Medizinprodukte-, Strahlenschutz- und Radonakte

Zielgruppen:

- Arzt-/Zahnarztpraxen
- Physiotherapie/Medizinische Dienstleister mit aktiven Medizinprodukten
- Labore
- Betriebe mit Roentgen-/Strahlenanwendungen
- Arbeitgeber in Radonvorsorgegebieten mit relevanten Arbeitsplaetzen
- Immobilienbetreiber in betroffenen Regionen

Moegliche Inhalte:

- Medizinprodukte-Bestandsverzeichnis
- Medizinproduktebuch
- sicherheitstechnische Kontrollen
- messtechnische Kontrollen
- Einweisungsnachweise
- Strahlenschutz-Aufzeichnungen
- Fachkunde-/Aktualisierungsnachweise
- Radonmessungen und Kontrollmessungen
- Behoerden-/Sachverstaendigenunterlagen

Produktform:

- Praxis-/Geraeteakte
- Medizinprodukte-Kontrollkalender
- Strahlenschutz-/Radonordner
- Export fuer Praxisleitung, Behoerde, Sachverstaendige, Dienstleister

Grenze:

- keine medizinische oder strahlenschutzfachliche Bewertung
- keine Einstufung von Medizinprodukten
- keine Entscheidung, ob ein konkreter Arbeitsplatz messpflichtig ist
- nur Dokumentation, Fristen, Quellen, Partner

Bewertung:

- sehr sticky bei Praxen
- fachlich sensibel, aber als Akte gut abgrenzbar
- guter Partnerkanal fuer MTK/STK-Dienstleister und Strahlenschutzkurse
- nicht breit genug fuer Kernstart, aber starkes Branchenpaket

Start-Status:

- spaeteres Branchenpaket "Praxisakte"
- Radon als Unterthema fuer Gebaeude-/Arbeitgeberakte vormerken

Quellen:

- MPBetreibV: https://www.gesetze-im-internet.de/mpbetreibv_2025/BJNR0260B0025.html
- MPBetreibV Bestandsverzeichnis: https://www.gesetze-im-internet.de/mpbetreibv_2025/__14.html
- MPBetreibV Medizinproduktebuch: https://www.gesetze-im-internet.de/mpbetreibv_2025/__13.html
- Strahlenschutzverordnung: https://www.gesetze-im-internet.de/strlschv_2018/BJNR203600018.html
- BfS Radon am Arbeitsplatz: https://www.bfs.de/DE/themen/ion/umwelt/radon/regelungen/arbeitsplatz.html
- Strahlenschutzgesetz Radon: https://www.gesetze-im-internet.de/strlschg/BJNR196610017.html

### 49.9 Fahrpersonal-, Tachographen- und Transportnachweisakte

Zielgruppen:

- Gueterkraftverkehr
- Busunternehmen
- Kurier-/Logistikbetriebe mit schweren Fahrzeugen
- Bau-/Handwerksbetriebe mit relevanten Fahrzeugen
- Fuhrparkleiter

Moegliche Inhalte:

- Fahrerkarte
- Unternehmerkarte
- Massenspeicher-Downloads
- Lenk-/Ruhezeitnachweise
- Schaublatt-/Ausdruck-Ablage
- Qualifikationsnachweise
- Kontrollgeraete-Pruefungen
- Fahrer-/Fahrzeugakten

Produktform:

- Fahrpersonalakte
- Download-/Aufbewahrungskalender
- Fahrer-/Fahrzeugordner
- Export fuer Kontrolle, Fuhrparkleitung, Dienstleister
- Partnervermittlung zu Tachographen-/Fuhrparkdienstleistern

Grenze:

- keine Bewertung von Lenkzeitverstoessen
- keine arbeitsrechtliche Fahrerplanung
- keine automatische Entscheidung, ob eine Fahrt ausgenommen ist

Bewertung:

- sehr klares B2B-Problem
- stark nachweisgetrieben
- fuer Transport/Logistik hohes Retentionspotential

Start-Status:

- als Fuhrpark-Premium-Modul einplanen

Quellen:

- BALM Fahrpersonalrecht: https://www.balm.bund.de/DE/Themen/RechtsentwicklungRechtsvorschriften/Rechtsvorschriften/Fahrpersonalrecht/fahrpersonalrecht_node.html
- BALM Aufbewahrung Lenk-/Ruhezeiten: https://www.balm.bund.de/SharedDocs/FAQs/DE/Kontroellgeraete/Digiko_13.html
- Fahrpersonalverordnung: https://www.gesetze-im-internet.de/fpersv/BJNR188210005.html
- Fahrpersonalgesetz: https://www.gesetze-im-internet.de/fahrpersstg/BJNR002770971.html

### 49.10 Kassen-, TSE-, Taxameter- und Wegstreckenzaehlerakte

Zielgruppen:

- Gastronomie, Einzelhandel, Friseure, Kioske
- Filialbetriebe
- Taxi-/Mietwagenbetriebe
- Betriebe mit elektronischen Aufzeichnungssystemen

Moegliche Inhalte:

- Kassensystem-Stammdaten je Betriebsstaette
- TSE-Zertifikate
- Belegausgabe-Prozess
- Mitteilung nach Paragraph 146a AO
- Inbetriebnahme/Ausserbetriebnahme
- Taxameter-/Wegstreckenzaehler-Unterlagen
- Verfahrensdokumentation als Ablagepunkt

Produktform:

- Kassenakte
- Betriebsstaetten- und Geraeteordner
- Fristen- und Mitteilungskalender
- Export fuer Steuerberater, Betriebspruefung, Kassenanbieter

Grenze:

- keine steuerliche Beratung
- keine GoBD-/KassenSichV-Freigabe
- keine technische TSE-Pruefung
- klare Weiterleitung an Steuerberater/Kassenanbieter

Bewertung:

- extrem konkreter Bedarf
- gute Zahlungsbereitschaft bei bargeldnahen Branchen
- SEO-Longtail stark
- als Add-on zu Gastro/Handel sehr wertvoll

Start-Status:

- als Unterordner der GoBD-/Kassenakte aufnehmen
- nicht als Steuerberatung positionieren

Quellen:

- BMF Belegausgabepflicht: https://www.bundesfinanzministerium.de/Content/DE/FAQ/FAQ-steuergerechtigkeit-belegpflicht.html
- BMF Mitteilungsverpflichtung Paragraph 146a AO: https://www.bundesfinanzministerium.de/Content/DE/Downloads/BMF_Schreiben/Weitere_Steuerthemen/Abgabenordnung/2024-06-28-mitteilungsverpflichtung-nach-AO.html
- ELSTER Mitteilung elektronische Aufzeichnungssysteme: https://www.elster.de/eportal/formulare-leistungen/alleformulare/aufzeichnung146a
- KassenSichV: https://www.gesetze-im-internet.de/kassensichv/BJNR351500017.html

### 49.11 Cyber-, NIS2-, KRITIS- und CRA-Nachweisakte

Zielgruppen:

- NIS2-regulierte Unternehmen
- KRITIS-nahe Betreiber
- IT-/SaaS-/Managed-Service-Anbieter
- Hersteller digitaler Produkte
- groessere B2B-Dienstleister mit Kundenanforderungen

Moegliche Inhalte:

- Registrierungsnachweise
- Kontaktstellen
- Risikomanagement-Dokumentation
- Sicherheitsvorfall-Prozess
- Schulungs-/Awarenessnachweise
- Lieferanten-/Dienstleisterliste
- technische und organisatorische Sicherheitsnachweise
- CRA-Watchlist fuer digitale Produkte

Produktform:

- Cyber-Nachweisordner
- Incident-/Meldeprozess-Ablage
- Audit-/Kundenexport
- Partnervermittlung zu ISMS-/BSI-/IT-Sicherheitsdienstleistern

Grenze:

- keine NIS2-Betroffenheitsentscheidung
- keine ISMS-Beratung ersetzen
- keine technische Sicherheitspruefung
- keine Garantien zu Compliance

Bewertung:

- hoher Ticketwert
- sehr starke Konkurrenz
- gutes Premium-/Partnerpaket, aber nicht der einfachste SEO-Start
- passt als Nachweisordner, nicht als "wir machen dich NIS2-sicher"

Start-Status:

- spaeteres Premium-/Partnerpaket
- einzelne Trust-/IT-Sicherheitsakte fuer eigene Plattform aber intern von Tag 1 fuehren

Quellen:

- BSI NIS2-regulierte Unternehmen: https://www.bsi.bund.de/DE/Themen/Regulierte-Wirtschaft/NIS-2-regulierte-Unternehmen/nis-2-regulierte-unternehmen_node.html
- BSI NIS2-Pflichten: https://www.bsi.bund.de/DE/Themen/Regulierte-Wirtschaft/NIS-2-regulierte-Unternehmen/NIS-2-Pflichten/nis-2-pflichten_node.html
- BSI NIS2 FAQ: https://www.bsi.bund.de/DE/Themen/Regulierte-Wirtschaft/NIS-2-regulierte-Unternehmen/NIS-2-FAQ/NIS-2-FAQ-allgemein/FAQ-zu-NIS-2_node.html
- BMI KRITIS-Dachgesetz FAQ: https://www.bmi.bund.de/SharedDocs/faqs/DE/themen/bevoelkerungsschutz/kritis-dach/kritis-dach.html
- BSI Cyber Resilience Act: https://www.bsi.bund.de/DE/Themen/Unternehmen-und-Organisationen/Informationen-und-Empfehlungen/Cyber_Resilience_Act/cyber_resilience_act_node.html

### 49.12 Was diese Runde fuer Geld und Struktur bedeutet

Die neuen Themen sind nicht alle Startmodule. Sie teilen sich in drei Gruppen.

Sofort sinnvoll als Ordner/Tracker:

- Kassen-/TSE-Akte
- Fettabscheider-/Abscheiderakte
- F-Gase-/Kaelteanlagenakte
- Fahrpersonal-/Tachographenakte
- Produktverantwortungsakte fuer Handel/Import

Sehr gut als Premium-/Partnerpaket:

- Energieaudit/EnEfG/Abwaerme
- Ex-Schutz/Druckanlagen
- Gefaehrliche Abfaelle/eANV
- Praxis/Medizinprodukte/Strahlenschutz
- NIS2/KRITIS/CRA

Nur vorsichtig als Content/Watchlist:

- EPREL/Ecodesign
- PPWR-Aenderungen
- KRITIS-Dachgesetz
- Energie-/Gebaeudeautomation
- Fachklassifizierungen von Abfall, Anlagen, Produkten und Gefaehrdungen

### 49.13 Neue Zielgruppen nach dieser Runde

Zielgruppen, die bisher noch zu schwach im Vordergrund standen:

- Supermaerkte/LEH mit Kaelteanlagen
- Hotels mit Kaelte, Trinkwasser, Fettabscheidern, Brandschutz, Kasse
- Parkhaus-/Ladepunktbetreiber
- Gewerbeimmobilien mit PV, Ladepunkten und Klimaanlagen
- Logistikunternehmen mit Fahrpersonal, A1, Fuhrpark, Lizenzen
- Werkstaetten mit Abfall, Gefahrstoffen, Abscheidern, Arbeitsmitteln
- Praxen mit Medizinprodukten, Datenschutz, Kasse, Arbeitsschutz
- Online-Haendler mit Verpackung, WEEE, Batterie, Produktunterlagen
- energieintensive Mittelstaendler mit EnEfG, Abwaerme, Kaelte und Audits

### 49.14 Aktualisierte Modul-Landkarte

Die Plattform sollte intern nicht nach Gesetzen, sondern nach Aktenobjekten aufgebaut werden:

- Standort
- Betriebsstaette
- Mitarbeiter
- Fahrzeug
- Geraet/Arbeitsmittel
- Anlage
- Produkt/Marke
- Registereintrag
- Genehmigung/Lizenz
- Nachweis
- Meldung
- Wartung
- Pruefung
- Partnerauftrag

Damit kann spaeter jedes Spezialthema als Konfiguration derselben Aktenlogik gebaut werden, ohne die Website technisch neu zu erfinden.

### 49.15 Naechste sinnvolle Suchrichtung

Wenn weiter gesucht wird, dann nicht mehr breit "alle Pflichten", sondern gezielt nach Branchenpaketen:

1. Gastro/Hotel/Food
2. Handwerk/Werkstatt/Bau
3. Hausverwaltung/Gewerbeimmobilien
4. Handel/Import/Online-Haendler
5. Transport/Logistik
6. Praxis/Gesundheitsdienstleister
7. Produktion/Industrie/Kaelte/Energie

Pro Branche sollten dann nur noch die besten 20 bis 40 Aktenobjekte gesammelt werden, nicht jedes Gesetz. Das ist der Punkt, an dem aus Recherche ein baubares Produkt wird.

## 50. Weitere Nachrecherche: Branchenakten mit starkem Papierchaos

Diese Runde bestaetigt: Es gibt noch mehr passende Themen, aber nicht jedes Thema gehoert als eigenes Startprodukt auf die erste Version. Die besten neuen Treffer sind vertikale Aktenpakete, bei denen Betriebe laufend Dokumente, Nachweise, Fristen, Wartungen, Schulungen oder Meldungen sammeln muessen.

Die Plattform sollte daraus keine Rechtsurteile ableiten. Sie sollte je Thema sagen:

- welche Nachweise typischerweise gebraucht werden
- welche Fristen/Quellen es gibt
- welche Vorlage oder Ablage dafuer angeboten wird
- welcher Profi/Partner bei Fachbewertung helfen kann
- was der Nutzer selbst in seine Akte uebernimmt

### 50.1 Lebensmittel-, HACCP- und Rueckverfolgbarkeitsakte

Zielgruppen:

- Restaurants
- Imbisse
- Caterer
- Baeckereien
- Metzgereien
- Hotels mit Kueche
- Lebensmitteleinzelhandel
- Kitas/Schulen mit Essensausgabe
- Vereine/Events mit regelmaessiger Lebensmittelabgabe
- kleine Lebensmittelhersteller

Moegliche Inhalte:

- HACCP-/Eigenkontrollordner
- Reinigungs- und Desinfektionsplaene
- Temperaturkontrollen fuer Kuehlung/Tiefkuehlung
- Wareneingangskontrollen
- Rueckverfolgbarkeitsnachweise
- Schaeden-/Schaedlingskontrolle
- Personalschulungen Lebensmittelhygiene
- Folgebelehrungen Infektionsschutz
- Abweichungsprotokolle
- Lieferanten-/Chargenablage
- Kontrollbesuchs-Export fuer Lebensmittelueberwachung

Produktform:

- Tages-/Wochenchecklisten
- QR-Code am Kuehlgeraet, Lager, Reinigungsbereich
- Foto-/PDF-Upload fuer Nachweise
- Temperaturprotokoll als schnell ausfuellbare Maske
- Nachweisordner "Lebensmittelkontrolle"
- Erinnerungen fuer Schulungen und Wiederholungen
- Partnervermittlung fuer HACCP-Schulung, Schaedenbekaempfung, Hygieneberatung

Geldlogik:

- sehr breite Zielgruppe
- niedriger Einstiegspreis moeglich
- hoher Retention-Wert, weil taegliche/wiederkehrende Eintraege
- gutes Branchenpaket fuer 29 bis 149 Euro monatlich
- Setup-/Vorlagenpaket fuer 149 bis 599 Euro moeglich
- Partnerprovisionen fuer Schulungen, Schaedenbekaempfer, Hygieneberater

Grenze:

- keine individuelle HACCP-Gefahrenanalyse als Rechts-/Fachurteil automatisieren
- keine Garantie gegen Beanstandungen
- kein "Lebensmittelkontrolle sicher bestehen"
- Vorlagen, Protokolle und Ablage ja; Fachbewertung durch Partner

Bewertung:

- sehr stark fuer SEO, weil viele Mikrofragen existieren
- sehr gut online bedienbar
- sehr passend fuer eine Betriebsakte
- einer der besten neuen Startkandidaten neben Arbeitsschutz/Prueftracker

Quellen:

- BVL Rueckverfolgbarkeit: https://www.bvl.bund.de/DE/Arbeitsbereiche/01_Lebensmittel/04_AntragstellerUnternehmen/08_Rueckverfolgbarkeit/lm_Rueckverfolgbarkeit_node.html
- IHK Regensburg HACCP: https://www.ihk.de/regensburg/branchen/tourismus/gruendung-im-tourismusgewerbe/haccp-5264310
- IHK Muenchen Lebensmittelhygiene: https://www.ihk-muenchen.de/ratgeber/produktsicherheit/lebensmittelsicherheit/
- IHK Schleswig-Holstein Lebensmittelhygiene: https://www.ihk.de/schleswig-holstein/starthilfe/themen/gastgewerbe/lebensmittelhygiene-1377912
- IHK Rhein-Neckar Pflichtschulungen Lebensmittelhygiene: https://www.ihk.de/rhein-neckar/wirtschaftsstandort/branchen/handel/handel-mit-lebensmitteln/pflichtschulungen-lebensmittelhygiene-951672

### 50.2 Hotel-, Beherbergungs- und Tourismusmeldeakte

Zielgruppen:

- Hotels
- Pensionen
- Ferienwohnungsanbieter mit mehreren Einheiten
- Hostels
- Campingplaetze
- Seminarhaeuser
- Boardinghouses
- Monteurunterkuenfte

Moegliche Inhalte:

- Meldeschein-Ablage fuer auslaendische Gaeste
- Loeschfrist-/Vernichtungs-Erinnerung fuer Meldescheine
- Datenschutz-Hinweise zu Gastdaten
- Beherbergungsstatistik-/IDEV-Erinnerungen
- Kurbeitrag-/Gaestebeitrag-Ablage, falls lokal relevant
- HACCP-/Kuechenakte
- Pool-/Wellness-/Badebeckenakte
- Aufzug-, Feuerstaetten-, Rauchwarnmelder- und Brandschutzakte
- Kassen-/TSE-Akte
- Reinigungs- und Wartungsnachweise

Produktform:

- Hotel-Nachweisordner
- Monatskalender fuer Statistikmeldungen
- Loeschfristen-Kalender
- Geraete-/Objektakte pro Zimmer, Kueche, Wellnessbereich, Aufzug
- Audit-/Behoerdenexport

Geldlogik:

- guter Einstieg ueber "Hotel-Fristen und Nachweise"
- Paketpreise nach Anzahl Zimmer/Standorte
- 49 bis 199 Euro monatlich realistisch fuer kleine/mittlere Betriebe
- Zusatzumsatz durch QR-Codes, Zimmer-/Objektlisten, Statistik-/Kassen-/Hygienepakete
- Partner fuer Hygiene, Brandschutz, Schornsteinfeger, Poolwasser, Datenschutz

Grenze:

- keine reiserechtliche Beratung
- keine Datenschutzberatung ersetzen
- keine steuerliche Bewertung von Kurbeitrag/Kasse
- nur Fristen, Ablage, Vorlagen, Quellen, Export

Bewertung:

- sehr passend, weil Hotelbetriebe viele unterschiedliche Nachweise an einem Standort haben
- gut als Branchenpaket auf der Website
- SEO-Chance ueber konkrete Fragen: Meldeschein, Aufbewahrung, Loeschung, Statistik, HACCP, Kuehlung, Pool

Quellen:

- Bundesmeldegesetz: https://www.gesetze-im-internet.de/bmg/BJNR108410013.html
- IHK Schwarzwald-Baar-Heuberg Gastdaten: https://www.ihk.de/sbh/branchen/tourismus-gastronomie/gesetze-tourismus/umgang-mit-gastdaten-in-beherbergungsstaetten2-6561444
- Destatis Tourismus/Gastgewerbe: https://www.destatis.de/DE/Themen/Branchen-Unternehmen/Gastgewerbe-Tourismus/_inhalt.html
- Destatis Online melden: https://www.destatis.de/DE/Service/Online-Melden/_inhalt.html

### 50.3 Immobilien-, Aufzugs-, Feuerstaetten- und Brandschutzakte

Zielgruppen:

- Hausverwaltungen
- Gewerbeimmobilienbetreiber
- Vermieter mit mehreren Objekten
- Facility-Management-Unternehmen
- Hotels
- Pflegeheime
- Buerozentren
- Einkaufszentren
- Parkhaeuser
- Betreiber von Aufzuegen und technischen Anlagen

Moegliche Inhalte:

- Feuerstaettenbescheid-Ablage
- Schornsteinfeger-Fristen
- Formblatt-/Bescheinigungsablage
- Rauchwarnmelder-Standortliste
- Rauchwarnmelder-Wartung/Austausch
- Aufzugspruefung Haupt-/Zwischenpruefung
- Aufzugs-Notfallplan
- Wartungsvertraege
- Feuerloescherpruefung
- Sicherheitsbeleuchtung/Notbeleuchtung
- RWA-/Brandschutztuer-/Feststellanlagen-Nachweise
- Trinkwasser/Legionellen
- F-Gase/Klima
- PV/Ladepunkte

Produktform:

- Objektakte pro Immobilie
- Anlagenliste mit QR-Code pro Aufzug, Feuerloescher, Rauchwarnmelder, RWA, Tuer
- Fristenkalender nach Objekt
- Nachweisordner fuer Eigentuemerversammlung, Versicherung, Behoerde, Pruefer
- Dienstleisterliste mit naechster Faelligkeit

Geldlogik:

- sehr gutes Abo-Modell nach Objekt/Einheit/Anlage
- Hausverwaltungen koennen viele Objekte in einem Account verwalten
- 49 bis 299 Euro monatlich fuer kleinere Verwalter, deutlich mehr bei vielen Objekten
- Partnerprovisionen fuer Brandschutz, Aufzug, Wartung, Trinkwasser, Schornsteinfeger-nahen Service
- QR-Code-/Objektlabel als Zusatzprodukt

Grenze:

- keine technische Pruefung ersetzen
- keine Brandschutzplanung
- keine Haftungsfreistellung
- nur Betreiberakte, Fristen, Nachweise, Export und Dienstleisterkoordination

Bewertung:

- einer der besten Geld-Cluster fuer "wenig Telefon, viel Online"
- hohe Wechselhuerde, wenn alle Objekte erfasst sind
- starke Kombination mit Uploads, Erinnerungen, QR-Codes und Export

Quellen:

- Schornsteinfeger FAQ: https://www.schornsteinfeger.de/informationen/tipps/faq
- Schornsteinfeger-Handwerksgesetz: https://www.gesetze-im-internet.de/schfhwg/BJNR224210008.html
- Betriebssicherheitsverordnung Aufzuege: https://www.gesetze-im-internet.de/betrsichv_2015/BJNR004910015.html
- BetrSichV Anhang 1: https://www.gesetze-im-internet.de/betrsichv_2015/anhang_1.html
- BAuA TRBS 3121 Aufzugsanlagen: https://www.baua.de/DE/Angebote/Regelwerk/TRBS/pdf/TRBS-3121.pdf
- BAuA ASR A2.2 Feuerloescher: https://www.baua.de/DE/Angebote/Regelwerk/ASR/pdf/ASR-A2-2.pdf
- BAuA ASR A3.4 Sicherheitsbeleuchtung: https://www.baua.de/DE/Angebote/Regelwerk/ASR/pdf/ASR-A3-4.pdf

### 50.4 Beauty-, Friseur-, Kosmetik-, Tattoo- und NiSV-Akte

Zielgruppen:

- Friseursalons
- Kosmetikstudios
- Nagelstudios
- Tattoo-/Piercingstudios
- Permanent-Make-up-Anbieter
- Podologie/Fusspflege
- Beauty-/Wellnessbetriebe
- Studios mit Laser, IPL, Ultraschall, Radiofrequenz oder aehnlichen Geraeten

Moegliche Inhalte:

- Hygieneplan
- Hautschutz-/Haendehygieneplan
- Reinigungs-/Desinfektionsnachweise
- Gefaehrdungsbeurteilung Haut/Gefahrstoffe
- Sicherheitsdatenblaetter fuer Produkte
- Betriebsanweisungen
- Unterweisungsnachweise
- NiSV-Geraeteanzeige
- NiSV-Fachkundenachweise
- Wartung/Geraeteliste
- Tattoo-/Permanent-Make-up-Farbunterlagen
- Kundenaufklaerungs-/Einwilligungsablage nur als organisatorische Vorlage, nicht als Rechtsberatung

Produktform:

- Beauty-Betriebsakte
- Geraeteakte fuer NiSV-Anlagen
- Hygieneplan-Editor mit Vorlagen
- Schulungs-/Fachkundenachweis-Tracker
- QR-Code am Geraet oder Behandlungsraum
- Nachweisordner fuer Gesundheitsamt/BGW

Geldlogik:

- viele kleine Betriebe, niedriger Preis noetig
- 19 bis 99 Euro monatlich
- sehr gute Partnerumsatze ueber NiSV-Schulungen, Hygieneprodukte, Arbeitsschutz, Desinfektion, Versicherungen
- gutes SEO, weil viele Betreiber konkrete Fragen stellen

Grenze:

- keine medizinische Bewertung
- keine Geraetezulassung pruefen
- keine Infektionsschutz-/Hygieneabnahme ersetzen
- keine Beratung zu erlaubten/unerlaubten Behandlungen

Bewertung:

- guter Longtail-SEO-Cluster
- passt sehr gut zum "Menschen ersetzen durch Vertrauen"-Ansatz, weil Checklisten und Nachweise viel Unsicherheit nehmen
- eher niedrigere Tickets, aber hohe Menge

Quellen:

- NiSV: https://www.gesetze-im-internet.de/nisv/BJNR218700018.html
- NiSV Paragraph 3 Anzeige: https://www.gesetze-im-internet.de/nisv/__3.html
- BMUKN FAQ NiSV: https://www.bundesumweltministerium.de/themen/strahlenschutz/nichtionisierende-strahlung/ueberblick-nichtionisierende-strahlung/faq-strahlenschutz-bei-kosmetischen-und-nichtmedizinischen-anwendungen
- BAuA TRGS 530 Friseurhandwerk: https://www.baua.de/DE/Angebote/Rechtstexte-und-Technische-Regeln/Regelwerk/TRGS/pdf/TRGS-530.pdf
- BGW Hautschutz- und Haendehygieneplaene: https://www.bgw-online.de/bgw-online-de/themen/gesund-im-betrieb/gesunde-haut/hautschutz-und-haendehygieneplaene-fuer-26-berufsgruppen-14166
- BVL Taetowiermittel: https://www.bvl.bund.de/DE/Arbeitsbereiche/03_Verbraucherprodukte/03_AntragstellerUnternehmen/08_Rechtsvorschriften/03_Taetowiermittel/bgs_taetowiermittel_rechtliche_grundlagen_node.html

### 50.5 Kosmetik-, Chemie-, Gemische- und Biozid-Produkteakte

Zielgruppen:

- Kosmetikhersteller
- Private-Label-Kosmetikmarken
- Importeure von Kosmetik
- Kerzen-/Duftproduktanbieter
- Reinigungsmittelanbieter
- Hersteller/Importeure chemischer Gemische
- Biozidprodukt-Anbieter
- Onlinehaendler mit Eigenmarken
- B2B-Haendler fuer chemische Produkte

Moegliche Inhalte:

- Produktinformationsdatei fuer Kosmetik
- Sicherheitsbewertung/Sicherheitsbericht-Ablage
- verantwortliche Person
- CPNP-Notifizierungsnachweis
- Etiketten-/Kennzeichnungsablage
- Sicherheitsdatenblaetter
- UFI-/PCN-/BfR-Meldeablage
- REACH-/CLP-Checklisten als Informationsseiten
- Biozid-Melde-/Bestaetigungsfristen
- Zulassungs-/Registrierungsnummern
- Lieferantenunterlagen
- Chargen-/Rezepturversionen
- Labor-/Sachverstaendigenangebote als Partnerkanal

Produktform:

- Produktakte pro SKU
- Dokumentenstatus je Produkt
- Erinnerungen fuer Biozid-Bestaetigungen, SDB-Updates, Etikettenversionen
- Export fuer Behoerde, Labor, Sicherheitsbewerter, Lieferant, Marktplatz
- Partnervermittlung zu Sicherheitsbewertern, Laboren, REACH-/CLP-/Biozid-Beratern

Geldlogik:

- deutlich hoeherer Ticketwert als einfache Branchenakte
- 99 bis 399 Euro monatlich fuer kleinere Marken
- Setup-/Importpakete 499 bis mehrere Tausend Euro moeglich
- starke Provisionen ueber Labore, Sicherheitsbewertungen, Gutachten, Label-Reviews
- sehr guter Fit fuer Eigenmarken/Importeure, weil Produktdaten chaotisch sind

Grenze:

- keine Sicherheitsbewertung selbst erstellen
- keine Einstufung/Kennzeichnung als verbindliches Ergebnis ausgeben
- keine Verkehrsfaehigkeit garantieren
- keine Labor-/Gutachterrolle simulieren
- Plattform verwaltet Unterlagen, Quellen, Fristen und Partnerprozesse

Bewertung:

- sehr starkes Premiumfeld
- fachlich anspruchsvoll, aber sauber als Akte/Workflow/Partnervermittlung baubar
- passt gut zur bestehenden Produkt-Compliance-Idee, aber ohne Shopkonform-Abhaengigkeit

Quellen:

- IHK Frankfurt Kosmetik: https://www.frankfurt-main.ihk.de/recht/uebersicht-alle-rechtsthemen/lebensmittel-und-bedarfsgegenstaenderecht/kosmetik-5195262
- IHK Elbe-Weser Import von Kosmetik: https://www.ihk.de/elbeweser/international/import/import-von-kosmetik-5260858
- LGL Bayern Kosmetische Mittel/CPNP: https://www.lgl.bayern.de/produkte/kosmetika/informationen/index.htm
- REACH-CLP-Biozid Helpdesk Giftinformationszentren: https://www.reach-clp-biozid-helpdesk.de/DE/CLP/Giftinformationszentren
- REACH-CLP-Biozid Helpdesk PCN-Uebergangsfrist: https://www.reach-clp-biozid-helpdesk.de/SharedDocs/Meldungen/DE/CLP/2024-12-04-PCN_%C3%9Cbergangsfrist
- BAuA Biozid-Meldeverfahren: https://www.baua.de/DE/Themen/Chemikalien-Biostoffe/Chemikalienrecht/Biozide/Biozidrechts-Durchfuehrungsverordnung-und-FAQ/Biozidrechts-Durchfuehrungsverordnung_node
- REACH Registrierung: https://www.reach-clp-biozid-helpdesk.de/DE/REACH/Registrierung

### 50.6 EUDR-, Produktdatenpass- und Batteriepass-Akte

Zielgruppen:

- Holz-/Moebelhandel
- Kaffee-/Kakao-/Soja-/Palm-/Kautschuk-Importeure
- Lebensmittelimporteure
- Textil-/Modeanbieter
- Elektronikhaendler
- Batterie-/Akkuproduktanbieter
- Maschinen-/Industrieprodukte mit Batteriekomponenten
- Hersteller/Importeure mit EU-Lieferketten

Moegliche Inhalte:

- EUDR-Waren-/HS-Code-Akte
- Lieferanten-/Geodaten-/Sorgfaltserklaerungsablage
- Due-Diligence-Statement-Status
- jaehrliche Aktualitaetspruefung
- 5-Jahres-Unterlagenablage
- Digital-Product-Passport-Datenfelder als Zukunftsmodul
- Batteriepass-Datenfelder fuer betroffene Batterien
- Lieferantenfrageboegen
- Export an Berater/Importeur/Kunden

Produktform:

- Lieferketten-Datenraum
- Produkt-/Materialakte
- Lieferantenportal light
- Fristen- und Statusuebersicht
- Partnervermittlung zu EUDR-/Zoll-/Nachhaltigkeitsberatern
- kein automatisches "Produkt ist EUDR-konform", sondern Daten sammeln und Pruefprozess steuern

Geldlogik:

- hoher Ticketwert, aber nicht fuer jeden Betrieb
- 149 bis 799 Euro monatlich je nach Produkt-/Lieferantenzahl
- Setup/Importdaten sehr gut monetarisierbar
- Partnerumsatz hoch, weil Fachberatung gebraucht wird
- ab 2026/2027 als SEO-/Leadthema sehr interessant

Grenze:

- keine EUDR-Betroffenheitsentscheidung als Einzelfallurteil
- keine Sorgfaltspflichtenbewertung
- keine Entwaldungsfreiheit garantieren
- keine Batteriepass-/DPP-Rechtsumsetzung versprechen
- als Datenraum, Fristenplaner und Partnerworkflow sauber

Bewertung:

- sehr guter Zukunftscluster
- nicht als erstes Massenmodul bauen, aber sofort als Content-/Leadpaket vorbereiten
- besonders gut fuer Import/Handel/Produktdatenakte

Quellen:

- EU EUDR: https://environment.ec.europa.eu/topics/forests/deforestation/regulation-deforestation-free-products_en
- EU EUDR Information System: https://green-forum.ec.europa.eu/nature-and-biodiversity/deforestation-regulation-implementation/information-system-deforestation-regulation_en
- BLE Entwaldungsfreie Produkte: https://www.ble.de/DE/Themen/Wald-Holz/Entwaldungsfreie-Produkte/Lieferketten_node.html
- BLE EUDR Sorgfaltspflicht: https://www.ble.de/DE/Themen/Wald-Holz/Entwaldungsfreie-Produkte/Sorgfaltspflicht/Sorgfaltspflicht_node.html
- CSR in Deutschland EUDR: https://www.csr-in-deutschland.de/DE/Gesetze/Weitere-EU-Gesetzgebung/EU-Verordnung-fuer-entwaldungsfreie-Produkte/art-eu-verordnung-fuer-entwaldungsfreie-produkte.html
- BMWE Oekodesign/Digitaler Produktpass: https://www.bundeswirtschaftsministerium.de/Redaktion/DE/Schlaglichter-der-Wirtschaftspolitik/2024/06/09-oeko-design-verordnung.html
- IHK Bodensee-Oberschwaben EU-Batterieverordnung: https://www.ihk.de/bodensee-oberschwaben/innovation/innovation-und-technologie/produktentwicklung/die-neue-eu-batterieverordnung-6645184

### 50.7 Reiseveranstalter-, Kundengeld- und Sicherungsscheinakte

Zielgruppen:

- kleine Reiseveranstalter
- Vereine/Organisationen mit regelmaessigen Reisen
- Nischenreiseanbieter
- Seminarreiseanbieter
- Sportreiseanbieter
- Gruppenreiseanbieter
- Vermittler verbundener Reiseleistungen

Moegliche Inhalte:

- Insolvenzabsicherungsnachweis
- Sicherungsschein-Ablage
- Informationspflichten-Vorlagen als redaktionelle Hinweise
- Versicherungs-/Fondsunterlagen
- Reiseprodukt-Akte
- Kundenkommunikationsversionen
- Partnervermittlung zu Versicherern/DRSF-nahen Dienstleistern/Reiserecht-Fachanwaelten

Produktform:

- Reiseanbieter-Nachweisordner
- Ablauf-/Erneuerungsfristen fuer Absicherung
- Dokumentencheck fuer jede Reise
- Export fuer Versicherer, Berater, internen Vertrieb

Geldlogik:

- kleinere, aber zahlungsbereite Nische
- 49 bis 199 Euro monatlich
- Versicherungs-/Partnerprovisionen moeglich
- gutes SEO ueber konkrete Fragen zu Sicherungsschein, Kundengeld, Pauschalreise

Grenze:

- hohes Rechtsberatungsrisiko bei Einstufung "Pauschalreise ja/nein"
- diese Einstufung nicht automatisieren
- nur Informationsseiten, Ablage, Fristen, Dokumentenversionen und Partnervermittlung

Bewertung:

- interessant, aber nicht Startkern
- gut als spaeteres Nischenpaket oder Leadmagnet

Quellen:

- IHK Ostbrandenburg Reisesicherung: https://www.ihk.de/ostbrandenburg/zielgruppeneinstieg-gruender/tourismusrecht/gesetz-reiseinsolvenzsicherung-5156510
- DIHK Infoblatt Reisevermittler: https://www.dihk.de/resource/blob/4604/964f180bd4225e2e3fb6ecc4c20b7b0a/wirtschaftspolitik-dihk-infoblatt-reiserecht-vermittler-data.pdf
- DRSF Reiserecht: https://drsf.reise/reiserecht/
- Bundesjustizamt Pauschalreisen: https://www.bundesjustizamt.de/SharedDocs/Downloads/DE/Pauschalreisen/Merkblatt_Insolvenzsicherung.pdf

### 50.8 Beauftragten-, Fortbildungs- und Jahresberichtsakte

Zielgruppen:

- Industrieunternehmen
- Entsorger
- Anlagenbetreiber
- Abwasser-/Umweltbetriebe
- Chemie-/Produktionsbetriebe
- groessere Immobilien-/Infrastrukturbetreiber
- Betriebe mit Abfall-, Immissionsschutz-, Stoerfall- oder Gewaesserschutzbeauftragten

Moegliche Inhalte:

- Beauftragtenbestellung
- Fachkundenachweise
- Fortbildungsfristen
- Jahresberichte
- interne Begehungen
- Massnahmenlisten
- Behoerdenkommunikation
- Audit-/Prueferexport

Produktform:

- Beauftragtenakte pro Rolle
- Fortbildungs-Tracker
- Jahresbericht-Status
- Aufgaben-/Massnahmenliste
- Partnervermittlung zu anerkannten Lehrgaengen und Fachberatern

Geldlogik:

- kleinerer Markt, aber sehr zahlungsbereit
- 199 bis 699 Euro monatlich bei Anlagenbetreibern moeglich
- Fortbildungsanbieter als Partnerkanal
- guter Premium-Baustein fuer Industrie-/Umweltakte

Grenze:

- keine Fachkunde ersetzen
- keine Beauftragtenrolle uebernehmen
- keine Jahresberichte fachlich bewerten
- nur Ablage, Fristen, Workflows, Exporte

Bewertung:

- starkes Premium-Modul
- nicht fuer Massen-SEO, aber fuer hohe Tickets und Partnervertrieb gut

Quellen:

- Abfallbeauftragtenverordnung Paragraph 9: https://www.gesetze-im-internet.de/abfbeauftrv_2017/__9.html
- 5. BImSchV Paragraph 9: https://www.gesetze-im-internet.de/bimschv_5_1993/__9.html
- WHG Paragraph 65: https://www.gesetze-im-internet.de/whg_2009/__65.html
- BImSchG Aufgaben Immissionsschutzbeauftragter: https://www.gesetze-im-internet.de/bimschg/BJNR007210974.html

### 50.9 Gefahrstoff-Expositionsverzeichnis und ZED-Langzeitarchiv

Zielgruppen:

- metallverarbeitende Betriebe
- Lackierereien
- Labore
- Holz-/Staub-/Chemiebetriebe
- Bau-/Sanierungsbetriebe
- Betriebe mit krebserzeugenden oder reproduktionstoxischen Gefahrstoffen
- Arbeitgeber mit langfristigen Expositionsnachweisen

Moegliche Inhalte:

- Expositionsverzeichnis
- Taetigkeits-/Stoff-/Mitarbeiterzuordnung
- Hoehe/Dauer/Haeufigkeit der Exposition
- Auszug bei Ausscheiden
- 40-Jahres-/5-Jahres-Aufbewahrungslogik
- ZED-Hinweis/Export
- Sicherheitsdatenblaetter
- Betriebsanweisungen
- Unterweisungsnachweise

Produktform:

- Langzeitarchiv
- Mitarbeiterbezogene Nachweisakte
- Export fuer Mitarbeiter, Betriebsarzt, Fachkraft, Berufsgenossenschaft
- keine Gefahrstoffbewertung, sondern Dokumentation/Archiv

Geldlogik:

- sehr starker Bindungseffekt wegen langer Aufbewahrung
- 99 bis 499 Euro monatlich je nach Mitarbeiter-/Stoffzahl
- Partner zu Sifa, Betriebsarzt, Gefahrstoffberater

Grenze:

- keine Gefaehrdungsbeurteilung automatisiert ersetzen
- keine Arbeitsplatzmessung
- keine Expositionshoehe schaetzen
- Nutzer/Partner tragen Werte ein, System verwaltet Nachweis

Bewertung:

- einer der saubersten Premiumbausteine fuer Gefahrstoffbetriebe
- hoher Nutzen, weil Langzeitarchiv schwer selbst sauber zu fuehren ist

Quellen:

- BAuA TRGS 410: https://www.baua.de/DE/Angebote/Regelwerk/TRGS/pdf/TRGS-410.pdf
- Gefahrstoffverordnung: https://www.gesetze-im-internet.de/gefstoffv_2010/BJNR164400010.html
- DGUV ZED: https://www.dguv.de/ifa/gestis/zentrale-expositionsdatenbank-zed/index.jsp
- DGUV Expositionsverzeichnis: https://www.dguv.de/ifa/praxishilfen/taetigkeiten-mit-krebserzeugenden-gefahrstoffen/gefaehrdungsbeurteilung/expositionsverzeichnis/index.jsp

### 50.10 Landwirtschafts-, Tierhaltungs-, Duenge- und TAM-Akte

Zielgruppen:

- landwirtschaftliche Betriebe
- Tierhalter
- Milchvieh-/Rinderbetriebe
- Schweine-/Gefluegelhalter
- Pferdehaltungen mit Betriebslogik
- Lohnunternehmen
- Direktvermarkter

Moegliche Inhalte:

- Bestandsregister
- Tierbewegungen
- Arzneimittel-/Antibiotikaaufzeichnungen
- TAM-Meldekalender
- Duengeaufzeichnungen
- Pflanzenschutzaufzeichnungen
- Konditionalitaetsnachweise
- Lebensmittel-/Direktvermarktungs-HACCP
- Maschinen-/Pruefakte

Produktform:

- Hofakte als eigene Vertikale
- Kalender fuer Halbjahres-/Jahresmeldungen
- Nachweisordner fuer Kontrolle/Foerderung/Beratung
- Partnervermittlung zu Agrarberatern, Tierarzt, Labor, Lohnunternehmen

Geldlogik:

- sehr grosser Dokumentationsbedarf
- 49 bis 249 Euro monatlich moeglich, groessere Betriebe mehr
- aber eigener Markt mit eigener Sprache und vielen bestehenden Agrarloesungen
- eher separates Produkt "Hofakte" statt erster Kern von Betriebsakte

Grenze:

- keine Foerder-/Rechtsberatung
- keine Duengeplanung als Fachurteil
- keine Arzneimittelbewertung
- nur Aufzeichnungen, Fristen, Ablage, Export

Bewertung:

- fachlich stark, aber kann die Plattform verzetteln
- als spaeteres Vertikalpaket sehr interessant
- nicht in den ersten Build mischen, wenn der Start schlank bleiben soll

Quellen:

- Viehverkehrsverordnung: https://www.gesetze-im-internet.de/viehverkv_2007/BJNR127400007.html
- TAMG: https://www.gesetze-im-internet.de/tamg/BJNR453010021.html
- HI-Tier TAM: https://www.hi-tier.de/infotam.html
- Duengeverordnung: https://www.gesetze-im-internet.de/d_v_2017/BJNR130510017.html
- Duengeverordnung Paragraph 10: https://www.gesetze-im-internet.de/d_v_2017/__10.html
- Landwirtschaftskammer NRW Konditionalitaet: https://www.landwirtschaftskammer.de/foerderung/konditionalitaet/aenderungen.htm

### 50.11 Veranstaltungs-, Versammlungsstaetten- und Eventakte

Zielgruppen:

- Eventlocations
- Stadthallen
- Hotels mit Veranstaltungsraeumen
- Messe-/Kongressanbieter
- Clubs
- Konzertveranstalter
- Sportstaetten
- kommunale Betreiber

Moegliche Inhalte:

- Sicherheitskonzept-Ablage
- Brandschutzordnung
- Raeumungskonzept
- Feuerwehrplaene
- Ordnungsdienst-/Personalnachweise
- Unterweisungen
- Veranstaltungsleiter-/Betreiberuebertragung
- Begehungs-/Maengellisten
- Geraete-/Pruefnachweise
- Genehmigungs-/Auflagenakte

Produktform:

- Eventakte pro Veranstaltung
- Locationakte pro Objekt
- Checklisten fuer wiederkehrende Veranstaltungen
- Nachweisordner fuer Behoerde, Versicherer, Betreiber, Veranstalter
- Partnervermittlung zu Brandschutz, Sicherheitsdienst, Eventtechnik

Geldlogik:

- gute Tickets pro Location/Veranstaltung
- 99 bis 399 Euro monatlich fuer Locations
- Einmalpakete pro Veranstaltung moeglich
- Partnerumsatz ueber Brandschutz, Sicherheitsdienst, Technik

Grenze:

- keine Sicherheitskonzepte fachlich erstellen
- keine Genehmigungsberatung
- keine Betreiberverantwortung uebernehmen
- Vorlagen/Ordner/Fristen/Export ja, Fachplanung Partner

Bewertung:

- gutes Branchenpaket, aber weniger Masse als Gastro/Immobilien
- fuer Hotels/Eventlocations als Zusatzmodul stark

Quellen:

- Baden-Wuerttemberg VStaettVO: https://gewerbeaufsicht.baden-wuerttemberg.de/documents/20121/49165/2_2_03.pdf
- Bayern VStaettV Paragraph 43: https://www.gesetze-bayern.de/Content/Document/BayVStaettV-43
- Brandenburg VStaettV: https://bravors.brandenburg.de/verordnungen/bbgvstaettv
- Arbeitsstaettenverordnung: https://www.gesetze-im-internet.de/arbst_ttv_2004/ArbSt%C3%A4ttV.pdf

### 50.12 Intrastat-, Aussenhandelsstatistik- und Statistikmeldeakte

Zielgruppen:

- Handelsunternehmen mit EU-Warenverkehr
- Importeure/Exporteure
- Grosshaendler
- Industrieunternehmen
- Fulfillment-/Logistiknahe Haendler
- Hotels/Beherbergung fuer Tourismusstatistik als separates Unterpaket

Moegliche Inhalte:

- Meldeschwellen-Watchlist
- IDEV-/CORE-Zugangsdaten-Hinweis
- monatliche Meldefrist-Erinnerung
- Beleg-/Warenverkehrsablage
- Ansprechpartner/Vertreter
- Export fuer Steuerberater/Zollberater/Statistikbeauftragten

Produktform:

- Meldekalender
- Schwellenwert-Informationsseite
- Fristen- und Aufgabenworkflow
- Ablage fuer Meldungsbestaetigungen

Geldlogik:

- nicht fuer Massenmarkt, aber gute Zusatzfunktion fuer Handel/Import
- 49 bis 199 Euro monatlich als Modul
- besser als Bestandteil der Handels-/Importakte als eigenes Startprodukt

Grenze:

- keine steuerliche oder zollrechtliche Einordnung
- keine automatische Meldung ohne Fachfreigabe
- keine verbindliche Schwellenwertentscheidung aus Kundenumsatzdaten

Bewertung:

- wertvoller Zusatz fuer Import-/Handelspaket
- SEO ueber konkrete Meldeschwellen-Fragen moeglich

Quellen:

- Destatis Anmeldeschwellen 2025: https://www.destatis.de/DE/Themen/Wirtschaft/Aussenhandel/anmeldeschwellen-2025.html
- Destatis Online-Meldung Aussenhandel: https://www.destatis.de/DE/Service/Online-Melden/online-meldung-aussenhandel.html
- Aussenhandelsstatistikgesetz: https://www.gesetze-im-internet.de/ahstatg/BJNR175110021.html
- Destatis Online melden: https://www.destatis.de/DE/Service/Online-Melden/_inhalt.html

### 50.13 Drohnen- und UAS-Betreiberakte

Zielgruppen:

- Dachdecker
- Bau-/Vermessungsunternehmen
- Immobilienmakler
- Gutachter
- Fotografen/Videografen
- Sicherheitsdienste
- Agrarbetriebe mit Drohneneinsatz
- Energie-/Infrastrukturpruefer

Moegliche Inhalte:

- Betreiberregistrierung
- eID-Ablage
- Kompetenznachweise
- Drohnen-/Geraeteakte
- Versicherungsnachweise
- Wartung/Zustand
- Flug-/Einsatzprotokolle
- Genehmigungen fuer spezielle Einsaetze

Produktform:

- Drohnenakte pro UAS
- Pilotenakte
- Einsatz-/Fluglog
- Frist fuer Nachweise/Zertifikate
- Export fuer Kunden, Versicherer, Auftraggeber

Geldlogik:

- kleine, aber klare Nische
- 19 bis 99 Euro monatlich
- Zusatzumsatz ueber Versicherungen, Schulungen, Drohnenservice
- gut als Branchen-Add-on fuer Bau/Immobilien/Medien

Grenze:

- keine Flugfreigabe automatisieren
- keine Luftraumbewertung
- keine Genehmigungsberatung
- Ablage, Fristen, Checklisten und Nachweise ja

Bewertung:

- nettes Zusatzmodul, kein Startkern
- gut fuer SEO-Longtail und Partnerangebote

Quellen:

- LBA Betreiberregistrierung FAQ: https://www.lba.de/DE/Drohnen/FAQ/05_Registrierung_Betreiber_EID/FAQ_node.html
- LBA Fernpiloten: https://www.lba.de/DE/Drohnen/Fernpiloten/Anforderungen_Fernpiloten_node.html
- DFS Drohnen-Checkliste: https://www.dfs.de/homepage/de/drohnenflug/checkliste-fuer-drohnenpiloten/
- EASA Drone Operators and Pilots: https://www.easa.europa.eu/en/light/topics/drone-operators-pilots

### 50.14 Apotheke-, Arzneimitteltemperatur-, BtM- und Praxiszusatzakte

Zielgruppen:

- Apotheken
- Versandapotheken
- Arztpraxen mit BtM-/Impfstoff-/Kuehlthemen
- Zahnarztpraxen
- Heilberufe mit Hygiene-/Medizinproduktepflichten
- Pflege-/Therapieeinrichtungen mit Arzneimittellagerung

Moegliche Inhalte:

- Temperaturkontrollen
- Kuehlschrank-/Lagergeraete
- BtM-Aufzeichnungen/Aufbewahrungshinweise
- Hygieneplan
- Medizinproduktebuch/Bestandsverzeichnis, soweit passend
- Wartung/Kalibrierung
- Schulungsnachweise
- Revisions-/Begehungsordner

Produktform:

- Praxis-/Apotheken-Nachweisakte
- Kuehlketten-/Temperaturprotokoll
- Geraeteakte
- Export fuer Revision, Kammer, Behoerde, interne QS
- Partner zu Apothekenberatung, Temperaturmonitoring, Hygieneberatung

Geldlogik:

- zahlungsfaehige, aber stark regulierte Zielgruppe
- 99 bis 399 Euro monatlich moeglich
- Konkurrenz durch Spezialsoftware und bestehende QM-Systeme
- eher spaeteres Premium-/Partnerpaket

Grenze:

- keine pharmazeutische/praktische Berufsberatung
- keine BtM-Bestandsfuehrung als Fachsystem ersetzen, wenn Spezialanforderungen bestehen
- keine Hygiene-/Medizinproduktebewertung automatisieren

Bewertung:

- fachlich interessant, aber nicht der einfachste Start
- als Add-on fuer Gesundheitsdienstleister besser als als erster Markt

Quellen:

- Apothekenbetriebsordnung: https://www.gesetze-im-internet.de/apobetro_1987/BJNR005470987.html
- BfArM BtM-Aufzeichnungen: https://www.bfarm.de/DE/Bundesopiumstelle/Betaeubungsmittel/Aufzeichnungen/_node.html
- BfArM BtM-Sicherungsrichtlinien: https://www.bfarm.de/DE/Bundesopiumstelle/Betaeubungsmittel/Sicherungsrichtlinien/_node.html
- RKI Musterhygieneplaene: https://www.rki.de/DE/Themen/Infektionskrankheiten/Krankenhaushygiene/Infektionshygiene-A-Z/H/Hygieneplan/Musterhygieneplaene.html
- MPBetreibV: https://www.gesetze-im-internet.de/mpbetreibv_2025/BJNR0260B0025.html

### 50.15 Neue Bewertung nach dieser Suchrunde

Staerkste neue Start-/Fruehmodule:

1. Lebensmittel/HACCP/Rueckverfolgbarkeit
2. Immobilien/Aufzug/Feuerstaetten/Rauchwarnmelder/Brandschutz
3. Beauty/Friseur/Kosmetik/NiSV/Tattoo
4. Kosmetik-/Chemie-/Biozid-Produkteakte
5. EUDR-/Produktdaten-/Batteriepass-Vorbereitungsakte

Staerkste Premium-Module:

1. Gefahrstoff-Expositionsarchiv/ZED
2. Beauftragten-/Fortbildungs-/Jahresberichtsakte
3. EUDR/DPP/Batteriepass
4. Chemie/Kosmetik/Biozid
5. Veranstaltungsstaetten/Event

Staerkste Add-ons fuer bestehende Branchenpakete:

- Hotelmeldeschein/Beherbergungsstatistik zu Hotel/Gastro
- Intrastat zu Handel/Import
- Drohnen zu Bau/Immobilien/Medien
- Aufzug/Brandschutz zu Immobilien/Hotel
- Temperatur/BtM/Hygiene zu Praxis/Apotheke

Themen, die stark sind, aber eher eigene Vertikale werden sollten:

- Landwirtschaft/Hofakte
- Apotheken/QM-Akte
- Reiseveranstalter/Reisesicherungsakte
- Event-/Versammlungsstaettenakte

### 50.16 Was das fuer die Website bedeutet

Die Website sollte nicht nur "Pflichten" listen. Sie sollte sichtbar nach kaufbaren Aktenpaketen strukturieren:

- Betriebsakte Arbeitsschutz
- Betriebsakte Pruefungen und Wartungen
- Betriebsakte Gastro/HACCP
- Betriebsakte Immobilien
- Betriebsakte Handel/Import/Produkte
- Betriebsakte Gefahrstoffe
- Betriebsakte Hotel
- Betriebsakte Beauty
- Betriebsakte Transport/Fuhrpark
- Betriebsakte Praxis/Gesundheit
- Betriebsakte Umwelt/Energie

Jedes Paket braucht:

- klare Zielgruppe
- typische Nachweise
- typische Fristen
- typische Objekte
- "in meine Akte uebernehmen"-Button
- Beispiel-Nachweisordner
- Partner-/Profi-Export
- Quellen mit Standdatum
- Grenzen: keine Rechts-/Steuer-/Fachberatung

### 50.17 Aktualisierte Geldlogik

Die Plattform wird nicht ueber eine einzelne Pflicht gross, sondern ueber Kombinationen:

- Basis-Abo fuer Fristen/Nachweise
- Branchenpaket fuer konkrete Zielgruppe
- Objekt-/Standort-/Mitarbeiter-/Produktstaffel
- QR-Code-Labels pro Objekt/Geraet/Anlage
- Export-/Nachweisordner als Paywall
- Einrichtungs-/Importservice
- Partnervermittlung fuer Pruefung, Wartung, Schulung, Labor, Berater, Versicherer

Realistische Paketlogik:

- Solo/Kleinbetrieb: 19 bis 49 Euro monatlich
- kleiner Betrieb mit Standort/Team: 49 bis 149 Euro monatlich
- Hausverwaltung/Hotel/Handel/Produktion: 149 bis 499 Euro monatlich
- Premium Produkt-/Umwelt-/Gefahrstoff-/EUDR-Akte: 299 bis 999 Euro monatlich
- Setup/Import: 149 bis mehrere Tausend Euro, je nach Datenmenge

Wichtig: Das Geld kommt nicht aus "wir sagen dir, was rechtlich gilt", sondern aus:

- Ordnung
- Erinnerung
- Nachweis
- Export
- Wiederverwendbarkeit
- weniger Chaos vor Pruefung, Behoerde, Kunde, Versicherung, Steuerberater, Sifa, Berater

### 50.18 Neue harte Startempfehlung

Wenn wir sofort bauen, sollte die erste oeffentliche Seite zwar breit wirken, aber intern mit wenigen starken Paketen starten:

1. Pruef-/Wartungs-/Fristenakte als Kern
2. Gastro/HACCP als erstes sehr konkretes Branchenpaket
3. Immobilien/Aufzug/Brandschutz/Rauchwarnmelder als zweites Branchenpaket
4. Handel/Import/Produktakte als Premium-Leadpaket
5. Gefahrstoff/ZED als Premium-Spezialpaket

Alles andere kommt als vorbereitete SEO-/Themenwelt mit sauberer Grenze:

- statische Informationen
- Quellen
- "Thema merken"
- "in Akte uebernehmen"
- "Partner anfragen"
- keine personalisierte Rechtsfolge

Damit bleibt die Plattform gross genug fuer SEO und Umsatz, aber der Bau bleibt beherrschbar.

## 51. Weitere Nachrecherche: Mess-, Betreiber-, Sondergewerbe- und Nischenakten

Diese Runde bringt keine komplett andere Produktlogik, sondern weitere starke Aktenobjekte. Besonders gut passen alle Themen, bei denen ein Betrieb schon heute pruefen, warten, dokumentieren, melden oder Unterlagen bereithalten muss.

Wichtig fuer die Plattform:

- Keine Einstufung als verbindliche Fachentscheidung.
- Keine Rechtsberatung.
- Keine Fachpruefung ersetzen.
- Der Nutzer verwaltet seine Objekte, Fristen, Nachweise und Partner.
- Fachliche Bewertung laeuft ueber Pruefer, Sachkundige, Innungen, Labore, Berater oder Behoerden.

### 51.1 Eich-, Messgeraete- und Messwertakte

Zielgruppen:

- Einzelhandel mit Waagen
- Metzgereien/Baeckereien
- Wochenmarkt-/Hofladenbetreiber
- Tankstellen
- Ladepunktbetreiber
- Taxi-/Mietwagenunternehmen
- Waeschereien mit Abrechnung nach Gewicht
- Recycling-/Schrottbetriebe mit Waagen
- Industrie mit geeichten Messgeraeten
- Vermieter/Objektbetreiber mit Messgeraeten, soweit abrechnungsrelevant

Moegliche Inhalte:

- Messgeraeteliste
- Eichfrist je Messgeraet
- Eichscheine
- Reparatur-/Nacheichungsnachweise
- Konformitaetserklaerungen
- Standort und Seriennummer
- Ansprechpartner/Eichamt
- Wartungs- und Pruefberichte
- Messwertverwendungs-Hinweise
- Ladepunkt-/Waagen-/Zapfsaeulen-/Taxameter-Unterlagen

Produktform:

- Eichakte pro Messgeraet
- QR-Code am Messgeraet
- Fristenkalender fuer Eichungen
- Export fuer Eichamt, internen Verantwortlichen, Betreiber, Filialleitung
- Partnervermittlung zu Eichdienst, Waagenservice, Ladepunktservice, Taxameterdienst

Geldlogik:

- sehr gutes Querschnittsmodul
- viele Branchen, aber einheitliches Datenmodell
- 19 bis 149 Euro monatlich fuer kleine Betriebe
- 199 bis 999 Euro monatlich fuer Filialisten, Ladepunktbetreiber oder Betriebe mit vielen Messgeraeten
- Partnerumsatz ueber Eich-/Wartungsdienstleister

Grenze:

- keine Aussage "dieses Messgeraet ist eichfaehig"
- keine Messwertbewertung
- keine technische Pruefung
- nur Fristen, Unterlagen, Objektakte und Export

Bewertung:

- sehr gutes neues Modul, weil es viele Branchen verbindet
- hoher SEO-Wert ueber konkrete Mikrofragen zu Waage, Ladesaeule, Zapfsaeule, Taxameter, Eichfrist
- stark fuer die Website, weil fast niemand "Eichakte" als einfache Betriebsakte erklaert

Quellen:

- MessEV: https://www.gesetze-im-internet.de/messev/BJNR201100014.html
- Eichamt Sachsen Messgeraeteverwender: https://www.eichamt.sachsen.de/geraeteverwender.html
- Eichamt Bremen Eichpflicht: https://www.eichamt.bremen.de/verbraucherschutz/eichpflicht-8517
- Sachsen Eichung von Waagen/Taxametern/Messgeraeten: https://amt24.sachsen.de/zufi/leistungen/6001137
- Niedersachsen Entfall Anzeigepflicht 2025: https://www.men.niedersachsen.de/startseite/gesetzliche_grundlagen/anzeigepflicht/entfall-der-anzeigepflicht-eichpflichtiger-messgerate-zum-01-01-2025-128969.html

### 51.2 Tankstellen-, Eigenverbrauchstank-, Waschplatz- und Leichtfluessigkeitsabscheiderakte

Zielgruppen:

- Tankstellen
- Speditionen mit Eigenverbrauchstankstelle
- Bauunternehmen mit Dieseltank
- Landwirtschaftsbetriebe mit Hoftankstelle
- Kfz-Waschplaetze
- Werkstaetten
- Industrie mit Abfuell-/Lageranlagen
- Gewerbeimmobilien mit Heiz-oel-/Dieselanlagen

Moegliche Inhalte:

- AwSV-Anlagenliste
- Tankdaten, Volumen, Standort, Schutzgebietshinweis
- Sachverstaendigenpruefungen
- Wartungsnachweise
- Fachbetrieb-Nachweise
- Abscheider-Betriebstagebuch
- Eigenkontrollen
- halbjaehrliche Wartungen
- Generalinspektionen
- Ex-Schutz-/BetrSichV-Unterlagen, falls passend
- Zapfsaeulen-/Eichunterlagen
- Maengelliste und Fristen

Produktform:

- Tank-/Waschplatz-/Abscheiderakte pro Standort
- QR-Code am Tank/Abscheider
- Pruef- und Wartungskalender
- Betriebstagebuch digital
- Export fuer Wasserbehoerde, Sachverstaendigen, Wartungsfirma, Versicherung
- Partnervermittlung zu AwSV-Sachverstaendigen, Fachbetrieben, Abscheiderdiensten, Tankpruefern

Geldlogik:

- starkes B2B-Modul mit klarer Zahlungsbereitschaft
- 79 bis 399 Euro monatlich je Standort realistisch
- Setup/Anlagenaufnahme 299 bis mehrere Tausend Euro moeglich
- sehr gute Partnerprovisionen bei Pruefung, Wartung, Sanierung

Grenze:

- keine AwSV-Gefaehrdungsstufe automatisiert bestimmen
- keine technische Dichtheits-/Sachverstaendigenpruefung
- keine Explosionsschutzbewertung
- System verwaltet Anlagen, Fristen, Berichte, Partnerauftraege

Bewertung:

- fuer Kfz, Logistik, Bau, Landwirtschaft und Immobilien sehr stark
- passt besser als eigenes Paket "Tank/Abscheider" statt nur als Unterpunkt Umwelt
- online sehr gut abbildbar

Quellen:

- AwSV: https://www.gesetze-im-internet.de/awsv/AwSV.pdf
- LfU Bayern Eigenverbrauchstankstellen: https://www.lfu.bayern.de/wasser/umgang_mit_wgs/tankstellen/eigenverbrauchstankstellen/index.htm
- LUBW Betreiberpflichten AwSV: https://www.lubw.baden-wuerttemberg.de/betrieblicher-umweltschutz/organisatorische-anforderungen-betreiberpflichten
- IHK AwSV-Merkblatt: https://www.ihk.de/blueprint/servlet/resource/blob/3762702/04624e4ac3f07ad579946708eb302aaf/2017-06-09-mb-anlagenverordnung-awsv-data.pdf
- Osnabrueck Leichtfluessigkeitsabscheider: https://nachhaltig.osnabrueck.de/fileadmin/nachhaltig/Dokumente/Massnahmen_zur_Eigenkontrolle_Wartung_und_Pruefung_von_Leichtfluessigkeitsabscheidern.pdf
- Umweltpakt Bayern Tankstellen/AwSV: https://www.umweltpakt.bayern.de/wasser/faq/440/verordnung-ueber-anlagen-zum-umgang-mit-wassergefaehrdenden-stoffen-awsv

### 51.3 Kfz-Werkstatt-, Autohaus-, AU- und Altfahrzeugakte

Zielgruppen:

- Kfz-Werkstaetten
- Autohaueser
- Reifendienst
- Karosserie-/Lackierbetriebe
- Waschstrassen
- Abschlepp-/Bergungsdienste
- Demontagebetriebe
- Schrott-/Altfahrzeugannahmen
- Teilehaendler mit Oel/Batterien/Reifen

Moegliche Inhalte:

- AU-Anerkennung
- AU-Schulungsnachweise
- QMS-/AUEK-Unterlagen
- Alt-oel-Ruecknahme-/Entsorgungsnachweise
- Batterieruecknahme
- Reifen-/Brandschutz-/Lagerunterlagen
- Gefahrstoffverzeichnis
- Sicherheitsdatenblaetter
- Abscheiderakte
- Hebebuehnen-/Arbeitsmittelpruefungen
- F-Gase-/Klimaservice-Nachweise
- Altfahrzeug-/Verwertungsnachweise, falls Demontage/Annahme
- Kassen-/TSE-Unterlagen

Produktform:

- Werkstattakte pro Standort
- Pruefkalender fuer Hebebuehnen, Kompressoren, Abscheider, Feuerloescher, Regale, AU
- Gefahrstoff-/SDB-Ordner
- Nachweisexport fuer Innung, Ueberwachung, BG, Umweltbehoerde, Versicherer
- Partnervermittlung zu Innungsschulungen, Pruefdiensten, Entsorgern, Abscheiderdiensten

Geldlogik:

- sehr gutes Branchenpaket, weil viele Betriebe klein/mittel und dokumentationsmuede sind
- 49 bis 249 Euro monatlich
- Setup/Objekterfassung 299 bis 1.500 Euro
- starke Partnerprovisionen ueber Pruefung, Entsorgung, Schulung, Brandschutz

Grenze:

- keine AU-/QMS-Anerkennung fachlich ersetzen
- keine Entsorgungs-/Abfallklassifizierung
- keine Arbeitsschutzfachkraft ersetzen
- keine Demontagebetriebs-Anerkennung uebernehmen

Bewertung:

- einer der besten Handwerks-/Werkstatt-Vertikalen
- passt hervorragend zu "Nichts vergessen. Alles nachweisen koennen."
- SEO ueber konkrete Fragen zu AU-Schulung, Alt-oel, Hebebuehne, Abscheider, Klimaservice, Reifenlager

Quellen:

- Alt-oelverordnung: https://www.gesetze-im-internet.de/alt_lv/BJNR023350987.html
- IHK Schleswig-Holstein Alt-oel: https://www.ihk.de/schleswig-holstein/innovation/umwelt/abfallberatung/altoelverordnung-1371052
- Kfz-Innung Muenchen AU-Anerkennung: https://www.kfz-innung.de/muenchen-oberbayern/stvzo-anerkennungen-auek/abgasuntersuchung-au/au-anerkennung.html
- Kfz Hessen AUEK/QMS: https://www.kfz-hessen.de/branchenthemen/werkstatt/auek-qualitaetsmanagement
- BMUKN Altfahrzeugverordnung: https://www.bundesumweltministerium.de/themen/kreislaufwirtschaft/abfallarten-und-abfallstroeme/altfahrzeuge/gesetzgebung-in-deutschland-altfahrzeug-verordnung
- AltfahrzeugV: https://www.gesetze-im-internet.de/altautov/BJNR166610997.html

### 51.4 Geruest-, Baustellen-, Absturzsicherungs-, Kran- und Baumaschinenakte

Zielgruppen:

- Bauunternehmen
- Dachdecker
- Geruestbauer
- Fassadenbauer
- Industriebetriebe mit Kranen
- Vermieter von Baumaschinen
- GaLaBau-Betriebe
- Montageunternehmen
- PV-/Dach-Montagebetriebe

Moegliche Inhalte:

- Geruestfreigaben und Sichtpruefungen
- Befaehigte Personen
- PSAgA-Pruefungen
- Anschlagmittel-/Lastaufnahmemittel-Pruefungen
- Kranpruefbuch
- Kranfuehrer-/Stapler-/Bediennachweise
- Baumaschinen-UVV
- Arbeitsmittelpruefungen
- Baustellenunterweisungen
- Absturzsicherungs-/Anschlageinrichtungsdokumentation
- Maengellisten und Sperrvermerke

Produktform:

- Baustellen-/Geraeteakte
- QR-Code am Geraet/Anschlagmittel/Geruestabschnitt
- mobile Sichtkontrolle
- Fotodokumentation
- Pruefplaketten-/Fristenuebersicht
- Export fuer BG, Auftraggeber, Bauleitung, SiGeKo, Versicherung
- Partnervermittlung zu Pruefern, Schulungen, PSA-Pruefern, Kran-/Baumaschinenservice

Geldlogik:

- hoher Nutzen, weil mobile Objekte schnell verloren gehen
- 79 bis 399 Euro monatlich fuer kleine/mittlere Betriebe
- Objekt-/Geraetestaffel sehr gut geeignet
- Setup/Inventaraufnahme und QR-Label-Paket als Zusatzumsatz

Grenze:

- keine Pruefung durch befaehigte Person ersetzen
- keine Tragwerks-/Statikbewertung
- keine SiGeKo-Leistung ersetzen
- System ist Nachweis-, Fristen- und Maengelakte

Bewertung:

- sehr gutes Premium-Handwerksmodul
- stark fuer QR-Code-Funktion und mobile Nutzung
- bestehende Arbeitsmittelakte wird dadurch deutlich konkreter

Quellen:

- TRBS 2121 Teil 1 Pruefung/Inaugenscheinnahme Gerueste: https://www.bgbau-medien.de/handlungshilfen_gb/daten/tr/trbs2121_1/5.htm
- DGUV Krane/Hebezeuge/Anschlagmittel: https://www.bghm.de/arbeitsschuetzer/themen/krane-hebezeuge-seile-ketten-anschlagmittel
- DGUV Grundsatz 309-001 Krane: https://publikationen.dguv.de/widgets/pdf/download/article/83
- DGUV Regel 109-017 Lastaufnahme-/Anschlagmittel: https://publikationen.dguv.de/widgets/pdf/download/article/3920
- DEKRA Baumaschinenpruefung: https://www.dekra.de/de/baumaschinenpruefung/
- BG BAU Absturz auf Daechern: https://www.bgbau.de/fileadmin/Medien-Objekte/Medien/DGUV-Informationen/201_056/201_056.pdf

### 51.5 Sport-, Fitness-, Spielplatz-, Kletter- und Freizeitstaettenakte

Zielgruppen:

- Fitnessstudios
- Sportvereine mit eigenen Anlagen
- Kommunen
- Schulen
- Kitas
- Kletter-/Boulderhallen
- Trampolin-/Indoor-Spielparks
- Hotels mit Fitness-/Spielbereich
- Campingplaetze
- Freizeitparks/kleine Freizeitbetriebe

Moegliche Inhalte:

- Sportgeraetepruefungen
- Fitnessgeraete-Wartungen
- Spielplatz-Inspektionen
- Kletterwand-/Boulderanlagenpruefungen
- PSA-/Kletterausruestungspruefungen
- Maengelfotos
- Sperrungen/Freigaben
- Herstellerunterlagen
- Erste-Hilfe-/Notfallkonzept
- Reinigungs-/Hygienenachweise
- Betreiber-/Verkehrssicherungsnachweise

Produktform:

- Sport-/Freizeitobjektakte
- QR-Code pro Geraet/Spielgeraet/Wand/PSA
- mobile Maengelaufnahme
- Pruefkalender
- Fotobericht
- Export fuer Kommune, Versicherung, Traeger, Studioleitung, Pruefer

Geldlogik:

- breite, aber fragmentierte Zielgruppe
- 29 bis 199 Euro monatlich fuer kleine Betreiber
- Kommunen/Traeger mit vielen Spielplaetzen koennen deutlich hoeher liegen
- Partnerprovisionen fuer Spielplatzpruefer, Sportgeraetepruefer, Wartung, PSA-Pruefung

Grenze:

- keine Verkehrssicherung juristisch bestaetigen
- keine Sachkundigenpruefung ersetzen
- keine "sicher"-Plakette aus eigener Plattform
- nur Pruef-/Maengel-/Nachweismanagement

Bewertung:

- starkes Nischenpaket, vor allem mit QR-Codes und Fotodokumentation
- fuer Kommunen schwerer Vertrieb, fuer private Betreiber leichter
- gut als SEO-/Branchenpaket

Quellen:

- DGUV Information 202-044 Sportstaetten und Sportgeraete: https://publikationen.dguv.de/widgets/pdf/download/article/1406
- Sichere Schule Sportgeraetepruefung: https://www.sichere-schule.de/sporthalle/schultraeger/prfueng-von-geraeten-und-einrichtungen
- Tuev Nord Spielplatzpruefung: https://www.tuev-nord.de/de/dienstleistungen/pruefung-und-gutachten/spielplatz-inspektionen/
- Sichere Kita Spielplatzgeraete: https://www.sichere-kita.de/aussengelaende/hinweise/pruefung-und-wartung-von-spielplatzgeraeten
- Nordwandhalle Kletterwand-/PSA-Pruefung: https://nordwandhalle.de/kletterwand-und-psa-pruefung

### 51.6 Reinigungs-, Gebaeudereinigungs-, Waescherei- und Textilreinigungsakte

Zielgruppen:

- Gebaeudereinigungsunternehmen
- Industriereinigung
- Waeschereien
- Textilreinigungen
- Hotels mit eigener Waescherei
- Pflege-/Gesundheitseinrichtungen mit Waescheaufbereitung
- Tatort-/Sonderreinigung
- Facility-Dienstleister

Moegliche Inhalte:

- Gefahrstoffverzeichnis
- Sicherheitsdatenblaetter
- Betriebsanweisungen
- Unterweisungen
- Reinigungs-/Desinfektionsplaene
- Hygieneplan fuer infektionsgefaehrdete Waesche
- Maschinen-/Absaugungspruefungen
- Loesemittel-/Emissionsunterlagen bei Textilreinigung
- Arbeitszeit-/Mindestlohn-Aufzeichnungen
- Objekt-/Kundenlisten mit Unterweisungsstatus
- PSA-/Hautschutzplaene

Produktform:

- Reinigungsbetriebsakte
- Objektakte pro Kunde/Standort
- Gefahrstoff-/SDB-Ordner
- Unterweisungs- und Arbeitszeitnachweis
- Hygiene-/Desinfektionsplan-Editor
- Export fuer BG, Auftraggeber, Zoll, Gesundheitsamt, interne Leitung
- Partnervermittlung zu Arbeitsschutz, Hygiene, Schulung, Gefahrstoffberatung

Geldlogik:

- sehr gute Zielgruppe, weil viele mobile Mitarbeiter und Nachweise
- 49 bis 299 Euro monatlich
- Zusatzumsatz ueber mehrsprachige Betriebsanweisungen, QR-Codes je Objekt, Schulungen
- Partnerprovisionen fuer Unterweisung, Arbeitsschutz, Hygieneprodukte

Grenze:

- keine Gefahrstoffbewertung ersetzen
- keine arbeitsrechtliche Beratung
- keine Hygieneabnahme
- System verwaltet Vorlagen, Nachweise, Quellen, Fristen und Exporte

Bewertung:

- starkes Branchenpaket, besonders wegen Mindestlohn-/Arbeitszeit- und Gefahrstoffmix
- weniger sexy, aber wirtschaftlich passend
- gute SEO-Chance ueber "Betriebsanweisung Reinigung", "Sicherheitsdatenblatt", "Hygieneplan Waescherei"

Quellen:

- BG BAU DGUV Regel Gebaeudereinigung: https://www.bgbau.de/fileadmin/Medien-Objekte/Medien/DGUV-Regeln/101_605.pdf
- BGW/DGUV Umgang mit Reinigungs- und Pflegemitteln: https://www.bgw-online.de/resource/blob/20570/819e388dd4b93c44f7f832ed4acb2298/dguv-regel101-019-umgang-reinigungs-und-pflegemittel-data.pdf
- DGUV Waeschereien: https://publikationen.dguv.de/media/pdf/b6/e6/96/R500_206.pdf
- DGUV Waesche mit Infektionsgefaehrdung: https://publikationen.dguv.de/widgets/pdf/download/article/3029
- BMAS Mindestlohn Dokumentationspflicht: https://www.bmas.de/DE/Arbeit/Arbeitsrecht/Mindestlohn/Dokumentationspflicht/dokumentationspflicht-art.html
- 31. BImSchV: https://www.gesetze-im-internet.de/bimschv_31_2024/BJNR0070A0024.html

### 51.7 Automaten-, Vending-, Schank- und Selbstbedienungsakte

Zielgruppen:

- Automatenaufsteller
- Hofladen-Automaten
- Kaffee-/Snackautomatenbetreiber
- Lebensmittelautomatenbetreiber
- Getraenkeautomaten
- Kantinen-/Betriebsverpflegung
- Gastronomie mit Schankanlagen
- Hotels/Vereine mit Schankanlagen
- SB-Wasch-/Kfz-Waschanlagen als angrenzendes Feld

Moegliche Inhalte:

- Automatenstandorte
- Hygiene-/Reinigungsprotokolle
- Temperaturkontrollen bei Kuehlung
- Kennzeichnungs-/Allergeninformationen
- Wartungsnachweise
- Kassen-/Bargeld-/Aufzeichnungsablage, soweit relevant
- Schankanlagen-Reinigung
- Schankanlagen-Pruefung/Wartung
- Lebensmittelunternehmer-Meldung, soweit relevant
- Maengel-/Stoerungsprotokolle

Produktform:

- Automatenakte pro Standort/Geraet
- QR-Code innen/aussen am Automaten
- mobile Reinigungsbestaetigung
- Temperatur-/Stoerungslog
- Nachweisordner fuer Lebensmittelueberwachung, Auftraggeber, Standortpartner
- Partnervermittlung zu Wartung, Hygiene, Automatenservice

Geldlogik:

- sehr gut skalierbar nach Automatenzahl
- 19 bis 99 Euro monatlich fuer kleine Betreiber
- 199 bis 999 Euro monatlich fuer groessere Automatenparks
- QR-Code-/Label- und Standortpakete sinnvoll

Grenze:

- keine Steuer-/TSE-Beratung
- keine verbindliche LMIV-Kennzeichnungsentscheidung
- keine Lebensmittelhygienepruefung
- System sammelt Standorte, Kontrollen, Temperaturen, Nachweise, Vorlagen

Bewertung:

- starkes Spezialpaket, weil es sehr objektbasiert ist
- passt technisch perfekt zur QR-Code-Aktenlogik
- gute Ergaenzung zu Gastro/HACCP und Handel

Quellen:

- LKL BW Lebensmittelautomaten Merkblatt: https://lkl.lgl-bw.de/export/sites/lkl/Projekte/Galerien/Dokumente/Merkblatt-Lebensmittelautomaten.pdf
- Bundestag Verkaufsautomaten 2026: https://www.bundestag.de/resource/blob/1157042/WD-5-017-26-WD-4-011-26-WD-8-009-26.pdf
- IHK Muenchen Lebensmittelverkehr/HACCP: https://www.ihk-muenchen.de/ratgeber/produktsicherheit/lebensmittelsicherheit/vorschriften/hinweise-zum-inverkehrbringen/
- Luebeck Lebensmittelautomaten: https://www.luebeck.de/files/rathaus/verwaltung/Gesundheitsamt/Dokument%20-%20Merkblatt%20zur%20Lebensmittelhygiene%20bei%20Verkaufsautomaten.pdf
- Deutscher Brauer-Bund Schankanlagen Hygieneleitfaden: https://brauer-bund.de/wp-content/uploads/2021/01/Hygieneleitfaden20Getraenkeschankanlagen.pdf

### 51.8 Spielhallen-, Geldwaesche-, Sozialkonzept- und Jugendschutzakte

Zielgruppen:

- Spielhallen
- Wettvermittlungsstellen
- Automatenaufsteller im Gluecksspielbereich
- Online-Gluecksspielanbieter nur spaeter/Partner
- Gastronomie mit Geldspielgeraeten, soweit relevant

Moegliche Inhalte:

- Erlaubnisse
- Sozialkonzept
- Schulungs-/Nachschulungsnachweise
- Jugendschutz-/Spielerschutzdokumentation
- OASIS-/Sperrdatei-Prozessnachweise, soweit organisatorisch
- Aushang-/Informationsmaterial
- Geldwaesche-Risikoanalyse
- Sorgfalts-/Identifizierungsnachweise, soweit relevant
- Verdachtsmeldeprozess als Ablage/Workflow
- Berichtspflichten/Behoerdenkommunikation

Produktform:

- Spielhallenakte pro Standort
- Schulungs- und Aushang-Tracker
- Sozialkonzept-Nachweisordner
- GwG-Dokumentenraum
- Export fuer Aufsicht, Berater, Betreiber, Schulungsanbieter
- Partnervermittlung zu GwG-/Gluecksspielrecht-Fachleuten und Schulungen

Geldlogik:

- kleine, aber zahlungsbereite und stark regulierte Zielgruppe
- 99 bis 499 Euro monatlich je Standort moeglich
- Setup/Erststruktur 499 bis mehrere Tausend Euro
- Partnerumsatz ueber Schulung, Fachberatung, Zertifizierung

Grenze:

- sehr hohes Rechtsberatungsrisiko
- keine GwG-Risikoanalyse automatisiert erstellen
- keine Gluecksspielerlaubnisberatung
- keine Spielerschutzentscheidung
- nur Ablage, Fristen, Schulungsnachweise, Quellen, Partner

Bewertung:

- lukrativ, aber nicht Startkern
- besser als Premium-/Partnerpaket mit sehr defensiver Sprache
- wegen Risiko nur mit Fachpartnern sichtbar ausbauen

Quellen:

- GwG: https://www.gesetze-im-internet.de/gwg_2017/BJNR182210017.html
- IHK Muenchen Geldwaeschepraevention: https://www.ihk-muenchen.de/ratgeber/recht/geldwaeschepraevention/
- IHK Nuernberg Geldwaeschepraevention: https://www.ihk-nuernberg.de/ihr-unternehmen/rechtsinformationen-fuer-unternehmen/wirtschaftskriminalitaet/geldwaeschepraevention
- NRW Anwendungshinweise GwG Gluecksspiel: https://www.bra.nrw.de/system/files/media/document/file/aua_gwg_-_gluecksspiel.pdf
- Thueringen Muster-Sozialkonzept Spielhallen: https://wirtschaft.thueringen.de/fileadmin/wirtschaft/wirtschaftsverwaltung/MSK_Spielhallen_1_von_2.pdf

### 51.9 Waffen-, Pyrotechnik- und sicherheitskritische Handelsakte

Zielgruppen:

- Waffenhaendler
- Buechsenmacher
- Jagd-/Schuetzenbedarf
- Pyrotechnik-/Feuerwerkshaendler
- Einzelhaendler mit Silvesterfeuerwerk
- Lagerbetreiber mit explosionsgefaehrlichen Stoffen
- Sicherheitsgewerbe als angrenzende Zielgruppe

Moegliche Inhalte:

- Erlaubnisse
- NWR-/Waffenregister-Unterlagen
- Aufbewahrungsnachweise
- Tresor-/Sicherheitsunterlagen
- Melde-/Ueberlassungsprozesse
- Pyrotechnik-Lagergenehmigung
- Verkaufs-/Aufbewahrungsmerkblaetter
- Schulungs-/Sachkundenachweise
- Behoerdenkommunikation
- Fristen und Verantwortliche

Produktform:

- Erlaubnis-/Sicherheitsakte
- Dokumentenablage pro Standort
- Fristen- und Aufgabenliste
- Export fuer Behoerde, Fachanwalt, Sicherheitsberater, internen Verantwortlichen
- Partnervermittlung zu Fachanwalt, Sicherheitsberater, Schulungen

Geldlogik:

- kleine, aber hochregulierte Nische
- 99 bis 499 Euro monatlich moeglich
- Setup und Partnervermittlung wichtiger als Massenabo

Grenze:

- nicht als Selbstbedienungs-Rechtsloesung bauen
- keine Waffenrechtsberatung
- keine Lager-/Sicherheitsbewertung
- keine NWR-Meldung ohne Fachsystem-/Partnerpruefung
- nur Dokumenten-/Fristen-/Partnerakte

Bewertung:

- wirtschaftlich interessant, aber wegen Risiko nicht in V1 prominent
- eher spaeteres Spezialpaket mit Fachpartnern

Quellen:

- BMI Nationales Waffenregister: https://www.bmi.bund.de/DE/themen/sicherheit/waffen/das-nationale-waffenregister/das-nationale-waffenregister-node.html
- Waffengesetz Paragraph 36: https://www.gesetze-im-internet.de/waffg_2002/__36.html
- Waffenregistergesetz: https://www.gesetze-im-internet.de/waffrg/BJNR018400020.html
- 1. SprengV: https://www.gesetze-im-internet.de/sprengv_1/BJNR021410977.html
- Hessen Lagergenehmigung Sprengstoffrecht: https://verwaltungsportal.hessen.de/leistung?leistung_id=L100001_10254545
- Gewerbeaufsicht Baden-Wuerttemberg Sprengstoffrecht: https://gewerbeaufsicht.baden-wuerttemberg.de/sprengstoffrecht-merkblaetter

### 51.10 Tierarzt-, Tierbetreuungs-, Hundepensions- und Veterinaerakte

Zielgruppen:

- Tierarztpraxen
- Tierkliniken
- Hundepensionen
- Hundetagesstaetten
- Tierheime
- Tierschutzvereine
- Tiertrainer mit Erlaubnispflicht
- Zoofachhandel mit Tierhaltung
- Groomer/Fellpflege mit Tierbetreuung, soweit relevant

Moegliche Inhalte:

- Paragraph-11-Erlaubnisunterlagen
- Sachkundenachweise
- Tierbestandsbuch/Bestandslisten, soweit passend
- Betreuungsvertraege/Abgabevertraege als Ablage
- Medikamenten-/BtM-Dokumentation bei Tierarztpraxen
- tieraerztliche Hausapotheke
- Strahlenschutz-/Roentgenunterlagen bei Tierarztpraxen
- Hygiene-/Reinigungsplaene
- Impf-/Quarantaene-/Fundtierunterlagen als organisatorische Ablage
- Behoerdenkommunikation mit Veterinaeramt

Produktform:

- Tierbetriebsakte
- Erlaubnis-/Sachkunde-/Hygieneordner
- Kalender fuer Schulungen, Pruefungen, Begehungen
- Export fuer Veterinaeramt, Praxisleitung, Verein, Berater
- Partnervermittlung zu Tierarzt, Veterinaerberatung, Strahlenschutzkursen, Hygiene

Geldlogik:

- Tierpension/Tierheim eher 29 bis 149 Euro monatlich
- Tierarztpraxis/Tierklinik 99 bis 399 Euro monatlich
- Partnerumsatz ueber Schulungen, Strahlenschutz, Hygiene, Software/Temperaturmonitoring

Grenze:

- keine tiermedizinische Beratung
- keine Arzneimittel-/BtM-Fachbewertung
- keine Erlaubnis nach Paragraph 11 pruefen oder ersetzen
- keine tierschutzrechtliche Einzelfallbewertung

Bewertung:

- gutes Nischenpaket mit echter Dokumentationslast
- nicht V1-Kern, aber passend fuer Branchenwelt "Betriebe mit Behoerdennachweisen"
- besonders Tierarztpraxen ueberschneiden sich mit Praxis-/Medizinprodukteakte

Quellen:

- Tierschutzgesetz Paragraph 11: https://www.gesetze-im-internet.de/tierschg/__11.html
- Kreis Recklinghausen Paragraph 11 Merkblatt: https://www.kreis-re.de/inhalte/buergerservice/umwelt_und_tiere/veterinaerwesen/merkblatt___11.pdf
- LAVES tieraerztliche Hausapotheke: https://www.laves.niedersachsen.de/download/42945/Merkblatt_fuer_den_ordnungsgemaessen_Betrieb_einer_tieraerztlichen_Hausapotheke_PDF_nicht_barrierefrei_.pdf
- Schleswig-Holstein Dokumentationspflichten tieraerztliche Hausapotheke: https://www.schleswig-holstein.de/DE/fachinhalte/L/lebensmittel/Downloads/merkblatt_dokumentationspflichten.pdf
- BMUKN Strahlenschutz Tierheilkunde: https://www.bundesumweltministerium.de/fileadmin/Daten_BMU/Download_PDF/Strahlenschutz/tierheilkunde_strahlenschutz_richtlinie_bf.pdf

### 51.11 Bestattungs-, Friedhofs-, Krematorium- und Grabmalakte

Zielgruppen:

- Bestattungsunternehmen
- Friedhofsverwaltungen
- Kommunen
- Kirchen/Traeger von Friedhoefen
- Krematorien
- Gaertnereien/Friedhofsdienstleister als Partner

Moegliche Inhalte:

- Hygiene-/Desinfektionsplan
- Biostoff-/Gefahrstoffunterlagen
- Gefaehrdungsbeurteilung Bestattungsgewerbe
- PSA-/Unterweisungsnachweise
- Leichenpass-/Ueberfuehrungsunterlagen als Ablage
- Grabmalpruefungen
- Maengeldokumentation
- Anschreiben/Fristen an Nutzungsberechtigte
- Krematoriums-Emissions-/Wartungsberichte
- Behoerden-/Traegerkommunikation

Produktform:

- Bestatterakte
- Friedhofs- und Grabmalpruefakte
- Fotodokumentation mit Maengeln
- Fristen fuer Sicherung, Anschreiben, Nachkontrolle
- Export fuer Kommune, Traeger, Versicherung, Pruefer
- Partnervermittlung zu Grabmalpruefern, Hygieneschulung, Emissionsmessung

Geldlogik:

- eher kleine Spezialnische
- Friedhoefe/Kommunen koennen gute Tickets bringen
- 49 bis 299 Euro monatlich, bei Friedhoefen nach Anzahl Grabfelder/Grabmale mehr
- Partnerumsatz bei Grabmalpruefung und Hygiene

Grenze:

- keine Bestattungsrechtsberatung
- keine hygienische Fachfreigabe
- keine Standsicherheitspruefung ersetzen
- keine Emissionsmessung ersetzen

Bewertung:

- als Spezialpaket sehr passend, aber nicht Startkern
- Grabmalpruefung ist extrem objekt-/fristen-/fotobasiert und daher technisch passend

Quellen:

- LGL Bayern Bestattungs- und Friedhofshygiene: https://www.lgl.bayern.de/gesundheit/hygiene/gesundheitseinrichtungen_taeglichen_lebens/friedhofshygiene/index.htm
- DGUV Hygiene-/Desinfektionsplan Bestattungsunternehmen: https://publikationen.dguv.de/media/pdf/11/d1/a6/214-021-Hygieneplan.pdf
- Brandenburg Gefaehrdungsbeurteilung Bestattungsgewerbe: https://lavg.brandenburg.de/sixcms/media.php/9/mbl_bestattungsgewerbe.pdf
- Friedhofsverwalter Anleitung Grabmalpruefung: https://www.friedhofsverwalter.de/download/infomaterial/infoflyer/anleitung_standsicherheit_2019.pdf
- Bestatter.de Leichenpass/Internationale Vereinbarungen: https://www.bestatter.de/wissen/ueberfuehrung-leichnam/internationale-vereinbarungen/

### 51.12 Personaldienstleister-, Zeitarbeit-, Fremdpersonal- und Subunternehmerakte

Zielgruppen:

- Zeitarbeitsunternehmen
- Personaldienstleister
- Entleiher mit regelmaessiger Leiharbeit
- Bau-/Logistik-/Reinigungsbetriebe mit Subunternehmern
- Industrie mit Fremdfirmeneinsatz
- Event-/Sicherheitsdienstleister

Moegliche Inhalte:

- Erlaubnis Arbeitnehmerueberlassung
- AUEG-Vertrags-/Konkretisierungsablage
- Einsatzdauer-/18-Monate-Watchlist als organisatorischer Hinweis
- Equal-Pay-/Tarifunterlagen als Ablage
- Arbeitszeitnachweise
- Mindestlohn-/Branchenmindestlohn-Unterlagen
- A1-/Entsendungsunterlagen
- Fremdfirmenunterweisungen
- Auftraggeber-/Entleiherexport
- Subunternehmer-Nachweisordner

Produktform:

- Fremdpersonalakte
- Einsatz-/Fristenkalender
- Unterweisungs- und Dokumentenstatus
- Export fuer Auftraggeber, Entleiher, Zoll, Berater
- Partnervermittlung zu Arbeitsrechtlern, Lohnabrechnung, Compliance-Schulungen

Geldlogik:

- hoher Nutzen in Branchen mit vielen Mitarbeitern/Subunternehmern
- 99 bis 499 Euro monatlich, nach Mitarbeiter-/Einsatzanzahl staffelbar
- Setup/Import aus Excel sehr gut monetarisierbar
- Partnerumsatz ueber Schulungen, Lohn-/Arbeitsrechtsfachleute

Grenze:

- hohes Rechtsrisiko: keine AUEG-Einstufung, keine Equal-Pay-Berechnung, keine Vertragsbewertung
- nur Dokumentenablage, Fristenhinweis, Unterweisungsnachweis und Export
- Rechts-/Lohnberatung an Partner

Bewertung:

- wertvoll, aber nicht als erstes SEO-Paket, weil arbeitsrechtlich heikel
- sehr gut als B2B-Premium fuer Betriebe mit viel Fremdpersonal

Quellen:

- AUEG: https://www.gesetze-im-internet.de/a_g/A%C3%9CG.pdf
- IHK Koeln Arbeitnehmerueberlassung: https://www.ihk.de/koeln/hauptnavigation/recht-steuern/uebersicht-arbeitsrecht/arbeitnehmerueberlassung-5110040
- Bundesagentur Fachliche Weisungen AUEG: https://www.arbeitsagentur.de/datei/fw-aueg_ba026870.pdf
- Zoll Zeitarbeit/Arbeitnehmerueberlassung: https://www.zoll.de/DE/Fachthemen/Arbeit/Zeitarbeit-Arbeitnehmerueberlassung/zeitarbeit-arbeitnehmerueberlassung_node.html
- Zoll sonstige Pflichten Mindestarbeitsbedingungen: https://www.zoll.de/DE/Fachthemen/Arbeit/Mindestarbeitsbedingungen/Sonstige-Pflichten/sonstige-pflichten_node.html
- BMAS Mindestlohn Dokumentationspflicht: https://www.bmas.de/DE/Arbeit/Arbeitsrecht/Mindestlohn/Dokumentationspflicht/dokumentationspflicht-art.html

### 51.13 Speisekarten-, Allergen-, Zusatzstoff- und Lieferdienstakte

Zielgruppen:

- Restaurants
- Imbisse
- Caterer
- Lieferdienste
- Baeckereien/Konditoreien mit loser Ware
- Metzgereien
- Kantinen
- Foodtrucks
- Hoflaeden mit offenen Lebensmitteln
- Automatenbetreiber mit Lebensmitteln

Moegliche Inhalte:

- Allergenmatrix
- Zusatzstoffliste
- Speisekarten-/Menuversionen
- Lieferdienst-/Onlineverkauf-Informationen
- Lieferantenetiketten/Zutatenlisten
- Nachweis, wo Kundeninformationen bereitstehen
- Aushang-/Hinweisdokumentation
- Rezeptur-/Produktversionen
- Export fuer Lebensmittelkontrolle oder internen Verantwortlichen

Produktform:

- Kennzeichnungsakte pro Speise/Produkt
- Menu- und Rezepturversionierung
- PDF-/QR-Speisekartenanhang
- Aushang-Generator als organisatorische Vorlage
- Partnervermittlung zu Lebensmittelkennzeichnungsberatung

Geldlogik:

- gut als Zusatzmodul zu HACCP/Gastro
- 19 bis 99 Euro monatlich
- Setup "Speisekarte einpflegen" 149 bis 799 Euro
- besonders fuer Caterer/Lieferdienste interessant

Grenze:

- keine verbindliche Zutaten-/Allergenbewertung
- keine LMIV-Rechtsberatung
- keine Garantie, dass Speisekarte korrekt ist
- Nutzer pflegt Daten aus Lieferanten-/Rezepturunterlagen; Partner kann pruefen

Bewertung:

- sehr guter Conversion-Hebel im Gastro-Paket
- konkreter als allgemeines HACCP und dadurch SEO-stark
- sollte nicht allein stehen, sondern unter Gastro/HACCP laufen

Quellen:

- DIHK Lebensmittelkennzeichnung Gastgewerbe: https://www.dihk.de/resource/blob/3808/e96f9a3058bd78bcc8c8ce03dda08240/merkblatt-lebensmittelkennzeichnung-data.pdf
- IHK Erfurt Allergenkennzeichnung Gastronomie: https://www.ihk.de/erfurt/branchen/tourismus-gastgewerbe/kennzeichnung-von-allergenen-stoffen-in-der-gastronomie-647012
- BMLEH Allergenkennzeichnung: https://www.bmleh.de/DE/themen/ernaehrung/lebensmittel-kennzeichnung/pflichtangaben/allergenkennzeichnung.html
- IHK Schleswig-Holstein Lebensmittelkennzeichnung: https://www.ihk.de/schleswig-holstein/produktmarken/branchen/tourismus/lebensmittelkennzeichnung-im-gastgewerbe-6395948

### 51.14 Neue Bewertung nach dieser Suchrunde

Staerkste neue Sofort-/Fruehmodule:

1. Eich-/Messgeraeteakte
2. Tank-/Abscheider-/Waschplatzakte
3. Kfz-Werkstatt-/Autohausakte
4. Geruest-/Baumaschinen-/PSAgA-Akte
5. Automaten-/Vending-/Schankanlagenakte
6. Speisekarten-/Allergenakte als Gastro-Zusatz

Staerkste Premium-/Partnerpakete:

1. Spielhallen/GwG/Sozialkonzept
2. Waffen/Pyrotechnik
3. Personaldienstleister/AUEG/Fremdpersonal
4. Tierarzt/Tierbetreuung
5. Bestattung/Friedhof/Grabmal

Module, die besonders gut zu QR-Codes passen:

- Messgeraete
- Tanks/Abscheider
- Automaten
- Sport-/Fitness-/Spielgeraete
- Gerueste/Baumaschinen/PSAgA
- Kfz-Werkstattgeraete
- Grabmale/Friedhofsobjekte

Module, die wegen Rechts-/Fachrisiko nur defensiv oder mit Partnern starten sollten:

- Spielhallen/GwG
- Waffen/Pyrotechnik
- AUEG/Zeitarbeit
- Tierarzt-BtM/Strahlenschutz
- Bestattung/Friedhofsrecht
- Allergen-/Kennzeichnungsbewertung

### 51.15 Was daraus fuer die Plattform folgt

Das Datenmodell muss neben "Pflicht" zwingend diese Objekttypen koennen:

- Messgeraet
- Tank/Behaelter
- Abscheider
- Automat
- Schankanlage
- Werkstattgeraet
- Geruest
- PSA/Anschlagmittel
- Sport-/Spielgeraet
- Kletterwand
- Fahrzeug/Arbeitsmaschine
- Erlaubnis/Genehmigung
- Sachkunde/Fortbildung
- Standort/Friedhof/Grabfeld
- Produkt/Speise/Rezeptur
- Fremdpersonal-Einsatz

Damit laesst sich spaeter fast jedes Branchenpaket aus denselben Bausteinen zusammensetzen.

### 51.16 Neue harte Prioritaet

Nach dieser Runde wuerde ich die Website nicht mehr nur mit "Top 5 Branchen" strukturieren, sondern mit zwei Ebenen:

1. Branchenpakete:
   - Gastro/HACCP
   - Werkstatt/Kfz
   - Immobilien/Facility
   - Bau/Handwerk
   - Handel/Import/Produkte
   - Reinigung/Waescherei

2. Aktenobjekte:
   - Pruefungen/Wartungen
   - Messgeraete/Eichung
   - Gefahrstoffe/SDB
   - Tanks/Abscheider
   - Arbeitsmittel/PSA
   - Automaten/Schankanlagen
   - Unterweisungen/Sachkunde
   - Nachweisordner/Export

So wirkt die Seite gross, ohne beliebig zu werden. Der Nutzer findet entweder seine Branche oder direkt sein Objekt.

## 52. Weitere Nachrecherche: Ausbildungs-, Entsorgungs-, Labor- und Sonderbauakten

Diese Runde sucht gezielt nach Branchen, in denen Betriebe bereits heute Ordner, Nachweise, Zulassungen, Fortbildungen, Pruefberichte, Registerdaten oder Betriebstagebuecher fuehren muessen. Das passt sehr gut zur Plattform, weil der Nutzen nicht im Rechtsurteil liegt, sondern im Sammeln, Erinnern, Exportieren und Uebergeben an Pruefer, Behoerden oder Fachpartner.

Wichtig bleibt die Produktgrenze:

- Keine Ausgabe "du bist betroffen".
- Keine automatische Rechtsfolge aus Einzelfalldaten.
- Keine Bewertung, ob eine Erlaubnis, Zulassung, Einstufung oder Konformitaet tatsaechlich vorliegt.
- Der Nutzer uebernimmt Themen aktiv in seine Akte.
- Die Plattform zeigt Quellen, typische Nachweise, Fristenfelder, Dokumentvorlagen und Exportpakete.
- Fachliche Pruefung, Zertifizierung, Einordnung, Zulassung und Beratung laufen ueber den Betrieb selbst oder Partner.

### 52.1 Fahrschul- und Fahrlehrerakte

Fahrschulen sind ein sehr gutes Nischenpaket, weil sie kleine bis mittlere Betriebe sind, aber stark dokumenten- und aufsichtsgetrieben arbeiten. Es gibt Fahrschulerlaubnisse, Fahrlehrerlaubnisse, Ausbildungsnachweise, Fahrzeugunterlagen, Unterrichtsplaene, Fortbildungsnachweise und Ueberwachung durch Behoerden.

Quellen und Anker:

- Fahrlehrergesetz: https://www.gesetze-im-internet.de/fahrlg_2018/
- Durchfuehrungsverordnung zum Fahrlehrergesetz: https://www.gesetze-im-internet.de/fahrlg2018dv/
- Fahrschueler-Ausbildungsordnung: https://www.gesetze-im-internet.de/fahrschausbo_2012/
- Behoerdliche Ueberwachung im Fahrlehrerwesen, Beispiel Bayern: https://www.bayernportal.de/dokumente/leistung/574657044207

Zielgruppen:

- Einzelne Fahrschulen
- Fahrschulketten
- Fahrlehrerausbildungsstaetten
- Bildungstraeger mit Fahrerlaubnisangeboten
- Fahrlehrer, die Fortbildungen nachweisen muessen

Was die Plattform anbieten kann:

- Fahrlehrerakte mit Erlaubnis, Klassen, Fortbildungen und Ablauf-/Nachweisfristen
- Fahrschulakte mit Fahrschulerlaubnis, Zweigstellen, Unterrichtsraeumen und Fahrzeugen
- Ausbildungsnachweis-Ordner je Fahrschueler oder Kurs
- Fahrzeugakte fuer Schulungsfahrzeuge mit HU, AU, Versicherung, Umbauten, Pruefungen
- Ueberwachungsordner fuer Behoerdenbesuch
- Exportpaket "Fahrschulpruefung"
- Reminder fuer Fortbildung, Fahrzeugpruefung, Erlaubnisdaten, Versicherungen und Vertrage

Online-Monetarisierung:

- 49 bis 149 EUR pro Monat fuer kleine Fahrschule
- 199 bis 499 EUR pro Monat fuer mehrere Standorte
- Setup 299 bis 1.500 EUR fuer Datenimport
- Zusatzumsatz ueber Fortbildungsanbieter, Fahrlehrer-Seminare, Versicherungen, Fahrzeugausruester

Warum stark:

- Sehr konkrete Zielgruppe
- Wiederkehrende Nachweise
- Weniger SEO-Massenkonkurrenz als bei DSGVO oder Arbeitsschutz allgemein
- Gute pSEO-Seiten moeglich: "Fahrschule Ausbildungsnachweis", "Fahrlehrer Fortbildung Nachweis", "Fahrschule Ueberwachung Unterlagen"

Sperre:

- Keine Bewertung, ob ein Fahrlehrer oder Betrieb die gesetzlichen Anforderungen erfuellt.
- Nur Aktenverwaltung, Quellenhinweis, Checklisten und Export.

### 52.2 Bildungstraeger-, AZAV- und Massnahmenzulassungsakte

Bildungstraeger sind extrem passend, weil Zulassungen, Audits, Massnahmen, Dozentenunterlagen, Teilnehmerakten und Nachweise dauerhaft gepflegt werden muessen. Das ist kein einmaliger Check, sondern ein laufender Aktenbetrieb.

Quellen und Anker:

- Bundesagentur fuer Arbeit, Akkreditierung und Zulassung: https://www.arbeitsagentur.de/institutionen/bildungstraeger/akkreditierung-zulassung
- AZAV: https://www.gesetze-im-internet.de/azav/
- BA Empfehlungen des Beirats nach SGB III, PDF: https://www.arbeitsagentur.de/datei/dok_ba032840.pdf
- Beispiel Auditvorbereitung AZAV, TUEV Nord: https://www.tuev-nord.de/fileadmin/Content/TUEV_NORD_DE/zertifizierung/PDF_Checkliste_zur_Vorbereitung_einer_Tra__gerzulassung_Formular.pdf

Zielgruppen:

- AZAV-Traeger
- Weiterbildungsanbieter
- Coaching-Anbieter mit AVGS
- Massnahmentraeger
- Sprachschulen
- Online-Bildungsanbieter mit Zertifizierungsbedarf
- Private Akademien

Was die Plattform anbieten kann:

- Traegerzulassungsakte
- Massnahmenakte je Massnahme
- Auditordner fuer fachkundige Stelle
- Dozentenakte mit Qualifikationen, Vertragen, Fortbildungen
- Teilnehmer- und Kursnachweisordner
- QM-Dokumente, Prozessdokumente, Korrekturmassnahmen
- Fristen fuer Zertifikat, Massnahmenzulassung, Audit, interne Reviews
- Export "AZAV Auditpaket"

Online-Monetarisierung:

- 99 bis 299 EUR pro Monat fuer kleine Anbieter
- 399 bis 999 EUR pro Monat fuer mehrere Massnahmen, Standorte oder Teams
- Setup 500 bis 3.000 EUR fuer Erstimport
- Partnerumsatz mit AZAV-Beratern, fachkundigen Stellen, QM-Dienstleistern, Dozentenportalen

Warum stark:

- Hohe Zahlungsbereitschaft, weil Zulassungsverlust direkt Umsatz kosten kann
- Wiederkehrende Audits
- Viele Dokumente, aber die Plattform muss nicht selbst zertifizieren
- Gute Kombination aus SaaS und Partnervermittlung

Sperre:

- Keine Aussage, ob eine Traeger- oder Massnahmenzulassung sicher erreicht wird.
- Keine Zertifizierungsberatung ohne Partner.

### 52.3 Onlinekurs-, Fernunterrichts- und ZFU-Akte

Onlinekurse sind ein heikles, aber sehr interessantes Zusatzfeld. Der Markt ist gross, viele Anbieter kennen ihre Dokumentations- und Zulassungsthemen nicht sauber, und seit neuer Rechtsprechung ist das Thema Fernunterricht wieder deutlich sichtbarer. Dieses Paket darf aber nur als Dokumentations- und Partnerakte gebaut werden.

Quellen und Anker:

- Staatliche Zentralstelle fuer Fernunterricht: https://zfu.de/
- Fernunterrichtsschutzgesetz: https://www.gesetze-im-internet.de/fernusg/
- BGH III ZR 109/24 vom 12. Juni 2025, zusammengefasst etwa hier: https://www.taylorwessing.com/en/insights-and-events/insights/2025/09/bgh-erweitert-anwendungsbereich-des-fernusg

Zielgruppen:

- Onlinekursanbieter
- Coaching-Programme
- Digitale Akademien
- B2B-Weiterbildungsanbieter
- Creator mit bezahlten Kursen
- Fernlehrinstitute

Was die Plattform anbieten kann:

- Kursakte je Kurs
- ZFU-/Fernunterrichtsordner mit Antrag, Bescheid, Aktenzeichen, Unterlagen
- Vertrags- und Widerrufsdokumente als Ablage
- Aenderungshistorie fuer Kursinhalte
- Teilnehmerkommunikation als Nachweisablage
- Export an Fachanwalt, ZFU-Berater oder Compliance-Partner

Online-Monetarisierung:

- 49 bis 199 EUR pro Monat fuer kleine Kursanbieter
- 299 bis 799 EUR pro Monat fuer Akademien
- Setup 299 bis 2.000 EUR
- Hoher Partnerumsatz mit Anwalt, ZFU-Berater, Vertragsgenerator, Zahlungsanbieter

Warum stark:

- Aktuell sehr suchstarkes Problem
- Viele digitale Anbieter mit Zahlungsbereitschaft
- Sehr gute Leadmaschine fuer Partner

Sperre:

- Kein Tool darf entscheiden, ob ein konkreter Kurs zulassungspflichtig ist.
- Kein automatischer "ZFU-pflichtig ja/nein"-Bescheid.
- Nur allgemeine Informationsseiten, Dokumentenakte und Partnerweiterleitung.

### 52.4 BAMF-Integrationskurs- und Berufssprachkurs-Traegerakte

Integrationskurs- und Berufssprachkurstraeger sind eine sehr spezielle, aber hochwertige Zielgruppe. Dort gibt es Zulassung, Folgezulassung, Kursakten, Lehrkraefte, Anwesenheitslisten, Abrechnung, WebDoc-/Portalprozesse und Pruefungen.

Quellen und Anker:

- BAMF Integrationskurstraeger: https://www.bamf.de/DE/Themen/Integration/TraegerLehrFachkraefte/TraegerIntegrationskurse/traegerintegrationskurse_node.html
- BAMF Zulassungsverfahren: https://www.bamf.de/DE/Themen/Integration/TraegerLehrFachkraefte/TraegerIntegrationskurse/Organisatorisches/Zulassungsverfahren/zulassungsverfahren-node.html
- BAMF Berufssprachkurse: https://www.bamf.de/DE/Themen/Integration/TraegerLehrFachkraefte/TraegerBerufssprachkurse/traegerberufssprachkurse-node.html
- BAMF Leitfaden Integrationskurstraeger: https://www.bamf.de/SharedDocs/Dossiers/DE/Integration/integrationskurse-leitfaden.html

Zielgruppen:

- Sprachschulen
- Integrationskurstraeger
- Berufssprachkurstraeger
- Bildungstraeger mit BAMF-Zulassung
- Kommunale oder gemeinnuetzige Traeger

Was die Plattform anbieten kann:

- Traegerzulassungsakte
- Kursakte je Kurs
- Lehrkraftakte mit Zulassung/Qualifikation
- Anwesenheits- und Abrechnungsordner
- Fristen fuer Folgezulassung, Kursmeldung, Abrechnung, Nachreichungen
- Exportpaket fuer interne Pruefung oder externe Beratung
- Aufgabenlisten fuer fehlende Dokumente je Kurs

Online-Monetarisierung:

- 199 bis 799 EUR pro Monat
- Setup 1.000 bis 5.000 EUR bei groesseren Traegern
- Partnerumsatz mit Abrechnungsdienstleistern, QM-Beratern, Sprachpruefungsanbietern

Warum stark:

- Sehr konkrete Zielgruppe
- Viele wiederkehrende Dokumente
- Hoher Druck, weil Abrechnung und Zulassung am Aktenstand haengen
- Wenige moderne Self-Service-Produkte sichtbar

Sperre:

- Keine Entscheidung, ob ein Traeger zulassungsfaehig ist.
- Keine Abrechnungs- oder foerderrechtliche Beratung.

### 52.5 Entsorgungsfachbetrieb-, AbfAEV- und Betriebstagebuchakte

Entsorger, Sammler, Befoerderer, Haendler und Makler von Abfaellen sind ein sehr starkes Premiumsegment. Hier geht es um Erlaubnisse, Anzeigen, Zertifikate, Betriebstagebuecher, Personal, Versicherung, Fahrzeuge, Abfallarten und Audits.

Quellen und Anker:

- Entsorgungsfachbetriebeverordnung: https://www.gesetze-im-internet.de/efbv_2017/
- EfbV Paragraph 5 Betriebstagebuch: https://www.gesetze-im-internet.de/efbv_2017/__5.html
- Anzeige- und Erlaubnisverordnung AbfAEV: https://www.gesetze-im-internet.de/abfaev/
- LAGA Vollzugshilfe Entsorgungsfachbetriebe, PDF: https://www.laga-online.de/documents/m36_310118_2_3_4_1521795628.pdf

Zielgruppen:

- Entsorgungsfachbetriebe
- Containerdienste
- Schrott- und Metallhaendler
- Abfallsammler und Befoerderer
- Makler und Haendler von Abfaellen
- Recyclinghoefe
- Betriebe mit genehmigungspflichtigen Abfallprozessen

Was die Plattform anbieten kann:

- Zertifikats- und Auditakte
- Betriebstagebuch-Ablage
- Erlaubnis-/Anzeigeordner nach Taetigkeit
- Fahrzeug- und Personalakte
- Fachkundenachweise
- Versicherungsnachweise
- Nachweisordner fuer Entsorgungswege, Wiegescheine, Begleitscheine, eANV-Exporte
- Export fuer Zertifizierer, Behoerde oder internen Audit

Online-Monetarisierung:

- 199 bis 999 EUR pro Monat
- Enterprise ab 1.500 EUR pro Monat fuer mehrere Standorte
- Setup 1.000 bis 10.000 EUR bei Datenimport
- Partnerumsatz mit Zertifizierern, Entsorgungsberatern, Software fuer eANV, Versicherern

Warum stark:

- Hohe Zahlungsbereitschaft
- Starker Audit- und Behoerdendruck
- Wiederkehrende Dokumentation
- Sehr guter Fit fuer Nachweisordner

Sperre:

- Keine Einstufung von Abfaellen.
- Keine Entscheidung, ob eine Erlaubnis erforderlich ist.
- Keine abfallrechtliche Beratung ohne Partner.

### 52.6 Gewerbeabfall- und Getrenntsammlungsakte

Gewerbeabfall ist wahrscheinlich eines der besten breiten Zusatzmodule, weil fast jeder Betrieb Abfall erzeugt, aber die Dokumentationspflichten oft schlecht organisiert sind. Das Modul kann sehr einfach starten: Standorte, Abfallfraktionen, Fotos, Entsorgungsvertraege, Wiegescheine, Rechnungen, Begruendungen, Export.

Quellen und Anker:

- Gewerbeabfallverordnung: https://www.gesetze-im-internet.de/gewabfv_2017/
- IHK Erfurt Praxis-Check Gewerbeabfallverordnung: https://www.ihk.de/erfurt/service/energie-und-umwelt/umwelt/kreislaufwirtschaft/gewerbeabfallverordnung-verkuendet-3716642
- IHK Muenchen Leitfaden Gewerbeabfallverordnung, PDF: https://www.ihk-muenchen.de/ihk/Umwelt/20200722_BIHK-Leitfaden-Gewerbeabfallverordnung_FIN_WEB_Einzelseiten.pdf
- IHK Trier Gewerbeabfallverordnung: https://www.ihk-trier.de/p/Gewerbeabfallverordnung_GewAbfV-2768.html

Zielgruppen:

- Gastronomie
- Hotels
- Einzelhandel
- Handwerk
- Praxen
- Bueros
- Werkstaetten
- Produktionsbetriebe
- Immobilienbetreiber
- Filialisten

Was die Plattform anbieten kann:

- Abfallfraktionen je Standort
- Fotodokumentation Sammelstellen
- Upload von Wiegescheinen, Rechnungen, Entsorgungsvertraegen
- Getrenntsammlungsnachweis-Ordner
- Ausnahme-/Begruendungsablage, wenn Nutzer sie selbst dokumentiert
- Standortplan und Abfallstellen
- Export "Gewerbeabfall-Dokumentation"

Online-Monetarisierung:

- Add-on 19 bis 99 EUR pro Monat
- 99 bis 299 EUR pro Monat fuer Filialisten/mehrere Standorte
- Setup 149 bis 799 EUR fuer Erstaufnahme
- Partnerumsatz mit Entsorgern, Abfallbeauftragten, Containerdiensten

Warum stark:

- Sehr breit
- Einfach erklaerbar
- RDG-arm, solange keine Pflichtentscheidung getroffen wird
- Guter SEO-Hebel ueber viele Branchen: "Gewerbeabfall Gastronomie", "Gewerbeabfall Friseur", "Gewerbeabfall Buero"

Sperre:

- Keine Bewertung, ob Getrenntsammlung technisch oder wirtschaftlich unzumutbar ist.
- Nur Dokumentation der vom Nutzer hinterlegten Begruendung.

### 52.7 Chemikalienabgabe-, ChemVerbotsV- und Sachkundeakte

Die Abgabe bestimmter gefaehrlicher Stoffe und Gemische ist fuer Handel, Onlinehandel und Fachbetriebe ein starkes Spezialfeld. Es gibt Sachkunde, Erlaubnis oder Anzeige, Abgabebuch, Empfangsscheine, Identitaets- und Verwendungsnachweise. Das passt als Premiumakte fuer Gefahrstoff-nahe Betriebe.

Quellen und Anker:

- Chemikalien-Verbotsverordnung: https://www.gesetze-im-internet.de/chemverbotsv_2017/
- IHK Lippe ChemVerbotsV: https://www.ihk.de/lippe-detmold/hauptnavigation/beraten-und-informieren/umweltschutz/chemikalienrecht-reach/chemikalienverbotsverordnung-4209162
- Arbeitsschutz NRW Chemikalien-Verbotsverordnung: https://www.arbeitsschutz.nrw.de/fachthemen/fachthemen-von-z/chemikaliensicherheit/chemikalien-verbotsverordnung
- BLAC FAQ Chemikalien-Verbotsverordnung, Stand 02/2026: https://www.blac.de/documents/externe-faq-chemvv-stand-02-2026_1771936717.pdf

Zielgruppen:

- Chemikalienhandel
- Baumarkt- und Fachhandel
- Pool- und Wassertechnik
- Laborbedarfshaendler
- Agrarhandel
- Onlinehaendler mit Gefahrstoffen
- Reinigungsmittel- und Spezialchemiehandel

Was die Plattform anbieten kann:

- Sachkundeakte
- Erlaubnis-/Anzeigeordner
- Abgabebuch als strukturierte Ablage
- Empfangsschein- und Identitaetsnachweis-Ablage
- Produktliste mit Sicherheitsdatenblaettern
- Mitarbeiterunterweisung
- Fristen fuer Sachkunde, Dokumentenaufbewahrung, interne Kontrolle
- Export fuer Behoerde oder Fachberater

Online-Monetarisierung:

- 99 bis 399 EUR pro Monat
- 499 bis 1.500 EUR Setup
- Partnerumsatz mit Sachkundeschulungen, Gefahrstoffberatern, SDB-Dienstleistern, Versanddienstleistern

Warum stark:

- Hoher Schmerz, weil Fehler teuer und sichtbar sind
- Sehr gute Kombination mit Gefahrstoff-/SDB-Modul
- Viele kleine Anbieter haben kein sauberes System

Sperre:

- Keine automatische Entscheidung, ob ein Produkt unter die ChemVerbotsV faellt.
- Keine Abgabeentscheidung.
- Keine Gefahrstoffklassifizierung.

### 52.8 Labor-, Biostoff- und Gentechnikakte

Labore sind ein hochwertiges, aber fachlich anspruchsvolles Segment. Es gibt Biostoffverzeichnisse, Gefaehrdungsbeurteilungen, Hygieneplaene, Anzeigen, Erlaubnisse, Sicherheitsstufen, Unterweisungen, Gentechnik-Aufzeichnungen und viele interne Nachweise.

Quellen und Anker:

- Biostoffverordnung: https://www.gesetze-im-internet.de/biostoffv_2013/
- BAuA Biostoffe und Einstufung: https://www.baua.de/DE/Themen/Chemikalien-Biostoffe/Biostoffe-Infektionsschutz/Biostoffe/Einstufung
- Gentechnikgesetz: https://www.gesetze-im-internet.de/gentg/
- Gentechnik-Sicherheitsverordnung: https://www.gesetze-im-internet.de/gentsv_2021/
- Gentechnik-Aufzeichnungsverordnung: https://www.gesetze-im-internet.de/gentaufzv/

Zielgruppen:

- Diagnostiklabore
- Forschungsnahe Labore
- Biotech-Unternehmen
- Lebensmittel- und Umweltlabore
- Hochschulnahe Einrichtungen
- Labordienstleister
- Tiermedizinische Labore

Was die Plattform anbieten kann:

- Laborbereichsakte
- Biostoffverzeichnis als Ablage-/Registerobjekt
- Hygieneplan-Ablage
- Anzeige-/Erlaubnisordner
- Unterweisungs- und Fachkundeakte
- Gentechnik-Aufzeichnungsordner
- Geraete-, Autoklav-, Kuehlketten- und Wartungsakte
- Export an Sifa, Biosicherheitsbeauftragte, Behoerde oder Auditor

Online-Monetarisierung:

- 199 bis 999 EUR pro Monat
- Enterprise 1.500 bis 5.000 EUR pro Monat bei mehreren Laborbereichen
- Setup 1.000 bis 15.000 EUR
- Partnerumsatz mit Sifa, Biosicherheitsberatung, Validierung, Laborgeraetepruefung

Warum stark:

- Sehr hohe Zahlungsbereitschaft
- Sehr starke Dokumentenlast
- Wiederkehrende Pruefungen und Nachweise

Sperre:

- Keine Einstufung von Biostoffen oder gentechnischen Arbeiten.
- Keine Sicherheitsstufenentscheidung.
- Keine Laborfreigabe.

### 52.9 Sonderanfertigungs-, Dentallabor- und Gesundheitshandwerksakte

Gesundheitshandwerke und Labore mit Sonderanfertigungen sind interessant, weil sie viele kleine bis mittlere Betriebe sind, die Dokumentation, Erklaerungen, Materialnachweise, Chargen, Kunden-/Patientenbezug und Aufbewahrung organisieren muessen.

Quellen und Anker:

- BfArM Basisinformationen Konformitaetsbewertung Medizinprodukte: https://www.bfarm.de/DE/Medizinprodukte/Ueberblick/Basisinformationen/Konformitaetsbewertung/_node.html
- DGIHV MDR Leitfaden Hersteller, PDF: https://www.dgihv.org/wp-content/uploads/DGIHV_MDR_Leitfaden_Hersteller.pdf
- Bundesinnungsverband Orthopaedie-Technik MDR: https://biv-ot.org/news_und_politik/gesundheitspolitik/medical_device_regulation/index_ger.html

Zielgruppen:

- Dentallabore
- Praxislabore
- Orthopaedietechnik
- Orthopaedieschuhtechnik
- Hoerakustik
- Augenoptik, soweit dokumentationsrelevante Sonderanfertigungen entstehen
- Sanitaetshaus-nahe Werkstaetten

Was die Plattform anbieten kann:

- Sonderanfertigungsakte je Vorgang
- Erklaerungsablage
- Material- und Chargenakte
- Rezeptur-/Auftragsunterlagen
- Reklamations- und Vorkommnisablage
- Aufbewahrungsfristen
- Export fuer Praxis, Kunde, Behoerde oder Berater

Online-Monetarisierung:

- 99 bis 499 EUR pro Monat
- Setup 500 bis 3.000 EUR
- Partnerumsatz mit MDR-Beratern, QM-Dienstleistern, Laborsoftware, Materiallieferanten

Warum stark:

- Viele kleine Betriebe mit hoher Dokumentenlast
- Konkrete Objektlogik: Auftrag, Material, Charge, Erklaerung, Archiv
- Gute Nische fuer SEO und Vorlagen

Sperre:

- Keine Medizinprodukte-Klassifizierung.
- Keine Konformitaetsbewertung.
- Keine Aussage, ob eine Dokumentation fachlich genuegt.

### 52.10 Sicherheitsdienst- und Bewachungsgewerbeakte

Bewachungsunternehmen sind dokumentationsstark: Erlaubnis, Bewacherregister, Qualifikationen, Zuverlaessigkeit, Dienstanweisungen, Versicherungen, Einsatzdokumentation und teilweise Waffen-/Sonderthemen.

Quellen und Anker:

- Bewachungsverordnung: https://www.gesetze-im-internet.de/bewachv_2019/
- Bewacherregister, Destatis: https://www.destatis.de/Verwaltungsregister/DE/Bewacherregister/_inhalt.html
- IHK Muenchen Bewachungsgewerbe: https://www.ihk-muenchen.de/berufszugang/zulassungspflichtige-berufe/bewachungsgewerbe/
- IHK Wiesbaden Bewachungsgewerbe: https://www.ihk.de/wiesbaden/recht/rechtsberatung/erlaubnisse-fuer-gewerbetaetigkeiten/bewachungsgewerbe-1255484

Zielgruppen:

- Sicherheitsdienste
- Eventsecurity
- Objektschutz
- Doorman-/Einlassdienste
- Detekteien mit Bewachungsleistungen
- Werkschutz-nahe Anbieter

Was die Plattform anbieten kann:

- Unternehmensakte mit Erlaubnis und Versicherung
- Wachpersonenakte mit Qualifikation, Unterrichtung, Sachkunde, Zuverlaessigkeit
- Bewacherregister-Ablage
- Dienstanweisungs- und Empfangsbestaetigungsordner
- Einsatz-/Objektakte
- Unterweisungen und Verschwiegenheit
- Export fuer Auftraggeber, Audit oder Behoerde

Online-Monetarisierung:

- 99 bis 399 EUR pro Monat fuer kleine Dienste
- 499 bis 1.500 EUR pro Monat fuer groessere Personalkoerper
- Setup 500 bis 5.000 EUR
- Partnerumsatz mit Schulungsanbietern, Versicherern, Arbeitsschutz, Dienstkleidung, Zeiterfassung

Warum stark:

- Personaldokumentation skaliert mit Anzahl Wachpersonen
- Auftraggeber verlangen Nachweise
- Hoher Nutzen bei schnellem Export

Sperre:

- Keine Entscheidung zur Zuverlaessigkeit.
- Keine erlaubnisrechtliche Beratung.
- Keine Bewertung, ob ein Einsatz rechtlich zulaessig ist.

### 52.11 Feuerungsanlagen-, 44. BImSchV- und Emissionsmessakte

Feuerungsanlagen, Blockheizkraftwerke, groessere Heizkessel und mittelgrosse Verbrennungsanlagen erzeugen Mess-, Anzeige-, Wartungs- und Registerthemen. Das ist fuer Immobilienbetreiber, Industrie, Hotels, Kliniken, Waermecontracting und Gewerbeareale spannend.

Quellen und Anker:

- 44. BImSchV: https://www.gesetze-im-internet.de/bimschv_44/
- 1. BImSchV: https://www.gesetze-im-internet.de/bimschv_1_2010/
- LANUK NRW Anzeige- und Registrierungspflichten nach 44. BImSchV: https://www.lanuk.nrw.de/themen/industrieanlagen/anzeige-registrierungspflichten-nach-44-bimschv
- TUEV SUED 44. BImSchV: https://www.tuvsud.com/de-de/indust-re/klima-und-energie-info/44-bimschv

Zielgruppen:

- Hotels
- Wohnungswirtschaft
- Gewerbeparks
- Kliniken
- Produktionsbetriebe
- Landwirtschaft mit Feuerungsanlagen
- Stadtwerke und Contractoren
- Betreiber von BHKW und Heizwerken

Was die Plattform anbieten kann:

- Anlagenakte je Feuerungsanlage
- Anzeige-/Registrierungsordner
- Messberichte und Schornsteinfegerunterlagen
- Wartungs- und Brennstoffnachweise
- Fristen fuer Messung, Wartung, Pruefung, Bericht
- Export fuer Behoerde, Schornsteinfeger, Messstelle oder Energieberater

Online-Monetarisierung:

- 99 bis 499 EUR pro Monat
- 699 bis 2.000 EUR pro Monat fuer Betreiber mit vielen Anlagen
- Setup 500 bis 5.000 EUR
- Partnerumsatz mit Messstellen, Schornsteinfegern, Wartungsfirmen, Energieberatern

Warum stark:

- Hohe Betreiberverantwortung
- Klar objektbasiert
- Sehr gut kombinierbar mit Immobilien-, Facility- und Energieakten

Sperre:

- Keine Einstufung, ob eine Anlage konkret unter eine Verordnung faellt.
- Keine emissionsrechtliche Beratung.

### 52.12 Sonderbau-, Brandschutztechnik- und PruefVO-Akte

Sonderbauten und sicherheitstechnische Anlagen sind ein sehr starkes Objektpaket. Betreiber muessen Pruefberichte, Wartungen, Betriebsbuecher, Maengelverfolgung und Nachweise fuer Anlagen wie Brandmeldeanlage, Sicherheitsbeleuchtung, Sprinkler, Rauchabzug oder Sicherheitsstrom organisieren.

Quellen und Anker:

- Beispiel Bayern Sicherheitsanlagen-Pruefverordnung: https://www.gesetze-bayern.de/Content/Document/BaySPruefV/true
- IS-Argebau Pruefgrundsaetze, PDF: https://is-argebau.de/Dokumente/42314058.pdf
- TUEV SUED Pruefung sicherheitstechnischer Anlagen: https://www.tuvsud.com/de-de/branchen/real-estate/technische-gebaeudeausruestung-und-aufzuege/pruefung-sicherheitstechnische-anlagen
- ZVEI Hinweise fuer Betreiber von Gefahrenmeldeanlagen, PDF: https://www.zvei.org/fileadmin/user_upload/Presse_und_Medien/Publikationen/2019/Juni/Hinweise_fuer_Betreiber_von_Gefahrenmeldeanlagen/82002-2019-07_Hinweise_fuer_Betreiber_von_Gefahrenmeldeanlagen_Download.pdf

Zielgruppen:

- Hotels
- Einkaufszentren
- Schulen und Kitas
- Pflege- und Gesundheitsimmobilien
- Versammlungsstaetten
- Tiefgaragenbetreiber
- Wohnungswirtschaft
- Gewerbeimmobilien
- Facility Manager

Was die Plattform anbieten kann:

- Objektakte je Gebaeude
- Anlagenakte fuer BMA, SAA, RWA, Sicherheitsbeleuchtung, Sicherheitsstrom, Lueftung, Sprinkler
- Pruefbericht- und Wartungsordner
- Maengelverfolgung mit Verantwortlichen und Terminen
- Betriebsbuch-Ablage
- Export "Brandschutztechnik Nachweisordner"
- Partnervermittlung an Pruefsachverstaendige, Wartungsfirmen, Brandschutzbeauftragte

Online-Monetarisierung:

- 149 bis 699 EUR pro Monat je Objekt/Betreiber
- 1.000 bis 5.000 EUR Setup fuer groessere Immobilienportfolios
- Partnerprovisionen bei Pruefung, Wartung, Maengelbeseitigung, Brandschutzkonzept

Warum stark:

- Sehr hoher Schmerz bei Pruefungen und Maengeln
- Nutzer zahlt fuer Ueberblick und Export
- Passt perfekt in Immobilien-/Facility-Paket
- Klare Objekt- und Anlagenlogik

Sperre:

- Keine brandschutztechnische Bewertung.
- Keine Aussage, ob ein Gebaeude Sonderbau ist.
- Keine Pruefung von Maengeln durch die Plattform.

### 52.13 Neue Bewertung nach dieser Suchrunde

Die staerksten neuen Treffer nach Geld, Wiederkehr, Online-Fit und RDG-Risiko:

1. Gewerbeabfallakte
   - Sehr breit, einfach, fast jeder Betrieb, gute SEO-Matrix.
   - Ideal als Basismodul oder Add-on.
   - Niedriges fachliches Risiko, solange nur dokumentiert wird.

2. Sonderbau-/Brandschutztechnikakte
   - Hohe Zahlungsbereitschaft bei Immobilien, Hotels, Facility, Pflege, Handel.
   - Sehr gute Partnerumsatzquelle.
   - Perfekt objektbasiert.

3. Fahrschulakte
   - Sehr konkrete Nische mit wenig moderner Konkurrenz.
   - Wiederkehrende Nachweise und Behoerdenbezug.
   - Schnell als Branchenpaket baubar.

4. Entsorgungsfachbetrieb-/Betriebstagebuchakte
   - Premiumsegment mit hoher Zahlungsbereitschaft.
   - Sehr starker Nachweisordner-Fit.
   - Fachlich heikel, aber als Dokumentenplattform machbar.

5. ChemVerbotsV-/Chemikalienabgabeakte
   - Hoher Schmerz fuer bestimmte Haendler.
   - Gute Kombi mit Gefahrstoff/SDB.
   - Muss strikt ohne Produktklassifizierung bleiben.

6. AZAV-/Bildungstraegerakte
   - Hohe Preise und Setup-Gebuehren moeglich.
   - Sehr viele Dokumente und Audits.
   - Gute Partnerlogik.

7. Labor-/Biostoff-/Gentechnikakte
   - Sehr wertvoll, aber erst spaeter wegen Fachrisiko.
   - Premium/Enterprise, nicht fuer MVP.

8. MDR-Sonderanfertigungsakte
   - Gute Nische fuer Dentallabore und Gesundheitshandwerk.
   - Solide Preise, aber fachliche Sperren beachten.

9. Sicherheitsdienstakte
   - Stark bei Personalnachweisen und Auftraggeber-Export.
   - Gute Skalierung pro Wachperson.

10. ZFU-/Onlinekursakte
   - Sehr guter Leadmagnet.
   - Sehr hohes Rechtsrisiko, deshalb nur Info, Akte und Partner.

### 52.14 Was dadurch in das Produktmodell muss

Die Plattform sollte nicht nur "Pflichten" verwalten, sondern diese Objektarten sauber koennen:

- Standort
- Objekt/Gebaeude
- Anlage
- Fahrzeug
- Mitarbeiter
- Externer Dienstleister
- Kurs/Massnahme
- Zulassung/Erlaubnis
- Audit
- Zertifikat
- Pruefbericht
- Betriebstagebuch
- Abfallfraktion
- Gefahrstoff/Produkt
- Sicherheitsdatenblatt
- Biostoff/Laborbereich
- Sonderanfertigung/Auftrag
- Material/Charge
- Wachperson/Einsatz
- Fahrlehrer/Fahrschueler
- Feuerungsanlage
- Brandschutzanlage
- Maengelpunkt
- Exportpaket

Wenn diese Objekte im Kernsystem flexibel angelegt werden, lassen sich fast alle Branchenpakete aus denselben Bausteinen bauen. Das ist wichtiger als immer neue Sondermodule zu programmieren.

### 52.15 Neue Seiten- und SEO-Struktur

Aus dieser Runde ergeben sich neue SEO-Cluster:

- `/branchen/fahrschule`
- `/branchen/bildungstraeger-azav`
- `/branchen/onlinekurs-zfu`
- `/branchen/integrationskurstraeger-bamf`
- `/branchen/entsorgungsfachbetrieb`
- `/branchen/gewerbeabfall`
- `/branchen/chemikalienhandel`
- `/branchen/labor-biostoffe`
- `/branchen/dentallabor-mdr`
- `/branchen/sicherheitsdienst`
- `/branchen/feuerungsanlage-bimschv`
- `/branchen/sonderbau-brandschutztechnik`

Und Objektseiten:

- `/akten/gewerbeabfall-dokumentation`
- `/akten/betriebstagebuch-entsorgung`
- `/akten/abgabebuch-chemverbotsv`
- `/akten/fahrschule-ausbildungsnachweise`
- `/akten/azav-auditordner`
- `/akten/zfu-kursakte`
- `/akten/brandschutztechnik-pruefberichte`
- `/akten/feuerungsanlage-messberichte`
- `/akten/biostoffverzeichnis`
- `/akten/sonderanfertigung-mdr`
- `/akten/bewacherregister-nachweise`

Jede Seite braucht:

- Mikrofrage: "Welche Unterlagen gehoeren in die Akte?"
- Quelle: Gesetz/Behoerde/Verordnung/Leitfaden
- Typische Nachweise
- Fristenfelder, aber ohne automatisches Rechtsurteil
- Mini-Tool: "Nachweisordner zusammenstellen"
- Button: "In meine Betriebsakte uebernehmen"
- Export: PDF/ZIP fuer Pruefer, Berater, Dienstleister
- Schema.org: FAQPage, HowTo, SoftwareApplication, BreadcrumbList, Organization

### 52.16 Harte Konsequenz

Die Website sollte nicht als "Pflichtfinder" starten. Sie sollte als "Nachweis- und Fristenakte fuer Branchen" starten.

Der Verkaufssatz:

"Betriebsakte.de sammelt Ihre Nachweise, erinnert an Fristen und erstellt auf Knopfdruck einen Ordner fuer Pruefer, Dienstleister, Behoerden oder interne Kontrolle."

Das ist sicherer, breiter und zahlungsnaeher als:

"Wir sagen Ihnen, welche Pflichten Sie haben."

Die neuen Treffer bestaetigen das. Fast jede gute Zielgruppe zahlt nicht fuer eine abstrakte Pflichtenliste, sondern fuer:

- nichts vergessen
- Unterlagen finden
- bei Pruefung vorbereitet sein
- Dienstleister einfacher beauftragen
- Nachweise exportieren
- Verantwortung intern verteilen
- Maengel nachhalten

Damit wird das System groesser, ohne juristisch unnoetig aggressiv zu werden.

## 53. Weitere Nachrecherche: Produkt-, Handels-, Vermittler- und Rueckverfolgbarkeitsakten

Diese Runde erweitert die Plattform weg von reinen Betreiberpflichten hin zu Zielgruppen, die Produkte handeln, regulierte Taetigkeiten ausueben, Lieferketten nachweisen oder gegenueber Behoerden/Pruefern schnell Unterlagen bereitstellen muessen.

Das ist fuer die Website stark, weil diese Zielgruppen oft online akquirierbar sind:

- Amazon-/Shop-Haendler
- Importeure
- Hersteller kleiner Marken
- Bauprodukt- und Materialhaendler
- Bio-/Lebensmittel-/Futtermittelbetriebe
- Gartenbau-/Pflanzenhandel
- regulierte Vermittler
- Lead- und Marketingunternehmen
- pharma- und gesundheitsnahe Logistik
- Bau-/Recycling-/Entsorgungsbetriebe

Die gemeinsame Produktlogik bleibt:

- Akte anlegen
- eigene Unterlagen hochladen
- Fristen selbst eintragen
- Nachweise exportieren
- Partner einbinden
- keine Bewertung, ob ein Produkt, Betrieb oder Vorgang rechtlich korrekt ist

### 53.1 Lebensmittelbedarfsgegenstaende- und Food-Contact-Material-Akte

Das ist ein sehr guter Treffer fuer Haendler, Importeure und Hersteller, weil seit 1. Juli 2024 eine Anzeigepflicht fuer Unternehmer besteht, die Lebensmittelbedarfsgegenstaende als Fertigerzeugnisse herstellen, behandeln oder in Verkehr bringen. Betroffen koennen auch Onlinehaendler sein, wenn sie etwa Geschirr, Trinkflaschen, Kuechenartikel, Verpackungen, Becher, Dosen, Besteck, Silikonformen oder andere Lebensmittelkontaktmaterialien verkaufen.

Quellen und Anker:

- BVL Anzeigepflicht bei Lebensmittelbedarfsgegenstaenden: https://www.bvl.bund.de/DE/Arbeitsbereiche/03_Verbraucherprodukte/03_AntragstellerUnternehmen/01_LMKontaktmaterialien/05_Anzeigepflicht_bei_LMBedarfsgegenstaenden/bgs_anzeigepflicht_bei_LMBedarfsgegenstaenden_node.html
- Bedarfsgegenstaendeverordnung: https://www.gesetze-im-internet.de/bedggstv/BJNR008660992.html
- Paragraph 2a BedGgstV: https://www.gesetze-im-internet.de/bedggstv/__2a.html
- BMLEH FAQ zur Anzeigepflicht: https://www.bmleh.de/SharedDocs/FAQs/DE/faq-anzeigepflicht/FAQList.html
- BMLEH Lebensmittelbedarfsgegenstaende: https://www.bmleh.de/DE/themen/verbraucherschutz/lebensmittelsicherheit/lebensmittelverpackungen/lebensmittelbedarfsgegenstaende.html

Zielgruppen:

- Amazon-/Marketplace-Haendler
- Online-Shops fuer Kuechenartikel
- Importeure von Trinkflaschen, Geschirr, Besteck, Brotdosen, Thermobechern
- Verpackungshaendler
- Private-Label-Marken
- Grosshaendler fuer Gastrobedarf
- Hersteller von Lebensmittelkontaktmaterialien
- Fulfillment-nahe Haendler mit vielen SKUs

Was die Plattform anbieten kann:

- Produktfamilien-Akte fuer Lebensmittelkontaktprodukte
- Anzeigeordner je Betrieb/Materialgruppe
- Lieferantenunterlagen
- Konformitaetserklaerungen als Ablagepunkt
- Pruefberichte/Migrationsberichte als Upload
- Materialgruppenliste
- Behoerdenkorrespondenz
- Aenderungsanzeige-Erinnerung, wenn der Nutzer selbst eine Aenderung eintraegt
- Export "Lebensmittelkontaktmaterial-Unterlagen"
- Partnervermittlung an Labor, Produktberater, Importberater, Anwalt

Online-Monetarisierung:

- 49 bis 149 EUR pro Monat fuer kleine Haendler
- 199 bis 599 EUR pro Monat fuer grosse Sortimenter
- Setup 299 bis 2.500 EUR fuer SKU-/Dokumentenimport
- Partnerprovisionen ueber Labore, Produktcompliance-Dienstleister, Importberater

Warum stark:

- Sehr frisches Thema seit 2024
- Viele Haendler wissen davon wenig
- Gute SEO-Mikrofragen: "Lebensmittelbedarfsgegenstaende Anzeige", "Trinkflasche Anzeige BedGgstV", "Amazon Haendler Lebensmittelkontaktmaterial"
- Perfekter Anschluss an Produkt-Compliance, ohne Shopkonform als Marke zu nutzen

Sperre:

- Keine automatische Entscheidung, ob ein konkretes Produkt Lebensmittelbedarfsgegenstand ist.
- Keine Materialkonformitaetsbewertung.
- Keine Pruefberichtsauslegung.

### 53.2 Bauprodukte-, Leistungserklaerungs- und CE-Unterlagenakte

Bauprodukte sind ein starker B2B-Cluster, weil Hersteller, Importeure, Private-Label-Anbieter und Haendler Leistungserklaerungen, CE-Unterlagen, technische Spezifikationen, Zertifikate, Gebrauchsanleitungen und Marktueberwachungsunterlagen organisieren muessen. Die neue Bauprodukteverordnung und Nachhaltigkeits-/Umweltmerkmale machen das Thema noch groesser.

Quellen und Anker:

- DIBt FAQ Bauproduktenverordnung und Marktueberwachung: https://www.dibt.de/de/service/faqs/bauproduktenverordnung-und-marktueberwachung
- IHK Potsdam Bauprodukteverordnung: https://www.ihk.de/potsdam/ihk-service-und-beratung/gruenes-unternehmen/bauprodukte-verordnung-6423804
- IHK Bodensee-Oberschwaben Inverkehrbringen von Bauprodukten: https://www.ihk.de/bodensee-oberschwaben/branchen/industrie-und-bauwirtschaft/inverkehrbringen-und-verwenden-von-bauprodukten-1940112
- EU Bauprodukteverordnung 305/2011, konsolidierte Fassung: https://eur-lex.europa.eu/legal-content/DE/TXT/PDF/?uri=CELEX%3A02011R0305-20210716

Zielgruppen:

- Hersteller von Bauprodukten
- Importeure von Baumaterial
- Haendler mit Eigenmarke
- Baustoffhaendler
- Onlinehaendler fuer Bauprodukte
- Hersteller von Befestigungstechnik, Daemmung, Boden, Ziegel, Betonwaren, Holzbauprodukten
- B2B-Plattformen fuer Baustoffe

Was die Plattform anbieten kann:

- Produktakte je Bauprodukt/Produkttyp
- Leistungserklaerung-Ablage
- CE-Kennzeichnungsunterlagen als Upload
- Zertifikate notifizierter Stellen
- Werkseigene Produktionskontrolle als Dokumentenordner
- Gebrauchsanleitungen und Sicherheitsinformationen
- Marktueberwachungsordner
- Serien-/Chargen-/Produkttyp-Verknuepfung
- Export fuer Kunde, Marktueberwachung, Bauherr, Planer oder Haendler

Online-Monetarisierung:

- 149 bis 499 EUR pro Monat fuer kleine Hersteller/Haendler
- 599 bis 2.000 EUR pro Monat fuer Sortiments- oder Eigenmarkenanbieter
- Setup 1.000 bis 10.000 EUR fuer Produkt- und Dokumentimport
- Partnerumsatz mit Laboren, notifizierten Stellen, CE-/Bauprodukteberatern, WPK-Beratern

Warum stark:

- Hoher B2B-Wert pro Kunde
- Gute Produktdatenlogik
- Viel Wiederverwendung fuer Produktakten allgemein
- Sehr gute SEO-Fragen: "Leistungserklaerung Bauprodukt aufbewahren", "CE Bauprodukt Haendler Pflicht", "Bauprodukteverordnung Eigenmarke"

Sperre:

- Keine Entscheidung, ob eine harmonisierte Norm greift.
- Keine CE-/Bauprodukte-Konformitaetsbewertung.
- Keine Leistungserklaerung automatisch als fachlich richtig ausgeben.

### 53.3 Bio-, Oeko-Kontroll- und Zertifikatsakte

Bio ist ein guter Aktenmarkt, weil Betriebe nicht nur ein Zertifikat haben, sondern laufend Lieferanten, Zutaten, Chargen, Wareneingang, Warenausgang, Massensalden, Kontrollstellen, Abweichungen, Importunterlagen und Auditreaktionen dokumentieren muessen.

Quellen und Anker:

- BMLEH Kontrolle im oekologischen Landbau: https://www.bmleh.de/DE/themen/landwirtschaft/oekologischer-landbau/kontrolle-oekologischer-landbau.html
- Oekolandbau.de Bio-Kontrolle: https://www.oekolandbau.de/bio-zertifizierung/bio-kontrolle/
- BLE Oekologischer Landbau: https://www.ble.de/DE/Themen/Landwirtschaft/Oekologischer-Landbau/oekologischer-landbau_node.html
- BLE Importverfahren Oekolandbau: https://www.ble.de/DE/Themen/Landwirtschaft/Oekologischer-Landbau/Importverfahren/importverfahren_node.html
- Bio-AHVV: https://www.gesetze-im-internet.de/bio-ahvv/BJNR1090B0023.html
- OELG-DV: https://www.gesetze-im-internet.de/_lg-dv/BJNR0CE0B0023.html

Zielgruppen:

- Bio-Lebensmittelhersteller
- Bio-Importeure
- Bio-Grosshaendler
- Bio-Onlinehaendler
- Bio-Gastronomie und Ausser-Haus-Verpflegung
- Hoflaeden und Direktvermarkter
- Naturkosmetik-/Nahrungsergaenzungsanbieter mit Bio-Bezug
- Futtermittelhersteller mit Bio-Linien

Was die Plattform anbieten kann:

- Kontrollstellenakte
- Zertifikatsablage
- Produkt-/Rezeptur-/Zutatenakte
- Lieferantenzertifikat-Ordner
- Wareneingang-/Warenausgang-Nachweise
- Chargen- und Rueckverfolgbarkeitsablage
- Abweichungs- und Massnahmenordner
- Import-/COI-Unterlagen als Ablage
- Audit-Export fuer Kontrollstelle

Online-Monetarisierung:

- 99 bis 399 EUR pro Monat fuer kleine Betriebe
- 499 bis 1.500 EUR pro Monat fuer mehrere Standorte/Sortimente
- Setup 500 bis 5.000 EUR
- Partnerumsatz mit Bio-Kontrollstellen, Beratern, Laboren, Warenwirtschaftsanbietern

Warum stark:

- Hoher Vertrauensdruck am Markt
- Kontrollen wiederholen sich
- Viele kleine Betriebe arbeiten noch mit Ordnern
- Sehr gute Suchfragen: "Bio Kontrolle Unterlagen", "Bio Zertifikat Lieferant dokumentieren", "Bio Audit Vorbereitung"

Sperre:

- Keine Bewertung, ob ein Produkt als Bio beworben werden darf.
- Keine Zertifizierungszusage.
- Keine Massensaldo-/Rezepturfreigabe als Fachurteil.

### 53.4 Futtermittel-, Heimtierfutter- und Rueckverfolgbarkeitsakte

Futtermittel ist deutlich groesser als nur Landwirtschaft. Dazu gehoeren Futtermittelhersteller, Futtermittelhaendler, Lagerhalter, Transporteure, Petfood-Marken, Pferdefutteranbieter, Direktvermarkter und bestimmte Nebenprodukt-/Rohstoffstroeme. Rueckverfolgbarkeit, Registrierung/Zulassung, Wareneingang, Warenausgang, Lieferanten, Chargen und Rueckrufunterlagen passen sehr gut in die Plattform.

Quellen und Anker:

- BVL Zulassungs- und Registrierungspflicht fuer Futtermittelunternehmer: https://www.bvl.bund.de/DE/Arbeitsbereiche/02_Futtermittel/03_AntragstellerUnternehmen/01_Zulassungs_Registrierungspflicht/fm_ZulassungsRegistrierungspflicht_node.html
- BVL Verzeichnis Futtermittelbetriebe: https://www.bvl.bund.de/DE/Arbeitsbereiche/02_Futtermittel/03_AntragstellerUnternehmen/01_Zulassungs_Registrierungspflicht/02_Futtermittelbetriebe_Verzeichnis/fm_FMBetriebeVerzeichnis_node.html
- BVL Leitfaden Rueckverfolgbarkeit Futtermittel, PDF: https://www.bvl.bund.de/SharedDocs/Downloads/02_Futtermittel/fm_Leitfaden_Rueckverfolgbarkeit.pdf?__blob=publicationFile&v=7
- LFGB: https://www.gesetze-im-internet.de/lfgb/BJNR261810005.html

Zielgruppen:

- Futtermittelhersteller
- Petfood- und Snack-Marken
- Pferdefutterhaendler
- Landwirtschaftliche Lagerhaeuser
- Rohstoffhaendler
- Lohnhersteller
- Transporteure/Lagerhalter im Futtermittelbereich
- Onlinehaendler mit Eigenmarke

Was die Plattform anbieten kann:

- Futtermittelunternehmer-Akte
- Registrierungs-/Zulassungsordner
- Produkt-/Chargenakte
- Lieferanten- und Kundenrueckverfolgbarkeit
- Wareneingang-/Warenausgang-Unterlagen
- Rueckrufordner
- Analyseberichte
- HACCP-/Hygienedokumente als Ablage
- Export fuer Behoerde, Kunde, QS-/Auditpartner

Online-Monetarisierung:

- 99 bis 499 EUR pro Monat
- 599 bis 2.000 EUR pro Monat fuer Hersteller mit vielen Chargen
- Setup 500 bis 7.500 EUR
- Partnerumsatz mit Laboren, Futtermittelberatern, QS-/Auditdienstleistern

Warum stark:

- Weniger ueberlaufen als Lebensmittel-HACCP
- Viele kleine Hersteller und D2C-Marken
- Sehr konkrete Aktenlogik
- Gute Suchfragen: "Futtermittel Rueckverfolgbarkeit", "Futtermittelunternehmer Registrierung", "Petfood Chargen dokumentieren"

Sperre:

- Keine Bewertung, ob ein Betrieb registrierungs-/zulassungspflichtig ist.
- Keine Futtermittel-Sicherheitsbewertung.
- Keine Rezeptur- oder Kennzeichnungsfreigabe.

### 53.5 Pflanzenpass-, Gartenbau- und Pflanzengesundheitsakte

Der Pflanzenhandel ist ein sehr guter Spezialmarkt, besonders wegen Onlinehandel, Gaertnereien, Baumschulen, Jungpflanzen, Saatgut, Zierpflanzen, Obstgehoelzen und EU-Binnenhandel. Pflanzenpass, Registrierung, Rueckverfolgbarkeit und Dokumentationspflichten sind perfekte Aktenobjekte.

Quellen und Anker:

- Julius-Kuehn-Institut FAQ Pflanzenpass/Binnenmarkt: https://pflanzengesundheit.julius-kuehn.de/neues-pflanzengesundheitssystem---binnenmarkt---faq.html
- Julius-Kuehn-Institut Unternehmer-Registrierung: https://pflanzengesundheit.julius-kuehn.de/unternehmer-registrierung.html
- Pflanzengesundheitsgesetz: https://www.gesetze-im-internet.de/pflgesg/PflGesG.pdf
- Pflanzenbeschauverordnung: https://www.gesetze-im-internet.de/pflbeschv/BJNR1150C0023.html
- Verwaltung Bund Registrierung fuer Pflanzenpasswaren: https://verwaltung.bund.de/leistungsverzeichnis/de/leistung/99093040261001

Zielgruppen:

- Baumschulen
- Gaertnereien
- Pflanzen-Onlineshops
- Gartencenter
- Saatgut- und Jungpflanzenhaendler
- Grosshaendler fuer Pflanzen
- Importeure/Exporteure pflanzlicher Waren
- Holz-/Verpackungsholz-nahe Anbieter, soweit Pflanzenbeschau betroffen ist

Was die Plattform anbieten kann:

- Unternehmerregistrierungsakte
- Pflanzenpass-Ablage
- Eingangs-/Ausgangs-Handelseinheiten
- Lieferanten- und Empfaengeraufzeichnungen
- betriebsinterne Verbringungsdokumentation
- Passersatz-/Neuausstellungsablage
- Schutzgebiets-/Exportordner als Ablage
- Kontrollbesuchsordner
- Export fuer Pflanzenschutzdienst oder Handelspartner

Online-Monetarisierung:

- 99 bis 399 EUR pro Monat
- 499 bis 1.500 EUR pro Monat fuer grosse Pflanzenhaendler
- Setup 500 bis 5.000 EUR
- Partnerumsatz mit Pflanzenschutzberatung, Etiketten-/Drucksystemen, Warenwirtschaft

Warum stark:

- Sehr konkrete Zielgruppe
- Gute Verbindung zu E-Commerce
- Rueckverfolgbarkeit ist der Kernnutzen
- SEO-Longtail: "Pflanzenpass aufbewahren", "Pflanzenpass Onlineshop", "Pflanzenhandel Registrierung"

Sperre:

- Keine Entscheidung, ob fuer ein konkretes Produkt ein Pflanzenpass erforderlich ist.
- Keine Pflanzengesundheitsbewertung.
- Keine Ausstellung amtlicher Dokumente durch die Plattform.

### 53.6 Regulierte Vermittler-, Erlaubnis-, Weiterbildungs- und Pruefberichtakte

Regulierte Vermittler sind eine eigene Kundengruppe mit hoher Zahlungsbereitschaft, weil sie Erlaubnisse, Register, Berufshaftpflicht, Weiterbildungsnachweise, Beschwerden, Beratungs-/Vermittlungsunterlagen und teils Pruefberichte oder Negativerklaerungen dokumentieren muessen. Die Plattform darf hier nur verwalten und erinnern, nicht beraten.

Quellen und Anker:

- MaBV: https://www.gesetze-im-internet.de/gewo_34cdv/BJNR013140974.html
- Paragraph 14 MaBV Aufbewahrung: https://www.gesetze-im-internet.de/gewo_34cdv/__14.html
- Paragraph 15b MaBV Weiterbildung: https://www.gesetze-im-internet.de/gewo_34cdv/__15b.html
- IHK Stuttgart Pruefbericht/Negativerklaerung Bautraeger: https://www.ihk.de/stuttgart/fuer-unternehmen/recht-und-steuern/grundstuecks-und-wohnungswesen-immobilien/pruefberichte-und-negativerklaerung-bautraeger-4933250
- VersVermV: https://www.gesetze-im-internet.de/versvermv_2018/BJNR248310018.html
- IHK Muenchen Berufspflichten Paragraph 34d GewO: https://www.ihk-muenchen.de/berufszugang/gewerbeerlaubnisse/34d-berufspflichten/
- FinVermV: https://www.gesetze-im-internet.de/finvermv/BJNR100610012.html
- IHK Frankfurt Pruefberichte nach Paragraph 24 FinVermV: https://www.frankfurt-main.ihk.de/standortpolitik/finanzplatz-frankfurt/finanzdienstleister-am-finanzplatz-frankfurt/brancheninformationen/finanzanlagenvermittler-nach-34f-der-gewerbeordnung/pruefberichte-negativerklaerungen-nach-24-finvermv-5248190

Zielgruppen:

- Versicherungsvermittler
- Versicherungsmaklerpools
- Immobilienmakler
- Wohnimmobilienverwalter
- Bautraeger/Baubetreuer
- Finanzanlagenvermittler
- Honorar-Finanzanlagenberater
- Immobiliardarlehensvermittler
- Vermittlernetzwerke und Strukturvertriebe

Was die Plattform anbieten kann:

- Erlaubnis- und Registerakte
- Berufshaftpflichtablage
- Weiterbildungsnachweis je Person
- Fristenuebersicht je Dreijahres-/Jahreszeitraum, vom Nutzer bestaetigt
- Beschwerdeprozess-Ablage
- Pruefbericht-/Negativerklaerungsordner
- Mitarbeiter- und Delegationsakte
- Export fuer IHK, Pruefer, WP, Steuerberater oder Maklerpool

Online-Monetarisierung:

- 39 bis 99 EUR pro Monat fuer Einzelvermittler
- 199 bis 799 EUR pro Monat fuer kleine Teams
- 1.000 bis 5.000 EUR pro Monat fuer Pools/Netzwerke
- Partnerumsatz mit Weiterbildungsanbietern, Wirtschaftspruefern, Versicherern, Compliance-Dienstleistern

Warum stark:

- Sehr konkrete Fristen und Nachweise
- Viele kleine Selbststaendige
- Skalierung ueber Mitarbeiter/Standorte/Vermittler
- Gute Suchfragen: "IDD Nachweise aufbewahren", "34c Weiterbildung Nachweis", "FinVermV Pruefbericht Unterlagen"

Sperre:

- Keine Beratung zu Finanzprodukten, Versicherungen oder Immobilienrecht.
- Keine Bewertung, ob eine Weiterbildung anerkannt wird.
- Keine Erstellung eines Pruefberichts als fachliche Pruefleistung.

### 53.7 Telefonwerbe-, Lead- und Einwilligungsnachweisakte

Das ist ein sehr guter digitaler Querschnittsbaustein: Unternehmen, die Telefonwerbung gegenueber Verbrauchern betreiben oder Leads dafuer einkaufen, muessen Einwilligungen dokumentieren und Nachweise aufbewahren. Die Plattform kann hier ein reines Nachweisarchiv und Exporttool sein.

Quellen und Anker:

- Paragraph 7a UWG: https://www.gesetze-im-internet.de/uwg_2004/__7a.html
- Bundesnetzagentur Nachweis von Telefon-Werbeeinwilligungen: https://www.bundesnetzagentur.de/DE/Fachthemen/Telekommunikation/Unternehmenspflichten/Telefonwerbung/start.html
- Bundesnetzagentur Pressemitteilung Auslegungshinweise: https://www.bundesnetzagentur.de/SharedDocs/Pressemitteilungen/DE/2022/20220707_Telefonwerbung.html
- IHK Konstanz Einwilligung in Telefonwerbung: https://www.ihk.de/konstanz/recht-und-steuern/handel-wettbewerb/sonstiges/unerlaubte-telefonwerbung-1672100

Zielgruppen:

- Leadgeneratoren
- Versicherungsvertriebe
- Immobilienvertriebe
- Energie-/Solar-/Telekommunikationsvertriebe
- Marketingagenturen
- Callcenter als Zielgruppe, nicht als eigener Betriebskanal
- Unternehmen mit extern eingekauften Leads
- B2C-Vertriebsteams

Was die Plattform anbieten kann:

- Einwilligungsakte je Lead
- Quelle, Zeitpunkt, Inhalt, Kanal, Nachweisdatei
- Verwendungsprotokoll je Anruf
- Aufbewahrungsfrist je Verwendung als technisches Erinnerungsfeld
- Widerrufs-/Sperrlistenablage
- Lieferantenakte fuer Leadquellen
- Stichprobenordner fuer Auftraggeber
- Export fuer Bundesnetzagentur, Datenschutzbeauftragten, Anwalt oder Auftraggeber

Online-Monetarisierung:

- 99 bis 499 EUR pro Monat fuer kleinere Leadnutzer
- 799 bis 5.000 EUR pro Monat fuer hohe Leadvolumen
- Preisstaffel pro Lead/Nachweis/Verwendungslog
- Partnerumsatz mit Datenschutzbeauftragten, Anwaelten, Leadqualitaetspruefern, CRM-Anbietern

Warum stark:

- Klarer Dokumentationsnutzen
- Sehr digital und online skalierbar
- Hoher Schmerz bei fehlenden Nachweisen
- Gute SEO-Fragen: "Telefonwerbung Einwilligung aufbewahren", "Paragraph 7a UWG Nachweis", "Lead Einwilligung dokumentieren"

Sperre:

- Keine Aussage, ob eine konkrete Einwilligung wirksam ist.
- Keine Freigabe fuer Telefonwerbung.
- Keine Datenschutz- oder Wettbewerbsrechtsberatung.

### 53.8 Pharma-, Arzneimittelgrosshandel-, GDP- und Temperaturakte

Dieses Segment ist kein Massenmarkt, aber ein Premiumfeld. Arzneimittelgrosshandel, Arzneimittelvermittlung, Pharmalogistik und Hersteller mit GDP-/GMP-nahen Dokumentationspflichten haben hohe Anforderungen an Nachweise, Temperaturdaten, Lieferanten, Kunden, Ruecknahmen, Rueckrufe, Verantwortliche Personen und Audits.

Quellen und Anker:

- Arzneimittelhandelsverordnung: https://www.gesetze-im-internet.de/amgrhdlbetrv/BJNR023700987.html
- Paragraph 7 AM-HandelsV Aufzeichnungen: https://www.gesetze-im-internet.de/amgrhdlbetrv/__7.html
- AMWHV: https://www.gesetze-im-internet.de/amwhv/BJNR252310006.html
- Paragraph 41 AMWHV Aufbewahrung der Dokumentation: https://www.gesetze-im-internet.de/amwhv/__41.html
- EU GDP-Leitlinien, EUR-Lex: https://eur-lex.europa.eu/legal-content/DE/TXT/PDF/?uri=CELEX%3A52013XC1123%2801%29
- BfArM BtM-Aufzeichnungen: https://www.bfarm.de/DE/Bundesopiumstelle/Betaeubungsmittel/Aufzeichnungen/_node.html

Zielgruppen:

- Arzneimittelgrosshaendler
- Arzneimittelvermittler
- Pharmalogistik
- Grosshandelsnahe Apotheken-/Versandstrukturen
- Gesundheitsprodukte-Distributoren
- Kuehlketten-Logistik
- Medizin-/Pharmalager mit GDP-Anforderungen aus Vertragen

Was die Plattform anbieten kann:

- Grosshandelserlaubnis-/GDP-Akte
- Verantwortliche-Person-Akte
- Lieferanten-/Kundenqualifizierung als Dokumentenablage
- Temperaturprotokoll-Upload
- Abweichungs-/CAPA-Ordner
- Ruecknahme-/Rueckrufunterlagen
- Auditordner
- BtM-Unterlagen als separater Hochrisiko-Ordner, falls passend
- Export fuer Behoerde, Auditor, Kunde, QP, GDP-Berater

Online-Monetarisierung:

- 299 bis 1.500 EUR pro Monat
- 2.000 bis 10.000 EUR Setup fuer Dokument-/Temperaturdatenimport
- Enterprise fuer mehrere Lager/Standorte
- Partnerumsatz mit GDP-Beratern, Temperaturmonitoring, Validierungsdienstleistern, QMS-Anbietern

Warum stark:

- Sehr hohe Zahlungsbereitschaft
- Wiederkehrende Audits
- Dokumentationslast ist der eigentliche Schmerz
- Gute Premium-Positionierung, aber nicht MVP

Sperre:

- Keine GMP-/GDP-Zertifizierung.
- Keine Bewertung, ob Lagerung oder Transport fachlich ausreichend ist.
- Keine Arzneimittel-/BtM-Fachfreigabe.

### 53.9 Ersatzbaustoff-, RC-Baustoff-, Bodenmaterial- und Lieferscheinakte

Ersatzbaustoffe und mineralische Bau-/Abbruchmaterialien sind ein sehr guter Ausbau fuer Bau, Tiefbau, Recycling und Entsorgung. Es gibt Lieferscheine, Deckblaetter, Voranzeigen, Abschlussanzeigen, Laborberichte, Gueteueberwachung, Materialklassen und Uebergaben an Bauherrn/Eigentuemer. Das ist ein perfekter Nachweisordner.

Quellen und Anker:

- Ersatzbaustoffverordnung: https://www.gesetze-im-internet.de/ersatzbaustoffv/BJNR259810021.html
- LAGA FAQ Ersatzbaustoffverordnung, PDF: https://www.laga-online.de/documents/faq-3-zur-ebv-2025-05-13a_1757923967.pdf
- IHK Erfurt Ersatzbaustoffverordnung: https://www.ihk.de/erfurt/service/energie-und-umwelt/umwelt/ressourcen/mantelverordnung-ersatzbaustoffe-5862810
- LfU Bayern Paragraph 25 Lieferschein und Deckblatt: https://www.lfu.bayern.de/abfall/ersatzbaustoffverordnung/faq_ersatzbaustoffverordnung/p25_lieferschein_deckblatt/index.htm

Zielgruppen:

- Tiefbauunternehmen
- Bauunternehmen
- Recyclingbaustoff-Aufbereiter
- Abbruchunternehmen
- Asphaltmischwerke
- Baustoffhaendler
- Erdbauunternehmen
- Projektentwickler/Bauherren mit Einbauunterlagen
- Kommunale Bauhoefe

Was die Plattform anbieten kann:

- Baustellen-/Einbaumassnahmenakte
- Lieferschein- und Deckblattablage
- Voranzeige-/Abschlussanzeigeordner
- Materialklassen als vom Nutzer eingetragene Felder
- Labor-/Pruefberichte
- Gueteueberwachungsunterlagen
- Uebergabepaket an Bauherrn/Eigentuemer
- Export fuer Behoerde, Bauherr, Entsorger, Prueflabor, Gutachter

Online-Monetarisierung:

- 99 bis 399 EUR pro Monat fuer kleinere Bau-/Erdbauunternehmen
- 499 bis 2.000 EUR pro Monat fuer Recycling-/Tiefbauunternehmen
- Setup 500 bis 7.500 EUR
- Partnerumsatz mit Laboren, Gutachtern, Entsorgern, Baujuristen, Abfallberatern

Warum stark:

- Neue, noch nicht ueberall routinierte Dokumentationslast seit 2023
- Hoher Praxis-Schmerz auf Baustellen
- Gute Objektlogik: Material, Lieferschein, Einbauort, Bauherr, Labor, Export
- SEO-Longtail: "ErsatzbaustoffV Lieferschein", "Deckblatt Ersatzbaustoffverordnung", "RC Baustoff Dokumentation"

Sperre:

- Keine Materialklassifizierung.
- Keine Entscheidung, ob Einbau zulaessig ist.
- Keine boden-/abfallrechtliche Bewertung.

### 53.10 Altholz-, Altoel- und Spezialruecknahmeakte

Neben der allgemeinen Entsorgerakte gibt es mehrere Spezialstroeme mit sehr konkreten Unterlagen: Altholzbehandlungsanlagen, Altoelverkauf/Ruecknahme, Annahmestellen, Anlieferungsscheine, Proben, Wiegescheine, Entsorgungsvertraege und Ruecknahmepflichten.

Quellen und Anker:

- Altholzverordnung: https://www.gesetze-im-internet.de/altholzv/BJNR330210002.html
- AltholzV PDF, Betriebstagebuch und Aufbewahrung: https://www.gesetze-im-internet.de/altholzv/AltholzV.pdf
- Altoelverordnung: https://www.gesetze-im-internet.de/alt_lv/BJNR023350987.html
- BMUKN Altoel Gesetzgebung: https://www.bundesumweltministerium.de/themen/kreislaufwirtschaft/abfallarten-und-abfallstroeme/altoel/altoel-gesetzgebung
- IHK Schleswig-Holstein Altoelverordnung: https://www.ihk.de/schleswig-holstein/innovation/umwelt/abfallberatung/altoelverordnung-1371052

Zielgruppen:

- Altholzbehandlungsanlagen
- Holzrecyclingbetriebe
- Containerdienste
- Baustoff-/Abbruchbetriebe mit Altholzstroemen
- Onlinehaendler fuer Motoren-/Getriebeoel
- Kfz-Teile- und Zubehoerhaendler
- Werkstaetten
- Baumarkt-/Fachhandelsanbieter

Was die Plattform anbieten kann:

- Altholz-Betriebstagebuch-Ablage
- Anlieferungsschein- und Wiegescheinordner
- Probenahme-/Analyseunterlagen
- Stoerungs-/Abweichungsordner
- Altoel-Annahmestellenvertrag
- Ruecknahmehinweis-/Shopnachweis-Ablage
- Entsorgungsvertraege
- Export fuer Behoerde, Entsorger, Audit, Marktplatz

Online-Monetarisierung:

- 49 bis 199 EUR pro Monat fuer Oelhaendler/Werkstaetten
- 199 bis 999 EUR pro Monat fuer Recyclingbetriebe
- Setup 299 bis 5.000 EUR
- Partnerumsatz mit Entsorgern, Laboren, Abfallberatern, Shop-Rechtspartnern

Warum stark:

- Spezialthemen ranken oft leichter als "Abfall allgemein"
- E-Commerce-Anschluss bei Altoel
- Dokumente statt Rechtsurteile
- Gute Suchfragen: "Altoel Ruecknahme Onlineshop", "Altholz Betriebstagebuch", "Altholz Anlieferungsschein"

Sperre:

- Keine Abfalleinstufung.
- Keine Entscheidung, ob Ruecknahmestelle rechtlich genuegt.
- Keine Entsorgungsfreigabe.

### 53.11 Neue Bewertung nach dieser Suchrunde

Sehr stark fuer Start oder fruehe Erweiterung:

1. Lebensmittelbedarfsgegenstaende-Akte
   - Frisch, shopnah, viele Haendler, gute SEO-Chance.
   - Passt perfekt zu Produkt-/Haendler-Compliance, ohne fremde Marke anzufassen.

2. Telefonwerbe-/Lead-Einwilligungsakte
   - Sehr digital, klare Nachweislogik, hohe Angst vor fehlenden Nachweisen.
   - Gute Preisstaffel pro Lead/Volumen.

3. Bauprodukte-/Leistungserklaerungsakte
   - Hohe B2B-Tickets, viele technische Dokumente, guter Partnerkanal.
   - Besonders gut fuer Hersteller, Importeure und Eigenmarken.

4. Bio-/Oeko-Kontrollakte
   - Wiederkehrende Audits, viele kleine Betriebe, gute Vertrauenswirkung.
   - Sehr gut als Branchenpaket fuer Lebensmittel/Import/Gastro.

5. Ersatzbaustoff-/Bauabfall-Lieferscheinakte
   - Neuer, praktischer Schmerz im Bau-/Recyclingbereich.
   - Starker Nachweisordner-Fit.

Gute Premium- oder Spezialmodule:

6. Pflanzenpass-/Pflanzengesundheitsakte
   - Sehr konkrete Nische, gut fuer Onlinehandel/Gartenbau.

7. Futtermittel-/Petfood-Rueckverfolgbarkeitsakte
   - Gute D2C-/Hersteller-Nische, weniger ueberlaufen als Lebensmittel allgemein.

8. Regulierter-Vermittler-Akte
   - Viele kleine zahlende Kunden, aber starke Fach-/Finanznaehe.

9. Pharma-/GDP-Akte
   - Sehr hohe Zahlungsbereitschaft, aber spaeter wegen Fachlichkeit.

10. Altholz-/Altoel-Spezialakte
   - Gut als Untermodul fuer Entsorgung, Werkstatt und E-Commerce.

### 53.12 Konsequenz fuer die Website-Struktur

Die Seite sollte neben "Branchen" und "Aktenobjekten" eine dritte SEO-Ebene bekommen:

Produkt- und Handelsakten:

- Lebensmittelkontaktmaterial-Akte
- Bauprodukte-Akte
- Bio-Zertifikatsakte
- Futtermittel-Rueckverfolgbarkeitsakte
- Pflanzenpass-Akte
- Produktunterlagen-Akte
- Lieferantenunterlagen-Akte
- Chargen-/Rueckrufakte

Vermittler- und Vertriebsakten:

- IDD-Weiterbildungsakte
- 34c-Weiterbildungsakte
- FinVermV-Pruefberichtakte
- MaBV-Pruefberichtakte
- Telefonwerbe-Einwilligungsakte
- Leadnachweis-Akte

Bau-/Recycling-/Materialakten:

- ErsatzbaustoffV-Lieferscheinakte
- Altholz-Betriebstagebuchakte
- Altoel-Ruecknahmeakte
- RC-Baustoff-Nachweisakte

Neue Objektarten im Datenmodell:

- Produktfamilie
- SKU/Artikel
- Materialgruppe
- Leistungserklaerung
- Konformitaetserklaerung
- Zertifikat
- Kontrollstelle
- Lieferant
- Kunde/Empfaenger
- Charge
- Handelseinheit
- Pflanzenpass
- Einwilligung
- Leadquelle
- Verwendungsprotokoll
- Pruefbericht
- Negativerklaerung
- Lieferschein
- Deckblatt
- Anlieferungsschein
- Annahmestelle

Damit wird die Plattform nicht nur eine Betriebsakte fuer Anlagen und Fristen, sondern auch eine Nachweisplattform fuer Handel, Produkte und Vertrieb. Das ist wichtig, weil die zahlungsstarken Kunden nicht nur "Betriebe mit Feuerloeschern" sind, sondern auch Haendler und Hersteller, die bei jeder Kontrolle, Marktplatzanfrage, Kundenreklamation oder Audit sofort Unterlagen brauchen.

## 54. Weitere Nachrecherche: Verordnungen mit Betriebstagebuch, Mengenmeldung, Produktanzeige und Lieferschein

Diese Runde ist besonders wichtig, weil sie zeigt: Es gibt nicht nur allgemeine Unternehmenspflichten, sondern ganze Verordnungswelten, in denen Firmen dauernd Daten sammeln, Lieferscheine erstellen, Mengen melden, Produkte anzeigen, Register fuellen, Jahresberichte abgeben oder Unterlagen fuer Behoerden und Pruefer bereithalten muessen.

Das ist fuer unsere Plattform ideal, wenn wir es sauber positionieren:

- nicht als Rechtsurteil
- nicht als Einstufungsmaschine
- nicht als Ersatz fuer Fachberater
- sondern als Akte, Fristenkalender, Dokumentenraum, Mengen-/Belegsammlung, Export- und Partnervermittlung

### 54.1 Deponie-, Langzeitlager- und Deponie-Nachsorgeakte

Warum relevant:

Deponiebetreiber haben eine extrem dokumentationslastige Welt. Nach der Deponieverordnung geht es unter anderem um Betriebsordnung, Betriebshandbuch, Abfallkataster, Betriebstagebuch, Jahresbericht, Mess- und Kontrollunterlagen, Bestandsplaene, Stoerungen und Nachsorge. Das ist kein kleines Formular, sondern eine dauerhafte Betreiberakte.

Zielgruppen:

- Deponiebetreiber DK0 bis DKIII
- kommunale Entsorger
- private Entsorgungsbetriebe
- Bodenaushub- und Bauschuttdeponien
- Langzeitlager
- Bauabfall-/RC-Unternehmen mit Deponiebezug
- Kommunalbetriebe mit Altdeponien oder Nachsorgepflichten

Was wir anbieten koennen:

- Deponie-Betriebstagebuch als digitaler Aktenraum
- Abfallkataster-Ablage
- Jahresbericht-Ordner mit Belegsammlung
- Messstellen-, Sickerwasser-, Grundwasser- und Gas-Unterlagen
- Stoerungs- und Ereignisprotokolle
- Nachsorgekalender
- Behoerdenexport als PDF/ZIP
- Rollen fuer Betreiber, Labor, Gutachter, Behoerde, internen Verantwortlichen
- Partnervermittlung zu Laboren, Deponiegutachtern und Umweltberatern

Was wir nicht machen:

- keine Einstufung, ob ein Abfall abgelagert werden darf
- keine fachliche Deponiebewertung
- keine Genehmigungsberatung
- keine Grenzwertauslegung

Geld:

- sehr wenige Kunden, aber sehr hohe Zahlungsbereitschaft
- realistisch eher 299 bis 2.000 EUR monatlich
- Setup 2.000 bis 20.000 EUR moeglich, weil Datenimport und Strukturierung aufwendig sind
- eher Premium-/Enterprise-Modul, nicht Start-MVP

SEO-Seiten:

- "Deponie Betriebstagebuch digital"
- "Deponie Jahresbericht Unterlagen"
- "Abfallkataster Deponie Vorlage"
- "Deponie Nachsorge Dokumentation"
- "DepV Betriebstagebuch Aufbewahrung"

Quellen:

- Deponieverordnung Paragraph 13: https://www.gesetze-im-internet.de/depv_2009/__13.html
- Deponieverordnung Anhang 5: https://www.gesetze-im-internet.de/depv_2009/anhang_5.html
- LUBW Handlungshilfe Deponieverordnung: https://pudi.lubw.de/detailseite/-/publication/10651-Handlungshilfe_Deponieverordnung.pdf

### 54.2 Klaerschlamm-, Phosphor-Rueckgewinnungs- und Lieferscheinakte

Warum relevant:

Die Klaerschlammverordnung erzeugt wiederkehrende Untersuchungs-, Lieferschein-, Flaechen-, Rueckstellproben- und Nachweisdokumentation. Zusaetzlich kommt der langfristige Druck durch Phosphor-Rueckgewinnung. Das Thema ist nicht massentauglich wie Onlineshop, aber fuer betroffene Anlagen hoch relevant.

Zielgruppen:

- Klaeranlagen
- Abwasserzweckverbaende
- Kommunen
- Klaerschlammverwerter
- Kompostierer
- Entsorger
- landwirtschaftliche Verwerter
- Ingenieurbueros im Abwasserbereich

Was wir anbieten koennen:

- Klaerschlamm-Lieferscheinakte
- Untersuchungsberichte und Laborwerte-Ablage
- Rueckstellproben-Dokumentation
- Flaechen- und Bewirtschafter-Unterlagen
- Verwertungsweg-Ordner
- Phosphor-Rueckgewinnungs-Roadmap als Projektakte
- Fristen und Wiedervorlagen fuer Proben, Berichte, Abstimmungen
- Export fuer Behoerde, Labor, Entsorger, Ingenieurburo

Was wir nicht machen:

- keine Entscheidung, ob Klaerschlamm auf eine Flaeche darf
- keine bodenrechtliche oder duengerechtliche Bewertung
- keine Grenzwertauslegung

Geld:

- 199 bis 999 EUR monatlich bei Anlagen/Verwertern realistisch
- Setup 1.000 bis 10.000 EUR moeglich
- Partnerumsatz ueber Labore, Entsorger, Ingenieurbueros
- gute Nische fuer spaeter, wenn Umwelt-/Entsorgungscluster steht

SEO-Seiten:

- "Klaerschlamm Lieferschein digital"
- "AbfKlaerV Unterlagen verwalten"
- "Klaerschlamm Untersuchung Nachweise"
- "Phosphor Rueckgewinnung Dokumentation"
- "Klaerschlamm Verwertung Akte"

Quellen:

- AbfKlaerV Paragraph 17: https://www.gesetze-im-internet.de/abfkl_rv_2017/__17.html
- AbfKlaerV Inhaltsuebersicht: https://www.gesetze-im-internet.de/abfkl_rv_2017/
- UBA Klaerschlamm: https://www.umweltbundesamt.de/themen/wertstoffe-aus-klaerschlamm-umsetzung-der
- LAGA Vollzugshinweise AbfKlaerV: https://www.laga-online.de/documents/fortschreibung-der-vollzugshinweise-zur-klaerschlammverordnung_1692774491.pdf

### 54.3 Bioabfall-, Kompost- und Gaerproduktakte

Warum relevant:

Die Bioabfallverordnung ist fuer unsere Plattform stark, weil sie nicht nur abstrakte Pflichten hat, sondern reale Vorgangsunterlagen: Bioabfallbehandlung, Guetesicherung, Untersuchung, Lieferschein, Flaechenbezug, Abgabe, Zwischenabnehmer und Dokumentation.

Zielgruppen:

- Kompostwerke
- Biogasanlagen
- Gruengutplaetze
- Entsorgungstraeger
- Gaerprodukt-Hersteller
- Landwirte
- GaLaBau-Betriebe mit Gruengutstroemen
- kommunale Bauhoefe
- Abfallwirtschaftsbetriebe

Was wir anbieten koennen:

- Bioabfall-Lieferscheinakte
- Chargen- und Materialstromablage
- Laborberichte und Hygieneunterlagen
- Guetesicherungsordner
- Flaechen- und Bewirtschafter-Unterlagen
- Zwischenabnehmer-Ordner
- Fristen fuer Untersuchungen und Abgaben
- Export fuer Behoerde, Labor, Entsorger, Guetesicherung

Was wir nicht machen:

- keine Entscheidung, ob ein Material auf eine Flaeche darf
- keine Bewertung von Schadstoffgrenzwerten
- keine duengerechtliche Beratung

Geld:

- 99 bis 799 EUR monatlich
- Setup 500 bis 5.000 EUR
- guter Partnerkanal ueber Labore, Guetesicherung, Entsorger
- stark als Modul im Umwelt-/Entsorgungscluster

SEO-Seiten:

- "Bioabfall Lieferschein digital"
- "BioAbfV Nachweise verwalten"
- "Kompostwerk Dokumentation"
- "Gaerprodukt Unterlagen"
- "Bioabfallverordnung Lieferschein Vorlage"

Quellen:

- BioAbfV Paragraph 11: https://www.gesetze-im-internet.de/bioabfv/__11.html
- BioAbfV Anhang 4 Lieferschein: https://www.gesetze-im-internet.de/bioabfv/anhang_4.html
- BMUKN Hinweise BioAbfV: https://www.bundesumweltministerium.de/fileadmin/Daten_BMU/Download_PDF/Abfallwirtschaft/bioabfv_hinweise_bf.pdf

### 54.4 PRTR-, Schadstofffreisetzungs- und BUBE-Berichtsakte

Warum relevant:

PRTR ist fuer grosse Anlagenbetreiber interessant, weil es eine wiederkehrende jaehrliche Berichtswelt ist. Es geht um Freisetzungen in Luft, Wasser und Boden, Abwasserverbringung, Abfallverbringung, Produktionsvolumen, BUBE-Zugang, Nullmeldungen, Fristverlaengerungen und Belege.

Zielgruppen:

- grosse Industrieanlagen
- Abfallverbrennungsanlagen
- chemische Industrie
- Papier-, Holz- und Metallindustrie
- Oberflaechenbehandlung
- Energieanlagen
- grosse Tierhaltungsanlagen
- Abwasser-/Abfallanlagen
- Umweltabteilungen im Mittelstand

Was wir anbieten koennen:

- PRTR-Jahresordner
- Datenquellen- und Belegsammlung
- BUBE-Exportvorbereitung
- Nullmeldungs-Ordner
- Produktionsvolumen-Unterlagen
- Emissions-, Abwasser- und Abfallverbringungsbelege
- Fristenkalender fuer Bericht, Fristverlaengerung und interne Datenlieferung
- Partnervermittlung zu Emissionsgutachtern, Umweltberatern und Messstellen

Was wir nicht machen:

- keine Entscheidung, ob Schwellenwerte ueberschritten sind
- keine Emissionsberechnung als fachliche Endaussage
- keine BUBE-Abgabe im Namen des Kunden ohne gesonderte Beauftragung/Fachpartner

Geld:

- wenige Kunden, aber hoher Monatswert
- 299 bis 2.000 EUR monatlich moeglich
- Setup 2.000 bis 15.000 EUR moeglich
- stark fuer Enterprise- und Partnervertrieb, nicht fuer schnellen Low-Ticket-Start

SEO-Seiten:

- "PRTR Bericht Unterlagen"
- "BUBE Bericht Akte"
- "Schadstofffreisetzungsregister Dokumentation"
- "PRTR Nullmeldung dokumentieren"
- "PRTR Frist 30. April"

Quellen:

- LANUK NRW PRTR: https://www.lanuk.nrw.de/themen/industrieanlagen/berichtspflichten/pollutant-release-and-transfer-register-prtr
- Umweltpakt Bayern E-PRTR: https://www.umweltpakt.bayern.de/luft/fachwissen/213/e-prtr-europaeische-schadstofffreisetzungs-verbringungsregister
- BMUKN Schadstoffregister: https://www.bundesumweltministerium.de/themen/umweltinformation/schadstoffregister

### 54.5 TEHG-, EU-ETS-, DEHSt- und Emissionsberichtakte

Warum relevant:

Emissionshandel ist hochpreisig, dokumentationsintensiv und fachlich sensibel. Betreiber brauchen Ueberwachungsplaene, Emissionsberichte, Brennstoff-/Materialdaten, Nachweise, Prueferunterlagen, Verbesserungsberichte und DEHSt-Korrespondenz. Genau das ist eine Premium-Akte.

Zielgruppen:

- emissionshandelspflichtige Industrieanlagen
- Energieanlagen
- Zement, Kalk, Glas, Keramik, Papier, Chemie
- Abfallverbrennungsanlagen
- Brennstoffinverkehrbringer im EU-ETS 2/nEHS Umfeld
- Umwelt-/Energieabteilungen
- Pruefstellen und Berater als Partner

Was wir anbieten koennen:

- Ueberwachungsplan-Akte
- Emissionsbericht-Jahresordner
- Brennstoff-, Stoffstrom- und Messdatenablage
- Prueferunterlagen-Export
- Verbesserungsbericht-Ordner
- DEHSt-Korrespondenzablage
- Fristenkalender fuer interne Daten, Pruefung, Berichte, Registertermine
- Partnervermittlung zu Pruefstellen und Emissionshandelsberatern

Was wir nicht machen:

- keine Emissionshandelsberatung
- keine Berechnung als verbindliche fachliche Endaussage
- keine Genehmigungs-/Ueberwachungsplan-Erstellung ohne Fachpartner

Geld:

- 499 bis 3.000 EUR monatlich bei passenden Kunden moeglich
- Setup 3.000 bis 25.000 EUR moeglich
- sehr starker Premium-Funnel, aber nur mit Fachpartnern wirklich sauber skalierbar

SEO-Seiten:

- "DEHSt Ueberwachungsplan Unterlagen"
- "Emissionsbericht Akte"
- "EU ETS Dokumentation"
- "TEHG Fristen verwalten"
- "Emissionshandel Prueferunterlagen Export"

Quellen:

- DEHSt Ueberwachungsplan 2021 bis 2030: https://www.dehst.de/DE/Themen/EU-ETS-1/Stationaere-Anlagen/Emissionsermittlung-2021-2030/Ueberwachungsplan-2021-2030/ueberwachungsplan-2021-2030_node.html
- DEHSt EU-ETS 2 Berichtsphase: https://www.dehst.de/DE/Themen/nEHS/EU-ETS-2/eu-ets-2-berichtsphase-2024-2026/eu-ets-2_node.html
- TEHG: https://www.gesetze-im-internet.de/tehg_2025/

### 54.6 Einwegkunststofffonds-, DIVID- und Mengenmeldeakte

Warum relevant:

Das ist einer der besten neuen Treffer fuer ein Online-System. Der Einwegkunststofffonds betrifft Hersteller bestimmter Einwegkunststoffprodukte, To-go-Verpackungen, Becher, Tueten, Folienverpackungen, Feuchttuecher, Ballons, Tabakfilter und weitere Produktgruppen. Es gibt Registrierung, Produkt-/Herstellerfragen, Mengenmeldungen, Sonderabgabe, Prueferbestaetigung und DIVID-Unterlagen. Der Markt ist frisch, unuebersichtlich und fuer viele Anbieter nervig.

Zielgruppen:

- To-go-Verpackungsanbieter
- Gastronomie-Grosshaendler
- Verpackungsimporter
- D2C- und Amazon-Haendler
- Baeckerei-, Metzgerei- und Gastro-Zulieferer
- Hersteller von Feuchttuechern
- Tabak-/Filteranbieter
- Ballon-/Eventartikel-Haendler
- Private-Label-Anbieter
- auslaendische Hersteller mit Deutschlandvertrieb

Was wir anbieten koennen:

- DIVID-Registrierungsakte
- Produktgruppen- und Artikelordner
- Mengenmelde-Sammlung nach Jahr
- Lieferanten-, Einkaufs- und Verkaufsbelege
- Prueferbestaetigungsordner
- Sonderabgaben-Bescheide und Zahlungsnachweise
- Fristenkalender fuer Jahresmeldung
- Export fuer Pruefer, Steuerberater, Verpackungsberater
- Partnervermittlung zu Verpackungsberatern und Pruefern

Was wir nicht machen:

- keine verbindliche Entscheidung, ob ein Produkt ein Einwegkunststoffprodukt ist
- keine Hersteller-/Bevollmaechtigtenbewertung
- keine Abgabenberechnung als verbindliche Endaussage

Geld:

- sehr stark, weil frisch und fuer viele Firmen unklar
- kleine Anbieter: 49 bis 199 EUR monatlich
- groessere Verpackungs-/Importbetriebe: 299 bis 1.500 EUR monatlich
- Setup 300 bis 5.000 EUR
- sehr gut fuer SEO und Partnerprovisionen

SEO-Seiten:

- "DIVID Mengenmeldung vorbereiten"
- "Einwegkunststofffonds Unterlagen"
- "EWKFondsG Registrierung Nachweise"
- "To-go Verpackung Einwegkunststofffonds"
- "Einwegkunststofffonds Prueferbestaetigung Unterlagen"

Quellen:

- UBA Einwegkunststofffonds: https://www.umweltbundesamt.de/ewkf
- DIVID Plattform: https://www.einwegkunststofffonds.de/
- BMUKN FAQ Einwegkunststofffondsgesetz: https://www.bundesumweltministerium.de/themen/kreislaufwirtschaft/fragen-und-antworten-zum-einwegkunststofffondsgesetz
- EWKFondsG: https://www.gesetze-im-internet.de/ewkfondsg/BJNR07C0B0023.html

### 54.7 Nahrungsergaenzungsmittel-, BVL-Anzeige- und Produktunterlagenakte

Warum relevant:

Nahrungsergaenzungsmittel sind fuer unsere Plattform sehr stark, weil es viele kleine Marken, Amazon-Seller, D2C-Anbieter, Importeure und Private-Label-Produkte gibt. Beim BVL gibt es eine Anzeige, aber keine Verkehrfaehigkeitspruefung. Genau deshalb brauchen Anbieter eine saubere Produktakte, Anzeigeunterlagen, Etiketten, Rezepturunterlagen, Lieferantenzertifikate, Chargen, Reklamationen und Behoerdenkorrespondenz.

Zielgruppen:

- Supplement-Marken
- Amazon- und Marktplatzseller
- D2C-Brands
- Importeure
- Private-Label-Anbieter
- Fitness-/Health-Brands
- Hersteller und Lohnabfueller
- Food-Startups

Was wir anbieten koennen:

- NEM-Produktakte pro SKU
- BVL-Anzeige-Unterlagen
- Etiketten- und Rezepturablage
- Lieferantenzertifikate
- Laborberichte
- Chargen- und Rueckrufordner
- Reklamations- und Behoerdenkorrespondenz
- Fristen/Wiedervorlagen fuer Rezeptur- und Labelaenderungen
- Partnervermittlung zu Laboren, Lebensmittelrechtlern, Labelpruefern und Lohnherstellern

Was wir nicht machen:

- keine Entscheidung, ob ein Produkt Nahrungsergaenzungsmittel oder Arzneimittel ist
- keine Health-Claims-Pruefung als Rechtsberatung
- keine Verkehrfaehigkeitsbestaetigung
- keine Rezepturfreigabe

Geld:

- 49 bis 299 EUR monatlich fuer kleine Marken
- 299 bis 999 EUR monatlich fuer groessere Sortimente
- Setup 299 bis 3.000 EUR
- sehr gute SEO- und Ads-Chance, weil viele neue Anbieter aktiv suchen

SEO-Seiten:

- "Nahrungsergaenzungsmittel BVL Anzeige Unterlagen"
- "NEM Produktakte"
- "Supplement Etikett Unterlagen"
- "Nahrungsergaenzungsmittel Chargen dokumentieren"
- "BVL Anzeige Nahrungsergaenzungsmittel vorbereiten"

Quellen:

- BVL Nahrungsergaenzungsmittel: https://www.bvl.bund.de/DE/Arbeitsbereiche/01_Lebensmittel/04_AntragstellerUnternehmen/03_NEM/lm_nahrungsErgMittel_node.html
- NemV Paragraph 5: https://www.gesetze-im-internet.de/nemv/__5.html
- BVL FAQ NEM: https://www.bvl.bund.de/DE/Arbeitsbereiche/01_Lebensmittel/04_AntragstellerUnternehmen/13_FAQ/FAQ_NEM/FAQ_NEM_node.html

### 54.8 Wasch-, Reinigungsmittel-, WRMG-, PCN- und BfR-Mitteilungsakte

Warum relevant:

Wasch- und Reinigungsmittel sind ein sehr guter Produktaktenmarkt. Es gibt viele kleine Marken, Private-Label-Anbieter, Amazon-Seller, Grosshaendler und Hersteller. Die Unterlagen sind technisch genug, damit Kunden zahlen: Produktmitteilung, BfR/PCN, UFI, Etikett, Sicherheitsdatenblatt, Rezeptur, Lieferantendaten, oeffentliches Inhaltsstoffdatenblatt und Aenderungsdokumentation.

Zielgruppen:

- Reinigungsmittelhersteller
- Waschmittelmarken
- Private-Label-Haendler
- Amazon-/Marktplatzseller
- Grosshaendler fuer Reinigungsbedarf
- Facility-/Gastro-Zulieferer mit Eigenmarken
- Chemie-Startups
- Lohnhersteller

Was wir anbieten koennen:

- Produktakte fuer Wasch-/Reinigungsmittel
- BfR-Mitteilungsnachweise
- PCN-/UFI-Unterlagenordner
- Sicherheitsdatenblatt-Ablage
- Etiketten-/CLP-Unterlagenablage
- oeffentliches Inhaltsstoffdatenblatt als verwaltbarer Link
- Rezeptur- und Lieferantendokumente
- Aenderungslog bei Rezeptur-/Labelaenderung
- Partnervermittlung zu SDB-Erstellern, Chemieberatern, Laboren

Was wir nicht machen:

- keine Einstufung/Gefahrstoffklassifizierung
- keine SDB-Erstellung ohne Fachpartner
- keine Aussage, ob eine Mitteilung ausreichend ist
- keine chemikalienrechtliche Beratung

Geld:

- 49 bis 299 EUR monatlich fuer kleine Marken
- 299 bis 1.000 EUR monatlich fuer groessere Sortimente
- Setup 300 bis 5.000 EUR
- sehr passend zu Produktakten und Private Label

SEO-Seiten:

- "WRMG Mitteilung Unterlagen"
- "BfR Waschmittel Mitteilung"
- "Reinigungsmittel Produktakte"
- "PCN UFI Unterlagen verwalten"
- "Inhaltsstoffdatenblatt Reinigungsmittel"

Quellen:

- BfR Mitteilung von Wasch- und Reinigungsmitteln: https://www.bfr.bund.de/chemikaliensicherheit/nationales-produktregister/mitteilung-von-wasch-und-reinigungsmitteln/
- WRMG: https://www.gesetze-im-internet.de/wrmg/WRMG.pdf
- UBA Kennzeichnung Wasch- und Reinigungsmittel: https://www.umweltbundesamt.de/themen/chemikalien/wasch-reinigungsmittel/kennzeichnung

### 54.9 Textilkennzeichnungs-, Faserzusammensetzungs- und SKU-Akte

Warum relevant:

Textilien sind breit, niedrigschwelliger und fuer E-Commerce stark. Es ist nicht das hoechste Ticket, aber sehr gut fuer SEO, Produktakten und Marktplatzseller. Jeder Artikel braucht korrekte Produktdaten, Faserzusammensetzung, Lieferantendokumente, Etikett, Produktfotos und Online-Textdaten.

Zielgruppen:

- Fashion-Onlineshops
- Amazon-/Etsy-/eBay-Haendler
- Workwear-Haendler
- Kinderkleidung
- Importer
- Private-Label-Brands
- Textilgrosshaendler
- Merch-Anbieter

Was wir anbieten koennen:

- Textil-SKU-Akte
- Faserzusammensetzungsfelder
- Lieferantenerklaerungen
- Etikettenfotos
- Produktdaten fuer Shop/Marktplatz
- Nachweisordner je Kollektion
- Aenderungslog bei Lieferanten-/Materialwechsel
- Export fuer Marktplatz, Agentur, Kontrolle, Lieferant

Was wir nicht machen:

- keine verbindliche Textilkennzeichnungspruefung
- keine Material-/Laborbewertung
- keine Aussage, ob die Kennzeichnung rechtlich genuegt

Geld:

- 29 bis 149 EUR monatlich als kleines Produktaktenmodul
- 149 bis 499 EUR monatlich bei groesseren Sortimenten
- stark als Add-on, weniger als eigenes Premiumprodukt

SEO-Seiten:

- "Textilkennzeichnung Unterlagen"
- "Faserzusammensetzung Produktdaten verwalten"
- "Textil Etikett Nachweis"
- "Textilkennzeichnung Onlineshop"
- "Textil SKU Akte"

Quellen:

- TextilKennzG: https://www.gesetze-im-internet.de/textilkennzg_2016/BJNR019810016.html
- TextilKennzG Paragraph 4: https://www.gesetze-im-internet.de/textilkennzg_2016/__4.html

### 54.10 PStTG-, DAC7- und Plattformmeldeakte

Warum relevant:

Digitale Plattformbetreiber sind eine kleine, aber zahlungskraeftige Zielgruppe. Das Plattformen-Steuertransparenzgesetz erzeugt Melde-, Aufzeichnungs- und Prozessdokumentation. Besonders spannend: Es geht nicht nur um grosse Marktplatzriesen, sondern auch um Nischenplattformen fuer Vermietung, Dienstleistungen, Buchungen, Creator, lokale Anbieter oder Vermittlung.

Zielgruppen:

- Marktplatzbetreiber
- Vermietungsplattformen
- lokale Dienstleistungsplattformen
- Creator-/Kurs-/Buchungsplattformen
- SaaS-Marketplaces
- Plattformen fuer Handwerker, Events, Jobs, Fahrzeuge, Ferienobjekte
- Betreiber mit vielen Drittanbietern

Was wir anbieten koennen:

- DAC7/PStTG-Meldeakte
- Prozessbeschreibung-Ordner
- Anbieter-Stammdaten-Checkliste
- Jahresmeldeordner
- Korrekturmeldungsordner
- BZSt-Korrespondenzablage
- Steuerberater-Export
- Fristenkalender fuer Datenbeschaffung, Meldung, Korrekturen
- Partnervermittlung zu Steuerberatern und Plattformrechtlern

Was wir nicht machen:

- keine steuerliche Bewertung
- keine Entscheidung, ob ein Plattformbetreiber meldepflichtig ist
- keine steuerliche Einordnung von Anbietern
- keine Uebermittlung ohne Fach-/Steuerprozess

Geld:

- 199 bis 2.000 EUR monatlich moeglich
- Setup 1.000 bis 15.000 EUR
- sehr gut als Premium-Nische, aber kein Massenprodukt
- starker Partnerkanal ueber Steuerberater und SaaS-Agenturen

SEO-Seiten:

- "DAC7 Plattformbetreiber Unterlagen"
- "PStTG Aufzeichnungen"
- "Plattform Steuertransparenz Meldung vorbereiten"
- "BZSt DAC7 Prozessbeschreibung"
- "PStTG Meldeakte"

Quellen:

- BZSt DAC7/PStTG: https://www.bzst.de/DE/Unternehmen/Intern_Informationsaustausch/DAC7/dac7_node.html
- PStTG: https://www.gesetze-im-internet.de/psttg/BJNR273010022.html
- PStTG Paragraph 24: https://www.gesetze-im-internet.de/psttg/__24.html

### 54.11 Tierische-Nebenprodukte-, Veterinaer- und Handelspapierakte

Warum relevant:

Tierische Nebenprodukte sind fuer viele Betriebe unsichtbar kompliziert: Schlachtnebenprodukte, Petfood, Biogas, Kompostierung, Transport, Handelspapiere, Registrierung, Reinigung/Desinfektion, Kategorien, Annahme- und Abgabeunterlagen. Das ist nicht massig, aber dokumentationsstark und mit Veterinaerbehoerdenkontakt verbunden.

Zielgruppen:

- Schlachthoefe
- Metzgereien mit Nebenproduktstroemen
- Petfood-Hersteller
- Biogasanlagen
- Kompostierungsanlagen
- Entsorger und Transporteure
- Tierkoerperbeseitigung
- Tierkrematorien
- Labore mit tierischem Material
- Leder-/Gelatine-/Fettverarbeiter

Was wir anbieten koennen:

- TNP-Betriebsakte
- Registrierungs-/Zulassungsordner
- Handelspapier-Ablage
- Annahme-/Abgabeunterlagen
- Transport- und Reinigungsnachweise
- Desinfektionskontrollbuch-Ablage
- Chargen-/Kategorie-Felder nur als nutzerbefuellte Daten
- Export fuer Veterinaeramt, Entsorger, Kunde, Berater
- Partnervermittlung zu Veterinaer-/Hygieneberatern und Entsorgern

Was wir nicht machen:

- keine Kategorie-Einstufung tierischer Nebenprodukte
- keine Entscheidung ueber Verwertungswege
- keine Veterinaer-/Hygieneberatung

Geld:

- 99 bis 799 EUR monatlich
- Setup 500 bis 5.000 EUR
- sehr gut als Branchenmodul fuer Fleisch, Petfood, Biogas und Entsorgung

SEO-Seiten:

- "Tierische Nebenprodukte Handelspapiere"
- "TierNebV Aufzeichnungen"
- "TNP Betriebsregistrierung Unterlagen"
- "Tierische Nebenprodukte Akte"
- "Desinfektionskontrollbuch TierNebV"

Quellen:

- TierNebV: https://www.gesetze-im-internet.de/tiernebv/BJNR173500006.html
- TierNebV Inhaltsuebersicht: https://www.gesetze-im-internet.de/tiernebv/
- BMLEH Tierische Nebenprodukte: https://www.bmleh.de/DE/themen/tiere/tiergesundheit/tierische-nebenprodukte/tierische-nebenprodukte_node.html

### 54.12 Weinbuch-, Kellerbuch- und Begleitdokumentakte

Warum relevant:

Wein ist eine eigene, sehr dokumentationslastige Welt. Es gibt Kellerbuch, Weinbuch, Stoffbuch, Begleitdokumente, Belege, Weinnummern, Behaeltnisse, Behandlungsstoffe, Mengenbewegungen, Pruefnummern und Kontrollen. Allerdings gibt es hier bereits spezialisierte Weinsoftware. Deshalb ist das eher ein Partner-/Import-/Dokumentenmodul, nicht unser erstes Kernprodukt.

Zielgruppen:

- Weinguter
- Winzergenossenschaften
- Kellereien
- Weinabfueller
- Weinimporteure
- Weinmakler
- groessere Weinhandelsbetriebe

Was wir anbieten koennen:

- Weinbuch-/Kellerbuch-Dokumentenakte
- Begleitdokument-Ablage
- Beleg- und Pruefnummernordner
- Labor- und Analyseunterlagen
- Exportordner fuer Kontrolle, Steuerberater, Verband
- Partneranbindung zu Weinsoftware statt Ersatz

Was wir nicht machen:

- keine amtlich relevante Weinbuchfuehrung als Ersatz fuer zertifizierte Spezialsoftware
- keine weinrechtliche Bewertung
- keine Produkt-/Qualitaetsklassifizierung

Geld:

- 49 bis 199 EUR monatlich bei kleinen Betrieben
- 199 bis 799 EUR monatlich bei groesseren Betrieben, wenn mit Import/Export und Partnern kombiniert
- eher SEO-/Partnernische als Hauptkeil

SEO-Seiten:

- "Weinbuchfuehrung Unterlagen"
- "Kellerbuch digital ablegen"
- "Wein Begleitdokumente verwalten"
- "Weingut Nachweisordner"
- "Weinbuch Belege Export"

Quellen:

- ADD Leitfaden Weinbuchfuehrung: https://add.rlp.de/fileadmin/add/Abteilung_4/Wein/2023_Wein_Leitfaden_Weinbuchsfuehrung.pdf
- Service-BW Weinbegleitdokument: https://www.service-bw.de/zufi/leistungen/6013749

### 54.13 Bewertung dieser Runde

Beste neue Treffer nach Geld, Online-Fit und Aktenlogik:

1. Einwegkunststofffonds/DIVID
   - frisch, viele betroffene Produktanbieter, hoher Erklaerbedarf, klare Mengen-/Belegakte
   - sehr guter Fit fuer SEO, E-Commerce, Verpackung, Gastro-Zulieferer

2. Nahrungsergaenzungsmittel/BVL-Anzeigeakte
   - sehr viele kleine Marken und Seller
   - hohe Zahlungsbereitschaft, weil Produktverkauf direkt am Nachweis haengt
   - sehr guter Add-on-Fit fuer Produktakten

3. Wasch-/Reinigungsmittel/WRMG/BfR/PCN
   - Private Label, Chemie, Amazon, Grosshandel
   - technisch genug fuer hohe Wechselkosten
   - starke Partnerprovisionen ueber SDB, CLP, Labor, Berater

4. PStTG/DAC7-Plattformmeldeakte
   - wenige Kunden, aber Premium
   - Plattformbetreiber zahlen eher 500+ EUR, wenn das Thema brennt
   - ideal mit Steuerberater-Export

5. PRTR/TEHG/DEHSt
   - sehr hohe Tickets, aber fachlich schwer
   - nur als Akten-/Export-/Partnerprodukt sauber
   - spaeterer Enterprise-Funnel, nicht Startprodukt

6. Bioabfall/Klaerschlamm/Deponie/TNP
   - stark fuer Umwelt-/Entsorgungscluster
   - weniger Masse, aber hoher Schmerz und hohe Dokumentenlast
   - gute Partnerkanal-Logik ueber Labore, Gutachter, Entsorger

7. Textilkennzeichnung
   - sehr breit und SEO-stark
   - niedrigeres Ticket
   - gut als Produktakten-Untermodul fuer Shops/Marken

8. Weinbuchfuehrung
   - fachlich interessant, aber vorhandene Spezialsoftware
   - nur als SEO-/Partner-/Ablagemodul aufnehmen

### 54.14 Konsequenz fuer unser Produkt

Die Plattform braucht neben Betriebsobjekten und Fristen auch eine starke Produkt-/Mengen-/Meldeakte.

Neue Objektarten im Datenmodell:

- Meldesystem
- Registerkonto
- Produktgruppe
- Mengenmeldung
- Jahresmeldung
- Leistungsmeldung
- Prueferbestaetigung
- Stoffstrom
- Verwertungsweg
- Handelspapier
- Lieferscheinverfahren
- Laborbericht
- Analysebericht
- Rezeptur
- Etikett
- Inhaltsstoffdatenblatt
- Sicherheitsdatenblatt
- UFI
- PCN
- BfR-Mitteilung
- BVL-Anzeige
- BZSt-Meldung
- BUBE-Bericht
- DEHSt-Unterlage
- Ueberwachungsplan
- Emissionsbericht
- Behoerdenkorrespondenz
- Partnerexport

Neue Website-Kategorien:

- Produktakten
- Mengenmeldungen
- Umweltberichte
- Lieferscheinakten
- Register- und Meldeakten
- Pruefer- und Steuerberater-Exporte
- Verpackung und Kunststoff
- Lebensmittel und Supplements
- Chemie und Reinigungsmittel
- Plattformbetreiber
- Entsorgung und Umwelt

Neue Startseiten, die sich besonders lohnen:

- Einwegkunststofffonds-Akte
- Nahrungsergaenzungsmittel-Akte
- Reinigungsmittel-Produktakte
- PStTG/DAC7-Plattformakte
- PRTR/BUBE-Berichtsakte
- Bioabfall-Lieferscheinakte
- Klaerschlamm-Lieferscheinakte
- Tierische-Nebenprodukte-Akte
- Textil-SKU-Akte

Wichtigste Erkenntnis:

Die besten Geldthemen sind nicht die breitesten Pflichten, sondern die, bei denen ein Betrieb jedes Jahr oder bei jedem Produkt wieder Belege, Mengen, Anzeigen, Berichte, Laborwerte, Lieferscheine oder Registerunterlagen zusammentragen muss. Dort ist die Plattform kein netter Ratgeber, sondern die Schublade, die den Betrieb am Laufen haelt.

## 55. Zusatzrunde: Spezialverordnungen mit starkem Beleg- und Exportwert

Nach Abschnitt 54 bleiben noch einige Luecken, die fuer die Plattform nicht als Startprodukt, aber als SEO- und Partnerbaustein wertvoll sind. Die Logik bleibt gleich: wir sammeln, erinnern, strukturieren und exportieren. Wir entscheiden nicht, ob ein Stoff, Produkt, Abfall oder Verpackungsfall rechtlich richtig eingeordnet ist.

### 55.1 Grenzueberschreitende Abfallverbringungsakte

Warum relevant:

Grenzueberschreitende Abfallverbringung ist ein Paradefall fuer Papierchaos. Je nach Fall geht es um Notifizierungsformular, Begleitformular, Anhang-VII-Dokument, Behoerdenkorrespondenz, Transporteur, Empfaenger, Behandlungsanlage, Mengen, Verbringungsnummern und Bestaetigungen. Das Thema ist international, aber fuer deutsche Entsorger, Recycler, Kunststoffabfallhaendler, E-Schrott-Akteure und Industrieunternehmen sehr konkret.

Zielgruppen:

- Entsorger
- Recycler
- Kunststoffabfallhaendler
- E-Schrott-/WEEE-Verwerter
- Industrieunternehmen mit Auslandsverwertung
- Makler und Haendler von Abfaellen
- Logistikunternehmen im Abfallbereich
- Anlagenbetreiber mit grenzueberschreitenden Stoffstroemen

Was wir anbieten koennen:

- Verbringungsakte pro Vorgang
- Notifizierungs- und Begleitformular-Ablage
- Anhang-VII-Unterlagenordner
- Transporteur-/Empfaenger-/Anlagenakte
- Mengen- und Versandbelege
- Behoerdenkorrespondenz
- Fristen und Wiedervorlagen
- Export fuer Behoerde, Entsorger, Makler, Kunde, Fachberater
- Partnervermittlung zu Abfallrechts-/Exportexperten

Was wir nicht machen:

- keine Einstufung, ob ein Abfall gruen gelistet ist
- keine Entscheidung, ob Notifizierung erforderlich ist
- keine Export-/Importfreigabe
- keine Behoerdenantraege ohne Fachpartner

Geld:

- 199 bis 1.500 EUR monatlich
- Setup 1.000 bis 10.000 EUR
- stark fuer Entsorgungscluster und internationale Recycler

SEO-Seiten:

- "Abfallverbringung Unterlagen"
- "Notifizierungsformular Abfall digital"
- "Anhang VII Dokument Abfall verwalten"
- "grenzueberschreitende Abfallverbringung Belege"
- "Abfall Export Begleitformular"

Quellen:

- UBA Notifizierungsverfahren: https://www.umweltbundesamt.de/themen/abfall-ressourcen/grenzueberschreitende-abfallverbringung/notifizierungsverfahren
- UBA Begleitformular Muster: https://www.umweltbundesamt.de/system/files/medien/2503/dokumente/begleitformular_muster_de_0.pdf
- UBA Kunststoffabfall-Verbringung FAQ: https://www.umweltbundesamt.de/system/files/medien/479/publikationen/uba_faq-liste_grenzueberschreitende_abfallverbringung_von_kunststoffabfall_0.pdf

### 55.2 POP-Abfall-, Register- und Sonderabfall-Zusatzakte

Warum relevant:

POP-haltige Abfaelle sind ein Spezialfall, aber fuer Abbruch, Entsorgung, Recycling, Daemmstoffe, Flammschutzmittel, belastete Kunststoffe und bestimmte Altmaterialien relevant. Die POP-Abfall-Ueberwachungsverordnung verweist auf Nachweis- und Registerlogik. Das ist kein Massenmarkt, aber ein sehr guter Baustein fuer Entsorger, Bau, Rueckbau und Recycling.

Zielgruppen:

- Abbruchunternehmen
- Entsorger
- Recycler
- Sammler/Beforderer
- Makler und Haendler von Abfaellen
- Bauunternehmen
- Deponie-/Vorbehandlungsanlagen
- Industrie mit POP-haltigen Altstoffen

Was wir anbieten koennen:

- POP-Abfall-Registerakte
- Vorgangsakte fuer Erzeuger, Besitzer, Sammler, Beforderer, Haendler, Makler
- Nachweis- und Registerunterlagen
- Analyseberichte
- Transport-/Annahmebelege
- Entsorgungsweg-Ablage
- Export fuer Behoerde, Entsorger, Gutachter

Was wir nicht machen:

- keine Einstufung, ob ein Abfall POP-haltig ist
- keine Entscheidung ueber Entsorgungsweg
- keine Grenzwertbewertung

Geld:

- 99 bis 799 EUR monatlich als Entsorgungszusatz
- Setup 500 bis 5.000 EUR
- gut als SEO-Landingpage und Partnerfunnel

SEO-Seiten:

- "POP Abfall Register"
- "POP-Abfall-Ueberwachungsverordnung Nachweise"
- "POP-haltige Abfaelle Dokumentation"
- "POP Abfall Entsorgung Unterlagen"

Quellen:

- POP-Abfall-UeberwV: https://www.gesetze-im-internet.de/pop-abfall-_berwv/BJNR264410017.html
- POP-Abfall-UeberwV Paragraph 5 Registerpflichten: https://www.gesetze-im-internet.de/pop-abfall-_berwv/__5.html

### 55.3 SCIP-, SVHC- und Lieferketten-Produktdatenakte

Warum relevant:

SCIP/SVHC ist fuer Hersteller, Importeure und Lieferanten von Erzeugnissen ein sehr guter Produktdaten-Baustein. Es geht um Informationen zu besonders besorgniserregenden Stoffen in Erzeugnissen, Lieferantendaten, Artikelstruktur, Identifikatoren, Produktvarianten, Meldungen und Aktualisierungen. Das ist perfekt fuer eine Produktakte, solange wir keine chemische Stoffbewertung liefern.

Zielgruppen:

- Importeure von Erzeugnissen
- Elektronikhaendler
- Maschinen-/Bauteilehaendler
- Moebel-/Einrichtungsanbieter
- Textil-/Sport-/Outdoor-Marken
- Spielwaren-/Kinderartikelanbieter
- Bauprodukte-/Materialhaendler
- Automotive-Zulieferer
- Private-Label-Marken

Was wir anbieten koennen:

- SCIP-/SVHC-Produktdatenakte
- Lieferantenerklaerungs-Upload
- Artikelstruktur und Komponentenliste
- EAN/GTIN/Artikelnummernfelder
- Kandidatenlisten-Aenderungswiedervorlage
- Verbraucher-/B2B-Auskunftsordner
- ECHA-/SCIP-Meldeunterlagenablage
- Export fuer Lieferant, Kunde, Marktplatz, Berater
- Partnervermittlung zu REACH-/Chemieberatern

Was wir nicht machen:

- keine Stoffanalyse
- keine Entscheidung, ob SVHC ueber 0,1 Prozent enthalten ist
- keine SCIP-Meldung als fachliche Freigabe
- keine REACH-Beratung

Geld:

- 99 bis 499 EUR monatlich fuer kleinere Importeure
- 499 bis 2.000 EUR monatlich fuer groessere Sortimente
- Setup 500 bis 10.000 EUR bei Produktdatenimport
- sehr guter Fit zu Produktakten, Importeuren und Marktplatzsellern

SEO-Seiten:

- "SCIP Produktdaten verwalten"
- "SVHC Lieferantenerklaerung sammeln"
- "REACH Artikel 33 Auskunft organisieren"
- "SCIP Meldung Unterlagen"
- "SVHC Produktakte"

Quellen:

- REACH-CLP-Biozid Helpdesk SCIP-Datenbank: https://www.reach-clp-biozid-helpdesk.de/DE/REACH/Erzeugnisse/SCIP-Datenbank
- UBA REACH Auskunftspflichten: https://www.umweltbundesamt.de/auskunftsrechte-fuer-verbraucherinnen-verbraucher
- ECHA SCIP Database: https://www.echa.europa.eu/de/web/guest/scip-database

### 55.4 VerpackG-Pfand-, Mehrweg- und LUCID-Zusatzakte

Warum relevant:

VerpackG ist bereits im Konzept, aber ein Detail sollte separat als Geld- und SEO-Feld auftauchen: Pfandpflicht, Mehrwegangebot, Serviceverpackungen, Datenmeldungen, Vollstaendigkeitserklaerung, Bevollmaechtigung und DPG. Das betrifft sehr viele kleine Betriebe, Gastro, Getraenke, Import, Eigenmarken und Onlinehandel.

Zielgruppen:

- Gastronomie und Catering
- To-go-Anbieter
- Getraenkehersteller
- Getraenkeimporteure
- D2C-Getraenke-Brands
- Baeckereien und Metzgereien mit To-go
- Onlinehaendler
- Eigenmarkenanbieter
- Fulfillment-/Dropshipping-Haendler

Was wir anbieten koennen:

- LUCID-/VerpackG-Akte
- Datenmelde-Unterlagen
- Systembeteiligungsvertraege
- Vollstaendigkeitserklaerungsordner
- Pfand-/DPG-Unterlagenordner
- Mehrwegangebot-Dokumentation
- Bevollmaechtigten-Unterlagen fuer auslaendische Hersteller
- Verpackungsmengen-Import
- Export fuer Systembetreiber, Pruefer, Verpackungsberater

Was wir nicht machen:

- keine Entscheidung, ob eine Verpackung pfandpflichtig ist
- keine Verpackungsklassifizierung
- keine DPG-/LUCID-Anmeldung als Pflichtdienst ohne Fachpartner
- keine Vollstaendigkeitserklaerung pruefen

Geld:

- 49 bis 299 EUR monatlich fuer kleine Betriebe
- 299 bis 1.500 EUR monatlich fuer groessere Marken/Importeure
- Setup 300 bis 5.000 EUR
- sehr stark fuer SEO, weil viele kleine Firmen konkrete Fragen haben

SEO-Seiten:

- "VerpackG Pfand Unterlagen"
- "Mehrwegangebot dokumentieren"
- "LUCID Datenmeldung vorbereiten"
- "DPG Pfandsystem Unterlagen"
- "Verpackung Vollstaendigkeitserklaerung Pruefer Export"

Quellen:

- VerpackG Paragraph 33 Mehrwegalternative: https://www.gesetze-im-internet.de/verpackg/__33.html
- ZSVR Pfandpflicht Einweggetraenkeverpackungen: https://www.verpackungsregister.org/themen/pfandpflicht-fuer-einweggetraenkeverpackungen
- ZSVR Systembeteiligung und Datenmeldung: https://www.verpackungsregister.org/systembeteiligung-und-datenmeldung/systembeteiligung
- ZSVR Gastronomie: https://www.verpackungsregister.org/ich-bin-gastronom-oder-caterer

### 55.5 Emissionserklaerungs-, 11. BImSchV- und BUBE-Zusatzakte

Warum relevant:

PRTR und TEHG sind schon drin, aber die Emissionserklaerung nach 11. BImSchV verdient als eigene SEO-/BUBE-Unterseite einen Platz. Betreiber genehmigungsbeduerftiger Anlagen muessen fuer bestimmte Berichtsjahre Emissionserklaerungen abgeben; BUBE wird als elektronische Erfassung genutzt. Das ist eine klare Berichtserstellungs- und Belegsammlungsakte.

Zielgruppen:

- Betreiber genehmigungsbeduerftiger Anlagen
- Industrieanlagen
- Tierhaltungsanlagen
- Oberflaechenbehandlung
- Abfallbehandlung
- Nahrungsmittelindustrie
- Holz-/Papier-/Metallbetriebe
- Umweltabteilungen

Was wir anbieten koennen:

- Emissionserklaerungsakte
- BUBE-Unterlagenordner
- Datenquellen-/Messberichtsammlung
- Fristenkalender fuer internes Einsammeln
- Belegexport fuer Umweltberater, Messstelle, Behoerde
- Vorjahresordner und Aenderungslog

Was wir nicht machen:

- keine Emissionsberechnung als verbindliches Ergebnis
- keine Entscheidung, ob der Betreiber erklaerungspflichtig ist
- keine fachliche Behoerdenmeldung ohne Fachpartner

Geld:

- 199 bis 1.500 EUR monatlich
- Setup 1.000 bis 10.000 EUR
- gut als Zusatz zu PRTR/TEHG/BUBE, nicht als eigenes Startprodukt

SEO-Seiten:

- "Emissionserklaerung 11 BImSchV Unterlagen"
- "BUBE Emissionserklaerung vorbereiten"
- "Emissionserklaerung Frist 31 Mai"
- "11 BImSchV Belege sammeln"

Quellen:

- 11. BImSchV: https://www.gesetze-im-internet.de/bimschv_11_2004/BJNR069400004.html
- 11. BImSchV Paragraph 3: https://www.gesetze-im-internet.de/bimschv_11_2004/__3.html
- LANUK BUBE: https://www.lanuk.nrw.de/themen/industrieanlagen/berichtspflichten/betriebliche-umweltdaten-berichterstattung-bube
- LANUK Emissionserklaerung: https://www.lanuk.nrw.de/themen/industrieanlagen/berichtspflichten/emissionserklaerung

### 55.6 Bewertung der Zusatzrunde

Diese Zusatzrunde ist kein Grund, den Start wieder breiter zu machen. Sie ist wichtig fuer die spaetere Seitenstruktur.

Beste Zusatzmodule:

1. SCIP/SVHC-Produktdatenakte
   - passt perfekt zu Importeuren, Produktakten, Lieferantenunterlagen und Marktplatzdruck

2. VerpackG-Pfand-/Mehrweg-/LUCID-Zusatzakte
   - viele kleine Suchanfragen, viele zahlende kleine Firmen, guter SEO-Funnel

3. Grenzueberschreitende Abfallverbringungsakte
   - kleiner Markt, aber sehr hoher Schmerz und gute Partnerprovisionen

4. Emissionserklaerungs-/BUBE-Zusatzakte
   - stark fuer Industrie/Umweltcluster, aber eher Premium/Partner

5. POP-Abfall-Registerakte
   - sehr spezialisiert, aber guter Longtail fuer Bau, Abbruch und Entsorgung

Konsequenz:

Wir sollten die Website spaeter in drei grosse Geldachsen denken:

- Produkt-/Importachsen: VerpackG, EWKFonds, NEM, WRMG, Textil, SCIP/SVHC, WEEE, Batterie, GPSR
- Umwelt-/Entsorgungsachsen: Gewerbeabfall, Ersatzbaustoff, Bioabfall, Klaerschlamm, Deponie, POP, Abfallverbringung, PRTR, BUBE
- Betreiber-/Fristenachsen: DGUV, Brandschutz, F-Gase, AwSV, 42. BImSchV, Aufzuege, Kassen/TSE, Fahrpersonal

Damit bleibt das Produkt klar: eine digitale Akte fuer Produkte, Betreiberpflichten, Mengen, Nachweise und Exporte. Die vielen Verordnungen werden nicht zu einem chaotischen Ratgeber, sondern zu einzelnen Aktenvorlagen mit konkretem Belegnutzen.

## 56. Weitere Spezialrunde: Produktakten, Meldeportale, Rueckruf, Zoll und Loesemittel

Diese Runde bringt weitere Felder, die sehr gut zu einer bezahlten Plattform passen, weil die Zielgruppen Unterlagen nicht nur einmal lesen, sondern dauerhaft sammeln, aktualisieren, vorhalten oder an Behoerden/Partner weitergeben muessen.

### 56.1 Tabakerzeugnisse-, E-Zigaretten- und EU-CEG-Akte

Warum relevant:

Tabakerzeugnisse, E-Zigaretten und Nachfuellbehaelter sind ein starker Spezialmarkt. Hersteller und Importeure arbeiten mit EU-CEG, Mitteilungen, Produktdaten, Inhaltsstoffen, Emissionsdaten, Beipackzetteln, Warnhinweisen, Verpackungsunterlagen, Marktanteilsdaten und Fernabsatzthemen. Gerade Vape-/E-Liquid-Anbieter, Importeure und Onlinehaendler haben viele SKUs und staendig neue Varianten.

Zielgruppen:

- E-Zigaretten-Haendler
- Vape- und E-Liquid-Marken
- Importeure von E-Zigaretten und Nachfuellbehaeltern
- Tabakprodukt-Hersteller
- Tabakgrosshaendler
- Onlinehaendler
- Private-Label-Anbieter
- auslaendische Hersteller mit Deutschlandvertrieb

Was wir anbieten koennen:

- EU-CEG-Produktakte pro SKU
- Mitteilungsnachweise
- Inhaltsstoff- und Emissionsunterlagen
- Verpackungs- und Warnhinweisordner
- Beipackzettel-/Gebrauchsinformationen-Ablage
- Marktanteils-/Jahresdatenordner
- Fernabsatz-/Registrierungsunterlagen
- Fristen fuer neue Produkte, Aenderungen und Jahresmeldungen
- Export fuer Berater, Hersteller, Behoerde, Importeur

Was wir nicht machen:

- keine Entscheidung, ob ein Produkt verkehrsfaehig ist
- keine Inhaltsstofffreigabe
- keine Verpackungs-/Warnhinweisfreigabe
- keine EU-CEG-Einreichung als Fachleistung ohne Partner

Geld:

- 99 bis 499 EUR monatlich fuer kleine Anbieter
- 499 bis 2.000 EUR monatlich fuer Sortimente mit vielen SKUs
- Setup 500 bis 10.000 EUR bei Produktdatenimport
- sehr guter SEO-Fit, weil viele Anbieter nach konkreten EU-CEG- und E-Zigaretten-Fragen suchen

SEO-Seiten:

- "EU-CEG Unterlagen verwalten"
- "E-Zigarette Mitteilung BVL"
- "E-Liquid Produktakte"
- "Tabakerzeugnisse Mitteilungspflicht"
- "Vape Produktdaten Nachweise"

Quellen:

- BVL Tabakerzeugnisse und E-Zigaretten: https://www.bvl.bund.de/DE/Arbeitsbereiche/03_Verbraucherprodukte/02_Verbraucher/05_Tabakerzeugnisse/bgs_Tabakerzeugnisse_node.html
- BVL Mitteilungspflichten Tabak/E-Zigaretten: https://www.bvl.bund.de/DE/Arbeitsbereiche/03_Verbraucherprodukte/03_AntragstellerUnternehmen/04_Tabakerzeugnisse_E-Zigaretten/01_Mitteilungspflicht/bgs_tabakerzeugnisse_mitteilungspflicht_node.html
- TabakerzV Paragraph 24: https://www.gesetze-im-internet.de/tabakerzv/__24.html
- TabakerzV Inhaltsuebersicht: https://www.gesetze-im-internet.de/tabakerzv/

### 56.2 Spielzeug-, 2. ProdSV-, CE- und Sicherheitsakten

Warum relevant:

Spielzeug ist ein extrem gutes Produktaktenfeld: Hersteller, Importeure und Onlinehaendler brauchen technische Unterlagen, EG-Konformitaetserklaerung, CE, Sicherheitsbeurteilung, Pruefberichte, Warnhinweise, Gebrauchsanleitung, Chargen-/Modellnummern, Lieferantendokumente und Rueckrufunterlagen. Dazu kommt: Kindersicherheit erzeugt hohe Kontroll- und Abmahnangst.

Zielgruppen:

- Spielzeughersteller
- Importeure
- Amazon-/Marktplatzseller
- Etsy-/Handmade-Anbieter mit Spielzeugnaehe
- Baby-/Kinderartikelshops
- Private-Label-Haendler
- Pluesch-/Holzspielzeuganbieter
- Werbemittelanbieter mit Spielzeug-/Kinderartikeln

Was wir anbieten koennen:

- Spielzeug-Produktakte pro SKU
- technische Unterlagen-Ablage
- EG-Konformitaetserklaerungsordner
- Sicherheitsbeurteilungs-/Pruefberichtordner
- Warnhinweis- und Gebrauchsanleitungsablage
- Chargen-/Modellnummernfelder
- Lieferantenerklaerungen
- Rueckruf-/Beschwerdeordner
- Export fuer Marktueberwachung, Marktplatz, Importeur, Labor, Berater

Was wir nicht machen:

- keine Sicherheitsbeurteilung automatisiert erstellen
- keine CE-Freigabe
- keine Einstufung, ob ein Produkt Spielzeug ist
- keine Labor-/Pruefentscheidung

Geld:

- 49 bis 299 EUR monatlich fuer kleine Seller
- 299 bis 1.500 EUR monatlich fuer groessere Sortimente
- Setup 300 bis 8.000 EUR
- sehr stark fuer SEO und Produktdatenimport

SEO-Seiten:

- "Spielzeug technische Unterlagen"
- "Spielzeug CE Unterlagen verwalten"
- "2 ProdSV Konformitaetserklaerung"
- "Spielzeug Sicherheitsbeurteilung Nachweise"
- "Spielzeug Importeur Produktakte"

Quellen:

- 2. ProdSV: https://www.gesetze-im-internet.de/gpsgv_2/
- 2. ProdSV Paragraph 3: https://www.gesetze-im-internet.de/gpsgv_2/__3.html
- 2. ProdSV Paragraph 14: https://www.gesetze-im-internet.de/gpsgv_2/__14.html
- BVL Spielwaren: https://www.bvl.bund.de/DE/Arbeitsbereiche/03_Verbraucherprodukte/03_AntragstellerUnternehmen/01_Spielwaren/bgs_spielwaren_node.html
- BAuA Sichere Produkte im Onlinehandel: https://www.baua.de/DE/Angebote/Publikationen/Praxis/Onlinehandel.pdf

### 56.3 PSA-, Schutzkleidung- und CE-Produktakte

Warum relevant:

Persoenliche Schutzausruestungen sind ein starker B2B-Produktmarkt: Handschuhe, Schutzbrillen, Schutzkleidung, Atemschutz, Absturzsicherung, Gesichtsschutz, Sicherheitsschuhe. Hersteller, Importeure, Haendler und Workwear-Anbieter brauchen EU-Konformitaetserklaerungen, CE-Unterlagen, Baumuster-/Pruefunterlagen, Gebrauchsanweisungen, Kategorien, Normen, Lieferantendaten und Marktueberwachungsunterlagen.

Zielgruppen:

- Workwear- und PSA-Haendler
- Importeure von Schutzprodukten
- Hersteller von PSA
- Onlinehaendler
- Arbeitsschutz-Grosshaendler
- Private-Label-Marken
- Medizin-/Labor-/Industriebedarf-Haendler
- Outdoor-/Kletterausruestungsanbieter

Was wir anbieten koennen:

- PSA-Produktakte pro Artikel
- EU-Konformitaetserklaerungsablage
- Pruefbericht-/Baumusterordner
- Gebrauchsanweisungs- und Kennzeichnungsablage
- Normen-/Kategorie-Felder als nutzerbefuellte Struktur
- Lieferantenerklaerungen
- Rueckruf-/Beschwerdeordner
- Export fuer B2B-Kunden, Marktueberwachung, Labor, Berater

Was wir nicht machen:

- keine Einstufung der PSA-Kategorie
- keine CE-/Normenfreigabe
- keine technische Pruefung
- keine Aussage, ob PSA fuer einen Arbeitseinsatz geeignet ist

Geld:

- 99 bis 499 EUR monatlich fuer Haendler
- 499 bis 2.000 EUR monatlich bei grossen Sortimenten
- Setup 500 bis 10.000 EUR
- guter Partnerkanal zu Laboren, Pruefstellen, CE-Beratern

SEO-Seiten:

- "PSA Konformitaetserklaerung verwalten"
- "Schutzhandschuhe CE Unterlagen"
- "PSA Produktakte"
- "Schutzkleidung EU 2016/425 Unterlagen"
- "PSA Importeur Nachweise"

Quellen:

- PSA-DG: https://www.gesetze-im-internet.de/psa-dg/BJNR047500019.html
- BAuA PSA FAQ: https://www.baua.de/DE/Themen/Arbeitsgestaltung/Sichere-Produkte/Persoenliche-Schutzausruestungen/FAQ/PSA-FAQ
- BAuA CE bei PSA: https://www.baua.de/DE/Themen/Arbeitsgestaltung/Sichere-Produkte/Persoenliche-Schutzausruestungen/FAQ/PSA-FAQ-02.html

### 56.4 Funkanlagen-, IoT-, RED-Cyber- und CRA-Vorbereitungsakte

Warum relevant:

Das ist ein modernes, sehr starkes Zukunftsfeld. Funkanlagen, IoT-Geraete, WLAN-/Bluetooth-Produkte und Produkte mit digitalen Elementen bekommen immer mehr Cyber-/Produktanforderungen. RED-Cyberanforderungen gelten seit 1. August 2025 fuer betroffene Funkanlagen. Der Cyber Resilience Act ist in Kraft; Berichtspflichten starten am 11. September 2026, Hauptpflichten am 11. Dezember 2027. Hersteller und Importeure brauchen technische Unterlagen, Konformitaetsnachweise, Security-Dokumentation, Schwachstellenprozesse, Update-/Supportzeitraum, Incident-/Vulnerability-Reports und CE-Unterlagen.

Zielgruppen:

- IoT-Hersteller
- Smart-Home-Anbieter
- Bluetooth-/WLAN-Geraeteimporteure
- Elektronik-Private-Label-Brands
- Maschinenbauer mit vernetzten Komponenten
- Software-/Hardware-Hersteller
- SaaS plus Hardware-Anbieter
- MedTech-/Fitness-/Wearable-Anbieter, soweit nicht spezialrechtlich ausgeschlossen
- Marktplatzseller fuer Elektronik

Was wir anbieten koennen:

- RED-/CRA-Vorbereitungsakte
- technische Cyber-Unterlagenablage
- CE-/Konformitaetserklaerungsordner
- Schwachstellen-/Incident-Register
- Update-/Supportzeitraum-Dokumentation
- Security-by-design-Nachweisordner als Vorlage
- Melde-/Fristenkalender fuer CRA-Reporting
- Lieferanten- und Komponentenunterlagen
- Export fuer Cyberberater, Prueflabor, Marktueberwachung, Hersteller

Was wir nicht machen:

- keine Cyber-Konformitaetsbewertung
- keine Schwachstellenbewertung als Fachurteil
- keine Garantie, dass ein Produkt RED-/CRA-konform ist
- keine Incident-Meldung ohne Fachfreigabe

Geld:

- 199 bis 999 EUR monatlich fuer kleine Hersteller/Importeure
- 999 bis 5.000 EUR monatlich fuer groessere Hardware-/IoT-Portfolios
- Setup 1.000 bis 25.000 EUR
- sehr stark als Zukunftsmodul und Partnerfunnel zu Cyber-/CE-Laboren

SEO-Seiten:

- "RED Cybersecurity Unterlagen"
- "IoT CE Cyber Nachweise"
- "Cyber Resilience Act Produktakte"
- "CRA Schwachstellen Meldung vorbereiten"
- "Funkanlagenrichtlinie Cyber Dokumentation"

Quellen:

- BSI RED-Cybersicherheit: https://www.bsi.bund.de/DE/Service-Navi/Presse/Pressemitteilungen/Presse2025/250130_RED_Cybersicherheit.html
- EU Radio Equipment Directive: https://single-market-economy.ec.europa.eu/sectors/electrical-and-electronic-engineering-industries-eei/radio-equipment-directive-red_en
- EU Cyber Resilience Act: https://digital-strategy.ec.europa.eu/en/policies/cyber-resilience-act
- EU CRA Reporting: https://digital-strategy.ec.europa.eu/en/policies/cra-reporting
- BSI Cyber Resilience Act: https://www.bsi.bund.de/DE/Themen/Unternehmen-und-Organisationen/Informationen-und-Empfehlungen/Cyber_Resilience_Act/cyber_resilience_act.html

### 56.5 Lebensmittel fuer besondere Verbrauchergruppen, FSMP- und BVL-Anzeigeakte

Warum relevant:

Neben Nahrungsergaenzungsmitteln gibt es Lebensmittel fuer bestimmte Verbrauchergruppen, insbesondere Lebensmittel fuer besondere medizinische Zwecke. Hier gibt es Anzeigeverfahren beim BVL, Etikettenmuster, Rezeptur-/Naehrwertunterlagen, wissenschaftliche Begruendungsunterlagen, Chargen, Lieferanten, Reklamationen und Behoerdenkorrespondenz. Das ist teurer und sensibler als normale Supplements.

Zielgruppen:

- Hersteller von bilanzierten Diaeten/FSMP
- Medical-Nutrition-Anbieter
- D2C-Health-Food-Marken
- Importeure
- Lohnhersteller
- Apotheken-/Sanitaetshaus-nahe Anbieter
- Anbieter von Tagesrationen fuer gewichtskontrollierende Ernaehrung

Was wir anbieten koennen:

- FSMP-/Speziallebensmittel-Produktakte
- BVL-Anzeigeunterlagen
- Etikettenmuster-Ablage
- Rezeptur-/Naehrwertunterlagen
- Lieferanten- und Laborordner
- Chargen-/Rueckruf-/Reklamationsordner
- Behoerdenkorrespondenz
- Export fuer Lebensmittelberater, Labor, Hersteller, Behoerde

Was wir nicht machen:

- keine Entscheidung, ob ein Produkt FSMP ist
- keine medizinische/ernaehrungsphysiologische Bewertung
- keine Verkehrfaehigkeitsfreigabe
- keine Health-Claims-/Kennzeichnungsfreigabe

Geld:

- 199 bis 999 EUR monatlich
- Setup 500 bis 10.000 EUR
- deutlich hoeherwertiger als normales NEM, aber kleinerer Markt
- sehr guter Partnerkanal zu Laboren und Lebensmittelrechtlern

SEO-Seiten:

- "FSMP BVL Anzeige Unterlagen"
- "Lebensmittel fuer besondere medizinische Zwecke Produktakte"
- "Bilanzierte Diaet Anzeige BVL"
- "Speziallebensmittel Etikett Unterlagen"

Quellen:

- BVL Anzeigeverfahren Lebensmittel fuer bestimmte Verbrauchergruppen: https://www.bvl.bund.de/DE/Arbeitsbereiche/01_Lebensmittel/04_AntragstellerUnternehmen/02_DiaetetischeLM/04_AnzeigeVerf/lm_diaetLM_anzVerf_node.html
- BVL Lebensmittel fuer besondere medizinische Zwecke: https://www.bvl.bund.de/DE/Arbeitsbereiche/01_Lebensmittel/04_AntragstellerUnternehmen/02_DiaetetischeLM/03_LM_bestimmte-Verbrauchergruppen_MedizinZwecke/LM_bestimmte-Verbrauchergruppen_medizin_node.html
- BVL Modernisierung Anzeigeverfahren 2026: https://www.bvl.bund.de/SharedDocs/Fachmeldungen/01_lebensmittel/2026/01_Fa_Anzeigeverfahren_NEM.html

### 56.6 Verbrauchsteuer-, EMCS-, Steuerlager- und Genussmittelakte

Warum relevant:

Alkohol, Tabak, Kaffee, Energieerzeugnisse und andere verbrauchsteuerpflichtige Waren erzeugen viel Zoll-/Steuerdokumentation: Steuerlager, EMCS/e-VD, Beforderung unter Steueraussetzung, Empfangsbestaetigungen, Lagerbuchfuehrung, Beleghefte, Steueranmeldungen, Erlaubnisse, Sicherheitsleistungen und Zollkorrespondenz. Das ist sehr zahlungsstark, aber steuerlich sensibel.

Zielgruppen:

- Alkoholhersteller
- Brennereien
- Wein-/Schaumweinhandel mit Steuerlagerbezug
- Kaffeeroester
- Tabak-/Vape-/Genussmittelhaendler
- Energie-/Mineraloelbetriebe
- Steuerlagerinhaber
- registrierte Empfaenger/Versender
- Logistiker fuer verbrauchsteuerpflichtige Waren

Was wir anbieten koennen:

- EMCS-/e-VD-Akte
- Steuerlager-Unterlagenordner
- Lagerbuch-/Belegheft-Ablage
- Steueranmeldungs- und Erlaubnisordner
- Beforderungs- und Empfangsnachweise
- Zollkorrespondenz
- Fristenkalender fuer Meldungen, Erlaubnisse, Steueranmeldungen
- Export fuer Steuerberater, Zollberater, Hauptzollamt, internen Verantwortlichen

Was wir nicht machen:

- keine Steuerberechnung als verbindliche Aussage
- keine Zoll-/Verbrauchsteuerberatung
- keine EMCS-Transaktion ohne Fachprozess
- keine Entscheidung, ob Steuerlager/Erlaubnis noetig ist

Geld:

- 199 bis 1.500 EUR monatlich
- Setup 1.000 bis 15.000 EUR
- sehr gutes Premium-/Partnerfeld, aber nur mit Steuer-/Zollberaterkanal sauber skalierbar

SEO-Seiten:

- "EMCS Unterlagen verwalten"
- "e-VD Belege archivieren"
- "Steuerlager Lagerbuchfuehrung digital"
- "Verbrauchsteuer Belegheft"
- "Zoll Verbrauchsteuer Unterlagen"

Quellen:

- Zoll EMCS: https://www.zoll.de/DE/Fachthemen/Steuern/Verbrauchsteuern/EMCS/Einfuehrung/einfuehrung.html
- Zoll e-VD/EMCS Verfahren: https://www.zoll.de/DE/Fachthemen/Steuern/Verbrauchsteuern/Alkohol-Tabakwaren-Kaffee/Steueraussetzung/Befoerderung-unter-Steueraussetzung/Elektronisches-Verfahren-mit-EMCS/elektronisches-verfahren-mit-emcs_node.html
- Zoll Buchfuehrungspflichten: https://www.zoll.de/DE/Fachthemen/Steuern/Verbrauchsteuern/Alkohol-Tabakwaren-Kaffee/Pflichten-Beteiligten/Buchfuehrungspflichten/buchfuehrungspflichten_node.html
- Zoll Steuerlager Grundlagen: https://www.zoll.de/DE/Fachthemen/Steuern/Verbrauchsteuern/Alkohol-Tabakwaren-Kaffee/Steueraussetzung/Steuerlager/Grundlagen-zum-Steuerlager/grundlagen-zum-steuerlager_node.html

### 56.7 Loesemittelbilanz-, 31. BImSchV- und VOC-Anlagenakte

Warum relevant:

Die 31. BImSchV ist fuer viele Betriebe mit Loesemitteln relevant: Lackierung, Beschichtung, Druck, Klebstoffe, Oberflaechenbehandlung, Fahrzeuglackierung, Holz-/Kunststoffbeschichtung. Sie erzeugt Anzeigen, Messberichte, Loesemittelbilanz, Reduzierungsplan, Aufbewahrung am Betriebsort und Behoerdenvorlage. Das passt perfekt zur Betreiberakte.

Zielgruppen:

- Lackierereien
- Kfz-Reparaturlackierer
- Druckereien
- Beschichtungsbetriebe
- Klebstoff-/Kaschierbetriebe
- Holz- und Moebelindustrie
- Kunststoffbeschichter
- Oberflaechenbehandler
- Industrie mit VOC-Anlagen

Was wir anbieten koennen:

- Loesemittelbilanz-Akte
- VOC-Stoffstromordner
- Messberichtablage
- Reduzierungsplan-Ordner
- Anzeige-/Aenderungsunterlagen
- Behoerdenkorrespondenz
- Fristenkalender fuer Messungen/Berichte
- Export fuer Messstelle, Umweltberater, Behoerde

Was wir nicht machen:

- keine Loesemittelbilanz als fachliche Endberechnung
- keine Grenzwertbewertung
- keine Entscheidung, ob eine Anlage anzeigepflichtig ist
- keine Messstellenleistung

Geld:

- 99 bis 799 EUR monatlich
- Setup 500 bis 8.000 EUR
- sehr guter Betriebsakten-Fit, vor allem fuer Lackier-/Druck-/Beschichtungsbranchen

SEO-Seiten:

- "Loesemittelbilanz digital"
- "31 BImSchV Unterlagen"
- "VOC Messbericht verwalten"
- "Loesemittelverordnung Nachweise"
- "Reduzierungsplan 31 BImSchV Ablage"

Quellen:

- 31. BImSchV: https://www.gesetze-im-internet.de/bimschv_31_2024/31._BImSchV.pdf
- 31. BImSchV Paragraph 5: https://www.gesetze-im-internet.de/bimschv_31_2024/__5.html
- UBA Loesemittelverordnung: https://www.umweltbundesamt.de/system/files/medien/publikation/long/2312.pdf

### 56.8 Produktrueckruf-, Safety-Gate- und Marktueberwachungsakte

Warum relevant:

Das ist kein einzelnes Branchenmodul, sondern ein Querschnittsmodul fuer alle Produktakten. GPSR und Produktsicherheit machen Rueckrufprozesse, Beschwerden, Sicherheitsmeldungen, Korrekturmassnahmen, Safety Business Gateway, Chargen, Kundenlisten und Haendlerinformationen extrem wichtig. Viele Haendler merken erst im Ernstfall, dass sie keine sauberen Daten haben.

Zielgruppen:

- alle Hersteller/Importeure von Verbraucherprodukten
- Onlinehaendler
- Marktplatzseller
- Spielzeug-, Elektronik-, PSA-, Kosmetik-, Supplement-, Haushaltswarenanbieter
- B2B-Haendler mit Eigenmarken
- Fulfillment-/Importagenturen

Was wir anbieten koennen:

- Rueckrufakte pro Produkt/Charge
- Beschwerde- und Vorfallordner
- Korrekturmassnahmen-Tracker
- Haendler-/Kundenlisten-Export
- Safety-Gate-/Safety-Business-Gateway-Unterlagenablage
- Rueckruftext-/Kundeninfo-Vorlagen zur eigenen Befuellung
- Foto-, SKU-, Chargen- und Verkaufszeitraumdaten
- Export fuer Marktueberwachung, Berater, Marktplatz, interne Leitung

Was wir nicht machen:

- keine Entscheidung, ob ein Rueckruf rechtlich erforderlich ist
- keine Risikobewertung als Fachurteil
- keine Behoerdenmeldung ohne Freigabe/Fachpartner
- keine Produktsicherheitsfreigabe

Geld:

- 49 bis 299 EUR monatlich als Add-on
- 299 bis 2.000 EUR monatlich bei groesseren Sortimenten
- sehr hoher Paywall-Wert: im Ernstfall zahlt der Kunde fuer schnellen Export
- perfekt als Premiumfunktion in allen Produktakten

SEO-Seiten:

- "Produktrueckruf Unterlagen"
- "Safety Business Gateway Rueckruf vorbereiten"
- "GPSR Rueckrufmanagement"
- "Produktbeschwerden dokumentieren"
- "Marktueberwachung Produktakte"

Quellen:

- BAuA Rueckrufmanagement: https://www.baua.de/DE/Themen/Monitoring-Evaluation/Marktueberwachung-Produktsicherheit/Rueckrufmanagement
- BAuA Rueckruf FAQ GPSR: https://www.baua.de/DE/Themen/Monitoring-Evaluation/Marktueberwachung-Produktsicherheit/Rueckrufmanagement/FAQ/FAQ
- Safety Business Gateway: https://webgate.ec.europa.eu/safety-business-gateway/
- EU Safety Gate: https://ec.europa.eu/safety-gate/
- BAuA gefaehrliche Produkte: https://www.baua.de/DE/Themen/Monitoring-Evaluation/Marktueberwachung-Produktsicherheit/Datenbank/Produktsicherheit_form

### 56.9 Aerosolpackungs-, Spruehdosen- und Druckbehaelter-Produktakte

Warum relevant:

Aerosolpackungen sind eine kleine, aber praktische Produktnische: Kosmetik, Reinigungsmittel, technische Sprays, Lacke, Pflegeprodukte, Lebensmittel-/Sahnesprays, Insektensprays. Es gibt Kennzeichnung, Sicherheitsanforderungen, Druck-/Behaelterdaten, Rezeptur-/Inhaltsstoffunterlagen, Lieferantendaten und teilweise Ueberschneidungen mit CLP, Biozid, Kosmetik, WRMG oder Lebensmittel.

Zielgruppen:

- Aerosolhersteller
- Private-Label-Spraymarken
- Kosmetik-/Deo-/Haarspray-Anbieter
- Reinigungsmittel-/Technikspray-Anbieter
- Autozubehoer-/Lackspray-Haendler
- Importeure
- Lohnabfueller

Was wir anbieten koennen:

- Aerosol-Produktakte
- Kennzeichnungs-/Konformitaetsunterlagen
- Rezeptur-/Inhaltsstoffablage
- Druckbehaelter-/Lieferantendokumente
- Sicherheitsdatenblatt-/CLP-Ordner
- Chargen- und Rueckrufordner
- Export fuer Berater, Labor, Lieferant, Marktueberwachung

Was wir nicht machen:

- keine Aerosol-/Druckbehaelterfreigabe
- keine CLP-/Gefahrstoffklassifizierung
- keine Rezepturpruefung
- keine Aussage, ob ein Produkt in Verkehr gebracht werden darf

Geld:

- 49 bis 299 EUR monatlich
- 299 bis 999 EUR monatlich bei groesseren Sortimenten
- guter Zusatz zu Kosmetik, WRMG, Biozid und Chemie

SEO-Seiten:

- "Aerosolpackungsverordnung Unterlagen"
- "Spruehdose Produktakte"
- "13 ProdSV Aerosol Kennzeichnung"
- "Aerosol Produktdaten verwalten"

Quellen:

- 13. ProdSV Aerosolpackungsverordnung: https://www.gesetze-im-internet.de/gsgv_13/BJNR380500002.html
- 13. ProdSV Paragraph 4: https://www.gesetze-im-internet.de/gsgv_13/__4.html
- 13. ProdSV Paragraph 5: https://www.gesetze-im-internet.de/gsgv_13/__5.html

### 56.10 Duengeprodukt-, Bodenhilfsstoff- und Gartenbau-Produktakte

Warum relevant:

Duengemittel, Bodenhilfsstoffe, Kultursubstrate und EU-Duengeprodukte sind fuer Gartenbau, Agrarhandel, Grow-Shops, Kompost-/Gaerproduktanbieter und Private-Label-Hersteller interessant. Es geht um Kennzeichnung, Produktdaten, Rezepturen, Analyseberichte, Ausgangsstoffe, CE-Duengeprodukte, Lieferantenunterlagen, Chargen und Vertrieb in Deutschland/EU.

Zielgruppen:

- Duengemittelhersteller
- Gartenbau-/Agrarhandel
- Grow-Shops
- Kompost-/Gaerproduktanbieter
- Private-Label-Duenger
- Kultursubstrat-Hersteller
- Importeure
- Onlinehaendler fuer Pflanzen-/Gartenprodukte

Was wir anbieten koennen:

- Duengeprodukt-Produktakte
- Kennzeichnungs-/Etikettenordner
- Analyseberichte
- Rezeptur-/Ausgangsstoffunterlagen
- CE-/EU-Duengeprodukt-Unterlagen
- Lieferanten- und Chargenordner
- Export fuer Labor, Berater, Kunde, Marktueberwachung

Was wir nicht machen:

- keine Entscheidung, ob ein Produkt ein Duengemittel ist
- keine Kennzeichnungs-/Inverkehrbringensfreigabe
- keine Analysebewertung
- keine duengerechtliche Beratung

Geld:

- 49 bis 299 EUR monatlich
- 299 bis 1.000 EUR monatlich fuer groessere Hersteller/Sortimente
- guter Zusatz zu Bioabfall, Gaerprodukt, Landwirtschaft und Produktakten

SEO-Seiten:

- "Duengemittel Kennzeichnung Unterlagen"
- "EU Duengeprodukt CE Unterlagen"
- "Duengemittel Produktakte"
- "Kultursubstrat Analyse Nachweise"

Quellen:

- Duengeverordnung/Duengemittelverordnung: https://www.gesetze-im-internet.de/d_mv_2012/BJNR248200012.html
- DuMV Anlage 2 Kennzeichnung: https://www.gesetze-im-internet.de/d_mv_2012/anlage_2.html
- BLE EU-Duengeprodukte: https://www.ble.de/DE/Themen/Landwirtschaft/EU-Duengeprodukte/eu-duengeprodukte_node.html

### 56.11 Bewertung dieser Runde

Beste neue Treffer:

1. RED-/CRA-/IoT-Cyber-Produktakte
   - modern, wachsend, hohe Zahlungsbereitschaft, ab 2026/2027 noch staerker
   - ideal fuer Partner mit Cyber-/CE-Laboren

2. Tabak/E-Zigaretten/EU-CEG
   - viele SKUs, konkrete Mitteilungen, viel Unsicherheit, gute Zahlungsbereitschaft

3. Spielzeug-Produktakte
   - sehr starker E-Commerce-/Import-Fit, hohe Angst vor Marktueberwachung und Rueckrufen

4. Produktrueckruf-/Safety-Gate-Akte
   - Querschnittsmodul fuer alle Produktakten
   - hoher Wert im Ernstfall, perfektes Premiumfeature

5. Verbrauchsteuer/EMCS/Steuerlager
   - hohe Tickets, aber steuerlich sensibel, nur mit Partnerfunnel

6. Loesemittelbilanz/31. BImSchV
   - sehr guter Betreiberakten-Fit fuer Lackiererei, Druck, Beschichtung

7. FSMP/BVL Speziallebensmittel
   - kleiner als NEM, aber hoeherer Wert pro Kunde

8. PSA-Produktakte
   - gutes B2B-Modul fuer Workwear/Import/Industriebedarf

9. Aerosol und Duengeprodukte
   - gute Zusatzmodule fuer bestehende Produktaktencluster

### 56.12 Konsequenz fuer die Plattform

Diese Runde zeigt, dass die Plattform nicht nur "Betriebsakte" sein darf. Die staerkere Verpackung ist:

Digitale Akten fuer Betrieb, Produkte, Mengen, Meldungen und Nachweise.

Neue Querschnittsfunktionen:

- Produktakte mit Varianten/SKUs
- Konformitaetsunterlagen-Ordner
- Mitteilungs-/Registerordner
- Chargen-/Rueckrufordner
- Marktueberwachungs-Export
- BVL-/BfR-/BUBE-/DEHSt-/Zoll-/EU-CEG-/Safety-Gateway-Ablage
- Fristen fuer Produktmitteilungen und Jahresdaten
- Partnerfreigabe-Workflow
- "Fachpartner anfragen"-Button je Akte
- Import aus CSV/Shop/ERP
- Massenupload fuer Zertifikate, Etiketten, SDB, Pruefberichte

Neue Website-Cluster:

- Produktakten fuer Haendler und Importeure
- CE- und Marktueberwachungsakten
- Meldeportal-Akten
- Rueckruf- und Safety-Gate-Akten
- Zoll- und Verbrauchsteuerakten
- Umwelt- und Stoffstromakten
- Betreiberakten fuer Anlagen und Fristen

Wichtig:

Diese Themen duerfen nicht als "wir machen dich compliant" verkauft werden. Der beste Claim bleibt:

Alle Unterlagen an einem Ort. Fristen im Blick. Export bereit, wenn Behoerde, Marktplatz, Kunde, Pruefer oder Berater fragt.

## 57. Goldfilter-Runde: die naechsten wirklich geldreichen Restthemen

Diese Runde ist kein Sammeln um des Sammelns willen. Aufgenommen werden nur Themen, die mindestens drei der fuenf Geldkriterien treffen:

- zahlungsbereite Zielgruppe,
- online sauber abbildbar,
- wiederkehrende Daten, Fristen oder Nachweise,
- klarer Export-/Nachweisordner,
- SEO- oder Akquisitionsdruck durch neue Pflichten, Marktplatzanforderungen oder Kundenfragen.

Wichtig bleibt: Das System verwaltet, erinnert, sammelt Belege, zeigt Quellen, prueft Vollstaendigkeit von Feldern und erzeugt Exporte. Es entscheidet nicht abschliessend, ob ein konkreter Betrieb rechtlich betroffen ist oder ob eine konkrete Dokumentation fachlich ausreicht.

### 57.1 PPWR-/Verpackungsdaten- und Rollenakte

Die neue EU-Verpackungsverordnung PPWR ist ein sehr starkes Thema, weil sie Verpackungshersteller, Marken, Importeure, Onlinehaendler, Fulfillment-Strukturen, Eigenmarken und Verpackungslieferanten gleichzeitig beruehrt. Die EU beschreibt die PPWR als Regelwerk ueber den gesamten Lebenszyklus von Verpackungen, von Gestaltung bis Abfallbehandlung. Die Zentrale Stelle Verpackungsregister weist bereits auf neue Rollenfragen hin, unter anderem durch die neue Herstellerdefinition ab dem 12.08.2026.

Quellen:

- EU-Kommission: https://environment.ec.europa.eu/topics/waste-and-recycling/packaging-waste_en
- Zentrale Stelle Verpackungsregister: https://www.verpackungsregister.org/
- ZSVR zur Herstellerdefinition: https://www.verpackungsregister.org/erste-schritte/hersteller-im-sinne-des-verpackungsgesetzes
- IHK Karlsruhe zur PPWR: https://www.ihk.de/karlsruhe/fachthemen/international/aktuelles/eu-neue-verpackungsverordnung-ppwr-6958308

Zielgruppen:

- Onlinehaendler mit Eigenmarken,
- Importeure,
- Verpackungshersteller,
- Lebensmittel-, Kosmetik-, Spielzeug-, Elektronik- und Haushaltswarenmarken,
- Fulfillment-Dienstleister,
- Grosshaendler,
- Agenturen und Berater, die Verpackungsdaten fuer Kunden vorbereiten.

Was wir anbieten koennen:

- Verpackungsdatenakte pro Produkt/SKU,
- Material-, Gewicht- und Lieferantendaten,
- Ablage fuer Rezyklat-, Recyclingfaehigkeits- und Materialnachweise,
- LUCID-/Systembeteiligungs-Belegordner,
- Rollen-/Verantwortlichkeitsnotizen als selbst gepflegte Kundenangabe,
- Fristen und Wiedervorlagen fuer Registrierungen, Vertraege und Lieferantennachweise,
- Exportpaket fuer Verpackungsberater, Pruefer, Systempartner oder interne Einkaufsabteilung,
- Massenimport fuer Shop-/ERP-Produktlisten.

Was das Tool nicht tun sollte:

- keine verbindliche Rollenentscheidung,
- keine Garantie, dass eine Verpackung PPWR-konform ist,
- keine rechtliche Bewertung der Recyclingfaehigkeit.

Monetarisierung:

- 99 bis 599 EUR monatlich fuer kleine bis mittlere Anbieter,
- 599 bis 2.500 EUR monatlich fuer groessere Marken oder viele SKUs,
- Setup 500 bis 15.000 EUR bei Datenimport, SKU-Mapping und Lieferantenbelegen,
- Partnerprovisionen fuer Verpackungsberater, Systempartner, Labore und Datenaufbereitung.

Warum stark:

PPWR ist breit, datenlastig, wiederkehrend und fuer viele Firmen unuebersichtlich. Das passt extrem gut zu einer Plattform, die nicht urteilt, sondern Daten, Nachweise und Exporte ordnet.

### 57.2 GPSR-Shoplisting-/Responsible-Person-Akte

Die GPSR gilt seit 13.12.2024. Sie ist fuer Onlinehaendler, Marktplatzseller und Importeure besonders interessant, weil Produktseiten, Hersteller-/Responsible-Person-Informationen, Warnhinweise und Produktkennungen in Shops und Marktplatzlisten sichtbar werden muessen. Das ist ideal fuer ein technisches Online-Tool, wenn es nur Feld-/Datenvollstaendigkeit scannt und nicht die rechtliche Richtigkeit bewertet.

Quellen:

- IHK Muenchen zur GPSR: https://www.ihk-muenchen.de/ratgeber/produktsicherheit/neue-produktsicherheitsverordnung/
- BMUKN GPSR FAQ: https://www.bundesumweltministerium.de/themen/chemikaliensicherheit/sicherheit-bei-produkten/sicherheit-bei-verbrauchernahen-produkten/fragen-und-antworten-zur-allgemeinen-eu-produktsicherheitsverordnung-vo-eu-nr-2023/988
- EU Access2Markets GPSR: https://trade.ec.europa.eu/access-to-markets/en/news/eus-general-product-safety-regulation-gpsr-new-era-consumer-protection
- BAuA Rueckrufmanagement FAQ: https://www.baua.de/DE/Themen/Monitoring-Evaluation/Marktueberwachung-Produktsicherheit/Rueckrufmanagement/FAQ

Zielgruppen:

- Shopify-, Shopware-, WooCommerce- und JTL-Shops,
- Amazon-, Kaufland-, Otto-, eBay- und Etsy-Seller,
- Importeure,
- D2C-Marken,
- Agenturen, die Shops betreuen,
- Hersteller mit Haendlernetz.

Was wir anbieten koennen:

- Shop-Scanner fuer Produktseiten,
- Pruefung auf vorhandene Felder: Hersteller, Responsible Person, Produktkennung, Warnhinweise, Sicherheitsinformationen, Downloadlinks,
- fehlende Felder als Aufgabenliste,
- Bulk-Import und Export fuer Produktdaten,
- Belegakte pro Produkt mit Lieferantenerklaerungen, Sicherheitsdaten, Anleitungen und Warnhinweisen,
- Marktplatz-Exportpaket,
- Rueckruf-/Meldungsakte mit Zeitlinie und Dokumentenordner.

Was das Tool nicht tun sollte:

- nicht bewerten, ob ein Produkt sicher ist,
- nicht entscheiden, welche Warnhinweise inhaltlich genuegen,
- nicht behaupten, dass ein Listing rechtlich ausreicht.

Monetarisierung:

- 49 bis 299 EUR monatlich fuer kleine Shops,
- 299 bis 1.500 EUR monatlich fuer groessere Shops und Agenturen,
- Zusatzpreis pro Produktvolumen, Shop-Connector oder Marktplatzkanal,
- Setup fuer Datenbereinigung und Produktmapping.

Warum stark:

Das ist einer der besten Sofort-MVPs. Es ist online, technisch scanbar, fuer Haendler akut spuerbar und deutlich weniger heikel als eine Rechtsentscheidung. Der sichtbare Nutzen ist: fehlende Produktdaten finden, Aufgaben erzeugen, Nachweise ordnen, Export bereitstellen.

### 57.3 ESPR-/Digitaler-Produktpass-/Produktdatenraum

Die neue Oekodesign-Verordnung und der Digitale Produktpass sind langfristig eines der groessten Produktdaten-Themen. Das BMWK beschreibt den Digitalen Produktpass als Instrument, das Akteure entlang des Produktlebenszyklus mit Informationen versorgen soll. Die VDMA weist darauf hin, dass der Anwendungsbereich der Oekodesign-Regeln deutlich ueber energieverbrauchsrelevante Produkte hinausgeht.

Quellen:

- BMWK zum Digitalen Produktpass: https://www.bundeswirtschaftsministerium.de/Redaktion/DE/Schlaglichter-der-Wirtschaftspolitik/2024/06/09-oeko-design-verordnung.html
- IHK Bergische zur neuen Oekodesign-Verordnung: https://www.ihk.de/bergische/innovation-und-umwelt/umweltberatung/oekodesign/die-neue-eu-oekodesign-verordnung-6233202
- VDMA zu Oekodesign und Digitalem Produktpass: https://www.vdma.eu/oekodesign-verordnung-digitaler-produktpass

Zielgruppen:

- Hersteller,
- Importeure,
- Textil- und Fashion-Marken,
- Moebelhersteller,
- Elektronik- und Haushaltswarenanbieter,
- Maschinen- und Komponentenhersteller,
- Bauproduktanbieter,
- Produktdatenagenturen.

Was wir anbieten koennen:

- Produktdatenraum pro SKU oder Produktfamilie,
- Material-, Komponenten-, Lieferanten- und Reparaturdaten,
- Dokumente zu Haltbarkeit, Reparierbarkeit, Recycling, Ersatzteilen und technischen Informationen,
- QR-/Datenlink-Vorbereitung,
- Versionierung von Produktpass-Daten,
- Export fuer DPP-Dienstleister, Berater, Kunden oder interne Produktteams,
- Datenlueckenliste fuer Einkauf, Entwicklung und Lieferanten.

Was das Tool nicht tun sollte:

- keine Garantie, dass ein Digitaler Produktpass vollstaendig oder fachlich ausreichend ist,
- keine Produktklassifizierung als Rechtsurteil,
- keine Berechnung technischer Konformitaet ohne qualifizierten Partner.

Monetarisierung:

- 199 bis 1.500 EUR monatlich je nach SKU-Zahl,
- 1.500 bis 10.000 EUR monatlich fuer groessere Herstellergruppen,
- Setup 1.000 bis 50.000 EUR fuer Datenimport, Lieferantenstruktur und Produktdatenmodell,
- Partnerumsatz mit DPP-Anbietern, technischen Beratern und Datenaufbereitern.

Warum stark:

Das ist weniger Sofort-Cash als GPSR, aber langfristig sehr gross. Wer die Produktdaten frueh strukturiert, hat spaeter einen Wechselgrund gegen Excel, Ordner und E-Mail-Chaos.

### 57.4 Textil-EPR-/Fashion-Datenakte

Die EU arbeitet an erweiterten Herstellerpflichten fuer Textilien. Die ueberarbeitete Abfallrahmenrichtlinie ist am 16.10.2025 in Kraft getreten. Die EU-Kommission und das EU-Parlament beschreiben verpflichtende, harmonisierte EPR-Regeln fuer Textilien, bei denen Hersteller Kosten fuer Sammlung, Sortierung und Recycling tragen sollen. Mitgliedstaaten muessen die Regeln umsetzen; fuer Kleinstunternehmen gibt es laengere Uebergangszeiten.

Quellen:

- EU-Kommission zur ueberarbeiteten Abfallrahmenrichtlinie: https://environment.ec.europa.eu/news/revised-waste-framework-directive-enters-force-2025-10-16_en
- EU Textiles Strategy: https://environment.ec.europa.eu/strategy/textiles-strategy_en
- EU-Parlament zu Textil- und Lebensmittelabfaellen: https://www.europarl.europa.eu/news/de/press-room/20250905IPR30172/neue-eu-vorschriften-zur-reduzierung-von-textil-und-lebensmittelabfallen
- IHK Nordschwarzwald zur Umsetzung: https://www.ihk.de/nordschwarzwald/innovationn/umweltschutz-umwelt-akademie/umweltschutz/news-umweltschutz/lebensmittelverschwendung-6755724

Zielgruppen:

- Fashion-Brands,
- Textilimporteure,
- Home-Textile-Anbieter,
- Schuh- und Accessoire-Anbieter,
- Onlinehaendler mit Eigenmarken,
- Marktplatzseller,
- Grosshaendler.

Was wir anbieten koennen:

- Textilproduktakte pro Artikel,
- Materialzusammensetzung, Gewicht, Kategorie und Lieferant,
- Verkaufslaender und Mengen,
- Vorbereitung fuer EPR-Registrierungen und Meldungen,
- DPP-nahe Datenfelder,
- Nachweisordner fuer Lieferanten- und Produktinformationen,
- Export an EPR-Systeme, Berater, Kunden oder interne Nachhaltigkeitsteams.

Was das Tool nicht tun sollte:

- keine finale EPR-Pflichtentscheidung,
- keine verbindliche Gebuehrenberechnung,
- keine Nachhaltigkeitsaussage als Siegel.

Monetarisierung:

- 99 bis 799 EUR monatlich fuer kleine bis mittlere Marken,
- 799 bis 5.000 EUR monatlich fuer groessere Sortimente,
- Setup 1.000 bis 30.000 EUR fuer Artikel- und Materialdaten,
- Zusatzumsatz mit Datenaufbereitung, Lieferantenabfragen und Partnern.

Warum stark:

Fashion und Textil sind datenchaotisch, international und unter Druck. Das Thema passt zu Produktakte, PPWR, DPP, VSME und Lieferkettenakte. Gute Kombi fuer Branchenpakete.

### 57.5 Forced-Labour-/Lieferketten-Belegakte

Die EU-Verordnung zum Verbot von Produkten aus Zwangsarbeit wurde als Verordnung EU 2024/3015 beschlossen. Die EU-Kommission nennt den 14.12.2027 als Anwendungsdatum. Das Thema ist fuer Importeure, Marken und Handelsunternehmen stark, weil sie Belege, Lieferanteninformationen, Einkaufsdaten, Produkt-/Chargenbezug und Reaktionsfaehigkeit brauchen, wenn Kunden, Behoerden oder Plattformen nachfragen.

Quellen:

- EU-Kommission Forced Labour Regulation: https://single-market-economy.ec.europa.eu/single-market/goods/forced-labour-regulation_en
- EUR-Lex Zusammenfassung: https://eur-lex.europa.eu/DE/legal-content/summary/ban-on-forced-labour-products-on-the-eu-market.html
- IHK Duesseldorf: https://www.ihk.de/duesseldorf/aussenwirtschaft/rechtsfragen/internationale-vertraege/eu-verbot-von-produkten-bei-herstellung-durch-zwangsarbeit-5645046
- IHK Nord Westfalen: https://www.ihk.de/nordwestfalen/international/lieferketten/verbot-von-zwangsarbeit-5972274

Zielgruppen:

- Importeure,
- D2C- und Eigenmarken,
- Textil, Elektronik, Solar, Moebel, Spielzeug, Haushaltswaren,
- Automotive-Zulieferer,
- Lebensmittel- und Agrarimporteure,
- Grosshaendler.

Was wir anbieten koennen:

- Lieferanten-Belegakte,
- Lieferantenselbstauskuenfte,
- Herkunfts-, Produktions- und Chargenbezug,
- Dokumentenordner fuer Auditberichte, Zertifikate, Einkaufsunterlagen und Kommunikation,
- Aufgaben fuer fehlende Lieferantendaten,
- Exportpaket fuer Kunde, Berater, Einkauf, Auditor oder Behoerde,
- Jahres-/Quartalsreview fuer kritische Lieferanten.

Was das Tool nicht tun sollte:

- kein Siegel "frei von Zwangsarbeit",
- keine finale Risikobewertung als Rechts- oder Compliance-Urteil,
- keine eigenstaendige Lieferkettenpruefung ohne qualifizierten Partner.

Monetarisierung:

- 199 bis 999 EUR monatlich fuer kleinere Importeure,
- 999 bis 5.000 EUR monatlich fuer groessere Handels- und Industrieunternehmen,
- Setup 1.000 bis 25.000 EUR fuer Lieferantenlisten, Fragebogen und Datenstruktur,
- Partnerprovisionen fuer Audit-, ESG-, Einkaufs- und Lieferkettenberater.

Warum stark:

Das Thema wird nicht von Kleinstbetrieben getrieben, sondern von Unternehmen mit echten Risiken und hoeheren Budgets. Fuer uns ist es ein Datenraum- und Nachweisprodukt, kein Urteilssystem.

### 57.6 Entgelttransparenz-/HR-Datenakte

Die EU-Entgelttransparenzrichtlinie bringt fuer Arbeitgeber neue Berichtspflichten und Auskunftsprozesse. IHK-Quellen nennen unter anderem Berichtspflichten fuer Arbeitgeber ab 100 Beschaeftigten. Nach aktuellen Darstellungen berichten Unternehmen ab 250 Beschaeftigten ab 2027 jaehrlich, Unternehmen mit 150 bis 249 Beschaeftigten ab 2027 alle drei Jahre und Unternehmen mit 100 bis 149 Beschaeftigten ab 2031 alle drei Jahre.

Quellen:

- IHK Koeln: https://www.ihk.de/koeln/hauptnavigation/recht-steuern/entgelttransparenz-und-equal-pay-neues-recht-ab-2026-6722658
- IHK Stuttgart: https://www.ihk.de/stuttgart/fuer-unternehmen/recht-und-steuern/arbeitsrecht/rund-um-den-arbeitsvertrag/entgelttransparenzrichtlinie-6928626
- Rat der EU zur Entgelttransparenz: https://www.consilium.europa.eu/en/policies/pay-transparency/
- BMBFSFJ zur Umsetzung: https://www.bmbfsfj.bund.de/bmbfsfj/aktuelles/alle-meldungen/kommission-zur-umsetzung-der-entgelttransparenzrichtlinie-startet-267884

Zielgruppen:

- Arbeitgeber ab 100 Mitarbeitenden,
- HR-Abteilungen,
- Lohn- und Gehaltsabrechnungsdienstleister,
- mittelstaendische Unternehmensgruppen,
- oeffentliche Arbeitgeber,
- HR-Berater.

Was wir anbieten koennen:

- HR-Datenakte fuer Entgelttransparenz,
- Import fuer Mitarbeitenden-, Rollen-, Verguetungs- und Entgeltbestandteile,
- Ablage fuer Auswertungen, Berichte, interne Freigaben und Kommunikation,
- Fristen- und Prozessmanagement fuer Berichte und Auskunftsersuchen,
- Export an HR-Berater, Lohnbuero, Anwalt oder Betriebsrat,
- Anfrage- und Antwortprotokoll.

Was das Tool nicht tun sollte:

- keine Bewertung gleichwertiger Arbeit,
- keine Diskriminierungsentscheidung,
- keine arbeitsrechtliche Begruendung oder Empfehlung.

Monetarisierung:

- 199 bis 999 EUR monatlich fuer 100 bis 500 Mitarbeitende,
- 1.000 bis 5.000 EUR monatlich fuer groessere Arbeitgeber,
- Setup 1.000 bis 30.000 EUR fuer Datenimport und Rollenmodell,
- Zusatzumsatz mit HR-Beratern, Lohnbueros und Rechtsanwaelten als Partner.

Warum stark:

Weniger SEO-Massenmarkt, aber hohe Zahlungsbereitschaft. Das Thema ist sensibel, daher muss es als Daten-, Prozess- und Exportakte gebaut werden, nicht als arbeitsrechtlicher Urteilsgenerator.

### 57.7 VSME-/Nachhaltigkeitsfragebogen-/Kundenanforderungsakte

Der freiwillige Nachhaltigkeitsstandard VSME fuer kleine und mittlere Unternehmen ist kommerziell sehr interessant, weil viele KMU nicht direkt CSRD-pflichtig sind, aber von Kunden, Banken oder Auftraggebern Nachhaltigkeitsdaten abliefern muessen. EFRAG und DIHK beschreiben VSME als freiwilligen Standard, der KMU bei Nachhaltigkeitsinformationen fuer Wertschoepfungsketten, Banken und Geschaeftspartner helfen soll.

Quellen:

- EFRAG VSME: https://www.efrag.org/en/smes-and-sustainability-reporting
- DIHK zu VSME: https://www.dihk.de/de/themenfelder/nachhaltigkeit/nachhaltigkeitsberichterstattung-freiwilliger-standard-fuer-kmu--158328
- EU-Kommission Q&A zu VSME: https://finance.ec.europa.eu/publications/questions-and-answers-recommendation-voluntary-sustainability-reporting-standard-small-and-medium_en
- Deutscher Nachhaltigkeitskodex VSME: https://www.deutscher-nachhaltigkeitskodex.de/de/berichtspflichten/voluntary-sustainability-standard-for-smes-vsme/

Zielgruppen:

- KMU als Lieferanten grosser Unternehmen,
- Produktionsbetriebe,
- Bau- und Handwerksbetriebe mit groesseren Auftraggebern,
- technische Dienstleister,
- Banken-nahe Unternehmenskunden,
- Grosskundenlieferanten,
- ESG- und Foerdermittelberater.

Was wir anbieten koennen:

- VSME-Datenraum,
- Fragebogen-Inbox fuer Kunden- und Bankenanforderungen,
- wiederverwendbare Antworten und Nachweise,
- Jahresordner fuer Nachhaltigkeitsdaten,
- Exportpaket fuer Kunde, Bank, Berater oder Einkauf,
- Lueckenliste fuer fehlende Nachweise,
- Versionierung pro Berichtsjahr.

Was das Tool nicht tun sollte:

- kein ESG-Rating,
- keine Assurance,
- keine Behauptung, dass ein Nachhaltigkeitsbericht fachlich ausreichend ist.

Monetarisierung:

- 49 bis 299 EUR monatlich fuer kleine KMU,
- 299 bis 999 EUR monatlich fuer groessere Lieferanten,
- Setup 300 bis 5.000 EUR fuer Erstdaten und Fragebogenmigration,
- Partnerumsatz mit Nachhaltigkeitsberatern, Banken, Foerdermittelberatern und Einkaufsplattformen.

Warum stark:

Das ist wahrscheinlich einer der besten breiten Geldpunkte, weil es nicht nur aus Gesetz kommt, sondern aus echtem Kundendruck. Ein KMU zahlt nicht, weil es "Nachhaltigkeit" liebt, sondern weil es Frageboegen schneller beantworten und Auftraege nicht verlieren will.

### 57.8 EUDAMED-/UDI-/MDR-Datenakte

EUDAMED ist fuer Medizinprodukte ein hochpreisiges Spezialthema. Das BfArM weist darauf hin, dass die ersten vier EUDAMED-Module seit 28.05.2026 verpflichtend sind. Dazu gehoeren unter anderem Akteure, UDI/Produkte, Benannte Stellen/Zertifikate und Marktueberwachung. Fuer Hersteller, Importeure und bestimmte Leistungserbringer ist das ein stark datengetriebenes Feld.

Quellen:

- BfArM Europa und EUDAMED: https://www.bfarm.de/DE/Medizinprodukte/Ueberblick/Europa-und-EUDAMED/_node.html
- BfArM EUDAMED FAQ: https://www.bfarm.de/DE/Medizinprodukte/_FAQ/EUDAMED/_node.html
- BfArM DMIDS FAQ: https://www.bfarm.de/DE/Medizinprodukte/_FAQ/DMIDS/_node.html
- EU-Kommission UDI/Device Registration: https://health.ec.europa.eu/medical-devices-eudamed/udidevice-registration_de

Zielgruppen:

- Medizinproduktehersteller,
- IVD-Hersteller,
- Importeure,
- Bevollmaechtigte,
- Dental- und Sonderanfertigungsbetriebe,
- Berater fuer MDR/IVDR,
- kleinere Hersteller ohne starke interne Regulatory-Abteilung.

Was wir anbieten koennen:

- UDI-/Produktdatenakte,
- Actor-, Zertifikats- und Produktdatenordner,
- DMIDS-zu-EUDAMED-Migrationsdatenraum,
- Aufgabenliste fuer fehlende Datenfelder,
- Belegarchiv fuer Zertifikate, technische Dokumente und Marktueberwachungsunterlagen,
- Exportpaket fuer Regulatory-Berater oder interne Verantwortliche.

Was das Tool nicht tun sollte:

- keine MDR-Klassifizierung,
- keine Registrierung als fachliche Dienstleistung ohne qualifizierten Partner,
- keine Aussage, dass ein Medizinprodukt zulassungs- oder dokumentationsseitig ausreichend abgedeckt ist.

Monetarisierung:

- 499 bis 3.000 EUR monatlich fuer kleine Hersteller und Importeure,
- 3.000 bis 10.000 EUR monatlich fuer groessere Produktportfolios,
- Setup 3.000 bis 50.000 EUR fuer Datenmigration und Produktstruktur,
- Partnerumsatz mit MDR-Beratern, Benannten-Stellen-nahen Dienstleistern und Regulatory-Agenturen.

Warum stark:

Sehr hohes Ticket, aber kein einfacher Massenmarkt. Das sollte nicht der erste breite SEO-Launch sein, sondern ein Premium-Spezialmodul mit Partnernetz.

### 57.9 EPREL-/Energielabel-Produktdatenakte

EPREL ist fuer energieverbrauchsrelevante Produkte, Energielabel und Produktinformationen relevant. Die EU-Kommission beschreibt EPREL als Produktdatenbank fuer energiegekennzeichnete Produkte. Lieferanten muessen Produktmodelle registrieren, bevor sie im EU-Markt in Verkehr gebracht werden; seit 22.10.2024 ist zudem die Verifizierung der Lieferantenorganisation Teil des Prozesses.

Quellen:

- EU-Kommission EPREL: https://energy-efficient-products.ec.europa.eu/eprel_en
- EU-Kommission fuer Lieferanten: https://energy-efficient-products.ec.europa.eu/suppliers_en
- EU EPREL Registration Quick Guide: https://energy-efficient-products.ec.europa.eu/suppliers/registration-quick-guide_en
- Your Europe Energielabel: https://europa.eu/youreurope/business/product-requirements/labels-markings/energy-labels/index_de.htm
- EU-Kommission fuer Haendler: https://energy-efficient-products.ec.europa.eu/dealers_en

Zielgruppen:

- Hersteller und Importeure energiekennzeichnungspflichtiger Produkte,
- Haendler fuer Haushaltsgeraete, Leuchten, Displays, HVAC, Waermepumpen und aehnliche Produktgruppen,
- Onlinehaendler mit technischen Produktdaten,
- Agenturen und Datenservice-Anbieter.

Was wir anbieten koennen:

- EPREL-/Energielabel-Akte pro Produktmodell,
- Ablage fuer EPREL-ID, Label, Produktdatenblatt, technische Unterlagen und Produktlinks,
- Shop- und Marktplatz-Feldcheck,
- Verifizierungs- und Registrierungsbelegordner,
- Export an Shop, ERP, Agentur oder Produktdatenservice,
- Wiedervorlagen fuer Modellaktualisierung, Datenblattwechsel und Listing-Kontrolle.

Was das Tool nicht tun sollte:

- keine Berechnung der Energieeffizienzklasse,
- keine technische Konformitaetsbewertung,
- keine Garantie, dass ein Label fachlich korrekt ist.

Monetarisierung:

- 49 bis 299 EUR monatlich fuer kleinere Haendler,
- 299 bis 1.500 EUR monatlich fuer groessere Sortimente,
- Setup fuer Produktdatenimport und Label-/Datenblattzuordnung,
- Partnerumsatz mit Produktdatenagenturen, Laboren und technischen Beratern.

Warum stark:

EPREL ist kein sexy Thema, aber genau solche Felder zahlen im B2B: viele Produkte, viele Daten, wenig Lust, alles manuell zu pflegen. Besonders gut kombinierbar mit GPSR, DPP, PPWR und Produktakte.

### 57.10 Bewertung nach Goldfilter

Die neue Runde bringt mehrere starke Kandidaten, aber nicht alle gehoeren gleichzeitig in den Start.

Sofort am staerksten:

1. GPSR-Shoplisting-/Responsible-Person-Akte
   - sehr online,
   - technisch scanbar,
   - akuter Haendlerdruck,
   - grosse Zielgruppe,
   - passt perfekt zu Produktakte.

2. PPWR-/Verpackungsdatenakte
   - breite Zielgruppe,
   - ab 2026 starker Umstellungsdruck,
   - wiederkehrende Produkt- und Lieferantendaten,
   - hohe Setup-Chancen.

3. VSME-/Nachhaltigkeitsfragebogenakte
   - echte Nachfrage durch Kunden und Banken,
   - weniger Rechtsurteil, mehr Datenraum,
   - gut online verkaufbar,
   - ideal fuer KMU.

4. EPREL-/Energielabelakte
   - klare Produktdaten,
   - guter Zusatz zu GPSR und Produktakte,
   - weniger gross, aber sauber und zahlbar.

Mittelfristig sehr wertvoll:

5. ESPR-/Digitaler-Produktpass-Datenraum
   - langfristig sehr gross,
   - jetzt schon als Vorbereitung verkaufbar,
   - hohes Setup-Potenzial.

6. Textil-EPR-/Fashion-Datenakte
   - stark fuer Fashion und Textil,
   - sehr gut kombinierbar mit DPP, PPWR und Lieferkette,
   - eher Branchenpaket als allgemeiner Start.

7. Forced-Labour-/Lieferketten-Belegakte
   - hoehere Tickets,
   - ab 2027 wachsender Druck,
   - eher fuer Importeure und groessere Anbieter.

Premium/Partner-only:

8. Entgelttransparenz-/HR-Datenakte
   - hoher Wert, aber sensibel,
   - stark mit HR-/Lohnbuero-Partnern,
   - nicht als "KI entscheidet Diskriminierung" bauen.

9. EUDAMED-/UDI-/MDR-Datenakte
   - sehr hohe Tickets,
   - fachlich eng,
   - nur mit Partnern oder als reiner Datenraum/Exportprodukt.

### 57.11 Konsequenz

Wenn wir weiter Geld finden wollen, ist die beste Richtung nicht "noch mehr allgemeine Unternehmenspflichten", sondern drei konkrete Geldachsen:

1. Produktdatenpflichten
   - GPSR,
   - PPWR,
   - EPREL,
   - DPP/ESPR,
   - Textil-EPR,
   - Forced Labour,
   - Rueckrufakte,
   - Produktakte.

2. Nachweis- und Fragebogenpflichten
   - VSME,
   - Kundenfrageboegen,
   - Bankenfrageboegen,
   - Lieferantenselbstauskuenfte,
   - ESG-/Einkaufsanforderungen.

3. Premium-Spezialdatenraeume
   - EUDAMED/UDI,
   - Entgelttransparenz,
   - CBAM,
   - Gefahrstoff,
   - Loesemittel/VOC,
   - Abwaerme/Energie.

Damit wird die Plattform kommerziell klarer:

- Die breite Einstiegswelt ist nicht "wir sagen dir alle Pflichten".
- Die breite Einstiegswelt ist "wir finden fehlende Daten, sammeln Belege, erinnern dich und bauen Exportordner".
- Die teuren Module sind Spezialdatenraeume fuer Firmen, bei denen ein fehlender Nachweis wirklich Geld kostet.

Die beste Start-Kombination nach dieser Runde waere:

1. GPSR-Shoplisting-Scanner,
2. Produktakte mit Responsible-Person-/Rueckruf-/Nachweisordner,
3. PPWR-Verpackungsdatenakte,
4. VSME-Kundenfragebogenakte,
5. EPREL-/Energielabelakte als erstes Spezial-Add-on.

Danach:

- DPP/ESPR und Textil-EPR als Zukunftspakete,
- Forced Labour fuer Importeure,
- Entgelttransparenz und EUDAMED nur als Premium- oder Partnerpaket.

Das ist der bisher beste Ausweg aus der Verzettelung: eine Plattform, aber nicht hundert gleich starke Produkte. Ein Einstieg ueber Produktdaten und Nachweisordner, dann Erweiterung in Umwelt, Lieferkette, HR und Premiumdatenraeume.

## 58. Weitere Goldfilter-Runde: Logistik, Green Claims, Reparatur, Data Act, Plattformen und Premiumdatenraeume

Nach weiterer Suche bleiben noch einige starke Felder uebrig, die nicht bloss weitere "Pflichtenlisten" sind, sondern echte SaaS-Angebote ergeben koennen. Diese Runde ist besonders wichtig, weil sie neue Produktlinien zeigt:

- Daten- und Dokumentenfluesse in Logistik und Zoll,
- produktbezogene Werbe- und Reparaturinformationen,
- digitale Maschinen-/IoT-Daten,
- Plattformbetreiberpflichten,
- physische Resilienz,
- hochpreisige Spezialregister.

Nicht alle Felder gehoeren in den Start. Aber sie gehoeren in die Landkarte, weil sie spaeter eigene Landingpages, Branchenpakete oder Partnerangebote tragen koennen.

### 58.1 eFTI-, Frachtpapier- und Transportdokumentenakte

Die eFTI-Verordnung ist fuer Logistik ein sehr gutes Zukunftsthema. Die EU-Kommission beschreibt eFTI als Schritt zu papierlosem Frachtverkehr: Ab Juli 2027 sollen Behoerden in den EU-Mitgliedstaaten elektronische Frachtinformationen akzeptieren, wenn Unternehmen sie ueber eFTI-konforme Plattformen bereitstellen. Das ist kein kleiner Contentpunkt, sondern ein Datenfluss- und Schnittstellenthema.

Quellen:

- EU-Kommission eFTI Regulation: https://transport.ec.europa.eu/transport-themes/logistics-and-multimodal-transport/efti-regulation_en
- EU-Kommission News zu eFTI: https://transport.ec.europa.eu/news-events/news/towards-paperless-freight-transport-eu-takes-step-forward-efti-regulation-implementation-2025-01-09_en
- eFTI4EU: https://efti4eu.eu/what-is-efti4eu/

Zielgruppen:

- Speditionen,
- Frachtfuehrer,
- Verlader,
- Logistikdienstleister,
- Lager- und Umschlagbetriebe,
- Unternehmen mit vielen Transportdokumenten,
- Softwareanbieter im TMS-/ERP-Umfeld.

Was wir anbieten koennen:

- Transportdokumentenakte pro Sendung,
- Upload und Strukturierung von CMR, Lieferschein, Gefahrgutdokument, Begleitpapier, Zollbeleg,
- Fristen- und Statusuebersicht fuer fehlende Unterlagen,
- QR-/Link-Freigabe fuer Fahrer, Dispo, Kunde oder Pruefer,
- eFTI-Vorbereitungsdatenraum,
- Export an TMS, eFTI-Plattform oder Logistikpartner,
- Nachweisordner fuer Kontrollen und Kundenreklamationen.

Was das Tool nicht tun sollte:

- keine Zertifizierung als eFTI-Plattform versprechen,
- keine fachliche Bewertung, ob ein Transportdokument inhaltlich ausreichend ist,
- keine Gefahrgut- oder Zollberatung.

Monetarisierung:

- 99 bis 499 EUR monatlich fuer kleine Speditionen,
- 499 bis 2.500 EUR monatlich fuer groessere Logistiker,
- Setup 1.000 bis 25.000 EUR fuer Datenimport, TMS-Anbindung und Dokumentenvorlagen,
- Partnerumsatz mit TMS-Anbietern, eFTI-Plattformen, Zoll- und Gefahrgutberatern.

Warum stark:

Logistik hasst Papierchaos, und eFTI erzeugt einen natuerlichen Wechsel in digitale Prozesse. Fuer uns ist das kein Rechtsprodukt, sondern ein Dokumenten- und Schnittstellenprodukt.

### 58.2 ICS2-, ENS- und Import-Voranmeldungsakte

ICS2 ist ein weiteres starkes Logistik-/Zollthema. Die EU-Kommission beschreibt ICS2 als Advance-Cargo-Information-System. Wirtschaftsbeteiligte muessen fuer Waren, die in die EU verbracht oder durch sie transportiert werden, eine Entry Summary Declaration mit vollstaendigen Sicherheitsdaten abgeben. Seit 2025 betrifft ICS2 auch Strasse und Schiene.

Quellen:

- EU-Kommission ICS2: https://taxation-customs.ec.europa.eu/customs/customs-security/import-control-system-2_en
- EU-Kommission ICS2 Road/Rail ab April 2025: https://taxation-customs.ec.europa.eu/news/eu-import-control-system-2-ics2-extends-rail-and-road-transportation-april-2025-2025-02-03_en
- EU-Kommission ICS2 FAQ: https://taxation-customs.ec.europa.eu/customs/customs-security/import-control-system-2/faq_en

Zielgruppen:

- Importspeditionen,
- Post- und Expressdienstleister,
- Strassen- und Bahnlogistiker,
- Seefracht- und Luftfrachtakteure,
- Importeure mit eigenen Zollprozessen,
- Fulfillment- und Cross-Border-Commerce-Anbieter.

Was wir anbieten koennen:

- Import-Voranmeldungsakte,
- ENS-Datencheck als Vollstaendigkeitsliste,
- EORI-, Rollen- und Ansprechpartnerordner,
- Dokumentenordner je Sendung,
- Status- und Fehlerprotokoll aus Dienstleisterkommunikation,
- Export an Zollbroker, ITSP oder internes Zollteam,
- Wiedervorlagen fuer Deployment, UUM/DS, Self-Conformance-Test und Schnittstellenwechsel.

Was das Tool nicht tun sollte:

- keine Zolltarifierung,
- keine verbindliche Ausfuellentscheidung fuer ENS-Daten,
- keine Zollvertretung ohne Partner.

Monetarisierung:

- 199 bis 999 EUR monatlich fuer kleine bis mittlere Importakteure,
- 1.000 bis 5.000 EUR monatlich fuer groessere Logistiker,
- Setup 2.000 bis 50.000 EUR fuer Prozessmapping und Datenuebernahme,
- Partnerprovisionen fuer Zollbroker, ITSPs und Schnittstellenanbieter.

Warum stark:

ICS2 ist technisch, fristgetrieben und fehleranfaellig. Genau solche Themen kaufen Unternehmen, wenn der Ausfall oder eine blockierte Sendung teurer ist als die Software.

### 58.3 EmpCo-, Green-Claims- und Umweltwerbe-Belegakte

Ab 27.09.2026 gelten in der EU neue Regeln fuer Umwelt- und Nachhaltigkeitsaussagen im B2C-Bereich ueber die Directive EU 2024/825, oft als Empowering Consumers for the Green Transition oder EmpCo bezeichnet. IHK-Quellen empfehlen Unternehmen, Umweltclaims, Siegel, Zukunftsversprechen, Verpackungen, Etiketten, Online-Inhalte und Werbemittel zu pruefen und belegbar zu machen.

Quellen:

- EUR-Lex Directive EU 2024/825: https://eur-lex.europa.eu/eli/dir/2024/825/oj/eng
- EU-Kommission FAQ EmpCo: https://commission.europa.eu/document/download/3c257883-bb2a-4dd9-a6dc-501d587bb34f_en?filename=faq-empowerting-consumers-gtd.pdf
- IHK Rhein-Neckar Green Claims: https://www.ihk.de/rhein-neckar/recht/wettbewerbsrecht/lauterer-wettbewerb/green-claims-nachweispflicht-6216074
- IHK Potsdam EmpCo: https://www.ihk.de/potsdam/ihk-service-und-beratung/gruenes-unternehmen/empco-richtlinie-7058038

Zielgruppen:

- D2C-Marken,
- Onlinehaendler,
- Kosmetik-, Textil-, Food-, Moebel- und Elektronikmarken,
- Agenturen,
- Verpackungs- und Produktteams,
- Unternehmen mit Nachhaltigkeitsclaims in Shop, Katalog, Ads oder Verpackung.

Was wir anbieten koennen:

- Claim-Inventar fuer Umwelt- und Nachhaltigkeitsaussagen,
- Belegordner pro Claim,
- Zuordnung zu Produkt, Seite, Werbemittel, Verpackung und Sprache,
- Wiedervorlage fuer Claim-Review,
- Screenshot-/Archivfunktion fuer geaenderte Shoptexte,
- Freigabe-Workflow mit Marketing, Produkt, Berater oder Anwalt,
- Exportpaket fuer Agentur, Rechtsberatung oder interne Kontrolle.

Was das Tool nicht tun sollte:

- keine Freigabe, dass ein Claim rechtlich zulaessig ist,
- keine Werberechtsberatung,
- keine automatische Aussage "dieser Claim ist erlaubt".

Monetarisierung:

- 79 bis 399 EUR monatlich fuer kleine Marken,
- 399 bis 2.000 EUR monatlich fuer groessere Shops und Agenturen,
- Setup 500 bis 20.000 EUR fuer Claim-Crawl, Shopscan und Belegmigration,
- Partnerprovisionen mit Kanzleien, Nachhaltigkeitsberatern, Zertifizierern und Agenturen.

Warum stark:

Das ist einer der besten neuen Produktdaten-Zusatzbausteine. Es ist online, akut ab 2026, sehr nah an Shops, gut crawlbar und nicht nur Pflichttext. Das Tool findet Claims und organisiert Belege, die Entscheidung bleibt beim Menschen/Partner.

### 58.4 Right-to-Repair-, Reparaturinfo- und Garantieakte

Die EU-Richtlinie 2024/1799 zum Recht auf Reparatur ist ab 31.07.2026 in nationales Recht umzusetzen beziehungsweise anzuwenden. Die EU-Kommission beschreibt die Richtlinie als Regelwerk zur Foerderung der Reparatur von Waren. IHK-Quellen betonen neue Pflichten fuer Hersteller und Handel, zum Beispiel Reparaturinformationen, Ersatzteile, technische Huerden, Verbraucherinformationen und Gewaehrleistungs-/Garantiekommunikation.

Quellen:

- EU-Kommission Directive on repair of goods: https://commission.europa.eu/law/law-topic/consumer-protection-law/directive-repair-goods_en
- EUR-Lex Summary Directive EU 2024/1799: https://eur-lex.europa.eu/EN/legal-content/summary/common-rules-promoting-the-repair-of-goods-and-amending-related-eu-legislation.html
- IHK Rhein-Neckar Right to Repair: https://www.ihk.de/rhein-neckar/recht/wirtschaftsrecht/vertrag/right-to-repair-6977000
- IHK Koeln Recht auf Reparatur: https://www.ihk.de/koeln/hauptnavigation/recht-steuern/recht/recht-auf-reparatur-6065686

Zielgruppen:

- Hersteller reparierbarer Verbraucherprodukte,
- Elektronik-, Haushaltsgeraete-, Smartphone-, Fahrrad-, Werkzeug- und Moebelanbieter,
- Ersatzteilhaendler,
- Reparaturdienstleister,
- Onlinehaendler,
- Plattformen fuer Reparaturservices.

Was wir anbieten koennen:

- Reparaturinformationsakte pro Produkt,
- Ersatzteil-, Anleitung-, Garantie- und Reparaturpreisordner,
- Website-/Shop-Feldcheck fuer Reparatur- und Garantieinformationen,
- Dokumentenarchiv fuer Reparaturfaelle,
- Kundenanfragen- und Antwortprotokoll,
- Export an Reparaturpartner, Hersteller, Serviceabteilung oder Rechtsberater,
- QR-/Link-Seite fuer Produktserviceinformationen.

Was das Tool nicht tun sollte:

- keine Entscheidung, ob ein Produkt reparierbar sein muss,
- keine rechtliche Garantie-/Gewaehrleistungsberatung,
- keine Aussage, dass ein Reparaturpreis angemessen ist.

Monetarisierung:

- 79 bis 399 EUR monatlich fuer kleinere Hersteller und Haendler,
- 399 bis 2.500 EUR monatlich fuer groessere Sortimente,
- Setup 1.000 bis 30.000 EUR fuer Produktdaten, Ersatzteillisten und Serviceprozesse,
- Partnerprovisionen mit Reparaturdienstleistern, Ersatzteilplattformen und Service-Centern.

Warum stark:

Passt perfekt zu Produktakte, DPP/ESPR, EPREL, Green Claims und GPSR. Es ist kein isoliertes Modul, sondern ein weiterer Datenraum rund um das Produktleben.

### 58.5 Maschinenverordnung-, digitale Betriebsanleitungs- und technische-Dokumentationsakte

Die neue Maschinenverordnung EU 2023/1230 gilt ab 20.01.2027. Die EU-Kommission weist darauf hin, dass sie unter anderem Bedingungen klaert, unter denen Betriebsanleitungen und Konformitaetserklaerungen digital bereitgestellt werden koennen. Fuer Maschinenbauer, Importeure, Integratoren und Haendler ist das ein sehr gutes Produktakten-Thema.

Quellen:

- EU-Kommission Machinery: https://single-market-economy.ec.europa.eu/sectors/mechanical-engineering/machinery_en
- EU-OSHA Maschinenverordnung: https://osha.europa.eu/en/legislation/directive/regulation-20231230eu-machinery
- EUR-Lex Summary Maschinenverordnung: https://eur-lex.europa.eu/EN/legal-content/summary/machinery-safety-requirements.html
- EUR-Lex Regulation EU 2023/1230: https://eur-lex.europa.eu/eli/reg/2023/1230/oj/eng

Zielgruppen:

- Maschinenbauer,
- Sondermaschinenbauer,
- Importeure,
- Haendler technischer Produkte,
- Integratoren,
- Anlagenbauer,
- technische Redaktionen,
- CE-/Maschinensicherheitsberater.

Was wir anbieten koennen:

- technische Dokumentationsakte pro Maschine/Serie,
- digitale Betriebsanleitungsverwaltung,
- Konformitaetserklaerungsordner,
- Risikobeurteilungs-Upload als fremd/fachlich freigegebenes Dokument,
- Versions- und Sprachmanagement,
- QR-/Downloadlink fuer Anleitung und Konformitaetserklaerung,
- Exportpaket fuer Kunde, Haendler, Marktueberwachung oder CE-Berater.

Was das Tool nicht tun sollte:

- keine CE-Bewertung,
- keine Risikobeurteilung automatisch erstellen,
- keine Maschinensicherheitsfreigabe.

Monetarisierung:

- 199 bis 999 EUR monatlich fuer kleine Maschinenanbieter,
- 1.000 bis 5.000 EUR monatlich fuer groessere Serien- oder Anlagenanbieter,
- Setup 2.000 bis 50.000 EUR fuer Dokumentenstruktur, Sprachversionen und Produktdaten,
- Partnerumsatz mit CE-Beratern, technischen Redaktionen, Uebersetzern und Pruefdienstleistern.

Warum stark:

Maschinen haben hohe Ticketpreise, lange Lebenszyklen und viel Dokumentation. Ein QR-basierter Nachweis- und Anleitungsdatenraum ist sofort verstaendlich und verkauft sich besser als eine abstrakte Pflichtenseite.

### 58.6 Data-Act-, Connected-Product- und Datenzugangsakte

Der EU Data Act gilt seit 12.09.2025. Laut EU-Kommission regelt er Datenzugang und Datennutzung, besonders im Zusammenhang mit vernetzten Produkten. IHK-Quellen nennen Hersteller vernetzter Produkte und Anbieter verbundener Dienste als besonders betroffene Gruppen. Fuer uns wird daraus kein juristischer Betroffenheitscheck, sondern eine Produktdaten- und Vertragsbelegakte.

Quellen:

- EU-Kommission Data Act explained: https://digital-strategy.ec.europa.eu/en/factpages/data-act-explained
- EU-Kommission Data Act: https://digital-strategy.ec.europa.eu/en/policies/data-act
- IHK Nord Westfalen Data Act: https://www.ihk.de/nordwestfalen/wirtschaftsspiegel-online/praxis-und-ratgeber/data-act-6622482
- IHK Stuttgart Data Act fuer Onlinehaendler: https://www.ihk.de/stuttgart/fuer-unternehmen/recht-und-steuern/wettbewerbsrecht/folgen-des-data-act-fuer-onlinehaendler-6142454

Zielgruppen:

- IoT-Hersteller,
- Smart-Home-Anbieter,
- Maschinen- und Geraetehersteller mit Cloud/App,
- Fahrzeug-, Agrar- und Industriegeraeteanbieter,
- SaaS-Anbieter verbundener Dienste,
- Haendler vernetzter Produkte.

Was wir anbieten koennen:

- Connected-Product-Datenakte,
- Datenkategorien- und Schnittstelleninventar,
- Ablage fuer Nutzerinformationen, Vertragsklauseln und Datenzugangsprozesse,
- Anfrage- und Antwortprotokoll fuer Datenzugang,
- Export fuer Produktteam, Datenschutz, IT, Berater oder Kunde,
- Aufgabenliste fuer fehlende Produkt- und Serviceinformationen.

Was das Tool nicht tun sollte:

- keine Rechtsbewertung, ob ein konkreter Datensatz herauszugeben ist,
- keine Vertragsklausel-Freigabe,
- keine Datenschutz- oder Geheimnisschutzentscheidung.

Monetarisierung:

- 199 bis 999 EUR monatlich fuer kleinere IoT-/SaaS-Anbieter,
- 1.000 bis 5.000 EUR monatlich fuer Hersteller mit vielen Produktlinien,
- Setup 2.000 bis 50.000 EUR fuer Dateninventar und Prozessmapping,
- Partnerumsatz mit IT-Rechtskanzleien, Datenschutzberatern und Schnittstellenentwicklern.

Warum stark:

Data Act ist fuer viele zu abstrakt. Geld entsteht, wenn wir es als Inventar, Prozessakte und Anfrage-Workflow verkaufen, nicht als Rechtsgutachten.

### 58.7 DSA-, Marktplatz-KYBC- und Moderationsnachweisakte

Der Digital Services Act betrifft Vermittlungsdienste, Online-Plattformen und Marktplatzstrukturen. Die EU-Kommission beschreibt unter anderem Pflichten zur Nachverfolgbarkeit von gewerblichen Nutzern auf Online-Marktplaetzen. Die Bundesnetzagentur nennt Melde- und Abhilfeverfahren sowie Transparenzpflichten als zentrale Elemente. Das ist fuer Plattformbetreiber, Buchungsportale, Marktplaetze, Jobboersen und Community-Plattformen relevant.

Quellen:

- EU-Kommission DSA Impact Platforms: https://digital-strategy.ec.europa.eu/en/policies/dsa-impact-platforms
- EU-Kommission Digital Services Act: https://digital-strategy.ec.europa.eu/en/policies/digital-services-act
- Bundesnetzagentur DSC Pressemitteilung: https://www.bundesnetzagentur.de/SharedDocs/Pressemitteilungen/DE/2024/20240514_DSC.html
- Bundesnetzagentur DSA Rechtsgrundlagen: https://www.bundesnetzagentur.de/DE/Fachthemen/DSC/4_UeberdenDSC/Rechtsgrundlagen/dokument.html
- DSA Transparency Database: https://transparency.dsa.ec.europa.eu/

Zielgruppen:

- Online-Marktplaetze,
- Buchungsportale,
- Jobboersen,
- App- und Plugin-Marktplaetze,
- Kleinanzeigenplattformen,
- B2B-Plattformen mit Anbieterprofilen,
- Community- und Contentplattformen.

Was wir anbieten koennen:

- Business-User-/KYBC-Akte,
- Haendler-/Anbieter-Verifizierungsstatus,
- Beschwerde-, Notice-and-Action- und Moderationsprotokoll,
- Statement-of-Reasons-Archiv,
- Transparenzbericht-Datenraum,
- wiederverwendbare Vorlagen fuer interne Prozesse,
- Export an Rechtsabteilung, Plattformteam oder Berater.

Was das Tool nicht tun sollte:

- keine Entscheidung, ob ein Inhalt rechtswidrig ist,
- keine Plattformrechtsberatung,
- keine automatische Sperrentscheidung ohne Betreiberfreigabe.

Monetarisierung:

- 199 bis 999 EUR monatlich fuer kleine Plattformen,
- 1.000 bis 10.000 EUR monatlich fuer groessere Marktplaetze,
- Setup 2.000 bis 75.000 EUR fuer Datenmodell, Moderationsprozess und Anbieterimport,
- Partnerumsatz mit IT-Rechtskanzleien, Trust-and-Safety-Beratern und Ident-Dienstleistern.

Warum stark:

Das ist nicht fuer jeden Betrieb, aber fuer Plattformbetreiber sehr wichtig. Es passt eher als Spezialprodukt unter "Plattformakte" als in die allgemeine Betriebsakte.

### 58.8 KRITIS-Dachgesetz-, Resilienzplan- und Vorfallakte

Das KRITIS-Dachgesetz setzt die CER-Richtlinie in Deutschland um beziehungsweise konkretisiert physische Resilienz kritischer Anlagen. IHK-Quellen nennen Registrierung, Risikoanalyse, Resilienzmassnahmen, Resilienzplan, Nachweise und Meldungen erheblicher Vorfaelle. Das ist hochpreisig, aber nicht massentauglich.

Quellen:

- BMI Schutz Kritischer Infrastrukturen: https://www.bmi.bund.de/DE/themen/bevoelkerungsschutz/schutz-kritischer-infrastrukturen/schutz-kritischer-infrastrukturen-node.html
- BMI KRITIS-Dachgesetz FAQ: https://www.bmi.bund.de/SharedDocs/faqs/DE/themen/bevoelkerungsschutz/kritis-dach/kritis-dach.html
- IHK Koeln KRITIS-Dachgesetz: https://www.ihk.de/koeln/hauptnavigation/recht-steuern/uebersicht-arbeitsrecht/kritis-dachgesetz-was-unternehmen-jetzt-wissen-und-tun-muessen-7012562
- IHK Magdeburg KRITIS-Dachgesetz: https://www.ihk.de/magdeburg/international/verteidigung/gesetze/bundestag-beschliesst-kritis-dachgesetz-6963344

Zielgruppen:

- Betreiber kritischer Anlagen,
- Energie, Wasser, Ernaehrung, Gesundheit, Transport, IT/TK,
- Entsorgung,
- Betreiber mit NIS2-/KRITIS-Naehe,
- Sicherheits- und Krisenmanagementberater.

Was wir anbieten koennen:

- Resilienzplan-Datenraum,
- Risikoanalyse- und Massnahmenordner als Ablage,
- Verantwortlichkeiten und Kontaktstellen,
- Vorfall-Zeitlinie und Meldungsakte,
- Nachweisordner fuer Audits, Behoerden und Geschaeftsleitung,
- Export an Sicherheitsberater, KRITIS-Berater oder internes Krisenteam.

Was das Tool nicht tun sollte:

- keine Einstufung als kritische Anlage,
- keine Resilienzbewertung nach Stand der Technik,
- keine Vorfallmeldeentscheidung.

Monetarisierung:

- 1.000 bis 10.000 EUR monatlich fuer KRITIS-nahe Betreiber,
- Setup 10.000 bis 150.000 EUR bei groesseren Organisationen,
- Partnerumsatz mit Sicherheitsberatern, KRITIS-/NIS2-Beratern, Krisenmanagement und Objektschutz.

Warum stark:

Nicht fuer den Start, aber ein sehr gutes Enterprise-Modul. Wenige Kunden koennen hier mehr Umsatz bringen als tausend kleine Pflichtseitenbesucher.

### 58.9 Rechenzentrum-EnEfG-, Effizienzregister- und Abwaermeakte

Rechenzentren sind zwar bereits unter EnEfG/Abwaerme erfasst, verdienen aber ein eigenes Spezialpaket. BfEE und BAFA beschreiben Informationspflichten, technische Energieeffizienzanforderungen, Energie-/Umweltmanagementsysteme, Zertifizierung, Abwaermenutzung und jaehrliche Meldungen. Das ist ein klares Premium-Datenprodukt.

Quellen:

- BAFA Effizienzregister Rechenzentren startet spaeter: https://www.bafa.de/SharedDocs/Kurzmeldungen/DE/Energie/20240319_bfee_enefg.html
- BfEE Energieeffizienzregister fuer Rechenzentren: https://www.bfee-online.de/BfEE/DE/Effizienzpolitik/Energieeffizienzregister_Rechenzentren/energieeffizienzregister_rechenzentren_node.html
- IHK Lippe EnEfG Rechenzentren: https://www.ihk.de/lippe-detmold/hauptnavigation/beraten-und-informieren/energie/aktuelles/bundesrat-energieeffizienzgesetz-kann-in-kraft-treten-5780962
- EnEfG bei Gesetze im Internet: https://www.gesetze-im-internet.de/enefg/BJNR1350B0023.html

Zielgruppen:

- Betreiber externer Rechenzentren,
- Unternehmen mit internen Rechenzentren,
- IT-Betreiber in Rechenzentren,
- Colocation-Anbieter,
- oeffentliche IT-Betreiber,
- Energie- und Nachhaltigkeitsberater.

Was wir anbieten koennen:

- Rechenzentrum-Effizienzakte,
- Datenfelder fuer Energieverbrauch, PUE, Stromherkunft, Abwaermenutzung und Anlageninformationen,
- EMS-/UMS-/ISO-/EMAS-Nachweisordner,
- Fristen fuer Jahresmeldung und Aktualisierungen,
- Export an BfEE/BAFA-nahe Prozesse, Berater, Management oder Kunden,
- Abwaerme- und Energiedatenraum.

Was das Tool nicht tun sollte:

- keine technische Effizienzberechnung als Fachgutachten,
- keine Zertifizierung ersetzen,
- keine Entscheidung ueber Meldepflicht oder Schwellenwert als Einzelfallurteil.

Monetarisierung:

- 499 bis 3.000 EUR monatlich fuer kleinere Rechenzentren,
- 3.000 bis 15.000 EUR monatlich fuer groessere Betreiber,
- Setup 5.000 bis 100.000 EUR fuer Energiedaten, Messpunkte, Rollen und Nachweise,
- Partnerumsatz mit ISO-/EMAS-Beratern, Energieauditoren, Messdienstleistern und Abwaermeprojekten.

Warum stark:

Sehr wenige, aber zahlungskraeftige Kunden. Das ist kein SEO-Massenmodul, sondern ein Premium-Datenraum mit hoher Setup-Fantasie.

### 58.10 FuelEU Maritime-, EU-ETS-Seeverkehr- und MRV-Akte

Der Seeverkehr ist seit 2024 in den EU-Emissionshandel einbezogen. FuelEU Maritime gilt voll seit 01.01.2025; Monitoringplaene waren bereits vorher relevant. DEHSt und EMSA beschreiben MRV-, Monitoring-, Berichts-, Verifizierungs- und Abgabepflichten fuer Schifffahrtsunternehmen. Das ist sehr spezialisiert, aber mit hohen Ticketmoeglichkeiten.

Quellen:

- EU-Kommission FuelEU Maritime: https://transport.ec.europa.eu/transport-modes/maritime/decarbonising-maritime-transport-fueleu-maritime_en
- EU-Kommission FuelEU Q&A: https://transport.ec.europa.eu/news-events/news/fueleu-maritime-regulation-qa-implementation-2024-07-23_en
- DEHSt Seeverkehr EU-ETS 1: https://www.dehst.de/DE/Themen/EU-ETS-1/Seeverkehr/EU-ETS-1-Seeverkehr/eu-ets-1-seeverkehr_artikel.html
- EMSA MRV FAQ: https://emsa.europa.eu/reducing-emissions/mrv-changes/faq-mrv-changes.html
- EMSA THETIS-MRV FAQ: https://www.emsa.europa.eu/reducing-emissions/webinars_and_tutorials/faq-for-users-thetis-mrv.html

Zielgruppen:

- Schifffahrtsunternehmen,
- Reedereien,
- Ship Manager,
- maritime Berater,
- Verifizierer-nahe Dienstleister,
- Hafen-/Flottenbetreiber mit Reporting-Schnittstellen.

Was wir anbieten koennen:

- Schiff-/Flotten-Emissionsakte,
- Monitoringplan- und FuelEU-Planordner,
- Verifiziererkommunikation,
- THETIS-MRV-Unterlagenablage,
- Fristenkalender fuer Reports, Pruefung, Abgabe und Nachweise,
- Export an Verifizierer, DEHSt-/EU-ETS-Team oder Ship Manager.

Was das Tool nicht tun sollte:

- keine Emissionsberechnung als Verifiziererleistung,
- keine ETS-/FuelEU-Fachfreigabe,
- keine Abgabe- oder Zertifikatsstrategie.

Monetarisierung:

- 1.000 bis 10.000 EUR monatlich je nach Flotte,
- Setup 10.000 bis 150.000 EUR fuer Flottenstruktur, Datenimport und Reportingprozesse,
- Partnerumsatz mit Verifizierern, maritimen Beratern und Emissionshandelsdienstleistern.

Warum stark:

Sehr eng, aber sehr teuer. Nicht fuer den Start, aber als spaeteres Enterprise-Modul reizvoll.

### 58.11 AI-Act-, KI-Inventar-, Transparenz- und Kompetenznachweisakte

Der AI Act ist ein hart umkaempftes Feld. Trotzdem gibt es ein RDG-armes Einstiegsprodukt: kein High-Risk-Urteil, kein KI-Rechtscheck, sondern KI-Inventar, Nutzungsrichtlinie, Schulungs-/Kompetenznachweise, Transparenzhinweise und Dokumentenablage. Die EU nennt fuer Hochrisikoanbieter Dokumentation, Logs, Konformitaetsbewertung und EU-Konformitaetserklaerung; fuer Deployers von Hochrisikosystemen bestehen eigene Pflichten. Unternehmen brauchen aber schon vorher einen Ueberblick ueber eingesetzte KI-Tools.

Quellen:

- EU-Kommission AI Act Ueberblick: https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai
- AI Act Service Desk Article 16: https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-16
- AI Act Service Desk Article 26: https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-26
- AI Act Service Desk Article 50: https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50
- IHK Frankfurt AI Act: https://www.frankfurt-main.ihk.de/recht/uebersicht-alle-rechtsthemen/digitalisierung2/eu-ai-act-6691932

Zielgruppen:

- KMU mit vielen KI-Tools,
- Agenturen,
- HR-Abteilungen,
- Softwareanbieter,
- SaaS-Unternehmen,
- Bildungsanbieter,
- Unternehmen mit Chatbots oder KI-gestuetzten Prozessen.

Was wir anbieten koennen:

- KI-Tool-Inventar,
- Zweck-, Anbieter-, Daten- und Nutzerkreis-Dokumentation,
- Schulungs-/Kompetenznachweise,
- Transparenzhinweis-Archiv,
- Freigabe- und Review-Workflow,
- Dokumentenordner fuer Anbieterunterlagen, Policies und Logs,
- Export an Datenschutz, IT, Berater oder Management.

Was das Tool nicht tun sollte:

- keine High-Risk-Klassifizierung als Urteil,
- keine AI-Act-Konformitaetsbewertung,
- keine Aussage, dass ein KI-System erlaubt oder ausreichend dokumentiert ist.

Monetarisierung:

- 49 bis 299 EUR monatlich fuer kleine Unternehmen,
- 299 bis 2.000 EUR monatlich fuer groessere Teams,
- Setup 500 bis 15.000 EUR fuer Toolinventar, Policy-Struktur und Schulungsnachweise,
- Partnerumsatz mit Datenschutz-, IT-, AI-Governance- und Schulungsanbietern.

Warum nur vorsichtig stark:

Der Markt ist voll. Als alleinige Idee zu umkaempft. Als Modul innerhalb "Nachweisakte fuer digitale Tools" aber sinnvoll, weil fast jedes Unternehmen KI nutzt und keiner den Ueberblick sauber dokumentiert.

### 58.12 Bewertung dieser Runde

Neue Themen mit Startpotenzial:

1. EmpCo-/Green-Claims-Belegakte
   - sehr online,
   - stark fuer Shops und Marken,
   - ab 2026 akut,
   - passt perfekt zu Produktakte, VSME, PPWR, Textil, DPP.

2. Right-to-Repair-/Reparaturinfoakte
   - gutes Produktdatenmodul,
   - starke Verbindung zu DPP/ESPR,
   - fuer Hersteller und Haendler verstaendlich.

3. Maschinenverordnung-/digitale Betriebsanleitungsakte
   - hoher B2B-Wert,
   - guter QR-/Dokumentenprodukt-Fit,
   - weniger Massenmarkt, aber sehr solide.

4. Data-Act-/Connected-Product-Datenakte
   - hoher Zukunftswert,
   - besonders fuer IoT, Maschinen, SaaS und Smart Products,
   - braucht saubere Abgrenzung zu Rechtsberatung.

Starke Spezialmodule:

5. eFTI-/Transportdokumentenakte
   - gute Logistik-Zukunft,
   - ab 2027 deutlich relevanter,
   - eher Partner/Schnittstellenprodukt.

6. ICS2-/ENS-Importakte
   - sehr konkret,
   - teurer Zoll-/Logistiknutzen,
   - weniger SEO-breit, aber hohe Dringlichkeit.

7. DSA-/Marktplatz-KYBC-/Moderationsakte
   - sehr gut fuer Plattformbetreiber,
   - nicht fuer die breite Betriebsakte,
   - gutes eigenes Spezialangebot.

Premium/Enterprise:

8. KRITIS-Dachgesetz-/Resilienzplanakte
   - sehr hohe Tickets,
   - wenige Kunden,
   - nur mit Fachpartnern.

9. Rechenzentrum-EnEfG-Akte
   - hohe Tickets,
   - klare Datenpflichten,
   - wenig Massenmarkt.

10. FuelEU/MRV-Seeverkehr
   - sehr teuer,
   - sehr speziell,
   - nur als spaeteres Spezial-/Partnerprodukt.

Nur als Zusatzmodul:

11. AI-Act-/KI-Inventar
   - Nachfrage ja,
   - Konkurrenz hoch,
   - nur attraktiv als Teil der allgemeinen Nachweisakte, nicht als Hauptprodukt.

### 58.13 Konsequenz nach dieser Runde

Die Plattform sollte nicht mehr als "eine Seite fuer alle Pflichten" gedacht werden. Sie sollte als Produktdaten-, Nachweis- und Fristenplattform mit mehreren Welten gebaut werden:

1. Produktakte
   - GPSR,
   - PPWR,
   - EPREL,
   - DPP/ESPR,
   - Green Claims,
   - Right to Repair,
   - Maschinenverordnung,
   - Data Act,
   - Rueckruf,
   - SCIP/SVHC,
   - WEEE/Batterie.

2. Betriebsakte
   - DGUV,
   - Brandschutz,
   - Gefahrstoff,
   - Unterweisung,
   - Wartung,
   - Fuhrpark,
   - Kasse/TSE,
   - Hygiene.

3. Umwelt- und Energieakte
   - EnEfG,
   - Abwaerme,
   - F-Gase,
   - AwSV,
   - 42. BImSchV,
   - Loesemittel/VOC,
   - Rechenzentren.

4. Lieferketten- und Kundenfragebogenakte
   - VSME,
   - Forced Labour,
   - EUDR,
   - CSDDD/LkSG-Vorbereitung,
   - Lieferantenselbstauskuenfte,
   - Kunden- und Bankenfrageboegen.

5. Logistik- und Zollakte
   - ICS2,
   - eFTI,
   - CBAM,
   - EMCS,
   - Exportkontrolle,
   - Praeferenz/Ursprung,
   - Gefahrgut.

6. Plattform- und Digitalakte
   - DSA,
   - Data Act,
   - AI Act Inventar,
   - NIS2/DORA nur dort, wo es als Nachweis-/Dokumentenraum passt.

7. Premiumdatenraeume
   - KRITIS,
   - EUDAMED,
   - FuelEU/MRV,
   - Rechenzentren,
   - Entgelttransparenz,
   - CBAM.

Damit wird die Website nicht zu klein, aber auch nicht komplett chaotisch. Es gibt eine klare Verpackung:

**Alles, was ein Unternehmen spaeter vorlegen, nachweisen, erneuern, melden oder intern freigeben muss.**

Der Start sollte trotzdem fokussiert bleiben:

1. GPSR-Shoplisting-Scanner,
2. Produktakte,
3. PPWR-Verpackungsdatenakte,
4. Green-Claims-Belegakte,
5. Right-to-Repair-/Reparaturinfoakte.

Danach als Add-ons:

- VSME,
- EPREL,
- Maschinenverordnung,
- Data Act,
- DPP/ESPR.

Und erst spaeter:

- eFTI/ICS2,
- DSA,
- KRITIS,
- Rechenzentrum,
- FuelEU/MRV.

Diese Runde verschiebt die beste Startidee nochmal leicht: Produktakte bleibt der Kern, aber Green Claims und Right to Repair sind jetzt sehr starke neue Vorderseiten-Kandidaten, weil sie fuer Shops, Marken und Hersteller sofort greifbar sind und nicht nach trockenem Behoerdenkram aussehen.

## 59. Weitere Tiefenrunde: Finanz-IT, Accessibility, Health Data, Krypto, E-Rechnung, Immobilien und Auditdruck

Diese Runde zeigt nochmal eine wichtige Wahrheit: Nicht nur Gesetze bringen Geld. Auch Kundenaudits, Zertifizierungen, Register, digitale Meldeformate und Nachweispflichten erzeugen starke Zahlungsbereitschaft. Die besten neuen Felder sind dort, wo ein Unternehmen sonst Excel, E-Mail, PDFs und Beraterchaos hat.

Die Leitlinie bleibt:

- Daten sammeln,
- Nachweise versionieren,
- Fristen erinnern,
- fehlende Felder sichtbar machen,
- Exporte bauen,
- Partner fuer Fachfreigabe vermitteln.

Keine Einzelfallentscheidung, keine Rechts- oder Fachfreigabe durch das Tool.

### 59.1 DORA-Informationsregister-, IKT-Drittparteien- und Finanzdienstleisterakte

DORA ist seit 17.01.2025 anwendbar und fuer Finanzunternehmen sehr konkret. Besonders stark ist das Informationsregister ueber IKT-Drittdienstleister. Die EBA beschreibt, dass Finanzunternehmen ein umfassendes Register ihrer vertraglichen Vereinbarungen mit IKT-Drittdienstleistern vorhalten muessen. Die BaFin informiert zu Informationsregister, Anzeigepflichten, IKT-Risikomanagement und IKT-Vorfaellen.

Quellen:

- BaFin DORA: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/alle-unternehmen/dora/DORA_node.html
- BaFin Informationsregister und Anzeigepflichten: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/alle-unternehmen/dora/Informationsregister_und_Anzeigepflichten/Informationsregister_und_Anzeigepflichten_node.html
- EBA DORA Register of Information: https://www.eba.europa.eu/activities/direct-supervision-and-oversight/digital-operational-resilience-act/preparation-dora-application
- EUR-Lex DORA Regulation EU 2022/2554: https://eur-lex.europa.eu/eli/reg/2022/2554/oj/eng

Zielgruppen:

- Finanzdienstleister,
- Versicherer,
- Zahlungsinstitute,
- Wertpapierfirmen,
- Fonds-/Asset-Management,
- Fintechs,
- Versicherungsvermittler mit DORA-nahem Kundendruck,
- IKT-Dienstleister, die Finanzkunden beliefern.

Was wir anbieten koennen:

- DORA-Informationsregister-Datenraum,
- IKT-Dienstleisterinventar,
- Vertrags- und SLA-Ablage,
- Kritikalitaets- und Funktionszuordnung als vom Nutzer gepflegtes Feld,
- Vorfallprotokoll und Meldezeitlinie,
- Auslagerungs-/Drittparteien-Unterlagen,
- Export fuer BaFin-Prozesse, DORA-Berater, interne Revision oder Kundenpruefung.

Was das Tool nicht tun sollte:

- keine DORA-Betroffenheitsentscheidung,
- keine IKT-Risikoanalyse als Fachurteil,
- keine Vorfallmeldeentscheidung,
- keine Auslagerungsfreigabe.

Monetarisierung:

- 499 bis 3.000 EUR monatlich fuer kleinere Finanzakteure,
- 3.000 bis 15.000 EUR monatlich fuer groessere Gruppen,
- Setup 5.000 bis 100.000 EUR fuer Vertragsinventar, Dienstleisterlisten und Registerstruktur,
- Partnerumsatz mit DORA-Beratern, IT-Sicherheitsberatern, Datenschutz und Revision.

Warum stark:

Das ist eines der besten Premiumfelder, weil es datenbankfaehig, wiederkehrend und stark dokumentationsgetrieben ist. Es ist kein Massenprodukt fuer den Start, aber ein sehr gutes Enterprise-Add-on.

### 59.2 BFSG-Accessibility-Scanner, Barrierefreiheitsakte und Produkt-/Shop-Nachweise

BFSG wurde im Konzept zwar schon genannt, aber noch nicht als eigener Geldbaustein tief genug ausgearbeitet. Das Barrierefreiheitsstaerkungsgesetz gilt seit 28.06.2025 fuer bestimmte Produkte und Dienstleistungen. Die Bundesfachstelle nennt unter anderem Online-Shops als Dienstleistung im elektronischen Geschaeftsverkehr. Hersteller bestimmter Produkte muessen zudem Konformitaet, EU-Konformitaetserklaerung und CE-Kennzeichnung beachten.

Quellen:

- Bundesfachstelle BFSG FAQ: https://www.bundesfachstelle-barrierefreiheit.de/DE/Barrierefreiheitsstaerkungsgesetz/FAQ/faq_node
- Bundesfachstelle E-Commerce: https://www.bundesfachstelle-barrierefreiheit.de/DE/Fachwissen/Produkte-und-Dienstleistungen/Barrierefreiheitsstaerkungsgesetz/E-Commerce/online-shops_node
- IHK Stuttgart BFSG: https://www.ihk.de/stuttgart/fuer-unternehmen/recht-und-steuern/it-recht/barrierefreie-webseiten-6200594
- IHK Koeln Barrierefreiheit: https://www.ihk.de/koeln/hauptnavigation/recht-steuern/barrierefreiheit-von-webseiten-dienstleistungen-und-produkten-5921172

Zielgruppen:

- Onlinehaendler,
- Banken und Finanzdienstleister mit digitalen Verbraucherangeboten,
- Reise-/Ticket-/Buchungsportale,
- App-Anbieter,
- Hersteller von Smartphones, Routern, E-Book-Readern, Automaten und digitalen Produkten,
- Agenturen und Shopbetreuer.

Was wir anbieten koennen:

- Accessibility-Scanner fuer Websites/Shops,
- WCAG-/EN-301-549-nahe Checklisten als technische Orientierung,
- Barrierefreiheitsakte mit Testergebnissen, Screenshots, Issues und Verlauf,
- Aufgabenmanagement fuer Agentur und Entwickler,
- Produkunterlagenordner fuer Konformitaetserklaerung/CE bei betroffenen Produkten,
- monatlicher Re-Scan,
- Export fuer Agentur, Entwickler, Berater oder Marktueberwachung.

Was das Tool nicht tun sollte:

- keine BFSG-Betroffenheitsentscheidung,
- keine Garantie, dass eine Website barrierefrei genug ist,
- keine CE-/Konformitaetsfreigabe.

Monetarisierung:

- 49 bis 299 EUR monatlich fuer kleine Shops,
- 299 bis 1.500 EUR monatlich fuer groessere Shops/Agenturen,
- 1.500 bis 10.000 EUR Setup fuer ersten Scan, Priorisierung und Projektboard,
- Partnerumsatz mit Accessibility-Agenturen, Entwicklern, Testern und UX-Beratern.

Warum stark:

BFSG ist ein sehr guter Frontdoor-Traffic-Kandidat: viele konkrete Suchfragen, sofort sichtbarer Scan-Nutzen, klare Aufgabenliste. Als Scanner ist es viel besser verkaufbar als als trockene Pflichtseite.

### 59.3 EHDS-, EHR-System- und Gesundheitssoftware-Datenakte

Der European Health Data Space ist fuer Hersteller von EHR-Systemen, Gesundheitssoftware und digitale Gesundheitsdienste ein Premiumfeld. Die EU beschreibt den EHDS als Rahmen fuer Nutzung und Austausch elektronischer Gesundheitsdaten. Die EU-Seite zur Zertifizierung von EHR-Systemen nennt Anforderungen an Interoperabilitaet, Sicherheit und EHR-Systeme, die elektronische Gesundheitsdaten speichern, exportieren, importieren, konvertieren, bearbeiten oder anzeigen.

Quellen:

- EU EHDS Regulation: https://health.ec.europa.eu/ehealth-digital-health-and-care/european-health-data-space-regulation-ehds_en
- EU Certification of EHR systems: https://health.ec.europa.eu/ehealth-digital-health-and-care/certification-ehr-systems_en
- BMG EHDS: https://www.bundesgesundheitsministerium.de/themen/internationale-gesundheitspolitik/europa/europaeische-gesundheitspolitik/ehds
- EUR-Lex EHDS Regulation EU 2025/327: https://eur-lex.europa.eu/eli/reg/2025/327/oj/eng

Zielgruppen:

- Praxissoftwareanbieter,
- Kliniksoftwareanbieter,
- EHR-/Patientenakten-Systeme,
- DiGA-/Health-App-Anbieter,
- Laborsysteme,
- Telemedizinanbieter,
- Medizinsoftwarehersteller mit MDR-/EHDS-Nahe.

Was wir anbieten koennen:

- EHDS-/EHR-Dokumentationsakte,
- Datenkategorien- und Schnittstelleninventar,
- Interoperabilitaets- und Export-/Import-Nachweisordner,
- Sicherheits- und Logging-Unterlagen,
- Test- und Zertifizierungsbelegordner,
- Versionierung fuer Produktreleases,
- Export fuer Health-IT-Berater, MDR-Berater, Datenschutz, Zertifizierer oder Kunden.

Was das Tool nicht tun sollte:

- keine EHDS-Konformitaetsbewertung,
- keine MDR-/Medizinprodukteklassifizierung,
- keine Verarbeitung echter Gesundheitsdaten im MVP,
- keine Datenschutz-Folgenabschaetzung als Fachurteil.

Monetarisierung:

- 499 bis 3.000 EUR monatlich fuer kleinere Health-Softwareanbieter,
- 3.000 bis 15.000 EUR monatlich fuer groessere Produktportfolios,
- Setup 5.000 bis 100.000 EUR fuer Datenmodell, Produktdokumentation und Release-Struktur,
- Partnerumsatz mit Health-IT-Beratern, Datenschutz, MDR-Beratern und Interoperabilitaetsexperten.

Warum stark:

Sehr hohes Ticket, aber fachlich eng. Nicht fuer die breite Startseite, sondern spaeter als Health-IT-Premiumdatenraum.

### 59.4 MiCA-, Krypto-Whitepaper-, CASP- und Meldeakte

MiCA ist fuer Kryptowerte, Krypto-Dienstleister und Emittenten ein stark reguliertes Spezialfeld. ESMA beschreibt MiCA als einheitliche EU-Regeln fuer Kryptowerte mit Transparenz, Offenlegung, Zulassung und Aufsicht. BaFin informiert zu Kryptoinstituten, Kryptowerte-Dienstleistungen und MiCAR. Fuer uns ist das ein Dokumenten- und Meldeakte-Thema, kein Beratungsprodukt.

Quellen:

- BaFin Kryptoinstitute: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/kryptoinstitute/kryptoinstitute_node.html
- BaFin Merkblatt Kryptowerte-Dienstleistungen: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Merkblatt/mb_250103_Kryptowerte_Dienstl.html
- ESMA MiCA: https://www.esma.europa.eu/esmas-activities/digital-finance-and-innovation/markets-crypto-assets-regulation-mica
- EUR-Lex MiCA Regulation EU 2023/1114: https://eur-lex.europa.eu/eli/reg/2023/1114/oj/eng

Zielgruppen:

- Krypto-Dienstleister,
- Token-Emittenten,
- Fintechs,
- Handelsplattformen,
- Verwahranbieter,
- Banken mit Kryptoangebot,
- Kanzleien und RegTech-Berater.

Was wir anbieten koennen:

- MiCA-Dokumentenakte,
- Whitepaper-Versionierung,
- Zulassungs-/Anzeigeunterlagenordner,
- Beschwerde- und Interessenkonflikt-Unterlagen,
- Melde- und Fristenkalender,
- Register-/ESMA-/BaFin-Belegablage,
- Export fuer Berater, BaFin-Prozess, interne Compliance oder Investor Due Diligence.

Was das Tool nicht tun sollte:

- keine Token-Klassifizierung,
- keine Whitepaper-Freigabe,
- keine Anlage- oder Finanzberatung,
- keine Zulassungsberatung ohne Partner.

Monetarisierung:

- 499 bis 3.000 EUR monatlich,
- 3.000 bis 20.000 EUR monatlich fuer groessere Anbieter,
- Setup 5.000 bis 150.000 EUR fuer Dokumentenstruktur und Zulassungsvorbereitung,
- Partnerumsatz mit FinReg-Kanzleien, RegTech-Beratern und Audit-/Compliance-Dienstleistern.

Warum stark:

Kleiner Markt, aber hohe Zahlungsbereitschaft. Nur als Premium-Nische sinnvoll.

### 59.5 eIDAS2-, EUDI-Wallet-, Trust-Service- und Relying-Party-Akte

Die neue europaeische digitale Identitaetsregulierung bringt Wallets, Vertrauensdienste und Relying Parties. Die EU beschreibt, dass Mitgliedstaaten digitale Wallets fuer Buerger und Unternehmen anbieten muessen; Relying Parties, die Dienste ueber Wallets anbieten, sollen registriert werden. Das ist ein Zukunftsmodul fuer Plattformen, Banken, Versicherer, Alterspruefung, Ident-Verfahren und Vertrauensdiensteanbieter.

Quellen:

- EU EUDI Regulation: https://digital-strategy.ec.europa.eu/en/policies/eudi-regulation
- EUR-Lex EU Digital Identity Framework: https://eur-lex.europa.eu/EN/legal-content/summary/the-establishment-of-the-european-digital-identity-framework-including-the-provision-of-european-digital-identity-wallets-and-trust-services.html
- EU Digital Identity Wallet Home: https://ec.europa.eu/digital-building-blocks/sites/spaces/EUDIGITALIDENTITYWALLET/pages/694487738/EU%2BDigital%2BIdentity%2BWallet%2BHome
- Bundesnetzagentur Vertrauensdienste: https://www.bundesnetzagentur.de/DE/Allgemeines/DieBundesnetzagentur/AufgabenStruktur/start.html

Zielgruppen:

- Ident- und Trust-Service-Anbieter,
- Banken,
- Versicherer,
- Plattformen mit Ident-/Alterspruefung,
- digitale Signaturdienste,
- HR-/Bildungsplattformen,
- Marktplatz- und Mobilitaetsanbieter.

Was wir anbieten koennen:

- Wallet-Relying-Party-Datenakte,
- Registrierungs- und Rollenunterlagen,
- Datenanforderungsinventar,
- Nachweisordner fuer Datenschutz, Einwilligung/Informationslogik und technische Spezifikationen,
- Trust-Service-Unterlagenablage,
- Audit- und Zertifizierungsbelegordner,
- Export an Rechts-/IT-Berater, Trust-Service-Partner oder Aufsicht.

Was das Tool nicht tun sollte:

- keine eIDAS-Konformitaetsbewertung,
- keine Zertifizierung von Wallet-/Trust-Komponenten,
- keine Entscheidung, welche Attribute rechtlich abgefragt werden duerfen.

Monetarisierung:

- 299 bis 2.000 EUR monatlich fuer kleinere Relying Parties,
- 2.000 bis 15.000 EUR monatlich fuer Trust-/Ident-Anbieter,
- Setup 5.000 bis 100.000 EUR fuer Rollen, Datenfelder und Prozessdokumentation,
- Partnerumsatz mit Ident-Anbietern, Datenschutz, IT-Security und eIDAS-Beratern.

Warum stark:

Noch frueh, aber strategisch sehr interessant. Kein Startprodukt, aber spaeter stark fuer Plattformen und digitale Identitaet.

### 59.6 Batterie-Due-Diligence-, CO2-Footprint- und Batteriepass-Spezialakte

Batteriepass wurde bereits erwaehnt, aber die Batterieverordnung verdient als eigenes Spezialmodul mehr Tiefe. Die EU-Batterieverordnung EU 2023/1542 bringt Anforderungen zu CO2-Fussabdruck, Rezyklat, Kennzeichnung, Sorgfaltspflichten, Batteriepass und Altbatterien. Das Umweltbundesamt weist darauf hin, dass seit 07.10.2025 das Batterierecht-Durchfuehrungsgesetz in Deutschland gilt.

Quellen:

- EUR-Lex Batteries Regulation Summary: https://eur-lex.europa.eu/EN/legal-content/summary/sustainability-rules-for-batteries-and-waste-batteries.html
- EUR-Lex Regulation EU 2023/1542: https://eur-lex.europa.eu/eli/reg/2023/1542/oj/eng
- Umweltbundesamt Batterien und Altbatterien: https://www.umweltbundesamt.de/themen/abfall-ressourcen/produktverantwortung-in-der-abfallwirtschaft/batterien-altbatterien
- IHK Elbe-Weser EU-Batterieverordnung: https://www.ihk.de/elbeweser/produktmarken/themen-fuer-unternehmen/umweltschutz/abfallwirtschaft/eu-batterieverordnung-6061356

Zielgruppen:

- Batteriehersteller,
- Importeure,
- E-Bike-/E-Scooter-/LEV-Anbieter,
- Industrie- und Traktionsbatterieanbieter,
- Elektronikhersteller,
- Maschinenbauer mit Batteriekomponenten,
- Recycling- und Ruecknahmesysteme.

Was wir anbieten koennen:

- Batterieproduktakte pro Modell,
- CO2-Footprint-Belegordner,
- Rohstoff-/Lieferketten-/Due-Diligence-Nachweise,
- Rezyklat- und Materialdaten,
- Batteriepass-Datenfelder,
- Kennzeichnungs- und QR-Daten,
- Altbatterie-/Ruecknahme- und Registrierungunterlagen,
- Export an Berater, Pruefer, DPP-/Batteriepassanbieter oder Kunden.

Was das Tool nicht tun sollte:

- keine CO2-Berechnung fachlich freigeben,
- keine Rohstoff-Sorgfaltspflichtbewertung,
- keine Batteriepass-Konformitaetsgarantie.

Monetarisierung:

- 299 bis 1.500 EUR monatlich fuer kleine Anbieter,
- 1.500 bis 10.000 EUR monatlich fuer groessere Produktportfolios,
- Setup 3.000 bis 100.000 EUR fuer Lieferketten- und Produktdaten,
- Partnerumsatz mit Laboren, DPP-Anbietern, Batteriepass-Dienstleistern, ESG-/Lieferkettenberatern.

Warum stark:

Sehr guter Spezialbaustein in der Produktakte. Besonders stark fuer E-Mobility, Industrie, Elektronik und Importeure.

### 59.7 EU-Methanverordnung-, Fossilimport- und Energiehandelsakte

Die EU-Methanverordnung EU 2024/1787 bringt fuer Oel-, Gas- und Kohlesektor sowie Importeure stufenweise Pflichten zu Messung, Ueberwachung, Berichterstattung, Verifizierung und Importinformationen. Die EU-Kommission nennt fuer Importe unter anderem Berichtspflichten ab 2025, MRV-Anforderungen ab 2027, Methanintensitaetsberichte ab 2028 und Intensitaetsanforderungen ab 2030.

Quellen:

- EU-Kommission Methane emissions: https://energy.ec.europa.eu/topics/carbon-management-and-fossil-fuels/methane-emissions_en
- EUR-Lex Methane Regulation Summary: https://eur-lex.europa.eu/EN/legal-content/summary/reducing-methane-emissions-in-the-energy-sector.html
- EUR-Lex Regulation EU 2024/1787: https://eur-lex.europa.eu/legal-content/EN/TXT/HTML/?uri=CELEX%3A32024R1787
- EU-Kommission Q&A Importer Requirements: https://energy.ec.europa.eu/document/download/b545c5a6-03c9-4cfa-805a-0411de927ce6_en?filename=Methane+regulation+import+requirements+Q%26A.pdf

Zielgruppen:

- Gasimporteure,
- Oelimporteure,
- Kohleimporteure,
- Energiehaendler,
- Industrieunternehmen mit direktem Brennstoffimport,
- Berater fuer Energiehandel und Emissionsdaten.

Was wir anbieten koennen:

- Methan-Importakte,
- Lieferanten- und Vertragsdatenordner,
- Herkunfts-, Route- und MRV-Belege,
- jaehrlicher Berichtsdatenraum,
- Fristen fuer 2025/2027/2028/2030,
- Nachweisordner fuer Lieferantenkommunikation,
- Export an Energieberater, Rechtsberater oder internes Compliance-Team.

Was das Tool nicht tun sollte:

- keine Methanintensitaet fachlich berechnen,
- keine Importfreigabe,
- keine Energiehandels- oder Sanktionsberatung.

Monetarisierung:

- 1.000 bis 10.000 EUR monatlich,
- Setup 10.000 bis 150.000 EUR fuer Vertrags- und Lieferantendaten,
- Partnerumsatz mit Energieberatern, Emissionsdatenanbietern, Verifizierern und Kanzleien.

Warum stark:

Sehr wenige Kunden, aber sehr hohe Werte. Ein klassisches Premium- und Partnerprodukt.

### 59.8 CSRD-/ESRS-/Taxonomie-Datenpunkt- und Prueferakte

Durch Omnibus wurde die Zielgruppe kleiner, aber nicht wertlos. CSR-in-Deutschland beschreibt, dass der CSRD-Anwendungsbereich nach Omnibus auf groessere Unternehmen fokussiert wird; KMU koennen freiwillig nach VSME berichten. EFRAG stellt ESRS und vereinfachte ESRS-Entwuerfe bereit. Fuer uns ist der Kern nicht "Nachhaltigkeitsberatung", sondern Datenpunkt-, Beleg- und Prueferakte.

Quellen:

- CSR-in-Deutschland Omnibus I: https://www.csr-in-deutschland.de/DE/Service/Meldungen/2026/omnibus-1-richtlinie-in-kraft-getreten.html
- DIHK Nachhaltigkeitsberichterstattung: https://www.dihk.de/de/themenfelder/nachhaltigkeit/quo-vadis-nachhaltigkeitsberichterstattung--161496
- EFRAG ESRS Set 1: https://xbrl.efrag.org/e-esrs/esrs-set1-2023.html
- EFRAG Draft Simplified ESRS: https://www.efrag.org/en/draft-simplified-esrs
- EU-Kommission Simplification: https://commission.europa.eu/law/law-making-process/better-regulation/simplification-implementation-and-enforcement/simplification_en

Zielgruppen:

- CSRD-pflichtige Grossunternehmen,
- Tochtergesellschaften,
- Lieferanten mit Datenanfragen,
- ESG-Teams,
- Wirtschaftspruefer-nahe Dienstleister,
- Nachhaltigkeitsberater.

Was wir anbieten koennen:

- ESRS-/Taxonomie-Datenpunktakte,
- Belegordner pro Datenpunkt,
- Verantwortliche, Quelle, Jahr, Version und Freigabestatus,
- Kunden-/Prueferfragebogen-Inbox,
- Nachforderungs- und Aufgabenworkflow,
- Export fuer Wirtschaftspruefer, Nachhaltigkeitsberater, Konzern oder Kunde.

Was das Tool nicht tun sollte:

- keine doppelte Wesentlichkeitsanalyse als Fachurteil,
- keine Taxonomie-Klassifizierung als finale Bewertung,
- keine Nachhaltigkeitsbericht-Freigabe.

Monetarisierung:

- 299 bis 1.500 EUR monatlich fuer Lieferanten/KMU-Datenraeume,
- 1.500 bis 15.000 EUR monatlich fuer groessere Unternehmen,
- Setup 5.000 bis 150.000 EUR fuer Datenpunkte, Belegmigration und Prueferstruktur,
- Partnerumsatz mit ESG-Beratern, Wirtschaftspruefern und Softwareintegratoren.

Warum stark:

Wegen Omnibus weniger breit als frueher, aber fuer die verbleibenden Unternehmen und deren Lieferanten weiterhin ein Datenchaos mit Budget.

### 59.9 E-Rechnung-, ViDA-, Rechnungsannahme- und Archivakte fuer Kunden

E-Rechnung wurde bisher vor allem fuer unsere eigene Abrechnung erwaehnt. Als Kundennutzen ist es aber ein eigenes Produktfeld. Seit 01.01.2025 muessen Unternehmen in Deutschland E-Rechnungen im B2B-Bereich empfangen koennen. Die EU-ViDA-Regeln bringen ab 2030 digitale Meldeanforderungen fuer grenzueberschreitende B2B-Transaktionen auf Basis von E-Invoicing.

Quellen:

- BMF FAQ E-Rechnung: https://www.bundesfinanzministerium.de/Content/DE/FAQ/e-rechnung.html
- IHK Frankfurt E-Rechnungspflicht: https://www.frankfurt-main.ihk.de/recht/uebersicht-alle-rechtsthemen/steuerrecht/umsatzsteuer-national/e-rechnungspflicht-ab-2025-6055774
- EU ViDA: https://taxation-customs.ec.europa.eu/taxation/vat/vat-digital-age-vida_en
- EU ViDA Work Programme 2026: https://taxation-customs.ec.europa.eu/news/vat-digital-age-2026-work-programme-available-2026-05-22_en

Zielgruppen:

- kleine Unternehmen ohne ERP,
- Handwerk,
- Agenturen,
- Dienstleister,
- Vereine/Organisationen mit B2B-Rechnungen,
- Steuerberaterkunden,
- Lieferanten grosser Firmen.

Was wir anbieten koennen:

- E-Rechnungs-Inbox,
- XRechnung-/ZUGFeRD-Ablage,
- Lesbarmachung und PDF-Ansicht,
- Pruefprotokoll technischer Felder,
- Freigabe- und Zahlungsstatus,
- GoBD-/Archivordner als Ablagepunkt,
- Export an Steuerberater, DATEV-nahe Prozesse oder Buchhaltung.

Was das Tool nicht tun sollte:

- keine steuerliche Rechnungspruefung,
- keine GoBD-Freigabe,
- keine Umsatzsteuerberatung.

Monetarisierung:

- 19 bis 99 EUR monatlich fuer kleine Betriebe,
- 99 bis 499 EUR monatlich fuer mehrere Nutzer/Standorte,
- Setup 200 bis 5.000 EUR fuer Altarchiv und Steuerberaterstruktur,
- Partnerumsatz mit Steuerberatern, Buchhaltungsservices und E-Rechnungsanbietern.

Warum stark:

Sehr breit, aber stark umkaempft. Eher als Einstiegs-/Add-on-Funktion fuer Betriebsakte, nicht als eigene Millionenidee allein.

### 59.10 Kurzzeitvermietungs-, Plattformdaten- und Registrierungsnummernakte

Die EU-Verordnung 2024/1028 zu Short-Term Rentals bringt Regeln fuer Datenweitergabe, Registrierungsnummern und Plattformpflichten. Die EU-Kommission beschreibt, dass Plattformen Registrierungsnummern anzeigen und pruefen sowie monatliche Daten zu Aufenthalten und Naechten an Behoerden uebermitteln sollen, wenn Mitgliedstaaten diese Regeln anwenden.

Quellen:

- EU-Kommission Short-Term Rentals News: https://single-market-economy.ec.europa.eu/news/new-rules-bring-increased-transparency-short-term-rentals-sector-2026-05-20_en
- EUR-Lex Summary Short-Term Rentals: https://eur-lex.europa.eu/EN/legal-content/summary/online-short-term-accommodation-rental-services-data-collection-and-sharing.html
- EUR-Lex Regulation EU 2024/1028: https://eur-lex.europa.eu/eli/reg/2024/1028/oj/eng

Zielgruppen:

- Ferienwohnungsplattformen,
- Buchungsportale,
- Property Manager,
- Betreiber vieler Ferienwohnungen,
- Tourismusportale,
- Kommunal-nahe Plattformen.

Was wir anbieten koennen:

- Registrierungsnummernakte pro Objekt,
- Objekt-, Host- und Plattformdaten,
- monatlicher Aufenthalts-/Naechte-Datenraum,
- Plausibilitaets- und Vollstaendigkeitscheck,
- Schnittstellenexport an Plattform oder Behoerde,
- Nachweisordner fuer Loeschung, Korrektur und Kommunikation.

Was das Tool nicht tun sollte:

- keine Zweckentfremdungs- oder Erlaubnisentscheidung,
- keine kommunalrechtliche Beratung,
- keine Steuerberatung zur Vermietung.

Monetarisierung:

- 49 bis 299 EUR monatlich fuer kleine Property Manager,
- 299 bis 2.000 EUR monatlich fuer Plattformen/Portale,
- Setup 1.000 bis 50.000 EUR fuer Objektimport und Schnittstellen,
- Partnerumsatz mit PMS-/Channelmanager-Anbietern, Steuerberatern und Kommunalberatern.

Warum stark:

Nicht breit fuer alle Betriebe, aber sehr konkreter Daten- und Plattformdruck. Gut als Speziallandingpage unter Plattform-/Tourismusakte.

### 59.11 EPBD-, Gewerbeimmobilien-, Renovierungspass- und Solar-Gebaeudeakte

Die neue EU-Gebaeuderichtlinie 2024/1275 bringt nationale Umsetzungsarbeit rund um Energieausweise, Renovierungspaesse, Mindestenergieperformance fuer Nichtwohngebaeude, Solarenergie auf Gebaeuden und Lebenszyklus-Treibhausgaswerte neuer Gebaeude. Die EU-Kommission nennt unter anderem Renovierungspaesse, Solarenergie in Gebaeuden und Datenbanken fuer Energieperformance.

Quellen:

- EU-Kommission EPBD: https://energy.ec.europa.eu/topics/energy-efficiency/energy-performance-buildings/energy-performance-buildings-directive_en
- EUR-Lex EPBD Summary: https://eur-lex.europa.eu/EN/legal-content/summary/energy-performance-of-buildings.html
- EU-Kommission Renovation Passport Guidance: https://energy.ec.europa.eu/document/download/0a4a6d59-58c0-4e80-a58a-a6ee944573ab_en?filename=Renovation+passport+%28Article+12%2C+Annex+VIII%29+-+annex+4.pdf
- EU-Kommission Solar Energy in Buildings: https://energy.ec.europa.eu/topics/energy-efficiency/energy-performance-buildings/energy-performance-buildings-directive/solar-energy-buildings_en

Zielgruppen:

- Gewerbeimmobilienbesitzer,
- Hausverwaltungen,
- Filialisten,
- Logistikimmobilienbetreiber,
- Retail-Parks,
- Bueroimmobilien,
- Energieberater,
- ESG-/Immobilienberater.

Was wir anbieten koennen:

- Gebaeude-Energieakte pro Objekt,
- Energieausweis-, Sanierungsfahrplan- und Renovierungspass-Unterlagen,
- PV-/Solar-/Dachflaechen- und Genehmigungsordner,
- Lebenszyklus-/GWP-Belegdaten fuer Neubauten als Ablage,
- Fristen fuer Energieausweise, technische Inspektionen und Nachweise,
- Export an Energieberater, Finanzierer, Mieter, Eigentuemer oder ESG-Team.

Was das Tool nicht tun sollte:

- keine energetische Bewertung,
- keine Sanierungsempfehlung als Fachgutachten,
- keine Aussage, ob ein Gebaeude bestimmte nationale Grenzwerte einhaelt.

Monetarisierung:

- 99 bis 499 EUR monatlich fuer kleine Immobilienportfolios,
- 499 bis 5.000 EUR monatlich fuer groessere Portfolios,
- Setup 1.000 bis 100.000 EUR fuer Objekt- und Dokumentenmigration,
- Partnerumsatz mit Energieberatern, PV-Anbietern, Sanierungsberatern und Immobilien-ESG-Beratern.

Warum stark:

Immobilien haben viele Belege, hohe Werte und wiederkehrende Fristen. Als reine Pflichtseite zu breit, als Objektakte sehr gut.

### 59.12 TISAX-, ISO-, IFS-/BRCGS- und Kundenaudit-Datenraum

Das ist kein klassisches Gesetz, aber kommerziell extrem interessant. Viele Firmen zahlen nicht, weil der Staat fragt, sondern weil Kunden, OEMs, Handelspartner oder Zertifizierer Nachweise verlangen. TISAX ist laut ENX ein Assessment- und Austauschmechanismus fuer Informationssicherheit. VDA verweist auf den VDA-ISA-Katalog fuer die Automotive-Wertschoepfungskette. IFS und BRCGS sind wichtige Audit-/Zertifizierungswelten im Lebensmittelbereich. ISO 9001 ist ein weltweit etablierter Managementsystemstandard mit Zertifizierung durch unabhaengige Zertifizierungsstellen.

Quellen:

- ENX TISAX: https://enx.com/tisax
- VDA Information Security: https://www.vda.de/en/topics/digitization/data/information-security
- IFS Food Standard: https://www.ifs-certification.com/index.php/en/ifs-portfolio/standards/food-standard
- BRCGS Food Safety: https://www.brcgs.com/our-standards/food-safety/
- ISO 9001 explained: https://www.iso.org/home/insights-news/resources/iso-9001-explained.html

Zielgruppen:

- Automotive-Zulieferer,
- Software- und Entwicklungsdienstleister fuer OEMs,
- Lebensmittelhersteller,
- Verpackungshersteller,
- Logistiker,
- Industriezulieferer,
- Agenturen und Dienstleister mit Kundenaudits,
- Unternehmen mit ISO-, TISAX-, IFS-, BRCGS- oder Lieferantenaudits.

Was wir anbieten koennen:

- Kundenaudit-Datenraum,
- Zertifikats- und Massnahmenordner,
- Auditfragebogen-Inbox,
- Nachweisbibliothek fuer Policies, Schulungen, Prozesse, Zertifikate, Lieferanten, Vorfaelle und Korrekturmassnahmen,
- Aufgaben und Verantwortlichkeiten je Audit,
- Ablauf- und Rezertifizierungsfristen,
- Export an Kunde, Auditor, Zertifizierer oder Berater.

Was das Tool nicht tun sollte:

- keine Zertifizierung ersetzen,
- keine ISO-/TISAX-/IFS-/BRCGS-Konformitaetsbewertung,
- keine Auditfreigabe.

Monetarisierung:

- 99 bis 499 EUR monatlich fuer kleine Unternehmen,
- 499 bis 3.000 EUR monatlich fuer mehrere Standorte oder viele Kundenaudits,
- Setup 1.000 bis 50.000 EUR fuer Nachweisbibliothek, Fragebogenmigration und Zertifikatsstruktur,
- Partnerumsatz mit Auditoren, Zertifizierern, QM-Beratern, ISMS-Beratern und Schulungsanbietern.

Warum stark:

Das ist vielleicht einer der besten kommerziellen Nicht-Gesetz-Bausteine. Kundendruck ist oft haerter als Gesetzesdruck, und der Nutzen ist sofort klar: "Wir finden deine Nachweise schneller und du verlierst weniger Zeit in Audits."

### 59.13 Bewertung dieser Runde

Neue Start- oder Fruehphasen-Kandidaten:

1. BFSG-Accessibility-Scanner
   - sofort online,
   - starker Scan-Nutzen,
   - viele Shops und Agenturen,
   - gute SEO-Fragen.

2. TISAX-/ISO-/IFS-/Kundenaudit-Datenraum
   - kein Rechtsrisiko im Kern,
   - sehr klare Zahlungsbereitschaft,
   - Kundendruck statt nur Gesetzesdruck,
   - sehr gut fuer Abo und Setup.

3. E-Rechnungs-Inbox/Archiv als Betriebsakte-Add-on
   - sehr breit,
   - niedriger Preis,
   - guter Einstieg fuer kleine Betriebe,
   - aber hohe Konkurrenz.

4. EPBD-/Gewerbeimmobilien-Energieakte
   - guter Portfolio-Fit,
   - hohe Objektwerte,
   - stark mit Partnern.

Premium-Spezialfelder:

5. DORA-Informationsregister
   - sehr hohes Ticket,
   - konkrete Datenstruktur,
   - Finanz-/IKT-Partnerkanal.

6. EHDS-/EHR-Systemakte
   - sehr hohes Ticket,
   - Health-IT-Spezialmarkt,
   - fachlich anspruchsvoll.

7. Batterie-Due-Diligence-/Batteriepass-Akte
   - sehr stark fuer Produktakte,
   - besonders E-Mobility/Industrie/Elektronik.

8. MiCA-Kryptoakte
   - kleines Feld,
   - hohe Preise,
   - nur mit Partnern.

9. eIDAS2-/Wallet-/Trust-Service-Akte
   - fruehes Zukunftsfeld,
   - gut fuer Plattformen/Ident.

10. EU-Methan-Importakte
   - extrem speziell,
   - sehr hohe Tickets,
   - Energiehandel/Importeure.

11. Kurzzeitvermietungs-/Plattformdatenakte
   - gutes Spezialfeld fuer Portale,
   - wenig passend fuer allgemeine Betriebsakte, aber gut fuer Plattformakte.

### 59.14 Konsequenz nach dieser Tiefenrunde

Die beste Produktarchitektur wird jetzt noch klarer:

Es gibt eine breite Basis:

- Produktakte,
- Betriebsakte,
- Audit-/Nachweisakte,
- Fristen-/Exportordner.

Und es gibt Spezialwelten:

- Shop/Produkt/Accessibility,
- Audit/Zertifikat/Kundennachweis,
- Finance/DORA,
- Health/EHDS,
- Immobilien/Energie,
- Logistik/Zoll,
- Plattformdaten,
- Energiehandel/Methan,
- Krypto/MiCA.

Der neue wichtigste Zusatz zum Startplan ist:

**Nicht nur gesetzliche Pflichten verkaufen, sondern auch Kundenaudit- und Zertifikatsstress.**

Das ist kommerziell fast noch besser, weil Unternehmen dort unmittelbar Umsatz verlieren koennen, wenn sie Nachweise nicht schnell liefern. Damit wird die Website glaubwuerdiger und weniger nach "Pflichten-Angstseite". Sie wird zu:

**Die Nachweisplattform fuer Gesetze, Kunden, Audits, Produkte, Immobilien und digitale Dienste.**

Neue Startreihenfolge nach dieser Runde:

1. Produktakte mit GPSR/PPWR/Green Claims/Right to Repair,
2. BFSG-Accessibility-Scanner fuer Shops und Agenturen,
3. Kundenaudit-/Zertifikatsdatenraum,
4. VSME-/Kundenfragebogenakte,
5. E-Rechnung-/Dokumenten-Inbox als einfaches Add-on,
6. DORA/Batterie/EHDS/EPBD als teure Spezialpakete spaeter.

## 60. Noch tiefere Lueckenrunde: Auftrag gewinnen, Police bekommen, Foerderung sichern, Audit bestehen

Diese Runde ist wichtig, weil sie zeigt: Die Plattform sollte nicht nur Pflichten verwalten, sondern auch kommerzielle Zugangshuerden. Firmen zahlen sehr gern, wenn ein sauberer Nachweisordner direkt hilft bei:

- oeffentlichen Auftraegen,
- grossen Kunden,
- Versicherungen,
- Foerdermitteln,
- Zertifizierungen,
- Cloud-/SaaS-Vertrauen,
- Industrie-, Bahn-, Luftfahrt- oder Schifffahrtsaudits.

Das ist RDG-aermer als ein Pflichtfinder, weil wir nicht entscheiden, ob eine Norm erfuellt ist. Wir sammeln Nachweise, Fristen, Versionen, Verantwortliche, Freigaben, Kommentare und Exporte.

Der neue Leitsatz:

**Nicht nur "Nichts vergessen. Alles nachweisen koennen.", sondern auch: "Schneller nachweisen, damit Auftrag, Police, Foerderung und Audit nicht liegen bleiben."**

### 60.1 Vergabe-, Praequalifikations-, EEE- und Bieterakte

Oeffentliche Ausschreibungen sind ein sehr guter Nachweisfall. Unternehmen muessen Eignungsnachweise, Referenzen, Eigenerklaerungen, Bescheinigungen, Versicherungen, Registerauszuege, Zertifikate und Fristen sauber bereithalten. Die Einheitliche Europaeische Eigenerklaerung (EEE) ersetzt vorlaeufig bestimmte Bescheinigungen, aber die Nachweise muessen spaeter oder auf Anforderung vorgelegt werden koennen. Praequalifikation ueber AVPQ oder PQ-VOB ist ebenfalls dokumentengetrieben.

Quellen:

- BMWE Einheitliche Europaeische Eigenerklaerung: https://www.bundeswirtschaftsministerium.de/Redaktion/DE/Artikel/Wirtschaft/reform-der-eu-weiten-vergaben.html
- Beschaffungsamt EEE: https://www.bescha.bund.de/e-Vergabe/DE/5%20Service/EEE/node_EEE.html
- Amtliches Verzeichnis IHK: https://amtliches-verzeichnis.ihk.de/
- e-Vergabe Praequalifizierung: https://www.evergabe-online.info/e-Vergabe/DE/3%20Unternehmen/Pr%C3%A4qualifizierung/node_Pr%C3%A4qualifizierung.html
- Auftragsberatungsstellen AVPQ: https://www.auftragsberatungsstellen.de/avpq

Zielgruppen:

- Bau- und Handwerksbetriebe,
- IT-Dienstleister,
- Reinigungsfirmen,
- Sicherheitsdienste,
- Planungsbueros,
- Lieferanten von Schulen, Kommunen, Kliniken und Behoerden,
- Firmen, die regelmaessig EU-weite oder nationale Ausschreibungen bedienen.

Angebot:

- Bieterprofil je Unternehmen,
- EEE-/ESPD-Datenablage,
- AVPQ-/PQ-VOB-Unterlagenordner,
- Zertifikats- und Bescheinigungsfristen,
- Referenzdatenbank,
- Angebotsfristenkalender,
- Checkliste "Welche Unterlagen liegen bereit?",
- Export "Bieter-Nachweisordner",
- Freigabelog fuer interne Pruefung,
- Rollen fuer Vertrieb, Kalkulation, Geschaeftsfuehrung und externe Vergabeberater.

Geld:

- 49 bis 249 EUR monatlich fuer kleine Bieter,
- 299 bis 999 EUR monatlich fuer regelmaessige Ausschreibungsteilnehmer,
- 1.000 bis 10.000 EUR Setup fuer Referenzmigration, Zertifikatsstruktur und Benutzerrollen,
- Partnerumsatz mit Vergabeberatern, AVPQ-/PQ-Unterstuetzern, Versicherern und Branchenverbaenden.

Warum stark:

- direkter Geldbezug: ohne Unterlagen kein Zuschlag,
- hohe Wiederholung: jede Ausschreibung braucht dieselben Stammdaten plus neue Fristen,
- sehr gute SEO-Mikrofragen: "EEE Nachweise bereithalten", "AVPQ Unterlagen", "PQ VOB Dokumente", "Bieter Eignungsnachweise verwalten".

Grenze:

- keine Vergaberechtsberatung,
- keine Bewertung, ob ein Unternehmen geeignet ist,
- keine Angebotsstrategie,
- nur Nachweisakte, Fristen, Vorlagen, Quellen, Export und Partnerhinweis.

### 60.2 Foerdermittel-, Zuwendungs- und Verwendungsnachweisakte

Foerdermittel sind kein Rechts-Pflichtthema, aber ein sehr gutes Geldthema. Sobald ein Unternehmen einen Zuschuss oder eine gefoerderte Massnahme bekommt, entstehen Beleg-, Frist-, Rechnungs-, Sachberichts- und Verwendungsnachweisprozesse. Wer Fristen oder Belege verpasst, riskiert Auszahlung, Rueckforderung oder lange Nachforderungen.

Quellen:

- Foerderdatenbank Beispiel Verwendungsnachweis: https://www.foerderdatenbank.de/FDB/Content/DE/Foerderprogramm/Bund/BMWi/beratungsgutscheine-afrika.html
- BAFA BEG Merkblatt Antragstellung: https://www.bafa.de/SharedDocs/Downloads/DE/Energie/beg_merkblatt_allgemein_antragstellung_31122023.pdf
- KfW Nachweiseinreichung Unternehmen/Nichtwohngebaeude: https://www.kfw.de/inlandsfoerderung/Heizungsf%C3%B6rderung/Nachweiseinreichung/Checkliste-Nachweiseinreichung-522.html
- Foerderdatenbank GreenInvest Ress Beispiel: https://www.foerderdatenbank.de/FDB/Content/DE/Foerderprogramm/Land/Thueringen/foederung-ressourcenschonung-greeninvest-ress.html

Zielgruppen:

- Unternehmen mit Energie-, Digitalisierungs-, Maschinen-, Beratungs- oder Baufoerderung,
- Energieberater,
- Foerdermittelberater,
- Handwerksbetriebe mit gefoerderten Kundenprojekten,
- Immobiliengesellschaften,
- KMU mit Investitionszuschuss.

Angebot:

- Projektakte je Foerderbescheid,
- Bewilligungszeitraum und Fristen,
- Rechnungs- und Zahlungsbelegordner,
- Sachbericht-Vorlage als Muster,
- Fotodokumentation,
- Rollen fuer Unternehmen, Berater, Steuerberater und Energieeffizienzexperten,
- Export "Verwendungsnachweis-Unterlagen",
- Erinnerungen vor Fristende,
- Beleglueckenliste.

Geld:

- 39 bis 199 EUR monatlich pro Unternehmen,
- 19 bis 99 EUR monatlich pro Foerderprojekt als Add-on,
- 299 bis 2.500 EUR Setup je Projekt,
- Partnerprovisionen mit Foerdermittel-, Energie- und Digitalisierungsberatern.

Warum stark:

- Kunde sieht sofort Geldbezug,
- sehr online-faehig,
- kein Callcenter noetig,
- guter Leadmagnet: "Foerdermittel-Unterlagen nicht verlieren".

Grenze:

- keine Foerderfaehigkeitsentscheidung,
- keine Antragstellung als Rechts-/Steuerberatung,
- keine Garantie auf Auszahlung,
- nur Belege, Fristen, Projektakte und Export.

### 60.3 Cyberversicherungs-, Risikofragebogen- und Obliegenheitsakte

Cyberversicherungen sind ein starker kommerzieller Trigger. Versicherer fragen IT-Sicherheitsmassnahmen, Backups, MFA, Patchmanagement, Berechtigungen, Notfallplaene und Schulungen ab. Das GDV hat einen Muster-Risikofragebogen fuer Cyberversicherungen veroeffentlicht; das BSI beschreibt den CyberRisikoCheck nach DIN SPEC 27076 fuer KMU.

Quellen:

- GDV Muster-Risikofragebogen Cyberversicherung, PDF: https://www.gdv.de/resource/blob/6102/0e5e65afe025a091c76d45ed5cb0bdbe/02-risikofragebogen-cyber-data.pdf
- BSI CyberRisikoCheck nach DIN SPEC 27076: https://www.bsi.bund.de/DE/Themen/Unternehmen-und-Organisationen/Informationen-und-Empfehlungen/KMU/CyberRisikoCheck/CyberRisikoCheck_node.html
- Allianz fuer Cyber-Sicherheit Cyber-Sicherheits-Check: https://www.allianz-fuer-cybersicherheit.de/Webs/ACS/DE/Informationen-und-Empfehlungen/Informationen-und-weiterfuehrende-Angebote/Cyber-Sicherheitscheck/cyber-sicherheitscheck_node.html
- Bitkom Leitfaden Cyberversicherung und Sicherheit: https://www.bitkom.org/sites/main/files/2024-05/240516lfcyberversicherungundsicherheit.pdf

Zielgruppen:

- KMU mit Cyberversicherung oder Angebotseinholung,
- Steuerkanzleien,
- Arztpraxen,
- Onlinehaendler,
- Agenturen,
- SaaS-Anbieter,
- Industrie- und Handwerksbetriebe mit Kunden- oder Versichererdruck.

Angebot:

- Cyber-Police-Akte,
- Risikofragebogen-Datenraum,
- Nachweise fuer Backup, MFA, Virenschutz, Patchprozess, Rechtekonzept, Notfallkontakt,
- Schulungs- und Phishing-Trainingsnachweise,
- Fristen fuer Policenverlaengerung,
- Schadenfall-Unterlagenordner,
- Export an Makler, Versicherer oder IT-Dienstleister,
- Partnervermittlung an Cybermakler, IT-Sicherheitsberater, MSPs und Backupanbieter.

Geld:

- 49 bis 299 EUR monatlich,
- 499 bis 5.000 EUR Setup fuer Erstbefuellung,
- Lead-Provisionen ueber Makler/Versicherer nur nach separater 34d-/Vermittlerpruefung oder als neutraler Partnerhinweis,
- hohe Upsell-Chance zu NIS2-/Cyber-/Trust-Center-Modulen.

Warum stark:

- Versicherungsabschluss oder -verlaengerung ist ein klares Ereignis,
- viele Firmen haben Nachweise nicht an einem Ort,
- sehr gut online erklaerbar,
- kein Rechtsurteil noetig.

Grenze:

- keine Versicherungsberatung,
- keine Garantie auf Annahme durch Versicherer,
- keine IT-Sicherheitszertifizierung,
- nur Nachweise, Fragebogenorganisation, Fristen und Export.

### 60.4 Cloud-/SaaS-Trust-Center, C5-, SOC-2- und Kunden-Security-Datenraum

SaaS- und Cloudanbieter verlieren Deals, wenn sie Sicherheitsfrageboegen, TOMs, Zertifikate, Pentest-Zusammenfassungen, AVV, Subprozessoren, Incident-Prozesse oder Trust-Dokumente nicht schnell liefern. BSI C5 ist ein deutscher Cloud-Sicherheitskriterienkatalog. SOC-Berichte der AICPA dienen Kunden zur Beurteilung von ausgelagerten Services. Daraus wird kein eigenes Audit, sondern ein Trust-Center-Datenraum.

Quellen:

- BSI C5 Criteria Catalogue: https://www.bsi.bund.de/EN/Themen/Unternehmen-und-Organisationen/Informationen-und-Empfehlungen/Empfehlungen-nach-Angriffszielen/Cloud-Computing/Kriterienkatalog-C5/kriterienkatalog-c5_node.html
- BSI C5:2026/2025-Updatebereich: https://www.bsi.bund.de/EN/Themen/Unternehmen-und-Organisationen/Informationen-und-Empfehlungen/Empfehlungen-nach-Angriffszielen/Cloud-Computing/Kriterienkatalog-C5/C5_2025/C5_2025_node.html
- AICPA SOC Suite of Services: https://www.aicpa-cima.com/resources/landing/system-and-organization-controls-soc-suite-of-services
- AICPA Trust Services Criteria: https://www.aicpa-cima.com/resources/download/2017-trust-services-criteria-with-revised-points-of-focus-2022

Zielgruppen:

- SaaS-Anbieter,
- Hosting-/Cloud-Anbieter,
- MSPs,
- Agenturen mit Enterprise-Kunden,
- Health-/Finance-/GovTech-Anbieter,
- KI-Tool-Anbieter.

Angebot:

- oeffentliches oder gated Trust Center,
- NDA-geschuetzte Dokumentenfreigabe,
- Zertifikats- und Attestordner,
- Subprozessorenliste,
- AVV-/DPA-Downloadbereich,
- Sicherheitsfragebogen-Antwortspeicher,
- Versionierung von TOMs, Policies, Incident-Prozess, Backup-Konzept,
- Kundenfreigaben mit Ablaufdatum,
- Export fuer Enterprise-Kunden, Einkauf, Datenschutz, IT-Security und Auditoren.

Geld:

- 199 bis 2.000 EUR monatlich,
- 1.000 bis 25.000 EUR Setup fuer bestehende Dokumente, Kundenfrageboegen und Freigabestruktur,
- grosse Kunden zahlen mehr wegen Deal-Blocker-Nutzen,
- Partnerumsatz mit Datenschutz, Pentest, ISO-27001-, C5- und SOC-2-Pruefern.

Warum stark:

- extrem klarer Deal-Nutzen,
- sehr hohe Zahlungsbereitschaft bei SaaS,
- passend zu "online ohne Telefon",
- der Kunde kann per Link Vertrauen schaffen.

Grenze:

- keine C5-/SOC-2-/ISO-Zertifizierung,
- keine Sicherheitsgarantie,
- keine externe Pruefleistung,
- nur Trust-Datenraum, Dokumentenmanagement, Freigaben und Export.

### 60.5 EcoVadis-, SAQ-, CDP-, Sedex-/SMETA- und Einkaufsfragebogen-Datenraum

Diese Kategorie ist wahrscheinlich einer der besten nicht-juristischen Umsatzhebel. Lieferanten bekommen von Kunden Frageboegen zu Nachhaltigkeit, Menschenrechten, Klima, Wasser, Wald, Ethik, Arbeitsschutz, Einkauf, Datenschutz, Informationssicherheit und Zertifikaten. EcoVadis, CDP, Sedex/SMETA und SAQ 5.0 sind Beispiele. Firmen zahlen, weil schlechte oder langsame Antworten echte Kundenbeziehungen kosten koennen.

Quellen:

- EcoVadis Sustainability Questionnaire: https://resources.ecovadis.com/ecovadis-solution-materials/ecovadis-questionnaire-subs
- CDP Question Bank: https://www.cdp.net/en/disclose/question-bank
- CDP Supply Chain: https://www.cdp.net/en/supply-chain
- Sedex SMETA Audit: https://www.sedex.com/solutions/smeta-audit/
- Drive Sustainability SAQ 5.0: https://www.drivesustainability.org/wp-content/uploads/2025/05/SAQ-5.0_Modularity_EN.pdf
- NQC SAQ: https://nqc.com/solutions/saq

Zielgruppen:

- Automotive-Zulieferer,
- Lebensmittel- und Konsumgueterlieferanten,
- Verpackungs-, Textil-, Elektronik- und Chemielieferanten,
- Maschinenbau,
- Handelsmarken-Zulieferer,
- Mittelstaendler mit Grosskunden.

Angebot:

- Fragebogenbibliothek,
- Antwortspeicher mit Quellen/Belegen,
- Nachweisbibliothek fuer Policies, Zertifikate, Schulungen, Audits, Energie, Abfall, Arbeitsschutz, Lieferkette,
- Wiederverwendung frueherer Antworten,
- Dokumenten-Ablaufwarnungen,
- Aufgaben fuer Fachabteilungen,
- Export/Share-Link an Kunde, Einkauf, Auditor oder Berater,
- Lueckenliste "Beleg fehlt".

Geld:

- 199 bis 1.500 EUR monatlich,
- 1.000 bis 30.000 EUR Setup fuer Migration alter Frageboegen und Nachweise,
- Premium fuer mehrere Kundenportale und Sprachen,
- Partnerumsatz mit ESG-Beratern, SAQ-/EcoVadis-/CDP-Beratern, Auditoren und Schulungsanbietern.

Warum stark:

- Kundendruck ist oft staerker als Gesetzesdruck,
- kein Rechtsurteil noetig,
- wiederkehrender Nutzen, weil jedes Jahr neue Frageboegen kommen,
- sehr stark fuer SEO/GEO: "EcoVadis Dokumente vorbereiten", "SAQ 5.0 Nachweise", "CDP Supply Chain Fragebogen Unterlagen", "SMETA Audit Dokumente".

Grenze:

- keine Bewertung, ob Antwort fachlich richtig ist,
- kein Score-Versprechen,
- keine Zertifizierung,
- nur Antwort- und Nachweismanagement.

### 60.6 Fremdfirmen-, Kontraktoren-, SCC-/SCP- und Werkszugangsakte

Fremdfirmen und Kontraktoren muessen bei Industriekunden oft Nachweise liefern: Qualifikationen, Unterweisungen, Versicherungen, SCC-/SCP-Zertifikate, SGU-Schulungen, Sicherheitsdaten, Subunternehmer, Gefaehrdungsbeurteilungen, Betriebsanweisungen und Werkszugangsdokumente. SCC ist ein zertifizierbares Arbeitsschutzmanagementsystem fuer Kontraktoren; Auftraggeber muessen bei Fremdfirmen Arbeitsschutzkoordination organisieren.

Quellen:

- WKO SCC Zertifizierungssystem: https://www.wko.at/scc-austria/scc-zertifizierungssystem
- DGUV Information Zusammenarbeit von Unternehmen im Rahmen von Werkvertraegen: https://publikationen.dguv.de/widgets/pdf/download/article/653
- BGHM Fremdfirmen: https://www.bghm.de/arbeitsschuetzer/themen/fremdfirmen
- TUEV Rheinland SCC/SCCP: https://certification.tuv.com/de/de/audits-zertifizierungen/arbeitsschutzmanagementsysteme/scc-sccp-zertifikat/
- TUEV NORD SCC: https://www.tuev-nord.de/de/dienstleistungen/auditierung-und-zertifizierung/scc-zertifizierung-safety-certificate-contractors/

Zielgruppen:

- Industriedienstleister,
- Wartungs- und Instandhaltungsfirmen,
- Anlagenbauer,
- Reinigungs- und Facility-Dienstleister,
- Energie-, Chemie-, Petrochemie- und Kraftwerksdienstleister,
- Personaldienstleister in Industrieumgebungen.

Angebot:

- Mitarbeiter- und Qualifikationsakte,
- SCC-/SCP-Zertifikatsfristen,
- Werkszugangsordner je Kunde/Standort,
- Unterweisungs- und SGU-Nachweise,
- Subunternehmerakte,
- Projekt-/Baustellenakte,
- Export fuer Auftraggeber, HSE, Einkauf oder Zertifizierer,
- QR-Zugriff fuer aktuelle Zertifikate.

Geld:

- 99 bis 799 EUR monatlich,
- 5 bis 20 EUR pro aktivem Mitarbeiter/Monat bei grossen Teams,
- 500 bis 15.000 EUR Setup fuer Migration von Qualifikationen,
- Partnerumsatz mit SCC-Schulungen, Arbeitsschutz, Sifa, Zertifizierern und Versicherern.

Warum stark:

- direkter Auftraggeberdruck,
- hoher Wiederholungsnutzen bei jedem neuen Werk/Projekt,
- sehr klebrig durch Mitarbeiter- und Zertifikatsdaten.

Grenze:

- keine Arbeitsschutz-Fachbewertung,
- keine Zertifizierung,
- keine Freigabe "darf auf Werk",
- nur Nachweise, Fristen, Freigaben und Export.

### 60.7 Automotive-, Aerospace-, IATF-, VDA-6.3- und EN-9100-Auditakte

Automotive- und Aerospace-Zulieferer haben besonders hohen Kundenauditdruck. IATF 16949, VDA 6.3 und EN/AS 9100 sind keine allgemeinen Pflichten fuer jeden Betrieb, aber in den Lieferketten oft faktische Marktzugangsvoraussetzung. Das ist kommerziell wertvoller als viele Gesetze, weil ein Audit direkt ueber Auftraege entscheidet.

Quellen:

- IATF Global Oversight: https://www.iatfglobaloversight.org/
- IAQG 9100 QMS Requirements: https://iaqg.org/standard/9100-qms-requirements-for-aviation-space-and-defense-organizations/
- VDA QMC VDA 6.3 FAQ: https://vda-qmc.de/en/aus-und-weiterbildung/vda-6-3-faq/
- TUEV SUED AS/EN 9100: https://www.tuvsud.com/en-us/services/auditing-and-system-certification/as-9100
- NSF IATF 16949: https://www.nsf.org/management-systems/quality-management/iatf-16949-2016

Zielgruppen:

- Automotive-Zulieferer,
- Maschinenbauzulieferer,
- Luftfahrt-/Aerospace-Zulieferer,
- Lohnfertiger,
- Elektronikfertiger,
- Kunststoff-/Metall-/Oberflaechenbetriebe.

Angebot:

- Auditdatenraum je Kunde,
- Zertifikats- und Prozessnachweisordner,
- CAPA-/Massnahmenverfolgung,
- Lieferanten- und Subtier-Nachweise,
- Reklamations-/8D-Ablage,
- Messmittel-/Pruefmittelnahe Nachweise als Upload,
- Export fuer Kunde, Auditor, Zertifizierer oder QM-Berater.

Geld:

- 299 bis 2.500 EUR monatlich,
- 2.000 bis 50.000 EUR Setup fuer Auditstruktur und Altunterlagen,
- Partnerumsatz mit QM-Beratern, Zertifizierern, Messdienstleistern und Schulungen.

Warum stark:

- wenige Kunden reichen fuer viel Umsatz,
- sehr hoher Schmerz vor Audits,
- nicht auf Google-Massen-SEO angewiesen, sondern ueber Branchenpartner verkaufbar.

Grenze:

- keine IATF-/VDA-/EN-9100-Beratung,
- keine Auditbewertung,
- keine Zertifizierung,
- nur Datenraum, Massnahmenverfolgung, Fristen, Nachweise und Export.

### 60.8 Luftfahrt-Part-145-, CAMO-/CAO- und Maintenance-Records-Akte

Luftfahrt ist ein kleines, aber sehr zahlungskraeftiges Spezialfeld. Instandhaltungsbetriebe, CAMO/CAO und Betreiber muessen Wartungs-, Lufttuechtigkeits-, Komponenten-, Freigabe-, Schulungs-, Audit- und Genehmigungsunterlagen sauber fuehren. EASA beschreibt Aufbewahrung und technische Records; das LBA ist fuer entsprechende Genehmigungen/Verfahren relevant.

Quellen:

- EASA FAQ detailed maintenance records: https://www.easa.europa.eu/en/faq/19042
- EASA Continuing Airworthiness: https://www.easa.europa.eu/en/regulations/continuing-airworthiness
- EASA Easy Access Rules Continuing Airworthiness: https://www.easa.europa.eu/en/document-library/easy-access-rules/online-publications/easy-access-rules-continuing-airworthiness
- Bundesportal Genehmigung Instandhaltungsbetrieb: https://verwaltung.bund.de/leistungsverzeichnis/de/leistung/99080115006000
- LBA Merkblatt Part-145 Erweiterung, PDF: https://www.lba.de/SharedDocs/Downloads/DE/T/T5/IHB_Merkblaetter/Merkblatt03.pdf

Zielgruppen:

- Part-145-Instandhaltungsbetriebe,
- CAMO-/CAO-nahe Organisationen,
- Flugschulen mit Techniknaehe,
- Business-Aviation-Betreiber,
- Komponenten-/Avionikdienstleister.

Angebot:

- Genehmigungs- und Handbuchakte,
- Maintenance-Records-Ordner,
- Komponenten-/Seriennummernakte,
- Freigabedokumente,
- Schulungs- und Authorisation-Tracker,
- Auditfinding- und CAPA-Workflow,
- Export fuer LBA, Kunde, Auditor oder Luftfahrtberater.

Geld:

- 500 bis 5.000 EUR monatlich,
- 5.000 bis 100.000 EUR Setup bei komplexer Migration,
- Partnerumsatz mit Luftfahrt-QM-Beratern, Schulungsanbietern und spezialisierten Auditoren.

Warum stark:

- sehr hohe Zahlungsbereitschaft,
- extrem dokumentengetrieben,
- klare Fristen und Auditlogik.

Grenze:

- keine luftfahrtrechtliche Freigabe,
- keine CAMO-/Part-145-Compliance-Bewertung,
- kein Ersatz fuer zugelassene Fachsysteme,
- nur strukturierte Akte, Fristen, Nachweise, CAPA und Export.

### 60.9 Eisenbahn-ECM-, Fahrzeughalter-, Instandhaltungs- und Sicherheitsnachweisakte

Im Eisenbahnbereich gibt es mit ECM eine stark dokumentierte Instandhaltungswelt. Die Europaeische Eisenbahnagentur beschreibt das System zur Zertifizierung von Entities in Charge of Maintenance nach Regulation 2019/779. Das Eisenbahn-Bundesamt informiert zur Ausweitung der ECM-Zertifizierung. Fuer Halter, Werkstaetten, ECMs und Instandhaltungsdienstleister entsteht ein sehr hochwertiger Nachweisraum.

Quellen:

- ERA Certification of Entities in Charge of Maintenance: https://www.era.europa.eu/domains/trains/certification-entities-charge-maintenance_en
- Eisenbahn-Bundesamt ECM-Zertifizierung: https://www.eba.bund.de/SharedDocs/Fachmitteilungen/DE/2019/22_2019_Instandhaltung_Ausweitung_des_Systems_zur_ECM-Zertifizierung_auf_alle_Eisenbahnfahrzeuge.html
- EBA Anerkennung ECM-Zertifizierungsstellen: https://www.eba.bund.de/DE/Themen/ECM-Zertifizierungsstellen/ecm-zertifizierungsstellen_node.html
- ERADIS ECM Certificates Database: https://data.europa.eu/88u/dataset/eradis-ecm-certificates-database

Zielgruppen:

- Wagenhalter,
- Bahnlogistiker,
- Werkstaetten,
- ECMs,
- Instandhaltungsdienstleister,
- Industrieunternehmen mit eigenen Gleisanschluessen/Fahrzeugen.

Angebot:

- Fahrzeug-/Wagenakte,
- ECM-Zertifikats- und Geltungsbereichsordner,
- Instandhaltungsprogramm- und Regelwerksablage,
- Komponenten-/Sicherheitskritische-Komponenten-Ordner,
- Auditfinding-/CAPA-Workflow,
- Lieferanten-/Werkstattnachweise,
- Export fuer ECM-Zertifizierer, EBA-nahe Prozesse, Kunden oder interne Technik.

Geld:

- 500 bis 5.000 EUR monatlich,
- 5.000 bis 100.000 EUR Setup fuer Fahrzeug- und Dokumentenstruktur,
- Partnerumsatz mit ECM-Beratern, Bahn-QM, Werkstaetten und Zertifizierern.

Warum stark:

- sehr kleine, aber wertvolle Nische,
- hoher Dokumentationsdruck,
- wenige Kunden koennen viel Umsatz bringen.

Grenze:

- keine Sicherheits- oder Instandhaltungsfreigabe,
- keine Zertifizierungsbewertung,
- keine technische Entscheidung,
- nur Datenraum, Records, Fristen, CAPA und Export.

### 60.10 Maritime ISM-, MLC-, Crew-, Zertifikats- und Schiffsakte

Schifffahrt ist ebenfalls kein Massenmarkt, aber hochpreisig. ISM Code, Maritime Labour Convention, Crew-Dokumente, Zertifikate, Safety-Management-Unterlagen und FuelEU/MRV-Daten erzeugen fuer Reeder, Ship Manager, Crewing-Agenturen und technische Manager viele Nachweise. FuelEU/MRV wurde bereits als Klimadatenfeld erfasst; hier kommt die breitere Schiffsakte dazu.

Quellen:

- IMO ISM Code: https://www.imo.org/en/ourwork/humanelement/pages/ismcode.aspx
- Deutsche Flagge Crew-Dokumente: https://www.deutsche-flagge.de/en/applications-and-documents/document-listing/crew
- Deutsche Flagge MLC certificates: https://www.deutsche-flagge.de/en/crew-social-security/working-and-living/documents-and-certificates/documents-and-certificates
- EU-Kommission FuelEU Maritime: https://transport.ec.europa.eu/transport-modes/maritime/decarbonising-maritime-transport-fueleu-maritime_en
- ILO Maritime Labour Convention: https://normlex.ilo.org/dyn/nrmlx_en/f?p=NORMLEXPUB%3A12100%3A0%3A%3ANO%3A12100%3AP12100_ILO_CODE%3AC186%3ANO

Zielgruppen:

- Reeder,
- Ship Manager,
- technische Manager,
- Crewing-Agenturen,
- kleinere Spezialflotten,
- Hafen-/Offshore-nahe Dienstleister.

Angebot:

- Schiffszertifikatsakte,
- ISM-/SMS-Dokumentenordner,
- Crew-Zertifikats- und Medical-Tracker,
- MLC-Unterlagenordner,
- Auditfinding-/CAPA-Workflow,
- FuelEU-/MRV-Belegordner als Erweiterung,
- Export fuer Klasse, Flagge, Charterer, Auditor oder Management.

Geld:

- 500 bis 10.000 EUR monatlich je nach Flottengroesse,
- 5.000 bis 150.000 EUR Setup bei Flottenmigration,
- Partnerumsatz mit Klassen, maritimen Beratern, Crewing-Services und Emissionsverifizierern.

Warum stark:

- sehr hohe Tickets,
- Dokumente sind existenziell fuer Betrieb und Charter,
- kleiner Markt, aber sehr wertvoll.

Grenze:

- keine ISM-/MLC-/FuelEU-Konformitaetsbewertung,
- keine Schiffsfreigabe,
- keine Crew-/Flaggenberatung,
- nur Dokumentenraum, Fristen, CAPA, Nachweise und Export.

### 60.11 Bewertung dieser Lueckenrunde

Die neue Runde bringt nicht "mehr Chaos", sondern einen zweiten Umsatzkern:

1. Bisheriger Kern:
   - Betriebsakte,
   - Produktakte,
   - Fristen,
   - Pruefungen,
   - Nachweise.

2. Neuer Kern:
   - Auftrag gewinnen,
   - Versicherung bekommen,
   - Foerderung sichern,
   - Kundenaudit bestehen,
   - Enterprise-Deal nicht verlieren.

Nach Geld und Online-Fit sortiert:

1. EcoVadis-/SAQ-/CDP-/Sedex-/Kundenfragebogen-Datenraum
   - sehr stark,
   - breit genug,
   - wenig RDG,
   - hoher Dealbezug,
   - sehr guter Startbaustein.

2. Cloud-/SaaS-Trust-Center
   - extrem gutes Online-Produkt,
   - hohe Preise,
   - klare Paywall,
   - besonders gut fuer SaaS, Agenturen, IT, KI-Anbieter.

3. Vergabe-/Praequalifikations-/EEE-Bieterakte
   - stark fuer KMU,
   - sehr konkrete Suchfragen,
   - direkter Auftragsbezug,
   - passt sehr gut als eigenes Branchenpaket.

4. Cyberversicherungs-/Risikofragebogenakte
   - gut als Einstiegsprodukt,
   - starke Partnerlogik,
   - aber Versicherungsvermittlung sauber trennen.

5. Fremdfirmen-/SCC-/Kontraktorenakte
   - sehr guter Industrie-/Dienstleisterfit,
   - Mitarbeiter- und Zertifikatsdaten machen es klebrig,
   - hoher Auftraggeberdruck.

6. Foerdermittel-/Verwendungsnachweisakte
   - guter Geldbezug,
   - SEO interessant,
   - aber eher projektbezogen und weniger dauerhaft, wenn nicht mit mehreren Projekten verbunden.

7. Automotive-/Aerospace-Auditakte
   - hohes Ticket,
   - nicht fuer Massenstart,
   - stark mit Partnern.

8. Luftfahrt-Part-145-/CAMO-Akte
   - sehr teuer,
   - sehr nischig,
   - nur mit Fachpartner.

9. Eisenbahn-ECM-Akte
   - sehr teuer,
   - sehr nischig,
   - gut fuer spaetere Premiums.

10. Maritime ISM-/MLC-/Schiffsakte
   - sehr teuer,
   - sehr nischig,
   - nur spaeter oder mit Branchenpartner.

### 60.12 Konsequenz fuer die Plattform

Die Plattform sollte nicht als "Pflichtenlexikon" wahrgenommen werden. Das ist zu defensiv und zu nah an Rechtsberatung.

Besser:

**Eine Nachweis-, Fristen- und Trust-Plattform fuer Unternehmen.**

Vier Hauptwelten:

1. Betriebsakte
   - Anlagen,
   - Pruefungen,
   - Wartungen,
   - Unterweisungen,
   - Betreiberpflichten.

2. Produktakte
   - GPSR,
   - PPWR,
   - BFSG,
   - DPP/ESPR,
   - Produktdaten,
   - Marktueberwachung.

3. Audit-/Kunden-/Trust-Akte
   - EcoVadis,
   - SAQ,
   - CDP,
   - Sedex/SMETA,
   - TISAX/ISO/IFS/BRCGS,
   - Cloud Trust Center,
   - Kundensicherheitsfrageboegen.

4. Geld-/Zugangshuerden-Akte
   - Vergabe,
   - Cyberversicherung,
   - Foerdermittel,
   - Praequalifikation,
   - Fremdfirmen/SCC,
   - Premium: Luftfahrt, Bahn, Schifffahrt.

Das ist nicht mehr "alles auf eine Seite klatschen". Es ist eine Plattform mit klaren Einstiegsseiten:

- "Nachweise fuer Kundenanfragen",
- "Produktunterlagen fuer Shops und Hersteller",
- "Pruefungen und Fristen fuer Betriebe",
- "Unterlagen fuer Vergabe, Versicherung und Foerderung".

Damit bleibt SEO/GEO breit, aber das Produkt bleibt verkaufbar.

Neue scharfe Startempfehlung nach dieser Runde:

1. Produktakte/BFSG/GPSR als Shop- und Herstellerkeil,
2. Kundenfragebogen-/Auditdatenraum als Geldkeil,
3. Trust-Center fuer SaaS/IT als Premium-Onlinekeil,
4. Vergabe-/Praequalifikationsakte als KMU-Auftragskeil,
5. Fremdfirmen-/SCC-/Qualifikationsakte als Industrie-Dienstleisterkeil.

Cyberversicherung und Foerdermittel sind starke Add-ons. Luftfahrt, Bahn und Maritime bleiben Premium-Spezialwelten fuer spaeter.

## 61. Vollstaendigkeitscheck: echte Premium-Restluecken nach der Grosssuche

Nach der naechsten Gegenpruefung sind viele vermutete Luecken schon abgedeckt:

- Agrar, Pflanzenpass, Futtermittel und Duengeprodukte,
- Labor, Biostoffe und Gentechnik,
- Gefahrgut,
- MaStR/Energie/Netzbetreiber,
- GoBD/Kasse/TSE,
- Abfall, Ersatzbaustoff, Deponie, Klaerschlamm,
- F-Gase, Trinkwasser, AwSV, Brandschutz,
- GwG, Datenschutz, Entsendung, A1,
- Produktakten fuer Spielzeug, PSA, Kosmetik, Bauprodukte, Lebensmittelkontakt, E-Zigarette, Aerosol, Reinigungsmittel.

Echte noch fehlende Premiumfelder sind aber:

1. Fahrzeug-Homologation und UNECE R155/R156,
2. klinische Studien, CTIS und Trial-Master-File,
3. Pharmakovigilanz, PSMF und Inspektionsvorbereitung.

Alle drei sind nicht fuer den Sofortstart gedacht. Sie sind hochpreisige Spaeter-Vertikalen mit Fachpartnerpflicht.

### 61.1 Fahrzeug-Homologations-, UNECE-R155/R156-, CSMS- und SUMS-Akte

Fahrzeuge, Fahrzeugsoftware, Trailer, Spezialfahrzeuge und Zulieferer mit Cyber-/Softwareanteil bekommen durch UNECE R155 und R156 einen sehr starken Dokumentationsdruck. Das KBA beschreibt Cyber-Security und Software-Update-Anforderungen im Typgenehmigungsumfeld. R155 betrifft Cyber Security Management Systems (CSMS), R156 Software Update Management Systems (SUMS). Fuer Hersteller und technische Dienste entsteht ein Datenraum fuer Managementsysteme, Software-Updates, Risiken, Nachweise, Lieferanten und Typgenehmigungsunterlagen.

Quellen:

- KBA Cyber-Security & Software update: https://www.kba.de/EN/Themen_en/Typgenehmigung_en/Typgenehmigungserteilung_en/Cyber_SoftwareUpdate_en/Cyber_SoftwareUpdate_node_en.html
- KBA Management System Cyber-Security & Software-Update: https://www.kba.de/EN/Themen_en/Typgenehmigung_en/Konformitaetsueberpruefungen_en/Systemueberpruefungen_en/CyberSecurity_SoftwareUpdate/CyberSecurity_SoftwareUpdate_node_en.html
- UNECE R155/R156 Pressemitteilung: https://unece.org/sustainable-development/press/un-regulations-cybersecurity-and-software-updates-pave-way-mass-roll
- UNECE R155 PDF: https://unece.org/sites/default/files/2023-02/R155e%20%282%29.pdf
- Vehicle Certification Agency R155/R156: https://www.vehicle-certification-agency.gov.uk/connected-and-automated-vehicles/cyber-security-and-software-updating/

Zielgruppen:

- Fahrzeughersteller,
- Trailer-/Anhaengerhersteller mit Elektronik,
- Spezialfahrzeugbauer,
- Nutzfahrzeug-Aufbauer,
- Tier-2/Tier-3-Zulieferer mit Software-/ECU-Bezug,
- Automotive-Cybersecurity-Berater,
- Homologationsdienstleister.

Angebot:

- CSMS-/SUMS-Datenraum,
- Software-Update-Register,
- Lieferanten-Nachweisordner,
- Risiko-/Threat-Analysis-Ablage als Uploadpunkt,
- Typgenehmigungsunterlagenordner,
- Audit- und Finding-Workflow,
- Fristen fuer Reviews, Re-Audits, Softwarefreigaben und Dokumentversionen,
- Export an KBA-nahe Prozesse, technische Dienste, OEM, Zulieferer oder Homologationsberater.

Geld:

- 1.000 bis 10.000 EUR monatlich,
- 10.000 bis 250.000 EUR Setup bei komplexen Herstellern/Zulieferern,
- Partnerumsatz mit Homologationsdienstleistern, Automotive-Cybersecurity-Beratern, technischen Diensten und Prueflaboren.

Warum stark:

- sehr hohe Tickets,
- direkter Marktzugang: ohne Typgenehmigungsfaehigkeit kein Verkauf,
- Lieferkettendruck bis zu Zulieferern,
- passt perfekt zu Produktakte plus Cyber-/Auditdatenraum.

Grenze:

- keine Homologationsfreigabe,
- keine CSMS-/SUMS-Bewertung,
- keine TARA oder ISO-21434-Facharbeit selbst,
- nur Datenraum, Records, Fristen, Versionen, Aufgaben und Export.

### 61.2 Klinische-Studien-, CTIS-, eTMF- und Sponsorakte

Klinische Studien sind ein sehr dokumentationsintensiver Spezialmarkt. EMA und BfArM beschreiben CTIS als System, ueber das Sponsoren klinische Pruefungen beantragen und waehrend des Lebenszyklus verwalten. ICH GCP E6(R3) betont sichere Aufbewahrung wesentlicher Records. Die EMA-TMF-Guideline beschreibt den Trial Master File als zentralen Nachweisort fuer Trial Management, Auditoren und Inspektoren.

Quellen:

- EMA CTIS: https://www.ema.europa.eu/en/human-regulatory-overview/research-development/clinical-trials-human-medicines/clinical-trials-information-system
- EU Clinical Trials CTIS for sponsors: https://euclinicaltrials.eu/ctis-for-sponsors
- BfArM CTIS: https://www.bfarm.de/EN/Medicinal-products/Clinical-trials/CTIS-Clinical-Trials-Information-System/_node.html
- PEI CTIS Pflicht ab 31.01.2023: https://www.pei.de/EN/newsroom/hp-news/2023/230120-ctis-applications-clinical-trials.html
- EMA TMF Guideline, PDF: https://www.ema.europa.eu/en/documents/scientific-guideline/guideline-content-management-and-archiving-clinical-trial-master-file-paper-andor-electronic_en.pdf
- ICH GCP E6(R3) Final Guideline, PDF: https://database.ich.org/sites/default/files/ICH_E6%28R3%29_Step4_FinalGuideline_2025_0106.pdf

Zielgruppen:

- kleine Pharma-/Biotech-Sponsoren,
- akademische Sponsoren,
- CROs,
- MedTech-nahe Studienorganisationen,
- Studienzentren mit Dokumentenchaos,
- Beratungen fuer GCP/Clinical Operations.

Angebot:

- eTMF-nahe Dokumenten- und Records-Akte,
- Studienakte pro Pruefung,
- Rollen fuer Sponsor, CRO, Monitor, Investigator Site und QA,
- CTIS-Unterlagen- und Fristenordner,
- Essential-Records-Checkliste als Orientierung,
- Query-/RFI-Fristen,
- Audit-/Inspection-Readiness-Export,
- CAPA- und Finding-Workflow,
- Versionierung und Zugriffshistorie.

Geld:

- 500 bis 5.000 EUR monatlich fuer kleine Sponsoren/CROs,
- 5.000 bis 100.000 EUR Setup je Studienportfolio,
- Partnerumsatz mit GCP-Beratern, CROs, QA-Auditoren und Dokumentationsdienstleistern.

Warum stark:

- sehr hohe Zahlungsbereitschaft,
- hohes Risiko bei fehlenden Records,
- klarer digitaler Datenraum,
- starke Partnerlogik.

Grenze:

- keine medizinische Bewertung,
- keine Studienfreigabe,
- keine GCP-/CTR-Compliance-Bewertung,
- kein Ersatz fuer validierte eTMF-/Clinical-Trial-Systeme, wenn solche erforderlich sind,
- nur Akte, Records, Fristen, Rollen, Export und Partnerprozess.

### 61.3 Pharmakovigilanz-, PSMF-, Stufenplanbeauftragten- und Inspektionsakte

Pharmakovigilanz ist ein sehr kleines, aber extrem hochwertiges Dokumentationsfeld. EMA beschreibt Good Pharmacovigilance Practices (GVP). Das Pharmacovigilance System Master File (PSMF) beschreibt das Pharmakovigilanzsystem eines Marketing Authorisation Holder. BfArM verweist bei Stufenplanbeauftragten und Inspektionsvorbereitung auf PSMF-/MFL-Informationen und stellt Vorlagen fuer Inspektionsvorbereitung bereit.

Quellen:

- EMA Good Pharmacovigilance Practices: https://www.ema.europa.eu/en/human-regulatory-overview/post-authorisation/pharmacovigilance-post-authorisation/good-pharmacovigilance-practices-gvp
- EMA GVP Module II PSMF, PDF: https://www.ema.europa.eu/en/documents/scientific-guideline/guideline-good-pharmacovigilance-practices-module-ii-pharmacovigilance-system-master-file-rev-2_en.pdf
- EMA Pharmacovigilance system Q&A: https://www.ema.europa.eu/en/human-regulatory-overview/post-authorisation/pharmacovigilance-post-authorisation/pharmacovigilance-system-questions-answers
- BfArM Stufenplanbeauftragter FAQ: https://www.bfarm.de/EN/Medicinal-products/_FAQ/Pharmacovigilance/graduated-plan-officer/faq-liste.html
- BfArM Pharmakovigilanz-Inspektionen: https://www.bfarm.de/DE/Arzneimittel/Pharmakovigilanz/Pharmakovigilanzinspektionen/_node.html
- BfArM Template Inspection Preparation, PDF: https://www.bfarm.de/SharedDocs/Downloads/DE/Arzneimittel/Pharmakovigilanz/muster-pharmakovigilanz-sa-inspektionen_en.pdf

Zielgruppen:

- pharmazeutische Unternehmer,
- Zulassungsinhaber,
- kleine MAHs,
- PV-Dienstleister,
- Regulatory-Affairs-Beratungen,
- QPPV-/Stufenplanbeauftragten-nahe Dienstleister.

Angebot:

- PSMF-Dokumentenakte,
- Rollen-/Verantwortlichkeitsordner,
- SOP- und Trainingsnachweise,
- Vertrage mit PV-Dienstleistern als Ablage,
- Inspektionsvorbereitungsordner,
- Audit-/CAPA-Workflow,
- Fristen fuer Reviews, Trainings und Aktualisierungen,
- Export fuer PV-Berater, Inspektionsvorbereitung oder interne QA.

Geld:

- 1.000 bis 10.000 EUR monatlich,
- 10.000 bis 200.000 EUR Setup bei komplexen PV-Strukturen,
- Partnerumsatz mit PV-Beratern, QPPV-Dienstleistern, Regulatory Affairs, GxP-QA und Trainingsanbietern.

Warum stark:

- sehr hohe Zahlungsbereitschaft,
- Inspektionen sind extrem dokumentengetrieben,
- kleine MAHs haben oft weniger professionelle Systeme als Grosspharma,
- sehr gute Partnervertriebslogik.

Grenze:

- keine PV-Bewertung,
- keine Arzneimittelsicherheitsentscheidung,
- keine QPPV-/Stufenplanbeauftragten-Funktion,
- keine EudraVigilance-Meldelogik ohne Fachpartner,
- nur Datenraum, Verantwortlichkeiten, Versionen, Trainings, CAPA und Export.

### 61.4 Bewertung der Restluecken

Diese drei Themen sind nicht "noch mehr Seiten fuer SEO", sondern Premium-Vertikalen:

1. Fahrzeug-Homologation R155/R156
   - bester Fit zur Produktakte,
   - sehr hoher Ticketwert,
   - stark fuer Automotive-Zulieferer,
   - wahrscheinlich die interessanteste Spaeter-Vertikale dieser Restpruefung.

2. Pharmakovigilanz/PSMF
   - hoechste Zahlungsbereitschaft,
   - aber extrem fachpartnerpflichtig,
   - nicht fuer breiten Start.

3. Klinische Studien/eTMF
   - hohes Ticket,
   - aber viel Konkurrenz durch spezialisierte eTMF-/Clinical-Systeme,
   - nur als kleinerer Sponsor-/CRO-Datenraum interessant.

Konsequenz:

Fuer den Sofortstart aendert sich die Reihenfolge nicht. Diese Themen werden als "Premium-Spezialakten mit Fachpartner" im Datenmodell vorbereitet, aber nicht prominent auf die erste Website gepackt.

Aktuelle beste Startstruktur bleibt:

1. Produktakte/BFSG/GPSR,
2. Kundenfragebogen-/Auditdatenraum,
3. SaaS-/Cloud-Trust-Center,
4. Vergabe-/Praequalifikationsakte,
5. Fremdfirmen-/SCC-/Qualifikationsakte.

Spaeter als teure Vertikalen:

- Fahrzeug-Homologation R155/R156,
- DORA,
- Batteriepass/Batterie-Due-Diligence,
- EUDAMED/UDI/MDR,
- Pharmakovigilanz/PSMF,
- Luftfahrt/Bahn/Maritime.

## 62. Weitere Geldrunde: Tax, TK, Post, Finanzierung, Franchise, IP, Subunternehmer, SBOM und TGA-Uebergabe

Diese Suchrunde war bewusst nicht mehr "noch eine allgemeine Pflicht", sondern:

- Wer zahlt viel, weil ein Dritter Unterlagen sehen will?
- Wo entsteht wiederkehrender Druck durch Fristen, Pruefungen, Verlaengerungen, Meldungen oder Kundenfragen?
- Wo koennen wir sauber online bleiben, ohne Rechts-, Steuer-, Sicherheits- oder Fachberatung zu verkaufen?
- Wo passt es zur grossen Betriebsakte, ohne dass die Seite beliebig wirkt?

Das Ergebnis: Es gibt noch mehrere sehr gute Erweiterungen. Die besten davon sind nicht kleine SEO-Seiten, sondern eigenstaendige Aktenarten innerhalb derselben Plattform.

### 62.1 Verrechnungspreis-, CbCR-, Master-/Local-File- und Tax-Dokumentationsakte

Warum gefunden:

Das Thema Verrechnungspreise und Country-by-Country-Reporting ist fuer internationale Gruppen ein echter Schmerzpunkt. Das BZSt beschreibt CbCR als Verfahren, das Finanzbehoerden zusaetzliche Informationen zu grenzueberschreitenden Konzernstrukturen gibt. BMF/BZSt verweisen zudem auf Verwaltungsgrundsaetze Verrechnungspreise. In der Praxis bedeutet das: Steuerabteilung, CFO, Steuerberater und Betriebspruefer wollen dieselben Unterlagen, Versionen, Gesellschaftsbeziehungen, Intercompany-Vertraege und Nachweise sehen.

Quellen:

- BZSt Country-by-Country Reporting: https://www.bzst.de/DE/Unternehmen/Intern_Informationsaustausch/CountryByCountryReporting/Country_by_Country_Reporting/cbcr_node.html
- BZSt Verwaltungsgrundsaetze Verrechnungspreise 2024: https://www.bzst.de/SharedDocs/BMF/DE/ExterneLinks/verwaltungsgrundsaetze_verrechungspreise.html
- BMF Verwaltungsgrundsaetze Verrechnungspreise 2024: https://www.bundesfinanzministerium.de/Content/DE/Downloads/BMF_Schreiben/Internationales_Steuerrecht/Allgemeine_Informationen/2024-12-12-vwg-verrechnungspreise-2024.pdf

Zielgruppen:

- deutsche Mittelstandsgruppen mit Tochtergesellschaften im Ausland,
- auslaendische Gruppen mit deutschen Tochtergesellschaften,
- Holdings,
- produzierende Unternehmen mit internationalen Lieferketten,
- Software-/SaaS-Gruppen mit IP- und Lizenzstrukturen,
- E-Commerce- und Marktplatzgruppen mit mehreren Laendergesellschaften,
- Steuerberater, Wirtschaftspruefer, Transfer-Pricing-Berater als Partner.

Was wir anbieten koennen:

- Konzernstruktur-Akte,
- Gesellschaften-/Beteiligungsuebersicht,
- Intercompany-Vertragsablage,
- Transaktionsmatrix,
- Leistungsbeziehungen pro Gesellschaft,
- Master-File-/Local-File-Datenraum,
- CbCR-Kalender,
- Upload fuer Steuerberater- und WP-Unterlagen,
- Pruefungsanfrage-Tracker,
- Aufgabenlisten fuer fehlende Unterlagen,
- Versionierung von Verrechnungspreis-Dokumentationen,
- BOP-/ELMA-Uebermittlungsnachweis als Uploadfeld,
- Exportpaket fuer Steuerberater, WP, Betriebspruefung oder interne Revision.

Online-Produktlogik:

Der Nutzer oder Steuerberater legt die Struktur und Unterlagen selbst an. Die Plattform sagt nicht, ob Preise fremdueblich sind, ob eine Dokumentationspflicht besteht oder wie eine Transaktion steuerlich zu bewerten ist. Sie stellt nur Datenraeume, Fristen, Vollstaendigkeitslisten, Versionen, Erinnerungen und Exporte bereit.

Warum es Geld bringt:

- sehr hoher Schmerz bei Pruefungen,
- hohe Zahlungsbereitschaft,
- Dokumente sind sensibel und muessen wieder auffindbar sein,
- Steuerberater koennen Mandanten gebuendelt auf die Plattform bringen,
- Setup-Umsatz ist realistisch, weil Datenimport und Strukturierung wertvoll sind.

Preise:

- Basic Tax Room: 299-699 EUR/Monat,
- Group Tax Room: 999-2.500 EUR/Monat,
- Enterprise/Multicountry: 3.000-10.000 EUR/Monat moeglich, aber nur mit Partnervertrieb,
- Setup: 2.000-50.000 EUR je nach Datenlage und Gesellschaftszahl.

Risiko/Grenze:

- keine Steuerberatung,
- keine Verrechnungspreisberechnung,
- keine Aussage "Dokumentation ausreichend",
- keine Fristgarantie ohne fachliche Pflege,
- stark ueber Steuerberater/WP als Partner spielen.

Bewertung:

Sehr gutes Premium-Modul, aber nicht fuer den ersten Massenstart. Als "Tax Evidence Room" spaeter extrem interessant, weil wenige Kunden sehr viel Umsatz bringen koennen.

### 62.2 TK-Anbieter-, Sicherheitskonzept-, Sicherheitsvorfall- und BNetzA-Meldeakte

Warum gefunden:

Telekommunikationsanbieter und Anbieter oeffentlich zugaenglicher Telekommunikationsdienste haben konkrete Unternehmenspflichten gegenueber der Bundesnetzagentur. Die BNetzA fuehrt ein Melde-/Anbieterthema, Sicherheitsanforderungen, Sicherheitskonzepte und Sicherheitsvorfall-Meldungen. Bei Sicherheitsvorfaellen nach TKG sind BNetzA und BSI relevant. Das ist ein sehr konkreter Akten- und Nachweistyp.

Quellen:

- BNetzA Meldepflicht Telekommunikation: https://www.bundesnetzagentur.de/DE/Fachthemen/Telekommunikation/Unternehmenspflichten/Meldepflicht/start.html
- BNetzA Sicherheitsvorfall Telekommunikation: https://www.bundesnetzagentur.de/DE/Fachthemen/Telekommunikation/OeffentlicheSicherheit/MeldungSicherheitvorfall/start.html
- BNetzA Katalog Sicherheitsanforderungen Entwurf: https://www.bundesnetzagentur.de/DE/Fachthemen/Telekommunikation/OeffentlicheSicherheit/KatalogSicherheitsanforderungen/Konsultation/EntwurfKatalog.pdf
- TKG 2021: https://www.gesetze-im-internet.de/tkg_2021/

Zielgruppen:

- regionale Glasfaseranbieter,
- kleine und mittlere Internet-Service-Provider,
- VoIP-Anbieter,
- Rechenzentrums-/Connectivity-Anbieter,
- Campusnetz-/IoT-Connectivity-Anbieter,
- Stadtwerke mit Telekommunikationsangebot,
- Kabelnetzbetreiber,
- MSPs, die in TK-nahe Rollen geraten,
- Fachberater fuer TK-Sicherheit.

Was wir anbieten koennen:

- Anbieterakte,
- Melde-/Registrierungsstatus als Ablage,
- Netz-/Diensteinventar,
- Sicherheitskonzept-Versionierung,
- Kontakt- und Rollenakte,
- Notfall-/Incident-Playbook als eigene Vorlage,
- Sicherheitsvorfall-Zeitleiste,
- 72-Stunden-/Follow-up-Erinnerungen als vom Nutzer gesetzte Fristen,
- Kommunikationshistorie mit BNetzA/BSI als Upload,
- Massnahmenliste,
- Lieferanten-/Dienstleisterakten,
- Export fuer Berater, BNetzA, BSI, Geschaeftsfuehrung oder Revision.

Online-Produktlogik:

Das System stellt keine TK-rechtliche Betroffenheitsentscheidung. Es ist ein Betreiber-/Anbieter-Datenraum fuer Firmen, die sich selbst als Anbieter einschaetzen oder durch Berater eingeordnet wurden.

Warum es Geld bringt:

- kleine Anbieter sind oft unterorganisiert,
- Vorfaelle erzeugen Zeitdruck,
- Sicherheitskonzepte und Aenderungen brauchen Versionen,
- Kunden und Behoerden fragen nach Nachweisen,
- hohe Zahlungsbereitschaft im Vergleich zu einfachen KMU-Fristen.

Preise:

- Small Provider: 299-799 EUR/Monat,
- Provider Plus: 1.000-3.000 EUR/Monat,
- Setup: 3.000-50.000 EUR,
- Partnerumsatz: TK-Rechtsanwalt, IT-Sicherheitsberater, ISMS-Berater, Incident-Response-Dienstleister.

Risiko/Grenze:

- keine Auslegung, ob jemand TK-Anbieter ist,
- kein Sicherheitskonzept fachlich erstellen,
- keine BSI-/BNetzA-Meldung automatisch abschicken ohne Nutzerfreigabe,
- keine Sicherheitszertifizierung versprechen.

Bewertung:

Nische, aber wertvoll. Nicht fuer Massen-SEO, sondern fuer High-Ticket-Seiten und Partnervertrieb.

### 62.3 Post-/KEP-Anbieterverzeichnis-, Subunternehmer- und Beschwerdeakte

Warum gefunden:

Seit der Neufassung des Postgesetzes ist das Anbieterverzeichnis der Bundesnetzagentur fuer Postdienstleister ein konkreter Einstiegspunkt. Die BNetzA schreibt, dass Anbieter grundsaetzlich vor Aufnahme der Taetigkeit die Aufnahme in das Anbieterverzeichnis beantragen muessen, wenn sie nicht unter Uebergangsregeln fallen. Ausserdem duerfen Anbieter andere Anbieter nur beauftragen, wenn diese eingetragen sind. Das ist fuer Kurier-, Express-, Paket- und Last-Mile-Strukturen interessant.

Quellen:

- BNetzA Anbieterverzeichnis Post: https://www.bundesnetzagentur.de/post-anbieterverzeichnis
- BNetzA Fachliche Informationen Post: https://www.bundesnetzagentur.de/DE/Fachthemen/Post/Aktuelles/artikel.html
- Bundesportal Eintragung Anbieterverzeichnis Post: https://verwaltung.bund.de/leistungsverzeichnis/de/leistung/99050230060000
- PostG 2024 Paragraf 4: https://www.gesetze-im-internet.de/postg_2024/__4.html

Zielgruppen:

- Kurierdienste,
- Expressdienste,
- Paketdienste,
- regionale Zustelldienste,
- E-Commerce-Fulfillment-Anbieter mit eigener Zustellung,
- Same-Day-Delivery-Anbieter,
- Last-Mile-Dienstleister,
- Subunternehmer-Netzwerke,
- Plattformen mit lokalen Zustellpartnern.

Was wir anbieten koennen:

- Post-/KEP-Anbieterakte,
- Anbieterverzeichnis-Status als Upload/Checkfeld,
- Subunternehmerliste,
- Nachweisablage je Zustellpartner,
- Aenderungsmeldungs-Tracker,
- Leistungsgebiet-/Taetigkeitsprofil-Akte,
- Beschwerde- und Schlichtungsfall-Akte,
- Vertrags- und Versicherungsablage,
- Fahrer-/Fahrzeug-/Standort-Nachweise als optionale Unterakten,
- Export fuer Auftraggeber, BNetzA, Steuerberater, Anwalt oder internen QS-Leiter.

Online-Produktlogik:

Das System sagt nicht, ob ein Unternehmen eintragungspflichtig ist. Es stellt nur die Akte fuer Anbieter und Auftraggeber bereit, die ihren Status und den Status ihrer Subunternehmer dokumentieren wollen.

Warum es Geld bringt:

- viele kleine Anbieter,
- hoher Subunternehmeranteil,
- Auftraggeber wollen Nachweise,
- neue PostG-Regeln erzeugen Unsicherheit,
- gute SEO-Chance ueber konkrete Suchfragen rund um Anbieterverzeichnis, KEP, Kurier, Subunternehmer.

Preise:

- Solo/Klein: 29-79 EUR/Monat,
- KEP-Betrieb: 99-499 EUR/Monat,
- Subunternehmernetz: 500-2.000 EUR/Monat,
- Setup: 300-10.000 EUR,
- Zusatzumsatz: Versicherungen, Flottenservices, Arbeitsschutz, Lohn-/Baulohn-/Compliance-Partner.

Risiko/Grenze:

- keine PostG-Rechtsberatung,
- keine Zuverlaessigkeits-/Fachkundeentscheidung,
- keine Gewaehr fuer Eintragung,
- keine Bewertung von Subunternehmern als "zulaessig", nur Nachweisstatus dokumentieren.

Bewertung:

Sehr guter Spezialkeil fuer "Subunternehmer-Nachweise" und "Anbieterstatus". Passt besser als gedacht, weil es direkt mit Auftraggeber-Nachweisen und Fremdfirmenakten zusammenhaengt.

### 62.4 Kredit-, Bank-, Foerderkredit- und ESG-Finanzierungsdatenraum

Warum gefunden:

Banken, KfW, IHKs und Foerderstellen verlangen keine "Pflichtenliste", sondern aussagekraeftige, aktuelle Unterlagen. KfW nennt fuer bestimmte Gruendungs-/Foerderkredit-Kontexte Businessplan, Selbstauskunft und Lebenslauf. IHK-Materialien nennen fuer Bankgespraeche typischerweise Jahresabschluesse, BWA, Sicherheiten, Handelsregisterauszug, Planzahlen und weitere Unterlagen. Das ist kein Rechts-/Steuerurteil, sondern ein perfekter Datenraum.

Quellen:

- KfW Unterlagen fuer Foerderkredit: https://www.kfw.de/inlandsfoerderung/Unternehmen/Gr%C3%BCndung-und-Nachfolge/Durchstarten-in-Deutschland/Tipps-f%C3%BCr-Ihre-Gr%C3%BCndung/
- KfW ERP-Gruenderkredit Produktinfo: https://www.kfw.de/inlandsfoerderung/Unternehmen/Gr%C3%BCnden-Nachfolgen/F%C3%B6rderprodukte/ERP-Gr%C3%BCnderkredit-Startgeld-%28067%29/
- IHK Stuttgart Bankgespraech Unterlagen: https://www.ihk.de/stuttgart/gruendung/finanzierung/finanzierungsquellen/kredite/bankgespraech-erfolgreich-fuehren-index-685364
- IHK Kreditverhandlungen: https://www.ihk.de/blueprint/servlet/resource/blob/6170912/7d294c8ae5b98a98a0095c9e042c1e93/broschuere-kreditverhandlungen-sicher-und-erfolgreich-fuehren--data.pdf

Zielgruppen:

- KMU mit Betriebsmittelkredit,
- Unternehmen vor Investition,
- Unternehmen mit KfW-/Foerderkredit,
- Nachfolger/Unternehmenskauf,
- Handwerksbetriebe mit Maschinenfinanzierung,
- Immobilien-/Projektgesellschaften,
- Startups,
- Steuerberater und Unternehmensberater,
- Banken/Finanzierungsvermittler als Partner, soweit regulatorisch sauber.

Was wir anbieten koennen:

- Bankdatenraum,
- Foerderkredit-Unterlagenpaket,
- Jahresabschluss-/BWA-/SuSa-Ablage,
- Planzahlen-/Liquiditaetsunterlagen als Upload,
- Sicherheitenakte,
- Handelsregister-/Gesellschaftsunterlagen,
- Fragen-/Antworten-Protokoll fuer Bankgespraeche,
- ESG-/Nachhaltigkeitsfragebogen-Ablage,
- versionierter Freigabelink fuer Bank, Steuerberater, Foerderberater,
- Ablaufdaten fuer Unterlagen,
- Reminder "BWA erneuern", "Planung aktualisieren", "Versicherung/Grundbuch/Vertrag nachreichen".

Online-Produktlogik:

Die Plattform gibt keine Finanzierungsberatung, keine Kreditentscheidung, keine Foerdermittelzusage und keine Vermittlung ohne passende Struktur. Sie verkauft Ordnung, Datenraum, Checkliste, Upload, Export und sichere Freigabe.

Warum es Geld bringt:

- sehr breiter Markt,
- hoher emotionaler Druck,
- Nutzer zahlen fuer Tempo und Vollstaendigkeit,
- gute Add-on-Chance fuer Steuerberater,
- Projektpreis moeglich statt nur Abo.

Preise:

- Projekt-Datenraum: 199-1.500 EUR einmalig,
- laufender Bank-/CFO-Datenraum: 49-499 EUR/Monat,
- Berater-/Kanzlei-Lizenz: 299-2.000 EUR/Monat,
- Setup: 500-10.000 EUR.

Risiko/Grenze:

- keine Kreditvermittlung ohne Pruefung regulatorischer Anforderungen,
- keine Anlage-/Finanzberatung,
- keine Steuerberatung,
- kein Versprechen "Kredit wird bewilligt".

Bewertung:

Sehr guter Lead-Magnet und Zusatzmodul. Als Hauptprodukt weniger klebrig als Pruef-/Nachweisfristen, aber stark, um Firmen in die Plattform zu holen.

### 62.5 Franchise-, Filial-, Lizenznehmer- und Haendlernetz-Auditakte

Warum gefunden:

Franchise- und Filialsysteme leben von Handbuechern, Schulungen, Standards, Nachweisen, Standortunterlagen und wiederkehrenden Qualitaetschecks. Der Deutsche Franchiseverband positioniert sich als Qualitaetsgemeinschaft, der Systemcheck dient laut eigener Darstellung dem Qualitaetsmanagement. IHK-Unterlagen fragen u.a. nach Systemcheck, Pilotbetrieb, Partnerlisten, Franchisenehmer-Zufriedenheit und Nachweisen. Damit ist klar: Hier gibt es ein starkes Datenraum-/Auditakte-Modul.

Quellen:

- Deutscher Franchiseverband: https://www.franchiseverband.com/
- Systemcheck: https://www.systemcheck.info/
- IHK Franchise PDF: https://www.ihk.de/blueprint/servlet/resource/blob/4162400/775203bdbc70690a59133fc864525b95/franchise-data.pdf
- Franchise-Handbuch und Schulung/Training: https://www.franchiseportal.de/api/drive/SystemRoot/legacy/articledocuments/E-Book_250613_2.pdf

Zielgruppen:

- Franchisegeber,
- Lizenzsysteme,
- Filialketten,
- Haendlernetze,
- Werkstattketten,
- Pflege-/Bildungs-/Fitness-/Gastro-/Retail-Systeme,
- Hersteller mit autorisierten Fachhaendlern,
- Verbundgruppen,
- Agenturnetzwerke.

Was wir anbieten koennen:

- Systemzentrale-Datenraum,
- Standortakte je Partner/Filiale,
- Franchise-/Lizenzhandbuch-Versionierung,
- Schulungsnachweise,
- Standard-Checklisten,
- Selbst-Audits,
- Standortbegehungsberichte,
- Versicherungs-/Genehmigungs-/Qualifikationsunterlagen je Standort,
- Beschwerden-/Abweichungen-/Massnahmenliste,
- Rollout-Aufgaben,
- Partnerfreigaben und Lesebestaetigungen,
- Export fuer Verband, Bank, Investor, Systemberater oder internen QS-Prozess.

Online-Produktlogik:

Die Plattform beratet nicht zur Franchise-Vertragsgestaltung. Sie ist eine operative Systemakte fuer Versionen, Standorte, Schulungen, Standards, Freigaben und Nachweise.

Warum es Geld bringt:

- ein Kunde bringt viele Standorte,
- Preis kann pro Standort wachsen,
- hohe Wechselbarriere, wenn Handbuecher, Nachweise und Audits drinliegen,
- Partner-/Beratervertrieb moeglich,
- sehr gute Wiederkehr, weil Standards und Schulungen laufend aktualisiert werden.

Preise:

- Systemzentrale: 199-999 EUR/Monat,
- pro Standort: 5-30 EUR/Monat,
- grosse Netze: 2.000-10.000 EUR/Monat,
- Setup: 2.000-50.000 EUR,
- Zusatzumsatz: Schulungsanbieter, Versicherungen, QM-Berater, Standortberater.

Risiko/Grenze:

- keine Rechtsberatung zum Franchisevertrag,
- keine Bewertung "System ist rechtssicher",
- keine Zertifizierung ersetzen,
- keine rechtliche Bewertung von Partnerpflichten.

Bewertung:

Sehr stark, weil ein Kunde automatisch mehrere zahlende Einheiten erzeugt. Das ist kein SEO-Massenprodukt, sondern ein B2B-Vertriebsmodul fuer Ketten, Systeme und Netze.

### 62.6 Schutzrechts-, Marken-, Patent-, Design- und Domain-Fristenakte

Warum gefunden:

DPMA und EUIPO zeigen, dass Schutzrechte mit Fristen und Verlaengerungslogik verbunden sind. DPMA weist bei Patenten darauf hin, dass nicht rechtzeitig gezahlte Jahresgebuehren zum Erloschen fuehren koennen. Marken koennen verlaengert werden; EUIPO beschreibt EU-Marken als fuer 10 Jahre gueltig und unbegrenzt verlaengerbar, Designs typischerweise in 5-Jahres-Schritten bis maximal 25 Jahre. Das ist ein klares Reminder-/Nachweisprodukt.

Quellen:

- DPMA Markengebuehren: https://www.dpma.de/service/gebuehren/marken/index.html
- DPMA Markenschutz Verlaengerung: https://www.dpma.de/marken/markenschutz/mamog/verlaengerung/index.html
- DPMA Patentgebuehren: https://www.dpma.de/service/gebuehren/patente/index.html
- EUIPO Renewals FAQ: https://www.euipo.europa.eu/en/help-centre/forms/faq-renewals

Zielgruppen:

- D2C-Marken,
- Amazon-/E-Commerce-Haendler,
- Produkthersteller,
- Agenturen,
- Softwareunternehmen,
- Mittelstand mit Markenportfolio,
- Designer/Produktentwickler,
- Franchise-/Lizenzsysteme,
- Kanzleien und Patentanwaelte als Partner.

Was wir anbieten koennen:

- Markenakte,
- Patent-/Designakte,
- Domain-/SSL-/Markenprofil als Add-on,
- Verlaengerungsfristen,
- Gebuehrennachweise als Upload,
- Widerspruchs-/Korrespondenzablage,
- Lizenzvertragsablage,
- Nutzungsnachweise,
- Produkt-/Markenverknuepfung,
- Export fuer Patentanwalt, Markenanwalt, Geschaeftsfuehrung, Investor oder Plattform.

Online-Produktlogik:

Das System prueft nicht, ob eine Marke eintragungsfaehig ist, ob eine Verletzung vorliegt oder ob eine Verlaengerung strategisch sinnvoll ist. Es verwaltet Schutzrechte, Termine, Unterlagen und Kontakte.

Warum es Geld bringt:

- kleiner, aber sehr sticky,
- Kunden haben Angst vor Fristverlust,
- passt gut zu Produktakte und Franchise,
- Partnervermittlung an Patentanwaelte ist sauberer als eigene Beratung,
- fuer E-Commerce-Marken sehr verstaendlich.

Preise:

- Small Portfolio: 19-99 EUR/Monat,
- Business Portfolio: 149-499 EUR/Monat,
- Kanzlei-/Agenturportal: 299-2.000 EUR/Monat,
- Setup: 199-5.000 EUR.

Risiko/Grenze:

- keine Markenrecherche als Rechtsurteil,
- keine Verletzungspruefung,
- keine Patent-/Designberatung,
- keine automatische Gebuehrenzahlung ohne saubere Zahlungs-/Mandatslogik.

Bewertung:

Als Hauptsaeule zu klein, als Add-on extrem passend. Besonders gut fuer Produkt-, Marken-, Franchise- und E-Commerce-Kunden.

### 62.7 Nachunternehmer-, Mindestlohn-, Tariftreue-, SOKA-BAU- und Baulohn-Nachweisakte

Warum gefunden:

Der Zoll beschreibt Auftraggeberhaftung unter MiLoG/AEntG. SOKA-BAU arbeitet mit monatlichen Meldungen und Fristen. In Bau, Reinigung, Logistik, Facility, Sicherheit und anderen Nachunternehmerketten wollen Auftraggeber Nachweise sehen. Das ist genau der Typ "Dritter fragt Unterlagen ab", der fuer unsere Plattform sehr gut passt.

Quellen:

- Zoll Haftung des Auftraggebers: https://www.zoll.de/DE/Fachthemen/Arbeit/Mindestarbeitsbedingungen/Haftung-Auftraggebers/haftung-auftraggebers_node.html
- Zoll Auftraggeber: https://www.zoll.de/DE/Unternehmen/Arbeit/Auftraggeber/auftraggeber_node.html
- SOKA-BAU Arbeitgeber-Onlineservice Handbuch: https://blog.soka-bau.de/wp-content/uploads/2022/03/2022-03-17_Handbuch-Vollversion.pdf
- IHK Regensburg Auftraggeberhaftung Mindestlohn: https://www.ihk.de/regensburg/fachthemen/recht/arbeitsrecht/verguetung-und-tarife/mindestlohn-auftraggeberhaftung-1735270

Zielgruppen:

- Bauunternehmen,
- Generalunternehmer,
- Facility-Management,
- Gebaeudereinigung,
- Sicherheitsdienste,
- Logistikunternehmen,
- Eventdienstleister,
- Personaldienstleister,
- Handwerksbetriebe mit Nachunternehmern,
- oeffentliche Auftragnehmer,
- Auftraggeber mit vielen Fremdfirmen.

Was wir anbieten koennen:

- Nachunternehmerakte,
- Subunternehmer-Stammdaten,
- Eigenerklaerungen als eigene Muster,
- Versicherungs-/Unbedenklichkeits-/Qualifikationsnachweise als Upload,
- SOKA-/Baulohn-/Meldungsfristen als selbst gesetzte Termine,
- Mindestlohn-/AEntG-/Tariftreue-Dokumentenablage,
- Einsatz-/Projektbezug,
- Ablaufwarnungen fuer Nachweise,
- Partnerstatus-Ampel als Dokumentenstatus, nicht als rechtliches Urteil,
- Export fuer Auftraggeber, Zoll, Steuerberater, Rechtsanwalt, Bauleiter oder QS.

Online-Produktlogik:

Die Plattform bewertet nicht, ob Lohn korrekt ist, ob ein Tarif gilt oder ob ein Nachunternehmer rechtlich einsetzbar ist. Sie speichert nur die vom Nutzer angeforderten/hochgeladenen Nachweise und erinnert an erneute Anforderung.

Warum es Geld bringt:

- sehr viele Betriebe,
- viele wiederkehrende Dokumente,
- Auftraggeber erzeugen Druck,
- ein Kunde kann viele Nachunternehmer verwalten,
- hohe Churn-Bremse durch laufende Projekte.

Preise:

- Klein: 49-149 EUR/Monat,
- Betrieb: 199-799 EUR/Monat,
- GU/Netzwerk: 1.000-5.000 EUR/Monat,
- pro Nachunternehmer: 3-25 EUR/Monat,
- Setup: 500-20.000 EUR.

Risiko/Grenze:

- keine Lohn-/Tarifberatung,
- keine Bewertung "Nachunternehmer zulassig",
- keine Gewaehr gegen Auftraggeberhaftung,
- keine fremden Formulare hosten, wenn Rechte unklar sind.

Bewertung:

Sehr stark und sehr nah am Kern. Dieses Modul ist wahrscheinlich eines der besten fuer Deutschland, weil der Nutzen ohne Rechtsurteil sofort klar ist: Unterlagen einsammeln, Ablaufdaten verwalten, Export erzeugen.

### 62.8 SBOM-, Open-Source-Lizenz-, Software-Supply-Chain- und Vulnerability-Records-Akte

Warum gefunden:

CISA beschreibt SBOMs als detailliertes Inventar von Softwarekomponenten, mit dem Organisationen Verwundbarkeiten erkennen, Risiken einschaetzen und Entscheidungen treffen koennen. Die EU Cyber Resilience Act Richtung erhoeht den Druck fuer Produkte mit digitalen Elementen. Fuer Softwareanbieter, IoT-Hersteller und SaaS-Firmen wird die Frage "Was steckt in eurer Software?" immer haeufiger ein Kunden-, Audit- und Sicherheitsfragebogen-Thema.

Quellen:

- CISA SBOM: https://www.cisa.gov/topics/information-communications-technology-supply-chain-security/sbom
- CISA 2025 Minimum Elements SBOM: https://www.cisa.gov/resources-tools/resources/2025-minimum-elements-software-bill-materials-sbom
- CISA SBOM Sharing Primer: https://www.cisa.gov/resources-tools/resources/sbom-sharing-primer
- EU Cyber Resilience Act: https://digital-strategy.ec.europa.eu/en/policies/cyber-resilience-act
- BSI Cyber Resilience Act: https://www.bsi.bund.de/EN/Themen/Unternehmen-und-Organisationen/Informationen-und-Empfehlungen/Cyber_Resilience_Act/cyber_resilience_act.html

Zielgruppen:

- SaaS-Anbieter,
- Softwareagenturen,
- IoT-Hersteller,
- Maschinenbauer mit Softwareanteil,
- Medtech-/Automotive-/Industrie-Softwarezulieferer,
- Embedded-Software-Teams,
- IT-Dienstleister,
- Unternehmen mit Kundenfrageboegen zu Cyber/Supply Chain,
- Open-Source-Compliance-Berater als Partner.

Was wir anbieten koennen:

- SBOM-Akte,
- SBOM-Upload pro Release,
- Komponenten-/Versionen-Historie,
- Open-Source-Lizenzinventar,
- Vulnerability-Record,
- VEX-/Advisory-Ablage als spaeteres Add-on,
- Release- und Patch-Nachweise,
- Supplier-SBOM-Ablage,
- Kundenfreigabe-Link,
- Sicherheitsfragebogen-Datenraum,
- CRA-Technikakte als spaetere Spezialakte,
- Export fuer Kunde, Auditor, CISO, Einkauf oder Produktteam.

Online-Produktlogik:

Das System kann spaeter technisch SBOM-Dateien parsen und strukturieren. Es sollte aber nicht behaupten, dass ein Produkt CRA-konform, lizenzrechtlich unbedenklich oder sicher ist. Es organisiert Nachweise und macht Luecken sichtbar als Datenstatus.

Warum es Geld bringt:

- wachsender regulatorischer und kundenseitiger Druck,
- passt perfekt zu SaaS-/Cloud-Trust-Center,
- hohes B2B-Ticket moeglich,
- technisch gut automatisierbar,
- sehr starker Export-/Kundenportal-Nutzen.

Preise:

- Software Team: 99-299 EUR/Monat,
- Vendor Trust/SBOM Room: 499-1.500 EUR/Monat,
- Enterprise/Supply Chain: 2.000-10.000 EUR/Monat,
- Setup: 1.000-25.000 EUR.

Risiko/Grenze:

- keine Rechtsberatung zu OSS-Lizenzen,
- keine Sicherheitszertifizierung,
- keine Garantie "keine Schwachstellen",
- keine CRA-Konformitaetsbehauptung.

Bewertung:

Sehr stark fuer die Zukunft. Wahrscheinlich eines der besten Tech-Module neben SaaS-Trust-Center, weil es produktnah, wiederkehrend und kundennachweisgetrieben ist.

### 62.9 TGA-, Revisionsunterlagen-, As-built-, O&M- und Gebaeudeuebergabeakte

Warum gefunden:

VDI 6026 beschreibt Dokumentation in der technischen Gebaeudeausruestung, inklusive Planungs-, Ausfuehrungs- und Revisionsunterlagen. VDI 6026 Blatt 1.1 erweitert den Blick auf Facility-Management-Anforderungen. Genau hier entsteht nach Bau-/Umbauprojekten massiver Dokumentenchaos-Schmerz: Betreiber brauchen Plaene, Pruefprotokolle, Wartungsunterlagen, Bedienungsanleitungen, Herstellerdokumente, Gewaehrleistungsfristen und Uebergaben.

Quellen:

- VDI 6026 Blatt 1: https://www.vdi.de/en/home/vdi-standards/details/vdi-6026-blatt-1-documentation-in-the-building-services-bs-contents-and-format-of-planning-execution-and-review-documents
- VDI 6026 Blatt 1 deutsch: https://www.vdi.de/mitgliedschaft/vdi-richtlinien/details/vdi-6026-blatt-1-dokumentation-in-der-technischen-gebaeudeausruestung-tga-inhalte-und-beschaffenheit-von-planungs-ausfuehrungs-und-revisionsunterlagen
- VDI 6026 Blatt 1.1: https://www.vdi.de/en/home/vdi-standards/details/vdi-6026-blatt-11-documentation-in-the-building-services-contents-and-format-of-planning-execution-and-review-documents-requirements-to-be-met-by-the-documentation-to-satisfy-the-needs-of-the-fm
- DGWZ Betreiberverantwortung/CAFM: https://www.dgwz.de/themen/bau-gebaeudetechnik/betreiberverantwortung

Zielgruppen:

- TGA-Firmen,
- Elektro-/HKLS-Betriebe,
- Generalunternehmer,
- Projektentwickler,
- Architekten/Fachplaner als Partner,
- Facility-Management,
- Hausverwaltungen,
- Hotels,
- Krankenhaeuser,
- Industriegebaeude,
- Handelsketten,
- Schulen/Kommunen,
- Betreiber grosser Immobilienportfolios.

Was wir anbieten koennen:

- Projekt-Uebergabeakte,
- Revisionsunterlagen-Checkliste,
- As-built-Plaene,
- O&M-Manuals,
- Herstellerdokumente,
- Gewaehrleistungsfristen,
- Wartungsplaene,
- Pruefprotokolle,
- Abnahme-/Inbetriebnahmeunterlagen,
- Maengelliste,
- QR-Codes je Anlage/Raum,
- Export fuer Betreiber, FM, Versicherung, Pruefer, Behoerde oder Auftraggeber,
- Uebergabe in die laufende Betriebsakte als starkes Upsell.

Online-Produktlogik:

Die Plattform bewertet nicht, ob die TGA fachlich korrekt, sicher oder normkonform ist. Sie sorgt dafuer, dass die uebergebenen Unterlagen strukturiert, versioniert, auffindbar und exportierbar sind.

Warum es Geld bringt:

- Bau-/TGA-Dokumentation ist chronisch chaotisch,
- Projektpreise sind moeglich,
- Betreiber zahlen fuer spaetere Ordnung,
- TGA-Firmen koennen es als professionellen Uebergabeservice weiterverkaufen,
- jedes Gebaeude erzeugt spaeter Wartungs- und Prueffristen,
- perfekter Uebergang von Projektumsatz zu Dauerabo.

Preise:

- Projektakte klein: 199-999 EUR einmalig,
- Projektakte mittel: 1.000-15.000 EUR,
- Portfolio/Firmenlizenz: 299-2.000 EUR/Monat,
- Grossportfolio: 3.000-20.000 EUR/Monat,
- Setup/Datenstrukturierung: 1.000-100.000 EUR.

Risiko/Grenze:

- keine technische Pruefung,
- keine Bau-/Normberatung,
- keine Abnahmeentscheidung,
- keine Gewaehrleistungs-/Maengel-Rechtsberatung.

Bewertung:

Sehr stark. Dieses Modul ist fast ein eigener Vertriebskeil: "digitale TGA-Uebergabeakte" fuehrt danach automatisch in "laufende Betriebsakte". Es ist operativ, dokumentengetrieben, teuer genug und ohne Rechtsurteil verkaufbar.

### 62.10 Bewertung dieser Runde

Beste neue Module nach Umsatzpotential und Passung:

1. TGA-/Revisionsunterlagen-/Gebaeudeuebergabeakte
   - extrem nah am Kern,
   - Projekt- und Abo-Umsatz,
   - sehr guter Uebergang in Wartungs-/Prueffristen,
   - online baubar,
   - keine Rechtsberatung noetig.

2. Nachunternehmer-/SOKA-/Mindestlohn-/Tariftreue-Nachweisakte
   - riesige Zielgruppe,
   - dauerhafte Dokumentenpflege,
   - Auftraggeberdruck,
   - guter SEO- und Direktvertriebsfit,
   - stark als Modul fuer Bau, Facility, Reinigung, Sicherheit, Logistik.

3. SBOM-/Software-Supply-Chain-Akte
   - starker Zukunftsdruck,
   - technisch automatisierbar,
   - passt zu SaaS-/Cloud-Trust-Center,
   - hohe Preise bei Software-/IoT-Unternehmen moeglich.

4. Franchise-/Filial-/Haendlernetz-Akte
   - ein Kunde bringt viele Standorte,
   - sehr sticky,
   - gute Partnerlogik ueber Systemberater,
   - besonders interessant fuer Ketten und Lizenzsysteme.

5. Verrechnungspreis-/Tax-Dokumentationsakte
   - sehr hohe Tickets,
   - aber nur sauber mit Steuerberater-/WP-Partnern,
   - spaeter als Premium-Datenraum.

6. TK-Anbieter-/BNetzA-Akte
   - kleine, aber zahlungsbereite Nische,
   - gut fuer High-Ticket-Spezialseiten,
   - nicht als Massenmodul.

7. Post-/KEP-Anbieter- und Subunternehmerakte
   - stark fuer neue PostG-Suchanfragen,
   - besonders gut als Spezialseite fuer Kurier-/Paket-/Last-Mile-Anbieter,
   - preislich kleiner, aber mit vielen Betrieben.

8. Schutzrechts-/IP-Fristenakte
   - sehr passendes Add-on,
   - klein im Einzelpreis,
   - gut fuer Produkt-, Franchise-, E-Commerce- und Markenfirmen.

Neue Produktfamilien, die daraus entstehen:

1. Auftraggeber- und Subunternehmerakte
   - Nachunternehmer,
   - Fremdfirmen,
   - SCC/SCP,
   - KEP/Post,
   - Mindestlohn-/AEntG-/Tariftreue-Dokumente,
   - Auftraggeber-Export.

2. Projekt- und Uebergabeakte
   - TGA,
   - Bau/Revisionsunterlagen,
   - Inbetriebnahme,
   - Gewaehrleistung,
   - spaetere Wartung/Pruefung.

3. Trust- und Kundenfragebogenakte
   - SaaS/C5/SOC 2,
   - SBOM,
   - Cloud-/Cyber-/Lieferkette,
   - EcoVadis/SAQ/CDP,
   - Kundenfreigabe-Link.

4. Finanzierungs- und Entscheidungsdatenraum
   - Bank,
   - Foerderung,
   - Vergabe,
   - Investor,
   - Steuerberater/WP.

5. Portfolio- und Fristenakte
   - Marken/Patente/Designs,
   - Domains/SSL,
   - Versicherungen,
   - Vertraege,
   - Standorte,
   - Schutzrechte.

Konsequenz fuer die Website:

Die Seite sollte nicht wie ein chaotischer Pflichtenkatalog wirken. Sie sollte als "Akte fuer alles, was andere irgendwann sehen wollen" strukturiert werden:

- Pruefungen und Wartungen,
- Mitarbeiter und Unterweisungen,
- Produkte und Nachweise,
- Auftraggeber und Subunternehmer,
- Kundenfrageboegen und Trust,
- Bau/TGA/Uebergabe,
- Finanzierung/Vergabe/Foerderung,
- Schutzrechte und Vertrage.

Das ist die saubere Verpackung. Nicht "wir sagen dir, welche Pflicht gilt", sondern:

"Wenn jemand Nachweise will, hast du sie in Minuten bereit."

Diese Runde hat damit nicht nur neue Seiten gefunden, sondern die Verkaufslogik geschaerft: Die Plattform verdient an Beweisfaehigkeit, Exportfaehigkeit und Wiederauffindbarkeit.

## 63. Restlueckenrunde: Musik-/Medienrechte, Betriebsnotfall und Versicherungsschaden

Nach der Dublettenpruefung sind viele grosse Felder schon vorhanden:

- Exportkontrolle/Zoll/Praeferenz,
- GwG/Transparenzregister,
- Gefahrgut/ADR,
- Intrastat/Aussenhandel,
- EMCS/Verbrauchsteuer,
- AZAV/Bildungstraeger,
- Bewachung/34a,
- 34c/34d/34f/34i-nahe Vermittlerakten,
- Landwirtschaft/Duenge/Tierhaltung,
- Event-/Versammlungsstaetten,
- Eich-/Messgeraete,
- Kasse/TSE,
- Apotheke/BtM,
- Energie/MaStR/Ladepunkte,
- Bauprodukte.

Zwei sinnvolle Restprodukte fehlen aber noch als eigene Verkaufswinkel.

### 63.1 GEMA-, KSK-, Bildlizenz-, Musiknutzungs- und Content-Rechteakte

Warum gefunden:

Viele kleine und mittlere Betriebe nutzen Musik, Fotos, Videos, Grafiken, Influencer-Content, Agenturleistungen oder Creator-Leistungen. GEMA beschreibt Musiknutzung in Gastronomie, Veranstaltungen, Firmenfeiern, Hintergrundmusik, Handel und Internet. Die Kuenstlersozialkasse beschreibt Pflichten fuer Unternehmen und Verwerter und verweist auf Aufzeichnungs- und Meldepflichten. In der Datei ist KSK schon als Arbeitgeber-/Meldekalender vorhanden, aber GEMA-/Medienrechte als praktische Akte fuer Betriebe fehlt noch.

Quellen:

- GEMA Musiknutzer: https://www.gema.de/de/musiknutzer
- GEMA Musik anmelden: https://www.gema.de/de/die-gema/musik-anmelden
- GEMA Gastronomie: https://www.gema.de/de/musiknutzer/branchen/gastronomie
- GEMA Veranstaltungen: https://www.gema.de/de/musiknutzer/veranstaltungen
- Kuenstlersozialkasse Unternehmen und Verwerter: https://www.kuenstlersozialkasse.de/unternehmen-und-verwerter
- KSK Pflichten Unternehmer und Verwerter: https://www.kuenstlersozialkasse.de/unternehmen-und-verwerter/pflichten-unternehmer-und-verwerter
- KSK Entgeltmeldung: https://www.kuenstlersozialkasse.de/unternehmen-und-verwerter/entgeltmeldung

Zielgruppen:

- Gastronomie,
- Hotels,
- Fitnessstudios,
- Friseure/Kosmetikstudios,
- Einzelhandel,
- Eventlocations,
- Vereine mit Veranstaltungen, aber nur als kleines Paket,
- Agenturen,
- Social-Media-Teams,
- Creator-/Influencer-Kampagnen nutzende Firmen,
- Franchise-/Filialsysteme mit Hintergrundmusik und Werbematerial,
- Online-Shops mit Produktbildern, Videos, Musik oder Stockmaterial.

Was wir anbieten koennen:

- Musiknutzungsakte,
- GEMA-Veranstaltungsordner,
- GEMA-Hintergrundmusik-Ordner,
- KSK-Entgeltordner,
- Creator-/Influencer-Vertragsablage,
- Bildlizenz- und Stockfoto-Akte,
- Nutzungsrechte pro Medium/Kampagne,
- Ablaufdaten fuer Lizenzen,
- Nachweis, wo ein Bild/Video/Musikstueck verwendet wird,
- Freigabe- und Rechtekette je Kampagne,
- Setlisten-/Veranstaltungsunterlagen als Upload,
- Jahresordner fuer KSK-Meldung,
- Export fuer Steuerberater, Agentur, GEMA/KSK-Prozess oder internen Marketingverantwortlichen.

Online-Produktlogik:

Die Plattform sagt nicht, ob eine konkrete Nutzung lizenzpflichtig ist, ob eine Lizenz ausreicht oder ob ein Bild rechtlich sauber genutzt wird. Sie verwaltet nur Lizenzen, Rechnungen, Freigaben, Nutzungsorte, Termine und Exporte.

Warum es Geld bringt:

- sehr viele kleine Betriebe,
- wiederkehrende Nutzung,
- konkrete Angst vor Abmahnungen/Nachforderungen,
- stark als Zusatzmodul fuer Gastro, Handel, Hotels, Fitness, Events und Agenturen,
- sehr guter SEO-Longtail ueber "GEMA Unterlagen", "KSK Entgelte dokumentieren", "Bildlizenz Nachweis", "Stockfoto Lizenz ablegen".

Preise:

- Kleinbetrieb: 9-29 EUR/Monat als Add-on,
- Marketing-/Agenturteam: 49-199 EUR/Monat,
- Filial-/Franchise-System: 199-1.500 EUR/Monat,
- Setup/Import: 99-5.000 EUR.

Risiko/Grenze:

- keine Urheberrechtsberatung,
- keine GEMA-/KSK-Betroffenheitsentscheidung,
- keine Lizenzpruefung als Urteil,
- keine fremden Tarif-/Formularinhalte hosten, nur verlinken oder eigene Muster nutzen.

Bewertung:

Nicht die groesste Umsatzsaeule, aber ein sehr starkes Vertrauens- und Add-on-Modul. Besonders gut fuer Zielgruppen, bei denen die Betriebsakte sonst zu technisch wirkt: Gastro, Fitness, Handel, Events, Agenturen.

### 63.2 Betriebsnotfall-, Schaden-, Versicherungs- und Wiederanlaufakte

Warum gefunden:

Versicherungsschaden, Betriebsunterbrechung, Wasser-/Brand-/Einbruch-/Cyber-/Maschinenschaden und Ausfall einer Schluesselperson sind keine klassischen "Pflichten", aber extrem starke Momente, in denen Firmen Unterlagen brauchen. GDV nennt ueber 25 Millionen Versicherungsfaelle pro Jahr in der Schaden- und Unfallversicherung. IHK-Notfallhandbuecher betonen, dass Unterlagen laufend aktualisiert werden sollten. Versicherer bieten Firmenkunden Schadenportale, in denen Unterlagen nachgereicht und Bearbeitungsstaende verfolgt werden koennen. Das ist eine perfekte Akte, weil sie vor dem Schaden aufgebaut wird und im Schadenfall sofort Nutzen liefert.

Quellen:

- GDV Schaden und Unfall: https://www.gdv.de/gdv/themen/schaden-unfall
- GDV Betriebsunterbrechung Bedingungen/Material: https://www.gdv.de/gdv/betriebsunterbrechung-allgemeine-sachversicherung-6074
- IHK Checkliste Versicherungsschutz im Unternehmen: https://www.ihk.de/blueprint/servlet/resource/blob/678110/497dd46fa4a815ad5e0ecaf27a47843b/versicherungsschutz-im-unternehmen-barrierefrei-data.pdf
- IHK Nuernberg Notfall-Handbuch fuer Unternehmen: https://www.ihk-nuernberg.de/fileadmin/IHK_Nuernberg/Unternehmer_innen_Gruendung/ihk-notfall-handbuch-fuer-unternehmen.pdf
- Allianz Firmenkunden Schadenmeldung als Beispiel fuer digitale Schadenprozesse: https://www.allianz.de/business/service/schaden-melden/

Zielgruppen:

- Handwerk,
- Gastronomie/Hotels,
- Handel,
- Produktion,
- Lager/Logistik,
- Immobilienbetreiber,
- Hausverwaltungen,
- Praxen,
- Kanzleien,
- Agenturen,
- Maschinen-/Anlagenbetreiber,
- Fuhrparkbetriebe,
- Unternehmen mit hohen Vorrats-, Maschinen- oder Umsatzausfallrisiken.

Was wir anbieten koennen:

- Betriebsnotfallakte,
- Versicherungsvertrags- und Policeordner,
- Schadenakte je Ereignis,
- Fotodokumentation,
- Rechnungen/Belege/Wiederbeschaffungsunterlagen,
- Inventar-/Anlagenliste,
- Wartungs- und Pruefnachweise als Schadenbelege,
- Notfallkontakte,
- Vollmachten-/Vertretungsordner als reine Ablage,
- Wiederanlauf-Checkliste,
- Lieferanten-/Dienstleisterliste,
- Schadenkommunikation mit Versicherer/Makler/Sachverstaendigem,
- Fristen fuer Nachreichungen,
- Exportpaket fuer Versicherer, Makler, Steuerberater, Sachverstaendigen oder Anwalt.

Online-Produktlogik:

Die Plattform reguliert keinen Schaden, bewertet keine Deckung, prueft keine Ansprueche und ersetzt keinen Makler/Anwalt. Sie sammelt Unterlagen, macht sie auffindbar, strukturiert die Ereignisakte und gibt Exporte an die Beteiligten frei.

Warum es Geld bringt:

- enormer emotionaler Wert im Ernstfall,
- sehr gute Kombination mit Wartungs-/Pruefakte, weil diese Nachweise im Schadenfall relevant werden koennen,
- Versicherungsmakler koennen es als Service fuer Firmenkunden anbieten,
- Schadenpraevention und Notfallvorsorge sind starke B2B-Themen,
- hohe Partnerumsatzchance mit Maklern, Sachverstaendigen, Sanierern, IT-Forensik, Brandschutz, Sicherheitsfirmen.

Preise:

- Notfallakte Add-on: 19-49 EUR/Monat,
- Firmen-Schaden-/Versicherungsakte: 99-399 EUR/Monat,
- Makler-/Beraterportal: 299-2.000 EUR/Monat,
- Setup/Inventarimport: 500-25.000 EUR,
- Schadenfall-Sofortpaket: 199-2.500 EUR einmalig fuer strukturierte Exportmappe.

Risiko/Grenze:

- keine Versicherungsberatung ohne Erlaubnisstruktur,
- keine Deckungspruefung,
- keine Schadenhoehe berechnen,
- keine rechtliche Anspruchsdurchsetzung,
- Makler/Sachverstaendige/Anwaelte als Partner ausspielen.

Bewertung:

Sehr gutes Cross-Sell-Modul. Es macht die Plattform emotional greifbar: Nicht nur "Fristen verwalten", sondern "wenn etwas passiert, bist du nicht blank". Gerade fuer Handwerk, Handel, Gastro, Immobilien, Produktion und Logistik passt das stark.

### 63.3 Ergebnis der Restlueckenrunde

Diese Runde bringt keine neue Hauptposition vor TGA, Nachunternehmer, Produktakte oder Trust-Center. Sie bringt aber zwei wertvolle Zusatzprodukte:

1. Medienrechte-/GEMA-/KSK-Akte
   - klein im Preis,
   - breit verkaufbar,
   - sehr gutes Add-on fuer Gastro, Events, Handel, Fitness, Agenturen.

2. Betriebsnotfall-/Schaden-/Versicherungsakte
   - sehr emotional,
   - starker Partnerkanal ueber Versicherungsmakler,
   - hoher Nutzen im Schadenfall,
   - gute Bruecke zwischen Versicherungen, Wartungsnachweisen, Inventar und Betriebsakte.

Damit ist die Plattform noch runder:

- Sie verwaltet nicht nur gesetzliche und technische Nachweise.
- Sie verwaltet auch kommerzielle Risiken, Rechte, Lizenzen, Versicherungen und Krisenunterlagen.
- Das passt zur Kernbotschaft, ohne die Website in Rechtsberatung zu drehen.

Kurzform fuer die spaetere Angebotsseite:

"Alle Nachweise fuer Betrieb, Kunden, Pruefer, Versicherer und Partner an einem Ort."

## 64. Weitere Tiefensuche: Heilmittel, Hilfsmittel, DiGA/DiPA, Cannabis-Anbauvereinigungen und Bergrecht

Diese Runde hat gezeigt: Die meisten offensichtlichen Pflichtenfelder sind bereits erfasst. Neue gute Treffer liegen jetzt in schmaleren, aber dokumentenstarken Rollen. Entscheidend ist wieder:

- nicht entscheiden, ob jemand betroffen ist,
- keine Zulassung/Fachfreigabe ersetzen,
- nur Akten, Nachweise, Fristen, Versionen, Aufgaben, Exporte und Partneruebergaben verkaufen.

### 64.1 Heilmittel-, Praxiszulassungs-, IK-, Raum-, Qualifikations- und Kassenvertragsakte

Warum gefunden:

Heilmittelerbringer wie Physiotherapie, Ergotherapie, Logopaedie, Podologie und Ernaehrungstherapie duerfen Leistungen zu Lasten der gesetzlichen Krankenkassen nur bei entsprechender Zulassung erbringen. Die GKV-Heilmittelerbringerliste fuehrt Praxen, die Leistungen zu Lasten der gesetzlichen Krankenkassen erbringen duerfen. Die ARGEn fuer Heilmittelzulassung verweisen auf Zulassungen, Datenanderungen, Abrechnungsbefugnis, Therapeutenmeldungen und Praxisinformationen. Das ist fuer Praxen kein einmaliges Formular, sondern laufende Stammdaten-, Qualifikations- und Nachweisarbeit.

Quellen:

- GKV-Spitzenverband Heilmittelerbringerliste: https://www.gkv-spitzenverband.de/service/heilmittelerbringer/heilmittelerbringer.jsp
- ARGEn Heilmittelzulassung: https://www.zulassung-heilmittel.de/
- Zulassende Stellen fuer Heilmittel nach Paragraf 124 Absatz 2 SGB V: https://www.gkv-heilmittel.de/fuer_heilmittelerbringer/zulassende_stellen/zulassungsstellen
- VDEK Zulassung als Heilmittelanbieter: https://www.vdek.com/vertragspartner/heilmittel/zulassung.html

Zielgruppen:

- Physiotherapiepraxen,
- Ergotherapiepraxen,
- Logopaediepraxen,
- Podologiepraxen,
- Ernaehrungstherapie-Anbieter,
- Therapiezentren mit mehreren Standorten,
- Praxisgruender,
- Praxisnachfolger,
- Abrechnungsdienstleister,
- Praxisberater.

Was wir anbieten koennen:

- Praxiszulassungsakte,
- Standortakte je Praxis,
- Therapeuten-/Qualifikationsordner,
- Fortbildungsnachweise,
- Raum-/Ausstattungsunterlagen,
- IK-Nummer-/Abrechnungsunterlagen,
- Kassenvertrags-/Rahmenvertragsablage,
- Datenanderungs-Tracker,
- Hygiene-/Medizinprodukte-/Datenschutzunterlagen als Unterordner,
- Upload-Ordner fuer Zulassungsstelle, Abrechnungsdienstleister, Praxisberater oder Kauefer bei Praxisverkauf,
- Fristen fuer Zertifikate, Fortbildungen, Versicherungen, Mietvertrag, Geraetepruefungen.

Online-Produktlogik:

Die Plattform sagt nicht, ob eine Praxis zulassungsfaehig ist, ob Raeume ausreichen oder ob ein Vertrag korrekt umgesetzt ist. Sie verwaltet nur die Unterlagen, Rollen, Fristen und Exportpakete.

Warum es Geld bringt:

- viele kleine zahlende Praxen,
- hohe Angst vor Abrechnungs-/Zulassungsproblemen,
- Praxisnachfolge und Standortwechsel erzeugen echten Druck,
- Therapiezentren mit mehreren Standorten zahlen besser,
- Partnervertrieb ueber Praxisberater, Abrechnungsdienstleister und Berufsverbaende moeglich.

Preise:

- Einzelpraxis: 29-99 EUR/Monat,
- Therapiezentrum: 149-499 EUR/Monat,
- Standortnetz: 500-2.000 EUR/Monat,
- Setup/Praxisuebernahme-Datenraum: 300-5.000 EUR.

Risiko/Grenze:

- keine Heilmittelzulassungsberatung,
- keine Abrechnungsberatung,
- keine medizinische Bewertung,
- keine Aussage "Praxis erfuellt Zulassungsvoraussetzungen",
- kein Pflegegeld-/Pflegeleistungs-Content.

Bewertung:

Sehr gutes Branchenpaket, aber nicht Startkern. Es passt spaeter stark als "Praxisakte fuer Heilmittelerbringer" und bleibt sauber, solange es nur Dokumentation, Fristen und Export macht.

### 64.2 Hilfsmittel-, Sanitaetshaus-, Praequalifizierungs- und Leistungserbringerakte

Warum gefunden:

Hilfsmittel duerfen nach GKV-Spitzenverband nur auf Grundlage entsprechender Vertrage abgegeben werden; Vertragspartner der Krankenkassen koennen nur Leistungserbringer sein, die Eignungs- und Leistungsfaehigkeitsanforderungen erfuellen. Die Praequalifizierung nach Paragraf 126 SGB V prueft diese Eignung vorgelagert. Fuer Sanitaetshaeuser, Orthopaedietechnik, Rehatechnik, Homecare und andere Hilfsmittelanbieter ist das ein sehr klares Nachweisprodukt.

Quellen:

- GKV-Spitzenverband Praequalifizierung und Eignungspruefung: https://www.gkv-spitzenverband.de/krankenversicherung/hilfsmittel/praequalifizierung/praequalifizierung.jsp
- GKV-Spitzenverband Eignungsanforderungen: https://www.gkv-spitzenverband.de/krankenversicherung/hilfsmittel/praequalifizierung/eignungskriterien/eignungskriterien.jsp
- AOK Praequalifizierung fuer Hilfsmittelanbieter: https://www.aok.de/gp/praequalifizierung
- VDEK Glossar Praequalifizierung: https://www.vdek.com/presse/glossar_gesundheitswesen/praequalifizierung.html

Zielgruppen:

- Sanitaetshaeuser,
- Orthopaedietechnik,
- Rehatechnik,
- Homecare-Anbieter,
- Augenoptik-/Hoerakustik-nahe Hilfsmittelanbieter,
- Apotheken mit Hilfsmittelversorgung,
- Versorgungsnetzwerke,
- Hilfsmittel-Startups,
- Praequalifizierungsberater.

Was wir anbieten koennen:

- Praequalifizierungsakte,
- Versorgungsbereichsakte,
- Standort-/Filialakte,
- Mitarbeiterqualifikationen,
- Fortbildungsnachweise,
- Werkstatt-/Raum-/Ausstattungsunterlagen,
- Versicherungs- und Vertragsnachweise,
- Lieferanten- und Produktgruppenordner,
- Audit-/Abweichungs-/Massnahmenliste,
- Ablaufwarnungen fuer Zertifikate und Nachweise,
- Export fuer Praequalifizierungsstelle, Krankenkasse, Berater, Filialleitung oder Geschaeftsfuehrung.

Online-Produktlogik:

Das System prueft nicht, ob ein Hilfsmittelanbieter praequalifiziert werden kann oder ob ein Versorgungsbereich abgedeckt ist. Es verwaltet nur die Unterlagen und macht fehlende Uploads als Datenstatus sichtbar.

Warum es Geld bringt:

- hoeherer Ticketwert als normale Kleinbetriebe,
- mehrere Standorte/Versorgungsbereiche pro Kunde,
- wiederkehrende Aktualisierung,
- starker Partnerkanal ueber Berater, PQ-Stellen-nahe Dienstleister und Branchensoftware,
- gute Kombination mit Medizinprodukte-, Wartungs-, Versicherungs- und Personalqualifikationsakten.

Preise:

- Einzelstandort: 99-249 EUR/Monat,
- mehrere Versorgungsbereiche/Filialen: 300-1.500 EUR/Monat,
- Verbund/Netz: 2.000-7.500 EUR/Monat,
- Setup/PQ-Import: 1.000-25.000 EUR.

Risiko/Grenze:

- keine PQ-Beratung,
- keine Vertrags- oder Abrechnungsberatung,
- keine Aussage "PQ bestanden",
- keine medizinische Eignungsbewertung.

Bewertung:

Sehr gut. Dieses Modul ist kommerziell staerker als die reine Heilmittelpraxisakte, weil Standort-/Versorgungsbereichslogik und PQ-Druck hoehere Preise erlauben.

### 64.3 DiGA-, DiPA-, Health-App-, BfArM-Antrags- und Evidenzdatenraum

Warum gefunden:

Das BfArM beschreibt DiGA und DiPA als formalisierte Verfahren mit Leitfaeden, Antragsportalen, Anforderungen an Sicherheit, Funktionstauglichkeit, Datenschutz, Datensicherheit, Interoperabilitaet, Qualitaet und Nutzennachweise. Fuer digitale Gesundheits- und Pflegeanwendungen muessen Hersteller Unterlagen, Nachweise, Zertifikate, Produktdaten, Evidenz, technische Dokumentation und Kommunikation strukturiert verwalten. Das ist ein Premium-Datenraum, kein Massenmodul.

Quellen:

- BfArM DiGA: https://www.bfarm.de/DE/Medizinprodukte/Aufgaben/DiGA-und-DiPA/DiGA/_node.html
- BfArM DiGA-Leitfaden: https://www.bfarm.de/SharedDocs/Downloads/DE/Medizinprodukte/diga_leitfaden.pdf
- BfArM DiPA: https://www.bfarm.de/DE/Medizinprodukte/Aufgaben/DiGA-und-DiPA/DiPA/_node.html
- BfArM DiGA-/DiPA-Portal: https://www.bfarm.de/DE/Medizinprodukte/Portale/DiGA-DiPA/_node.html
- GKV-Spitzenverband DiPA: https://www.gkv-spitzenverband.de/pflegeversicherung/pv_digitalisierung/dipa.jsp

Zielgruppen:

- DiGA-Hersteller,
- DiPA-Hersteller,
- Health-App-Startups,
- Medtech-Softwareanbieter,
- Telemedizinanbieter,
- Anbieter digitaler Therapiebegleitung,
- Softwareanbieter fuer Praxen/Kliniken/Therapien,
- Regulatory-Affairs-Berater,
- Datenschutz-/IT-Security-Berater im Health-Bereich.

Was wir anbieten koennen:

- BfArM-Antragsdatenraum,
- Produktanforderungs- und Nachweisordner,
- Datenschutz-/Datensicherheitszertifikatsablage,
- Interoperabilitaetsunterlagen,
- Studien-/Evidenzordner,
- Medizinprodukte-/MDR-Verknuepfung,
- SBOM-/Software-Supply-Chain-Verknuepfung,
- Versions-/Releasehistorie,
- Dienstleister-/Subprozessorenordner,
- Kommunikationsakte mit Beratern und BfArM-Prozess,
- Export fuer Regulatory, Datenschutz, Security, Investor, BfArM-nahe Vorbereitung oder internen Review.

Online-Produktlogik:

Die Plattform sagt nicht, ob eine App DiGA/DiPA-faehig ist, ob Evidenz ausreicht oder ob Datenschutz-/Security-Anforderungen erfuellt sind. Sie ist ein strukturierter Datenraum fuer Unterlagen, Versionen, Aufgaben, Freigaben und Exporte.

Warum es Geld bringt:

- sehr hohe Zahlungsbereitschaft pro Kunde,
- starkes Setup-Potential,
- hoher Investor-/Regulatory-Druck,
- wenige Kunden reichen fuer hohen Umsatz,
- sehr gute Verbindung zu EHDS, MDR, SBOM, Datenschutz und Trust-Center.

Preise:

- Startup-Datenraum: 299-999 EUR/Monat,
- Regulatory/Health-Tech Room: 1.500-5.000 EUR/Monat,
- Enterprise/Portfolio: 5.000-20.000 EUR/Monat,
- Setup: 5.000-100.000 EUR.

Risiko/Grenze:

- keine DiGA-/DiPA-Zulassungsberatung,
- keine medizinische Nutzenaussage,
- keine Datenschutz-/IT-Sicherheitszertifizierung,
- keine MDR-Klassifizierung,
- nur mit Fachpartnern prominent verkaufen.

Bewertung:

Sehr hohes Umsatzpotential, aber nur als Spaeter-/Partnerprodukt. Fuer den Website-Start zu speziell, fuer Premiumkunden spaeter extrem attraktiv.

### 64.4 Cannabis-Anbauvereinigungs-, Jugend-/Gesundheitsschutz-, Mitglieds- und Abgabeakte

Warum gefunden:

Anbauvereinigungen nach dem KCanG sind seit 2024 ein neues, stark reguliertes Feld. BMG und Laenderseiten beschreiben Erlaubnisverfahren, Mitgliedergrenzen, Wohnsitz-/Altersvoraussetzungen, Tages-/Monatsmengen, nichtgewerbliche Struktur, Gesundheits- und Jugendschutzkonzepte und Behoerdenueberwachung. Das Thema ist aktuell und SEO-stark, aber kommerziell und reputativ heikel.

Quellen:

- BMG FAQ Cannabisgesetz: https://www.bundesgesundheitsministerium.de/themen/cannabis/faq-cannabisgesetz
- KCanG: https://www.gesetze-im-internet.de/kcang/
- Hamburg Anbauvereinigungen: https://www.hamburg.de/politik-und-verwaltung/behoerden/bjv/themen/verbraucherschutz/lebensmittel/anbauvereinigungen
- NRW FAQ Anbauvereinigungen: https://www.mags.nrw/fragen-und-antworten-zu-anbauvereinigungen
- Bundesgesetzblatt Cannabisgesetz: https://www.recht.bund.de/bgbl/1/2024/109/regelungstext.pdf

Zielgruppen:

- Cannabis-Anbauvereinigungen,
- Genossenschafts-/Vereinsvorstaende,
- Beratende Dienstleister fuer Anbauvereinigungen,
- Sicherheits-/Hygiene-/Praeventionsdienstleister,
- Labor-/Qualitaetsdienstleister.

Was wir anbieten koennen:

- Erlaubnisantrags-Datenraum,
- Mitglieder-/Selbstauskunftsordner,
- Alters-/Wohnsitznachweise als Uploadstruktur,
- Jugend- und Gesundheitsschutzkonzept-Ablage,
- Praeventionsbeauftragten-Unterlagen,
- Anbau-/Ernte-/Abgabe-Dokumentationsordner,
- Sicherheits-/Hygiene-/Qualitaetsunterlagen,
- Chargen-/Laborunterlagen,
- Vorstands-/Protokollordner,
- Behoerdenkommunikation,
- Export fuer Behoerde, Berater, Vorstand oder Pruefung.

Online-Produktlogik:

Das System sagt nicht, ob eine Anbauvereinigung erlaubnisfaehig ist, ob ein Konzept reicht oder ob eine Abgabe zulaessig ist. Es ist nur Akte, Fristen, Rollen, Upload, Dokumentenstatus und Export.

Warum es Geld bringen kann:

- sehr aktuelles Suchthema,
- starke Dokumentationslast,
- hoher Bedarf an Ordnung,
- Partnerumsatz mit Beratern, Laboren, Sicherheitsdienstleistern und Praeventionsschulungen.

Warum es nicht ideal ist:

- nichtgewerbliche Struktur begrenzt Zahlungsbereitschaft,
- politisch/reputativ sensibel,
- hohes Rechts- und Behoerdenrisiko,
- Produkt kann schnell als "Cannabis-Compliance-Beratung" missverstanden werden,
- nicht passend als Hauptsignal fuer eine serioese Betriebsakte-Website.

Preise:

- Verein/Club: 49-299 EUR/Monat,
- Setup Antrag/Akte: 500-5.000 EUR,
- Beraterportal: 299-1.500 EUR/Monat.

Risiko/Grenze:

- keine KCanG-Beratung,
- keine Erlaubnisprognose,
- keine Abgabefreigabe,
- keine Mengen-/Mitgliederentscheidung automatisiert,
- nur spaeter als verstecktes Spezialpaket, nicht auf die Startseite.

Bewertung:

SEO-spannend, aber nicht als sichtbarer Start. Wenn ueberhaupt, spaeter als neutrales "Vereins-/Erlaubnisakte fuer Anbauvereinigungen" mit sehr klarer Grenze.

### 64.5 Bergbau-, Steinbruch-, Kiesgruben-, Betriebsplan- und Rohstoffgewinnungsakte

Warum gefunden:

Bergbaubetriebe und Rohstoffgewinnungsbetriebe muessen Betriebsplaene, Hauptbetriebsplaene, Sonderbetriebsplaene, Rahmenbetriebsplaene, Abschlussbetriebsplaene, Umwelt-/Wasser-/Immissionsunterlagen, Vermessung, Spreng-/Bohr-/Sicherheitsunterlagen und Behoerdenkommunikation organisieren. Das LBEG beschreibt, dass ein Betriebsplan vom Bergbau-Unternehmen einzureichen ist, wenn sichtbare Aktivitaeten anstehen. Die Bezirksregierung Arnsberg verweist darauf, dass Betriebsplaene sowie Verlaengerungen, Ergaenzungen oder Abaenderungen vor Beginn vorgesehener Arbeiten einzureichen sind. Brandenburg beschreibt, dass Bergbaubetriebe nur aufgrund zugelassener bergrechtlicher Betriebsplaene errichtet, gefuehrt und eingestellt werden duerfen.

Quellen:

- LBEG BergPass Betriebsplaene: https://bergpass.lbeg.de/?pgId=272
- Bezirksregierung Arnsberg Betriebsplanverfahren Richtlinien: https://esb.bra.nrw.de/7-verwaltungsanweisungen/betriebsplanverfahren-richtlinien/richtlinien
- LBGR Brandenburg Betriebsplanverfahren: https://lbgr.brandenburg.de/lbgr/de/bergbau/planfeststellungs-und-betriebsplanverfahren-steine-erden-und-bohrlochbergbau/betriebsplanverfahren/
- Bezirksregierung Arnsberg Bohrlochbergbau/Bohrungen: https://www.bra.nrw.de/energie-bergbau/rohstoffgewinnung/bohrlochbergbaubohrungen
- Hessen Bergbau Sonderbetriebsplan: https://verwaltungsportal.hessen.de/leistung?leistung_id=L100001_394175231

Zielgruppen:

- Kiesgruben,
- Steinbrueche,
- Sand-/Kies-/Ton-/Natursteinbetriebe,
- Bohrunternehmen,
- Geothermie-Projektierer,
- Rohstoffgewinnungsunternehmen,
- Aufbereitungsanlagen,
- Ingenieurburos fuer Bergrecht/Umwelt,
- Gutachter und Planungsburos.

Was wir anbieten koennen:

- Betriebsplanakte,
- Haupt-/Sonder-/Rahmen-/Abschlussbetriebsplan-Ordner,
- Auflagen- und Nebenbestimmungs-Tracker,
- Fristen fuer Verlaengerungen, Ergaenzungen, Messungen und Berichte,
- Vermessungs-/Bohr-/Spreng-/Sicherheitsunterlagen,
- Wasser-/Immissions-/Naturschutz-/UVP-Unterlagen,
- Gutachter-/Labor-/Monitoring-Ordner,
- Betriebschronik,
- Behoerdenkommunikation,
- Wiedernutzbarmachungs-/Rekultivierungsordner,
- Export fuer Bergbehoerde, Gutachter, Ingenieurbuero, Betreiber oder Geschaeftsfuehrung.

Online-Produktlogik:

Das System erstellt keinen Betriebsplan fachlich, bewertet keine Genehmigungsfaehigkeit und ersetzt kein Ingenieur-/Bergrechtsbuero. Es ist ein Premium-Datenraum fuer Dokumente, Auflagen, Fristen, Versionen und Exporte.

Warum es Geld bringt:

- wenige, aber sehr zahlungskraeftige Betreiber,
- lange Projektlaufzeiten,
- viele Gutachter und Behoerdenbeteiligte,
- hohe Kosten, wenn Unterlagen fehlen,
- perfekte Partnerlogik ueber Ingenieur- und Umweltplanungsbueros.

Preise:

- einzelner Betrieb: 499-2.000 EUR/Monat,
- Projekt-/Genehmigungsdatenraum: 2.000-20.000 EUR einmalig,
- Betreibergruppe: 3.000-15.000 EUR/Monat,
- Setup/Migration: 5.000-100.000 EUR.

Risiko/Grenze:

- keine bergrechtliche Beratung,
- keine Betriebsplanerstellung als Fachleistung,
- keine Umwelt-/Wasser-/Immissionsbewertung,
- nur mit Fachpartnern vermarkten.

Bewertung:

Sehr schmal, aber stark fuer High-Ticket. Nicht fuer die Startseite, aber als spaetere Spezialakte im Bereich "Genehmigungen, Auflagen und Betreiberakten" sinnvoll.

### 64.6 Bewertung dieser Tiefensuche

Neue Prioritaet aus dieser Runde:

1. Hilfsmittel-/Sanitaetshaus-/Praequalifizierungsakte
   - bester kommerzieller Treffer dieser Runde,
   - viele Dokumente, mehrere Standorte, wiederkehrende Nachweise,
   - saubere Aktenlogik ohne Beratung.

2. Heilmittel-/Praxiszulassungsakte
   - breiter, guenstiger, guter SEO-Longtail,
   - eher Branchenpaket als Hauptprodukt.

3. DiGA-/DiPA-/Health-App-Datenraum
   - hoechste Ticketfantasie,
   - aber nur als Premium-/Partnerprodukt.

4. Bergbau-/Steinbruch-/Betriebsplanakte
   - sehr kleine Zielgruppe,
   - aber hohe Tickets,
   - gut fuer Partnervertrieb mit Ingenieur-/Umweltbueros.

5. Cannabis-Anbauvereinigungsakte
   - aktuell, SEO-stark, dokumentenlastig,
   - aber nicht gewinnorientiert, reputativ sensibel und nicht als Hauptsignal geeignet.

Konsequenz:

Fuer die spaetere Produktarchitektur kommen drei neue Aktenfamilien dazu:

- Gesundheitsanbieter-Akte:
  Heilmittel, Hilfsmittel, Sanitaetshaus, Praequalifizierung, Health-App.

- Genehmigungs- und Auflagenakte:
  Bergrecht, Anlagen, Sonderbetriebe, Baustelle, Umwelt, Immission, Wasser, Auflagen.

- Sensible Spezialakte:
  Cannabis-Anbauvereinigung nur als spaetes, neutral verpacktes Nischenpaket.

Fuer die Startseite bleibt die Reihenfolge aber stabil:

1. Produkt-/Haendler-/Nachweisakte,
2. TGA-/Uebergabe-/Wartungsakte,
3. Nachunternehmer-/Auftraggeberakte,
4. Trust-/Kundenfragebogen-/SBOM-Akte,
5. Finanzierungs-/Vergabe-/Foerderdatenraum,
6. Branchenpakete danach.

## 65. Weitere Spezialrunde: Akkreditierte Stellen, Installateurverzeichnisse, Luftfracht, Hafensicherheit, Arbeitsmigration, Taxi und Pfand/Versteigerung

Diese Runde trifft wieder echte Aktenlogik. Die besten Felder sind nicht "noch ein Gesetz", sondern Rollen, bei denen Dritte regelmaessig Unterlagen sehen wollen:

- Akkreditierungsstellen/Begutachter,
- Netzbetreiber,
- Luftfahrt-Bundesamt,
- Hafen-/Sicherheitsbehoerden,
- Auslaenderbehoerden/Bundesagentur fuer Arbeit/Zoll,
- Verkehrsbehoerden,
- Gewerbebehoerden.

### 65.1 DAkkS-, Prueflabor-, Kalibrierlabor-, Inspektionsstellen- und Zertifizierungsstellenakte

Warum gefunden:

Akkreditierte Konformitaetsbewertungsstellen sind ein sehr starker Premiumtreffer. DAkkS nennt unter anderem Pruef- und Kalibrierlabore nach DIN EN ISO/IEC 17025, medizinische Laboratorien nach DIN EN ISO 15189, Inspektionsstellen nach DIN EN ISO/IEC 17020, Zertifizierungsstellen nach ISO/IEC 17021-1, 17024 und 17065 sowie Validierungs-/Verifizierungsstellen. In der DAkkS-Begutachtung werden Dokumente, Aufzeichnungen, Personalunterlagen, Einrichtungen, Stichproben und Taetigkeiten geprueft. Genau das schreit nach einem Auditdatenraum.

Quellen:

- DAkkS Akkreditierungsaktivitaeten: https://www.dakks.de/de/akkreditierungsaktivitaeten.html
- DAkkS Pruef- und Kalibrierlabore ISO/IEC 17025: https://www.dakks.de/de/pruef-und-kalibrierlabore-din-en-iso-iec-17025.html
- DAkkS Inspektionsstellen ISO/IEC 17020: https://www.dakks.de/de/inspektionsstellen-din-en-iso-iec-17020.html
- DAkkS Begutachtung Schritt 3: https://www.dakks.de/de/schritt-3-begutachtung.html
- DAkkS akkreditierte Stellen Suche: https://www.dakks.de/de/akkreditierte-stellen-suche.html

Zielgruppen:

- Prueflabore,
- Kalibrierlabore,
- medizinische Laboratorien,
- Werkstoff-/Bau-/Umwelt-/Lebensmittel-/Chemielabore,
- Inspektionsstellen,
- Zertifizierungsstellen,
- Personenzertifizierer,
- Produktzertifizierer,
- Validierungs- und Verifizierungsstellen,
- Eignungspruefungsanbieter,
- interne Werkslabore mit Akkreditierung,
- Berater fuer ISO 17025/17020/17065.

Was wir anbieten koennen:

- Akkreditierungsdatenraum,
- Normkapitel-Ordnerstruktur,
- Geltungsbereich-/Scope-Verwaltung,
- Methoden-/Verfahrensliste,
- Personal-Kompetenzmatrix,
- Schulungs- und Befugnisnachweise,
- Geraete-/Kalibrier-/Wartungsakte,
- Ringversuchs-/Eignungspruefungsordner,
- Abweichungs-/CAPA-Tracker,
- Audit-/Begutachtungsplanung,
- Auflagen-/Massnahmenverfolgung,
- Kunden-/Pruefberichte-/Stichprobenordner,
- vertraulicher Export fuer DAkkS-Begutachtung, interne QA, Laborleitung oder Berater.

Online-Produktlogik:

Die Plattform bewertet nicht, ob eine Stelle akkreditierungsfaehig ist, ob eine Methode valide ist oder ob eine Abweichung fachlich geschlossen ist. Sie verwaltet nur Nachweise, Aufgaben, Versionen, Fristen und Exportpakete.

Warum es Geld bringt:

- sehr hohe Zahlungsbereitschaft,
- Dokumentation ist Kern des Geschaefts,
- Begutachtungen wiederholen sich,
- Auditstress ist real,
- weniger Massenmarkt, aber starkes B2B-Premium,
- guter Partnerkanal ueber Laborberater, QM-Berater, Kalibrierdienstleister und Branchenverbande.

Preise:

- kleines Labor: 299-799 EUR/Monat,
- akkreditierte Stelle mittel: 1.000-3.000 EUR/Monat,
- mehrere Standorte/Scopes: 3.000-15.000 EUR/Monat,
- Setup/Altakte: 3.000-100.000 EUR.

Risiko/Grenze:

- keine Akkreditierungsberatung,
- keine fachliche Methodenvalidierung,
- keine Normerfuellungszusage,
- keine "DAkkS-ready"-Garantie,
- Fachpartner fuer Labor-QM klar ausspielen.

Bewertung:

Sehr starkes Premium-Modul. Nicht als Massenstart, aber als spaeterer High-Ticket-Datenraum wahrscheinlich einer der besten Funde der letzten Runden.

### 65.2 Installateurverzeichnis-, Konzessions-, Netzbetreiber- und Fachbetriebsakte fuer Strom, Gas und Wasser

Warum gefunden:

Installationsunternehmen fuer Strom, Gas und Wasser muessen bei Netzbetreibern beziehungsweise Versorgungsunternehmen in Installateurverzeichnissen gefuehrt werden. Hessen beschreibt, dass bei Gas und Wasser ein Installateurvertrag und bei Strom der Antrag auf Eintragung in das Installateurverzeichnis zugrunde liegt. VDE/ZVEH/DVGW-Quellen zeigen Qualifikations-, Schulungs-, Netzbetreiber- und Ausweislogik. Fuer Elektro-, SHK-, PV-, Speicher-, Ladeinfrastruktur- und Wasserinstallationsbetriebe ist das ein sehr gutes Aktenprodukt.

Quellen:

- Verwaltungsportal Hessen Installateurverzeichnis: https://verwaltungsportal.hessen.de/leistung?leistung_id=L100001_346499585
- BDEW Installateurverzeichnis Strom/Gas/Wasser: https://www.bdew.de/energie/installateurverzeichnis-stromgaswasser/
- ZVEH TREI: https://www.zveh.de/die-e-handwerke/e-handwerke-und-netzanschluss/trei.html
- DVGW Hausinstallation und TRGI: https://www.dvgw.de/themen/gas/installation-und-anwendung/hausinstallation-und-trgi
- DVGW Trinkwasser-Installation: https://www.dvgw.de/themen/wasser/verbraucherinformationen/trinkwasser-installation

Zielgruppen:

- Elektroinstallationsbetriebe,
- SHK-/Gas-/Wasserinstallateure,
- PV- und Speicherinstallateure,
- Ladeinfrastruktur-Installateure,
- Waermepumpen-/Gebaeudetechnikbetriebe,
- Handwerksbetriebe mit mehreren Netzgebieten,
- Stadtwerke-/Netzbetreiber-nahe Dienstleister,
- Innungen und Schulungsanbieter.

Was wir anbieten koennen:

- Installateurverzeichnis-Akte je Netzgebiet,
- Netzbetreiber-/Versorgerliste,
- Installateurausweis-/Gueltigkeitsordner,
- TREI-/TRGI-/TRWI-/AEIN-/Schulungsnachweise,
- Meister-/Qualifikationsunterlagen,
- Versicherungs- und Betriebsunterlagen,
- Werkzeug-/Messgeraete-/Kalibrierakte,
- Formular- und Portallog je Netzbetreiber,
- Fristen fuer Verlaengerungen und Fortbildungen,
- Kundenprojekt-Verknuepfung fuer PV, Speicher, Wallbox, Netzanschluss,
- Export fuer Netzbetreiber, Innung, Kunde, Auftraggeber oder internen QS-Verantwortlichen.

Online-Produktlogik:

Das System entscheidet nicht, ob eine Eintragung moeglich ist oder ob ein Betrieb fachlich geeignet ist. Es verwaltet nur die Unterlagen, Nachweise, Termine und Netzbetreiberkontakte.

Warum es Geld bringt:

- sehr viele Betriebe,
- hoher Druck durch Energiewende, PV, Speicher, Waermepumpe, Wallbox,
- ein Betrieb arbeitet oft mit mehreren Netzbetreibern,
- Qualifikations- und Ausweisfristen wiederholen sich,
- gute Partnerumsatze mit Schulungsanbietern, Innungen, Messgeraete-/Kalibrierdiensten und Branchen-Software.

Preise:

- Kleinbetrieb: 29-99 EUR/Monat,
- wachsender Fachbetrieb: 149-399 EUR/Monat,
- mehrere Standorte/Teams: 500-2.000 EUR/Monat,
- Setup/Netzgebietsimport: 300-10.000 EUR.

Risiko/Grenze:

- keine technische Fachbewertung,
- keine Eintragungszusage,
- keine Netzanschlussplanung,
- keine Gewaehr fuer Formularrichtigkeit,
- Nutzer/Fachbetrieb traegt Inhalte selbst ein.

Bewertung:

Sehr guter Branchenkeil. Breiter als DAkkS, leichter online zu verkaufen und stark passend zu TGA-/Gebaeude-/PV-/Ladepunktakten.

### 65.3 Luftfracht-Sicherheitskette: Bekannter Versender, reglementierter Beauftragter, reglementierter Lieferant

Warum gefunden:

Das Luftfahrt-Bundesamt fuehrt Rollen in der sicheren Lieferkette, unter anderem bekannte Versender, reglementierte Beauftragte und reglementierte Lieferanten. Das LBA beschreibt Sicherheitsprogramme, Zulassungsvoraussetzungen, Personal-/Schulungsthemen, Zuverlaessigkeitsueberpruefungen und seit 2025 auch Cybersicherheitsmassnahmen als Teil der Zulassung fuer bekannte Versender, reglementierte Beauftragte und reglementierte Lieferanten. Das ist ein hochpreisiges, klares Nachweisfeld fuer Logistik.

Quellen:

- LBA Bekannte Versender: https://www.lba.de/DE/Luftsicherheit/SichereLieferkette_DE/BekannteVersender/BekannterVersender_node.html
- LBA Bekannte Versender Zulassung: https://www.lba.de/DE/Luftsicherheit/SichereLieferkette_DE/BekannteVersender/BekV_FAQ/Zulassung/FAQ_node.html
- LBA Mindestanforderungen reglementierter Beauftragter: https://www.lba.de/DE/Luftsicherheit/SichereLieferkette_DE/RegBDeuteschland/Zulassungsvoraussetzungen/Zulassungsvoraussetzungen.html
- LBA Reglementierte Lieferanten FAQ: https://www.lba.de/DE/Luftsicherheit/ReglementierteLieferanten/FAQ.html
- LBA Cybersicherheit Luftsicherheit: https://www.lba.de/DE/Luftsicherheit/SichereLieferkette_DE/RegBDeuteschland/FAQs/Cybersicherheit_alle/Cybersicherheit-neu/FAQ_node.html

Zielgruppen:

- Luftfrachtspediteure,
- KEP- und Expressdienste mit Luftfracht,
- Lagerhalter,
- Hersteller mit regelmaessiger Luftfracht,
- bekannte Versender,
- reglementierte Beauftragte,
- reglementierte Lieferanten,
- Flughafenlieferanten,
- Bordvorratslieferanten,
- Luftsicherheitsberater und Ausbilder.

Was wir anbieten koennen:

- Luftsicherheits-Datenraum,
- Zulassungs-/Statusakte je Standort,
- Sicherheitsprogramm-Versionierung,
- Sicherheitsbeauftragten- und Stellvertreterakte,
- Schulungs- und Zuverlaessigkeitsnachweise,
- Personalrollen und Zutrittslisten,
- Fracht-/Sendungsprozess-Nachweise,
- Cybersicherheits-Unterlagen als Unterordner,
- Audit-/LBA-Kommunikation,
- Abweichungs-/Massnahmenliste,
- Fristen fuer Schulungen, Zuverlaessigkeitspruefungen, Programmupdates und Standortdaten,
- Export fuer LBA, Sicherheitsberater, Kunde oder interne Compliance.

Online-Produktlogik:

Das System bewertet nicht, ob ein Unternehmen als bekannter Versender oder reglementierter Beauftragter zugelassen wird. Es ist nur Datenraum, Fristen, Versionen, Rollen und Export.

Warum es Geld bringt:

- hohe Kosten bei Verlust des sicheren Status,
- Lieferverzoegerungen sind teuer,
- Standorte und Personal erzeugen wiederkehrende Dokumente,
- LBA-Audits und Programmupdates erzeugen Druck,
- gute Partnerlogik mit Luftsicherheitsberatern, Schulungsanbietern und Logistiksoftware.

Preise:

- einzelner Standort: 299-999 EUR/Monat,
- mehrere Standorte: 1.000-5.000 EUR/Monat,
- Logistikgruppe: 5.000-20.000 EUR/Monat,
- Setup/Auditvorbereitung: 3.000-75.000 EUR.

Risiko/Grenze:

- keine Luftsicherheitsberatung,
- keine Zulassungsgarantie,
- keine Sicherheitsprogramm-Erstellung ohne Fachpartner,
- keine Entscheidung "Fracht sicher",
- sehr klare Fachpartner-Grenze.

Bewertung:

Sehr gutes High-Ticket-Logistikmodul. Nicht breit, aber wirtschaftlich stark und passt zu Logistik/Zoll/eFTI/ICS2.

### 65.4 ISPS-, Hafenanlagen-, Hafensicherheits- und Port-Facility-Security-Akte

Warum gefunden:

Der ISPS-Code gilt fuer Schiffe und Hafenanlagen und dient der Gefahrenabwehr. Deutsche Flagge beschreibt die Anwendung unter anderem fuer Frachtschiffe ab 500 BRZ, Fahrgastschiffe in internationaler Fahrt und Hafenanlagen, an denen diese Schiffe abgefertigt werden. Landesbehoerden wie die Bezirksregierung Duesseldorf erklaeren, dass SOLAS XI-2 und der ISPS-Code Gefahrenabwehr auf Schiffen und in Hafenanlagen regeln. Betreiber von Hafenanlagen brauchen Sicherheitsplaene, PFSO-Rollen, Unterweisungen, Ereignisdokumentation und Behoerdenkommunikation.

Quellen:

- Deutsche Flagge ISPS: https://www.deutsche-flagge.de/de/sicherheit/isps
- Bezirksregierung Duesseldorf Grundlagen ISPS-Code: https://www.brd.nrw.de/Themen/Ordnung-Sicherheit/Hafensicherheit/Grundlagen-ISPS-Code
- Polizei Hamburg Hafensicherheit: https://www.polizei.hamburg/hafensicherheit-793890
- IMO SOLAS XI-2 and ISPS Code: https://www.imo.org/en/ourwork/security/pages/solas-xi-2%20isps%20code.aspx
- Niedersaechsisches Hafensicherheitsgesetz Uebersicht: https://voris.wolterskluwer-online.de/browse/source/csh-da-filter%21a52e918e-8a02-41f8-8b62-1c4b6a92ff6a--WKDE_LTR_0000003520%23d3c7842daa9738a0a3f71d20482e761c

Zielgruppen:

- Hafenanlagenbetreiber,
- Terminalbetreiber,
- Faehrterminals,
- Kreuzfahrtterminals,
- Hafenlogistikunternehmen,
- Hafennahe Lager-/Umschlagsbetriebe,
- Sicherheitsdienste mit Hafensicherheitsleistungen,
- PFSO-/ISPS-Berater,
- Reederei-/Terminalgruppen.

Was wir anbieten koennen:

- ISPS-Datenraum,
- Hafenanlagenakte,
- Gefahrenabwehrplan-Versionierung,
- PFSO-/Vertreter-/Rollenakte,
- Unterweisungs- und Schulungsnachweise,
- Zutritts-/Besucher-/Dienstleisterordner,
- Sicherheitsereignis-Protokoll,
- Gefahrenstufen-/Massnahmenlog,
- Uebungs-/Drill-/Review-Ordner,
- Behoerden-/Polizei-/Hafenkommunikation,
- Export fuer Hafensicherheitsbehoerde, Sicherheitsdienst, Auditor, PFSO oder Betreiber.

Online-Produktlogik:

Die Plattform erstellt keinen Gefahrenabwehrplan fachlich und bewertet keine Sicherheitsmassnahmen. Sie speichert Versionen, Nachweise, Aufgaben und Freigaben.

Warum es Geld bringt:

- kleine Zielgruppe, aber hohe Tickets,
- Dokumentationsdruck ist dauerhaft,
- Sicherheitspartner koennen als Vertriebskanal dienen,
- gute Ergaenzung zu KRITIS, Logistik, Maritime, Fremdfirmen und Zutrittsakten.

Preise:

- einzelne Hafenanlage: 499-2.000 EUR/Monat,
- Terminalgruppe: 3.000-15.000 EUR/Monat,
- Setup/Altunterlagen: 5.000-100.000 EUR.

Risiko/Grenze:

- keine Sicherheitsberatung,
- keine Risikobewertung,
- keine behoerdliche Genehmigungszusage,
- nur mit Fachpartnern und klarer Funktionsgrenze.

Bewertung:

Sehr schmal, aber stark fuer Premium. Spaeteres Spezialmodul, nicht Startseite.

### 65.5 Arbeitsberechtigungs-, Aufenthaltstitel-, Blue-Card-, Vorabzustimmungs- und Auslaenderbeschaeftigungsakte

Warum gefunden:

Make it in Germany beschreibt Arbeitgeberpflichten bei Fachkraeften aus Drittstaaten, unter anderem die Ueberpruefung eines gueltigen Aufenthaltstitels mit Erwerbstaetigkeitserlaubnis. Die Bundesagentur fuer Arbeit stellt Merkblaetter und Verfahren fuer Beschaeftigung auslaendischer Arbeitnehmer, Vorabzustimmung und Fachkraefteeinwanderung bereit. IHK-Quellen weisen darauf hin, dass Arbeitgeber Kopien des Aufenthaltstitels fuer die Dauer der Beschaeftigung in der Personalakte fuehren und Fristen kontrollieren sollten. Das ist fuer viele Branchen ein realer, wiederkehrender HR-Nachweisraum.

Quellen:

- Make it in Germany Arbeitgeberpflichten/Visumpflicht: https://www.make-it-in-germany.com/de/unternehmen/einreise/visumpflicht
- Bundesagentur Beschaeftigung auslaendischer Arbeitskraefte: https://www.arbeitsagentur.de/unternehmen/fachkraefte-ausland/beschaeftigung
- Bundesagentur Vorabzustimmung: https://www.arbeitsagentur.de/unternehmen/fachkraefte-ausland/vorabzustimmung-fuer-auslaendische-beschaeftigte
- Make it in Germany beschleunigtes Fachkraefteverfahren: https://www.make-it-in-germany.com/de/unternehmen/einreise/das-beschleunigte-fachkraefteverfahren
- Zoll Folgen bei Nichtbeachtung Aufenthaltstitel: https://www.zoll.de/DE/Fachthemen/Arbeit/Aufenthaltstitel/Folgen-bei-Nichtbeachtung/folgen-bei-nichtbeachtung_node.html

Zielgruppen:

- Pflege-/Gesundheitsanbieter, ohne Pflegegeld-Content,
- Gastronomie/Hotels,
- Logistik,
- Bau und Handwerk,
- Industrie,
- Reinigungs- und Facility-Betriebe,
- IT- und Engineering-Firmen,
- Personaldienstleister,
- internationale KMU,
- HR-Dienstleister und Relocation-Berater.

Was wir anbieten koennen:

- Arbeitsberechtigungsakte je Mitarbeiter,
- Aufenthaltstitel-/Visa-/Blue-Card-Fristen,
- Vorabzustimmungsordner,
- Beschaeftigungsbedingungs-/Arbeitsvertragsordner,
- Anerkennungspartnerschaft-/Berufserlaubnis-Unterordner,
- Ablaufwarnungen,
- Dokumentenstatus "liegt vor/fehlt/laeuft ab",
- Rollen fuer HR, Mitarbeiter, Steuerberater/Lohnbuero,
- Export fuer interne HR-Pruefung, Lohnbuero, Berater oder Behoerdenprozess.

Online-Produktlogik:

Das System entscheidet nicht, ob jemand arbeiten darf, ob ein Aufenthaltstitel ausreicht oder ob ein Visum erteilt wird. Es erinnert nur an Dokumente und Fristen, die der Arbeitgeber selbst oder ein Berater eintraegt.

Warum es Geld bringt:

- sehr breiter Markt,
- akuter Fachkraeftemangel,
- hohe Angst vor illegaler Beschaeftigung,
- wiederkehrende Fristen,
- starke Verbindung zu Personalakte, Nachunternehmer, AUEG, Mindestlohn und Baustellen-/Fremdfirmenakten.

Preise:

- kleines Unternehmen: 29-99 EUR/Monat,
- HR-Team: 149-499 EUR/Monat,
- internationaler Arbeitgeber: 500-2.000 EUR/Monat,
- Relocation-/HR-Beraterportal: 299-3.000 EUR/Monat,
- Setup/Migration: 300-15.000 EUR.

Risiko/Grenze:

- keine Migrationsrechtsberatung,
- keine Entscheidung "Beschaeftigung erlaubt",
- keine Visum-/Aufenthaltstitelprognose,
- Datenschutz sehr ernst nehmen,
- hochsensible Unterlagen nur mit strenger Rollen-/Rechte-/Loeschlogik.

Bewertung:

Sehr guter breiter Zusatzbaustein. Nicht als Hauptclaim, aber stark als HR-/Personalakte-Modul fuer Branchen mit vielen auslaendischen Fachkraeften.

### 65.6 Taxi-, Mietwagen-, Krankenfahrt-, Omnibus- und PBefG-Genehmigungsakte

Warum gefunden:

Das Personenbefoerderungsgesetz regelt genehmigungspflichtige Personenbefoerderung. IHK-Quellen weisen darauf hin, dass Taxi- und Mietwagenbetriebe Genehmigungen, Fachkunde, persoenliche Zuverlaessigkeit, finanzielle Leistungsfaehigkeit und Fahrzeugunterlagen brauchen. BOKraft regelt zusaetzliche Anforderungen an den Betrieb von Kraftfahrunternehmen im Personenverkehr. Die Datei hatte Taxameter/Eichung bereits, aber die Genehmigungs- und Unternehmerakte noch nicht sauber als eigenes Modul.

Quellen:

- PBefG: https://www.gesetze-im-internet.de/pbefg/
- BOKraft: https://www.gesetze-im-internet.de/bokraft_1975/
- IHK Reutlingen Personenverkehr Taxi/Mietwagen: https://www.reutlingen.ihk.de/gruendung/gruenden-nach-branchen/verkehr-und-gefahrgut/personenverkehr/
- IHK Berlin Taxi- und Mietwagenverkehr: https://www.ihk.de/berlin/service-und-beratung/existenzgruendung/informationsangebote/brancheninformation/taxi-und-mietwagenverkehr-2279254
- IHK Ostwestfalen Omnibus/Fachkunde: https://www.ihk.de/ostwestfalen/berufsbildung/sach-und-fachkundepruefungen/informationen-omnibus-6940428

Zielgruppen:

- Taxiunternehmen,
- Mietwagenunternehmen,
- Krankenfahrdienste,
- gebuendelte Bedarfsverkehre,
- Omnibusunternehmen,
- Shuttle- und Transferdienste,
- Plattform-/Flottenbetreiber,
- Fahrdienstgruppen mit mehreren Konzessionen.

Was wir anbieten koennen:

- PBefG-Genehmigungsakte,
- Unternehmer-/Fachkunde-/Zuverlaessigkeitsordner,
- Fahrzeugakte je Taxi/Mietwagen/Bus,
- Genehmigungsurkunden,
- Fahrerlaubnis-/Personenbefoerderungsschein-Unterlagen,
- Taxameter-/Wegstreckenzaehler-/TSE-/Eich-Unterordner,
- Versicherungs- und Wartungsnachweise,
- Krankenfahrt-/Kassenvertragsordner,
- Fristen fuer Genehmigungsverlaengerung, Fahrzeugtausch, Eichung, Schulungen, Versicherungen,
- Export fuer Verkehrsbehoerde, IHK, Steuerberater, Versicherung oder Flottenleitung.

Online-Produktlogik:

Das System sagt nicht, ob ein Verkehr genehmigungspflichtig ist oder ob eine Konzession erteilt wird. Es verwaltet nur Unterlagen und Fristen.

Warum es Geld bringt:

- viele kleine Betriebe,
- Fahrzeug- und Fahrerfristen wiederholen sich,
- Krankenfahrten und Plattformflotten koennen mehrere Fahrzeuge haben,
- gute Verbindung zu Kasse/TSE, Taxameter, Fahrpersonal, Versicherung und Schadenakte.

Preise:

- Einzelbetrieb: 19-79 EUR/Monat,
- Flotte: 99-499 EUR/Monat,
- groessere Mobilitaetsanbieter: 500-2.000 EUR/Monat,
- Setup: 100-5.000 EUR.

Risiko/Grenze:

- keine PBefG-/BOKraft-Beratung,
- keine Tarif-/Krankenkassenvertragspruefung,
- keine Konzessionsprognose,
- eher Branchenpaket als Premiumkern.

Bewertung:

Solides Branchenpaket mit gutem Longtail, aber kein Top-5-Startmodul. Gut fuer spaetere "Mobilitaetsakte".

### 65.7 Pfandleih-, Pfandbuch-, Versteigerer-, Auktions- und Hochrisiko-Handelsakte

Warum gefunden:

Pfandleiher und Versteigerer sind erlaubnispflichtige Gewerbe mit vielen Nachweisen. IHK-Quellen nennen fuer Pfandleiher unter anderem Erlaubnis nach Paragraf 34 GewO, Pfandleiherverordnung, Pfandschein, Versicherungspflicht, Pfandannahme, Pfandverwertung sowie Buchfuehrungs-, Auskunfts- und Duldungspflichten. Versteigerer brauchen nach Paragraf 34b GewO eine Erlaubnis und muessen Vorgaben der Versteigererverordnung beachten. Das ist klein, aber fuer bestimmte Haendler, Auktionshaeuser und Pfandbetriebe sehr passend.

Quellen:

- IHK Chemnitz Pfandleihgewerbe: https://www.ihk.de/chemnitz/recht-und-steuern/rechtsinformationen/gewerberecht/merkblatt-pfandleihgewerbe-34-gewo-pfandleiherverordnung-4719530
- IHK Wiesbaden Pfandleiher: https://www.ihk.de/wiesbaden/recht/rechtsberatung/erlaubnisse-fuer-gewerbetaetigkeiten/pfandleiher-genehmigung-1255508
- Bundesportal Pfandleihgewerbe Erlaubnis: https://verwaltung.bund.de/leistungsverzeichnis/de/leistung/99050021005000
- IHK Frankfurt Versteigerergewerbe: https://www.frankfurt-main.ihk.de/recht/uebersicht-alle-rechtsthemen/gewerberecht/versteigerergewerbe-5193602
- IHK Regensburg Versteigerergewerbe: https://www.ihk.de/regensburg/fachthemen/recht/wirtschafts-und-gewerberecht/gewerberecht/versteigerergewerbe-1350612

Zielgruppen:

- Pfandleihhaeuser,
- Pfandvermittler,
- Auktionshaeuser,
- gewerbliche Versteigerer,
- Kunst-/Antiquitaeten-/Uhren-/Schmuckhaendler,
- Edelmetall-/Goldankauf,
- Gebrauchtwarenhaendler mit Hochrisiko-Waren,
- Insolvenz-/Verwertungsdienstleister.

Was wir anbieten koennen:

- Erlaubnisakte,
- Pfandbuch-/Vorgangsordner als Dokumentenablage,
- Pfandschein-/Vertragsmuster nur eigene Muster,
- Versicherungsnachweise,
- Raum-/Sicherheitsunterlagen,
- Verwertungs-/Versteigerungsunterlagen,
- Inventar-/Objektakte,
- Identitaets-/Vollmachtsunterlagen als Uploadstruktur,
- GwG-/KYC-Unterordner, soweit relevant,
- Fristen fuer Verwertung, Auszahlung, Versicherung, Erlaubnis-/Behoerdenunterlagen,
- Export fuer Gewerbebehoerde, Steuerberater, Versicherung, Anwalt oder internen Verantwortlichen.

Online-Produktlogik:

Das System ersetzt kein Pfandbuch-Fachsystem und entscheidet nicht, ob eine Pfandannahme, Versteigerung oder KYC-Pruefung zulaessig ist. Es ist Nachweis- und Fristenakte.

Warum es Geld bringt:

- kleine Zielgruppe, aber hoher Dokumentationsdruck,
- hohe Werte und Versicherungsrelevanz,
- gute Verbindung zu GwG, Versicherungen, Inventar und Schadenakte,
- SEO-Longtail ist konkret.

Preise:

- Kleinbetrieb: 49-149 EUR/Monat,
- Auktions-/Pfandhaus: 199-799 EUR/Monat,
- mehrere Standorte: 1.000-3.000 EUR/Monat,
- Setup: 500-15.000 EUR.

Risiko/Grenze:

- keine Gewerberechtsberatung,
- keine KYC-/GwG-Freigabe,
- keine rechtliche Verwertungsentscheidung,
- keine Pfandbewertung,
- nur spaeteres Spezialmodul.

Bewertung:

Klein, aber sauber. Nicht Startseite, aber gut als "erlaubnispflichtige Gewerbe"-Longtail.

### 65.8 Bewertung dieser Spezialrunde

Beste neue Treffer:

1. DAkkS-/Labor-/Inspektionsstellen-/Zertifizierungsstellenakte
   - extrem gute High-Ticket-Logik,
   - sehr dokumentengetrieben,
   - starker Auditdatenraum,
   - spaeter Premium.

2. Installateurverzeichnis-/Konzessionsakte
   - sehr breit,
   - Energiewende-Push,
   - gut fuer Handwerk,
   - passt perfekt zu TGA, PV, Ladepunkt und Gebaeude.

3. Luftfracht-Sicherheitskettenakte
   - kleine, aber teure Logistiknische,
   - klare Behoerden-/Auditlogik,
   - starker Partnervertrieb.

4. Arbeitsberechtigungs-/Aufenthaltstitelakte
   - breit und praktisch,
   - gute HR-Erweiterung,
   - hoher Datenschutzbedarf.

5. ISPS-/Hafensicherheitsakte
   - sehr schmal,
   - aber High-Ticket und passend zu KRITIS/Logistik/Maritime.

6. Taxi-/Mietwagen-/PBefG-Akte
   - gutes Branchenpaket,
   - niedrigerer Preis,
   - spaeter fuer Mobilitaetsakte.

7. Pfandleih-/Versteigererakte
   - klein,
   - aber sauberer Longtail bei erlaubnispflichtigen Gewerben.

Konsequenz fuer die Plattform:

Neue Aktenfamilien:

- Audit- und Akkreditierungsakte:
  DAkkS, Labor, Inspektionsstelle, Zertifizierungsstelle, TISAX/ISO/IFS/BRCGS.

- Netz- und Fachbetriebsakte:
  Installateurverzeichnis, Netzbetreiber, PV, Ladepunkt, TGA, Waermepumpe.

- Sicherheitskettenakte:
  Luftfracht, Hafen/ISPS, Fremdfirmen, Zutritt, KRITIS, Security.

- HR-Auslandsbeschaeftigungsakte:
  Aufenthaltstitel, Arbeitserlaubnis, Vorabzustimmung, Blue Card, Fristen.

- Erlaubnispflichtige-Gewerbe-Akte:
  Taxi/Mietwagen, Pfandleihe, Versteigerung, Bewachung, Vermittler, Spielhalle.

Startreihenfolge aendert sich leicht:

1. Produkt-/Haendler-/Nachweisakte bleibt Kern.
2. TGA-/Uebergabe-/Wartungsakte bleibt zweiter Kern.
3. Nachunternehmer-/Auftraggeberakte bleibt dritter Kern.
4. Trust-/Kundenfragebogen-/SBOM-Akte bleibt vierter Kern.
5. Installateurverzeichnis-/Fachbetriebsakte rueckt als sehr gutes Handwerks-/Energiewende-Paket nach vorn.
6. DAkkS-/Labor-/Akkreditierungsakte wird Premium-Spezialkeil.

## 66. Weitere Restgeld-Runde: AEO/Zollbewilligungen, Seafood/CATCH, BLE-Qualitaetskontrolle, Kulturgut und Lobbyregister

Diese Runde hat vor allem "Status- und Bewilligungswelten" gefunden. Das ist fuer die Plattform gut, weil der Kunde nicht nur einmal etwas wissen will, sondern dauerhaft nachweisen muss:

- Status vorhanden,
- Unterlagen aktuell,
- Ansprechpartner benannt,
- Fragebogen beantwortbar,
- Export fuer Behoerde, Kunde, Berater oder Pruefer bereit.

### 66.1 AEO-, zollrechtliche Bewilligungs-, REX-/EA-, Zolllager- und Zollvereinfachungsakte

Warum gefunden:

Das Thema Zoll war bereits mit Exportkontrolle, Praeferenz und Zollunterlagen erfasst. Nicht sauber separat drin war aber die Status-/Bewilligungswelt: Zugelassener Wirtschaftsbeteiligter (AEO), zollrechtliche Bewilligungen, REX, Ermaechtigter Ausfuehrer, Zolllager, aktive/passive Veredelung, vereinfachte Zollanmeldung und zentrale Zollabwicklung. Der Zoll beschreibt den AEO-Status als Bewilligung, die beantragt wird und in allen Mitgliedstaaten gueltig ist. Fuer viele Vereinfachungen, Frageboegen und Selbstbewertungen braucht ein Unternehmen sehr gut gepflegte Organisations-, Buchfuehrungs-, Sicherheits- und Prozessunterlagen.

Quellen:

- Zoll AEO: https://www.zoll.de/DE/Fachthemen/Zoelle/Zugelassener-Wirtschaftsbeteiligter-AEO/zugelassener-wirtschaftsbeteiligter-aeo_node.html
- Zoll AEO Allgemeines: https://www.zoll.de/DE/Fachthemen/Zoelle/Zugelassener-Wirtschaftsbeteiligter-AEO/Allgemeines/allgemeines_node.html
- Zoll Hinweise Fragebogen zollrechtliche Bewilligungen: https://www.zoll.de/DE/Fachthemen/Zoelle/Zugelassener-Wirtschaftsbeteiligter-AEO/Antragsverfahren/Hinweise-Fragebogen-zollrechtliche-Bewilligungen/hinweise-fragebogen-zollrechtliche-bewilligungen_node.html
- Zoll REX: https://www.zoll.de/DE/Fachthemen/Warenursprung-Praeferenzen/Praeferenzen/Praeferenznachweise/Ausfertigung-nicht-foermlicher-Praeferenznachweise/Registrierter-Ausfuehrer/Allgemeines-REX/allgemeines-rex.html
- Zoll Ermaechtigter Ausfuehrer: https://www.zoll.de/DE/Fachthemen/Warenursprung-Praeferenzen/Praeferenzen/Praeferenznachweise/Ausfertigung-nicht-foermlicher-Praeferenznachweise/Ermaechtigter-Ausfuehrer/ermaechtigter-ausfuehrer_node.html
- Zoll aktive Veredelung: https://www.zoll.de/DE/Fachthemen/Zoelle/Zollverfahren/Aktive-Veredelung/aktive-veredelung_node.html

Zielgruppen:

- Importeure,
- Exporteure,
- Industrieunternehmen mit Drittlandsgeschaeft,
- E-Commerce-Importeure,
- Zollabteilungen,
- Speditionen,
- Fulfillment-Anbieter,
- Hersteller mit Lieferketten ausserhalb der EU,
- Unternehmen mit Zollverfahren/Bewilligungen,
- Zollberater und Aussenwirtschaftsberater.

Was wir anbieten koennen:

- AEO-Datenraum,
- zollrechtliche Bewilligungsakte,
- Fragebogen-/Selbstbewertungsordner,
- Verfahrensanweisungen und Prozessbeschreibungen,
- Organigramm-/Rollen-/Vertreterordner,
- Buchfuehrungs-/IT-/Archivierungsnachweise,
- Sicherheits- und Zutrittsunterlagen,
- Lieferketten- und Geschaeftspartnernachweise,
- REX-/EA-/Praeferenzordner,
- Zolllager-/Veredelungs-/Vereinfachungsordner,
- Fristen fuer Bewilligungsupdates, Neubewertungen, Ansprechpartnerwechsel und interne Reviews,
- Export fuer Hauptzollamt, Zollberater, interne Revision oder Geschaeftsfuehrung.

Online-Produktlogik:

Die Plattform entscheidet nicht, ob eine Bewilligung erteilt wird, ob ein Unternehmen AEO-faehig ist oder ob eine Ursprungserklaerung korrekt ist. Sie verwaltet nur Unterlagen, Versionen, Aufgaben, Fristen und Exporte.

Warum es Geld bringt:

- hoher wirtschaftlicher Wert von Zollvereinfachungen,
- Statusverlust oder Bewilligungsprobleme koennen teuer sein,
- AEO-/Bewilligungsfrageboegen sind dokumentenlastig,
- Zollberater koennen Mandanten ueber die Plattform strukturieren,
- starke Naehe zu Import-/Produktakte, ICS2, eFTI, Exportkontrolle, CBAM und Praeferenz.

Preise:

- kleiner Importeur/Exporteur: 149-499 EUR/Monat,
- Zollabteilung mittel: 700-2.500 EUR/Monat,
- Unternehmensgruppe/mehrere Bewilligungen: 3.000-15.000 EUR/Monat,
- Setup/AEO-Datenraum: 3.000-75.000 EUR.

Risiko/Grenze:

- keine Zollberatung,
- keine Tarifierung,
- keine Ursprungskalkulation,
- keine Bewilligungsprognose,
- Fachpartner fuer Zollberatung prominent anbieten.

Bewertung:

Sehr stark. Dieses Modul gehoert in die Premiumgruppe und passt besser zur Plattform als viele kleine Branchenpflichten, weil es echte wiederkehrende Drittnachweise erzeugt.

### 66.2 Seafood-, IUU-, CATCH-, Fangbescheinigungs- und Fischrueckverfolgbarkeitsakte

Warum gefunden:

Fischerei- und Seafood-Importe sind bislang nicht sauber erfasst. Die BLE weist darauf hin, dass die Einfuhr bestimmter Fischereierzeugnisse nach IUU-Verordnung nur mit Fangbescheinigung moeglich ist. Ab 10.01.2026 wird CATCH fuer die Einfuhr von Fischereierzeugnissen als EU-weit einheitliches Anmeldesystem relevant. Dazu kommen Herkunft, Fanggebiet, Fangmethode, Aquakulturangaben, Handelsbezeichnung, Lieferantenunterlagen, Zertifikate und Rueckverfolgbarkeit.

Quellen:

- BLE IUU-Fischerei: https://www.ble.de/DE/Themen/Fischerei/IUU-Fischerei/IUU-Fischerei_node.html
- BLE Fischeinfuhr: https://www.ble.de/DE/Themen/Fischerei/IUU-Fischerei/Kontrolle-der-Fischeinfuhren/Fischeinfuhr_Inhalt.html
- BLE CATCH ab 10.01.2026: https://www.ble.de/DE/Themen/Fischerei/IUU-Fischerei/Einfuehrung-Anmeldungssystem-CATCH/CATCH_node.html
- BLE Fangbescheinigung: https://www.ble.de/SharedDocs/Downloads/DE/Fischerei/IUU-Fischerei/Fangbescheinigung.html
- Verbraucherzentrale Fischkennzeichnung: https://www.verbraucherzentrale.de/wissen/lebensmittel/kennzeichnung-und-inhaltsstoffe/herkunft-von-lebensmitteln-woher-kommen-fleisch-eier-obst-5431

Zielgruppen:

- Fischimporteure,
- Seafood-Grosshaendler,
- Sushi-/Restaurantketten mit eigenem Einkauf,
- Fischverarbeiter,
- Tiefkuehl-/Convenience-Anbieter,
- Aquakultur-Anbieter,
- Feinkost-/Delikatessenhandel,
- Foodservice-Grosshandel,
- Bio-/ASC-/MSC-nahe Anbieter,
- Zoll- und Food-Compliance-Berater.

Was wir anbieten koennen:

- IUU-/Fangbescheinigungsakte,
- CATCH-Unterlagenordner,
- Lieferanten-/Fangschiff-/Herkunftsordner,
- Handelsbezeichnung-/Fanggebiet-/Fangmethode-Datenfelder,
- Aquakultur-Land-/Zertifikatsordner,
- Chargen- und Rueckverfolgbarkeitsordner,
- Import-/Zoll-/Gesundheitszertifikatsverknuepfung,
- Lieferantenfreigaben und Auditnachweise,
- Etikett-/Produktspezifikationsablage,
- Export fuer BLE, Zollbroker, Kunde, Auditor, QS oder Einkauf.

Online-Produktlogik:

Das System entscheidet nicht, ob eine Fangbescheinigung gueltig ist, ob ein Produkt importfaehig ist oder ob eine Kennzeichnung korrekt ist. Es ist nur Datenraum, Fristen, Felder, Nachweise und Export.

Warum es Geld bringt:

- hoher Importdruck,
- wenige Fehler koennen Lieferungen blockieren,
- ab 2026 neue CATCH-Aufmerksamkeit,
- gute Naehe zu Food, Bio, EUDR, Zoll, Lieferantenfrageboegen und Rueckrufakten,
- Kunden im Handel fragen zunehmend Herkunft und Nachhaltigkeit ab.

Preise:

- kleiner Seafood-Importeur: 99-299 EUR/Monat,
- Grosshandel/Verarbeiter: 500-2.000 EUR/Monat,
- Handels-/Foodservice-Gruppe: 2.000-7.500 EUR/Monat,
- Setup/Altdaten: 1.000-25.000 EUR.

Risiko/Grenze:

- keine Importfreigabe,
- keine Kennzeichnungsberatung,
- keine Nachhaltigkeitsbewertung,
- keine Fangbescheinigungspruefung als Rechtsurteil.

Bewertung:

Gutes Spezialmodul fuer Food/Import. Nicht Startseite, aber sehr passend als Produkt-/Importakte fuer Seafood.

### 66.3 BLE-Qualitaets-, QUAKON-, Obst-/Gemuese-, Rindfleisch-, Eier- und Herkunftsnachweisakte

Warum gefunden:

Die BLE kontrolliert Vermarktungsnormen und Etikettierungsvorschriften fuer bestimmte Lebensmittelbereiche. Fuer Obst und Gemuese bietet die BLE das Online-Verfahren QUAKON fuer die Anmeldung normpflichtiger Erzeugnisse zur Ein- oder Ausfuhr. Bei Rindfleisch dient die Referenznummer der Rueckverfolgbarkeit zu einem Tier oder einer Tiergruppe. Verbraucherzentrale und BLE zeigen zudem Herkunftskennzeichnungswelten fuer Fisch, Eier, Honig, Obst/Gemuese und weitere Waren. Das ist nicht ein grosses Premiumprodukt, aber ein gutes Food-Import-/Handelspaket.

Quellen:

- BLE QUAKON: https://www.ble.de/DE/Themen/Ernaehrung-Lebensmittel/Vermarktungsnormen/QUAKON/quakon_node.html
- BLE Vermarktungsnormen Obst und Gemuese: https://www.ble.de/DE/Themen/Ernaehrung-Lebensmittel/Vermarktungsnormen/Obst-Gemuese/obst-gemuese_node.html
- BLE Rindfleischetikettierung: https://www.ble.de/DE/Themen/Ernaehrung-Lebensmittel/Rindfleischetikettierung/rindfleischetikettierung_node.html
- BLE Ernaehrung und Lebensmittel: https://www.ble.de/DE/Themen/Ernaehrung-Lebensmittel/ernaehrung-lebensmittel.html
- Verbraucherzentrale Herkunft Lebensmittel: https://www.verbraucherzentrale.de/wissen/lebensmittel/kennzeichnung-und-inhaltsstoffe/herkunft-von-lebensmitteln-woher-kommen-fleisch-eier-obst-5431

Zielgruppen:

- Obst-/Gemueseimporteure,
- Frischegrosshaendler,
- LEH-Lieferanten,
- Bananen-/Trockenfrucht-/Nussimporteure,
- Fleischverarbeiter,
- Rindfleischhandel,
- Eierpackstellen und Eierhaendler,
- Honiganbieter,
- Food-Startups mit Herkunftsclaims,
- QS-/Food-Compliance-Berater.

Was wir anbieten koennen:

- BLE-/QUAKON-Unterlagenordner,
- Warengruppenakte je Produktgruppe,
- Import-/Export-Anmeldeordner,
- Vermarktungsnormen-Belegablage,
- Herkunfts- und Ursprungsnachweise,
- Referenznummern-/Chargen-/Lieferantenordner,
- Etikett-/Spezifikationsablage,
- Pruef-/Beanstandungs-/Massnahmenordner,
- Lieferantenfreigaben,
- Export fuer BLE, QS, Kunde, Labor, Kontrollstelle oder Einkauf.

Online-Produktlogik:

Das System bewertet nicht, ob eine Partie normgerecht ist, ob ein Etikett korrekt ist oder ob eine Herkunftsangabe zulaessig ist. Es verwaltet Unterlagen und Nachweise.

Warum es Geld bringt:

- viele Importeure und Foodhaendler,
- hohe Warenwerte,
- Beanstandungen stoeren Lieferketten,
- gute SEO-Chance ueber konkrete Food-Import-Fragen,
- starker Zusatz zur Produktakte, Bioakte, Seafoodakte und Rueckrufakte.

Preise:

- kleiner Foodhaendler: 49-199 EUR/Monat,
- Importeur/Grosshandel: 299-1.500 EUR/Monat,
- Lieferantengruppe: 2.000-7.500 EUR/Monat,
- Setup: 500-20.000 EUR.

Risiko/Grenze:

- keine lebensmittelrechtliche Kennzeichnungspruefung,
- keine Qualitaetsfreigabe,
- keine Normkonformitaetszusage,
- nur Nachweis- und Exportprodukt.

Bewertung:

Solides Food-/Import-Zusatzpaket. Nicht so stark wie AEO oder TGA, aber gut fuer pSEO und Branchenpakete.

### 66.4 Kulturgutschutz-, Provenienz-, Kunsthandels-, Galerie-, Museums- und Ausfuhrgenehmigungsakte

Warum gefunden:

Kulturgutschutz ist bisher praktisch nicht drin. Die offizielle Kulturgutschutz-Seite beschreibt Sorgfaltspflichten beim Inverkehrbringen von Kulturgut, besondere Pflichten fuer gewerblichen Handel, Aufzeichnungs- und Auskunftspflichten, Provenienzfragen, Einfuhr-/Ausfuhrthemen und Genehmigungen. Fuer Galerien, Auktionshaeuser, Kunsthandel, Museen, Sammlungen und hochwertige Antiquitaeten ist das ein teures, dokumentenstarkes Feld.

Quellen:

- Kulturgutschutz Sorgfaltspflichten: https://www.kulturgutschutz-deutschland.de/DE/AllesZumKulturgutschutz/Kulturgutschutzgesetz/Kernpunkte/Sorgfaltspflichten/Sorgfaltsplfichten.html
- Kulturgutschutz Kunsthandel und Galerien: https://www.kulturgutschutz-deutschland.de/DE/AllesZumKulturgutschutz/Kulturgutschutzgesetz/WasBedeutetKGSG/KunsthaendlerGaleristen/KunsthandelUndGalerien_node.html
- Kulturgutschutz gewerbliches Inverkehrbringen: https://www.kulturgutschutz-deutschland.de/DE/AllesZumKulturgutschutz/Kulturgutschutzgesetz/WasBedeutetKGSG/KunsthaendlerGaleristen/SorgfaltspflichtenFuerGewerblichesInverkehrbringen/SorgfaltspflichtenFuerGewerblichesInverkehrbringen_node.html
- Kulturgutschutz Ausfuhr: https://www.kulturgutschutz-deutschland.de/DE/AllesZumKulturgutschutz/Kulturgutschutzgesetz/WasBedeutetKGSG/KunsthaendlerGaleristen/Ausfuhr/Ausfuhr_node.html
- Kulturgutschutz Leihverkehr Museen: https://www.kulturgutschutz-deutschland.de/DE/AllesZumKulturgutschutz/Kulturgutschutzgesetz/WasBedeutetKGSG/Museen/LeihverkehrVonKulturgutAusDeutschlandindasAusland/AusderBRDinsAusland_node.html

Zielgruppen:

- Galerien,
- Kunsthaendler,
- Auktionshaeuser,
- Antiquitaetenhaendler,
- Museen,
- Stiftungen mit Sammlungen,
- private Sammlungsverwaltungen,
- Restauratoren,
- Kunstspeditionen,
- Kunstversicherer,
- Provenienzforscher und Kunstrechtskanzleien.

Was wir anbieten koennen:

- Objektakte je Kunst-/Kulturgut,
- Provenienzordner,
- Eigentums-/Ankaufs-/Rechnungsnachweise,
- Einfuhr-/Ausfuhrgenehmigungsordner,
- Leihverkehrsakte,
- Condition Reports,
- Restaurierungs- und Zustandsdokumentation,
- Versicherungs- und Wertgutachtenordner,
- Fotodokumentation,
- Sorgfaltspruefungs-Unterlagen als reine Ablage,
- Fristen fuer Rueckfuehrung, Leihe, Versicherung, Ausfuhrgenehmigung, Ausstellung,
- Export fuer Galerie, Museum, Versicherer, Spedition, Anwalt, Behoerde oder Kaeufer.

Online-Produktlogik:

Das System entscheidet nicht, ob ein Kulturgut verkehrsfaehig ist, ob Provenienz reicht oder ob eine Ausfuhrgenehmigung erforderlich ist. Es ist nur Objektakte, Dokumentenraum, Fristen, Versionen und Export.

Warum es Geld bringt:

- einzelne Objekte koennen sehr hohe Werte haben,
- Kunden zahlen fuer Ordnung und Nachweisfaehigkeit,
- Versicherungs-/Transport-/Leihverkehrsdruck,
- starke Partnerlogik mit Kunstversicherern, Speditionen, Kanzleien, Restauratoren,
- kleiner Markt, aber hohe Zahlungsbereitschaft.

Preise:

- kleine Galerie/Sammlung: 99-299 EUR/Monat,
- Auktionshaus/Kunsthandel: 500-2.500 EUR/Monat,
- Museum/Sammlung/Family Office: 1.000-10.000 EUR/Monat,
- Setup/Objektmigration: 2.000-100.000 EUR.

Risiko/Grenze:

- keine Kunstrechtsberatung,
- keine Provenienzfreigabe,
- keine Ausfuhrgenehmigungsprognose,
- keine Echtheits-/Wertbewertung,
- nur mit Fachpartnern fuer Kunstrecht/Provenienz/Versicherung.

Bewertung:

Sehr interessante Premium-Nische. Kein Startprodukt, aber eines der besseren High-Value-Spezialmodule, weil jedes Objekt eine Akte braucht und der Wert pro Objekt hoch ist.

### 66.5 Lobbyregister-, Public-Affairs-, Interessenvertretungs- und Transparenzakte

Warum gefunden:

Das Lobbyregister beim Deutschen Bundestag macht Strukturen und Inhalte der Interessenvertretung gegenueber Bundestag und Bundesregierung nachvollziehbar. Interessenvertreter muessen laut Lobbyregister-Informationen die vom Lobbyregistergesetz geforderten Angaben bereitstellen; seit Reformen sind finanzielle Angaben nicht mehr wie frueher verweigerbar. Das betrifft nicht nur Lobbyagenturen, sondern auch Verbaende, Unternehmen, Stiftungen und Public-Affairs-Teams.

Quellen:

- Lobbyregister Startseite: https://www.lobbyregister.bundestag.de/
- Lobbyregister Informationen fuer Interessenvertreter: https://www.lobbyregister.bundestag.de/informationen-und-hilfe/informationen-fuer-interessenvertreter-863572
- Bundestag Handbuch Lobbyregister: https://www.bundestag.de/resource/blob/871508/Handbuch.pdf
- BMI Lobbyregister: https://www.bmi.bund.de/DE/themen/oeffentlicher-dienst/integritaet-der-verwaltung/lobbyregister/lobbyregister-node.html
- LobbyRG: https://www.gesetze-im-internet.de/lobbyrg/

Zielgruppen:

- Verbaende,
- Public-Affairs-Agenturen,
- Unternehmen mit Government-Relations-Team,
- Stiftungen,
- NGOs,
- Brancheninitiativen,
- Energie-/Digital-/Gesundheits-/Verkehrsunternehmen mit politischer Interessenvertretung,
- Kanzleien und Compliance-Berater.

Was wir anbieten koennen:

- Lobbyregister-Datenraum,
- Interessenvertretungsprofil,
- Auftraggeber-/Mandatsordner,
- Themen-/Vorhabenliste,
- Kontakt- und Aktivitaetslog als interne Ablage,
- Finanzangaben-/Budgetunterlagen als Upload,
- Verhaltenskodex-/Schulungsnachweise,
- Fristen fuer Aktualisierung und interne Freigabe,
- Freigabe-Workflow vor Registeraktualisierung,
- Export fuer Vorstand, Compliance, Kanzlei oder Public-Affairs-Leitung.

Online-Produktlogik:

Das System sagt nicht, ob eine konkrete Taetigkeit registrierungspflichtig ist oder ob ein Registereintrag genuegt. Es hilft nur, Informationen, Quellen, Freigaben und Aktualisierungen zu sammeln.

Warum es Geld bringt:

- Zielgruppe hat Budget,
- Reputationsrisiko ist hoch,
- Angaben muessen intern abgestimmt werden,
- mehrere Auftraggeber/Mandate/Themen erzeugen laufende Pflege,
- guter Partnerkanal mit Kanzleien und Public-Affairs-Beratern.

Preise:

- kleiner Verband/Agentur: 99-299 EUR/Monat,
- Public-Affairs-Team: 500-2.000 EUR/Monat,
- Konzern/Agenturgruppe: 2.000-7.500 EUR/Monat,
- Setup: 1.000-25.000 EUR.

Risiko/Grenze:

- keine LobbyRG-Rechtsberatung,
- keine Registrierungspflichtentscheidung,
- keine Freigabe, dass Angaben vollstaendig/richtig sind,
- starker Datenschutz- und Rollenbedarf.

Bewertung:

Gute Spezialakte fuer zahlungsfaehige Kunden, aber politisch/reputativ sensibel. Spaeteres Modul, nicht Startseite.

### 66.6 Bewertung dieser Restgeld-Runde

Beste neue Treffer:

1. AEO-/Zollbewilligungsakte
   - sehr guter Premiumfit,
   - nahe an bestehenden Import-/Export-/Produktakten,
   - hohe Zahlungsbereitschaft,
   - klarer Zollberater-Partnerkanal.

2. Kulturgutschutz-/Provenienzakte
   - klein, aber sehr hoher Objektwert,
   - stark fuer Versicherungen, Speditionen, Kunsthandel, Museen,
   - gutes Spezialmodul.

3. Seafood-/IUU-/CATCH-Akte
   - stark fuer Food-Import,
   - CATCH ab 2026 als frischer Trigger,
   - gute pSEO-Chance.

4. Lobbyregister-/Public-Affairs-Akte
   - zahlungsfaehige Zielgruppe,
   - Reputationsdruck,
   - aber sensibel und nicht als Startthema.

5. BLE-/QUAKON-/Herkunftsakte
   - solides Food-Zusatzpaket,
   - eher Longtail/Branchenpaket als Premiumkern.

Konsequenz:

Neue Aktenfamilien:

- Zollstatus- und Bewilligungsakte:
  AEO, REX, EA, Zolllager, Vereinfachungen, Praeferenz, Zollfragebogen.

- Food-Import- und Herkunftsakte:
  Seafood/IUU/CATCH, QUAKON, Obst/Gemuese, Rindfleisch, Eier, Herkunft, Chargen.

- High-Value-Objektakte:
  Kulturgut, Provenienz, Kunstversicherung, Leihverkehr, Ausfuhr, Restaurierung.

- Transparenz- und Interessenvertretungsakte:
  Lobbyregister, Public Affairs, Mandate, Themen, Freigaben.

Startreihenfolge bleibt:

1. Produkt-/Haendler-/Nachweisakte,
2. TGA-/Uebergabe-/Wartungsakte,
3. Nachunternehmer-/Auftraggeberakte,
4. Trust-/Kundenfragebogen-/SBOM-Akte,
5. Installateurverzeichnis-/Fachbetriebsakte,
6. AEO-/Zollbewilligungsakte als neues Premium-Zollmodul,
7. DAkkS-/Labor-/Akkreditierungsakte als Premium-Spezialkeil.

## 67. Kontrollscan nach Abschnitt 66: Arbeitgebermeldungen, Datenvermittler und Versicherungsaufsicht

Der erneute Lueckenscan zeigt drei Felder, die noch nicht sauber genug als eigene Produktlogik beschrieben waren:

- Arbeitgeber-Meldeverfahren in der Sozialversicherung,
- neue Datenvermittler-/Datenaltruismus-Rollen aus dem Data Governance Act,
- regulierte Versicherungs-, Pensionskassen- und EbAV-Dokumentation.

Alle drei passen nur dann, wenn die Plattform weiter strikt als Akte, Kalender, Export- und Nachweissystem gebaut wird. Kein Modul darf berechnen oder bestaetigen, ob eine konkrete gesetzliche Pflicht erfuellt ist.

### 67.1 Arbeitgeber-Sozialversicherungs-, DEUEV-, Sofortmeldungs-, U1/U2- und euBP-Akte

Quellenlage:

- Deutsche Rentenversicherung, Meldeverfahren nach DEUEV: https://www.deutsche-rentenversicherung.de/DRV/DE/Experten/Arbeitgeber-und-Steuerberater/Meldeverfahren_nach_DEUEV/Meldung-nach-DEUV
- GKV-Datenaustausch, DEUEV: https://www.gkv-datenaustausch.de/arbeitgeber/deuev/deuev.jsp
- GKV-Datenaustausch, Gemeinsames Rundschreiben DEUEV, Stand 18.03.2026: https://www.gkv-datenaustausch.de/arbeitgeber/deuev/gemeinsame_rundschreiben/gemeinsame_rundschreiben.jsp
- SV-Meldeportal Info: https://info.sv-meldeportal.de/
- SV-Meldeportal Anleitungen: https://info.sv-meldeportal.de/anleitungen/
- Deutsche Rentenversicherung, Sofortmeldung: https://www.deutsche-rentenversicherung.de/DRV/DE/Experten/Arbeitgeber-und-Steuerberater/summa-summarum/Lexikon/S/sofortmeldung
- Deutsche Rentenversicherung, elektronisch unterstuetzte Betriebspruefung euBP: https://www.deutsche-rentenversicherung.de/DRV/DE/Experten/Arbeitgeber-und-Steuerberater/elektronisch-unterstuetzte-Betriebspruefung-euBP/elektronisch-unterstuetzte-betriebspruefung-eubp_node

Warum das in die Plattform passt:

Jeder Arbeitgeber hat Melde-, Nachweis- und Aufbewahrungsthemen. Viele Betriebe lagern die Lohnabrechnung aus, bleiben aber intern verantwortlich, dass Stammdaten, Betriebsnummern, Bescheinigungen, Rueckmeldungen, Pruefunterlagen, Sofortmeldungen und Nachweise sauber auffindbar sind. Das ist kein Glamour-Thema, aber extrem breit und dauerhaft.

Die Plattform verkauft nicht die Lohnabrechnung und nicht die Beurteilung, welche Meldung abzugeben ist. Sie verkauft den Arbeitgeber-Nachweisraum rund um Dienstleister, Fristen, Abgaben, Rueckmeldungen und Pruefexporte.

Zielgruppen:

- Handwerksbetriebe mit 5-200 Mitarbeitenden,
- Gastronomie, Bau, Logistik, Reinigung, Messebau und Sicherheitsdienste wegen Sofortmeldungsnaehe,
- Pflege-, Service- und Filialbetriebe,
- Steuerkanzleien und Lohnbueros als Partner,
- Startups mit ersten Mitarbeitenden,
- Hausverwaltungen/WEGs mit Minijobs oder Personal,
- Vereine, kleine Traeger und soziale Einrichtungen.

Konkretes Produkt:

- Arbeitgeber-Stammdatenakte:
  Betriebsnummer, Ansprechpartner Lohn, Steuerberater, Krankenkassen, Berufsgenossenschaft, Umlagekasse, Zertifikate, Portalzugriffe als Metadaten.

- DEUEV-/SV-Meldeordner:
  Ablage von Meldeprotokollen, Rueckmeldungen, Korrekturen, Fehlerhinweisen, Mitarbeiterbezug, Zeitraum, Absender, Empfaenger, Status.

- Sofortmeldungs-Nachweisordner:
  Startdatum, Branche, interne Verantwortlichkeit, hochgeladener Nachweis, Zeitstempel, Rueckmeldung.

- Beitragsnachweis-/Bescheinigungsordner:
  Monatsordner fuer Beitragsnachweise, Antraege, Bescheinigungen, Rueckmeldungen, AAG/U1/U2-Unterlagen.

- euBP-Vorbereitungsordner:
  Checkliste fuer Datenbereitstellung, Lohnabrechnungsdienstleister, Finanzbuchhaltungsdaten, Ansprechpartner, Uebergabeprotokoll, Pruefungsstatus.

- Fristenkalender:
  wiederkehrende Monats-/Jahresfristen als selbst angelegte Termine, nicht als Rechtsurteil.

- Dienstleister-Export:
  ZIP/PDF fuer Steuerberater, Lohnbuero, Betriebspruefer, interne Geschaeftsfuehrung.

Mini-Tools:

- Betriebsnummer- und Dienstleister-Checkliste:
  "Welche Stammdaten haben wir bereits abgelegt?"

- Monatsabschluss-Ordner:
  automatischer Ordner je Monat mit Uploadplaetzen fuer Nachweise.

- Sofortmeldungs-Ablage:
  keine Entscheidung, ob eine Sofortmeldung erforderlich ist, sondern nur ein Ablage- und Zeitstempelordner, wenn der Betrieb sie selbst nutzt.

- euBP-Paket-Builder:
  erstellt einen strukturierten Export aus hochgeladenen Unterlagen und Notizen.

- Rueckfrage-Log:
  dokumentiert Rueckfragen zwischen Betrieb, Steuerberater, Lohnbuero und Pruefer.

SEO-/GEO-Seiten:

- "DEUEV Nachweise im Betrieb organisieren"
- "Sofortmeldung Nachweis ablegen"
- "SV-Meldeportal Unterlagen verwalten"
- "euBP Unterlagen vorbereiten"
- "Betriebspruefung Sozialversicherung Unterlagen sammeln"
- "Arbeitgeber Meldungen Fristen Ordner"
- "Lohnbuero Unterlagen sicher austauschen"

Monetarisierung:

- kleiner Arbeitgeber: 9-29 EUR/Monat als Add-on,
- KMU-Arbeitgeberakte: 49-149 EUR/Monat,
- Steuerberater-/Lohnbuero-Portal: 199-1.500 EUR/Monat je Kanzlei,
- Import-/Einrichtungsservice: 199-2.500 EUR,
- Premium-Export fuer Pruefungen: 49-299 EUR je Export oder im Paket.

Warum es Geld bringt:

- sehr grosser Markt,
- dauerhaft wiederkehrend,
- starkes Partnerpotenzial mit Steuerkanzleien und Lohnbueros,
- Kunden verstehen den Nutzen sofort,
- niedriger Content-Risikoanteil, wenn keine Lohn-/SV-Beratung erfolgt.

Risiko/Grenze:

- keine Beitragsberechnung,
- keine Statusfeststellung,
- keine Aussage, ob eine konkrete Person sozialversicherungspflichtig ist,
- keine Entscheidung, ob eine Sofortmeldung rechtlich erforderlich ist,
- keine Ersetzung von Lohnsoftware oder SV-Meldeportal.

Bewertung:

Sehr gutes Breitenmodul, aber kein Premium-Keil. Es sollte als Arbeitgeberpaket und Steuerberater-Partnerpaket aufgenommen werden. Fuer den Start kann es als einfacher Nachweisordner gebaut werden, spaeter als Kanzlei-/Lohnbuero-Portal.

### 67.2 Data-Governance-Act-, Datenvermittlungsdienst-, Datenaltruismus- und Data-Space-Akte

Quellenlage:

- EU-Kommission, Data Governance Act: https://digital-strategy.ec.europa.eu/en/policies/data-governance-act
- EU-Kommission, Data Governance Act explained: https://digital-strategy.ec.europa.eu/en/policies/data-governance-act-explained
- Bundesnetzagentur, Data Governance Act: https://www.bundesnetzagentur.de/dga
- Bundesnetzagentur, Pressemitteilung DGA-Aufgaben, 19.05.2026: https://www.bundesnetzagentur.de/SharedDocs/Pressemitteilungen/DE/2026/20260519_DGA.html
- Bundesnetzagentur, Beschwerdeformular DGA: https://www.bundesnetzagentur.de/_tools/05_Digitalisierung/DataGovernanceAct/Form04_Beschwerde/node.html

Warum das in die Plattform passt:

Der Data Governance Act ist ein neues Feld fuer Datenvermittlungsdienste, Datenaltruismusorganisationen und Data-Space-Modelle. Die Bundesnetzagentur beschreibt Unternehmen, die Datenvermittlungsdienste anbieten oder als anerkannte datenaltruistische Organisation taetig sind, als vom DGA umfasst. Die EU-Kommission nennt Datenvermittlungsdienste, Datenaltruismus und gemeinsame europaeische Datenraeume als Kernelemente.

Das ist noch kein Massenmarkt, aber ein sehr guter Zukunfts- und Autoritaetsbereich fuer eine Plattform, die Nachweisraeume, Rollen, Richtlinien, Freigaben, Beschwerden, Registerstatus und Datenflussdokumentation organisiert.

Zielgruppen:

- Datenmarktplatz-Betreiber,
- Data-Space-Teilnehmer und -Koordinatoren,
- Mobilitaetsdaten-, Energiedaten-, Agrardaten-, Gesundheitsdaten- und Industriedatenprojekte,
- Forschungsdaten-Plattformen,
- Datenaltruismusorganisationen,
- kommunale Datenplattformen,
- SaaS-Anbieter, die Daten zwischen Dritten vermitteln,
- Konsortien, Verbaende, Standardisierungsinitiativen.

Konkretes Produkt:

- DGA-Rollenakte:
  Betreiber, gesetzlicher Vertreter, Ansprechpartner, Data-Space-Rolle, Dienstbeschreibung, Register-/Anzeigestatus.

- Neutralitaets- und Interessenkonfliktordner:
  Policies, Governance, Rollenmodell, Trennung von Diensten, Freigaben, Aenderungshistorie.

- Datenvermittlungsprozess-Akte:
  Datenhalter, Datennutzer, Datentypen, Vertragsmetadaten, Einwilligungs-/Erlaubnisstatus, technische Uebergaben, Protokolle.

- Datenaltruismus-Akte:
  Zweck, Gemeinwohlbezug, Einwilligungs-/Permission-Nachweise, Widerrufsprozesse, Registerbezug, Kommunikationsnachweise.

- Beschwerde- und Incident-Log:
  Beschwerden, interne Bewertung durch Verantwortliche, Antwortfristen, Massnahmen, Export fuer Behoerde/Berater.

- Register- und Logo-Nachweisordner:
  Registereintrag, Label-/Logo-Nutzung, Veroeffentlichungen, Aenderungsmeldungen, Screenshots.

Mini-Tools:

- DGA-Dokumentenraum-Builder:
  fragt nicht "faellt dein Dienst unter den DGA?", sondern baut einen Ordner fuer Teams, die sich mit DGA/Datenvermittlung befassen.

- Data-Sharing-Vertragsspiegel:
  strukturiert Vertrage, Anlagen, Laufzeiten, Rollen, Zwecke und Datenkategorien als Metadaten.

- Beschwerdeakte:
  erfasst Beschwerden und interne Bearbeitung, ohne rechtliche Bewertung.

- Registerstatus-Timeline:
  Nachweise, Antraege, Rueckfragen, Aenderungen und Veroeffentlichungen chronologisch.

- Data-Space-Onboarding-Paket:
  Nachweisordner fuer neue Teilnehmer, Partner und Konsortien.

SEO-/GEO-Seiten:

- "Data Governance Act Dokumentation"
- "Datenvermittlungsdienst Nachweise organisieren"
- "Datenaltruismus Organisation Register Unterlagen"
- "Data Space Governance Dokumente"
- "DGA Beschwerde Prozess dokumentieren"
- "Datenmarktplatz Compliance Unterlagen"
- "Bundesnetzagentur DGA Unterlagen vorbereiten"

Monetarisierung:

- kleiner Datenraum/Projekttraeger: 299-999 EUR/Monat,
- Data-Space-Koordinator: 1.500-7.500 EUR/Monat,
- Konzern-/Konsortiumspaket: 5.000-25.000 EUR/Monat,
- Setup/Import/Governance-Struktur: 5.000-100.000 EUR,
- Partnerumsatz mit Datenschutz-, IT-, Standardisierungs- und Rechtsberatern.

Warum es Geld bringt:

- junges Thema mit wenig pSEO-Saettigung,
- hoher Erklaerbedarf,
- viele Projekte mit Foerder-, Konzern- oder Konsortialbudget,
- perfekte Passform fuer Datenraeume, Nachweisraeume und Rollenmodelle,
- internationalisierbar.

Risiko/Grenze:

- kein DGA-Anwendungsbereichsentscheid,
- keine Datenschutzberatung,
- keine Bestaetigung, dass ein Datenvermittlungsdienst neutral oder konform ist,
- keine Rechtsfreigabe fuer Register- oder Logo-Nutzung,
- starke Datenschutz-/Security-Anforderungen.

Bewertung:

Sehr spannendes Premium-Zukunftsmodul, aber nicht breit genug fuer den Start. Es sollte als "Data-Space- und Datenvermittler-Akte" in die Roadmap, mit guten SEO-Seiten frueh publiziert, aber operativ erst nach den ersten Kernmodulen gebaut werden.

### 67.3 Versicherungsunternehmen-, EbAV-, Pensionskassen-, Solvency-, ORSA-, MaGo- und Outsourcing-Akte

Quellenlage:

- BaFin, Versicherer und Pensionsfonds: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/versicherer-pensionsfonds/versicherer-pensionsfonds_node.html
- BaFin, Berichtspflichten Versicherer/Pensionsfonds: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/versicherer-pensionsfonds/berichtspflichten/berichtspflichten_node.html
- BaFin, Solvency II Rechtsgrundlagen: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/versicherer-pensionsfonds/solvency-II-rechtsgrundlagen/solvency-II-rechtsgrundlagen_node.html
- BaFin, DORA: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/alle-unternehmen/dora/DORA_node.html
- BaFin, Management des IKT-Drittparteienrisikos: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/alle-unternehmen/dora/Management_IKT_Drittparteienrisikos/Management_IKT_Drittparteirisikos_node.html
- BaFin, MaGo fuer EbAV: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Rundschreiben/2020/rs_2020_08_mago_ebav_va.html
- BaFin, ERB fuer EbAV: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Rundschreiben/2020/rs_2020_09_mindestanforderungen_risikobeurteilung_erb_va.html
- BaFin, Auslagerungen im Finanzsektor: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Fachartikel/2024/fa_bj_2404_Auslagerungen_im_Finanzsektor.html

Warum das in die Plattform passt:

Versicherer, Pensionsfonds, Pensionskassen und Einrichtungen der betrieblichen Altersversorgung haben viele wiederkehrende Berichts-, Governance-, Risiko-, Auslagerungs-, IT- und Nachweisthemen. Die Zielgruppe ist klein, aber sehr zahlungskraeftig. Sie braucht kein simples KMU-Tool, sondern einen kontrollierten Nachweisraum mit Rollen, Versionierung, Freigaben, Exporten, Evidenzketten und Beraterzugriff.

Das ist kein Start-Massenprodukt. Es ist ein spaeter Premium-Vertical mit hohen Tickets.

Zielgruppen:

- kleine Versicherungsunternehmen,
- Pensionskassen,
- Pensionsfonds,
- EbAV,
- InsurTechs mit reguliertem Traeger,
- Versicherungsgruppen,
- Auslagerungs-, Compliance-, Risk- und Governance-Teams,
- Aktuare, Revisoren, Wirtschaftspruefer, DORA-/GRC-Berater.

Konkretes Produkt:

- Governance-Dokumentenraum:
  Leitlinien, Verantwortlichkeiten, Versionen, Freigaben, Gremienbeschluesse, Nachweise.

- Berichtsfristen- und Abgabeakte:
  RSR, ORSA/ERB, SFCR-Hinweise, Pensionsdaten, interne Abgaben, BaFin-Kommunikation als selbst gepflegte Fristen.

- Auslagerungsregister- und Dienstleisterakte:
  kritische/wichtige Funktionen, Vertrage, SLA, Risikoanalysen, Unterauslagerungen, Nachweise, Reviewtermine.

- DORA-/IKT-Drittparteienordner:
  Registerinformationen, Vertrage, Risikobewertungen, Tests, Incidents, Exitplaene, Nachweise fuer IKT-Dienstleister.

- Pruefungs- und Revisionsordner:
  Findings, Massnahmen, Owner, Fristen, Evidenz, Export.

- Gremien- und Beschlussakte:
  Vorlagen, Protokolle, Entscheidungen, Freigaben, Aenderungsverlauf.

Mini-Tools:

- Aufsichts-Export:
  strukturiert Unterlagen fuer BaFin, Wirtschaftspruefer, interne Revision oder Berater.

- Auslagerungsakte pro Dienstleister:
  ein Dienstleister, ein Registerblatt, alle Nachweise, Termine, Reviews.

- Finding-to-Evidence-Board:
  jede Feststellung mit Massnahme, Owner, Frist, Nachweis und Exportstatus.

- Governance-Versionierung:
  zeigt, welche Leitlinie wann galt und wer sie freigegeben hat.

- Gremienpaket-Builder:
  erzeugt einen Sitzungsordner mit Unterlagen, Beschlussstand und Nachweisen.

SEO-/GEO-Seiten:

- "Versicherungsunternehmen Auslagerungsregister verwalten"
- "Pensionskasse Governance Unterlagen organisieren"
- "EbAV MaGo Nachweise dokumentieren"
- "ORSA Unterlagen Nachweisraum"
- "BaFin Berichtspflichten Versicherer Dokumentenraum"
- "DORA Versicherer IKT-Drittparteien Nachweise"
- "Pensionsfonds Pruefungsunterlagen exportieren"

Monetarisierung:

- kleine EbAV/Pensionskasse: 1.000-5.000 EUR/Monat,
- Versicherer/Gruppe: 5.000-25.000 EUR/Monat,
- Enterprise/Konzern: 25.000-75.000 EUR/Monat moeglich,
- Setup/Import/Strukturierung: 10.000-250.000 EUR,
- Berater-/Prueferzugriff als Zusatznutzer oder Partnerpaket.

Warum es Geld bringt:

- sehr hohe Zahlungsbereitschaft,
- teure interne Abstimmung,
- Pruefer und Aufsicht erzeugen echten Nachweisdruck,
- DORA und Auslagerung machen Dokumentation noch relevanter,
- geringere Kundenzahl reicht fuer grossen Umsatz.

Risiko/Grenze:

- kein Ersatz fuer GRC-/Risikomanagementberatung,
- keine Bestaetigung, dass Berichtspflichten vollstaendig erfuellt sind,
- keine regulatorische Auslegung,
- hoher Security-, Rechte- und Auditlog-Anspruch,
- langer Vertrieb und Enterprise-Onboarding.

Bewertung:

Extrem hochpreisig, aber nicht als Startprodukt geeignet. Als Premium-Aktenfamilie ist es jedoch sehr wertvoll, weil schon wenige Kunden grosse Monatsumsaetze bringen koennen. Wenn spaeter Security, Rechte, Auditlog und Enterprise-Vertrieb stehen, ist dies eines der besten B2B-Upsell-Felder.

### 67.4 Gesamtbewertung dieser Kontrollrunde

Rangfolge der neu geprueften Restluecken:

1. Versicherungs-/EbAV-/Pensionskassenakte
   - hoechste Tickets,
   - kleinster Markt,
   - spaeter Premium-Vertical,
   - braucht Enterprise-Security und Beratervertrieb.

2. Data-Governance-/Datenvermittler-Akte
   - junges Thema,
   - gute SEO-/Thought-Leadership-Chance,
   - sehr passend fuer Datenraeume und Nachweisraeume,
   - aber noch kein breiter Sofortmarkt.

3. Arbeitgeber-DEUEV-/SV-/euBP-Akte
   - groesster Markt,
   - sehr praktisch,
   - eher Add-on und Partnerkanal mit Steuerberatern/Lohnbueros,
   - niedriger Preis pro Kunde, aber hohe Verbreitung.

Auswirkung auf die Plattform:

Diese Runde aendert die Startreihenfolge nicht. Sie erweitert aber die Produktarchitektur:

- Arbeitgeberakte bekommt einen tieferen SV-/DEUEV-/euBP-Unterordner.
- Trust-/Datenraumlogik bekommt spaeter eine Data-Governance-/Datenvermittler-Akte.
- Premium-Enterprise-Roadmap bekommt Versicherungs-/EbAV-/Pensionskassenakte.

Aktualisierte Modullogik:

1. Start:
   Produkt-/Haendlerakte, TGA-/Wartungsakte, Nachunternehmerakte, Trust-/Kundenfragebogenakte.

2. Fruehe Add-ons:
   Arbeitgeberakte, DEUEV-/SV-/euBP-Ordner, GEMA-/Medienrechte, Schaden-/Versicherungsfallakte.

3. Premium-Spezialisierung:
   AEO-/Zollbewilligung, DAkkS-/Akkreditierung, Installateurverzeichnis, Luftfracht, Kulturgut, Versicherungs-/EbAV-Akte.

4. Zukunft/SEO-Fruehstart:
   Data Governance Act, Datenvermittlungsdienste, Data Spaces, Datenaltruismus.

Kernaussage:

Auch nach Abschnitt 66 gibt es noch Geldmodule, aber die Qualitaet verschiebt sich: Die groben, schnellen Themen sind weitgehend gefunden. Neue Treffer sind jetzt entweder sehr breit, aber preislich kleiner, oder sehr teuer, aber kundenseitig klein und vertrieblich schwerer. Das spricht fuer eine Plattform mit einem starken Kernprodukt plus Roadmap-Verticals, nicht fuer 70 gleich grosse Startmodule.

## 68. Finanz-Restluecke: ZAG/E-Geld, WpIG-Wertpapierinstitute, KVG/AIF und GwG-Nachweise

Nach dem Finanzscan ist klar: DORA, MiCA und Versicherungsaufsicht sind bereits enthalten. Noch nicht sauber genug als eigene Aktenfamilie abgebildet sind Zahlungs-/E-Geld-Institute, Wertpapierinstitute und Kapitalverwaltungsgesellschaften. Diese Felder sind klein, reguliert und beratungsintensiv, aber pro Kunde sehr wertvoll.

Die Plattform darf hier keine regulatorische Einstufung oder Fachfreigabe verkaufen. Sie kann aber sehr gut Berichts-, Anzeige-, Auslagerungs-, Geldwaesche-, Gremien-, Pruefungs- und Dienstleisterunterlagen organisieren.

### 68.1 Zahlungsinstituts-, E-Geld-, ZAG-, Risikomeldungs- und Auslagerungsakte

Quellenlage:

- BaFin, Zahlungs- und E-Geld-Institute: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/banken-institute/zahlung-e-geldinstitute/zahlung-e-geldinstitute_node.html
- BaFin, Geschaefte der Zahlungsinstitute/E-Geld-Institute: https://www.bafin.de/DE/unternehmen-maerkte/erlaubnis-registrierung/zahlungsdienste-zahlungsinstitute/zahlungsdienste-zahlungsinstitute.html
- BaFin, Hinweise zum Zahlungsdiensteaufsichtsgesetz ZAG: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Merkblatt/mb_111222_zag.html
- BaFin, ZAG-Institutsregister: https://www.bafin.de/DE/die-bafin/publikationen-daten/datenbanken-uebersichten/zahlungsinstitute-register/register-zahlungsinstitute_node.html
- BaFin, Rundschreiben Risiken im Zahlungsverkehr: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Meldung/2024/meldung_2024_04_26_Rundschreiben_Risiken_im_Zahlungsverkehr.html
- BaFin, MaRisk fuer Zahlungs- und E-Geld-Institute: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Meldung/2024/meldung_2024_05_27_MaRisk_Rundschreiben.html

Warum das in die Plattform passt:

Zahlungs- und E-Geld-Institute haben Anzeige-, Melde-, Governance-, Risiko-, Auslagerungs-, Geldwaesche- und DORA-nahe Nachweisthemen. Viele Fintechs und Zahlungsdienstleister wachsen schnell, nutzen viele Dienstleister und muessen fuer Aufsicht, Pruefer, Banken, Partner und Kunden Unterlagen sauber vorhalten.

Zielgruppen:

- Zahlungsinstitute,
- E-Geld-Institute,
- Kontoinformations- und Zahlungsausloesedienste,
- Payment-Service-Provider,
- Banking-as-a-Service-/Embedded-Finance-Anbieter,
- Fintechs mit ZAG-Nahe,
- Compliance-, Risk-, Finance-, Legal- und Operations-Teams,
- Berater, Wirtschaftspruefer und Auslagerungsmanager.

Konkretes Produkt:

- ZAG-/Erlaubnis-/Registerakte:
  Registerdaten, Erlaubnisunterlagen, Anzeigehistorie, BaFin-Kommunikation, interne Verantwortliche.

- Anzeige- und Meldeordner:
  wiederkehrende Meldungen, Risikomeldungen, Aenderungsanzeigen, Rueckfragen, Abgabestatus, Nachweise.

- Auslagerungs- und Dienstleisterakte:
  Dienstleister, Vertrage, SLA, Unterauslagerungen, Risiko- und Kontrollunterlagen, Reviewtermine.

- Zahlungsrisiko- und Incident-Log:
  technische/operative Vorfaelle, interne Bewertung durch Verantwortliche, Massnahmen, Nachweise.

- GwG-/AML-Nachweisordner:
  Risikoanalyse, interne Sicherungsmassnahmen, Schulungen, Verdachtsmeldeprozess, Kontrollen, ohne Fachurteil.

- Pruefer-/Aufsichts-Export:
  strukturierter ZIP/PDF-Export fuer BaFin, Pruefer, Bankpartner oder Berater.

Mini-Tools:

- Payment-Dienstleisterregister:
  ein Dienstleister, alle Vertrage, Risiken, Reviews, Nachweise.

- Aufsichts-Rueckfrage-Board:
  jede Rueckfrage mit Owner, Frist, Dokumenten, Antwortstatus.

- Monats-/Quartalsordner:
  automatische Ordnerstruktur fuer wiederkehrende Meldungen und interne Reports.

- Incident-Paket-Builder:
  sammelt Zeitlinie, Dokumente, Entscheidungen, Massnahmen und Anlagen fuer externe Pruefung.

Monetarisierung:

- kleines Fintech/ZAG-nahes Unternehmen: 750-2.500 EUR/Monat,
- reguliertes Institut: 2.500-15.000 EUR/Monat,
- groessere Gruppe/PSP: 15.000-50.000 EUR/Monat,
- Setup: 10.000-150.000 EUR,
- Partnerumsatz mit Compliance-, DORA-, AML- und Zahlungsverkehrsberatern.

Grenze:

- keine Erlaubnispflichtentscheidung,
- keine Zahlungsdienstklassifizierung,
- keine AML-Fachfreigabe,
- keine Meldungsentscheidung,
- keine Risikoanalyse als fachliches Ergebnis.

Bewertung:

Sehr gutes Premium-Modul. Es ist nah an DORA und Trust-Akte, aber mit eigenem Zahlungsverkehrs-Fokus. Nicht fuer den Start, aber als hochpreisiges Fintech-Paket sehr attraktiv.

### 68.2 WpIG-Wertpapierinstituts-, WpHG-, Auslagerungs- und Verguetungsakte

Quellenlage:

- BaFin, Banken und andere Institute: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/banken-institute/banken-institute_node.html
- BaFin, Wertpapierdienstleistungen: https://www.bafin.de/DE/unternehmen-maerkte/erlaubnis-registrierung/wertpapierdienstleistungen/wertpapierdienstleistungen.html
- BaFin, Europaeischer Pass fuer Wertpapierinstitute: https://www.bafin.de/DE/unternehmen-maerkte/erlaubnis-registrierung/wertpapierdienstleistungen/ep-wertpapierinstitute/ep-wertpapierinstitute_node.html
- BaFin, Auslagerungsanzeigen nach WpIG: https://www.bafin.de/SharedDocs/Downloads/DE/Formular/WA/fo_230227_Auslagerung.html
- BaFin, WpI MaRisk Konsultation: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Meldung/2025/meldung_2025_08_01_Konsultation_MaRisk.html
- BaFin, Verguetungsanzeigen fuer Wertpapierinstitute: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Meldung/2025/meldung_2025_05_16_Allgemeinverfuegung_zu_Verguetungsanzeigen_fuer_Wertpapierinstitute.html

Warum das in die Plattform passt:

Wertpapierinstitute brauchen eine saubere Dokumenten- und Nachweisstruktur fuer Geschaeftsleiter, Register, Passverfahren, Auslagerungen, Verguetung, Pruefungen, DORA, WpHG-nahe Prozesse und Aufsichtsreaktionen. Das ist fuer ein normales KMU-Tool zu speziell, aber fuer ein Premium-Aktenprodukt sehr passend.

Zielgruppen:

- Wertpapierinstitute,
- Vermoegensverwalter,
- Broker,
- Anlagevermittlungs-/Portfolioverwaltungsnahe Anbieter,
- Haftungsdaecher und gebundene Vermittlerstrukturen,
- Compliance-Officer,
- WpHG-/WpIG-Berater,
- Wirtschaftspruefer und interne Revision.

Konkretes Produkt:

- WpIG-Institutsakte:
  Erlaubnis, Geschaeftsleiter, Organigramm, Verantwortlichkeiten, Anzeigen, BaFin-Kommunikation.

- Auslagerungsakte:
  wesentliche Auslagerungen, Dienstleister, Risiko, Vertrag, Reviews, Unterauslagerung, Anzeigehistorie.

- Verguetungs- und Governanceordner:
  Rollen, Verguetungsunterlagen, Gremienfreigaben, Anzeige-/Pruefunterlagen.

- WpHG-/Kundenprozess-Nachweisordner:
  Policies, Schulungen, Kontrollnachweise, Beschwerden, interne Reviews, ohne Anlage-/Rechtsberatung.

- Pruefungs- und Massnahmenakte:
  Feststellungen, Massnahmen, Owner, Fristen, Evidenz.

Mini-Tools:

- BaFin-Rueckfrage-Board,
- Auslagerungsregister pro Dienstleister,
- Finding-to-Evidence-Board,
- Gremienpaket-Builder,
- Passverfahren-/Aenderungsanzeige-Ordner.

Monetarisierung:

- kleines Wertpapierinstitut: 1.500-5.000 EUR/Monat,
- mittleres Institut: 5.000-20.000 EUR/Monat,
- Gruppe/Plattform: 20.000-75.000 EUR/Monat,
- Setup: 20.000-250.000 EUR.

Grenze:

- keine Erlaubnis-, WpIG- oder WpHG-Auslegung,
- keine Anlageberatung,
- keine Geeignetheits-/Angemessenheitspruefung,
- keine regulatorische Freigabe,
- starke Security, Auditlogs und Berechtigungen zwingend.

Bewertung:

Sehr hochpreisiges Spaetermodul. Es ist noch schwerer zu verkaufen als Arbeitgeber-/Produktakte, aber wenige Kunden reichen fuer viel Umsatz. Ideal als Enterprise-Aktenfamilie, wenn die Plattform reif ist.

### 68.3 KVG-, AIF-, Investmentfonds-, KAGB-, Verwahrstellen- und MVP-Meldeakte

Quellenlage:

- BaFin, KVGen und Investmentfonds: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/investmentfonds-kgven/investmentfonds-kgven_node.html
- BaFin, Geschaefte einer Kapitalverwaltungsgesellschaft: https://www.bafin.de/DE/unternehmen-maerkte/erlaubnis-registrierung/assetmanagement/geschaefte-kvg/geschaefte-kvg_node.html
- BaFin, Geschaefte einer kleinen Kapitalverwaltungsgesellschaft: https://www.bafin.de/DE/unternehmen-maerkte/erlaubnis-registrierung/assetmanagement/geschaefte-kvg-kl/geschaefte-kvg-kl.html
- BaFin, Anzeige- und Meldepflichten Investmentfonds/KVGen: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/investmentfonds-kgven/anzeige-meldepflichten/anzeige-meldepflichen.html
- BaFin, KAGB-Auslagerung FAQ: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/FAQ/faq_kagb_36_auslagerung_130710.html
- BaFin, AIF-Meldepflichten: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Merkblatt/WA/mb_140815_meldepflicht_aif-vwges-35kagb.html
- BaFin, MVP-Portal: https://www.bafin.de/DE/unternehmen-maerkte/mvp-portal/mvpportal_node.html
- BaFin, Fondsrisikobegrenzungsgesetz-Konsultation, 17.06.2026: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Meldung/2026/meldung_2026_06_17_konsultation_rundschreiben_fondsrisikobegrenzungsgesetz.html

Warum das in die Plattform passt:

KVGen, AIF-Verwaltungsgesellschaften und Fondsanbieter arbeiten ohnehin mit Dokumenten, Prospekten, Anlagerichtlinien, Verwahrstellen, Anlegerunterlagen, Meldeformaten, Auslagerungen, Pruefungen und Gremien. Das ist ein Dokumentenraum- und Nachweisproblem mit hohem Wert pro Kunde.

Zielgruppen:

- Kapitalverwaltungsgesellschaften,
- registrierte AIF-Verwaltungsgesellschaften,
- Fondsinitiatoren,
- Asset Manager,
- Verwahrstellen,
- Spezial-AIF-Strukturen,
- Real-Estate-, Private-Equity-, Debt- und Infrastruktur-Fonds,
- Wirtschaftspruefer, KAGB-Berater und Fondsadministratoren.

Konkretes Produkt:

- KVG-/Fondsstammdatenakte:
  KVG, Fonds, Verwahrstelle, Dienstleister, Register-/MVP-Zugaenge als Metadaten, Ansprechpartner.

- Anzeige- und Meldeordner:
  MVP-Abgaben, AIF-Meldungen, Aenderungsanzeigen, Rueckfragen, Fristen, Status.

- Auslagerungsakte:
  Dienstleister, Funktionen, Vertrage, Risiko, Reviews, Unterauslagerungen, Anzeigehistorie.

- Fondsunterlagen-Versionierung:
  Prospekte, Anlagebedingungen, Anlegerinformationen, Beschluesse, Freigaben, Versionshistorie.

- Pruefungs- und Jahresabschlussordner:
  Pruefberichte, Rueckfragen, Feststellungen, Massnahmen, Evidenz.

- Verwahrstellen-/Partnerakte:
  Abstimmungen, Freigaben, Uebergaben, Nachweise.

Mini-Tools:

- Fonds-Datenraum pro Vehikel,
- MVP-Abgabe-Timeline,
- Auslagerungsregister,
- Prueferpaket-Export,
- Gremien- und Beschlussordner,
- Anleger-/Due-Diligence-Unterlagenpaket.

Monetarisierung:

- kleine registrierte KVG/AIF-Struktur: 750-3.000 EUR/Monat,
- KVG/Fondsadministrator: 3.000-20.000 EUR/Monat,
- grosse Fondsplattform: 20.000-100.000 EUR/Monat,
- Setup/Datenmigration: 10.000-300.000 EUR,
- Partnerumsatz mit Fondsadministratoren, Wirtschaftspruefern, Verwahrstellen und KAGB-Beratern.

Grenze:

- keine KAGB-/AIF-Einstufung,
- keine Anlagebedingungen-Freigabe,
- keine Vertriebsfreigabe,
- keine Prospekt- oder Anlegerrechtsberatung,
- keine Investmententscheidung.

Bewertung:

Sehr starkes Premium-Spaetermodul. Fuer SEO nur als Fachseiten sinnvoll, nicht als allgemeine Startseite. Als Enterprise-Datenraum kann es aber groessere Tickets bringen als viele KMU-Pflichtthemen zusammen.

### 68.4 GwG-/AML-Nachweisakte als Querschnitt, nicht als Rechtsentscheidung

Quellenlage:

- BaFin, Praevention von Geldwaesche und Terrorismusfinanzierung: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/alle-unternehmen/geldwaesche/geldwaesche_node.html
- BaFin, Auslegungs- und Anwendungshinweise GwG: https://www.bafin.de/SharedDocs/Downloads/DE/Auslegungsentscheidung/dl-ae-auas-aenderungsfassung-2025-gw.pdf
- FIU/Zoll, Geldwaeschepraevention Nichtfinanzunternehmen: https://www.zoll.de/DE/FIU/Fachliche-Informationen/Geldwaeschepraevention-Nichtfinanzunternehmen/Sorgfaltspflichten/sorgfaltspflichten_node.html

Warum das in die Plattform passt:

Geldwaeschepraevention betrifft nicht nur Banken, sondern viele Verpflichtete. In der Datei ist GwG bereits bei Spielhallen und Nichtfinanzunternehmen beruecksichtigt. Fuer regulierte Finanzmodule muss AML aber als Querschnittsakte klarer sichtbar sein.

Konkretes Produkt:

- Risikoanalyse-Ablage,
- interne Sicherungsmassnahmen,
- Schulungsnachweise,
- Verdachtsmeldeprozess-Dokumentation,
- Kunden-/Transaktionspruefprozess als Unterlagenordner,
- Findings und Massnahmen,
- Pruefer-/Aufsichts-Export.

Grenze:

- keine Entscheidung, ob eine Person wirtschaftlich Berechtigter ist,
- keine Verdachtsmeldeentscheidung,
- keine GwG-Betroffenheitsentscheidung,
- keine Risikoanalyse als fachliches Ergebnis.

Monetarisierung:

- als Add-on zu Finanz-, Spielhallen-, Immobilien-, Kunst-, Krypto-, Zahlungs- und KVG-Modulen,
- 99-1.500 EUR/Monat bei KMU-/Nichtfinanzunternehmen,
- 1.500-15.000 EUR/Monat bei regulierten Finanzunternehmen,
- Setup 1.000-100.000 EUR je Komplexitaet.

Bewertung:

AML/GwG sollte nicht als eigenes Startprodukt nach vorne, sondern als Querschnittsakte in passenden Branchen erscheinen. Der Wert entsteht ueber Nachweise, Schulungen, Reviewtermine, Findings und Exporte.

### 68.5 Bewertung der Finanz-Restluecke

Neue Premiumfelder:

1. KVG-/AIF-/Investmentfondsakte
   - sehr hohe Tickets,
   - starker Dokumentenraum-Fit,
   - wenig Massen-SEO, aber hohe Zahlungsbereitschaft.

2. Zahlungs-/E-Geld-/ZAG-Akte
   - sehr nah an Fintech, DORA, Auslagerung, AML,
   - gute Premium-Vertriebsstory,
   - wachsend durch Embedded Finance und Zahlungsverkehr.

3. WpIG-/Wertpapierinstitutsakte
   - hohe Tickets,
   - noch spezieller,
   - guter Berater-/Prueferkanal.

4. GwG-/AML-Akte
   - Querschnittsmodul,
   - darf nicht als Rechtsentscheidungsmaschine gebaut werden,
   - sehr gut fuer Schulungs-/Nachweis-/Finding-Logik.

Auswirkung auf die Plattform:

Die Finanzmodule gehoeren nicht in den MVP-Kern. Sie sollten aber architektonisch moeglich sein, weil sie spaeter sehr hohe Umsaetze pro Kunde bringen koennen.

Neue Roadmap-Kategorie:

- Regulated-Finance-Akten:
  DORA, MiCA, ZAG, E-Geld, WpIG, KVG/AIF, Versicherer/EbAV, AML/GwG, Auslagerung, Pruefungs- und Aufsichtsexporte.

Kernaussage:

Wenn die Plattform spaeter Enterprise-faehig ist, ist regulierte Finanzdokumentation eines der hoechstpreisigen Felder ueberhaupt. Fuer den Start bleibt es zu schwer, aber als Roadmap kann es den Umsatzdeckel deutlich anheben.

## 69. Weitere Restluecke: Heizkosten/UVI, REMIT-Energiehandel und Vereins-/Stiftungsakte

Der naechste Kontrollscan zeigt: Viele grosse Bereiche sind bereits abgedeckt. Drei Felder waren aber noch nicht sauber genug ausgearbeitet:

- Heizkostenverordnung, unterjaehrige Verbrauchsinformation und Submetering fuer Wohnungswirtschaft/Hausverwaltungen,
- REMIT-/Energiegrosshandelsakte fuer Strom-, Gas-, LNG- und Energiehandelsakteure,
- Vereins-, Stiftungs-, Spenden-, Tombola- und Gemeinnuetzigkeitsakte als kleineres Organisationspaket.

### 69.1 Heizkosten-, UVI-, Fernablese-, Messdienst- und Submetering-Akte

Quellenlage:

- Heizkostenverordnung: https://www.gesetze-im-internet.de/heizkostenv/BJNR002610981.html
- BMWK, Evaluierung der Heizkostenverordnung: https://www.bundeswirtschaftsministerium.de/Redaktion/DE/Evaluationen/Gesetze-Verordnungen/evaluierung-der-heizkostenverordnung-zur-ausstattung-zur-verbrauchserfassung.pdf
- Bundesnetzagentur, Marktstammdatenregister: https://www.bundesnetzagentur.de/DE/Fachthemen/ElektrizitaetundGas/Monitoringberichte/Marktstammdatenregister/start.html
- Bundesnetzagentur, Mieterstromzuschlag und Einspeiseverguetung: https://www.bundesnetzagentur.de/899948
- Bundesnetzagentur, Solaranlagen und andere EE-Anlagen: https://www.bundesnetzagentur.de/DE/Fachthemen/ElektrizitaetundGas/ErneuerbareEnergien/Solaranlagen/start.html

Warum das neu und stark ist:

Hausverwaltung, Immobilien, Aufzug, Rauchwarnmelder, Legionellen und Energieausweis sind bereits enthalten. Nicht scharf genug war aber die eigene Welt aus fernablesbaren Heizkostenverteilern, Waermezaehlern, Warmwasserzaehlern, monatlicher Verbrauchsinformation, Messdienstleisterdaten, Mieterkommunikation, Datenschutznachweisen und Objektuebersichten.

Das ist fuer Hausverwaltungen sehr praktisch, weil ein Verwalter nicht eine Pflicht "wissen" will, sondern fuer viele Objekte sehen muss:

- welche Liegenschaft hat welche Messtechnik,
- welcher Messdienst ist zustaendig,
- welche Nutzerinformationen wurden bereitgestellt,
- welche Geraete muessen ersetzt oder nachgeruestet werden,
- wo liegen Abrechnungen, Belege, Nutzerlisten, Versandnachweise und Dienstleistervertraege.

Zielgruppen:

- Hausverwaltungen,
- WEG-Verwalter,
- Wohnungsunternehmen,
- gewerbliche Vermieter,
- Messdienstleister/Submetering-Anbieter,
- Immobilien-Family-Offices,
- Energie-/Contracting-Dienstleister,
- Mieterstrom- und PV-Betreiber in Mehrparteiengebaeuden.

Konkretes Produkt:

- Liegenschaftsakte:
  Objekt, Einheiten, Nutzer, Messdienst, Zaehlerarten, Einbaudaten, Fernablesestatus, Austauschtermine.

- UVI-/Verbrauchsinformationsordner:
  Monatsstatus, Versand-/Bereitstellungsnachweise, Kommunikationskanal, Ruecklaeufer, Nutzerfragen.

- Messgeraete- und Geraetetauschkalender:
  Heizkostenverteiler, Waermezaehler, Warmwasserzaehler, Gateway-/Interoperabilitaetsstatus, Dienstleistertermine.

- Abrechnungs- und Belegordner:
  Heizkostenabrechnung, Nutzerliste, Brennstoff-/Waermekostenbelege, CO2-Kostenaufteilung als Ablage, Dienstleisterexport.

- Mieterstrom-/PV-Unterordner:
  MaStR-Daten, Netzbetreiberkommunikation, Mieterstromzuschlag-Unterlagen, Zaehlerkonzept, Kunden-/Mieterkommunikation.

- Dienstleisterfreigabe:
  Messdienst, Abrechner, Hausverwaltung, Eigentuemer, Beirat und Steuerberater erhalten kontrollierten Zugriff.

Mini-Tools:

- UVI-Monatsstatus:
  zeigt je Objekt, ob fuer den Monat Nachweise hochgeladen/versendet/bereitgestellt wurden.

- Geraetetausch-Matrix:
  zeigt je Objekt und Geraetetyp Austausch-, Nachruest- und Wartungstermine als Nutzerangaben.

- Messdienst-Export:
  ZIP/PDF mit Objektstammdaten, Geraeteliste, Nutzerliste und Rueckfragen.

- Mieterkommunikationslog:
  dokumentiert Bereitstellungen, Benachrichtigungen und Rueckfragen.

- MaStR-/Mieterstrom-Belegordner:
  keine energierechtliche Bewertung, nur Register- und Belegablage.

Monetarisierung:

- kleine Hausverwaltung: 49-199 EUR/Monat,
- groessere Verwaltung/Wohnungsunternehmen: 299-2.000 EUR/Monat,
- Messdienstleister-/Partnerportal: 499-5.000 EUR/Monat,
- Setup je Objektbestand: 500-25.000 EUR,
- Zusatzumsatz mit Messdiensten, Abrechnungsdienstleistern, Energieberatern, PV-/Mieterstrompartnern.

Warum es Geld bringt:

- viele Objekte pro Kunde,
- wiederkehrender Monatsprozess,
- starke Retention, weil Objekt- und Messdaten laufend gepflegt werden,
- gute Partnerkanaele mit Messdienstleistern und Hausverwaltungssoftware,
- konkreter SEO-Longtail: UVI, Fernablesung, HeizkostenV, Messdienst, Verwalter.

Grenze:

- keine Heizkostenabrechnung als Fachsystem ersetzen,
- keine rechtliche Bewertung, ob ein konkretes Geraet ausreicht,
- keine Mietrechtsberatung,
- keine Energieversorgungs-/Mieterstromberatung,
- nur Beleg-, Fristen-, Geraete- und Kommunikationsakte.

Bewertung:

Sehr gutes Add-on fuer Immobilien/Hausverwaltung. Es ist naeher am Start als viele Premium-Spezialfelder, weil der Schmerz praktisch, breit und wiederkehrend ist.

### 69.2 REMIT-, Energiegrosshandels-, CEREMP-, RRM-, IIP- und Energiehandelsakte

Quellenlage:

- Bundesnetzagentur REMIT: https://remit.bundesnetzagentur.de/
- Bundesnetzagentur REMIT Grundlagen: https://www.remit.bundesnetzagentur.de/DE/Fachthemen/ElektrizitaetundGas/HandelundVertrieb/REMIT/1Grundlagen/start.html
- Bundesnetzagentur REMIT Registrierung: https://www.remit.bundesnetzagentur.de/DE/Fachthemen/ElektrizitaetundGas/HandelundVertrieb/REMIT/2Registrierung/start.html
- Markttransparenzstelle, Merkblatt Registrierungs- und Datenmeldepflichten: https://www.markttransparenzstelle.de/SharedDocs_MTS/Downloads/DE/REMIT/Merkblatt%204%20-%20Adressaten%20von%20Registrierungs-%20und%20Datenmeldepflichten.pdf
- ACER REMIT Portal: https://www.acer-remit.eu/
- ACER Market Participants: https://www.acer.europa.eu/remit/who-does-REMIT-apply-to/market-participants
- ACER Data Reporting: https://www.acer.europa.eu/remit/data-collection/data-reporting

Warum das neu und stark ist:

Energiehandel wurde im Methan-/Importkontext erwaehnt, aber REMIT als eigene Melde-, Register-, Transaktions-, Insiderinformations- und Datenqualitaetsakte fehlt. Die Bundesnetzagentur beschreibt REMIT als Ueberwachung des Energiegrosshandels mit Registrierung von Marktteilnehmern, Datenmeldepflichten und Verfolgung von Verstoessen. ACER beschreibt Registrierung ueber nationale Regulierungsbehoerden und Reporting ueber RRMs sowie IIPs fuer Insiderinformationen.

Das ist ein kleiner, aber sehr hochpreisiger B2B-Markt. Wer Strom, Gas, LNG oder energienahe Grosshandelsprodukte handelt, will keine Excel-Zettel fuer CEREMP, ACER-Code, RRM, IIP, Transaktionsmeldungen, Insiderinformationen, Zugaenge, Vollmachten und Auditspuren.

Zielgruppen:

- Energiehaendler,
- Stadtwerke mit Handelsaktivitaet,
- Direktvermarkter,
- Strom- und Gaslieferanten mit Grosshandelsaktivitaet,
- Erzeuger mit Handels-/Marktzugang,
- Speicherbetreiber,
- LNG-nahe Marktteilnehmer,
- Energiedienstleister und Portfoliomanager,
- REMIT-/Compliance-Berater.

Konkretes Produkt:

- Marktteilnehmer-/CEREMP-Akte:
  Registrierung, ACER-Code, Unternehmensdaten, Vollmachten, Ansprechpartner, Aenderungshistorie.

- RRM-/Reporting-Dienstleisterakte:
  Vertrage, Schnittstellen, Reportingumfang, Datenqualitaetschecks als Ablage, Rueckmeldungen, Service-Level.

- IIP-/Insiderinformationsakte:
  Plattform, Bereitstellungszeitpunkte, Ereignisse, interne Freigaben, Veroeffentlichungsnachweise.

- Handelsdaten-Nachweisordner:
  Transaktions-/Orderdatenexporte, Korrekturen, Rueckfragen, Datenfehler, Belege.

- REMIT-Policy- und Schulungsordner:
  interne Richtlinien, Schulungen, Rollen, Kontrollhandlungen, Mitarbeitendenbestaetigungen.

- Aufsichts-/Rueckfrageboard:
  Anfrage, Owner, Frist, Dokumente, Antwortstand, Export.

Mini-Tools:

- CEREMP-Daten-Timeline:
  zeigt, wann welche Stammdaten intern geaendert und belegt wurden.

- RRM-Fehlerlog:
  sammelt Rueckmeldungen und Korrekturen des Reportingdienstleisters.

- IIP-Ereignisakte:
  strukturiert Ereignis, Freigabe, Veroeffentlichung, Belege und Nachkommunikation.

- Trading-Compliance-Export:
  ZIP/PDF fuer Compliance, Revision, Berater oder Aufsicht.

Monetarisierung:

- kleiner Energiehaendler/Stadtwerk: 750-3.000 EUR/Monat,
- Energiehandelsunternehmen: 3.000-15.000 EUR/Monat,
- Konzern/Portfolio: 15.000-75.000 EUR/Monat,
- Setup: 10.000-250.000 EUR,
- Partnerumsatz mit REMIT-Beratern, Energiehandelssoftware, RRM-/IIP-Anbietern und Rechts-/Compliance-Spezialisten.

Warum es Geld bringt:

- hoher Schaden bei schlechter Dokumentation,
- wenig Kunden noetig fuer relevanten Umsatz,
- sehr gute Naehe zu Energie-, DORA-, Audit-, Auslagerungs- und Datenqualitaetsakten,
- starker Beraterkanal.

Grenze:

- keine Entscheidung, ob ein Marktteilnehmer registrierungs- oder meldepflichtig ist,
- keine Bewertung, ob eine Information Insiderinformation ist,
- keine Marktmissbrauchs-/Manipulationsanalyse,
- keine automatische Meldung ohne Nutzerfreigabe,
- kein Ersatz fuer RRM/IIP/Trading-Systeme.

Bewertung:

Sehr gutes Premium-Spaetermodul. Es ist klein, aber mit hohen Tickets. Fuer die Startseite nicht prominent, aber als "Regulated Energy Compliance Room" in der Roadmap stark.

### 69.3 Vereins-, Stiftungs-, Spenden-, Zuwendungs-, Tombola- und Gemeinnuetzigkeitsakte

Quellenlage:

- BMF, Muster fuer Zuwendungsbestaetigungen 2025: https://esth.bundesfinanzministerium.de/esth/2025/B-Anhaenge/Anhang-37/I/anhang-37-I.html
- BMF, Steuervorteile bei Ehrenamt und Spenden, Broschuere 2026: https://www.bundesfinanzministerium.de/Content/DE/Downloads/Broschueren_Bestellservice/steuervorteile-bei-ehrenamt-und-spenden.pdf
- BMF, Umsatzsteuerrechtliche Behandlung von Sachspenden FAQ: https://www.bundesfinanzministerium.de/Content/DE/FAQ/FAQ-ust-sachspenden.html
- Bundesportal, Tombola/Ausspielung anmelden: https://verwaltung.bund.de/leistungsverzeichnis/DE/leistung/99089027005001/herausgeber/HB-S1000030001197745/region/04
- Bundesportal, Erlaubnis fuer Gluecksspiel/Lotterie/Tombola: https://verwaltung.bund.de/leistungsverzeichnis/DE/leistung/99089027005000/herausgeber/SH-232232360/region/01

Warum das passt:

Vereine und Stiftungen sind keine Top-Zahler wie Finanz- oder Energieunternehmen. Aber es gibt sehr viele davon, sie arbeiten oft chaotisch mit ehrenamtlichen Vorstaenden, wechselnden Kassierern, Spenden, Sachspenden, Protokollen, Satzungen, Mittelverwendung, Zuwendungsbestaetigungen, Tombolas, Projekten und Foerdermitteln. Gerade groessere Vereine, Traeger, Foerdervereine, Stiftungen und Sozialorganisationen zahlen fuer Ordnung, wenn sie dadurch weniger Vorstandschaos und weniger Sucherei haben.

Zielgruppen:

- groessere Sportvereine,
- Foerdervereine mit Spenden,
- Kulturvereine,
- gemeinnuetzige Traeger,
- Stiftungen,
- Bildungs-/Sozialtraeger,
- kirchliche oder freie Traeger mit vielen Projekten,
- Verbandsstrukturen mit Ortsgruppen.

Konkretes Produkt:

- Vereins-/Stiftungsakte:
  Satzung, Registerauszuege, Vorstand, Protokolle, Beschluesse, Vollmachten, Versicherungen, Bankunterlagen.

- Spenden- und Zuwendungsordner:
  Geldspenden, Sachspenden, Zuwendungsbestaetigungen, Belege, Wertunterlagen, Serienexport fuer Steuerberater.

- Projekt- und Mittelverwendungsakte:
  Zweck, Budget, Belege, Foerdermittel, Fotos, Sachbericht, Verwendungsnachweis, Fristen.

- Tombola-/Ausspielungsakte:
  Antrag, Genehmigung, Auflagen, Loslisten, Preise, Einnahmen, Verwendungszweck, Abrechnung.

- Mitglieder-/Ehrenamtsordner:
  Rollen, Datenschutz, Einwilligungen, Schulungen, Fuehrungszeugnisse falls vom Verein selbst angelegt.

- Vorstandswechsel-Paket:
  ZIP/PDF mit allen relevanten Unterlagen fuer neuen Vorstand/Kassierer.

Mini-Tools:

- Spendenbeleg-Checkliste:
  keine Steuerberatung, nur Felder und Ablage fuer vorhandene Daten.

- Sachspenden-Unterlagenordner:
  Beschreibung, Wertunterlagen, Fotos, Herkunft, Freigabe durch Verantwortliche.

- Mitgliederversammlungs-Ordner:
  Einladung, Tagesordnung, Protokoll, Beschluesse, Teilnehmerliste, Folgeaufgaben.

- Tombola-Projektmappe:
  Antrag, Genehmigung, Auflagen, Preise, Abrechnung, Nachweise.

- Vorstandsuebergabe-Export:
  alles fuer neuen Vorstand, Steuerberater oder Pruefer in einem Paket.

Monetarisierung:

- kleiner Verein: 9-29 EUR/Monat,
- groesserer Verein/Traeger: 49-199 EUR/Monat,
- Stiftung/Verband/Traegergruppe: 199-1.000 EUR/Monat,
- Setup/Vorstandswechsel-Datenimport: 199-5.000 EUR,
- Partnerumsatz mit Steuerberatern, Vereinsberatern, Versicherern, Fundraising-Tools.

Warum es Geld bringt:

- riesige Menge an Organisationen,
- staendiger Vorstands-/Kassiererwechsel,
- Spenden und Foerdermittel erzeugen Belegdruck,
- gute SEO-Mikrofragen zu Spendenbelegen, Sachspenden, Tombola, Vorstandwechsel, Protokollen,
- stark als "leichtere" Version der Betriebsakte fuer Nonprofit-Traeger.

Grenze:

- keine Gemeinnuetzigkeitsberatung,
- keine Steuerberatung,
- keine Entscheidung, ob eine Zuwendungsbestaetigung ausgestellt werden darf,
- keine Tombola-/Gluecksspielerlaubnisberatung,
- keine Rechtspruefung von Satzungen oder Beschluessen.

Bewertung:

Breit, aber niedrigere Zahlungsbereitschaft. Nicht Startkern fuer das B2B-Projekt, aber gutes Nebenprodukt oder spaeter eigene Landingpage "Vereinsakte". Besonders spannend, wenn die Grundplattform schon steht und man guenstige Self-Service-Pakete verkaufen will.

### 69.4 Bewertung dieser Runde

Neue Treffer nach Qualitaet:

1. Heizkosten-/UVI-/Submetering-Akte
   - beste neue Breitenchance,
   - klarer Fit zu Hausverwaltung/Immobilien,
   - wiederkehrender Monatsprozess,
   - gutes Add-on fuer den fruehen Immobiliencluster.

2. REMIT-/Energiegrosshandelsakte
   - kleine Zielgruppe,
   - sehr hohe Tickets,
   - starkes Premium-Spaetermodul.

3. Vereins-/Stiftungs-/Spendenakte
   - sehr breit,
   - niedrigere Preise,
   - gut als Self-Service-Nebenprodukt, aber nicht Hauptfokus.

Auswirkung auf die Startlogik:

Die UVI-/Heizkostenakte sollte in den Immobilien-/Hausverwaltungscluster aufgenommen werden. Sie ist deutlich praxisnaeher als viele abstrakte Pflichten und kann wiederkehrende Nutzung erzeugen.

REMIT kommt in die Premium-Roadmap "Regulated Energy".

Vereins-/Stiftungsakte kommt in die Longtail-Roadmap oder wird spaeter als guenstiges Nebenprodukt getestet.

Aktualisierte Immobilien-Erweiterung:

- Hausverwaltung/Gewerbeimmobilie:
  Aufzug, Brandschutz, Rauchwarnmelder, Trinkwasser/Legionellen, Heizkosten/UVI, Messgeraete, Energieausweis, TGA, Mieterstrom/PV, Dienstleisterexport.

Kernaussage:

Die meisten grossen Pflichtwelten sind inzwischen abgedeckt. Neue starke Treffer entstehen jetzt vor allem als tiefere Unterprodukte in bestehenden Clustern. Genau das ist gut: Es zeigt, dass die Plattform nicht mehr breiter werden muss, sondern einzelne Geldkeile scharf machen sollte.

## 70. Finanzrand-Restluecke: Kreditzweitmarkt, Kreditdienstleister und Inkasso/RDG-Dokumentation

Der naechste Scan zeigt einen weiteren regulierten Randbereich: Kreditdienstleistungen nach dem Kreditzweitmarktgesetz sind noch nicht als eigene Akte enthalten. Inkasso und Rechtsdienstleistungsregister waren nur als Warnhinweis vorhanden. Beides ist kein Startkern, aber als Dokumentations- und Registerakte relevant.

### 70.1 Kreditzweitmarkt-, Kreditdienstleister-, Kreditkaeufer- und NPL-Servicing-Akte

Quellenlage:

- BaFin, Kreditdienstleistungen nach dem Kreditzweitmarktgesetz: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/banken-institute/kreditdienstleistungen-kreditzweitmarktgesetz/kreditdienstleistungen-kreditzweitmarktgesetz_node.html
- BaFin, Erlaubnis/Registrierung Kreditdienstleistungen nach KrZwMG: https://www.bafin.de/DE/unternehmen-maerkte/erlaubnis-registrierung/kreditdienstleistungen-krzwmg/kreditdienstleistungen-krzwmg_node.html
- BaFin, Kreditzweitmarktgesetz Fachartikel: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Fachartikel/2024/fa_bj_2404_Kreditzweitmarktgesetz.html
- BaFin, Aufsichtsmitteilung Erlaubnisverfahren Kreditzweitmarktgesetz: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Aufsichtsmitteilung/2024/aufsichtsmitteilung_240326_Kreditzweitmarktgesetz.html
- BaFin, FAQ Kreditzweitmarkt: https://www.bafin.de/SharedDocs/Fragen-antworten/DE/faq-kreditzweitmarkt/FAQs_node.html
- BaFin, Merkblatt Kreditdienstleistungen PDF: https://www.bafin.de/SharedDocs/Downloads/DE/Merkblatt/BA/dl_anlage_Merkblatt_Kreditdienstleistungen_BA.pdf

Warum das passt:

Das Kreditzweitmarktgesetz betrifft Kreditdienstleister, Kreditkaeufer und Kreditverkaeufer im Umfeld notleidender Kredite. Die Zielgruppe ist klein, aber stark reguliert und dokumentationsintensiv. Es geht um Erlaubnisunterlagen, Organisationspflichten, Beschwerdeprozesse, Auslagerungen, Kreditnehmerkommunikation, Daten, Portfolios, Aufsichtskorrespondenz und Dienstleister.

Die Plattform verkauft hier keinen Forderungseinzug und keine Rechtsdurchsetzung. Sie verkauft einen Nachweisraum fuer regulierte Prozesse.

Zielgruppen:

- Kreditdienstleister,
- Kreditkaeufer,
- NPL-Servicer,
- Forderungsplattformen,
- Banken/Finanzierer mit Portfoliotransaktionen,
- Auslagerungsdienstleister im Kreditservicing,
- Compliance- und Operations-Teams,
- Wirtschaftspruefer, BaFin-/Bankaufsichtsberater.

Konkretes Produkt:

- KrZwMG-Erlaubnis- und Registerakte:
  Antrag, Erlaubnisunterlagen, Organisationsdaten, Geschaeftsleiter, verantwortliche Personen, Aenderungshistorie.

- Kreditportfolio-Servicing-Akte:
  Portfolio, Kreditkaeufer, Kreditverkaeufer, Servicer, Dienstleister, Datenuebergaben, Freigaben, Schnittstellen.

- Kreditnehmerkommunikations-Ordner:
  Vorlagenversionen, Versandnachweise, Beschwerden, Rueckfragen, Fristen, interne Bearbeitung.

- Auslagerungs- und Dienstleisterakte:
  Dienstleister, Vertrag, Leistungsumfang, Unterauslagerung, Review, Risiken, Nachweise.

- Beschwerde- und Aufsichtsboard:
  Beschwerde, Owner, Frist, Unterlagen, Antwortstatus, Export.

- Datenschutz-/Datenuebergabeordner:
  Datenraeume, Verarbeitungshinweise, Zugriff, Loesch-/Sperrprozesse als Ablage.

Mini-Tools:

- Portfolio-Datenraum:
  strukturiert Unterlagen pro Kreditportfolio und Dienstleister.

- Kreditnehmerkommunikations-Timeline:
  zeigt, welche Version wann fuer welchen Vorgang verwendet wurde.

- BaFin-Rueckfrage-Export:
  sammelt Unterlagen, Zeitlinie, Owner und Antwortstatus.

- Auslagerungsregister:
  ein Dienstleister, alle Vertrage, Reviews, Nachweise und Massnahmen.

Monetarisierung:

- kleiner Kreditdienstleister: 1.000-5.000 EUR/Monat,
- NPL-/Servicing-Plattform: 5.000-25.000 EUR/Monat,
- groesseres Portfolio-/Bankumfeld: 25.000-100.000 EUR/Monat,
- Setup/Datenraumstruktur: 10.000-250.000 EUR,
- Partnerumsatz mit Bankaufsichtsberatern, Datenschutz, Pruefern, NPL-Beratern.

Warum es Geld bringt:

- hohes Regulierungs- und Reputationsrisiko,
- viele Dokumente pro Portfolio,
- starke Verbindung zu BaFin, Datenschutz, Auslagerung und Beschwerdemanagement,
- wenige Kunden reichen fuer hohe Umsaetze.

Grenze:

- keine Inkasso-/Rechtsdienstleistung,
- keine Forderungsbewertung,
- keine Kreditnehmerrechtsberatung,
- keine Erlaubnispflichtentscheidung,
- keine BaFin-Freigabeversprechen.

Bewertung:

Sehr gutes Spaeter-Premiumfeld in der Regulated-Finance-Roadmap. Es ist nicht massentauglich, aber die Ticketgroesse kann sehr hoch sein.

### 70.2 Inkasso-, Rechtsdienstleistungsregister-, Registrierungs- und Beschwerdeakte

Quellenlage:

- Rechtsdienstleistungsregister: https://www.rechtsdienstleistungsregister.de/
- BfJ, Rechtsdienstleistungsregister: https://www.bundesjustizamt.de/DE/Themen/ZentraleRegister/Rechtsdienstleistungsregister/Rechtsdienstleistungsregister_node.html
- BfJ, Registersuche: https://www.bundesjustizamt.de/DE/Themen/ZentraleRegister/Rechtsdienstleistungsregister/Registersuche/Registersuche_node.html
- BfJ, Registrierungsverfahren: https://www.bundesjustizamt.de/DE/Themen/ZentraleRegister/Rechtsdienstleistungsregister/Registrierungsverfahren/Registrierungsverfahren_node.html
- BfJ, Formulare Rechtsdienstleistungsregister: https://www.bundesjustizamt.de/DE/Themen/ZentraleRegister/Rechtsdienstleistungsregister/Formulare/Formulare_node.html
- BfJ, Beschwerden: https://www.bundesjustizamt.de/DE/Themen/ZentraleRegister/Rechtsdienstleistungsregister/Beschwerden/Beschwerden_node.html

Warum das passt:

Inkasso selbst ist RDG-nahe und darf von der Plattform nicht als Leistung angeboten werden. Trotzdem haben Inkassodienstleister, Legal-Operations-Dienstleister und Forderungsmanager viele Dokumentationspunkte: Registrierung, qualifizierte Personen, Fortbildung, Beschwerden, Mandanten-/Auftraggeberunterlagen, Vorlagenversionen, Datenschutz, Beschwerdekommunikation und interne Freigaben.

Die Plattform darf hier nur Dokumentationsraum sein. Sie darf keine Forderungen betreiben, keine Rechtslage bewerten und keine Schreiben inhaltlich freigeben.

Zielgruppen:

- Inkassodienstleister,
- Forderungsmanagement-Abteilungen,
- Legal-Operations-Teams,
- Plattformen mit ausgelagertem Forderungsmanagement,
- Kanzleinahe Dienstleister, nur wenn sauber abgegrenzt,
- Compliance- und Beschwerdeteams.

Konkretes Produkt:

- RDG-Registrierungsakte:
  Registerauszug, Registrierungsdaten, qualifizierte Personen, Aenderungen, BfJ-Kommunikation.

- Mandanten-/Auftraggeberordner:
  Vertrage, Vollmachten, Datenschutzunterlagen, Rollen, Freigaben.

- Vorlagen- und Versionierungsakte:
  Mahn-/Kommunikationsvorlagen, Version, Freigabe durch Verantwortliche, Gueltigkeitszeitraum.

- Beschwerdeakte:
  Beschwerde, Frist, Owner, Kommunikation, Ergebnis, Nachweis.

- Schulungs-/Qualifikationsordner:
  Nachweise, Unterweisungen, interne Richtlinien, Rollen.

- Export fuer Aufsicht/Pruefung:
  strukturierter Ordner fuer BfJ, Datenschutz, Auftraggeber oder externe Berater.

Mini-Tools:

- Registerstatus-Timeline,
- Beschwerdeboard,
- Vorlagen-Versionen-Archiv,
- Auftraggeber-Datenraum,
- Export "Aufsicht/Beschwerde".

Monetarisierung:

- kleines Inkassobuero/Forderungsabteilung: 99-499 EUR/Monat,
- groesserer Dienstleister: 500-3.000 EUR/Monat,
- Plattform/Enterprise-Forderungsmanagement: 3.000-15.000 EUR/Monat,
- Setup: 1.000-50.000 EUR.

Warum es Geld bringt:

- viele Beschwerden/Kommunikationsvorgaenge moeglich,
- Auftraggeber wollen Nachweise,
- Register- und Aufsichtsbezug,
- Vorlagenversionierung hat echten Wert.

Grenze:

- keine Rechtsdienstleistung,
- keine Forderungspruefung,
- keine automatische Inkassoschreiben-Erstellung ohne Fachfreigabe,
- keine Aussage, ob ein konkretes Schreiben zulaessig ist,
- hohe RDG- und Reputationssensibilitaet.

Bewertung:

Kommerziell interessant, aber heikel. Nicht als sichtbares Startthema. Wenn ueberhaupt spaeter als "Forderungsmanagement-Nachweisakte" und mit juristisch gepruefter Produktgrenze.

### 70.3 Bewertung dieser Finanzrand-Runde

Beste neue Idee:

1. Kreditzweitmarkt-/Kreditdienstleisterakte
   - deutlich staerker als generisches Inkasso,
   - hohe Tickets,
   - klarer BaFin-/Regulierungsbezug,
   - gute Naehe zu Auslagerung, DORA, Datenschutz und Beschwerdeakten.

2. Inkasso-/RDG-Dokumentationsakte
   - nur vorsichtig,
   - nicht als Inkassotool,
   - eher Vorlagenversionierung, Registerakte, Beschwerdeboard, Auftraggeberexport.

Auswirkung auf die Roadmap:

Die Regulated-Finance-Roadmap wird erweitert:

- DORA,
- MiCA,
- ZAG/E-Geld,
- WpIG,
- KVG/AIF,
- Versicherer/EbAV,
- AML/GwG,
- Kreditzweitmarkt/Kreditdienstleister,
- REMIT/Energiehandel,
- Auslagerung,
- Beschwerde- und Aufsichtsexporte.

Kernaussage:

Kreditzweitmarkt ist ein besserer Treffer als Inkasso. Inkasso bleibt wegen RDG ein Warnfeld. Der richtige Verkaufssatz lautet auch hier: "Wir organisieren Register, Nachweise, Beschwerden, Versionen und Exporte. Wir betreiben keine Forderungen und bewerten keine Rechtslage."

## 71. Digitale Plattformen, Berufskraftfahrer und Professional-Services-Akten

Der weitere Lueckenscan zeigt drei sinnvolle Zusatzrichtungen:

- P2B-/Plattform-Governance und E-Commerce-Verbrauchertransparenz als technisches Nachweisprodukt,
- Berufskraftfahrerqualifikation, Fahrerqualifizierungsnachweise und Maut-/Fuhrparkbelege als Logistik-Vertiefung,
- Kanzlei-, WP-/StB-, GwG- und Qualitaetsmanagementakten fuer regulierte Professional-Services-Anbieter.

Diese Themen sind nicht gleich stark fuer den Start. Sie erweitern aber bestehende Cluster sauber: Plattformakte, Fuhrpark/Logistik und Regulated Professional Services.

### 71.1 P2B-, Marktplatz-, Ranking-, Beschwerde-, Kuendigungsbutton- und Verbrauchertransparenz-Akte

Quellenlage:

- EU Platform-to-Business Regulation 2019/1150: https://eur-lex.europa.eu/eli/reg/2019/1150/oj/eng
- EU-Kommission, Platform-to-business trading practices: https://digital-strategy.ec.europa.eu/en/policies/platform-business-trading-practices
- Bundesnetzagentur, P2B Regulation: https://www.bundesnetzagentur.de/EN/Areas/Digitalisation/P2B/start.html
- EUR-Lex, Online intermediation services summary: https://eur-lex.europa.eu/EN/legal-content/summary/online-intermediation-services-fairness-and-transparency-for-business-users.html
- EUR-Lex, Omnibus Directive EU 2019/2161: https://eur-lex.europa.eu/legal-content/EN/TXT/HTML/?uri=CELEX%3A32019L2161
- BGB Paragraf 312k Kuendigung von Verbrauchervertraegen im elektronischen Geschaeftsverkehr: https://www.gesetze-im-internet.de/bgb/__312k.html
- Preisangabenverordnung: https://www.gesetze-im-internet.de/pangv_2022/BJNR492110021.html
- EUR-Lex, Digital Omnibus proposal 2025: https://eur-lex.europa.eu/legal-content/EN/TXT/HTML/?uri=CELEX%3A52025PC0837

Warum das passt:

DSA und DAC7 sind bereits enthalten, aber die P2B-Welt als operative Akte fuer Plattformbetreiber war noch nicht sauber ausgearbeitet. P2B betrifft Online-Vermittlungsdienste und Online-Suchmaschinen im Verhaeltnis zu gewerblichen Nutzern. Es geht praktisch um AGB-Versionen, Rankinginformationen, Sperr-/Beschraenkungsgruende, Beschwerdemanagement, Mediationsinformationen, Datenzugang und Jahresinformationen zum internen Beschwerdesystem.

Zusaetzlich haben B2C-Shops und Plattformen Nachweisbedarf rund um Preisangaben, Rabatt-/Preisverlauf, Bewertungen/Rezensionen, Kuendigungsbutton, Widerruf, Checkout-Informationen und Verbraucherkommunikation. Das ist rechtlich sensibel, aber als technische Beleg- und Versionsakte sehr gut machbar.

Wichtige Nuance:

Die EU hat 2025 im Digital-Omnibus-Kontext eine Aufhebung beziehungsweise Vereinfachung der P2B-Regelung vorgeschlagen. Deshalb darf P2B nicht als langfristig unveraenderliches Hauptmodul verkauft werden. Es eignet sich aber als Plattform-Governance-Akte, die auch bei geaenderten Regeln wertvoll bleibt: Versionen, Beschwerden, Sperrungen, Rankingtexte, Nutzerkommunikation und Exporte bleiben reale Betriebsdaten.

Zielgruppen:

- Marktplatzbetreiber,
- Buchungsportale,
- Branchenplattformen,
- Vergleichsportale,
- Jobboersen,
- Creator-/Kurs-/Eventplattformen,
- Ferienwohnungs- und Mobilitaetsplattformen,
- B2C-Shops mit Bewertungen, Rabatten, Abo- oder Kuendigungsprozessen,
- SaaS-Anbieter mit Anbieterprofilen oder Partnerlisten.

Konkretes Produkt:

- Plattform-Governance-Akte:
  AGB-Versionen, Nutzergruppen, Anbieterbedingungen, Aenderungsmitteilungen, Freigaben, Veroeffentlichungsdatum.

- Ranking- und Sortierlogik-Nachweisordner:
  Beschreibung der wichtigsten Parameter, interne Freigabe, Aenderungshistorie, Screenshots.

- Sperr-/Beschraenkungs-/Kuendigungsakte:
  betroffener Anbieter, Massnahme, Grundkategorie, Kommunikation, Fristen, Widerspruch/Beschwerde, Freigabe.

- Beschwerdemanagement-Board:
  interne Beschwerden gewerblicher Nutzer, Antwortstatus, Bearbeitungsdauer, Export.

- Review-/Bewertungsakte:
  Bewertungsherkunft, Moderationsregeln, Manipulationshinweise, Loesch-/Sperrgruende, Versionen.

- Preis-/Rabatt-Nachweisakte:
  Preisverlauf, Kampagnen, Ausgangspreis, Screenshot, Produktbezug, Freigabe durch Shopteam.

- Kuendigungsbutton-/Abo-Prozessordner:
  Prozessscreenshots, E-Mail-Bestaetigungen, Testprotokolle, Supportfaelle, Versionen.

Mini-Tools:

- Ranking-Text-Versionierer,
- Anbieterbeschwerde-Log,
- Sperrentscheidung-Zeitlinie,
- Rabattkampagnen-Belegordner,
- Bewertungsmoderations-Archiv,
- Kuendigungsbutton-Testprotokoll,
- Export fuer Plattformrechtler, Datenschutz, Geschaeftsfuehrung oder Aufsicht.

Monetarisierung:

- kleine Plattform/Shop: 99-399 EUR/Monat,
- Marktplatz/Portal: 399-2.000 EUR/Monat,
- groessere Plattformgruppe: 2.000-15.000 EUR/Monat,
- Setup: 1.000-50.000 EUR fuer Altversionen, Templates und Prozessmapping,
- Partnerumsatz mit Plattformrechtlern, UX-/Shop-Agenturen, Bewertungssoftware, Trust-&-Safety-Beratern.

Warum es Geld bringt:

- Plattformen haben viele Anbieter- und Beschwerdevorgaenge,
- AGB-/Ranking-/Sperrlogik aendert sich,
- schlechte Dokumentation wird bei Streit teuer,
- passt zu DSA, DAC7, Short-Term-Rental-Plattformen und Trust-Center.

Grenze:

- keine Plattformrechtsberatung,
- keine Aussage, ob P2B/DSA/Omnibus im Einzelfall gilt,
- keine rechtliche Freigabe von AGB, Rankingtexten, Kuendigungsprozessen oder Bewertungen,
- kein Ersatz fuer Shop-Rechtspruefung,
- wegen Digital-Omnibus-Entwicklung als flexibles Plattform-Governance-Modul statt starres P2B-Modul bauen.

Bewertung:

Gutes digitales Spezialmodul. Nicht Startkern, aber sehr passend fuer Plattformbetreiber, die spaeter ohnehin DAC7/DSA/Short-Term-Rental/Trust-Themen brauchen. Als "Plattform-Governance-Akte" besser als eng "P2B-Tool".

### 71.2 Berufskraftfahrerqualifikations-, Fahrerqualifizierungsnachweis-, BKrFQG-, Maut- und Foerderakte

Quellenlage:

- BALM, Berufskraftfahrer-Qualifikations-Gesetz: https://www.balm.bund.de/DE/Themen/RechtsentwicklungRechtsvorschriften/Rechtsvorschriften/BerufskraftfahrerQualifikationsGesetz/berufskraftfahrerqualifikationsgesetz_node.html
- BKrFQG bei Gesetze im Internet: https://www.gesetze-im-internet.de/bkrfqg_2020/
- BKrFQG Paragraf 5 Weiterbildung: https://www.gesetze-im-internet.de/bkrfqg_2020/__5.html
- BKrFQG Paragraf 9 Anerkennung von Ausbildungsstaetten: https://www.gesetze-im-internet.de/bkrfqg_2020/__9.html
- BALM, Anwendungshinweise Berufskraftfahrerqualifikationsrecht: https://www.balm.bund.de/SharedDocs/Downloads/DE/Service/Schnellservice/Rechtsvorschriften/Berufskraftfahrer_Qualifikations_Gesetz/Anwendungshinweise_BKrFQG.pdf
- BALM, Berufskraftfahrerqualifikationsregister: https://www.balm.bund.de/SharedDocs/Pressemitteilungen/DE/2021/2021_06_10_PM_Einrichtung_eines_Berufskraftfahrerqualifikationsregisters_im_KBA.html
- Toll Collect, Lkw-Maut: https://www.toll-collect.de/
- Toll Collect, Mautbefreiung: https://www.toll-collect.de/de/toll_collect/rund_um_die_maut/mautbefreiung/mautbefreiung.html
- BALM Foerderprogramm Weiterbildung: https://www.balm.bund.de/DE/Foerderprogramme/Gueterkraftverkehr/Weiterbildung/weiterbildung_node.html
- BALM Foerderprogramm Ausbildung: https://www.balm.bund.de/DE/Foerderprogramme/Gueterkraftverkehr/Ausbildung/ausbildung_node.html

Warum das passt:

Fahrpersonal/Tachographen und Transportnachweise sind bereits enthalten. Noch nicht scharf genug war die eigene Akte fuer Berufskraftfahrerqualifikation, Fahrerqualifizierungsnachweise, Weiterbildung im Fuenfjahresrhythmus, Ausbildungsstaetten, Foerderprogramme, Mautbelege, Mautbefreiungsregistrierungen, Fahrzeugdaten und CO2-/Emissionsklassenbelege.

Transportbetriebe haben viele Fahrer, Fahrzeuge, Schulungen, Nachweise, Karten, Mautdaten und Auftraggeberanfragen. Das ist kein reines Rechtswissen, sondern ein Personal-/Fuhrpark-Datenraum.

Zielgruppen:

- Gueterkraftverkehrsunternehmen,
- Busunternehmen,
- Kurier-/Express-/Paketflotten,
- Bau- und Handwerksbetriebe mit schweren Fahrzeugen,
- Entsorger,
- Werkverkehr mit Fahrerpool,
- Fahrschulen und anerkannte Ausbildungsstaetten,
- Fuhrparkdienstleister.

Konkretes Produkt:

- Fahrerqualifikationsakte:
  Fahrer, Fahrerqualifizierungsnachweis, Grundqualifikation, Weiterbildung, Ablaufdaten, Uploads.

- Schulungs- und Modulkalender:
  Fuenfjahreszeitraum, absolvierte Module, Anbieter, Zertifikate, Erinnerungen.

- Ausbildungsstaetten-/Kursakte:
  Anerkennung, Kursunterlagen, Teilnehmerlisten, Zertifikate, Audit-/Behoerdenunterlagen.

- Maut- und Fahrzeugordner:
  Toll-Collect-Kundendaten, OBU, Fahrzeugdaten, Emissionsklasse, CO2-Klasse, Mautabrechnungen, Befreiungs-/Ausnahmebelege.

- Foerdermittelordner:
  BALM-Ausbildung/Weiterbildung, Antraege, Bewilligungen, Rechnungen, Teilnahmebelege, Verwendungsnachweise.

- Auftraggeberexport:
  Fahrerqualifikationen, Fahrzeuge, Versicherungen, Lizenzen, Schulungsnachweise, Fuhrparkstatus.

Mini-Tools:

- Fahrer-5-Jahres-Kalender,
- Fahrerqualifizierungsnachweis-Fristenliste,
- Maut-/Fahrzeugbelegordner,
- Foerderantrag-Unterlagenpaket,
- Fahrerakte-QR-Code,
- Export "Auftraggeber/Verkehrsbehoerde/BALM".

Monetarisierung:

- kleiner Fuhrpark: 49-199 EUR/Monat,
- mittleres Transportunternehmen: 199-999 EUR/Monat,
- grosser Fuhrpark/Busunternehmen: 1.000-5.000 EUR/Monat,
- Ausbildungsstaette/Fahrschule: 99-499 EUR/Monat,
- Setup: 500-25.000 EUR je Fahrer-/Fahrzeugdatenimport,
- Partnerumsatz mit Schulungsanbietern, Fahrschulen, Maut-/Fuhrparkdienstleistern, Versicherern.

Warum es Geld bringt:

- viele Fahrer und Fahrzeuge pro Kunde,
- wiederkehrende Fristen,
- Auftraggeber verlangen Nachweise,
- Foerdermittel erzeugen Belegbedarf,
- hohe Wechselkosten, sobald Fahrer-/Fahrzeugdaten gepflegt sind.

Grenze:

- keine Entscheidung, ob ein Fahrer konkret fahren darf,
- keine arbeits-/verkehrsrechtliche Beratung,
- keine Mautbefreiungsanerkennung,
- keine Foerdermittelzusage,
- keine Tachographen- oder Lenkzeitbewertung.

Bewertung:

Gutes Logistik-Add-on. Es sollte die bestehende Fuhrpark-/Fahrpersonalakte vertiefen und nicht als eigenes Hauptprodukt starten.

### 71.3 Kanzlei-, Steuerberater-, Wirtschaftspruefer-, GwG-, Qualitaetsmanagement- und Berufsgeheimnisakte

Quellenlage:

- Bundessteuerberaterkammer, Verlautbarung zur Qualitaetssicherung in der Steuerberaterkanzlei: https://www.bstbk.de/downloads/bstbk/recht-und-berufsrecht/fachinfos/BStBK_Verlautbarung-zur-Qualitaetssicherung-in-der-Steuerberaterkanzlei.pdf
- Bundessteuerberaterkammer, Muster-Verfahrensdokumentation ersetzendes Scannen: https://www.bstbk.de/downloads/bstbk/steuerrecht-und-rechnungslegung/fachinfos/BStBK_Muster-VerfD-ersetzendes-Scannen_v2.0-2019-11-29.pdf
- Wirtschaftsprueferkammer, Qualitaetskontrolle FAQ: https://www.wpk.de/beruf/qualitaetskontrolle/haeufige-fragen/
- Wirtschaftsprueferkammer, Hinweis Durchfuehrung und Dokumentation einer Qualitaetskontrolle: https://www.wpk.de/fileadmin/documents/Wissen/Praxishinweise/Hinweis_der_KfQK--Durchfuehrung_Dokumentation_Qualitaetskontrolle.pdf
- Wirtschaftsprueferkammer, Berufssatzung WP/vBP: https://www.wpk.de/fileadmin/documents/Wissen/Rechtsvorschriften/BS-WPvBP.pdf
- BRAK, Geldwaeschepraevention: https://www.brak.de/anwaltschaft/berufsrecht/geldwaeschepraevention/
- BRAK, Muster fuer Dokumentation Geldwaesche-Praeventionspflichten: https://www.brak.de/newsroom/newsletter/nachrichten-aus-berlin/2024/ausgabe-22-2024-v-30102024/brak-veroeffentlicht-muster-fuer-einfachere-dokumentation-von-geldwaesche-praeventionspflichten/
- BRAK, goAML-Registrierung fuer Verdachtsmeldungen: https://www.brak.de/newsroom/news/rechtzeitig-im-portal-fuer-verdachtsmeldungen-registrieren-1/

Warum das passt:

Steuerberater, Wirtschaftspruefer, Rechtsanwaelte und wirtschaftsnahe Kanzleien haben selbst Dokumentations-, Qualitaets-, Geldwaesche-, Fortbildungs-, Mandatsannahme-, Verfahrensdokumentations-, Verschwiegenheits-, IT- und Fristenwelten. Gleichzeitig sind sie perfekte Multiplikatoren, weil sie Mandanten in andere Aktenmodule bringen koennen.

Das ist aber heikel: Die Plattform darf weder Steuerberatung noch Rechtsberatung noch WP-Qualitaetsfreigabe leisten. Sie kann nur interne Kanzleiunterlagen, Versionen, Checklisten, Freigaben, Nachweise und Exporte organisieren.

Zielgruppen:

- Steuerberatungskanzleien,
- Lohnbueros,
- Wirtschaftsprueferpraxen,
- Rechtsanwaltskanzleien mit GwG-Bezug,
- multidisziplinare Kanzleien,
- Kanzleiverbuende,
- Buchhaltungs- und BPO-Dienstleister,
- Compliance-/Risk-Teams in Professional-Services-Firmen.

Konkretes Produkt:

- Kanzlei-QM-Akte:
  Prozesse, Verantwortlichkeiten, Checklisten, Versionen, interne Reviews, Massnahmen.

- GwG-/Mandatsannahmeordner:
  Risikoanalyse als Ablage, Mandatsdaten, Identifizierung, wirtschaftlich Berechtigte, Dokumentationsbogen, goAML-/FIU-Belege.

- Verfahrensdokumentationsordner:
  ersetzendes Scannen, Belegfluss, digitale Akten, Mandantenfreigaben, Prozessversionen.

- Qualitaetskontrollakte WP:
  QMS-Unterlagen, Risikobewertung, Pruefungsplanung, Reviewunterlagen, Feststellungen, Massnahmen.

- Berufsgeheimnis-/IT-/Dienstleisterakte:
  AVV, Subdienstleister, Zugriffe, TOMs, Verschwiegenheit, Berechtigungen, Mandantenfreigaben.

- Mandanten-Export-Portal:
  Kanzlei gibt Mandanten sichere Sammelordner fuer Belege, Nachweise, Betriebsakten und Pruefungsexporte.

Mini-Tools:

- Mandatsannahme-Checkliste als reine Ablage,
- GwG-Dokumentenboard,
- Verfahrensdokumentations-Versionierung,
- QMS-Finding-to-Evidence-Board,
- Kanzlei-Dienstleisterregister,
- Mandanten-Nachweisordner als White-Label-Zugriff.

Monetarisierung:

- kleine Kanzlei/Lohnbuero: 99-399 EUR/Monat,
- mittlere Kanzlei: 399-2.000 EUR/Monat,
- Kanzleiverbund/WP-Praxis: 2.000-10.000 EUR/Monat,
- White-Label-Mandantenportal: 2-20 EUR pro Mandant/Monat oder Paketpreise,
- Setup: 1.000-50.000 EUR.

Warum es Geld bringt:

- Kanzleien haben Vertrauensproblem und Dokumentationsdruck,
- Kanzleien koennen Mandanten mitbringen,
- Mandantenportale erzeugen Multiplikation,
- guter Partnerkanal fuer alle anderen Aktenmodule,
- hohe Wechselkosten bei aufgebautem Mandanten-/Prozessdatenraum.

Grenze:

- keine Steuerberatung,
- keine Rechtsberatung,
- keine GwG-Fallbewertung,
- keine WP-Qualitaetskontrollfreigabe,
- keine automatisierte Mandatsannahmeentscheidung,
- sehr hohe Datenschutz-, Berufsgeheimnis- und Berechtigungsanforderungen.

Bewertung:

Kommerziell stark, aber nicht als erster Markt. Es ist ein spaeter Multiplikator: Wenn die Plattform steht, koennen Steuerberater, Lohnbueros und WP-nahe Dienstleister Mandantenakten verkaufen oder verwalten. Besonders stark als Reseller-/White-Label-Schiene.

### 71.4 Bewertung dieser Runde

Neue Treffer nach Qualitaet:

1. Kanzlei-/Professional-Services-Akte
   - strategisch sehr stark wegen Multiplikatorwirkung,
   - gute monatliche Preise,
   - hohe Anforderungen an Datenschutz und Berechtigungen,
   - spaeter als Partner-/White-Label-Kanal.

2. P2B-/Plattform-Governance-Akte
   - guter Digital-Vertical,
   - passt zu DSA/DAC7/Short-Term-Rental,
   - wegen Digital-Omnibus als flexibles Governance-Modul statt starrem Rechtsmodul.

3. Berufskraftfahrer-/BKrFQG-/Maut-Akte
   - gutes Logistik-Add-on,
   - viele Fahrer/Fahrzeuge,
   - stark fuer Retention,
   - nicht Hauptfokus, aber solide.

Auswirkung auf die Roadmap:

- Plattform- und Digitalakte bekommt P2B/Governance, Ranking, Bewertungen, Beschwerden und Kuendigungs-/Preisnachweise.
- Transport-/Fuhrparkakte bekommt Fahrerqualifikation, BKrFQG, Maut, Foerderung.
- Partnerkanal bekommt Kanzlei-/WP-/StB-Akte als spaeteren Multiplikator.

Kernaussage:

Die neuen Treffer bestaetigen die Richtung: Das groesste Geld liegt nicht in einer weiteren "Pflichtenliste", sondern in Rollen mit laufenden Nachweisen: Plattformbetreiber, Fuhrparkleiter, Kanzleien, Pruefer, Verwalter, Finanz-/Energieunternehmen. Die Plattform muss deshalb vor allem Versionen, Rollen, Beschwerden, Fristen, Exporte und Partnerzugriffe perfekt koennen.

## 72. Security-, Rohstoff- und Governance-Restluecke: Konfliktminerale, Geheimschutz, Satellitendaten und Genossenschaften

Der weitere Tiefenscan zeigt vier Luecken, die nicht in den MVP-Kern gehoeren, aber spaeter gutes Geld oder wichtige Spezialisierung bringen koennen:

- Konfliktminerale/3TG/DEKSOR als Rohstoff- und Lieferkettenakte,
- Geheimschutz/Verschlusssachen/Sicherheitsueberpruefungen als Defense- und Public-Sector-Supplier-Akte,
- Satellitendatensicherheit als extrem kleine, aber hochpreisige Space-/Geodata-Akte,
- Genossenschaftspruefung, Pruefverband, Mitglieder- und Gremienakte als Governance-Longtail.

### 72.1 Konfliktminerale-, 3TG-, CAHRA-, DEKSOR- und Responsible-Minerals-Akte

Quellenlage:

- EU-Kommission, Conflict Minerals Regulation: https://policy.trade.ec.europa.eu/development-and-sustainability/conflict-minerals-regulation_en
- EUR-Lex, Regulation EU 2017/821: https://eur-lex.europa.eu/eli/reg/2017/821/oj/eng
- CSR in Deutschland, EU-Konfliktmineraleverordnung: https://www.csr-in-deutschland.de/DE/Gesetze/Weitere-EU-Gesetzgebung/EU-Verordnung-Konfliktminerale/art-eu-verordnung-konfliktminerale.html
- BGR/DEKSOR: https://www.bgr.bund.de/DE/BGR/Deksor/deksor_node.html
- BGR/DEKSOR FAQ: https://www.bgr.bund.de/DE/BGR/Deksor/FAQ/faq_node.html
- MinRohSorgG bei Gesetze im Internet: https://www.gesetze-im-internet.de/minrohsorgg/MinRohSorgG.pdf
- OECD Responsible Mineral Supply Chains: https://www.oecd.org/en/topics/sub-issues/due-diligence-guidance-for-responsible-business-conduct/responsible-mineral-supply-chains.html
- OECD Due Diligence Guidance: https://www.oecd.org/en/publications/2016/04/oecd-due-diligence-guidance-for-responsible-supply-chains-of-minerals-from-conflict-affected-and-high-risk-areas_g1g65996.html
- CAHRA List: https://www.cahraslist.net/

Warum das passt:

Konfliktminerale waren bisher nur indirekt ueber Lieferkette, Batterien, Rohstoff- und Due-Diligence-Themen enthalten. Die EU-Konfliktmineraleverordnung ist aber ein eigenes, dokumentenstarkes Feld fuer Unionseinfuhrer von Zinn, Tantal, Wolfram, deren Erzen und Gold. In Deutschland ist DEKSOR bei der BGR als Kontrollstelle relevant. CSR in Deutschland weist darauf hin, dass Sorgfaltspflichten ab bestimmten Mengenschwellen greifen.

Das ist kein Massenmarkt. BGR/DEKSOR-Informationen deuten auf eine kleine Zahl direkt verpflichteter deutscher Unionseinfuhrer. Aber die Wertdichte ist hoch, und downstream fragen Kunden ebenfalls 3TG-/CMRT-/Responsible-Minerals-Daten ab.

Zielgruppen:

- Importeure von Zinn, Tantal, Wolfram und Gold,
- Metallhaendler,
- Schmelz-/Huetten-nahe Unternehmen,
- Elektronik- und Automotive-Zulieferer mit 3TG-Bezug,
- Schmuck-/Gold-/Edelmetallhandel mit Importbezug,
- Batterie-, Maschinen- und Hightech-Zulieferer,
- Lieferketten-/ESG-Teams,
- Unternehmen, die CMRT-/Responsible-Minerals-Frageboegen beantworten muessen.

Konkretes Produkt:

- 3TG-Importakte:
  Warengruppe, KN-/Zollcode, Importmenge, Lieferant, Ursprungsland, Charge, Importbeleg, Zollbezug.

- CAHRA-/Herkunftsordner:
  Quellenstand, CAHRA-Snapshot, Lieferantenangaben, Ursprungsdokumente, Risiko-Hinweise als Upload.

- Lieferanten- und Huetten-/Raffinerieakte:
  Lieferant, Smelter/Refiner, Zertifikate, Auditnachweise, RMI-/OECD-nahe Unterlagen, Versionen.

- OECD-5-Step-Nachweisordner:
  Managementsystem, Risikobewertung als vom Nutzer/Berater gepflegte Ablage, Risikomassnahmen, Audit, Bericht.

- DEKSOR-Kontrollordner:
  Behoerdenkommunikation, Anfragen, Unterlagenliste, Fristen, Antwortpaket.

- Downstream-Fragebogenordner:
  CMRT/EMRT, Kundenvorlagen, Lieferantenerklaerungen, Jahresversionen.

Mini-Tools:

- 3TG-Importliste,
- Lieferantenfragebogen-Inbox,
- CAHRA-Stand-Ablage,
- Smelter-/Refiner-Dokumentenordner,
- DEKSOR-Exportpaket,
- Kundenfragebogen-Export.

Monetarisierung:

- downstream Lieferant: 99-499 EUR/Monat,
- direkter Unionseinfuhrer: 499-2.500 EUR/Monat,
- Konzern-/Lieferantennetz: 2.500-15.000 EUR/Monat,
- Setup: 2.000-75.000 EUR fuer Datenimport, Lieferantenstruktur und historische Frageboegen,
- Partnerumsatz mit ESG-, Rohstoff-, Zoll- und Lieferkettenberatern.

Warum es Geld bringt:

- hohe Unsicherheit bei wenigen, aber zahlungsfaehigen Kunden,
- Kundendruck reicht weiter als der direkte gesetzliche Scope,
- gute Naehe zu Batteriepass, Forced Labour, EUDR, VSME, Lieferantenfrageboegen und Produktakten,
- wenig generische Konkurrenz im deutschsprachigen SEO-Longtail.

Grenze:

- keine Entscheidung, ob Mengenschwellen erreicht sind,
- keine Rohstoff-/Herkunftsrisiko-Fachbewertung,
- keine Aussage "konfliktfrei",
- keine Lieferantenfreigabe,
- keine DEKSOR-/Behoerdenantwort ohne Nutzer-/Beraterfreigabe.

Bewertung:

Sehr guter Spezialbaustein fuer Produkt-/Lieferkettenakte. Nicht gross genug fuer den Start, aber stark als Premium-ESG-/Rohstoffmodul.

### 72.2 Geheimschutz-, Verschlusssachen-, SUEG-, Sicherheitsbevollmaechtigten- und Defense-Supplier-Akte

Quellenlage:

- BMWE, Sicherheit in der Wirtschaft: https://www.bundeswirtschaftsministerium.de/Redaktion/DE/Artikel/Wirtschaft/sicherheit-in-der-wirtschaft.html
- BMWK/BMWE Sicherheitsforum, Geheimschutz in der Wirtschaft: https://www.bmwk-sicherheitsforum.de/ghb/start/
- Bundesamt fuer Verfassungsschutz, Geheim- und Sabotageschutz: https://www.verfassungsschutz.de/DE/themen/geheim-und-sabotageschutz/geheim-und-sabotageschutz_node.html
- Bundesamt fuer Verfassungsschutz, Sicherheitsueberpruefung: https://www.verfassungsschutz.de/DE/themen/geheim-und-sabotageschutz/die-sicherheitsueberpruefung/Die-Sicherheitsueberpruefung_node.html
- BSI, Geheimschutz: https://www.bsi.bund.de/DE/Themen/Oeffentliche-Verwaltung/Geheimschutz/geheimschutz_node.html
- BMI, staatlicher Geheimschutz: https://www.bmi.bund.de/DE/themen/sicherheit/spionageabwehr-wirtschafts-und-geheimschutz/staatlicher-geheimschutz/staatlicher-geheimschutz-node.html
- BMWE Sicherheitsforum, FAQ Geheimschutz in der Wirtschaft: https://www.bmwk-sicherheitsforum.de/ghb/allgemeines/download/222%2C6%2C0%2C1%2C0.html
- BMWE Sicherheitsforum, unterstuetzende Informationen fuer Unternehmen: https://www.bmwe-sicherheitsforum.de/ghb/allgemeines/download/644%2C2308%2C0%2C1%2C0.html

Warum das passt:

Geheimschutz fehlte bisher fast komplett. Das ist ein sehr spezielles, aber hochpreisiges Feld fuer Unternehmen, die mit Verschlusssachen, sicherheitsempfindlichen Taetigkeiten oder VS-Auftraegen arbeiten. Quellen von BMWE/BMWK-Sicherheitsforum, BfV und BSI zeigen personelle, organisatorische, bauliche, technische und verfahrensbezogene Geheimschutzanforderungen.

Fuer die Plattform ist das nur dann passend, wenn die Grenze extrem klar ist: In einer normalen SaaS duerfen keine Verschlusssachen gespeichert werden. Das Produkt waere zuerst ein Metadaten-, Fristen-, Rollen- und Nachweisraum fuer offene Unterlagen und Verfahren. VS-Inhalte selbst duerfen nur in dafuer freigegebener Infrastruktur verarbeitet werden.

Zielgruppen:

- Defense- und Wehrtechnik-Zulieferer,
- Luft- und Raumfahrtunternehmen,
- IT-/Cyber-Dienstleister fuer Behoerden,
- KRITIS- und Sicherheitsdienstleister,
- Beratungs- und Ingenieurfirmen mit VS-Auftraegen,
- Industrieunternehmen mit oeffentlichen Sicherheitsauftraegen,
- Sicherheitsbevollmaechtigte,
- Projektleiter in sicherheitsempfindlichen Projekten.

Konkretes Produkt:

- Geheimschutz-Basisakte:
  Aufnahmeverfahren, Vertrag/Betreuung, Sicherheitsbescheid-Metadaten, Ansprechpartner, Sicherheitsbevollmaechtigter, Stellvertretung.

- Personen- und SUEG-Fristenakte:
  Person, Rolle, Pruefart als Nutzerangabe, Status, Ablauf-/Wiedervorlage, offene Unterlagen, ohne Ergebnisbewertung.

- VS-Auftrags-Metadatenakte:
  Auftrag, Geheimhaltungsgrad als Nutzerangabe, Bedarfstraeger, berechtigte Personen, Fristen, Uebergabe-/Rueckgabeprotokolle als Metadaten.

- Sicherheitsmassnahmen-Ordner:
  Schulungen, Belehrungen, Zutrittskonzepte, Raum-/IT-Nachweise, Dienstleister, Wartung, Auditlog.

- Vorfall- und Meldeordner:
  Ereignis, Sofortmassnahme, Verantwortlicher, Kommunikationsnachweise, Export fuer Sicherheitsbevollmaechtigten oder Behoerde.

- Partner- und Fremdfirmenakte:
  Zugangsberechtigungen, Unterweisungen, Beauftragungen, Sicherheitsstatus als Metadaten.

Mini-Tools:

- SUEG-Fristenliste,
- Sicherheitsbevollmaechtigter-Dashboard,
- Belehrungs- und Schulungsnachweisordner,
- VS-Auftrags-Metadatenregister,
- Sicherheitsmassnahmen-Checkliste,
- Export fuer Geheimschutzbetreuung, internen Sicherheitsverantwortlichen oder Auditor.

Monetarisierung:

- kleiner VS-naher Dienstleister: 499-2.000 EUR/Monat,
- Defense-/Aerospace-Zulieferer: 2.000-10.000 EUR/Monat,
- groessere Gruppe: 10.000-50.000 EUR/Monat,
- Setup: 10.000-250.000 EUR,
- Partnerumsatz mit Geheimschutz-, IT-Sicherheits-, TISAX-, BSI- und Defense-Beratern.

Warum es Geld bringt:

- hohe Eintrittsbarriere,
- sehr hohe Zahlungsbereitschaft,
- wenig Standardsoftware fuer kleine und mittlere Zulieferer,
- starker Zusammenhang mit Defense-Boom, Cyber, KRITIS, Luftfahrt, Geheimschutz und oeffentlichen Auftraegen.

Grenze:

- keine Verschlusssachen in Standard-SaaS speichern,
- keine Sicherheitsfreigabeentscheidung,
- keine SUEG-Bewertung,
- keine Geheimschutzberatung ersetzen,
- keine Bewertung, ob Massnahmen ausreichend sind,
- nur Metadaten, offene Nachweise, Fristen, Rollen, Exporte und Partnerprozesse.

Bewertung:

Eines der besten spaeteren Premiumfelder, aber nicht MVP-faehig ohne Sicherheitsarchitektur. Wenn spaeter Enterprise-/On-Prem-/Private-Cloud-Faehigkeit steht, kann das ein extrem wertvoller Vertical werden.

### 72.3 Satellitendatensicherheits-, Erdfernerkundungs-, SatDSiG- und Geodata-Provider-Akte

Quellenlage:

- BAFA, Satellitendatensicherheit: https://www.bafa.de/DE/Aussenwirtschaft/Satellitendatensicherheit/satellitendatensicherheit_node.html
- SatDSiG bei Gesetze im Internet: https://www.gesetze-im-internet.de/satdsig/BJNR259000007.html
- SatDSiG Paragraf 3 Genehmigung: https://www.gesetze-im-internet.de/satdsig/__3.html
- BMWE, Satellitendatensicherheitsverordnung: https://www.bundeswirtschaftsministerium.de/Redaktion/DE/Downloads/Gesetz/satdsiv.html
- BSI TR-03140: https://www.bsi.bund.de/DE/Themen/Unternehmen-und-Organisationen/Standards-und-Zertifizierung/Technische-Richtlinien/TR-nach-Thema-sortiert/tr03140/tr-03140.html

Warum das passt:

Das ist extrem klein, aber sehr dokumentenintensiv und hochpreisig. BAFA beschreibt das SatDSiG als Instrument zum Schutz sicherheits- und aussenpolitischer Interessen im Zusammenhang mit Verbreitung hochwertiger Erdfernerkundungsdaten. Es gibt Betreiber, Datenanbieter, Genehmigungen/Zulassungen, Sicherheitsverfahren, technische und organisatorische Massnahmen, Sensitivitaetspruefungen, Kundenanfragen und BAFA-Kommunikation.

Zielgruppen:

- Betreiber hochwertiger Erdfernerkundungssysteme,
- Anbieter von Satelliten-/Erdbeobachtungsdaten,
- Geodatenplattformen,
- Space-Startups,
- Defense-/Security-Analytics-Anbieter,
- Forschungs-/Industriepartner mit sensiblen Geodaten,
- Fremdfirmen mit sicherheitsempfindlichen Taetigkeiten in diesem Umfeld.

Konkretes Produkt:

- SatDSiG-Betreiberakte:
  Genehmigung, Betreiberrolle, Systemdaten als Metadaten, Sicherheitskonzept, Ansprechpartner.

- Datenanbieter-/Zulassungsakte:
  Zulassung, Datenkategorien, Kundenprozesse, technische Verfahren, Unterlagen, BAFA-Kommunikation.

- Kundenanfrage- und Sensitivitaetsprozessakte:
  Anfrage, Datentyp, Pruefschritte als vom Nutzer gepflegter Workflow, Ergebnisdokument, Freigabe, BAFA-Anfrage falls erforderlich.

- Sicherheitsueberpruefungs- und Fremdfirmenordner:
  Personen, Rollen, Unterlagenstatus, Metadaten, Fristen.

- Audit-/Kontrollordner:
  technische Richtlinien, TOMs, Nachweise, Testprotokolle, Versionen, Export.

Mini-Tools:

- Kundenanfrage-Timeline,
- SatDSiG-Workflow-Ordner,
- BAFA-Anfragepaket,
- TR-03140-Nachweisordner,
- Geodata-Customer-Risk-Log als Ablage, ohne eigene Fachentscheidung.

Monetarisierung:

- kleines Space-/Geodata-Unternehmen: 1.000-5.000 EUR/Monat,
- Betreiber/Datenanbieter: 5.000-25.000 EUR/Monat,
- Enterprise/Defense-nahe Struktur: 25.000-100.000 EUR/Monat,
- Setup: 10.000-250.000 EUR.

Warum es Geld bringt:

- sehr kleine Zielgruppe, aber hoher Wert,
- kaum Standardtools,
- starke Naehe zu Geheimschutz, Exportkontrolle, Defense und Geodata-Plattformen,
- sehr hoher Dokumentations- und Freigabedruck.

Grenze:

- keine Sensitivitaetsentscheidung als eigene Plattformleistung,
- keine BAFA-Erlaubnisprognose,
- keine Speicherung sensibler Daten in Standard-SaaS,
- keine sicherheitspolitische Bewertung,
- nur Workflow, Nachweis, Versionierung, Metadaten und Export.

Bewertung:

Kein Startthema. Aber als Premium-Spezialakte fuer Space-/Geodata-Unternehmen sehr interessant, wenn die Plattform spaeter Hochsicherheits-/Private-Cloud-Optionen hat.

### 72.4 Genossenschafts-, Pruefverband-, Mitglieder-, Gremien- und Pruefungsakte

Quellenlage:

- GenG bei Gesetze im Internet: https://www.gesetze-im-internet.de/geng/
- GenG Paragraf 53 Pflichtpruefung: https://www.gesetze-im-internet.de/geng/__53.html
- GenG Paragraf 53a erstmalige Pflichtpruefung/vereinfachte Pruefung: https://www.gesetze-im-internet.de/geng/__53a.html
- GenG Paragraf 54 Pflichtmitgliedschaft im Pruefungsverband: https://www.gesetze-im-internet.de/geng/__54.html
- GenG Paragraf 55 Pruefung durch den Verband: https://www.gesetze-im-internet.de/geng/__55.html
- GenG Paragraf 63e Qualitaetskontrolle der Pruefungsverbaende: https://www.gesetze-im-internet.de/geng/__63e.html

Warum das passt:

Genossenschaften waren bisher nur am Rand als Vereine/Stiftungen/Anbauvereinigungen sichtbar. Dabei ist die eingetragene Genossenschaft eine eigene Governance-Welt: Mitglieder, Geschaeftsanteile, Vorstand, Aufsichtsrat, General- oder Vertreterversammlung, Satzung, Pruefverband, Pflichtpruefungen, Jahresabschluss, Beschluesse, Protokolle und Pruefberichte.

Das ist weniger spektakulaer als Defense oder FinReg, aber praktisch und dauerhaft. Viele neue Energie-, Wohn-, Pflege-, Plattform-, Agrar-, Einkaufs- und Sozialgenossenschaften haben mit Unterlagenchaos zu kaempfen.

Zielgruppen:

- Wohnungsgenossenschaften,
- Energiegenossenschaften,
- Agrar- und Einkaufsgenossenschaften,
- Sozial- und Pflegegenossenschaften,
- Plattform-/Creator-/Mobility-Genossenschaften,
- neue Gruendungsgenossenschaften,
- Pruefungsverbaende und Berater als Partner.

Konkretes Produkt:

- Genossenschafts-Stammdatenakte:
  Satzung, Register, Pruefverband, Organe, Bank, Versicherungen, Steuerberater, Ansprechpartner.

- Mitglieder- und Anteilsakte:
  Mitgliederliste, Beitritte, Kuendigungen, Geschaeftsanteile, Einzahlungen, Kommunikation als Upload/Metadaten.

- Gremien- und Beschlussakte:
  Vorstand, Aufsichtsrat, Generalversammlung, Vertreterversammlung, Einladung, Tagesordnung, Protokoll, Beschluss, Fristen.

- Pruefungsordner:
  Pruefverband, Pruefungsankuendigung, Unterlagenliste, Jahresabschluss, Buchhaltungsunterlagen, Pruefbericht, Massnahmen.

- Gruendungs-/Aufnahmeordner:
  Gruendungsunterlagen, Pruefverband, Register, Notar, Bank, Steuer, Mitglieder.

- Mitgliederkommunikations- und Datenschutzordner:
  Newsletter, Einwilligungen, Mitgliederinformationen, Auskunfts-/Aenderungsanfragen.

Mini-Tools:

- Mitgliederlisten-Import,
- Geschaeftsanteile-Status,
- Gremienkalender,
- Pruefverband-Exportpaket,
- Beschluss- und Protokollarchiv,
- Vorstandswechsel-Paket.

Monetarisierung:

- kleine Genossenschaft: 29-99 EUR/Monat,
- Wohnungs-/Energie-/Agrargenossenschaft: 199-999 EUR/Monat,
- groessere Genossenschaft/Verbund: 1.000-5.000 EUR/Monat,
- Pruefverband-/Beraterportal: 499-5.000 EUR/Monat,
- Setup: 500-50.000 EUR je Mitglieder-/Dokumentenbestand.

Warum es Geld bringt:

- dauerhafte Mitglieder- und Gremienarbeit,
- Pruefungen wiederholen sich,
- Vorstandwechsel erzeugt Chaos,
- wenig sexy, aber sehr klebrig,
- guter Longtail fuer "Genossenschaft Pruefung Unterlagen", "Pruefverband Unterlagen", "Mitgliederliste Genossenschaft verwalten".

Grenze:

- keine Genossenschaftsrechtsberatung,
- keine Steuer-/Bilanzberatung,
- keine Pruefungsfreigabe,
- keine Aussage, ob Satzung, Beschluss oder Mitgliedschaft rechtlich wirksam ist,
- nur Akte, Fristen, Versionen, Rollen, Exporte.

Bewertung:

Gutes Longtail-/Governance-Modul. Nicht MVP-Kern, aber spaeter als "Organisationsakte" fuer Genossenschaften, Vereine und Stiftungen sinnvoll.

### 72.5 Bewertung dieser Runde

Neue Treffer nach Qualitaet:

1. Geheimschutz-/Defense-Supplier-Akte
   - hoechste Ticketchance dieser Runde,
   - aber nur mit sehr starker Sicherheitsarchitektur,
   - Standard-SaaS darf keine VS-Inhalte speichern.

2. Konfliktminerale-/3TG-/DEKSOR-Akte
   - bester Fit fuer Produkt-/Lieferkettenakte,
   - wenig breiter Markt, aber gute Preise und wenig pSEO-Konkurrenz,
   - starker Anschluss an Batterie, EUDR, Forced Labour, VSME und Kundenfrageboegen.

3. Genossenschafts-/Pruefungsakte
   - breiter als gedacht,
   - niedrigere Preise,
   - sehr klebrig bei Mitglieder- und Gremiendaten,
   - gut als spaeteres Governance-Longtail-Paket.

4. Satellitendatensicherheitsakte
   - winziger Markt,
   - sehr hohe Spezialpreise,
   - nur fuer spaetere High-Security-/Private-Cloud-Roadmap.

Auswirkung auf die Roadmap:

- Produkt-/Lieferkettenwelt bekommt Responsible Minerals/3TG.
- Security-/Defense-Roadmap bekommt Geheimschutz, SUEG, VS-Metadaten und Satellitendatensicherheit.
- Organisationswelt bekommt Genossenschaftspruefung neben Vereins-/Stiftungsakte.

Kernaussage:

Die Suche bringt jetzt fast nur noch Spezialverticals. Das ist ein gutes Zeichen: Der normale KMU-/Produkt-/Immobilien-/Logistik-/Finanz-/Energie-Kern ist bereits breit abgedeckt. Neue Themen sollten ab jetzt nicht mehr den Start vergroessern, sondern als Roadmap-Schubladen fuer spaetere Premium- oder Longtail-Pakete einsortiert werden.

## 73. Nachscan: Energieentlastung, Emittenten, Tax-Disclosure und politische Werbung

Der naechste Kontrollscan zeigt keine neuen Massenmodule mehr, aber vier Bereiche mit Geldwert, weil sie Fristen, Nachweise, Freigaben, Portaluebermittlungen und externe Pruefer/berater zusammenbringen. Alle vier sind nicht als Rechts-/Steuerurteil zu bauen, sondern als Akten-, Fristen-, Export- und Freigabeplattform.

### 73.1 Stromsteuer-, Energiesteuer-, EnSTransV-, Beihilfe- und Entlastungsakte

Energieintensive Unternehmen, Produktionsbetriebe und Betriebe mit komplexen Energieverbraeuchen koennen mit Stromsteuer, Energiesteuer, Entlastungsantraegen, Beihilfe-/Transparenzmeldungen, Zaehlerdaten, Rechnungen, Bescheiden, Nachweisen und Beraterfreigaben arbeiten. Das ist kein allgemeines "Pflichtenwissen", sondern ein sehr praktischer Akten- und Fristenfall: Belege sammeln, Antraege vorbereiten, Bescheide ablegen, Portaluebermittlungen dokumentieren, Folgejahre erinnern.

Quellen:

- Zoll Stromsteuer: https://www.zoll.de/DE/Fachthemen/Steuern/Verbrauchsteuern/Strom/strom_node.html
- Zoll Energiesteuer: https://www.zoll.de/DE/Fachthemen/Steuern/Verbrauchsteuern/Energie/energie_node.html
- Zoll Steuerbeguenstigung/Entlastung Energie/Strom: https://www.zoll.de/DE/Fachthemen/Steuern/Verbrauchsteuern/Strom/Steuerbeguenstigung/steuerbeguenstigung_node.html
- Zoll EnSTransV: https://www.zoll.de/DE/Fachthemen/Steuern/Verbrauchsteuern/Steuerbeguenstigung/Anzeige-Erklaerungspflichten/anzeige-erklaerungspflichten_node.html
- EnSTransV bei Gesetze im Internet: https://www.gesetze-im-internet.de/enstransv/

Zielgruppen:

- produzierendes Gewerbe,
- energieintensive Mittelstaendler,
- Landwirtschaft, Gartenbau und Kuehl-/Lagerbetriebe,
- Betriebe mit BHKW, KWK, eigenerzeugtem Strom oder mehreren Zaehlern,
- Filialisten mit vielen Verbrauchsstellen,
- Energieberater, Steuerberater und Industriekanzleien als Multiplikatoren.

Was wir anbieten koennen:

- Energieverbrauchs- und Zaehlerakten,
- Rechnungs-/Lieferantenordner je Standort,
- Entlastungsjahr-Akte mit Formularentwuerfen, Belegen, Bescheiden und Fristen,
- EnSTransV-Meldeordner mit Status und Uebermittlungsnachweisen,
- Beraterfreigabe-Workflow,
- Exportpaket fuer Steuerberater, Energieberater, Hauptzollamt oder interne Revision,
- Wiederverwendung der Vorjahresdaten als Arbeitskopie.

Warum es Geld bringt:

- Entlastungen koennen wirtschaftlich relevant sein,
- viele Belege liegen verstreut bei Finance, Technik, Einkauf und Berater,
- Antraege und Transparenzmeldungen wiederholen sich,
- Berater wollen strukturierte Unterlagen,
- gute SEO-Nischen: "Stromsteuer Entlastung Unterlagen", "EnSTransV Nachweise", "Energiesteuer Belege".

Preislogik:

- kleiner Betrieb: 99-299 EUR/Monat,
- produzierender Mittelstand: 299-1.500 EUR/Monat,
- energieintensiver Betrieb/Gruppe: 1.500-7.500 EUR/Monat,
- Beraterportal: 499-5.000 EUR/Monat,
- Setup: 1.000-50.000 EUR je Standort-/Zaehler-/Vorjahresdatenbestand.

Grenze:

- keine Steuerberatung,
- keine Entscheidung, ob eine Entlastung zusteht,
- keine Beihilfe-/Schwellenwertberechnung als eigenes Urteil,
- keine Formularabgabe ohne ausdrueckliche Nutzer-/Beraterfreigabe,
- nur Datensammlung, Fristen, Belege, Versionen und Export.

Bewertung:

Sehr gutes Spezialmodul. Es passt besonders zu Energieaudit/EnEfG, Rechenzentrum, Produktionsbetrieben, Foerdermitteln und Steuerberater-/Energieberater-Partnern. Nicht Startkern, aber ein starker Premium-Zweig mit echtem Euro-Nutzen.

### 73.2 Kapitalmarkt-, Emittenten-, MAR-, Insiderlisten-, Directors-Dealing- und ESEF-Akte

Die Datei hat Finanzdienstleister, WpIG und KVG bereits stark abgedeckt. Nicht scharf genug war die Emittentenwelt: boersennotierte Gesellschaften, Anleiheemittenten und kapitalmarktorientierte Mittelstaendler brauchen Prozesse und Nachweise fuer Insiderlisten, Ad-hoc-Prozesse, Directors Dealings, Finanzkalender, Regelpublizitaet, Jahresfinanzberichte, ESEF-Unterlagen, IR-Freigaben und Veroeffentlichungsbelege.

Quellen:

- BaFin Emittentenleitfaden: https://www.bafin.de/DE/Aufsicht/BoersenMaerkte/Emittentenleitfaden/emittentenleitfaden_node.html
- BaFin Marktmissbrauchsverordnung: https://www.bafin.de/DE/Aufsicht/BoersenMaerkte/Marktmissbrauch/marktmissbrauch_node.html
- BaFin Directors Dealings: https://www.bafin.de/DE/Aufsicht/BoersenMaerkte/Emittentenleitfaden/Modul3/Kapitel3/Kapitel3_7/Kapitel3_7_node.html
- BaFin Regelpublizitaet: https://www.bafin.de/DE/Aufsicht/BoersenMaerkte/Emittentenleitfaden/Modul3/Kapitel3/Kapitel3_2/Kapitel3_2_node.html
- ESMA ESEF: https://www.esma.europa.eu/issuer-disclosure/electronic-reporting
- Marktmissbrauchsverordnung EUR-Lex: https://eur-lex.europa.eu/legal-content/DE/TXT/?uri=CELEX%3A32014R0596

Zielgruppen:

- boersennotierte AGs und SEs,
- Scale-/SME-Emittenten,
- Anleiheemittenten,
- IR-Abteilungen, CFO-Bueros und Legal-Teams,
- Wirtschaftsrechtskanzleien, IR-Agenturen und Corporate-Secretarial-Dienstleister,
- Pre-IPO-Unternehmen als spaeterer Upsell.

Was wir anbieten koennen:

- Insiderlisten-Akte mit Personen, Projekten, Versionen und Kenntnisnahmebelegen,
- Directors-Dealing-Sammelordner mit Meldungen, Belegen und Fristen,
- Ad-hoc-Entscheidungsakte als Protokoll- und Freigaberaum,
- Finanzkalender und Regelpublizitaetsfristen,
- ESEF-/Jahresfinanzbericht-Datenraum,
- Veroeffentlichungs-/Einreichungsnachweise,
- Board-/IR-/Legal-Freigabeworkflow,
- Export fuer BaFin-nahe Pruefung, Abschlusspruefer, Rechtsberater oder Aufsichtsrat.

Warum es Geld bringt:

- hoher Ticketwert pro Kunde,
- sehr hoher Reputationsdruck,
- wenige Kunden reichen fuer starken Umsatz,
- Berater/IR-Agenturen koennen als Wiederverkaeufer dienen,
- die Plattform verkauft Ordnung und Nachweis, nicht Kapitalmarktrecht.

Preislogik:

- kleiner Emittent: 499-2.500 EUR/Monat,
- mittelgrosser Emittent: 2.500-10.000 EUR/Monat,
- Gruppe/mehrere Emissionen: 10.000-25.000 EUR/Monat,
- Setup: 5.000-100.000 EUR fuer historische Listen, Rollen, Kalender, Datenraum und Freigabeprozesse.

Grenze:

- keine Entscheidung, ob eine Information Insiderinformation ist,
- keine Ad-hoc-Rechtsbewertung,
- keine Marktmissbrauchs-/Manipulationsanalyse,
- keine ESEF-Tagging-Garantie,
- Freigabe immer durch Emittent, Rechtsberater oder Pruefer.

Bewertung:

Sehr hohes Ticket, aber kleiner Markt und juristisch sensibel. Als Private-/Enterprise-Datenraum mit klarer Beraterfreigabe stark, fuer pSEO und Massenstart ungeeignet.

### 73.3 DAC6-, Pillar-Two-, Mindeststeuer-, Tax-Disclosure- und Steuerabteilungsakte

Bei internationalen Gruppen ist Steuerdokumentation ein eigenes Beleguniversum: CbCR ist bereits enthalten, aber DAC6 und Mindeststeuer/Pillar Two fehlten als eigene Premiumspur. Das Thema ist nicht fuer kleine Betriebe gedacht, sondern fuer Steuerabteilungen, Konzernzentralen, Holdingstrukturen, Private-Equity-Gruppen, Steuerberater und Wirtschaftspruefer.

Quellen:

- BZSt DAC6: https://www.bzst.de/DE/Unternehmen/Intern_Informationsaustausch/DAC6/dac6_node.html
- BMF Mitteilungspflichtige grenzueberschreitende Steuergestaltungen: https://www.bundesfinanzministerium.de/Content/DE/Standardartikel/Themen/Steuern/Internationales_Steuerrecht/Allgemeine_Informationen/2020-03-29-mitteilungspflichtige-grenzueberschreitende-steuergestaltungen.html
- Mindeststeuergesetz bei Gesetze im Internet: https://www.gesetze-im-internet.de/minstg/
- BMF Mindestbesteuerungsrichtlinie/Pillar Two: https://www.bundesfinanzministerium.de/Content/DE/Standardartikel/Themen/Steuern/Internationales_Steuerrecht/Allgemeine_Informationen/globale-mindestbesteuerung.html
- OECD Pillar Two: https://www.oecd.org/tax/beps/international-tax-reform-pillar-two-model-rules.htm

Zielgruppen:

- internationale Unternehmensgruppen,
- Steuerabteilungen und CFO-Offices,
- Private-Equity- und Holdingstrukturen,
- groessere Familienunternehmen mit Auslandsgesellschaften,
- Steuerberater, Wirtschaftspruefer und Tax-Technology-Berater.

Was wir anbieten koennen:

- DAC6-Fallakte mit Beteiligten, Fristen, Beraterfreigaben, Meldestatus und Belegen,
- Pillar-Two-/Mindeststeuer-Datenraum je Jurisdiktion/Gesellschaft,
- CbCR-/Verrechnungspreis-Verknuepfung,
- Safe-Harbour- und Datenquellenordner als Ablage, nicht als Berechnung,
- Portalquittungen und Uebermittlungsnachweise,
- Aufgabenverteilung an lokale Gesellschaften,
- Export fuer Steuerberater, WP, Konzernsteuerabteilung oder Betriebspruefung.

Warum es Geld bringt:

- wenige Kunden, aber sehr hohe Zahlungsbereitschaft,
- Berater brauchen Daten von vielen Gesellschaften,
- Fristen und Datenquellen wiederholen sich jaehrlich,
- Excel-/E-Mail-Chaos ist gross,
- Setup- und Datenmigrationserloese koennen sehr hoch sein.

Preislogik:

- Tax-Team klein: 1.000-3.000 EUR/Monat,
- internationale Gruppe: 3.000-15.000 EUR/Monat,
- sehr grosse Gruppe/PE-Struktur: 15.000-50.000 EUR/Monat,
- Beraterportal: 1.000-10.000 EUR/Monat,
- Setup: 20.000-250.000 EUR.

Grenze:

- keine Steuerberatung,
- keine Entscheidung, ob DAC6 meldepflichtig ist,
- keine Pillar-Two-/Mindeststeuerberechnung als fachliches Ergebnis,
- keine Safe-Harbour-Freigabe,
- nur Datenraum, Fristen, Rollen, Belege, Workflows und Export.

Bewertung:

Hoechster Ticketkorridor dieser Runde, aber kein Solo-MVP. Das muss als Enterprise-/Partnerprodukt mit Steuerberater/WP-Freigabe gebaut werden. Fuer die Website reicht zuerst eine starke Landingpage "Tax Disclosure Datenraum".

### 73.4 Politische-Werbung-, Kampagnen-, Medien-, Creator- und Jugendmedienschutz-Akte

Ein neuer, digitaler Randbereich ist Transparenz bei politischer Werbung, Kampagnen, Sponsoren, Targeting, Freigaben, Werbemitteln und Medien-/Creator-Kennzeichnung. Dazu kommen Agentur- und Plattformthemen: Wer hat eine Anzeige beauftragt, welche Zielgruppe wurde genutzt, welche Assets wurden freigegeben, welche Hinweise standen online, welche Screenshots/Links belegen die Ausspielung. Fuer Jugendmedienschutz und Creator-Marketing gilt dieselbe Logik: nicht selbst rechtlich bewerten, aber Nachweise und Freigaben verwalten.

Quellen:

- EU-Kommission Transparenz politischer Werbung: https://commission.europa.eu/strategy-and-policy/policies/justice-and-fundamental-rights/democracy/electoral-rights-and-participation/transparent-political-advertising_en
- Verordnung EU 2024/900 EUR-Lex: https://eur-lex.europa.eu/eli/reg/2024/900/oj
- Die Medienanstalten Werbekennzeichnung: https://www.die-medienanstalten.de/service/werbekennzeichnung
- KJM Jugendmedienschutz: https://www.kjm-online.de/themen
- Jugendmedienschutz-Staatsvertrag, Beispiel Landesrecht: https://www.landesrecht-hamburg.de/bsha/document/jlr-JMStVtrHArahmen

Zielgruppen:

- Performance- und Social-Media-Agenturen,
- Parteien, Verbaende, Gewerkschaften, NGOs und Kampagnenorganisationen,
- Plattformen mit politischer Werbung,
- Medienhaeuser, Publisher und Vermarkter,
- Influencer-/Creator-Agenturen,
- Marken mit vielen Creator- und Paid-Social-Kampagnen.

Was wir anbieten koennen:

- Kampagnenakte mit Auftraggeber, Sponsor, Budget, Zeitraum, Zielgebiet und Assets,
- Targeting- und Freigabeprotokoll,
- Transparenzhinweis-Archiv,
- Screenshot-/URL-/Ad-Library-Nachweise,
- Creator-Vertrags- und Kennzeichnungsordner,
- Jugendmedienschutz-/Alterskennzeichnungsablage als Nachweisordner,
- Freigabeprozess fuer Kunde, Agentur, Rechtsabteilung und Plattform,
- Export fuer Kunde, Plattform, interne Kontrolle oder Berater.

Warum es Geld bringt:

- Agenturen haben viele wiederkehrende Kampagnen,
- Kunden fragen Nachweise ab,
- politische Werbung wird regulatorisch sichtbarer,
- Creator-Werbung und Kennzeichnung erzeugen Streit und Nachweisbedarf,
- gute SEO-Nischen: "politische Werbung Transparenz Nachweis", "Influencer Kennzeichnung Nachweis", "Kampagnenfreigabe Archiv".

Preislogik:

- Creator-/kleine Agentur: 49-199 EUR/Monat,
- Agenturteam: 199-999 EUR/Monat,
- Kampagnenorganisation/Verband: 499-2.500 EUR/Monat,
- Plattform/Adtech/Publisher: 2.000-10.000 EUR/Monat,
- Setup: 1.000-50.000 EUR fuer Kampagnenarchiv, Rollen und Vorlagen.

Grenze:

- keine Entscheidung, ob eine Anzeige politische Werbung ist,
- keine Rechtsfreigabe von Werbekennzeichnung,
- keine Jugendmedienschutz-Einstufung,
- keine Aussage, ob Targeting zulaessig ist,
- nur Dokumentation, Freigabe, Archiv, Zeitstempel und Export.

Bewertung:

Interessanter digitaler Longtail mit guter pSEO-Chance, aber nicht so breit zahlungskraeftig wie Produkt-, Bau-, Energie-, Tax- oder Emittentenakten. Als spaeteres Agentur-/Kampagnenpaket sinnvoll.

### 73.5 Bewertung dieser Runde

Neue Treffer nach Geldqualitaet:

1. DAC6-/Pillar-Two-/Tax-Disclosure-Akte
   - hoechste Enterprise-Tickets,
   - nur mit Steuerberater-/WP-Freigabe sauber,
   - wenig Massenmarkt, aber sehr profitabel bei wenigen Kunden.

2. Kapitalmarkt-/Emittenten-/MAR-/ESEF-Akte
   - sehr hoher Reputationsdruck,
   - sehr gute Enterprise-Preise,
   - juristisch sensibel, deshalb nur als Datenraum und Freigabewerkzeug.

3. Stromsteuer-/Energiesteuer-/EnSTransV-Akte
   - bester Mittelstandsfit dieser Runde,
   - klare Belege, Fristen, Beraterexporte,
   - starker Anschluss an EnEfG, Energieaudit und Foerdermittel.

4. Politische-Werbung-/Medien-/Creator-Transparenzakte
   - digital und SEO-faehig,
   - eher Agentur-/Plattform-Add-on,
   - reputativ und rechtlich vorsichtig verpacken.

Auswirkung auf die Roadmap:

- Steuer-/Finance-Premium bekommt DAC6, Pillar Two und Energieentlastung.
- Kapitalmarkt bekommt eine eigene "Emittenten-Datenraum"-Schublade.
- Agentur-/Plattformwelt bekommt Kampagnen- und Transparenzarchive.
- Keines dieser Module vergroessert den MVP. Sie werden als Premium-/Partner-/Roadmapmodule gefuehrt.

Kernaussage:

Die Suche ist jetzt klar im Randbereich angekommen. Es kommen noch Themen, aber kaum noch breite Startthemen. Geld liegt ab jetzt vor allem in Premiumdatenraeumen fuer bestimmte Rollen: Steuerabteilung, Emittent, Energieberater, Agentur/Plattform. Fuer den Start bleibt der Fokus auf den breitesten, wiederkehrenden Nachweisakten; diese Runde liefert spaetere Hochpreis-Schubladen.

## 74. Weitere Tiefenrunde: Deal-Reporting, Bundesbank, Finanzkonten, Aviation und THG-Quote

Der naechste Suchblock liefert wieder einige verwertbare Geldfelder. Auffaellig: Die neuen Treffer sind weniger "Pflichtenkatalog fuer alle", sondern konkrete Datenraeume rund um Deals, internationale Zahlungen, Finanzprodukte, Luftfahrt-Reporting und Nachhaltigkeitsnachweise. Genau solche Felder koennen spaeter hohe Tickets bringen, ohne den MVP aufzublaehen.

### 74.1 Foreign-Subsidies-Regulation-, FSR-, Drittstaatensubventions- und Vergabe-/M&A-Datenraum

Die EU Foreign Subsidies Regulation ist fuer grosse M&A-Transaktionen und hochwertige oeffentliche Vergaben relevant. Unternehmen muessen fremde finanzielle Beitraege aus Drittstaaten, Beteiligte, Konzernstrukturen, Ausschreibungsunterlagen, Deal-Dokumente und Erklaerungen/Notifications zusammenbekommen. Fuer uns ist das kein EU-Beihilferechtstool, sondern ein Spezialdatenraum fuer M&A-Teams, Bieter, Rechtsanwaelte und Vergabeteams.

Quellen:

- EU-Kommission FSR, Competition Policy: https://competition-policy.ec.europa.eu/foreign-subsidies-regulation_en
- EU-Kommission FSR Public Procurement: https://single-market-economy.ec.europa.eu/single-market/public-procurement/foreign-subsidies-regulation_en
- EUR-Lex Regulation EU 2022/2560: https://eur-lex.europa.eu/eli/reg/2022/2560/oj/eng
- EUR-Lex Implementing Regulation EU 2023/1441: https://eur-lex.europa.eu/eli/reg_impl/2023/1441/oj/eng

Zielgruppen:

- internationale Konzerne mit EU-Geschaeft,
- M&A-Teams, PE-Haeuser und Corporate Development,
- Unternehmen, die an grossen oeffentlichen Ausschreibungen teilnehmen,
- Bau-, Infrastruktur-, Energie-, Bahn-, Defense-, IT- und Gesundheitsanbieter,
- Kanzleien, Vergabeberater und M&A-Berater.

Was wir anbieten koennen:

- FSR-Datenraum je Deal oder Vergabe,
- Drittstaaten-Beitragsregister als Upload-/Datenstruktur,
- Konzernstruktur- und Beteiligtenordner,
- Fristen, Rollen, Freigaben und Versionen,
- Form-FS-CO-/Form-FS-PP-Arbeitsordner,
- Nachweisexport fuer Kanzlei, Vergabestelle, EU-Kommission oder Deal-Team,
- Wiederverwendung alter Beitragsdaten fuer neue Deals/Ausschreibungen.

Warum es Geld bringt:

- wenige Faelle, aber extrem hoher wirtschaftlicher Wert,
- Fristen- und Deal-Druck,
- Daten liegen ueber Finance, Legal, Tax, Treasury, Public Affairs und Bid-Teams verteilt,
- hohe Beraterbudgets,
- sehr gute Anschlussfaehigkeit an Vergabe-, AEO-, Tax-, ESG- und FDI-Datenraeume.

Preislogik:

- einzelner Deal/Bid-Datenraum: 2.000-15.000 EUR/Monat waehrend Laufzeit,
- Konzernabo fuer wiederkehrende FSR-Vorbereitung: 5.000-30.000 EUR/Monat,
- Kanzlei-/Beraterportal: 1.000-10.000 EUR/Monat,
- Setup/Datenmigration: 10.000-250.000 EUR.

Grenze:

- keine Entscheidung, ob eine FSR-Notification erforderlich ist,
- keine Bewertung, ob ein Drittstaatenbeitrag eine verzerrende Subvention ist,
- keine Formulareinreichung ohne Freigabe,
- keine Vergabe-/Beihilferechtsberatung,
- nur Datenraum, Belegstruktur, Frist, Freigabe und Export.

Bewertung:

Sehr hoher Ticketwert, aber kein Massenprodukt. Als Premium-Schublade fuer Konzerne, Kanzleien und Vergabeteams stark.

### 74.2 Investitionspruefungs-, FDI-, AWG-/AWV-Deal- und Unbedenklichkeitsdatenraum

Bei auslaendischen Direktinvestitionen in deutsche Unternehmen kann eine Investitionspruefung nach AWG/AWV relevant werden. Das ist fuer Deals, VC-/PE-Transaktionen, Defense, KRITIS, Cyber, Gesundheit, Halbleiter, KI, Satelliten, Energie und andere sensible Branchen ein echter Datenraumfall. Die Plattform darf nicht entscheiden, ob der Deal meldepflichtig ist, kann aber die Unterlagen, Beteiligten, Fristen, Kommunikationshistorie und Freigaben organisieren.

Quellen:

- BMWE Investitionspruefung: https://www.bundeswirtschaftsministerium.de/Redaktion/DE/Artikel/Aussenwirtschaft/investitionspruefung.html
- BMWE FAQ Investment Screening AWG/AWV: https://www.bundeswirtschaftsministerium.de/Redaktion/EN/FAQ/Aussenwirtschaftsrecht/faq-aussenwirtschaftsrecht.html
- BMWE Investment Screening: https://www.bundeswirtschaftsministerium.de/Redaktion/EN/Artikel/Foreign-Trade/investment-screening.html
- BMVg Investitionspruefung SVI: https://www.bmvg.de/de/themen/ruestung/investitionspruefung-bei-unternehmen-der-svi-6063474

Zielgruppen:

- deutsche Zielunternehmen in sensiblen Branchen,
- auslaendische Investoren und PE-/VC-Fonds,
- M&A-Kanzleien,
- Corporate-Finance-Berater,
- Defense-, Cyber-, KRITIS-, Healthcare-, Halbleiter-, Space- und Energieunternehmen,
- Notare/Deal-Koordinatoren als indirekte Multiplikatoren.

Was wir anbieten koennen:

- FDI-Dealakte mit Kaeufer, Verkaeufer, Zielunternehmen, Beteiligungsstruktur und Zeitachse,
- Unterlagenordner fuer Geschaeftsmodell, Kunden, Technologie, Standorte, Kontrollrechte und Gesellschafter,
- Kommunikations- und Nachforderungsprotokoll,
- Unbedenklichkeitsbescheinigungs-Arbeitsordner,
- Rollen fuer Kanzlei, Investor, Zielunternehmen und Management,
- Export fuer BMWE-nahe Verfahren, Kanzlei, Board oder Investor.

Warum es Geld bringt:

- Deal-Zeitdruck,
- hohe Kanzlei- und Transaktionsbudgets,
- sensible Daten brauchen strukturierte Berechtigungen,
- gute Verbindung zu Geheimschutz, Defense, Satellitendaten, AEO, KRITIS und FSR,
- jeder Deal ist ein eigener zahlbarer Datenraum.

Preislogik:

- einzelner Dealraum: 2.000-20.000 EUR/Monat,
- sensible Zielunternehmen/mehrere Jurisdiktionen: 10.000-50.000 EUR/Monat,
- Setup: 10.000-250.000 EUR,
- Berater-/Kanzleipaket: 1.000-15.000 EUR/Monat.

Grenze:

- keine Entscheidung, ob AWG/AWV-Meldepflicht besteht,
- keine nationale-Sicherheitsbewertung,
- keine Prognose der Freigabe,
- keine Einreichung ohne Fachfreigabe,
- Standard-SaaS nur mit sehr strenger Berechtigungs- und Datenklassifikation.

Bewertung:

Sehr gute Premium-Erweiterung, besonders im Zusammenspiel mit Defense-/Geheimschutz-/KRITIS- und FSR-Datenraeumen. Kein SEO-Massenfeld, aber hoher Dealwert.

### 74.3 AWV-, Bundesbank-, Z4-/Z5-, Auslandszahlungs- und Aussenwirtschaftsmeldeakte

Das ist einer der besseren neuen Mittelstands-/Finance-Treffer. Die Deutsche Bundesbank beschreibt das Aussenwirtschaftsmeldewesen fuer Zahlungen, Forderungen, Verbindlichkeiten und Direktinvestitionen. Viele Unternehmen mit grenzueberschreitenden Zahlungen, Auslandsgesellschaften, Lizenzzahlungen, Dienstleistungen, Darlehen oder Finanzbeziehungen brauchen interne Prozesse, Belege, Fristen und Portalnachweise. Das ist wiederkehrend und passt perfekt zur Aktenlogik.

Quellen:

- Deutsche Bundesbank Aussenwirtschaft Formular-Center: https://www.bundesbank.de/de/service/meldewesen/aussenwirtschaft-formular-center
- Bundesbank Zahlungsmeldungen Z4, Z8, Z10-15: https://www.bundesbank.de/de/service/meldewesen/aussenwirtschaft-formular-center/zahlungsmeldungen-z4-z8-und-z10-15--613458
- Bundesbank Z5/Z5a/Z5b: https://www.bundesbank.de/de/service/meldewesen/aussenwirtschaft-formular-center/bestandsmeldungen-ueber-auslandsforderungen-und-verbindlichkeiten-z5-z5a-z5b--611444
- Bundesbank Aenderungen im Meldewesen: https://www.bundesbank.de/de/service/meldewesen/aussenwirtschaft/aenderungen-im-meldewesen/aenderungen-im-meldewesen-743382

Zielgruppen:

- international taetige KMU,
- SaaS-/Agentur-/Beratungsunternehmen mit Auslandskunden,
- Lizenzgeber, IP-Holdings und Franchisegeber,
- Unternehmen mit Auslandsgesellschaften,
- Treasury-/Finance-Teams,
- Steuerberater und CFO-Services.

Was wir anbieten koennen:

- AWV-Meldekalender,
- Zahlungssammelordner je Monat,
- Z4-/Z5-/Z10-Arbeitsordner,
- Bank-/ERP-CSV-Import als spaeteres Modul,
- Plausibilitaetsliste als reine Datenpruefung, nicht als Pflichturteil,
- Portalquittungen und Kommunikationshistorie,
- Export fuer CFO, Steuerberater, Wirtschaftspruefer oder Bundesbank-nahe Rueckfragen.

Warum es Geld bringt:

- deutlich breiter als viele Spezialverticals,
- monatlich/wiederkehrend,
- international taetige Firmen haben Geld,
- viele wissen nicht, wer intern zustaendig ist,
- sehr gute SEO-Mikrofragen: "Z4 Meldung Unterlagen", "AWV Meldepflicht Dokumentation", "Z5 Meldung Frist".

Preislogik:

- kleiner internationaler Betrieb: 49-199 EUR/Monat,
- Mittelstand/Finance-Team: 199-999 EUR/Monat,
- Gruppe mit mehreren Gesellschaften: 1.000-5.000 EUR/Monat,
- Beraterportal: 199-2.500 EUR/Monat,
- Setup: 500-25.000 EUR.

Grenze:

- keine Entscheidung, ob eine konkrete Zahlung meldepflichtig ist,
- keine Aussenwirtschaftsrechtsberatung,
- keine automatische Abgabe ohne Nutzerfreigabe,
- Import kann nur "moegliche Pruefpunkte" markieren,
- finaler Meldeentscheid bleibt bei Unternehmen/Berater.

Bewertung:

Sehr guter Kandidat fuer die Plattform, weil breiter, wiederkehrender und weniger exotisch als FSR/FDI. Koennte als Finance-Add-on frueher kommen als viele andere Premiumthemen.

### 74.4 FATCA-, CRS-, AIA-, Finanzkonten- und Tax-Reporting-Akte

FATCA und CRS betreffen Finanzinstitute und bestimmte Finanzstrukturen. Das BZSt fuehrt Verfahren fuer den internationalen Austausch von Finanzkontendaten; die OECD beschreibt CRS als Standard fuer den automatischen Austausch von Finanzkontoinformationen. Das ist kein allgemeines KMU-Thema, aber fuer Banken, Broker, Fondsplattformen, Verwahrstellen, Treuhandstrukturen und Fintechs ein wiederkehrendes Daten-/Nachweisthema.

Quellen:

- BZSt FATCA: https://www.bzst.de/DE/Unternehmen/Intern_Informationsaustausch/FATCA/fatca_node.html
- BZSt FATCA elektronische Datenuebermittlung: https://www.bzst.de/DE/Unternehmen/Intern_Informationsaustausch/FATCA/elektronische_datenuebermittlung/elektronische_datenuebermittlung_node.html
- BZSt CRS teilnehmende Staaten: https://www.bzst.de/DE/Unternehmen/Intern_Informationsaustausch/CommonReportingStandard/TeilnehmendeStaaten/teilnehmendestaaten_node.html
- OECD Common Reporting Standard: https://www.oecd.org/en/publications/2017/03/standard-for-automatic-exchange-of-financial-account-information-in-tax-matters-second-edition_g1g73eb6.html

Zielgruppen:

- Banken, Broker und Wertpapierinstitute,
- Fondsplattformen und Verwahrstellen,
- Fintechs mit Konten-/Depotbezug,
- Family Offices und Treuhandstrukturen,
- Versicherer mit kapitalbildenden Produkten,
- Steuerberater/WP mit Finanzinstitutmandanten.

Was wir anbieten koennen:

- FATCA-/CRS-Jahresakte,
- Selbstauskunfts- und Klassifizierungsunterlagen als Uploadordner,
- Kunden-/Kontenlisten als sichere Datenablage oder Referenz auf Drittsysteme,
- Meldefristen und BZSt-Portalnachweise,
- Pruefungs- und Nachforderungsordner,
- Rollen fuer Tax, Compliance, Operations und Berater,
- Export fuer BZSt-nahe Rueckfragen, interne Revision oder Pruefer.

Warum es Geld bringt:

- wiederkehrende jaehrliche Meldelogik,
- hohe Datenqualitaetsanforderung,
- Finanzkunden zahlen fuer Auditfaehigkeit,
- guter Anschluss an ZAG, WpIG, KVG, DORA, Outsourcing und GwG,
- wenige Kunden reichen fuer guten Umsatz.

Preislogik:

- kleiner Finanzdienstleister: 499-2.500 EUR/Monat,
- mittelgrosse Plattform/Institut: 2.500-10.000 EUR/Monat,
- Gruppe: 10.000-40.000 EUR/Monat,
- Setup: 10.000-200.000 EUR.

Grenze:

- keine steuerliche Konto-/Personenklassifizierung,
- keine Entscheidung, ob ein Konto meldepflichtig ist,
- keine Steuerberatung,
- keine BZSt-Uebermittlung ohne Freigabe,
- sensible personenbezogene Daten nur mit starker Security/DSGVO-Konzeption.

Bewertung:

Sehr gutes Finanz-Premiumthema, aber kein Startmodul. Nur sinnvoll, wenn spaeter Finanzkunden/Partner ernsthaft angesprochen werden.

### 74.5 PRIIPs-, KID-, SFDR-, Fonds-/Versicherungsprodukt- und Vertriebsunterlagenakte

Finanzprodukte erzeugen viele Versionen: Basisinformationsblaetter, Verkaufsunterlagen, Prospekte, SFDR-Offenlegung, Kosteninformationen, Zielmarkt, Vertriebsfreigaben, Archivversionen, Sprachversionen und Website-/Distributionsnachweise. Die Datei hatte KVG/Fonds bereits, aber die konkrete Produktdokumenten- und Vertriebsunterlagenakte fuer Fonds, Versicherungsanlageprodukte, strukturierte Produkte und Banken war noch nicht sauber getrennt.

Quellen:

- BaFin PRIIPs-Basisinformationsblatt: https://www.bafin.de/SharedDocs/Veroeffentlichungen/DE/Aufsichtsmitteilung/2022/aufsichtsmitteilung_220804_PRIIPs_Basisinformationsblatt.html
- BaFin Sustainable Finance: https://www.bafin.de/DE/unternehmen-maerkte/aufsicht/alle-unternehmen/sustainable-finance/sustainable-finance_node.html
- BaFin FAQ Offenlegungsverordnung: https://www.bafin.de/SharedDocs/Downloads/DE/Anlage/dl_Anlage_Fragen_und_Antworten_OffenlegungsVO.html
- EIOPA PRIIPs: https://www.eiopa.europa.eu/browse/regulation-and-policy/packaged-retail-and-insurance-based-investment-products-priips_en

Zielgruppen:

- Kapitalverwaltungsgesellschaften,
- Versicherer mit Versicherungsanlageprodukten,
- Banken und strukturierte-Produkt-Anbieter,
- Fintech-/Broker-Plattformen,
- Vermoegensverwalter und Vertriebe,
- Legal-/Product-Governance-/Marketing-Teams.

Was wir anbieten koennen:

- Produktdokumentenakte je Finanzprodukt,
- KID-/BIB-Versionierung,
- SFDR-/ESG-Offenlegungsordner,
- Prospekt-/Nachtrags-/Website-Archiv,
- Vertriebsfreigabe-Workflow,
- Sprach-/Laender-/Distributionsmatrix,
- Export fuer BaFin-nahe Rueckfragen, Vertriebspartner, Pruefer oder Produktgremium.

Warum es Geld bringt:

- viele Produkte und Versionen,
- starke Schnittstelle zwischen Legal, Produkt, Vertrieb und Marketing,
- Finanzanbieter zahlen fuer Kontrolle und Nachweis,
- sehr gute Verbindung zu KVG/AIF, Versicherungsaufsicht, Emittenten, DORA und Outsourcing.

Preislogik:

- kleiner Anbieter: 499-2.000 EUR/Monat,
- Produktplattform: 2.000-10.000 EUR/Monat,
- Konzern/mehrere Laender: 10.000-50.000 EUR/Monat,
- Setup: 5.000-150.000 EUR.

Grenze:

- keine fachliche KID-/SFDR-/Prospektfreigabe,
- keine Anlageberatung,
- keine Nachhaltigkeitsklassifizierung,
- keine Rendite-/Risiko-/Kostenberechnung als eigene Freigabe,
- nur Dokumentenlenkung, Versionierung, Freigabe, Archiv und Export.

Bewertung:

Starkes Finanzprodukt-Modul fuer spaetere Enterprise-Kunden. Nicht fuer den Anfang, aber sehr passend, wenn die Plattform Richtung Finanz-/Trust-Datenraeume skaliert.

### 74.6 Aviation-EU-ETS-, CORSIA-, ReFuelEU-, SAF- und Flugemissionsakte

Luftfahrt war bisher mit Part-145/CAMO stark auf Maintenance Records fokussiert. Zusaetzlich gibt es die Klima-/Fuel-/Reporting-Welt: EU ETS Aviation, CORSIA-Reporting, ReFuelEU Aviation, SAF-Daten, Emissionsberichte, Monitoringplaene, Verifiziererunterlagen und Fuel-Supplier-/Airport-/Operator-Schnittstellen. Das ist klein, aber sehr zahlungskraeftig.

Quellen:

- DEHSt Aviation Reporting: https://www.dehst.de/EN/Topics/EU-ETS-1/Aviation/Reporting/reporting_node.html
- EU-Kommission ReFuelEU Aviation: https://transport.ec.europa.eu/transport-modes/air/environment/refueleu-aviation_en
- EU Climate Action MRV: https://climate.ec.europa.eu/eu-action/carbon-markets/eu-emissions-trading-system-eu-ets/monitoring-reporting-and-verification_en
- EASA ReFuelEU Annual Technical Report 2025: https://www.easa.europa.eu/en/document-library/general-publications/refueleu-aviation-annual-technical-report-2025
- ICAO CORSIA FAQ: https://www.icao.int/CORSIA/frequently-asked-questions

Zielgruppen:

- Airlines und Aircraft Operators,
- Business-Jet-/Charterbetreiber,
- Aviation-Fuel-Supplier,
- Flughafenbetreiber,
- SAF-/Fuel-Datenanbieter,
- Verifizierer, Aviation-Berater und Carbon-/Fuel-Berater.

Was wir anbieten koennen:

- Flugemissions- und Fuel-Datenraum,
- Monitoringplan- und Verifiziererordner,
- CORSIA-/EU-ETS-Berichtsakte,
- ReFuelEU-/SAF-Nachweisordner,
- Airport-/Fuel-Supplier-Kommunikation,
- Fristen, Rollen, Belege, Portalnachweise,
- Export fuer DEHSt, Verifizierer, EASA-nahe Auswertung oder interne Nachhaltigkeit.

Warum es Geld bringt:

- sehr hohe Datenkomplexitaet,
- externe Verifizierer brauchen saubere Unterlagen,
- kleine Kundenzahl, aber hohe Zahlungsbereitschaft,
- passt zu Maritime-ETS/FuelEU, CBAM, Energiehandel und Carbon-Datenraeumen.

Preislogik:

- kleiner Operator: 499-2.500 EUR/Monat,
- Airline/Fuel-Supplier: 5.000-25.000 EUR/Monat,
- Gruppe/mehrere Betreiber: 25.000-100.000 EUR/Monat,
- Setup: 10.000-250.000 EUR.

Grenze:

- keine Emissions-/SAF-Fachberechnung als finale Freigabe,
- keine Verifiziererleistung,
- keine DEHSt-/EASA-/ICAO-Rechtsberatung,
- Datenimport nur mit Nutzer-/Beraterfreigabe,
- Plausibilitaet ja, rechtliches Ergebnis nein.

Bewertung:

Kleines Premiumfeld. Nicht fuer pSEO-Masse, aber sehr gut als spaetere "Transport Climate Records"-Schublade neben Maritime, FuelEU und EU ETS.

### 74.7 NaBiSy-, Biomasse-, Biokraftstoff-, THG-Quote- und Nachhaltigkeitsnachweisakte

Biomasse, Biokraftstoffe und alternative Kraftstoffe erzeugen Nachweisketten: Nachhaltigkeitsnachweise, NaBiSy-Konten, Teilnachweise, Lieferketten, Zertifizierung, Auditunterlagen, THG-Quote, 37./38. BImSchV, UBA-/Zoll-/BLE-Belege und Mengen. Das ist kein Standard-KMU-Thema, aber fuer Biogas, Biokraftstoff, Mineralooelhandel, Ladepunkt-/THG-Quote-Akteure und Zertifizierer ein sehr datenintensiver Spezialmarkt.

Quellen:

- BLE NaBiSy: https://nabisy.ble.de/
- BLE Information regarding Nabisy: https://www.ble.de/EN/Topics/Climate-Energy/Sustainable-Biomass-Production/Information-Nabisy/information-nabisy_node.html
- Zoll THG-Quote Nachweispflichten: https://www.zoll.de/DE/Fachthemen/Steuern/Verbrauchsteuern/Treibhausgasquote-THG-Quote/Nachweispflichten/nachweispflichten_node.html
- UBA 37./38. BImSchV: https://www.umweltbundesamt.de/themen/verkehr/kraftstoffe-antriebe/vollzug-38-bimschv-anrechnung-von-strom-fuer
- 38. BImSchV: https://www.gesetze-im-internet.de/bimschv_38_2017/BJNR389200017.html

Zielgruppen:

- Biokraftstoffhersteller und -haendler,
- Biogasanlagen und Biomasseanlagen,
- Mineralooelunternehmen und Quotenverpflichtete,
- Ladepunktbetreiber/THG-Quote-Dienstleister,
- Zertifizierungssysteme, Auditoren und Nachhaltigkeitsberater,
- Logistik- und Rohstoffhaendler in der Kraftstoffkette.

Was wir anbieten koennen:

- NaBiSy-/Nachhaltigkeitsnachweisordner,
- Teilnachweis- und Mengenakte,
- Lieferketten- und Zertifikatsablage,
- THG-Quote-Arbeitsordner,
- Audit-/Zertifizierer-Export,
- UBA-/Zoll-/BLE-Kommunikationshistorie,
- Rollen fuer Betreiber, Haendler, Auditor, Berater und Finance.

Warum es Geld bringt:

- hoher Wert pro Nachweis/Menge,
- fehlerhafte Nachweise koennen wirtschaftlich weh tun,
- viele Beteiligte in der Kette,
- wiederkehrende Mengen-, Portal- und Auditprozesse,
- sehr gute Anschlussfaehigkeit an Energie, Zoll, Nachhaltigkeit und Carbon-Reporting.

Preislogik:

- kleiner Betreiber/Dienstleister: 199-999 EUR/Monat,
- Haendler/Quotenakteur: 1.000-7.500 EUR/Monat,
- grosse Kraftstoff-/Biomassegruppe: 7.500-50.000 EUR/Monat,
- Setup: 5.000-150.000 EUR.

Grenze:

- keine Zertifizierung ersetzen,
- keine Nachhaltigkeits- oder THG-Berechnung als finale Freigabe,
- keine Entscheidung, ob ein Nachweis anrechenbar ist,
- keine Zoll-/UBA-/BLE-Beratung,
- nur Datenraum, Nachweiskette, Belege, Rollen, Fristen und Export.

Bewertung:

Sehr guter Spezialbaustein fuer Energie-/Carbon-/Zollkunden. Spaeter stark, wenn Energie- und Nachhaltigkeitsmodule stehen.

### 74.8 Bewertung dieser Runde

Neue Treffer nach Qualitaet:

1. AWV-/Bundesbank-Z4-/Z5-Meldeakte
   - bester neuer Breitenfund,
   - monatlich/wiederkehrend,
   - international taetige KMU und Finance-Teams zahlen eher als normale Kleinstbetriebe.

2. FSR-Drittstaatensubventionsdatenraum
   - extrem hoher Deal-/Vergabewert,
   - wenige Kunden, aber starke Setup- und Monatsgebuehren,
   - ideal fuer Kanzlei-/Beraterpartner.

3. FDI-/Investitionspruefungsdatenraum
   - aehnlich hochwertig wie FSR,
   - besonders stark bei Defense, KRITIS, Cyber, Health, Space und Energie,
   - hohe Security-Anforderungen.

4. FATCA-/CRS-Finanzkontenakte
   - gutes Finanz-Premium,
   - wiederkehrend und datenlastig,
   - nur spaeter mit starker Security.

5. PRIIPs-/SFDR-/Finanzproduktunterlagenakte
   - guter Dokumentenlenkungsfall,
   - passt zu KVG, Versicherer, Banken und Produktplattformen,
   - Enterprise statt KMU.

6. NaBiSy-/THG-Quote-/Biomasseakte
   - starker Spezialmarkt,
   - gute Naehe zu Energie/Carbon/Zoll,
   - gut fuer Partner mit Auditoren/Zertifizierern.

7. Aviation-EU-ETS-/CORSIA-/ReFuelEU-Akte
   - hoechste Spezialitaet,
   - klein, aber teuer,
   - Roadmap, nicht Start.

Auswirkung auf die Roadmap:

- Finance bekommt AWV/Bundesbank, FATCA/CRS, PRIIPs/SFDR.
- Deal-/Legal-Enterprise bekommt FSR und FDI.
- Energy/Carbon bekommt NaBiSy/THG und Aviation-Klima.
- Keines dieser Module macht den Start breiter; sie werden als spaetere Premium-Cluster einsortiert.

Kernaussage:

Der wichtigste Fund dieser Runde ist AWV/Bundesbank, weil es breiter und wiederkehrender ist als die meisten Premium-Spezialfelder. FSR und FDI sind dagegen perfekte Hochpreis-Datenraeume fuer spaeter. Damit verfestigt sich die Strategie: Start mit breiten Akten/Fristen/Nachweisen, danach Premiumdatenraeume fuer Finance, Deals, Energy und regulated industries.

## 75. Pflichtfinalisierung: Was jetzt noch wirklich rein muss

Nach dem weiteren Tiefenscan gibt es nur noch wenige Punkte, die ich als "muss rein" einstufen wuerde. Nicht, weil sie sexy sind, sondern weil sie entweder fast alle GmbHs/Kapitalgesellschaften betreffen, sehr stark nachweisgetrieben sind oder als Produktfunktion quer ueber alle Module gebraucht werden.

### 75.1 Jahresabschluss-, Offenlegungs-, Unternehmensregister-, Bundesanzeiger- und E-Bilanz-Akte

Das ist die wichtigste echte Luecke. Die Plattform hatte Steuerberater-/Prueferexporte, GoBD, E-Rechnung, E-Bilanz nicht sauber als eigenes, breites Jahresabschluss-/Offenlegungsmodul. Fuer GmbH, UG, GmbH & Co. KG, AG, Genossenschaften und viele Gruppen ist das ein wiederkehrender Jahresprozess mit Fristen, Unterlagen, Freigaben, Einreichungsbelegen und Ordnungsgeldrisiko.

Quellen:

- Bundesamt fuer Justiz Jahresabschluesse: https://www.bundesjustizamt.de/DE/Themen/OrdnungsgeldVollstreckung/Jahresabschluesse/Jahresabschluesse_node.html
- BfJ Offenlegungspflichten: https://www.bundesjustizamt.de/DE/Themen/OrdnungsgeldVollstreckung/Jahresabschluesse/Offenlegung/Pflichten/Pflichten_node.html
- BfJ Ordnungsgeldverfahren: https://www.bundesjustizamt.de/DE/Themen/OrdnungsgeldVollstreckung/Jahresabschluesse/Offenlegung/Verfahren/Verfahren_node.html
- Unternehmensregister: https://www.unternehmensregister.de/
- Bundesanzeiger: https://www.bundesanzeiger.de/
- BMF E-Bilanz: https://www.bundesfinanzministerium.de/Monatsberichte/2018/08/Inhalte/Kapitel-3-Analysen/3-4-Das-Projekt-E-Bilanz.html
- ELSTER Lohnsteuer-Anmeldung: https://www.elster.de/eportal/formulare-leistungen/alleformulare/lsta
- ELSTER Dauerfristverlaengerung: https://www.elster.de/eportal/formulare-leistungen/alleformulare/ustsveru

Zielgruppen:

- GmbH, UG, AG, GmbH & Co. KG,
- Unternehmensgruppen und Holdings,
- Steuerberaterkanzleien,
- CFO-/Finance-Teams,
- Buchhaltungsbueros,
- Gruender mit mehreren Gesellschaften,
- Genossenschaften als Ueberschneidung zu Abschnitt 72.

Was rein muss:

- Jahresabschlussakte je Geschaeftsjahr,
- Fristenkalender fuer Offenlegung/Hinterlegung und interne Abschlussaufgaben,
- Unterlagenordner fuer Bilanz, GuV, Anhang, Beschluesse, Berichte, E-Bilanz-Arbeitsstand und Einreichungsbelege,
- Portalquittungen fuer Unternehmensregister/Bundesanzeiger/ELSTER als Upload,
- Aufgaben fuer Steuerberater, Geschaeftsfuehrer, Buchhaltung und Pruefer,
- Wiederverwendung Vorjahr als Strukturvorlage,
- Export fuer Steuerberater, Wirtschaftspruefer, Geschaeftsfuehrung, Bank oder Investor.

Warum es Geld bringt:

- extrem breit,
- wiederkehrend jedes Jahr,
- klare Angst vor Fristversaeumnis und Ordnungsgeld,
- Steuerberater sind ein perfekter Vertriebskanal,
- sehr guter SEO-Longtail: "Jahresabschluss Offenlegung Unterlagen", "Unternehmensregister Frist Nachweis", "E-Bilanz Unterlagen vorbereiten".

Preislogik:

- Einzelgesellschaft: 29-99 EUR/Monat,
- mehrere Gesellschaften/Holding: 99-499 EUR/Monat,
- Steuerberater-/Buchhaltungsportal: 299-3.000 EUR/Monat,
- Setup: 250-10.000 EUR je Vorjahresdaten/Struktur.

Grenze:

- keine Steuerberatung,
- keine Erstellung/Freigabe des Jahresabschlusses,
- keine Entscheidung, was genau offenzulegen ist,
- keine E-Bilanz-Taxonomie-Freigabe,
- keine Einreichung ohne Nutzer-/Beraterfreigabe.

Bewertung:

Muss rein. Nicht als Spezialvertical, sondern als "Jahresabschluss- und Offenlegungsakte" im Kernsystem. Das ist einer der wenigen noch fehlenden Bausteine, der breit genug fuer den Startnahbereich ist.

### 75.2 Handelsregister-, Gesellschafterlisten-, Beschluss-, Vollmachts- und Corporate-Housekeeping-Akte

Neben der Offenlegung fehlt eine saubere Gesellschaftsakte fuer Register, Gesellschafter, Geschaeftsfuehrung, Beschluesse, Vollmachten, Notartermine und laufende Aenderungen. Die Plattform darf keine gesellschaftsrechtliche Wirksamkeit pruefen, aber sie kann die Unterlagen, Fristen, Verantwortlichen und Notar-/Steuerberater-Kommunikation verwalten.

Quellen:

- Registerportal Handelsregister: https://www.handelsregister.de/
- BMJ Handelsregister: https://www.bmjv.de/DE/themen/wirtschaft_finanzen/handels_gesellschaftsrecht/handelsregister/handelsregister_node.html
- Unternehmensregister: https://www.unternehmensregister.de/
- Notarielle Online-Verfahren: https://online.notar.de/
- IHK Muenchen Gesellschaftsrecht: https://www.ihk-muenchen.de/ratgeber/recht/gesellschaftsrecht/

Zielgruppen:

- GmbH/UG/AG,
- Holdings und Unternehmensgruppen,
- Startups mit Investoren,
- Franchise-/Filialstrukturen,
- Steuerberater, Notare und Corporate-Services,
- Vereine/Genossenschaften als spaetere Variante.

Was rein muss:

- Gesellschaftsakte mit Stammblatt, Registernummer, Sitz, Geschaeftsfuehrung, Gesellschaftern und Beteiligungen,
- Gesellschafterlisten- und Beteiligungsordner,
- Beschluss- und Protokollordner,
- Vollmachts- und Zeichnungsberechtigungsordner,
- Registerauszuege und historische Registerdokumente,
- Notar-/Berater-Kommunikationsordner,
- Aufgaben bei Aenderungen: Adresse, Geschaeftsfuehrer, Prokura, Beteiligungen, Firma, Gegenstand,
- Export fuer Bank, Investor, Steuerberater, Notar, Due Diligence.

Warum es Geld bringt:

- jede wachsende Firma hat Chaos in Gesellschaftsunterlagen,
- Banken, Investoren, Notare und Steuerberater fragen immer wieder dieselben Dokumente an,
- sehr guter Anschluss an Offenlegung, Transparenzregister, Finanzierung, FDI/FSR, Franchise und Deal-Datenraeume,
- hoher Wert fuer Holdings mit vielen Gesellschaften.

Preislogik:

- Einzelgesellschaft: 19-79 EUR/Monat,
- Holding/mehrere Gesellschaften: 99-999 EUR/Monat,
- Corporate-Service-/Steuerberaterportal: 299-5.000 EUR/Monat,
- Setup: 500-25.000 EUR fuer Register-/Altunterlagenmigration.

Grenze:

- keine gesellschaftsrechtliche Beratung,
- keine Entscheidung, ob eine Registeranmeldung noetig ist,
- keine Erstellung notarieller Urkunden,
- keine Wirksamkeitspruefung von Beschluessen oder Vollmachten,
- nur Akte, Wiedervorlage, Version, Kommunikation und Export.

Bewertung:

Muss als Kernordner rein, auch wenn es nicht als grosse SEO-Startlanding verkauft werden muss. Es macht die Plattform fuer echte Unternehmer deutlich wertvoller.

### 75.3 Geschaeftsgeheimnis-, NDA-, Know-how-, Vertraulichkeits- und Offboarding-Akte

Das Geschaeftsgeheimnisgesetz ist ein unterschatzter Querschnitt. Unternehmen muessen nicht nur NDAs unterschreiben, sondern im Streitfall zeigen koennen, dass Informationen organisatorisch und technisch geschuetzt wurden. Genau hier passt eine Akte: Geheimnisinventar, Vertraulichkeitsstufen, Zugriffskreise, Schulungen, NDAs, Lieferanten, Offboarding, Nachweise.

Quellen:

- GeschGehG bei Gesetze im Internet: https://www.gesetze-im-internet.de/geschgehg/BJNR046610019.html
- Paragraph 2 GeschGehG: https://www.gesetze-im-internet.de/geschgehg/__2.html
- IHK Lahn-Dill Geschaeftsgeheimnisgesetz: https://www.ihk.de/lahn-dill/recht/handels-und-gewerberecht/handelsrecht/geschaeftsgeheimnisgesetz-5811154
- IHK Bodensee-Oberschwaben Geschaeftsgeheimnisse: https://www.ihk.de/bodensee-oberschwaben/recht/gesetzliche-vorgaben-fuers-gewerb-/neue-regelungen-zu-betriebs-und-geschaeftsgeheimnissen-4175002

Zielgruppen:

- Softwarefirmen und Agenturen,
- Maschinenbau, Forschung, Entwicklung, Produktdesign,
- Lebensmittel-/Rezeptur-/Kosmetik-/Chemiebetriebe,
- Vertriebsteams mit Kundenlisten und Preislisten,
- Arbeitgeber mit vielen externen Dienstleistern,
- Kanzleien und IP-/IT-Berater als Partner.

Was rein muss:

- Geheimnisinventar als vom Nutzer gepflegte Liste,
- Vertraulichkeitsklassen,
- NDA-/Vertragsablage,
- Zugriffskreis je Geheimnis/Projekt,
- Schulungs- und Kenntnisnahmebelege,
- Offboarding-Checklisten fuer Mitarbeiter/Dienstleister,
- Externe-Freigabe- und Datenraumprotokolle,
- Export fuer Anwalt, Geschaeftsfuehrung, Investor, Kunde oder Gerichtsvorbereitung.

Warum es Geld bringt:

- betrifft fast alle wissensbasierten Firmen,
- hoher Schmerz bei Mitarbeiterwechsel, Dienstleisterwechsel, Investorenrunde, Streitfall oder Due Diligence,
- gute Verbindung zu IP-/Marken-/Patentfristen, SaaS-Trust-Center, Cyberversicherung, SBOM und Kundenaudits,
- starker Beratungs- und Partnerkanal.

Preislogik:

- kleiner Betrieb: 49-199 EUR/Monat,
- Tech-/Produktunternehmen: 199-999 EUR/Monat,
- Unternehmensgruppe: 1.000-5.000 EUR/Monat,
- Setup: 1.000-50.000 EUR fuer Inventar, Alt-NDAs, Rollen und Offboardingprozesse.

Grenze:

- keine Bewertung, ob eine konkrete Information rechtlich ein Geschaeftsgeheimnis ist,
- keine Freigabe, ob Massnahmen angemessen sind,
- keine Rechtsdurchsetzung,
- nur Inventar, Nachweise, Massnahmenhistorie, Rollen, Fristen und Export.

Bewertung:

Muss nicht auf die erste Startseite, aber muss als Modul in die Plattform. Es ist ein sehr guter B2B-Vertrauens- und Premiumordner.

### 75.4 Praxis-TI-, KIM-, SMC-B-, eHBA-, Health-IT- und Kartenfristenakte

Praxis und Medizinprodukte sind schon drin. Was fehlte, ist die digitale Infrastruktur der Arzt-/Zahnarzt-/Psychotherapiepraxis: TI-Anbindung, KIM, SMC-B/Praxisausweis, eHBA, Konnektor, Kartenlaufzeiten, Dienstleister, Updates, ePA/eRezept/eAU-nahe Nachweise, Datenschutz- und IT-Dokumentation. Das ist kein medizinisches Beratungsthema, sondern ein Fristen-/Komponenten-/Dienstleisterordner.

Quellen:

- gematik KIM einrichten: https://www.gematik.de/anwendungen/kim/kim-einrichten
- gematik TI-Zugang: https://www.gematik.de/telematikinfrastruktur/ti-zugang
- KBV Telematikinfrastruktur: https://www.kbv.de/praxis/digitalisierung/telematikinfrastruktur
- gematik Startseite: https://www.gematik.de/

Zielgruppen:

- Arztpraxen,
- Zahnarztpraxen,
- Psychotherapeuten,
- MVZ,
- Praxisnetze,
- medizinische IT-Dienstleister,
- Abrechnungs-/Praxisberater.

Was rein muss:

- TI-Komponentenakte: Konnektor, Kartenterminal, SMC-B, eHBA, KIM-Adresse, Anbieter, Laufzeiten,
- Karten-/Zertifikatsfristen,
- Dienstleister- und Wartungsvertraege,
- Update-/Stoerungsprotokoll,
- KIM-/ePA-/eRezept-/eAU-Prozessnachweise als Ablage,
- Datenschutz-/TOM-Verknuepfung fuer Praxis-IT,
- Export fuer Praxisleitung, IT-Dienstleister, Datenschutzberater, KV/KZV-nahe Rueckfragen oder interne Kontrolle.

Warum es Geld bringt:

- Praxen sind klein, aber frist- und nachweisgestresst,
- Karten/Zertifikate/Komponenten laufen ab,
- externe IT-Dienstleister brauchen Struktur,
- sehr gute Verbindung zu Medizinprodukte-, Datenschutz-, Strahlenschutz-, Hygiene- und Praxiszulassungsakte,
- SEO ueber konkrete Fragen: "SMC-B Ablauf Praxis", "KIM Adresse Nachweis", "TI Komponenten dokumentieren".

Preislogik:

- Einzelpraxis: 39-149 EUR/Monat,
- MVZ/Praxisnetz: 199-999 EUR/Monat,
- IT-Dienstleisterportal: 299-3.000 EUR/Monat,
- Setup: 500-10.000 EUR.

Grenze:

- keine medizinische Beratung,
- keine TI-/gematik-Konformitaetsfreigabe,
- keine Datenschutzberatung,
- keine technische Haftung fuer Konnektor/KIM/ePA,
- nur Komponenten, Fristen, Nachweise, Stoerungen, Rollen und Export.

Bewertung:

Muss als Gesundheits-/Praxis-Vertiefung rein. Nicht Pflege-Anleitung, nicht medizinische Beratung, sondern digitale Praxisakte.

### 75.5 Portal-, Zugang-, Einreichungsbeleg- und Quittungslogik als Querschnittsfunktion

Fast jedes gute Modul endet bei einem Portal oder Beleg: ELSTER, Unternehmensregister, Bundesbank, Zoll, BNetzA, BAFA, BVL, BZSt, Destatis, BLE, DEHSt, Bundesanzeiger, LUCID, DIVID, Safety Gate, EU-CEG, NaBiSy, CEREMP, MaStR und viele mehr. Deshalb braucht die Plattform nicht nur "Dokument hochladen", sondern einen eigenen Quittungs-/Portalbeleg-Typ.

Was rein muss:

- Portalstammdaten je Kunde/Modul,
- verantwortliche Person intern/extern,
- keine Passwortspeicherung im MVP,
- Feld fuer Portalrolle, Benutzerkennung-Hinweis, Dienstleister, Frist, letzte Einreichung,
- Upload fuer Quittung, Screenshot, XML/PDF, E-Mail-Bestaetigung, Bescheid,
- Status: geplant, in Bearbeitung, eingereicht, bestaetigt, Rueckfrage, erledigt, archiviert,
- Export aller Einreichungsbelege je Zeitraum.

Warum es Geld bringt:

- das ist der eigentliche Klebstoff der Plattform,
- es macht aus Content ein Arbeitswerkzeug,
- Kunden zahlen, weil sie "wo ist der Beleg?" hassen,
- es laesst sich fuer jedes Modul wiederverwenden.

Grenze:

- keine automatische Portalabgabe im MVP,
- keine Passwoerter speichern,
- keine Fachentscheidung erzwingen,
- keine amtliche Kommunikation ohne Nutzerfreigabe.

Bewertung:

Unbedingt bauen. Das ist kein weiteres Modul, sondern eine Kernfunktion.

### 75.6 Finale Muss-Liste nach dem Tiefenscan

Unbedingt noch rein:

1. Jahresabschluss-/Offenlegungs-/E-Bilanz-Akte.
2. Handelsregister-/Gesellschafts-/Beschlussakte.
3. Geschaeftsgeheimnis-/NDA-/Know-how-Schutzakte.
4. Praxis-TI-/KIM-/SMC-B-/eHBA-Akte als Gesundheits-Vertiefung.
5. Portal-/Quittungs-/Einreichungsbeleg-Typ als Plattformkern.

Nicht neu bauen, aber prominent sichtbar machen, weil bereits enthalten und wichtig:

- Arbeitgeber-/BG-/SV-/KSK-/Schwerbehinderten-Meldekalender,
- DGUV-/Arbeitsschutz-/Betriebsarzt-/Sifa-Akte,
- Datenschutz-/AVV-/TOM-/Betroffenenrechte-Akte,
- Jahresfristen und Export fuer Steuerberater/Sifa/Pruefer,
- Produkt-/Handel-/Import-/EPR-/Rueckruf-/Produktdatenakten,
- Immobilien-/TGA-/Brandschutz-/Wartungs-/Pruefakten,
- Vergabe-/Praequalifikations-/Nachunternehmerakte,
- Finance-/AWV-/Bundesbank-/Tax-/Premiumdatenraeume.

Kernaussage:

Die fachliche Suche ist jetzt weit genug. Es fehlen nicht mehr viele neue Pflichten, sondern wenige breite Kernakten und eine harte Quittungs-/Portalbeleglogik. Wenn diese fuenf Punkte eingebaut werden, wirkt die Plattform nicht wie eine lose Pflichtenliste, sondern wie ein echtes Betriebssystem fuer Nachweise, Fristen, Portale, Exporte und Beraterarbeit.
