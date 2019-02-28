<!-- Navigation der Seite -->
<nav>


<div id="nav">

	<ul id = "navigation">
		
		<li><a href=<?php $root+"sience.php"?> target="_self">Science</a></li>
		
		<li><a href=<?php $root+"technology.php"?> target="_self">Technology</a></li>
		
		<li><a href=<?php $root+"organisation.php"?> target="_self">Organisation <span class="pfeil">-></span></a> 
			<!-- "administration.php", "documentation.php"  und "conference.php" einbauen -->
			<ul>
			<li><a href=<?php $root+"organisation/dates.php"?> target="_self">Dates</a></li>
			<li><a href=<?php $root+"/organisation/team.php"?> target="_self">Team</a></li>
			
			<?php if (INTERN == "intern") { print "	
				<li><a href=\"intern/organisation/administration.php\" target=\"_self\">Administration</a></li>
				<li><a href=\"intern/organisation/documentation.php\" target=\"_self\">Documentation</a></li>"
			 } ?>
			
			</ul>
				
		</li>
		<li><a href=<?php $root+"virtualmuseum.php"?> target="_self">Virtual Museum <span class="pfeil">-></span></a>
			<ul>
				<li><a href=<?php $root+"/vimu/vimu_objects.php"?> target="_self">Museum Objects</a></li>
				<li><a href=<?php $root+"vimu/vimu_archiv.php"?> target="_self">Museum Archiv</a></li>
				<li><a href=<?php $root+"/vimu/vimu_exhibitionroom.php"?> target="_self">Museum Exhibition</a></li>

				<?php if (INTERN == "intern") { print "<li><a href=$root+\"vimu/vimu_material.php\" target=\"_self\">Material</a></li>"
				 } ?>
		
			</ul>
		</li>
		
		<li><a class="last" href=<?php $root+"virtuallab.php"?> target="_self">Virtual Lab <span class="pfeil">-></span></a>
		<!-- "testsites.php" - "examples.php" -->
			<ul>
				<li><a href=<?php $root+"vilab/testsites.php"?> target="_self">Testsites</a></li>
				<li><a href=<?php $root+"vilab/examples.php"?> target="_self">Examples</a></li>
				<li><a href=<?php $root+"vilab/editors.php"?> target="_self">Editors <span class="pfeil">-></span></a>
				<!-- Unterordner Editoren Virtual Museum -->
					<ul>
						<li><a href=<?php $root+"/vilab/editors/ace_editor1.php"?> target="_self">Ace Editor</a></li>
						<li><a href=<?php $root+"/vilab/editors/live_editor1.php"?> target="_self">Live Editor</a></li>
						<li><a href=<?php $root+"/vilab/editors/p5js_editor1.php"?> target="_self">P5js Editor</a></li>
					</ul>
				</li>
				
								
			</ul>
		</li>
	
	</ul>
	
	<?php if (INTERN == "test")  {	?> <li><a class="intern" href="/intern/intern.php" target ="_self">login</a></li> <?php } ?>
	
</div> <!-- Ende Navigationslayer -->


</nav>
	
