<?php
if($_GET['action'] == 'get_exhibition'){
	$exhibition = array();
	$id_exhib = $_GET['sel_exhib_id'];
try {
    $dbh = new PDO('mysql:host=localhost;dbname=vimu_t2', 'webuser', 'descartes');
    foreach($dbh->query("SELECT `nr_exponat`,`gid_exhibit`,`desig` FROM `v_exhibits_to_exhibition`
		WHERE id_exhibition = '$id_exhib' ORDER BY nr_exponat;") as $row) 
	{
	$nr_exp = $row['nr_exponat'];
	$gid = $row['gid_exhibit'];
	$template = substr($gid,0,1);
	$desig = $row['desig'];
	$descr = "$nr_exp $gid $desig <br/>";
	array_push($exhibition, array('nr_exponat' => $nr_exp, 'gid' => $gid, 'template' => $template ));
    }
	echo json_encode(array('exhibition' => $exhibition));
    $dbh = null;
	} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
	}
// exit;
}
if($_GET['action'] == 'get_archive'){
	$argus = array('ID','dateiName','Jahreszahl','gid');
	$archive = array();
	$orderCrit = $argus[$_GET['orderBy']];
	$y_from = $_GET['y_from'];
	$y_to = $_GET['y_to'];
try {
	$dbh = new PDO('mysql:host=localhost;dbname=vimu_t2', 'webuser', 'descartes');
    foreach($dbh->query("SELECT id, dateiName, Jahreszahl, Beschreibung, gid FROM `museobjres` WHERE Jahreszahl >= $y_from AND Jahreszahl <= $y_to ORDER BY $orderCrit;") as $row) {
	array_push($archive, array('id' => $row[0], 'filename' => $row[1], 'year' => $row[2], 'description' => $row[3], 'gid' => $row[4] ));
	}
	echo json_encode(array('archive' => $archive));
	$dbh = null;
	} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
	}
}	

if($_GET['action'] == 'search_archive'){
	$archive = array();
	$id_keyw = $_GET['id_keyw'];
	$sql = "SELECT t1.id, t1.dateiName, t1.Jahreszahl, t1.Beschreibung, t1.gid 
				FROM museobjres as t1
				INNER JOIN beschlagwortungressourcen as t2
				ON t1.ID = t2.ID_MuseumsObjRessource
				WHERE t2.ID_Schlagwort = $id_keyw;"; 
try {
	$dbh = new PDO('mysql:host=localhost;dbname=vimu_t2', 'webuser', 'descartes');
    foreach($dbh->query($sql) as $row) {
	array_push($archive, array('id' => $row[0], 'filename' => $row[1], 'year' => $row[2], 'description' => $row[3], 'gid' => $row[4] ));
	}
	echo json_encode(array('archive' => $archive));
	$dbh = null;
	} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
	}
}	


?>