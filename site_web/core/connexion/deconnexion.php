<?php
session_start();
session_destroy();
$titre="Déconnexion";
include("includes/header.php");
include("includes/functions.php");
define('ERR_IS_NOT_CO','Vous n etes pas connecté couillon');
if ($id==0) erreur(ERR_IS_NOT_CO);
?>


<div id="tabs" class="tabs_rougeFonce">
		<ul>
			<li><a href="#tabs-1" title="">Déconnection</a></li>
            <li><button id="but_cancel"><img src="css/media/img/wrong.png" /></button></li>
		</ul>

		<div id="tabs_container">
			

			<div id="tabs-1" class="tabs_rougeFonce">
                <h1>Vous êtes à présent déconnecté</h1>
                <p><?php echo 'Cliquez <a href="../index.php">ici</a> pour revenir à la page précédente.'  ?></p>
			</div>

            
		</div><!--End tabs container-->
	
	</div><!--End tabs-->



<script>
$(document).ready(function() {
	$("#tabs_container").animate({ 'min-height':'400px'});
	decoVignette();
		
	$( "#but_cancel" ).click(function( event ) {
	  event.preventDefault();
	  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
	});
})
</script>