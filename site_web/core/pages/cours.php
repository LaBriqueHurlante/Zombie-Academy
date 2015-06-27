<?php
session_start();
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
?>
<script src="core/cours/search_script.js"></script>

<div id="tabs" class="tabs_rouge">
  <ul>
    <li><a href="#tabs-1" class="tabulous_a" title="">Cours du jour</a></li>
    <li><a href="#tabs-2" class="tabulous_a" title="">Chercher un cours</a></li>
    <li><a href="#tabs-3" class="tabulous_a" title="">Ajouter</a></li>
    <li>
      <button id="but_cancel"><img src="css/media/img/wrong.png" /></button>
    </li>
  </ul>
  <div id="tabs_container">
    <div id="tabs-1" class="tabs_rouge">
    
    	<script>$("#tabs_contenu").load("../site_web/core/externe/film.html #film1");</script>
        <section id="tabs_contenu"></section>
        
    </div>
    
    
    <div id="tabs-2" class="tabs_rouge"> <span class="wrap">
      <aside class="search">
      <h2>Recherche</h2>
        <input type="text" name="recherche" class="film_recherche text" id="recherche"/>
      </aside>
      <span class="resultat" id="resultat"></span> </span> </div>
    <div id="tabs-3" class="tabs_rouge">
      <aside id="inscription">
        
        <!-- formulaire -->
        <form id="insertioncours" onsubmit="return false;" enctype="multipart/form-data">
        
        
        <section id="inscription_section1">
        	<h1>Ajouter un cours</h1>
            <textarea type="text" style="height:200px;" placeholder="Entrez votre contenu" id="contenu" name="contenu" required></textarea>
            <input id="resultat" type="submit" value="Ajouter" />
        </section>
        
        <section id="inscription_section2">
            <p>
            <label for="titre">Titre :</label>
            <input type="text" placeholder="Entrez un titre" id="titre" name="titre" required/>
            </p>
 
            <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000">
            <label for="titre">Fichier :</label>
            <input type="file" name="avatar" id="avatar">
            </p>
            <p>
            Genre:
            <SELECT name="genre" id="genre" size="1">
              <OPTION>Film
              <OPTION>Série
              <OPTION selected> Livre
              <OPTION>Jeu-video
              <OPTION>Comics
            </SELECT>
            </p>
            <p>
            <label for="tag1">Tags :</label>
            <input type="text" placeholder="Entrez tag1" id="tag1" name="tag1" maxlength="16" required/>
            
            <input type="text" placeholder="Entrez tag2" id="tag2" name="tag2" maxlength="16" required/>
            
            <input type="text" placeholder="Entrez tag3" id="tag3" name="tag3" maxlength="16" required/>
            </p>
        </section>
        </form>
        </aside>
        <span id="status"></span>
        <span id="output"></span>
      
    </div>
  </div>
  <!--End tabs container--> 
  <!--<img id="imgTest" src="../site_web/css/media/img/zombie.png" />		--> 
</div>
<!--End tabs--> 



<script>
//$('#imgTest').hide();
$(document).ready(function() {

//$(" #tabs_container ").animate({ 'height':'500px'});	
$( "#but_cancel" ).click(function( event ) {
  event.preventDefault();
  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
});
})
</script>

<script>

$(document).ready(function() {

					//Traitement du formulaire d'inscription
					$("#insertioncours").submit(function(){
						var status = $("#status");
						var titre = $("#titre").val();
						var avatar = $("#avatar").val();
						var genre = $("#genre").val();
						var tag1 = $("#tag1").val();
						var tag2 = $("#tag2").val();
						var tag3 = $("#tag3").val();
						var contenu = $("#contenu").val();

						if(titre == "" || avatar == "" || genre == "" || tag1 == "" || tag2 == "" || tag3 == "" || contenu == ""){
							status.html("Veuillez remplir tous les champs").fadeIn(400);
						} else {	
							$.ajax({
								type: "post",
								url:  "core/cours/ajout_cours.php",
								data: {
									'titre'    : titre,
									'avatar' : avatar,
									'genre' : genre,
									'tag1' : tag1,
									'tag2' : tag2,
									'tag3' : tag3,
									'contenu' : contenu
								},
								beforeSend: function(){
												$("#output").attr("value", "Traitement en cours...");
											},
								success: function(data){
											if(data != "register_success"){
												status.html(data).fadeIn(400);
												$("#output").attr("value", "ajout du cours");
												$("#inscription").fadeOut("slow", function(){
												status.html("Votre cours a bien été ajouté, il sera soumis à la modération avant sa publication.").fadeIn(400);
												$("#output").addClass("btn-primary").css("color", "#ffffff");
												})
												
												
											} else {
												$("#presentation").hide();
												$("#connexion h1").html("Connexion");
												$("#inscription").html("<strong>Juste une dernière étape " + prenom + " " + nom + " !</strong><br/>Un lien d'activation de votre compte vient de vous être envoyé à l'adresse électronique indiquée lors de l'inscription.<br/>Veuillez tout simplement cliquer ce lien et vous serez définitivement membre du <strong>TDN SOCIAL NETWORK</strong>.<br/><em>(Pensez à vérifier vos spams ou courriers indésirables, si vous ne voyez pas ce mail dans votre boîte de réception)</em><br/><br/>Une fois que ceci est fait, vous n'aurez plus qu'à vous connecter!<br/>Alors, on se dit à très bientôt ;) !").css("width", "inherit").fadeIn(400);
											}
										 }
							});
						}
					});
				})
</script>