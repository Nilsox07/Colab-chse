# Bitte pruefen: RDG-sicheres Konzept fuer unternehmenspflichten.de

Stand: 2026-06-18

## Ziel der Pruefung

Bitte pruefe konkret, ob der Umbau im Text wirklich RDG-sauberer ist oder ob der riskante "Pflichtfinder" nur umbenannt in Produkt-Compliance, Branchenpaketen oder anderen Modulen weiterlebt.

## Architekturentscheidung

Es wird eine eigenstaendige Plattform gebaut:

**unternehmenspflichten.de**

Nicht als Shopkonform-Modul, nicht mit Shopkonform-Login, nicht mit Shopkonform-Billing und nicht nur fuer Shopanbieter.

Shopkonform-nahe Punkte werden maximal als Ideen uebernommen:

- Produktunterlagen je SKU
- Lieferantendokumente
- Marktplatznachweise
- Produktakten-Struktur
- Exportpakete fuer Plattformen, Pruefer oder Berater

Die Plattform ist breiter:

- Pruefungen
- Fristen
- Nachweise
- Wartungen
- Geraete
- Anlagen
- Fahrzeuge
- Unterweisungen
- Produktunterlagen
- Immobilien-/Facility-Nachweise
- Profi-Export

## RDG-Leitplanke

Der MVP darf nicht:

- aus Firmendaten automatisch ableiten, welche Pflicht gilt
- aus Produktdaten automatisch ableiten, ob CE/GPSR/WEEE/BattG/VerpackG/Textilkennzeichnung gilt
- aus Branche, Mitarbeiterzahl, Anlagen oder Produkten eine individuelle Rechtsfolge ausgeben
- schreiben: "Diese Pflicht gilt fuer dich"
- schreiben: "Diese Pflicht gilt nicht fuer dich"
- eine Compliance-Garantie geben

Der MVP darf:

- Fristen verwalten
- Nachweise sammeln
- Dateien hochladen
- PDF-/ZIP-Ordner exportieren
- statische Informationen und Quellen zeigen
- Nutzer eigene Objekte, Produkte, Fristen und Ordner manuell anlegen lassen
- Unterlagen fuer Steuerberater, Anwalt, Pruefer, Sifa, Produktberater oder Behoerde exportieren
- Eingaben nutzen, um typische Themen allgemein zu sortieren

Erlaubte Sortierlogik:

> Betriebe mit diesen Merkmalen befassen sich typischerweise mit folgenden Themen. Hier sind Quelle, Schwellenwert, Fristart und Nachweisvorlage.

Nicht erlaubt:

> Diese Pflicht trifft dich zu.

> Diese Pflicht trifft dich nicht zu.

Der Nutzer hakt selbst ab, welche Themen er in seinen Ordner uebernimmt.

## Produkt-Compliance-Grenze

Im Produktmodul darf das System:

- SKUs importieren
- Produktunterlagen je SKU sammeln
- vom Nutzer manuell gewaehlte Ordner-Sets nutzen
- fehlende Dateien innerhalb des gewaehlten Ordner-Sets anzeigen
- Lieferantendokumente anfordern
- Marktplatz-Antwortpakete aus vorhandenen Unterlagen zusammenstellen
- Nachweise fuer Marktplatz, Pruefer oder Berater exportieren
- Quellen und Beispiele allgemein anzeigen
- Produktmerkmale nutzen, um allgemeine Unterlagenthemen zu sortieren

Im Produktmodul darf das System im MVP nicht:

- automatisch Produktpflichten zuordnen
- automatisch sagen, ob CE/GPSR/WEEE/BattG/VerpackG gilt
- automatisch empfehlen: "waehle fuer diese SKU dieses Pflicht-Set"
- einen Compliance-Score als rechtliche Bewertung erzeugen
- eine KI-Produktklassifizierung mit Rechtsfolge machen

## Abmahn- und Werbesperren

Diese Begriffe sollen nicht als Leistungsversprechen genutzt werden:

- rechtssicher
- compliant
- garantiert
- alle Pflichten erfuellt
- Pflicht erfuellt
- vollstaendig rechtskonform
- sicher compliant
- Audit-ready

Jede Pflicht-/Themenseite braucht:

- Stand: TT.MM.JJJJ
- Quell-Link
- Hinweis auf allgemeine Information
- klare Grenze: ersetzt keine Rechts-, Steuer- oder Fachberatung
- naechster Schritt: in Ordner uebernehmen, mit Profi klaeren oder exportieren

## MVP

Phase 1:

- Firmenkonto
- Standorte
- Geraete
- Anlagen
- Fahrzeuge
- Produkte/SKUs
- Dateien
- Nachweisordner
- Fristen
- Erinnerungen
- PDF-/ZIP-Export
- manuelle Ordner-Sets

Phase 2:

- Produktunterlagen je SKU
- Plattformnachweise
- Lieferantendokumente
- Wartungs- und Pruefunterlagen
- Unterweisungsnachweise
- Exportpakete fuer Marktplatz, Pruefer, Berater, Steuerberater, Sifa oder Behoerde

Nicht im MVP:

- personalisierter Pflichtfinder
- automatische Produktpflicht-Zuordnung
- AI Act/NIS2/KRITIS/DORA/CBAM/EUDR als Entscheidungsautomaten
- SEO-first-Strategie

## Umsatzplanung

Jahr 1 konservativ:

- 20-75 zahlende Kunden
- 29-149 EUR/Monat
- 1.000-8.000 EUR MRR

Jahr 1 gut:

- 75-200 zahlende Kunden
- 49-199 EUR/Monat
- 5.000-30.000 EUR MRR

Jahr 2 bei funktionierendem Produkt und Vertrieb:

- 200-700 zahlende Kunden
- 49-249 EUR/Monat
- 15.000-100.000 EUR MRR

SEO wird nicht als Jahr-1-Haupttreiber angenommen. Vertrieb zuerst ueber direkte B2B-Kontakte, Branchenansprache und Partner.

## Monetarisierungskern

Der Umsatz soll nicht am einmaligen Check haengen, sondern an:

- Fristenerinnerungen
- Nachweisordnern
- Exporten
- mehreren Standorten
- mehr Mitarbeitern
- mehr Anlagen/Geraeten/Fahrzeugen
- mehr Produkten/SKUs
- Setup/Datenimport
- Partnervermittlung

Der Profi-Export ist der wichtigste Paywall-Ausloeser. Partnervermittlung soll gross gedacht werden, weil sie margenstark und haftungsaermer ist.

## Bitte konkret beantworten

1. Lebt irgendwo noch ein RDG-riskanter Pflichtfinder versteckt weiter?
2. Ist die Produkt-Compliance-Grenze sauber genug oder immer noch zu nah an Rechtsanwendung?
3. Ist die Entscheidung "eigenstaendige Plattform, Shopkonform nur als Ideenquelle" richtig?
4. Ist der MVP noch wertvoll genug, wenn er keine automatische Produktpflicht-Zuordnung macht?
5. Ist die Sortierlogik "typische Themen" tragfaehig oder weiterhin zu nah an Subsumtion?
6. Welche Formulierung muesste raus, bevor gebaut wird?
