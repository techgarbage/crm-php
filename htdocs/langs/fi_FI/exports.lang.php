<?php
/* Copyright (C) 2012	Regis Houssin	<regis@dolibarr.fr>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$exports = array(
		'CHARSET' => 'UTF-8',
		'ExportsArea' => 'Vienti alueen',
		'ImportArea' => 'Tuo alue',
		'NewExport' => 'Uusia vientimahdollisuuksia',
		'NewImport' => 'Uusi tuonti',
		'ExportableDatas' => 'Exportable tietokokonaisuus',
		'ImportableDatas' => 'Tuoda maahan tietokokonaisuus',
		'SelectExportDataSet' => 'Valitse tiedot, jonka haluat viedä ...',
		'SelectImportDataSet' => 'Valitse tiedot haluat tuoda ...',
		'SelectExportFields' => 'Valitse kentät, jonka haluat viedä tai valita ennalta vienti profil',
		'SelectImportFields' => 'Valitse kentät haluat tuoda, tai valitse ennalta tuonti profil',
		'NotImportedFields' => 'Aihealue lähdetiedoston ei tuoda',
		'SaveExportModel' => 'Tallenna tämä vienti profiili, jos aiot käyttää uudelleen myöhemmin ...',
		'SaveImportModel' => 'Tallenna tämä tuonti profiili, jos aiot käyttää uudelleen myöhemmin ...',
		'ExportModelName' => 'Vienti profiilin nimi',
		'ExportModelSaved' => 'Vienti profiili tallennetaan <b>nimi %s.</b>',
		'ExportableFields' => 'Exportable kentät',
		'ExportedFields' => 'Viedyt kentät',
		'ImportModelName' => 'Tuo profiilin nimi',
		'ImportModelSaved' => 'Tuo profiili tallennetaan <b>nimi %s.</b>',
		'ImportableFields' => 'Tuoda maahan kentät',
		'ImportedFields' => 'Maahantuodut kentät',
		'DatasetToExport' => 'Tietokokonaisuus viedä',
		'DatasetToImport' => 'Tietokokonaisuus tuoda',
		'NoDiscardedFields' => 'Ei aloilla lähdetiedosto on hävitettävä',
		'Dataset' => 'Tietokokonaisuus',
		'ChooseFieldsOrdersAndTitle' => 'Valitse kentät, jotta ...',
		'FieldsOrder' => 'Aloilla, jotta',
		'FieldsTitle' => 'Fields otsikko',
		'FieldOrder' => 'Kenttä järjestys',
		'FieldTitle' => 'Kentän nimi',
		'ChooseExportFormat' => 'Valitse vientimuoto',
		'NowClickToGenerateToBuildExportFile' => 'Nyt klikkaa "Luo" rakentaa vienti tiedostoa ...',
		'AvailableFormats' => 'Muodot disponibles',
		'LibraryShort' => 'Kirjasto',
		'LibraryUsed' => 'Librairie',
		'LibraryVersion' => 'Version',
		'Step' => 'Vaihe',
		'FormatedImport' => 'Tuo avustaja',
		'FormatedImportDesc1' => 'Tämä alue voidaan tuoda henkikökohtaiset tietoja käyttäen avustaja auttaa sinua prosessi ilman teknistä osaamista.',
		'FormatedImportDesc2' => 'Ensimmäinen askel on valita kuningas tietoja haluat kuormitus, sitten tiedosto latautuu, sitten valita kentät, jotka haluat ladata.',
		'FormatedExport' => 'Vienti avustaja',
		'FormatedExportDesc1' => 'Tämä alue voidaan viedä henkikökohtaiset tietoja käyttäen avustaja auttaa sinua prosessi ilman teknistä osaamista.',
		'FormatedExportDesc2' => 'Ensimmäinen askel on valita ennalta tiedot, sitten valita kentät, jotka haluat teidän tulos kuvaa, ja missä järjestyksessä.',
		'FormatedExportDesc3' => 'Kun tiedot vienti on valittu, voit määritellä lähtö-tiedostomuodossa, jonka haluat viedä tietosi.',
		'Sheet' => 'Arkki',
		'NoImportableData' => 'Ei tuoda maahan tiedot (ei-moduulin määritelmiä mahdollistaa tietojen tuonti)',
		'FileSuccessfullyBuilt' => 'Vie tiedosto luotu',
		'SQLUsedForExport' => 'SQL Pyydä tarkoitus rakentaa viedä tiedosto',
		'LineId' => 'Id-linjan',
		'LineDescription' => 'Kuvaus linja',
		'LineUnitPrice' => 'Yksikköhinta radan',
		'LineVATRate' => 'Alv-linjan',
		'LineQty' => 'Määrä rivin',
		'LineTotalHT' => 'Määrä verottomia rivin',
		'LineTotalTTC' => 'Määrä vero rivin',
		'LineTotalVAT' => 'Arvonlisäveron määrästä linja',
		'TypeOfLineServiceOrProduct' => 'Type of line (0= tuotteen, 1= palvelu)',
		'FileWithDataToImport' => 'Tiedoston tiedot tuoda',
		'FileToImport' => 'Lähdetiedostoa tuoda',
		'FileMustHaveOneOfFollowingFormat' => 'Tiedoston tuonti on oltava yksi seuraavassa muodossa',
		'DownloadEmptyExample' => 'Lataa esimerkiksi tyhjiä lähdetiedoston',
		'ChooseFormatOfFileToImport' => 'Valitse tiedostomuoto käyttää kuin tuoda tiedostomuodossa napsauttamalla picto %s valitse se ...',
		'ChooseFileToImport' => 'Valitse tiedosto tuoda sitten picto %s ...',
		'SourceFileFormat' => 'Lähde tiedostomuoto',
		'FieldsInSourceFile' => 'Toimialoja lähdetiedostoa',
		'FieldsInTargetDatabase' => 'Kohdekieli kentät Dolibarr tietokanta',
		'Field' => 'Kenttä',
		'NoFields' => 'Ei kentät',
		'MoveField' => 'Siirrä kenttä sarakkeeseen numero %s',
		'ExampleOfImportFile' => 'Example_of_import_file',
		'SaveImportProfile' => 'Tallenna tämä tuonti profiili',
		'ErrorImportDuplicateProfil' => 'Tallennus epäonnistui tämän tuoda profiilin tällä nimellä. Nykyinen profiili on jo olemassa tällä nimellä.',
		'ImportSummary' => 'Tuo setup yhteenveto',
		'TablesTarget' => 'Kohdennettu taulukot',
		'FieldsTarget' => 'Kohdennettu kentät',
		'TableTarget' => 'Kohdennettu taulukko',
		'FieldTarget' => 'Alalta',
		'FieldSource' => 'Lähde kenttä',
		'DoNotImportFirstLine' => 'Älä tuo ensimmäinen rivi lähdetiedoston',
		'NbOfSourceLines' => 'Määrä riviä lähdetiedoston',
		'NowClickToTestTheImport' => 'Tarkista tuonti parametrit olet määrittänyt. Jos ne ovat oikein, klikkaa painiketta <b>"%s"</b> käynnistää simulaation tuominen (eikä tietoja muuttaa tietokannan, se on vain simulaatio tällä hetkellä) ...',
		'RunSimulateImportFile' => 'Käynnistä tuonti simulointi',
		'FieldNeedSource' => 'Tämä tuntuu tietokannassa vaatia tietoja lähdetiedoston',
		'SomeMandatoryFieldHaveNoSource' => 'Jotkut pakolliset kentät eivät lähde tiedosto',
		'InformationOnSourceFile' => 'Tietoa lähdetiedosto',
		'InformationOnTargetTables' => 'Tietoa kohde-kentät',
		'SelectAtLeastOneField' => 'Vaihda ainakin yksi lähde kenttä-sarakkeen kenttiin viedä',
		'SelectFormat' => 'Valitse tämä tuonti tiedostomuoto',
		'RunImportFile' => 'Käynnistä tuo tiedosto',
		'NowClickToRunTheImport' => 'Tarkista tulos tuonti simulointi. Jos kaikki on ok, aloittaa lopullista maahantuontia.',
		'DataLoadedWithId' => 'Kaikki tiedot ladataan seuraavat tuonti id: <b>%s</b>',
		'ErrorMissingMandatoryValue' => 'Pakollinen tieto on tyhjä lähdetiedostossa Kentän <b>%s.</b>',
		'TooMuchErrors' => 'Vielä on <b>%s</b> muulta radoilla virheitä, mutta tuotanto on ollut vähäistä.',
		'TooMuchWarnings' => 'Vielä on <b>%s</b> muulta linjat varoituksia, mutta tuotanto on ollut vähäistä.',
		'EmptyLine' => 'Tyhjä rivi (on hävitettävä)',
		'CorrectErrorBeforeRunningImport' => 'Sinun on ensin korjata kaikki virheet ennen jatkuva lopullista maahantuontia.',
		'FileWasImported' => 'Tiedoston tuotiin numerolla <b>%s.</b>',
		'YouCanUseImportIdToFindRecord' => 'Löydät kaikki tuodut tietokannan tietueisiin suodattamalla pellolla <b>import_key = "%s".</b>',
		'NbOfLinesOK' => 'Rivien määrä ilman virheitä ja varoituksia ei: <b>%s.</b>',
		'NbOfLinesImported' => 'Rivien määrä Tuodut: <b>%s.</b>',
		'DataComeFromNoWhere' => 'Arvo lisätä peräisin missään lähdetiedostoon.',
		'DataComeFromFileFieldNb' => 'Arvoa lisää tulee kentän numero <b>%s</b> vuonna lähdetiedostossa.',
		'DataComeFromIdFoundFromRef' => 'Arvo, joka tulee kentän numero <b>%s</b> lähteitä tiedosto voidaan löytää id vanhempi vastustaa käyttää (siis esine <b>%s</b> joka on viite. Lähteestä tiedosto on olemassa osaksi Dolibarr).',
		'DataComeFromIdFoundFromCodeId' => 'Tämä koodi tulee kentän numero <b>%s</b> ja lähdetiedoston käytetään löytää id vanhemman esineen käyttö (siis koodi lähdetiedosto on olemassa osaksi dictionnary <b>%s).</b> Huomaa, että jos tiedät tunnus, voit käyttää sen lähdetiedoston sijasta koodia. Tuo pitäisi toimia molemmissa tapauksissa.',
		'DataIsInsertedInto' => 'Tiedot ovat peräisin lähteestä tiedosto lisätään seuraavilla aloilla:',
		'DataIDSourceIsInsertedInto' => 'Id emoyhtiön esine löytyi käyttää tietoja lähdetiedoston on lisättävä seuraavilla aloilla:',
		'DataCodeIDSourceIsInsertedInto' => 'Id vanhemman linjan löydy koodia, lisätään osaksi seuraavilla aloilla:',
		'SourceRequired' => 'Tiedon arvo on pakollinen',
		'SourceExample' => 'Esimerkki mahdollisesta tietojen arvo',
		'ExampleAnyRefFoundIntoElement' => 'Jos ref löytynyt elementin <b>%s</b>',
		'ExampleAnyCodeOrIdFoundIntoDictionnary' => 'Kaikki koodia (tai id) löytyi tulee dictionnary <b>%s</b>',
		'CSVFormatDesc' => '<b>Pilkuin erotellut</b> tiedostomuodossa (. Csv). <br> Tämä on tekstitiedosto muodossa, jossa kentät on erotettu separaattori [%s]. Jos erotin on sisäpuolella kentän sisältöä, kenttä on pyöristetty pyöreä merkki [%s]. Escape paeta pyöreä merkki on [%s].',
		'Excel95FormatDesc' => '<b>Excel</b> file format (.xls)<br>This is native Excel 95 format (BIFF5).',
		'Excel2007FormatDesc' => '<b>Excel</b> file format (.xlsx)<br>This is native Excel 2007 format (SpreadsheetML).',
		'TsvFormatDesc' => '<b>Tab Separated Value</b> file format (.tsv)<br>This is a text file format where fields are separated by a tabulator [tab].',
		'ExportFieldAutomaticallyAdded' => 'Field <b>%s</b> was automatically added. It will avoid you to have similar lines to be treated as duplicate records (with this field added, all ligne will own its own id and will differ).',
		'CsvOptions' => 'Csv Options',
		'Separator' => 'Separator',
		'Enclosure' => 'Enclosure',
		'SuppliersProducts' => 'Suppliers Products'
);
?>