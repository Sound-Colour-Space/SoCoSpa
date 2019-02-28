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


	<section id="content" class="allcol"> <!-- Inhaltssection der Page -->
	
		<article>
			<h2>Technology</h2>
			<h3>Concept of Webapplication</h3>
			<p>
			Mit der Einführung von HTML5 haben sich die Möglichkeiten der grafischen und interaktiven Gestaltung
			wesentlich vereinfacht und verbessert. Das World Wide Web Consortium (W3C) hat am 28. Oktober 2014 die
			fertige HTML5-Spezifikation („W3C Recommendation“) vorgelegt.
			Anspruchsvolle interaktive Inhalte waren in HTML(4.0) noch zu verwirklichen. Für diese Einsatzgebiete wurde Flash verwendet, welches im Browser ein eigenes kostenloses Plugin benötigt. 
			Es gibt jedoch immer wieder Sicherheitsprobleme mit dem kostenlosen Plugin und es ist bei vielen mobilen Geräten nicht verwendbar. Zudem wird der Inhalt von flashbasierten Anwendungen von Suchmaschinen nicht indexiert. Somit ist davon abzuraten die 
			Navigationen einer Seite mit Flash zu erstellen, 
			</p>
			
			<h3>HTML5, CSS3 und Javascript:</h3>
			<p>
			Es ist eine neue Version der Sprache HTML, mit neuen Elementen, Attributen und Verhaltensweisen, und eine
			größere Sammlung von Technologien, die vielfältigere und leistungsstärkere Webseiten und Anwendungen
			ermöglichen. Diese Kombination wird manchmal HTML5 & Freunde genannt und oft zu HTML5 abgekürzt.
			Inzwischen ist HTML5 als eine sichere Basis für zukünftige Entwicklungen anzunehmen.
			</p>
			
			<h3>Möglichkeiten von html5:</h3>
			<ul>
			<li><em>Semantik:</em> Erlaubt präziser zu beschreiben, was der Inhalt ist.</li>
			<li><em>Konnektivität:</em> Ermöglicht neue und innovative Wege, mit dem Server zu kommunizieren.
			<li><em>Offline & Speicherung:</em> Erlaubt Webseiten, Daten lokal auf der Client-Seite zu speichern und effizienter offline zu arbeiten.
			<li><em>Multimedia:</em> Macht Video und Audio zu Erste-Klasse-Bürgern des offenen Webs.
			<li><em>2D/3D Graphiken & Effekte:</em> Erlaubt eine deutlich umfangreichere Menge an Präsentationsmöglichkeiten.
			<li><em>Gerätezugriff:</em> Erlaubt die Benutzung verschiedenster Eingabe- und Ausgabegeräte.
			</ul>
			
			<h3>Möglichkeiten um multimediale Anwendungen einzubinden:</h3>
			
			<ul>
			<li><em>HTML5 Audio und Video:</em> Camera Api</li>
			<li><em>CSS3 Animation:</em>Das canvas Element für Zeichnungen, kann mit CSS anmiert werden
<a href="http://www.sitepoint.com/series/css3-animations/">css3-animations</a></li>
			<li><em>WebGL (Web Graphics Library)</em> bringt 3D-Graphiken durch die Einführung einer auf OpenGL ES 2.0 basierten API in's Web, die in HTML5
\<canvas\> Elementen genutzt werden kann.
			<li><em>SVG – </em>Ein XML-basiertes Format von Vektor-Bildern, die direkt in HTML eingebettet werden können.</li>
			</ul>
			<a href="https://developer.mozilla.org/de/docs/Web/HTML/HTML5">Mozilla Developer Site</a>
			
			<h3>Erweiterungen von Javascript:</h3>
			<ul>
			<li><em>jQuery:</em><a href ="https://jquery.com/">jQuery – „Write less, do more“</a></li>
			<li><em>Bootstrap: </em><a href="http://getbootstrap.com/">Link zur Library</a> – javascript framework für die Entwicklung von „responsiven Webdesign“, also an
„mobile-first“- Webseiten für die automatische Anpassung an verschiedene Wiedergabegeräte.</li>
			</ul>
			<h3>Javascript Bibliotheken für interaktive Anwendungen:</h3>
			<ul>
			<li><em>Createjs:</em><a href ="http://www.createjs.com/Docs">Createjs – Library</a>„Write less, do more“</a></li>
			<li><em>Bootstrap: </em><a href="http://getbootstrap.com/">Link zur Library</a> – javascript framework für die Entwicklung von „responsiven Webdesign“, also an
„mobile-first“- Webseiten für die automatische Anpassung an verschiedene Wiedergabegeräte.</li>
			</ul>
			
		</article>
		
		<article>
		<?php 
			if (INTERN == "intern") { ?>
			<p>
			List of relevant papers (german/english).
			</p>
			<?php
			include (MAIN_DIR . "intern/technology/technologyliste.php");
			}
			?>
		</article>
		
	</section> <!-- Ende Inhaltssection -->
	

</main>

	
<?php 
	include (EL_DIR . "footer.php");
?>	
	
	
</div>

</body>


</html>
	
