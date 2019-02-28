<?php
	// t3 = template wallMatrix
	parse_str($_SERVER['QUERY_STRING']); // not recommended!! 	
	$sql0 = "SELECT gid, Bezeichnung, Beschreibung, n_x, n_y FROM wall WHERE gid = $gid";
	$sql1 = "SELECT id_museobj, x_pos, y_pos,x_span, y_span FROM v_walls_with_museobjs WHERE gid_wall = $gid";
	//$n_x = 1;
	//$n_y = 1;
try {
    $dbh = new PDO('mysql:host=localhost;dbname=vimu_t2', 'webuser', 'descartes');
	foreach($dbh->query($sql0) as $row){
		$n_x = $row['n_x'];
		$n_y = $row['n_y'];
		$gid_wall = $row['gid'];
		$desig_wall = $row['Bezeichnung'];
		$descr_wall = $row['Beschreibung'];
	}
	$matrix = array();
	$m_filename = array();
	for($i = 0; $i < $n_x*$n_y; $i++){
		$matrix[$i]=0;
		$m_filename[$i]=0;
		}
	foreach($dbh->query($sql1) as $row){
		$obj_id = $row['id_museobj'];
		if($row['x_span']*$row['y_span'] != 1){
			$sql2 = "SELECT int_nr, gid_res, filename_res 
			FROM v_res_of_museobjs
			WHERE id_obj = $obj_id 
			ORDER BY int_nr";
			foreach($dbh->query($sql2) as $rw){
				$x = $row['x_pos']+(($rw['int_nr']-1)%$row['x_span']);
				$y = $row['y_pos']+floor((($rw['int_nr']-1)/$row['x_span']));
				$matrix[$y*$n_x + $x] = $rw['gid_res'];
				$m_filename[$y*$n_x + $x] = $rw['filename_res'];
				}
		} else {
			$matrix[$row['y_pos']*$n_x+$row['x_pos']] = "2_{$obj_id}";
			$sql3 = "SELECT Bezeichnung FROM museobj WHERE ID = $obj_id";
			foreach($dbh->query($sql3) as $rwi){$obj_info = $rwi['Bezeichnung'];}
			$m_filename[$row['y_pos']*$n_x+$row['x_pos']] = $obj_info;
		}
	}	
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
GID : <?php print $gid_wall;?><br>
<?php print $desig_wall;?><br>
<?php print $descr_wall;?><br>

<table>
<?php
for($i = 0; $i<$n_y; $i++){
	?><tr><?php
	for($j = 0; $j<$n_x; $j++){
		?><td><?php	
		$el_ij= $matrix[$i*$n_x+$j];
		$g = substr($el_ij,0,1);
		if($el_ij != 0 && $g != '2'){
			print $el_ij; ?><br><a href="vimu_s_museobjres.php?gid='<?php print $el_ij;?>'" target="_blank"><img src='diagrams/<?php print $m_filename[$i*$n_x+$j];?>' height='250'></a><?php 
			} 
		else if($g == '2') {
			?> <a href="vimu_s_museobj.php?gid='<?php print $el_ij;?>'" target="_blank"><?php print $el_ij; ?></a><br>
			<?php print $m_filename[$i*$n_x+$j];	
			}
		?></td><?php
		}
	?></tr><?php	
	}
?>
</table>



