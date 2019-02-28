<script>
$(document).ready(function(){
    $("#btn_cl_diags").click(function(){
        $("#diagZone").empty();
    });
	$("#btn_filterYear").click(function(){
        get_archive(2,$("#y_from").val(),$("#y_to").val());
		return false;
    });
	$("#btn_searchKeyw").click(function(){
        search_archive($("#sel_keyw_id").val());
		return false;
    });
	
});

</script>

<div id="museum">	
	
	<section class="vimu_showroom halfcol">
	
		<button id="btn_cl_diags">Clear Diagrams</button>
		
		<div id = "diagZone">
		
		</div>
		
	</section>
	
	
	<section class="vimu_collect halfcol">
	
	 	<span class="vimu_text">Order by: <a onclick='get_archive(0,0,2100)'><b>[ID]</b></a> 
	 	<a onclick='get_archive(2,0,2100)'><b>[Year]</b></a> <br /> <br /></span>
		<span class="vimu_text"><b>Filter by Year </b></span>
		<form id="form_filterYear" class = "vimu_form" method="" action="">
			<label for="y_from">FROM: <input id="y_from" type="number" min="0" max="2100" step="1" value="1300"></label>
			<label for="y_to">TO: <input id="y_to" type="number" min="0" max="2100" step="1" value="2100"></label>
			<button id="btn_filterYear">FILTER</button>
		</form>
		<span class="vimu_text"><b>Keyword search </b></span>
		<form id="form_select_keyword" class = "vimu_form" method="" action="">
			<select id = "sel_keyw_id" name="sel_keyw_id">
				<option value = "">-- SELECT KEYWORD --</option>
<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=vimu_t2', 'webuser', 'descartes');
    foreach($dbh->query("SELECT ID, Keyword FROM schlagwort ORDER BY Keyword;") as $row) {
	$keywID = $row['ID'];
	$keyword = $row['Keyword'];
?>	
				<option value = "<?php print $keywID?>"><?php print $keyword?></option>
<?php 	
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
			</select>
			<button id="btn_searchKeyw" name="btn_searchKeyw">SEARCH</button> 
		</form>

	<div id="displayInfo"></div>
	
	<div id="searchZone" style="width:600px; height:700px; overflow:auto;"></div>

	</section>

</div>

<script>

function bigImg(x) {
    //x.style.height = "200px";
    x.style.width = "200px";
}
function normalImg(x) {
    //x.style.height = "100px";
    x.style.width = "100px";
}
// TODO: Bild kann mehrmals ausgewählt werden, dadurch sind die id's in der diagzone fälschlicherweise nicht eindeutig...
// eventuell globale Zählvariable, die bei jedem Bildauswahlklick hochgezählt wird, statt der gid verwenden, dann bleibt Mehrfachauswahl zulässig.
// besser?: gewähltes Bild unklickbar machen (jQuery 'unbind') und beim Entfernen aus diagzone reaktivieren. --> aufwendig
//  --> Zählvariable funktioniert wegen Asynchronizität (AJAX) nicht!!

function putImg(x,y,z) {
	btnStr = "<br><button id='rem_" + z + "' >REMOVE</button> <button id='up_" + z + "' >UP</button> <button id='down_" + z + "' >DOWN</button>";
	apndStr= "<div id='im_" + z + "' class='im_res'><table><tr><td><a href='vimu_s_museobjres.php?gid=%27" + z + "%27' target='_blank'><img src='" + x + "' width='250px'/></a></td><td valign='top'>" + y + btnStr +"</td></tr></table></div>";
	// alert(apndStr);
	$("#diagZone").append(apndStr);
	$("#rem_"+z).bind('click', function(){$("#im_"+z).remove();});
	$("#down_"+z).bind('click', function(){
		// alert($(this).closest('div').next().text());
		$(this).closest('div').next().after($("#im_"+z));
		});
	$("#up_"+z).bind('click', function(){
		// alert($(this).closest('div').next().text());
		$(this).closest('div').prev().before($("#im_"+z));
		});
}

function get_archive(orderBy, y_from, y_to)
{
var displayInfo;
if(orderBy == 0){displayInfo = "<b>Ordered by ID</b>";}
else if(orderBy == 2) {displayInfo = "<b>Ordered by YEAR from "+ y_from + " to " + y_to + "</b>";}
$("#displayInfo").empty();
$("#displayInfo").append(displayInfo);
$("#searchZone").empty();
$("#searchZone").append("<table class='vimu-table'>");
$.getJSON("vimu_db_service.php?action=get_archive&orderBy=" + orderBy + "&y_from=" + y_from + "&y_to=" + y_to, function(json){
	for(i=0;i<json.archive.length;i++){
		diagDescr = "<br>ID: " + json.archive[i].gid + " <br>Year: "+json.archive[i].year + " <br> Description: "+json.archive[i].description;
		diagPath = "diagrams/"+ json.archive[i].filename;
		diagGID = json.archive[i].gid;
		tr_string = "<tr><td><img id='img_" + diagGID + "' src='" + diagPath + "' width='100'  onmouseover='bigImg(this)' onmouseout='normalImg(this)'></td><td><a href='vimu_s_museobjres.php?gid=%27" + diagGID + "%27' target='_blank'>" + diagGID + "</a></td><td>" +  json.archive[i].year + "</td><td>"+json.archive[i].filename+"</td></tr>";
		$("#searchZone").append(tr_string);
		$("#img_"+ diagGID).bind('click', {p : diagPath, d : diagDescr, g : diagGID }, function(event){putImg(event.data.p, event.data.d, event.data.g);});
	}
	$("#searchZone").append("</table>");
    });
}

function search_archive(id_keyw)
{
$("#displayInfo").empty();
$("#displayInfo").append("<b>Selected KEYWORD (ordered by ID)</b>");
$("#searchZone").empty();
$("#searchZone").append("<table>");
$.getJSON("vimu_db_service.php?action=search_archive&id_keyw=" + id_keyw, function(json){
	for(i=0;i<json.archive.length;i++){
		diagDescr = "<br>ID: " + json.archive[i].gid + " <br>Year: "+json.archive[i].year + " <br> Description: "+json.archive[i].description;
		diagPath = "diagrams/"+ json.archive[i].filename;
		diagGID = json.archive[i].gid;
		tr_string = "<tr><td><img id='img_" + diagGID + "' src='" + diagPath + "' width='100'  onmouseover='bigImg(this)' onmouseout='normalImg(this)'></td><td><a href='vimu/vimu_s_museobjres.php?gid=%27" + diagGID + "%27' target='_blank'>" + diagGID + "</a></td><td>" +  json.archive[i].year + "</td><td>"+json.archive[i].filename+"</td></tr>";
		$("#searchZone").append(tr_string);
		$("#img_"+ diagGID).bind('click', {p : diagPath, d : diagDescr, g : diagGID }, function(event){putImg(event.data.p, event.data.d, event.data.g);});
	}
	$("#searchZone").append("</table>");
    });
}
</script>


