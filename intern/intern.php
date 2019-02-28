<!DOCTYPE html>

<html lang="de-de">

<head>

<!-- title and definitions -->
<title>Sound Colour Space - A Virtual Museum</title>
	
<?php
	$root = "../";
	define('INTERN', "intern");
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
	include (EL_DIR . "nav.php");
?>

<!-- Umschliessende Element des Hauptinhaltes -->
<main id="container"> <!-- Container (zentriertes Layout) der Page -->


	<section id="content" class="allcol">
	
		<h3>Welcome to intranet of Sound Colour Space!</h3>
		
		<article>
		
			<h2>Science</h2>
	
			<p>
			Research and list of relevant papers (german).
			</p>
			
			<?php 
			include (MAIN_DIR . "intern/sience/sienceliste.php");
			?>
			
		</article>
		
		<article>
		
			<h2>Science</h2>
			
			<p>
			List of relevant papers (german/english).
			</p>
			
			<?php
				include (MAIN_DIR . "intern/technology/technologyliste.php");
			?>
			
		</article>
		
		
		

		
	</section> <!-- Ende Inhaltssection -->
	
</main>

<!-- Footer der Seite -->
<?php 
	include (EL_DIR . "footer.php");
?>	


</div>

</body>


</html>
	
	
