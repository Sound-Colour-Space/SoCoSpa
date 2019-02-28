<table class="directory">

<col class="dateiname">
<col class="typ">
<col class="groesse">
<col class="datum">
<thead>
<tr>
	<th>Dateiname</th>
	<th>Typ</th>
	<th>Groesse</th>
	<th>Hochgeladen</th>

</tr>
</thead>
</tbody>
<?php

// Ordner auslesen und Array in Variable speichern
$alledateien = scandir($ordner); // Sortierung A-Z
// Sortierung Z-A mit scandir($ordner, 1)               				

// Schleife um Array "$alledateien" aus scandir Funktion auszugeben
// Einzeldateien werden dabei in der Variabel $datei abgelegt
foreach ($alledateien as $datei) {
 
	// Zusammentragen der Dateiinfo
	$dateiinfo = pathinfo($ordner."/".$datei); 
	//Folgende Variablen stehen nach pathinfo zur Verfügung
	// $dateiinfo['filename'] =Dateiname ohne Dateiendung  *erst mit PHP 5.2
	// $dateiinfo['dirname'] = Verzeichnisname
	// $dateiinfo['extension'] = Dateityp -/endung
	// $dateiinfo['basename'] = voller Dateiname mit Dateiendung
 
	// Größe ermitteln zur Ausgabe
	$size = ceil(filesize($ordner."/".$datei)/1024); 
	//1024 = kb | 1048576 = MB | 1073741824 = GB

	if ($dateiinfo['extension'] == "") $dateiinfo['extension'] = "<-- path";

	// scandir liest alle Dateien im Ordner aus, zusätzlich noch "." , ".." als Ordner
	// Nur echte Dateien anzeigen lassen und keine "Punkt" Ordner
	// _notes ist eine Ergänzung für Dreamweaver Nutzer, denn DW legt zur besseren Synchronisation diese Datei in den Orndern ab
	if ($datei != "." && $datei != ".."  && $datei != "_notes") { 
	
	?>
   	
    
    <tr>
    	<td><div style="width: 50%"> 
    	<a href="<?php echo $dateiinfo['dirname']."/".$dateiinfo['basename']?>"><?php echo $dateiinfo['basename']?></a>
    	</div></td>
    	<td><?php echo $dateiinfo['extension']?></td>
   		<td><?php echo $size ; ?> kB</td>
    	<td><?php echo strftime("%a, %d.%b.%y, %H:%M", filemtime($ordner."/".$datei))?></td>
    	<!-- <td><?php echo "http://sound-colour-space.zhdk.ch/documentation/docs/".$dateiinfo['basename']?></td> -->
<?php
	};
 };
?>
</tbody>
</table>