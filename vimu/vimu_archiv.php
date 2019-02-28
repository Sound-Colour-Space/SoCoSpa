<!DOCTYPE html>

<html lang="de-de">

<head>
	
<title>Sound Colour Space - Virtual Labor</title>
	
<?php
	$root = "../";
	include ($root . "head.php");
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	
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
	
		<?php 
			include ("vimu_diagArchive.php")
		?>
	
</main>
	
	<!-- Footer der Seite -->
	<?php 
		include (EL_DIR . "footer.php");
	?>	


</div>

</body>


</html>