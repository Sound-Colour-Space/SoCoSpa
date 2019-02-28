<script>

$(document).ready(function(){
    $("button").click(function(){
        $("#diagZone").empty();
    });
});

function bigImg(x) {
    x.style.height = "200px";
    //x.style.width = "200px";
}
function normalImg(x) {
    x.style.height = "50px";
    //x.style.width = "50px";
}

var xmlhttp;
function loadXMLDoc(url,cfunc)
{
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=cfunc;
xmlhttp.open("GET",url,true);
xmlhttp.send();
}

function putMuseumsObj(x)
{
url = "vimu_assemble_museObj.php?museObjId=" + x;
loadXMLDoc(url,function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	rt = xmlhttp.responseText;
    document.getElementById("diagZone").innerHTML=rt;
    }
  });
}

</script>

<!-- style sollte in das css einfliessen -->
	
<div id = "museum">


	<section class="vimu_showroom sixcol"> 
	
		<button>Clear</button>
	
		<div id = "diagZone">
			To get content, click on pictures(=>)
		</div>
		
	</section>
	
	
	<section class="vimu_collect threecol"> <!-- style="width:600px; height:700px; overflow:hidden;" -->
	
	
		<table class="vimu-table">
		
			<colgroup>
		
			<col width = "210px">
			<col width = "40px">
			<col>
			
			</colgroup>
		
			<tr>
				<th>Select</th>
				<th>ID</th>
				<th>Bezeichnung</th>
			</tr>	
<?php
try {
	$dbh = new PDO('mysql:host=localhost;dbname=vimu_t2', 'webuser', 'descartes');
    foreach($dbh->query('
		SELECT t1.id, t1.Bezeichnung, t3.dateiName, t1.gid 
		FROM museobj AS t1 
		INNER JOIN assembleobj AS t2 
			ON t1.id = t2.ID_MuseumsObj 
		INNER JOIN museobjres AS t3 
			ON t3.id = t2.ID_MuseumsObjRessource WHERE t2.int_nr = 1;
	') as $row) {
	$diagPath = "diagrams/{$row[2]}";
	$museObjID = $row[0];
	$museObjGID = $row[3];
?>
			<tr>
				<td><img onclick="putMuseumsObj(<?php print $museObjID;?>)" onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="<?php print $diagPath;?>" height="50" ></td>
				<td><a href="vimu_s_museobj.php?gid='<?php print $museObjGID;?>'" target="_blank"> <?php print $museObjGID;?></a></td>
				<td><?php print $row[1];?></td>
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
		
	</section>
	
	
</div>

