<!DOCTYPE html>

<html lang="de-de">

<head>
	
<!-- title and definitions -->
<title>Sound Colour Space - Testsites</title>
	
<?php
	$root = "../";
	include ($root . "head.php");
?>


	
</head>

<body>


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
		
			<h2>Testsites</h2>
			<p>
			Documents and references of different frameworks, javascriptlibraries, etc ... <br />
			</p>
			
			<?php 
			include (MAIN_DIR . "vilab/testsites/testliste.php");
			?>
	
		</article>
		
	</section> <!-- Ende Inhaltssection -->
	
</main>
	
<?php 
	include (EL_DIR . "footer.php");
?>


</body>


</html>