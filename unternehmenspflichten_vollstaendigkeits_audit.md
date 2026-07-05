# unternehmenspflichten.de - RDG-sicheres Produktkonzept

Stand: 2026-06-18  
Markt: Deutschland zuerst, spaeter EU/DACH  
Ziel: Online-only, self-service, wenig manueller Aufwand, keine Rechtsberatung

## 1. Harte Korrektur

Das urspruengliche Konzept "Pflichtfinder berechnet aus Unternehmensdaten, welche Pflichten gelten" ist RDG-riskant.

Problem:

- Branche + Mitarbeiterzahl + Anlagen + Produkte -> "diese Pflicht gilt fuer dich" ist wahrscheinlich eine rechtliche Einzelfallpruefung.
- Ein weicher Text wie "kann relevant sein" reicht nicht, wenn die Maschine faktisch den Einzelfall auf eine Rechtsfolge abbildet.
- Disclaimer loesen das Kernproblem nicht.

Deshalb wird der MVP nicht als personalisierter Pflichtbescheid gebaut.

Stattdessen:

> Pruefungen, Fristen, Unterlagen und Nachweise eines Betriebs sauber verwalten, erinnern, exportieren und an Profis uebergeben.

Die Engine bleibt, aber sie sortiert nur. Sie urteilt nicht.

Erlaubte Logik:

> Betriebe mit diesen Merkmalen befassen sich typischerweise mit folgenden Themen. Hier sind Quelle, Schwellenwert, Fristart und Nachweisvorlage.

Verbotene Logik:

> Diese Pflicht trifft dich zu.

> Diese Pflicht trifft dich nicht zu.

Das ist der bessere und sicherere Start.

## 2. Neues Kernversprechen

Nicht:

> Wir sagen dir, welche Pflichten dich rechtlich treffen.

Sondern:

> Alle Pruefungen, Fristen und Nachweise deines Betriebs an einem Ort.

Oder kurz:

> Nichts vergessen. Alles nachweisen koennen.

## 3. Rechtliche Leitplanken

Die Plattform darf im MVP:

- Fristen und Termine verwalten
- Nachweise sammeln
- Dateien hochladen
- PDF-/ZIP-Ordner erzeugen
- statische Informationsseiten anzeigen
- Quellen verlinken
- Checklisten und Dokumentvorlagen bereitstellen
- Nutzer eigene Objekte, Pflichten und Termine manuell anlegen lassen
- Daten fuer Steuerberater, Anwalt, Pruefer, Sifa, Datenschutzbeauftragte oder Behoerde exportieren

Die Plattform darf im MVP nicht:

- personalisiert ausgeben: "Diese Pflicht gilt fuer dich"
- personalisiert ausgeben: "Diese Pflicht gilt nicht fuer dich"
- aus Firmendaten automatisch eine rechtliche Einzelfallbewertung ableiten
- eine Compliance-Garantie geben
- Fachkunde, Steuerberatung oder Rechtsberatung ersetzen

Der personalisierte Pflichtbescheid bleibt gesperrt, bis ein Fachanwalt fuer RDG/IT-Recht die konkrete Logik geprueft hat. Der Themen-Sortierer darf vorbereitet werden, muss aber vor Launch ebenfalls einmalig fachanwaltlich auf Formulierungen, Flow und Grenzen geprueft werden.

### 3.1 Themen-Sortierer statt Pflichturteil

Der Sortierer darf Eingaben nutzen:

- Branche
- Mitarbeiterzahl
- Standortanzahl
- Anlagenarten
- Geraetetypen
- Fahrzeuge
- Produkte/SKUs
- Vertriebskanal

Ergebnis darf sein:

- "Typische Themen fuer Betriebe mit diesen Merkmalen"
- Quellen
- Schwellenwerte als allgemeine Information
- Fristarten
- Nachweisvorlagen
- verwandte Themen
- Button: "In meinen Ordner uebernehmen"
- Button: "Mit Profi klaeren"

Ergebnis darf nicht sein:

- "du bist betroffen"
- "du bist nicht betroffen"
- "Pflicht erfuellt"
- "alle Pflichten abgedeckt"
- "rechtskonform"
- "sicher compliant"

Der Nutzer entscheidet selbst, welche Themen er uebernimmt. Die Plattform verwaltet danach nur Fristen, Nachweise und Exporte.

## 4. Warum Tracker zuerst

