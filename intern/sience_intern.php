<!DOCTYPE html>

<html lang="de-de">

<head>

<!-- title and definitions -->
<title>Sound Colour Space - Sience</title>
	
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

	<section id="content" class="sixcol"> <!-- Inhaltssection der Page -->
	
		<h2>Science</h2>
		
		<article>
	
			<p>
			Research and list of relevant papers (german).
			</p>
			<?php 
			include (MAIN_DIR . "intern/sience/sienceliste.php");
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
	
