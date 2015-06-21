<?php
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

session_start();
?>

<div id="main_wrapper">

<div id="tabs" class="tabs_rougeFonce">
		<ul>
			<li><a href="#tabs-1" title="">Connexion</a></li>
            <li><button id="but_cancel"><img src="css/media/img/wrong.png" /></button></li>
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
			<legend>Connexion</legend>
				<p>
					<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="login" /><br />
					<label for="password">Mot de Passe :</label><input type="password" name="password" id="mdp" />
				</p>
		</fieldset>
        
        <span id="status2" style="color:#D43F42;"></span>

		<p><input type="submit" id="bRegister" class="btn btn-success" value="Connexion" /></p>
        </form>
		<a href="../inscription/inscription.php">Pas encore inscrit ?</a>
     <?php
}
?>	              
			</div>           
		</div><!--End tabs container-->
        
<img id="imgTest" src="../site_web/css/media/img/zombie.png" />	
	
	</div><!--End tabs-->

</div><!--main wrapper-->




<script>

// Image animation + Fermeture de la vignette via Bouton CLOSE

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
								url: "core/connexion/connexion.php",
								data: {
									'pseudo' : pseudo,
									'password' : password
								},
								beforeSend: function(){
									status.html("Connexion en cours...").fadeIn(400);
								},
								success: function(data){
									
										if(data != "register_success"){
												status.html(data).fadeIn(400);
												$("#bRegister").attr("value", "Connection");
												status.html("Vous êtes bien connecté!").fadeIn(400);
												$("#bRegister").addClass("btn-primary").css("color", "#ffffff");
												
												fermetureAutoPage();
												
											} else {}
									
								}
							});
						}
					});
				});
			</script>