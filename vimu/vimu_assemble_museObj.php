
<?php
	parse_str($_SERVER['QUERY_STRING']); // not recommended!! 	
	$sql = "SELECT * FROM museobj WHERE ID = $museObjId";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=vimu_t2', 'webuser', 'descartes');
    foreach($dbh->query($sql) as $rw) { 
		$museObjInfo= "GID: {$rw['gid']} <br>{$rw['Bezeichnung']} <br>";
?>	

	<table class="vimu-table">
		<tr>
			<td><?php print $museObjInfo;?></td>
			<td valign="top"><?php print $rw['Beschreibung'];?></td>
		</tr>
	</table>
	
	<!-- <div style="width:800px; height:700px; overflow:auto;"> 
	// Eigenschaften besser in CSS einbinden, bzw. ist es mit "vimu-table" 
	und "vimu-show" abgedeckt -->
	
	
	<table class="vimu-show">
<?php 	
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
	$sql = "SELECT t3.id, t3.dateiName, t3.Jahreszahl, t3.Beschreibung, t3.gid 
		FROM museobjres as t3 join assembleobj as t2 ON (t2.ID_MuseumsObjRessource = t3.id) 
		WHERE t2.ID_MuseumsObj = $museObjId
		ORDER BY t3.Jahreszahl";
try {
    foreach($dbh->query($sql) as $rw) { 
		$diagPath = "diagrams/$rw[1]";
		$diagInfo= "GID: {$rw[4]} <br>Year: {$rw[2]} <br>";
?>
		<tr>
			<td><a href='vimu_s_museobjres.php?gid=%27<?php print $rw[4];?>%27' target='_blank'><img src="<?php print $diagPath;?>" width="300"></a></td>
			<td valign="top"><?php print $diagInfo; print $rw[3];?></td>
		</tr>
<?php 	
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?> 
</table>
