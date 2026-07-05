# Strategie und Monetarisierung: Unternehmenspflichten.de

Stand: 2026-07-05. Grundlage: Marktrecherche (Wettbewerb, Preise, Nachfrage,
Vertriebskanaele) plus ein Horizon-Scan angrenzender Geschaeftsmodelle. Diese Datei
ergaenzt die bestehenden Konzeptpapiere und benennt, was ueber das urspruengliche
Konzept hinaus den groessten Profit verspricht.

## Kurzfazit

Ein zahlender Markt existiert (belegt), aber **nicht** fuer eine breite
"alle Pflichten"-Plattform im Direktvertrieb an Kleinstbetriebe. Der Profit steckt in
drei Dingen, die im Ausgangskonzept fehlen oder unterbelichtet sind:

1. **Verkauf an den Berater/die Kanzlei als Kunde (B2B2B), nicht nur als Kanal.**
2. **Ein Transaktions-Layer:** an der eigentlichen Pflicht-Handlung mitverdienen
   (Verpackungslizenz, Pruefdienstleister), nicht nur am Abo.
3. **Frische, datierte Pflicht-Keile** mit null etabliertem Wettbewerb (v. a. EU-KI-Verordnung).

## Was der Markt belegt

- **Nachfrage real und wachsend:** ~7 % der Arbeitszeit im Mittelstand fuer Buerokratie
  (KfW Research 04/2025); NKR-Buerokratiekosten ~65 Mrd. EUR/Jahr. Neue Pflichtenwelle
  2024-2028: GPSR, E-Rechnung, BFSG, PPWR.
- **Haendler-Schmerz ist am schaerfsten:** Haendlerbund-Studie (~600 Haendler): 74 %
  nennen die GPSR-Umsetzung als groesste Huerde, 64 % fuehlen sich schlecht informiert,
  **55 % wuenschen sich explizit Tools, 49 % technische Umsetzungshilfen**; erste
  GPSR-Abmahnungen laufen.
- **Preishypothese bestaetigt:** 45-300 EUR/Monat ist der belegte Sweet Spot (Cortina ab
  45 EUR mit 400+ Kunden; Kopexa 249/599 EUR; CERTISCAN ab 29 EUR). Das KMU-Segment ist
  im GRC-Markt das am schnellsten wachsende (~13 % CAGR).
- **Der eigentliche Wettbewerber ist Excel:** ~43 % der KMU verwalten Compliance mit
  Tabellen/Papier. Grosse Chance und zugleich Warnung: der Status quo ist gratis.

## Wo das Ausgangskonzept gegen den Markt laeuft

- **Keil 1 (Pruef-/Fristen-Tracker) ist ueberfuellt:** HOPPE Wartungsplaner (Kauflizenz
  195 EUR, wirbt aktiv gegen Abos), 50+ CAFM-Anbieter, 8+ Wartungsplaner, und im Juni 2026
  ist mit FMFlow gerade ein Solo-Gruender in exakt diese Nische gestartet. Eintrittsbarriere
  niedrig, Differenzierung schwer.
- **Handwerk-Kleinstbetrieb als Erstkunde ist zaeh:** Bitkom-Handwerksstudie 2025
  (504 Betriebe): 72 % "zu ausgelastet" fuer Digitalisierung, 59 % halten Tools nur fuer
  groessere Betriebe fuer sinnvoll, nur 17 % nutzen Fachsoftware, 58 % kennen die Loesungen
  nicht.
- **Breite horizontale Pflichten-Angebote scheitern in DE:** RightNow (insolvent 2024),
  Legalbase (insolvent). Investoren finanzieren fokussierte Ansaetze (nu:legal: bewusst nur
  zwei Felder).

Konsequenz: **Keil-Reihenfolge umgedreht** (Haendler-Nachweisakte fuehrt jetzt, siehe
`app/schema.php`), Kleinsthandwerk nicht als Erstzielgruppe.

## Blick ueber den Tellerrand: die vier Hebel jenseits des Konzepts

### 1. B2B2B — die Kanzlei/der Berater ist der Kunde, nicht nur der Kanal

Der Markt fuer Kanzlei-Software ist voll (Personalcockpit, SKM2.0, Stotax), aber die decken
**interne Kanzleifristen** ab, nicht die **Mandanten-Pflichten** (GPSR, Betreiber-, KI-,
Offenlegungspflichten). Genau da ist eine Luecke. Das Berater-Modul wurde deshalb zum
**Kanzlei-/Berater-Cockpit** umgebaut: die Kanzlei bucht, sieht offene Nachweise je Mandant,
fordert Belege an und exportiert. Das loest zwei Probleme auf einmal:

- **Distribution:** Lexware, sevdesk, HRworks beweisen, dass Berater Mandanten-Software
  multiplizieren, wenn sie selbst Zeit sparen. Ein Berater bringt viele Betriebe mit.
- **RDG-Grenze:** Der Berater ist der Profi und trifft die fachliche Bewertung selbst; die
  Plattform bleibt reines Nachweis-/Fristenwerkzeug. Die defensive Positionierung wird zum
  Vorteil statt zum Verkaufshemmnis.

Zahlungsbereitschaft und Budget sind bei Kanzleien deutlich hoeher als beim Kleinstbetrieb.

### 2. Transaktions-Layer — an der Pflicht-Handlung mitverdienen

Fast jede Pflicht endet in einer bezahlten Handlung, nicht nur in einem Beleg:

