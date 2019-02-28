<!DOCTYPE html>

<html lang="de-de">

<head>
	
<title>Sound Colour Space - Virtual Labor</title>
	
<?php
	$root = "../";
	include ($root . "head.php");
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
			<h2>Material</h2>
			<p>
			Die gesammelten Diagramme in Übersicht
			</p>
			
			<?php 
			include ("materialliste.php");
			?>
	
		</article>
		
	</section> <!-- Ende Inhaltssection -->
	
	<?php 
		include (EL_DIR . "footer.php");
	?>	

</main>


</div>

</body>


</html>
	
	
