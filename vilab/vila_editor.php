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
	
		</article>
		

		<articel>
			
		<h2>Virtual Labor</h2>
		
		<p>Development of a labor and editor for interactive content.</p>
		
		<h3><a href="/vila/editors/ace_editor1.php" target="_self">Ace-Editor Basic</a></h3>
		<h3><a href="/vila/editors/live_editor1.php" target="_self">Live-Editor</a></h3>
	
		
		</articel>
			
	</section> <!-- Ende Inhaltssection -->
	
</main>
	
<?php 
	include (EL_DIR . "footer.php");
?>


</body>


</html>