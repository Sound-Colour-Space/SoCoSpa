 <!DOCTYPE html>

<html lang="de-de">

<head>
	
<!-- title and definitions -->
<title>Sound Colour Space - Oragnization</title>

<?php
	$root = "./";
	include ("head.php");
?>

	
</head>

<body>

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
		
			<h2>Organisation</h2>
			
			<?php 
			if ($intern == "intern") { ?>
			<p>Documentation and information about meetings, activities and other issues.</p>
			<a href="/organization/administration.php" target="_self"><h3>Administration</h3></a>
			<a href="/organization/documentation.php" target="_self"><h3>Documentation</h3></a>	
			<?php
			}
			?>
		</article>	
		<article>
		<h3>Next Dates</h3>
		<table class="directory">
			<tr>
				<th>Date</th>
				<th>Time</th>
				<th>Persons</th>
				<th>Description</th>
			</tr><tr>
				<td>Thursday, April 21 2016</td>
				<td>17.00h</td>
				<td>Gerhard Dirmoser</td>
				<td>Lecture Diagrammatologie - ZHdK Viaduktraum 2.A05</td>
			</tr><tr>
				<td>Friday, April 22 2016</td>
				<td>10.00h</td>
				<td>Gerhard Dirmoser</td>
				<td>Workshop</td>
			</tr><tr>
				<td>Friday, October 28 - 29 Oktober 2016</td>
				<td></td>
				<td></td>
				<td>Final conference</td>
			</tr>
			
		</table>
		</article>
		
		<article>
		<h3>Past Dates</h3>
		<table class="directory">
			<tr>
				<th>Date</th>
				<th>Time</th>
				<th>Persons</th>
				<th>Description</th>
			</tr><tr>
				<td>Saturday, December 12 2015</td>
				<td>9.30h bis 12.30h</td>
				<td>Daniel Muzzulini, Jeroen Visser, Raimund Vogtenhuber</td>
				<td>Lecture, Forschungstag ZHdK</td>
			</tr><tr>
				<td>Thursday, January 7 2016</td>
				<td>17.00h</td>
				<td>Sybille Krämer</td>
				<td>Lecture: Diagrammatologie - <a href="https://www.zhdk.ch/?agenda/detail&vid=25176">more Information</a></td>
			</tr><tr>
				<td>Tuesday, February 2 2016</td>
				<td>17.00h</td>
				<td>Benjamin Wardhaugh</td>
				<td>Lecture: Pitch Diagrams - <a href="https://www.zhdk.ch/?agenda/detail&vid=26585">more Information</a></td>
			</tr><tr>
				<td>Thursday, June 4 2015</td>
				<td>14.00h</td>
				<td>Christoph Reuter</td>
				<td>Lecture, ZHdK Viaduktraum 2.A05 - <a href="https://www.zhdk.ch/?icst/agenda/detail&vid=24320">more Information</a></td>
			</tr>
			
		</table>
		</article>
		
	</section> <!-- Ende Inhaltssection -->
	
</main>
	
<!-- Footer der Seite -->

	<?php 
		include (EL_DIR . "footer.php");
	?>	


</body>


</html>
	
	
