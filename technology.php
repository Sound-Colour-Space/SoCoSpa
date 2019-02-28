<!DOCTYPE html>

<html lang="de-de">

<head>
	
<!-- title and definitions -->
<title>Sound Colour Space - Technology</title>
	
<?php
	$root = "./";
	include ("head.php");
?>

	
</head>

<body>

<div id="wrapper">


<!-- Header mit Logo und Titel der Seite -->
<?php 
	include (EL_DIR . "header.php");
?>


<!-- Hauptnavigation der Seite -->
<?php 
	include (EL_DIR . "nav.php");
?>

<!-- Umschliessende Element des Hauptinhaltes -->
<main id="container"> <!-- Container (zentriertes Layout) der Page -->


	<section id="content" class="sixcol"> <!-- Inhaltssection der Page -->
	
		<article>
			<h2>Technology</h2>
			<p>
			The idea is to explore the possibilities of presentation of specific scientific content.
			The application consists of the <em>virtual museum</em> and the <em>virtual lab.</em> 
			</p>
			
			<h3>Virtual Museum</h3>
			
			<p>Das Virtuelle Museum wird mit einer Datenbank (oder einer temporären Kerndatenbank), einem CMS-System 
			 und einer interaktiven html5-Anwendung realisiert. Für die Umsetzung bedienen wir die Metapher des Museums: 
			Es gibt einen Eingangsbereich, Austellungen, Ausstellungsräume, Museumsobjekte, Archivar, Kurator ect. <br />
			<p>Zwei Arten von Bedienung und Interaktion durch Besucher: <br />
			A) Experimentieren mit den interaktiven Museumsobjekten/Ressourcen <br />
			B) Navigation durch das Museum als „virtuelle Umgebung“ (Navigation und Datenmodell)
			</p>
			
			<h3>Konzeption des Datenbankmodells</h3>
			<p>Dieses Datenbankmodell dient als Mittel der Ideenfindung und Strukturierung der Anforderungen 
			und ist kein Präjudiz für eine spätere Implementierung. Das Modell beschreibt eine fiktive minimale 
			Standalone-Anwendung, die nichts über die Einbettung oder Verknüpfung mit Medienarchiven und anderer 
			Software aussagt. Der Bereich Zugriffsrechte ist am wenigsten ausformuliert.</p>

			<p>Die Implementierung kann in einem beliebigen Datenbanksystem verwirklicht werden. 
			Neben relationalen, und objektrelationalen Datenbanksystemen ist auf Grund der Struktur der 
			wissenschaftlichen Materie auch eine Graph-Datenbank als mögliche Implementationsform in Betracht zu ziehen.</p>
			
			<p>Im Falle einer schlanken „Kern-Datenbank“, die nur Verweise und kurze Textfelder enthält, kann eventuell 
			auf eine eigentliche Datenbank verzichtet werden und diese im RAM einer Serveranwendung, 
			die mit dem Filesystem und/oder der Aussenwelt kommuniziert, gehalten werden.</p>

			
			<h3>Definition</h3>

			<p>Ein Museumsobjekt (MuseumsObj) ist eine Kollektion von Museumsobjektressourcen, 
			die eine semantische Einheit darstellt. </p>
			<a href="http://test.sound-colour-space.zhdk.ch/vimu/vimu_objects.php">Museumsobjects</a>
			<p>
			Eine Museumsobjektressource (MuseumsObjRessource) entspricht einem (virtuellen) 
			Verzeichnis in der Dateihierarchie, dessen Inhalte gleich wie das Verzeichnis benannt, 
			aber mit den charakteristischen Dateikennungen. Falls nötig wird der Name mit _001, _002, _003, 
			o.ä erweitert, zum Beispiel bei Bilddateien in verschiedener Qualität und Miniaturbildchen. 
			Typische Museumsobjektressourcen sind Bilddateien, Audio- und Videodateien, sowie interaktive 
			Animation. Wir unterscheiden zwischen statischen Ressourcen (zum Beispiel Bilddateien), 
			passiven Animationen (Audio- und Videodateien, etc. ohne Benutzersteuerung) und interaktiven 
			Animationen (audiovisuelle, interaktive Demos, svg-Animationen, jQuery-Animationen, etc.). </p>
			
			<p>Eine typische statische Museumsobjektressource ist eine Abbildung aus einer wissenschaftlichen 
			Quelle als .tiff und .jpg in mehreren Qualitäten (evtl. Ausschnitten davon) zusammen mit direkten 
			Metadaten. [Löschen einer Ressource beinhaltet das Löschen aller gleichnamigen Dateien und ist nur 
			sinnvoll, wenn sie nicht in anderen Museumsobjekten benötigt wird.]</p>
			<a href="http://test.sound-colour-space.zhdk.ch/vimu/vimu_archiv.php">Museumsarchiv mit Museumsobjektressourcen</a>
			
			<p>Ein ausstellbares Museumsobjekt besteht aus mindestens einer Museumsobjektressource, 
			die gleiche Ressource kann Bestandteil verschiedener Museumsobjekte sein. Die n-n-Beziehung 
			zwischen Museumsobjekten und Museumsobjektressourcen, die dies regelt heisst im ER-Modell Assemblage. 
			Ein typisches Museumsobjekt ist eine Abbildung aus einer wissenschaftlichen Quelle zusammen mit 
			Begleitinformationen und Animationen.
			Die Museumsobjekte sind die Atome von Ausstellungen, Sammlung und Archiv.<br />
			Das gleiche Museumsobjekt kann an verschiedenen Stellen einsehbar sein. Exponate können also 
			gleichzeitig mehreren Ausstellungen sowie der Sammlung und/oder dem Archiv angehören. 
			Der volle Zugriff auf das Archiv ist nur ausgewählten Personen erlaubt. 
			Beispielsweise sind die hochauflösenden tiffs in der Regel nur im Archiv zugänglich. 
			Das Archiv enthält alle Museumsobjekte.</p>
			
			<p>Museumsobjekte, die in einer Ausstellung gezeigt werden, heissen Exponate. Eine Ausstellung 
			beinhaltet das Bespielen von Räumen mit Museumsobjekten unter einem übergeordneten Gesichtspunkt.</p>
			<a href="http://test.sound-colour-space.zhdk.ch/vimu/vimu_exhibitionroom.php">Ausstellungen</a>

			<p>Ein Ausstellungskatalog hat einen Objektbeschreibungsteil, der die Exponate sequenziell auflistet. 
			Der Objektbeschreibungsteil wird aus den Museumsobjekten als Bericht generiert. Daneben enthält ein 
			Ausstellungskatalog neben den sich aus den vernetzten Exponaten ergebenden automatischen Annotationen 
			auch freie Beiträge allgemeiner Art und weiterführende Analysen etc. Das Kuratorenteam ist pro 
			Ausstellung für die Ausstellung und den Katalog zuständig und hat eine zentrale Ansprechperson. 
			Ein Katalog beschreibt die Exponate einer Ausstellung und ist eine .pdf-Datei. </p>
			
		</article>
		
	</section> <!-- Ende Inhaltssection -->
	
	<aside id="content" class="threecol">
	
		<figure>
		<img id="img_sience" src="images/rv_funktionsdiagramm_vimu.jpg" alt="frontend_diagram" />
		<figcaption><b>Fig. 5.</b> Konzeption und Funktionsdiagramm der Anwendung</figcaption>
		</figure>
		<br />
		
		<figure>
		<img id="img_sience" src="/images/museumsobjekte.gif" alt ="Datamodell: Museumsobjekte und ihre Ressourcen" />
		<figcaption><b>Fig. 1.</b> Museumsobjekte und ihre Ressourcen</figcaption>
		</figure>
		<br />
		
		<figure>
		<img id="img_sience" src="/images/ontologie.gif" alt ="Datamodell: 'Ontologie' Museumsobjekte" />
		<figcaption><b>Fig. 2.</b> Ontologie</figcaption>
		</figure>
		<br />
		
		<figure>
		<img id="img_sience" src="/images/beschlagwortung.gif" alt ="Datamodell: Beschlagwortung: Museumsobjekt-Ressourcen" />
		<figcaption><b>Fig. 3.</b> Beschlagwortung: Museumsobjekt-Ressourcen</figcaption>
		</figure>
		<br />
		
		<figure>
		<img id="img_sience" src="/images/ausstellung.gif" alt ="Ausstellung: Museumsobjekt-Positionierung" />
		<figcaption><b>Fig. 4.</b> Ausstellung: Museumsobjekt-Positionierung</figcaption>
		</figure>
		<br />
		
	</aside>
	

</main>

	
<?php 
	include (EL_DIR . "footer.php");
?>	
	
	
</div>

</body>


</html>
	
