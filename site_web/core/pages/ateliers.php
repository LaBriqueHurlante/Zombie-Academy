
<div id="tabs" class="tabs_jaune">
  <ul>
    <li><a href="#tabs-1" class="tabulous_a" title="">L'atelier</a></li>
    <li><a href="#tabs-2" class="tabulous_a" title="">Recherche</a></li>
    <li><a href="#tabs-3" class="tabulous_a" title="">Ajouter</a></li>
    <li>
      <button id="but_cancel"><img src="css/media/img/wrong.png" /></button>
    </li>
  </ul>
  <div id="tabs_container">
    <div id="tabs-1" class="tabs_jaune">
    <h1>Dernières oeuvres estudiantines</h1>
      <?php
require "../atelier/includes/connexBDD.php"; 


$sql= "SELECT * FROM creations";
$qid = $db->prepare($sql);
$qid->execute();
$repertoire = "../../css/media/img/imgAvatar/";
 
?>
<div class="button-group filter-button-group">
<button data-filter="*">Voir tout</button>
  <button data-filter=".fanart">Fan Art</button>
  <button data-filter=".fanfiction">Fan Fiction</button>
</div>
      <div id="block">
        <?php 
	while( $row=$qid->fetch(PDO::FETCH_ASSOC) )       
	{
		?>
        <div class="element-item <?php 
		
		if ($row["genre"]=="Fan art"){
			echo "fanart";
			}elseif ($row["genre"]=="Fan fiction"){
				echo "fanfiction";
			}
		
		 ?>"> 
         <img src="LivingHell/site_web/<?php echo $repertoire.$row['photo']; ?>"/>
          <aside>
          <h2><?php echo $row['titre'] ?></h2>
          <p class="fan_auteur"><?php echo $row['auteur'] ?></p>
          </aside>
        </div>
        <?php
	}

	?>
      </div>
      <style>

</style>
    </div>
    <div id="tabs-2" class="tabs_jaune"> </div>
    <div id="tabs-3" class="tabs_jaune">
    
    <h1 id="status">Montre tes talents à tes petits camarades !</h1>
    
      <section id="add-fan" class="atelier_form">
        <!-- formulaire -->
        <form id="insertionfan" method="POST" action="core/atelier/ajout_fan.php" enctype="multipart/form-data">
        <p>
            <label for="titre">Titre</label>
            <input type="text" placeholder="Entrez un titre" id="titre" name="titre" required/>
		</p>
        
        <p>
            <label for="auteur">Auteur</label>
            <input type="text" placeholder="Auteur" id="auteur" name="auteur" required/>
		</p>
        
        	<p>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
            <label for="avatar">Fichier</label>
            <input type="file" name="avatar" id="avatar" accept="image/*">
          </p>
          
           
            <p>
            <label for="genre">Genre</label>
            <SELECT name="genre" id="genre" size="1">
              <OPTION>Fan fiction
              <OPTION selected> Fan art
              <OPTION>Zombie exquis
            </SELECT>
            </p>

			<p>
            <label class="at_label" for="contenu">Contenu</label>
            <textarea type="text" placeholder="Entrez votre contenu" id="contenu" name="contenu" required></textarea>
			</p>
            
            <p><input id="fan_but_register" type="submit" value="Ajouter" /></p>
          
        </form>
        
        
      </section>
      <section id="add-fan2" class="atelier_form">  
            <div id="image_preview">
            <div class="thumbnail hidden">
                <img src="" alt="">
                <div class="caption">
                        <h4></h4>
                        <p></p>
                        <p><button type="button" class="btn btn-default btn-danger">Annuler</button></p>
                    </div>
                </div>
            </div>
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

//isotope	
$('#block').isotope({
  // options
  itemSelector: '.element-item',
  layoutMode: 'masonry'
  
});
// filter items on button click
var $container = $('#block');
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $container.isotope({ filter: filterValue });
});	

})

</script> 
<script>
$(document).ready(function(){



$(function () {
    $('#insertionfan').on('submit', function (e) {
        // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();
 
        var $form = $(this);
        var formdata = (window.FormData) ? new FormData($form[0]) : null;
        var data = (formdata !== null) ? formdata : $form.serialize();
 
        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            contentType: false, // obligatoire pour de l'upload
            processData: false, // obligatoire pour de l'upload
            dataType: 'html', // selon le retour attendu
            data: data,
            success: function() {
				$("#add-fan, #add-fan2").fadeOut();
				$("#status").html("Merci, les professeurs vérifieront votre travail avant de l'exposer.");
				setTimeout(function(){
					$( "#vignette" ).hide("slide", { direction: "right" }, "fast");
				},5000)	
			}
        });
    });
});

$(function () {
    // A chaque sélection de fichier
    $('#insertionfan').find('input[name="avatar"]').on('change', function (e) {
        var files = $(this)[0].files;
 
        if (files.length > 0) {
            // On part du principe qu'il n'y qu'un seul fichier
            // étant donné que l'on a pas renseigné l'attribut "multiple"
            var file = files[0],
                $image_preview = $('#image_preview');
 
            // Ici on injecte les informations recoltées sur le fichier pour l'utilisateur
            $image_preview.find('.thumbnail').removeClass('hidden');
            $image_preview.find('img').attr('src', window.URL.createObjectURL(file));
            $image_preview.find('h4').html(file.name);
            $image_preview.find('.caption p:first').html(file.size +' bytes');
			
        }
    });
 
    // Bouton "Annuler" pour vider le champ d'upload
    $('#image_preview').find('button[type="button"]').on('click', function (e) {
        e.preventDefault();
 
        $('#insertionfan').find('input[name="avatar"]').val('');
        $('#image_preview').find('.thumbnail').addClass('hidden');
    });
});

				});
			</script> 
