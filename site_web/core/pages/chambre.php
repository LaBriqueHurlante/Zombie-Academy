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

define('ERR_IS_NOT_CO','Non connecté');
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
    <li><a href="#tabs-4" class="violet_a" title="">Personnalisation</a></li>
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
          <p>Xp : 400 points</p>
          <p>Pseudonyme : <?php echo $donnees['pseudo']; ?></p>
          <p>Prénom : <?php echo $donnees['Prenom']; ?></p>
          <p>Nom : <?php echo $donnees['Nom']; ?></p>
          <p>Description : <?php echo $donnees['Description']; ?></p>
          <p>Etudiant depuis le : <?php echo $donnees['created']; ?></p>
        </section>
      </section>
    </div>
    <div id="tabs-2" class="tabs_violet">
      <section class="contenant_global">
        <section class="perso_global">
          <h1>Stats</h1>
        </section>
        <section class="perso_global global2">
          <p>Quiz Textes : 1 ­ 0 100%</p>
          <p>Quiz photos : 2  ­1 66%</p>
          <p>Quiz audio : 0 ­ 0 0%</p>
          <p>Quiz vidéo : 0 ­ 0 0%</p>
          <p>Questions répondues : 4</p>
          <p>Total des Quiz : 1</p>
 
        </section>
      </section>
    </div>
    <div id="tabs-3" class="tabs_violet">     
     <section class="perso_recomp">
     	<h1>Trophées</h1>
     	<img src="../site_web/css/media/img/recompenses/Trophéecarré.png" />
        <img id="perso_items1" class="perso_items" src="../site_web/css/media/img/recompenses/BadgeA1_active.png" />
     </section>
     <section class="perso_recomp">
     	<h1>Badges</h1>
     	<img src="../site_web/css/media/img/recompenses/badge.png" />
        <img id="perso_items2" class="perso_items" src="../site_web/css/media/img/recompenses/BadgeA2_active.png" />
     </section>
     <section class="perso_recomp">
     	<h1>Ton Cerveau</h1>
     	<img src="../site_web/css/media/img/recompenses/cerveaux.png" />
        <img  id="perso_items3" class="perso_items" src="../site_web/css/media/img/recompenses/Cerveauactif.png" />
     </section>
     
     </div>
      
    <div id="tabs-4" class="tabs_violet">
      
      <section class="contenant_global">
        <section class="perso_global global1">
          <h1 style="font-size: 50px;">Personnalisation</h1>
          <input type="text" placeholder="Entrez votre description" id="contenu" name="contenu" />
          
          <input type="submit" class="perso_submit" value="Enregistrer" />
        </section>
        <section class="perso_global global2">
        <form id="perso_form" onsubmit="return false;">
          <p><label for="pseudo">Pseudo</label><input type="text" placeholder="<?php echo $donnees['pseudo']; ?>" id="pseudo" name="pseudo" /></p>
          <p><label for="email">Email</label><input type="text" placeholder="<?php echo $donnees['email']; ?>" id="email" name="email" /></p>
          <p><label for="pass1">Mot de passe</label><input type="password" placeholder="Mot de passe" id="pass1" name="pass1" required/></p>
          <p><label for="pass2">Mot de passe</label><input type="password" placeholder="Confirme ton passe" id="pass2" name="pass2" required/></p>
        </form>
        </section>
      </section>
      </div>
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