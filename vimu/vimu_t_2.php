<?php
	// t2 = template museobj
	parse_str($_SERVER['QUERY_STRING']); // not recommended!! 

	$sql = "SELECT gid, Desig, Keyword, id_Keyword FROM v4 WHERE gid = $gid"; // = SELECT * related keywords
	$sql2 = "SELECT id, Bezeichnung, Beschreibung, gid FROM `museobj` WHERE gid = $gid"; // the current obj
	$sql4 = "SELECT gid_obj, int_nr, id_res, gid_res, filename_res, year_res, descr_res
				FROM v_res_of_museobjs_long
				WHERE gid_obj = $gid
				ORDER BY int_nr;"; // the components of the current obj";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=vimu_t2', 'webuser', 'descartes');
	foreach($dbh->query($sql2) as $row){
		$objInfo = "GID: {$row['gid']} <br> Designation: {$row['Bezeichnung']} <br> Description: {$row['Beschreibung']} <br>";
		print $objInfo;
	}
	
	foreach($dbh->query($sql4) as $row){
		$diagInfo = "<br> GID: {$row['gid_res']} <br>Year: {$row['year_res']} <br> Description: {$row['descr_res']} <br>";
		$diagPath = "diagrams/{$row['filename_res']}";
		print $diagInfo; 
		?><img src='<?php print $diagPath;?>' width ='250'><br><?php
	}
	?><br><button id="btn_toggle">DETAILS on/off</button><br><?php
    foreach($dbh->query($sql) as $rw) { 
		$id_keyw = $rw['id_Keyword'];
		$keywInfo = "<br> gid: {$rw[0]} / keyword: {$rw['Keyword']} / id_keyword: {$rw['id_Keyword']} <br>";
		$gid = $rw[0];
		print $keywInfo;
		?><div id='res_keyw_<?php print $id_keyw;?>' onclick='//$(this).hide();' class='res_keyw'><?php
		$sql3 = "SELECT gid, Desig FROM v4 WHERE id_Keyword = $id_keyw ORDER BY gid";
		foreach($dbh->query($sql3) as $rwi) {
			if($rwi[0] != $gid){
			$t = substr($rwi[0],0,1);
			if($t == 1){
			$relResInfo = "--> <a href='vimu_s_museobjres.php?gid=%27$rwi[0]%27' target='_blank'>$rwi[0]</a> / Desig: {$rwi[1]} <br>";
			// $relResInfo = "--> gid: {$rwi[0]} / Desig: {$rwi[1]} <br>";
			print $relResInfo;}
			else if($t == 2){
			$relResInfo = "--> <a href='vimu_s_museobj.php?gid=%27$rwi[0]%27' target='_blank'>$rwi[0]</a> / Desig: {$rwi[1]} <br>";
			// $relResInfo = "--> gid: {$rwi[0]} / Desig: {$rwi[1]} <br>";
			print $relResInfo;}
			} 	
		}
		?></div><?php	
    }	
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<script>

$(document).ready(function(){
	$("#btn_toggle").click(function(){
		$(".res_keyw").toggle();
		});	
		
});
</script>