Der Pruef-, Fristen- und Nachweis-Tracker ist der sauberste Einstieg, weil:

- der Nutzer selbst eintraegt, was er verwalten will
- das System keine Rechtsfolge ausspricht
- der Nutzen trotzdem sofort klar ist
- Fristen, Uploads, Erinnerungen und Exporte technisch einfach baubar sind
- wiederkehrender Abo-Nutzen entsteht
- Partner wie Pruefer, Sifa, Brandschutz, Wartung und Steuerberater angebunden werden koennen

Das ist kein Rueckschritt. Es ist der stabile Kern.

## 5. Produktstruktur

### 5.1 Tracker

Der Nutzer legt selbst an:

- Standorte
- Anlagen
- Geraete
- Maschinen
- Fahrzeuge
- Feuerloescher
- Leitern und Tritte
- Elektrogeraete
- Unterweisungen
- Wartungen
- Vertraege
- Versicherungen
- Produktunterlagen
- Lieferantendokumente
- eigene Termine und Aufgaben

Das System verwaltet:

- Faelligkeiten
- Erinnerungen
- Status: offen, erledigt, ueberfaellig, pruefen lassen
- Nachweise
- Uploads
- Wiederholungen
- PDF-/ZIP-Exporte

### 5.2 Nachweisordner

Export fuer:

- Steuerberater
- Anwalt
- Sifa
- Betriebsarzt
- Pruefer
- Kunden
- Lieferanten
- Versicherer
- interne Kontrolle
- Behoerden

Der Nachweisordner ist der staerkste Kernnutzen, weil er die Plattform als Zulieferer des Profis positioniert, nicht als Ersatz fuer den Profi.

### 5.3 Themen- und Pflichtbibliothek

Die Bibliothek zeigt quellenbasierte Inhalte. Sie kann ueber den Themen-Sortierer sortiert oder vorgefiltert werden, bleibt aber allgemein formuliert:

- Was ist die Pflicht?
- Welche typischen Betriebe koennen betroffen sein?
- Welche Quelle gibt es?
- Welche Fristart gibt es?
- Welche Nachweise werden typischerweise gebraucht?
- Welche verwandten Themen gibt es?
- Wann sollte ein Profi eingeschaltet werden?

Wichtig: Keine individuelle Ausgabe "gilt fuer dich". Der Wert entsteht durch schnellere Orientierung, nicht durch ein Rechtsurteil.

### 5.4 Dokumenten- und Vorlagenbereich

Moegliche Vorlagen:

- Prueflisten
- Wartungslisten
- Unterweisungsnachweise
- Uebergabeprotokolle
- Produktakten-Struktur
- Lieferantenauskunft
- Geraeteliste
- Anlagenliste
- Fahrzeugliste
- Nachweisdeckblatt
- Exportdeckblatt fuer Profis

## 6. MVP-Reihenfolge

### Phase 1: RDG-neutraler Kern

Bauen:

- Firmenkonto
- Standorte
- Objekte/Geraete/Anlagen/Fahrzeuge
- Fristen
- Erinnerungen
- Uploads
- Nachweisordner
- PDF-/ZIP-Export
- manuelle Vorlagenbibliothek

Startobjekte:

- Elektropruefung
- Feuerloescher
- Leitern/Tritte
- Maschinen
- Fuhrpark
- Unterweisungen
- Ersthelfer-/Brandschutzhelfer-Nachweise
- Versicherungen
- Wartungen
- Produktunterlagen

### Phase 2: Produkt- und Haendler-Compliance als ein Branchenpaket

Produkt- und Haendler-Compliance bleibt wichtig, aber nicht als einziger Fokus. Es ist ein starkes Branchenpaket innerhalb der groesseren Plattform, weil Onlinehaendler, Importeure und Private-Label-Anbieter viele Unterlagen, Lieferantennachweise und Marktplatznachweise verwalten muessen.

Wichtige RDG-Grenze: Die Sperre fuer personalisierte Pflichtlogik gilt hier genauso. Das System darf nicht aus Produktdaten automatisch ableiten: "Fuer dieses Produkt gilt CE/GPSR/WEEE/BattG/VerpackG/Textilkennzeichnung." Genau das waere wieder eine produktbezogene Rechtsanwendung. Im MVP bleibt Produkt-Compliance daher ein Produktunterlagen- und Nachweisordner, keine automatische Produktpflicht-Zuordnung.

