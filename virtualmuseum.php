<!DOCTYPE html>

<html lang="de-de">

<head>
	
<!-- title and definitions -->

<title>Sound Colour Space - A Virtual Museum</title>

<?php
	$root = "./";
	include ("head.php");
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

	
		<section id="content" class="allcol">
			
			<h2>Virtual Museum</h2>
			<p>Test of different concepts.</p>
			<a href="vimu/vimu_objects.php" target="_self"><h3>Virtual Museum Objects</h3></a>
			<a href="vimu/vimu_archiv.php" target="_self"><h3>Virtual Museum Archiv</h3></a>
			<a href="vimu/vimu_exhibitionroom.php" target="_self"><h3>Virtual Museums Exhibition</h3></a>
			
			<?php if (INTERN == "intern") { ?>
			<a href="vimu/vimu_material.php" target="_self"><h3>Material</h3></a>
			<?php } ?>
			
		
		</section>
		

</main>

<!-- Footer der Seite -->
<?php 
	include (EL_DIR . "footer.php");
?>	


</body>


</html>
	