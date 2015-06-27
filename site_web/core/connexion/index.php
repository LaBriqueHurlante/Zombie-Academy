<?php
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

session_start();
$ajaxPath = "core/connexion/";
if (!isset($_REQUEST['ajax'])){
	echo '
	<link href="../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../css/menuUti.css" rel="stylesheet" type="text/css">
<link href="../../css/animate.min.css" rel="stylesheet" type="text/css">
<script src="../../js/jquery.min.js"></script>
<script src="../../js/jquery-ui.min.js"></script>
<script src="../../js/tabulous/tabulous.min.js"></script>
<script src="../../js/jquery.animate-shadow.js"></script>
<script src="../../js/map.js"></script>';
		$ajaxPath = "";
}
?>
<script>
	var	ajaxPath = '<?php echo $ajaxPath;?>';
</script>

<div id="main_wrapper" class="nav">
  <div id="tabs" class="tabs_rougeFonce">
    <ul>
      <li><a href="#tabs-1" title="">Connexion</a></li>
      <li>
        <button id="but_cancel"><img src="css/media/img/wrong.png" /></button>
      </li>
    </ul>
    <div id="tabs_container">
      <div id="tabs-1" class="tabs_rougeFonce">
        <?php
if ($id>0) 
{
	echo $_SESSION['pseudo'];
	echo ' : ';
	echo '<a href="core/connexion/deconnexion.php">Déconnexion</a>';
	echo ' - ';
	echo '<a href="../profile/profile.php"> Votre profil </a>';
	echo ' - ';
	echo 'Déjà connecté';

}
if ($id==0) 
{
	?>
        <form id="login_form" onsubmit="return false;">
          <fieldset>
            <p>
              <input name="pseudo" type="text" id="login" />
            </p>
            <p>
              <input type="password" name="password" id="mdp" />
            </p>
          </fieldset>
          <span id="status2" style="color:#D43F42;"></span>
          <p>
            <input type="submit" id="bRegister" class="btn btn-success" value="Connexion" />
          </p>
        </form>
        <a class="suggestion" href="../site_web/core/inscription/inscription.php">Pas encore inscrit ?</a>
        <?php
}
?>
      </div>
    </div>
    <!--End tabs container--> 
    
  </div>
  <!--End tabs--> 
  
</div>
<!--main wrapper--> 

<script>

// Fermeture de la vignette via Bouton CLOSE


$(document).ready(function() {

$( "#but_cancel" ).click(function( event ) {
  event.preventDefault();
  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
});
})
</script> 
<script>
				$(document).ready(function(){
					
				
					$("#login_form").submit(function(){
						var pseudo = $("#login").val();
						var password   = $("#mdp").val();
						var status = $("#status2");	
						
						if(pseudo == "" || password == ""){
							status.html("Veuillez remplir tous les champs.").fadeIn(400);	
						} else {
							$.ajax({
								type: 'post',
								url: ajaxPath+"connexion.php",
								dataType: "json",
								data: {
									'pseudo' : pseudo,
									'password' : password
								},
								beforeSend: function(){
									status.html("Connexion en cours...").fadeIn(400);
								},
								success: function(data){
									
										if(data){
												status.html(data).fadeIn(400);
												$("#bRegister").attr("value", "Connection");
												status.html("Vous êtes bien connecté!").fadeIn(400);
												$("#bRegister").addClass("btn-primary").css("color", "#ffffff");
												$(".deco").fadeOut('slow', function(){
													$(".co").fadeIn('fast');
													$("#coOuPas").html("Hello "+data.pseudo);
													});
												
												$( "#vignette" ).hide("slide", { direction: "right" }, "fast");
												
												
												
											} else {}
									
								}
							});
						}
					});
				});
			</script>