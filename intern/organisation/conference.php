<!DOCTYPE html>

<html lang="de-de">

<head>
	
<!-- title and definitions -->
<title>Sound Colour Space - Oragnization</title>

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
	include (EL_DIR . "intern/nav_intern.php");
?>

<!-- Umschliessende Element des Hauptinhaltes -->
<main id="container"> <!-- Container (zentriertes Layout) der Page -->


	<section id="content" class="allcol"> <!-- Inhaltssection der Page -->
	
		<article>
			<h2>Conference</h2>
			<p>
			Interne Liste der Konferenzteilnehmer. Weitere Vorschläge sind willkommen.
			</p>
			
			<?php 
			include ("conference/conferenceliste.php");
			?>
	
		</article>
		
	</section> <!-- Ende Inhaltssection -->
	
	
</main>
	
<!-- Footer der Seite -->
<?php 
	include (EL_DIR . "footer.php");
?>

</body>


</html>
	
	