Erlaubt ist eine allgemeine Sortierung nach Produktmerkmalen:

- "Haendler mit solchen Produktarten befassen sich typischerweise mit diesen Unterlagenthemen"
- Quellen und Beispiele
- neutrale Ordner-Sets
- manuelle Uebernahme durch den Nutzer
- Profi-Export, wenn die Einordnung geklaert werden soll

Nicht erlaubt ist eine automatische rechtliche Einordnung der SKU.

Zielgruppen:

- Onlinehaendler
- Amazon-/Shopify-/JTL-Haendler
- Importeure
- Private Label
- Hersteller
- Grosshaendler

Verwaltet werden:

- Produktlisten
- Herstellerdaten
- Importeurdaten
- Lieferantendokumente
- Konformitaetserklaerungen
- Bedienungsanleitungen
- Verpackungsnachweise
- WEEE-/ElektroG-Nachweise
- Batterienachweise
- Rueckruf-/Beschwerdedokumentation
- Plattformnachweise

Zulaessiger Verkaufswert ohne Rechtsurteil:

- SKUs importieren
- Produktunterlagen je SKU sammeln
- vom Nutzer manuell gewaehlte Ordner-Sets nutzen
- fehlende Dateien im gewaehlten Ordner anzeigen
- Lieferantendokumente anfordern
- Nachweise fuer Marktplatz, Pruefer oder Berater exportieren
- Quellen und Beispiele allgemein anzeigen
- Marktplatz-Antwortpakete aus vorhandenen Unterlagen zusammenstellen
- Lieferanten-Chasing dokumentieren

Nicht im MVP:

- automatische Produktklassifizierung mit Rechtsfolge
- automatische Aussage, welche Produktpflicht gilt
- automatische Aussage, welche Produktpflicht nicht gilt
- automatische Empfehlung: "waehle fuer diese SKU dieses Pflicht-Set"
- Compliance-Score als rechtliche Bewertung

Spaeter nur nach RDG-/IT-Rechtspruefung:

- gefuehrter Produkt-Konfigurator
- regelbasierte Vorauswahl von Pflichtbereichen
- KI-gestuetzte Produktklassifizierung

Wichtig fuer den MVP-Wert: Der Nutzen entsteht nicht durch Rechtsentscheidung, sondern durch Ordnung, Vollstaendigkeit innerhalb eines gewaehleten Ordner-Sets, Lieferantenkommunikation, Marktplatz-Export und Nachweisfaehigkeit. Wenn ein Produkt rechtlich eingeordnet werden muss, passiert das ausserhalb der Automatik durch den Nutzer, einen Fachpartner oder eine gesondert gepruefte Beratung.

### Phase 3: Profi- und Partnerkanal

Ziel:

- Steuerberater
- Sifa
- Betriebsarzt
- Datenschutzbeauftragte
- Pruefer
- Brandschutzdienstleister
- Entsorger
- Produktberater
- Zoll-/CBAM-Berater

Funktion:

- Mandantenordner
- Exportpakete
- offene Unterlagen
- Partnerzugang
- Reseller-Modell

### Phase 4: Statische SEO-Bibliothek

SEO ja, aber nicht als Hauptumsatz im ersten Jahr.

Seitentypen:

- allgemeine Pflichtseite
- Branchenuebersicht
- Vorlagen-Seite
- Fristen-Seite
- Kosten-/Vergleichsseite
- Profi-Weiterleitungsseite

Keine Seite darf einen individuellen Rechtsbescheid erzeugen.

## 7. Startfelder

### 7.1 Pruef- und Fristen-Tracker

Beste Zielgruppen:

- Handwerk
- Kfz-Werkstaetten
- Hausverwaltungen
- Facility Management
- Gastronomie
- kleine Produktion
- Lager/Logistik
- Filialbetriebe

Warum stark:

- sofort erklaerbar
- wiederkehrender Nutzen
- wenig RDG-Risiko
- gute Partnerangebote
- einfache Datenstruktur

Preis:

- 29-149 EUR/Monat
- 199-1.500 EUR Setup

### 7.2 Produkt- und Haendler-Compliance-Ordner

Beste Zielgruppen:

- Onlinehaendler
- Importeure
- Private-Label-Haendler
- Marktplatzhaendler
- Grosshandel

Warum stark:

