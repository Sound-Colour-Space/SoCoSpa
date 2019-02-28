
<?php
	// t1 = template museobjres
	parse_str($_SERVER['QUERY_STRING']); // not recommended!! 
	$sql = "SELECT gid, Desig, Keyword, id_Keyword FROM v4 WHERE gid = $gid";
	$sql2 = "SELECT id, dateiName, Jahreszahl, Beschreibung, gid FROM museobjres WHERE gid = $gid";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=vimu_t2', 'webuser', 'descartes');
	foreach($dbh->query($sql2) as $row){
		$diagInfo = "GID: {$row['gid']} <br> Year: {$row['Jahreszahl']} <br> Description: {$row['Beschreibung']} <br>";
		$diagPath = "diagrams/{$row['dateiName']}";
		print $diagInfo;
		?><img src='<?php print $diagPath;?>' width ='400'><br><?php
	}
	?><br><button id="btn_toggle">DETAILS on/off</button><br><?php
    foreach($dbh->query($sql) as $rw) { 
		$id_keyw = $rw['id_Keyword'];
		$keywInfo = "gid: {$rw[0]} / keyword: {$rw['Keyword']} / id_keyword: {$rw['id_Keyword']} <br>";
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

<br><button id="btn_count">Count clicks</button><br><br> 

<button id="btn_addNotice">Add notice</button> <button id="btn_showNotice">Show notice</button><br>

<script>

$(document).ready(function(){
	$("#btn_toggle").click(function(){
		$(".res_keyw").toggle();
		});	
	$("#btn_count").click(function(){
		if (localStorage.clickcount) {
			localStorage.clickcount = Number(localStorage.clickcount) + 1;
		} else {
			localStorage.clickcount = 1;
		}
		alert("localStorage count: " + localStorage.clickcount);
		});
	$("#btn_addNotice").click(function(){
		var g = location.search.split('gid=')[1];
		// var g = window.location.search.substr(4);
		localStorage[g] = prompt("Enter a notice");
		if(localStorage[g]){$("#btn_showNotice").show();}
		// alert(localStorage[g]);
		});	
		
	if(!localStorage[location.search.split('gid=')[1]]){
		$("#btn_showNotice").hide();
		}
	
	$("#btn_showNotice").click(function(){
		var g = location.search.split('gid=')[1];
		if (localStorage[g]){
			alert(localStorage[g]);
			}
		});	
});
</script>