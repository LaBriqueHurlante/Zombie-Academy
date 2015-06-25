<?php
session_start();

$titre="Profil";


try
{
		$db = new PDO('mysql:host=localhost;dbname=zombieacademy_bdd', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';




define('ERR_IS_NOT_CO','Vous n etes pas connecté');
if ($id==0) erreur(ERR_IS_NOT_CO);
// Récupération de l'avatar ------

$req = $db->prepare("SELECT * FROM utilisateur WHERE id_uti = '".$_SESSION["id"]."'") or die(mysql_error());
$req->execute();	
$donnees = $req->fetch();
$repertoire = "../../";

?>
<div id="tabs" class="tabs_violet">
		<ul>
			<li><a href="#tabs-1" class="tabulous_a" title="">Global</a></li>
			<li><a href="#tabs-2" class="tabulous_a" title="">Stats</a></li>
            <li><a href="#tabs-3" class="tabulous_a" title="">Récompenses</a></li>
            <li><a href="#tabs-4" class="tabulous_a" title="">Personnalisation</a></li>
            <li><button id="but_cancel"><img src="css/media/img/wrong.png" /></button></li>
		</ul>

		<div id="tabs_container">
			

			<div id="tabs-1" class="tabs_violet">
                <h1>Global</h1>
			
				
 


	<div id='menuprofile'>
		<a href='index.php'> index - </a> 
		<a href='profile.php'> Profile global - </a> 
		<a href='menustats.php'> Statistiques - </a>
		<a href='menutrophees.php'> Trophées - </a>
		</br></br>
	</div>

	<div id='avatar'>
		<img style="width:100px; height:100px;"src="<?php echo $repertoire.$donnees['avatar']; ?>"/>
	</div>

	<span id='info'>
		<b> Niveau : </b>
		<?php 
		echo $donnees['niveau'];
		 ?>
		 <br><br>

		 <b> Xp : </b>
		<?php 
		echo $donnees['xp'];
		 ?>
		 <br><br>

		<b> Pseudonyme : </b>
		<?php 
		echo $donnees['pseudo'];
		 ?>
		 <br><br>

		 <b> Prénom : </b>
		 <?php 
		echo $donnees['Prenom'];
		 ?>
		 <br><br>

		 <b> Nom : </b>
		 <?php 
		echo $donnees['Nom'];
		 ?>
		 <br><br>

		 <b> Description : </b>
		 <?php 
		echo $donnees['Description'];
		 ?>
		 <br><br>

		 <b> Membre depuis le : </b>
		 <?php 
		echo $donnees['created'];
		 ?>
		 <br><br>

	</span>
</div>


                
			<div id="tabs-2" class="tabs_violet">
            	<h1>Stats</h1>
				   Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.
		
			</div>
            <div id="tabs-3" class="tabs_violet">
            	<h1>Récompenses</h1>
				   Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.
		
			</div>
            <div id="tabs-4" class="tabs_violet">
            	<h1>Personnalisation</h1>
				   Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.
		
			</div>
            
		</div><!--End tabs container-->
	
	</div><!--End tabs-->



<script>
$(document).ready(function() {
	$("#tabs_container").animate({ 'min-height':'400px'});	
	$( "#but_cancel" ).click(function( event ) {
	  event.preventDefault();
	  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
	});
})
</script>