- echte Domain-Credibility
- hoher Druck durch Marktplatz, Import und Marktueberwachung
- gute Datenimporte fuer SKUs, Dateien und Lieferantendaten moeglich
- passt als eigenstaendiges Branchenpaket in die Plattform
- Verkaufswert liegt im Nachweisordner, nicht in einer automatischen Rechtsbewertung

Preis:

- 99-299 EUR/Monat
- 499-3.000 EUR Setup je nach Produktanzahl

### 7.3 Profi-Export

Beste Zielgruppen:

- Betriebe mit Steuerberater
- Betriebe mit externer Sifa
- Betriebe mit Pruefern
- Betriebe mit Kundenpruefungen oder Nachweisanforderungen
- Lieferanten groesserer Unternehmen

Warum stark:

- reduziert Haftungsversprechen
- macht Profis zu Vertriebspartnern
- schafft B2B-Vertrauen

Preis:

- im Abo enthalten
- Partner-/Kanzleipakete spaeter

## 8. Was bewusst nach hinten kommt

Diese Themen bleiben in der Bibliothek, aber nicht im MVP als aktiver Entscheidungsautomat:

- AI Act
- NIS2
- DORA
- KRITIS
- CBAM
- EUDR
- Datenschutz-Spezialchecks
- Umwelt-/BImSchG-Spezialfaelle
- Wasserstoff/Grossanlagen
- Strahlenschutz
- Luftsicherheit
- Medizin/Pharma/BtM
- Gluecksspiel
- Waffen
- Pyrotechnik/Sprengstoff

Grund:

- mehr Rechts-/Fachrisiko
- mehr Aktualitaetsaufwand
- mehr Spezialkonkurrenz
- weniger eigener Startvorsprung

## 9. Architekturentscheidung: eigenstaendige Plattform

Entscheidung: Shopkonform wird nicht angebunden und nicht als Startmarke genutzt.

Gebaut wird eine eigenstaendige Plattform:

- Name: unternehmenspflichten.de
- Kernprodukt: Fristen-, Pruef- und Nachweisordner fuer Betriebe
- Zielgruppe: nicht nur Haendler, sondern alle Betriebe mit wiederkehrenden Pruefungen, Unterlagen und Nachweisen
- Infrastruktur: eigene Nutzer, eigenes Billing, eigene Datenbasis
- Vertrieb: Direktvertrieb, Branchenpakete, Partner, spaeter SEO
- Nutzen: Geraete, Anlagen, Fahrzeuge, Wartungen, Pruefungen, Unterlagen, Produktakten, Fristen und Exportpakete

Shopkonform-Punkte werden nur als Erfahrungs- und Ideenquelle uebernommen:

- Produkt-/SKU-Unterlagenordner
- Lieferantendokumente
- Marktplatznachweise
- Produktakten-Struktur
- Exportpakete fuer Plattformen, Pruefer oder Berater

Nicht uebernommen wird:

- Shopkonform-Marke
- Shopkonform-Billing
- Shopkonform-Datenbank
- Shopkonform-Login
- Shopkonform-Vertriebsfokus als alleinige Zielgruppe

Grund:

- auf dieser Plattform passiert deutlich mehr als nur Shop-/Haendler-Compliance
- die groesseren Maerkte liegen auch in Arbeitsschutz, Pruefungen, Immobilien, Handwerk, Fuhrpark, Wartung, Nachweisen und Profi-Export
- eine zu enge Shopanbieter-Positionierung wuerde das eigentliche Potenzial begrenzen
- Produkt-/Haendler-Compliance bleibt ein Modul, aber nicht die ganze Story

Startfokus trotzdem eng halten:

- zuerst Tracker/Nachweisordner
- dann 3-5 klare Branchenpakete
- keine 17 Module gleichzeitig
- keine automatische Rechtsentscheidung

## 10. Content- und Aktualitaetsproblem

Content-Aktualitaet ist ein echter Kostenblock.

Deshalb:

- keine 17 Module gleichzeitig starten
- keine 100+ Seiten ohne Pflegeprozess
- keine konkreten Fristen als harte Produktlogik ohne Review
- jede Quelle mit "Stand" speichern
- jede Pflichtseite bekommt Review-Datum
- Aenderungen werden als Redaktionsaufgabe gefuehrt
- Datenmodell breit planen, Content aber schmal starten
- erst eine Branche tief und korrekt bauen, dann das Muster wiederholen
- 1.000 flache Branchenseiten sind Haftungsflaeche, nicht automatisch Umsatz