- **Verpackungslizenz (LUCID):** Vermittler verdienen Provision am Lizenzabschluss beim
  dualen System (Partnerlink, ohne Aufschlag fuer den Kunden). Die Nachweisakte ist der
  kostenlose Haken, die vermittelte Lizenz die Marge.
- **Pruefdienstleister (DGUV V3, Feuerloescher):** Jede Pruefung **muss** eine qualifizierte
  Fachkraft leisten. Wird eine Frist "rot", vermittelt die Plattform ein Angebot und nimmt
  eine Lead-/Vermittlungsgebuehr. Damit wird ein Kostenfeature zur Umsatzquelle.

In den Seeds ist diese Option in den Modultexten von Haendler-Akte und Fristen-Tracker
bereits angelegt ("optional Vermittlung passender Dienstleister"). Umsatzpotenzial pro Lead
liegt oft hoeher als eine Monatsgebuehr.

### 3. KI-Verordnungs-Akte — der frische, datierte Keil ohne Wettbewerber

Die EU-KI-Verordnung schafft echte, neue Nachweispflichten mit festem Datum
(KI-Kompetenz seit 02.02.2025, Betreiberpflichten ab 02.08.2026). Es gibt dafuer noch
kein etabliertes Nachweis-Tool im KMU-Markt und keine "automatische Fristenerkennung" der
Wettbewerber. Als Nachweisakte (KI-Register, Schulungsnachweise, Logs) passt es exakt ins
Konzept und laesst sich als Erster besetzen. Modul und SEO-Landingpage sind angelegt.

### 4. E-Rechnung 2028 als universeller Lead-Magnet

Ab 01.01.2028 muss **jedes** inlaendische B2B-Unternehmen E-Rechnungen ausstellen
(>800.000 EUR Umsatz schon ab 2027). Das ist erzwungene Adoption mit hartem Datum. Das
Ausstellen selbst ist umkaempft (jede Buchhaltungssoftware), aber der weniger besetzte
Winkel ist die **GoBD-konforme Archivierung/Belegakte** plus Kanzlei-Export. Als
SEO-/Lead-Magnet angelegt (Landingpage `e-rechnung-pflicht-archivierung`).

### Optional spaeter: Verbaende als Skalierungskanal, KI-natives Produkt

- **Kammern/Innungen (79 IHKs, 50+ HWKs):** grosse Reichweite zu Mitgliedern; als
  White-Label-/Kooperationskanal denkbar, aber langer Vertriebszyklus - erst nach Traktion.
- **KI-natives Produkt** (Dokumente auslesen, Fristen automatisch vorschlagen) als
  Differenzierung gegenueber den "dummen" Trackern am Markt - Produktvision, kein Startpunkt.

## Phasenplan (profitmaximal fuer bootstrapped Aufbau)

| Phase | Zeit | Was | Geldmechanik |
|-------|------|-----|--------------|
| 0 | jetzt, ~2 Wochen | Website live, radikal auf Haendler-Keil, SEO-Landingpages | 0 EUR; misst, ob Leads kommen, bevor gebaut wird |
| 1 | Monat 1-3 | "Done-for-you": GPSR-/LUCID-Nachweisordner-Einrichtung als Dienstleistung | 300-1.500 EUR einmalig; validiert Zahlungsbereitschaft, finanziert Bau |
| 2 | Monat 3-9 | Vertikal-SaaS nur fuer den bewiesenen Keil | 49-99 EUR/Monat; 100 Kunden ~ 95k ARR, 500 ~ 600k ARR |
| 3 | ab Monat 9 | Fristen-Tracker + KI-Akte nachziehen, Kanzlei-Cockpit + Transaktions-Layer, SEO-Breite | Expansion Revenue + Provision + Kanalskalierung |

## Zwei Entscheidungen, an denen der Profit haengt

1. **Haendler-Nachweisakte zuerst, Fristen-Tracker spaeter** - staerkste Nachfrage,
   schwaechste Konkurrenz. (Umgesetzt in den Seeds.)
2. **Service/Transaktion bewusst einpreisen** - der Markt zeigt, dass Software+Mensch besser
   monetarisiert als reines Self-Service; die RDG-Grenze zwingt ohnehin zur Partnervermittlung.

## Wesentliche Risiken

- **Distribution, nicht Konzept, ist der Engpass** - Kleinstbetriebe sind teuer zu erreichen;
  darum B2B2B und SEO statt kalter Direktvertrieb.
- **Der Fristen-Tracker-Markt ist ueberfuellt** - dort nicht zuerst kaempfen.
- **Excel/Status quo ist gratis** - der Nutzen muss ueber Erinnerung, Wiederauffindbarkeit und
  Export klar spuerbar sein, nicht ueber Feature-Breite.
- **Reines Self-Service ohne Beratungsanteil** verkauft im Compliance-Umfeld schwerer -
  Partnernetz ist Pflicht, nicht Kuer.

## Quellenlage

Die Marktzahlen stammen aus einer Recherche vom 05.07.2026 (u. a. Haendlerbund-GPSR-Studie,
Bitkom-Handwerksstudie 2025, KfW Research 04/2025, Cortina/Kopexa/CERTISCAN-Preise,
Mordor Intelligence GRC-Markt, HOPPE/FMFlow/CAFM-Wettbewerb, LTO zu Legal-Tech-Insolvenzen).
Die adversariale Verifikation konnte wegen eines Session-Limits nicht abgeschlossen werden;
die Einzelzahlen sind daher als gut belegt, aber nicht doppelt gegengeprueft zu behandeln.
