<!DOCTYPE html>

<html lang="de-de">

<head>
	
<!-- title and definitions -->
<title>Sound Colour Space - Technology</title>
	
<?php
	$root = "../";
	include ("../head.php");
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
	include ("nav_intern.php");
?>

<!-- Umschliessende Element des Hauptinhaltes -->
<main id="container"> <!-- Container (zentriertes Layout) der Page -->


	<section id="content" class="allcol"> <!-- Inhaltssection der Page -->
	
		<article>

			<p>
			List of relevant papers (german/english).
			</p>
			<?php
			include (MAIN_DIR . "intern/technology/technologyliste.php");
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
	
