<div id="museum">	

<section class="vimu_showroom allcol">

<div id="exhib_selector" ><h3>Exhibition</h3>

	<form id="form_exh_sel" class="vimu_form" method="" action="">
		<select id = "sel_exhib_id" name="sel_exhib_id">
			<option value = "">-- SELECT EXHIBITION --</option>
			<option value="1">Circular pitch diagrams</option>
			<option value="2">Color topologies</option>
		</select>
		<input type="hidden" name="action" value="get_exhibition"></input>
		<button id="btn_go" name="btn_go">GO</button> 
		<br />
		<button id="btn_showNext">NEXT</button> 
		<button id="btn_showPrev">PREVIOUS</button>
	</form>


</div>

<div id="left_nav"></div>
<div id="content_zone"></div>

</section>
</div>

<script>
$(document).ready(function(){
	$("#btn_go").click(function(){
		// alert("Selection Nr: " + $("#sel_exhib_id").val());
		get_exhibition($("#sel_exhib_id").val());
		return false;	// prevents form from submission
		});	
	$("#btn_showNext").click(function(){
		show_nextExhib();
		return false;	// prevents form from submission
		});	
	$("#btn_showPrev").click(function(){
		show_prevExhib();
		return false;	// prevents form from submission
		});	
		
});

var nr = [];
var templ = [];
var gids = [];
var cur_exh = 0;

function loadExhibit(t,gid, nr){
	l_str = "vimu_t_" + t + ".php?gid='" + gid +"'";
	// alert(l_str);
	$('#content_zone').load(l_str);
	cur_exh = nr;
	// alert(cur_exh);
}



function get_exhibition(id_exhib)
{
$.getJSON("vimu_db_service.php?action=get_exhibition&sel_exhib_id="+id_exhib, function(json){
	// alert("exhibition length: " + json.exhibition.length);
	$("#left_nav").empty();
	var t, gid, nr_exponat;
	// cur_exh = 0;
	nr.length = 0;
	$('#content_zone').empty();
	if(json.exhibition.length > 0){
		loadExhibit(json.exhibition[0].template,json.exhibition[0].gid, 0);
	}
	for(i=0;i<json.exhibition.length;i++){
		t = json.exhibition[i].template;
		gid = json.exhibition[i].gid;
		nr_exponat = json.exhibition[i].nr_exponat;
		
		nr[i] = nr_exponat;
		templ[i] = t;
		gids[i] = gid;
		
		btn_str = "<button id='btn_"+ nr_exponat + "' class='btn_getExhibit'>"+ nr_exponat + "</button>";
		str = btn_str + " | "  + gid + "<br>";
		$("#left_nav").append(str);
		$("#btn_"+nr_exponat).bind('click', {te : t, gi : gid, ni : i }, function(event){loadExhibit(event.data.te,event.data.gi,event.data.ni);});
		}
    });
}

function show_nextExhib(){
	if(nr.length > 0){
	cur_exh = (cur_exh + 1) % nr.length;
	loadExhibit(templ[cur_exh],gids[cur_exh], cur_exh);
	}				
}

function show_prevExhib(){
	if(nr.length > 0){
	cur_exh = (nr.length + cur_exh - 1) % nr.length;
	loadExhibit(templ[cur_exh],gids[cur_exh], cur_exh);
	}				
}

</script>

