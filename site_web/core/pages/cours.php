<?php
session_start();
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
?>
<script src="core/cours/search_script.js"></script>

<div id="tabs" class="tabs_rouge">
  <ul>
    <li><a href="#tabs-1" title="">Cours!</a></li>
    <li><a href="#tabs-2" title="">Chercher un cours</a></li>
    <li><a href="#tabs-3" title="">Ajouter</a></li>
    <li>
      <button id="but_cancel"><img src="css/media/img/wrong.png" /></button>
    </li>
  </ul>
  <div id="tabs_container">
    <div id="tabs-1" class="tabs_rouge"> </div>
    <div id="tabs-2" class="tabs_rouge"> <span class="wrap">
      <aside class="search">
        <input type="text" name="recherche" class="text" id="recherche"/>
      </aside>
      <span class="resultat" id="resultat"></span> </span> </div>
    <div id="tabs-3" class="tabs_rouge">
      <aside id="inscription">
        <h1> Ajout : </h1>
        <!-- formulaire -->
        <form id="insertioncours" action="ajout_cours.php" method="POST" enctype="multipart/form-data">
          <p>
            <label for="titre">Titre :</label>
            <input type="text" placeholder="Entrez un titre" id="titre" name="titre" required/>
            <br>
            <br>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000">
            Fichier :
            <input type="file" name="avatar" id="avatar">
            Genre:
            <SELECT name="genre" id="genre" size="1">
              <OPTION>Film
              <OPTION>Série
              <OPTION selected> Livre
              <OPTION>Jeu-video
              <OPTION>Comics
            </SELECT>
            <br>
            <br>
            <label for="tag1">Tag :</label>
            <input type="text" placeholder="Entrez tag1" id="tag1" name="tag1" maxlength="16" required/>
            <label for="tag2"></label>
            <input type="text" placeholder="Entrez tag2" id="tag2" name="tag2" maxlength="16" required/>
            <label for="tag3"></label>
            <input type="text" placeholder="Entrez tag3" id="tag3" name="tag3" maxlength="16" required/>
            <br>
            <br>
            <label for="contenu">Contenu du cours :</label>
            <input type="text" style="width:500px; height:200px;" placeholder="Entrez votre contenu" id="contenu" name="contenu" required/>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <input type="submit" value="Ajouter" />
          </p>
        </form>
      </aside>
    </div>
  </div>
  <!--End tabs container--> 
  <!--<img id="imgTest" src="../site_web/css/media/img/zombie.png" />		--> 
</div>
<!--End tabs--> 

<script>
//$('#imgTest').hide();
$(document).ready(function() {
	
	/*$('#imgTest').show().delay( 100 ).animate({
		top:'10px'
		});*/

$( "#but_cancel" ).click(function( event ) {
  event.preventDefault();
  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
});
})
</script>