MVP-Inhalt zuerst:

- langlebige Tracker-Objekte
- Vorlagen
- Nachweisarten
- Produktunterlagen
- Quellenlinks
- keine juristische Detailmaschine

## 11. Abmahn- und Werbesperren

Diese Begriffe duerfen nicht als Leistungsversprechen auf eigenen Seiten stehen:

- rechtssicher
- compliant
- garantiert
- alle Pflichten erfuellt
- Pflicht erfuellt
- vollstaendig rechtskonform
- sicher compliant
- Audit-ready

Erlaubte, defensivere Sprache:

- Nachweise verwalten
- Fristen erinnern
- Unterlagen strukturieren
- Quellen anzeigen
- Export fuer Pruefer, Steuerberater, Sifa, Berater oder Behoerde
- typische Themen anzeigen
- Fachklaerung vorbereiten

Jede Pflicht-/Themenseite braucht:

- Stand: TT.MM.JJJJ
- Quell-Link
- Hinweis auf allgemeine Information
- klare Grenze: ersetzt keine Rechts-, Steuer- oder Fachberatung
- naechster Schritt: in Ordner uebernehmen, mit Profi klaeren oder exportieren

Der Disclaimer ist keine Dekoration. Die Funktion darf die Fachklaerung nicht heimlich selbst ersetzen.

## 12. Umsatzschaetzung korrigiert

Die alte aggressive Schaetzung gehoert raus.

Realistischer Kaltstart:

- SEO bringt im ersten Jahr wenig
- Vertrieb zuerst ueber direkte B2B-Kontakte, Branchenansprache und Partner
- Partnerkanal frueh testen
- Zahlungsbereitschaft ueber konkrete Nachweisordner validieren

Jahr 1, konservativ:

- 20-75 zahlende Kunden
- 29-149 EUR/Monat
- 1.000-8.000 EUR MRR

Jahr 1, gut:

- 75-200 zahlende Kunden
- 49-199 EUR/Monat
- 5.000-30.000 EUR MRR

Jahr 2, wenn Produkt und Vertrieb funktionieren:

- 200-700 zahlende Kunden
- 49-249 EUR/Monat
- 15.000-100.000 EUR MRR

Alles darueber braucht starken Vertrieb, Partner, Produktklarheit, belastbare Retention und SEO-Zeit.

## 13. Monetarisierung

Die Geldmaschine ist nicht der einmalige Check, sondern wiederkehrende Fristen, Erinnerungen, Nachweise, Exporte und Partnervermittlung. Ein Check wird einmal gemacht und wieder gekuendigt. Ein Fristen- und Nachweisordner bleibt klebrig, weil Kuendigung bedeutet: Der Betrieb verliert seinen Ueberblick.

### Free

- 1 Betrieb
- begrenzte Anzahl Objekte
- einfache Fristen
- wenige Uploads
- allgemeine Themenliste ansehen

### Starter

- 29-49 EUR/Monat
- Fristen
- Uploads
- einfache Exporte

### Business

- 79-149 EUR/Monat
- mehrere Standorte
- mehr Objekte
- Vorlagen
- PDF-/ZIP-Export
- Nutzerrollen

### Pro

- 199-299 EUR/Monat
- Produktlisten
- Massenimport
- Nachweis-/Pruefer-Export
- Partnerzugang

### Wachstumstreiber

Preise sollen mit dem Kunden wachsen:

- Standorte
- Mitarbeiter
- Anlagen
- Geraete
- Fahrzeuge
- Produkte/SKUs
- Speicherplatz
- Nutzerrollen
- Exportpakete

Der staerkste Paywall-Ausloeser:

- gratis sehen und sortieren
- kostenlos erste Objekte anlegen
- zahlen fuer Export, Erinnerungen, Team, viele Objekte, viele Standorte und grosse Nachweisordner

### Setup

- 199-3.000 EUR
- Datenimport
- Ordnerstruktur
- Produkt-/Geraetelisten
- keine Beratung, nur Einrichtung und Strukturierung

### Partnerumsatz

Partnerumsatz soll gross gedacht werden, weil er margenstark und haftungsaermer ist.

Moegliche Partner:

