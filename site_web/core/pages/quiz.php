<?php
session_start();
// stockage des données de sessions.
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

?>
<div id="tabs" class="tabs_orange">
<ul>
  <li><a href="#tabs-1" class="tabulous_a" title="">Quiz du jour</a></li>
  <li><a href="#tabs-2" class="tabulous_a" title="">Rechercher</a></li>
  <li><a href="#tabs-3" class="tabulous_a" title="">Ajouter</a></li>
  <li>
    <button id="but_cancel"><img src="css/media/img/wrong.png" /></button>
  </li>
</ul>
<div id="tabs_container">
  <div id="tabs-1" class="tabs_orange nav"> 
    <script>
	  
	  $("#testH1").click(function(){
	  $("#tabs_contenu").hide();
	  $("#tabs_contenu").load("../site_web/core/quizz/quiz7.html").fadeIn("fast");
	  })
      </script>
    <section id="tabs_contenu">
      <div class="quiz_intro">
        <div id="quiz_ouAlors">Voir un autre Quiz</div>
        <h1>Thème d'aujourd'hui :</h1>
        <h2>#saga #héros #cultureZ</h2>
        <span id="testH1">Jouer ></span> </div>
    </section>
    </div>
    <div id="tabs-2" class="tabs_orange">
      <aside class="search">
        <h2>Recherche</h2>
        <input type="text" name="recherche" class="film_recherche text" id="recherche"/>
      </aside>
    </div>
    <div id="tabs-3" class="tabs_orange"> 

    <section id="insertion quiz">

        <!-- formulaire -->
        <form id="insertionquiz" action="#.php" method="POST" enctype="multipart/form-data">
        
        <section class="quiz_form_sec">
          	<p>
            <label for="titre">Titre du quiz</label>
            <input type="text" placeholder="Entrez un titre" id="titre" name="titre" required/> 
            </p>

			 <p>
             <input type="hidden" name="MAX_FILE_SIZE" value="100000">
            <label for="avatar">Fichier à joindre</label>
            <input type="file" name="avatar" id="avatar">
			</p>

			<p>
            <label for="genre">Type de quiz</label>
            <SELECT name="genre" id="genre" size="1">
            <OPTION>Ecrit
            <OPTION>Audio
            <OPTION selected>Photo
            <OPTION>Video
            </SELECT>
            </p>    

			<p>
            <label for="tag1">Tag 1</label>
            <input type="text" placeholder="Entrez tag1" id="tag1" name="tag1" maxlength="16" required/>
            </p>
            <p>
            <label for="tag2">Tag 2</label>
            <input type="text" placeholder="Entrez tag2" id="tag2" name="tag2" maxlength="16" required/>
            </p>
            <p>
            <label for="tag3">Tag 3</label>
            <input type="text" placeholder="Entrez tag3" id="tag3" name="tag3" maxlength="16" required/>
            </p>
		</section>
        
        <section class="quiz_form_sec">
			<p>
             <label for="quest">Entrez votre question</label>
            <input type="text" placeholder="Entrez votre question" id="quest" name="quest" required/> 
            </p>
            
           <p>
            <label for="repcor">Entrez la réponse correcte</label>
            <input type="text" placeholder="Entrez votre réponse" id="repcor" name="repcor" required/> 
            </p>
            
			<p>
             <label for="repincor1">Entrez deux réponses incorrectes</label>
            <input type="text" placeholder="Réponse incorrecte 1" id="repincor1" name="repincor1" required/>
            </p>
             
			<p>
             <label for="repincor2"></label>
            <input type="text" placeholder="Réponse incorrecte 2" id="repincor2" name="repincor2" required/>
            </p>
            <p><input type="submit" value="Ajouter" /></p>
        </section>    
            
        </form>
    </section>
    </div>
  </div>
  <!--End tabs container--> 
</div>
<!--End tabs--> 
<script>
	

$(document).ready(function() {
	
$( "#but_cancel" ).click(function( event ) {
  event.preventDefault();
  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
});
})
</script> 
