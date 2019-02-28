<!DOCTYPE html>

<html lang="de-de">

<head>
	
<!-- title and definitions -->
<title>Sound Colour Space - Virtual Labor Editor</title>
	
<?php
	$root = "../";
	include ($root . "head.php");
?>

<link rel="stylesheet" type="text/css" href="<?php echo $root . 'vila/editors/editor.css'?>">

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
		
			<h2>Editor</h2>
			<p>
			Test of different editors ... <br />
			</p>
			
			<h3><a href="/vilab/editors/p5js_editor1.php" target="_self">Processing p5js-Editor</a></h3>
			<h3><a href="/vilab/editors/impress_editor1.php" target="_self">Impress Editor</a></h3>
			<h3><a href="/vilab/editors/three.js/editor/index.html" target="_self">Three.js Editor</a></h3>
			<h3><a href="/vilab/editors/live_editor1.php" target="_self">Live-Editor</a></h3>
			
	
		</article>
		

			
	</section> <!-- Ende Inhaltssection -->
	
</main>
	
<?php 
	include (EL_DIR . "footer.php");
?>


</body>


</html>