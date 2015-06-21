<?php
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

session_start();
?>

<div id="main_wrapper">

<div id="tabs" class="tabs_rouge">
		<ul>
			<li><a href="#tabs-1" title="">Connexion</a></li>
            <li><button id="but_cancel"><img src="css/media/img/wrong.png" /></button></li>
		</ul>

		<div id="tabs_container">
			

			<div id="tabs-1" class="tabs_rouge">
			
            <?php
if ($id>0) 
{
	echo $_SESSION['pseudo'];
	echo ' : ';
	echo '<a href="core/connexion/deconnexion.php">Déconnexion</a>';
	echo ' - ';
	echo '<a href="../profile/profile.php"> Votre profile </a>';
	echo ' - ';

}
if ($id==0) 
{
	echo '<form method="post" action="core/connexion/connexion.php">
		<fieldset>
			<legend>Connexion</legend>
				<p>
					<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
					<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
				</p>
		</fieldset>

		<p><input type="submit" value="Connexion" /></p></form>
		<a href="../inscription/inscription.php">Pas encore inscrit ?</a>';
}
$titre = "Zombie Academy accueil";
?>	
                
			</div>
            
		</div><!--End tabs container-->
<img id="imgTest" src="../site_web/css/media/img/zombie.png" />		
	</div><!--End tabs-->

</div><!--main wrapper-->

<script>
$('#imgTest').hide();
$(document).ready(function() {
	
	$('#imgTest').show().delay( 100 ).animate({
		top:'10px'
		});

$( "#but_cancel" ).click(function( event ) {
  event.preventDefault();
  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
});
})
</script>

