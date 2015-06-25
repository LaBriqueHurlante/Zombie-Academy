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
    <li>
      <button id="but_cancel"><img src="css/media/img/wrong.png" /></button>
    </li>
  </ul>
  <div id="tabs_container">
    <div id="tabs-1" class="tabs_violet">
      <div id='avatar' style="display:none;"> <img style="width:100px; height:100px;"src="<?php echo $repertoire.$donnees['avatar']; ?>"/> </div>
      <section id='info' class="contenant_global">
        <section class="perso_global">
          <h1>Global</h1>
        </section>
        <section class="perso_global global2">
          <p>Niveau : <?php echo $donnees['niveau']; ?></p>
          <p>Xp : <?php echo $donnees['xp']; ?></p>
          <p>Pseudonyme : <?php echo $donnees['pseudo']; ?></p>
          <p>Prénom : <?php echo $donnees['Prenom']; ?></p>
          <p>Nom : <?php echo $donnees['Nom']; ?></p>
          <p>Description : <?php echo $donnees['Description']; ?></p>
          <p>Membre depuis le : <?php echo $donnees['created']; ?></p>
        </section>
      </section>
    </div>
    <div id="tabs-2" class="tabs_violet">
      <section class="contenant_global">
        <section class="perso_global">
          <h1>Stats</h1>
        </section>
        <section class="perso_global global2">
          <p>Quiz Textes :</p>
          <p>Quiz photos :</p>
          <p>Quiz audio :</p>
          <p>Quiz vidéo :</p>
          <p>Total des Quiz :</p>
        </section>
      </section>
    </div>
    <div id="tabs-3" class="tabs_violet">
      <h1>Récompenses</h1>
      Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. </div>
    <div id="tabs-4" class="tabs_violet">
      <h1>Personnalisation</h1>
      Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. </div>
  </div>
  <!--End tabs container--> 
  
</div>
<!--End tabs--> 

<script>
$(document).ready(function() {
	$("#tabs_container").animate({ 'min-height':'400px'});	
	$( "#but_cancel" ).click(function( event ) {
	  event.preventDefault();
	  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
	});
})
</script>