- Pruefer
- Sifa
- Betriebsarzt
- Brandschutzdienstleister
- Schulungsanbieter
- Entsorger
- Wartungsfirmen
- Produktberater
- Zoll-/Importberater
- Steuerberater
- Datenschutzbeauftragte

Die Plattform vermittelt, sammelt Unterlagen und exportiert. Die Fachaussage liegt beim qualifizierten Partner.

## 14. Technische Datenstruktur

Kernobjekte:

- Unternehmen
- Standort
- Nutzer
- Objekt
- Objektkategorie
- Frist
- Wiederholung
- Nachweis
- Datei
- Vorlage
- Export
- Partner
- Quelle
- Review-Datum

Objektkategorien:

- Geraet
- Maschine
- Anlage
- Fahrzeug
- Dokument
- Produkt
- Lieferant
- Mitarbeiterbezogener Nachweis
- Vertrag
- Versicherung
- Sonstiges

## 15. KI-Nutzung

KI darf:

- Uploads benennen und sortieren
- Fristen aus Nutzerangaben in Kalendereintraege umwandeln
- Checklisten aus Vorlagen erzeugen
- Dokumente zusammenfassen
- Exportordner strukturieren
- allgemeine Quellen erklaeren

KI darf nicht:

- rechtlich entscheiden, ob eine Pflicht gilt
- rechtlich entscheiden, ob eine Pflicht nicht gilt
- individuelle Rechtsberatung geben
- Compliance garantieren

## 16. Quellen und Pruefpunkte

Wichtige Ausgangspunkte:

- RDG Paragraf 2: https://www.gesetze-im-internet.de/rdg/__2.html
- BGH Smartlaw I ZR 113/20: https://www.bundesgerichtshof.de/SharedDocs/Pressemitteilungen/DE/2021/2021171.html
- BMAS Mindestlohn-Dokumentation: https://www.bmas.de/DE/Arbeit/Arbeitsrecht/Mindestlohn/Dokumentationspflicht/dokumentationspflicht-art.html
- DGUV Ersthelfer: https://www.dguv.de/fb-erstehilfe/themenfelder/betrieblicher-ersthelfer/index.jsp
- BAuA ASR A2.2 Brandschutzhelfer: https://www.baua.de/DE/Angebote/Regelwerk/ASR/pdf/ASR-A2-2.pdf
- BMF E-Rechnung: https://www.bundesfinanzministerium.de/Content/DE/FAQ/e-rechnung.html
- Transparenzregister: https://www.transparenzregister.de/
- Wirtschafts-ID BZSt: https://www.bzst.de/DE/Unternehmen/Identifikationsnummern/Wirtschafts-Identifikationsnummer/wirtschaftsidentifikationsnummer_node.html
- Kuenstlersozialkasse: https://www.kuenstlersozialkasse.de/unternehmen-und-verwerter/wer-ist-abgabepflichtig
- Marktstammdatenregister: https://www.marktstammdatenregister.de/

## 17. Endurteil

Das Projekt ist weiterhin gut, aber anders als zuerst gedacht.

Nicht bauen:

- grosse Pflicht-Suchmaschine mit personalisiertem "trifft dich"-Urteil
- 17 Module auf einmal
- SEO-first im ersten Jahr
- aggressive Umsatzstory
- Werbeversprechen wie rechtssicher, compliant, garantiert oder alle Pflichten erfuellt

Bauen:

- Fristen- und Nachweis-Tracker
- Produkt-/Haendler-Compliance-Ordner
- PDF-/ZIP-Export fuer Profis
- Themen-Sortierer ohne Rechtsurteil
- Quellen- und Vorlagenbibliothek
- Partnerkanal

Beste Startentscheidung:

1. Tracker/Nachweisordner bauen.
2. Produkt-/Haendler-Compliance als eines von mehreren Startpaketen nutzen.
3. Breiter starten mit Betrieben, die echte Nachweise und Fristen verwalten muessen.
4. Fachanwalt RDG/IT-Recht nur fuer spaetere personalisierte Pflichtlogik einschalten.
5. SEO danach langsam und gepflegt ausbauen.

Der Kern in einem Satz:

> Wir verdienen am Verwalten, Erinnern, Exportieren und Vermitteln, nicht am rechtlichen Urteilen.

Das ist kleiner als die urspruengliche Vision, aber deutlich sauberer, glaubwuerdiger und schneller umsetzbar.
