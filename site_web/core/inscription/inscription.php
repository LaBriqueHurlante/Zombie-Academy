
	<div id="main_wrapper">

            <div id="tabs" class="tabs_rougeFonce">
		<ul>
			<li><a href="#tabs-1" title="">Inscription</a></li>
			
            <li><button id="but_cancel"><img src="css/media/img/wrong.png" /></button></li>
		</ul>

		<div id="tabs_container">
        
			<div id="tabs-1" class="tabs_rougeFonce">
				
                	<section id="inscription">
				
				<form id="register_form" onsubmit="return false;">
					<p>
						<!--<label for="nom">Nom</label>-->
						<input type="text" placeholder="Nom" id="nom" name="nom" required/> 
						<br />

						<!--<label for="prenom">Prénom</label>-->
						<input type="text" placeholder="Prénom" id="prenom" name="prenom" required/>
						<br />

						<!--<label for="pseudo">Pseudo</label>-->
						<input type="text" placeholder="Pseudo" id="pseudo" name="pseudo" maxlength="16" required/>
						<small id="output_checkuser"></small>
                    	<br />
						
					
						<!--<label for="pass1">Mot de passe</label>-->
						<input type="password" placeholder="Pass" id="pass1" name="pass1" required/>
						<small id="output_pass1"></small>
						<br />
                        
						<!--<label for="pass2">Confirmer</label>-->
						<input type="password" placeholder="Confirme ton pass" id="pass2" name="pass2" required/> 
						<small id="output_pass2"></small>
                        <br />
						
						<!--<label for="email">Email</label>-->
						<input type="email" placeholder="Email" id="email" name="email" required/>
						<small id="output_email"></small>
                        <br />
                  
						
						
						<span id="status" style="color:#D43F42;">
							Remplir tous les champs
						</span>
					</p>	
						<input type="submit" id="bRegister" class="btn btn-success" value="Inscription" />
					
				</form>
			</section>
                
                
                
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
            
            
            
			
			<section id="connexion">
			</section>

			<!--<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>-->
			<script>
				$(document).ready(function(){
					
					$("#register_form input").focus(function(){
						$("#status").fadeOut(800);
					});
					
					$("#pseudo").keyup(function(){
						//On vérifie si le pseudo est ok ou n'a pas été déjà pris
							check_pseudo();
					});

					$("#pass1").keyup(function(){
						//On vérifie si le mot de passe est ok
							if($(this).val().length < 6){
								$("#output_pass1").css("color", "red").html("<br/>Trop court (6 caractères minimum)");
							} else if($("#pass2").val() != "" && $("#pass2").val() != $("#pass1").val()){
								$("#output_pass1").html("<br/>Les deux mots de passe sont différents");
								$("#output_pass2").html("<br/>Les deux mots de passe sont différents");
							} else {
								$("#output_pass1").html('<img src="css/media/img/check.png" class="small_image" alt="" />');
							}
					});

					$("#pass2").keyup(function(){
						//On vérifie si les mots de passe coïncident
							check_password();
					});
					
					$("#email").keyup(function(){
						//On vérifie si les mots de passe coïncident
							check_email();
					});
					
					function check_pseudo(){
							$.ajax({
								type: "post",
								url:  "../inscription/register.php",
								data: {
									'pseudo_check' : $("#pseudo").val()
								},
								success: function(data){
											if(data == "success"){
												$("#output_checkuser").html('<img src="css/media/img/check.png" class="small_image" alt="" />');
												return true;
											} else {
												$("#output_checkuser").css("color", "red").html(data);
											}
										 }
							});
					}
					
					function check_password(){
							$.ajax({
								type: "post",
								url:  "../inscription/register.php",
								data: {
									'pass1_check' : $("#pass1").val(),
									'pass2_check' : $("#pass2").val()
								},
								success: function(data){
											if(data == "success"){
												 $("#output_pass2").html('<img src="css/media/img/check.png" class="small_image" alt="" />');
												 $("#output_pass1").html('<img src="css/media/img/check.png" class="small_image" alt="" />');
											} else {
												$("#output_pass2").css("color", "red").html(data);
											}
										 }
							});
					}
					
					function check_email(){
							$.ajax({
								type: "post",
								url:  "../inscription/register.php",
								data: {
									'email_check' : $("#email").val()
								},
								success: function(data){
											if(data == "success"){
												$("#output_email").html('<img src="css/media/img/check.png" class="small_image" alt="" />');
											} else {
												$("#output_email").css("color", "red").html(data);
											}
										 }
							});
					}
					
					
					//Traitement du formulaire d'inscription
					$("#register_form").submit(function(){
						var status = $("#status");
						var nom = $("#nom").val();
						var prenom = $("#prenom").val();
						var pseudo = $("#pseudo").val();
						var pass1 = $("#pass1").val();
						var pass2 = $("#pass2").val();
						var email = $("#email").val();

						if(nom == "" || prenom == "" || pseudo == "" || pass1 == "" || pass2 == "" || email == "" ){
							status.html("Veuillez remplir tous les champs").fadeIn(400);
						} else if(pass1 != pass2) {
							status.html("Les deux mots de passe sont différents").fadeIn(400);
						} else {	
							$.ajax({
								type: "post",
								url:  "../inscription/register.php",
								data: {
									'nom'    : nom,
									'prenom' : prenom,
									'pseudo' : pseudo,
									'pass1' : pass1,
									'pass2' : pass2,
									'email' : email,
								},
								beforeSend: function(){
												$("#bRegister").attr("value", "Traitement en cours...");
											},
								success: function(data){
											if(data != "register_success"){
												status.html(data).fadeIn(400);
												$("#bRegister").attr("value", "Inscription");
												status.html("Inscription réussie").fadeIn(400);
												$("#bRegister").addClass("btn-primary").css("color", "#ffffff");
												
												setTimeout(function(){
												  $( "#vignette" ).hide("slide", { direction: "up" }, "fast");
												}, 1000);
												
											} else {
												$("#presentation").hide();
												$("#connexion h1").html("Connexion");
												$("#inscription").html("<strong>Juste une dernière étape " + prenom + " " + nom + " !</strong><br/>Un lien d'activation de votre compte vient de vous être envoyé à l'adresse électronique indiquée lors de l'inscription.<br/>Veuillez tout simplement cliquer ce lien et vous serez définitivement membre du <strong>TDN SOCIAL NETWORK</strong>.<br/><em>(Pensez à vérifier vos spams ou courriers indésirables, si vous ne voyez pas ce mail dans votre boîte de réception)</em><br/><br/>Une fois que ceci est fait, vous n'aurez plus qu'à vous connecter!<br/>Alors, on se dit à très bientôt ;) !").css("width", "inherit").fadeIn(400);
											}
										 }
							});
						}
					});
					
				
					$("#login_form").submit(function(){
						var pseudo = $("#login").val();
						var pass   = $("#mdp").val();
						var status = $("#status2");	
						
						if(pseudo == "" || pass == ""){
							status.html("Veuillez remplir tous les champs.").fadeIn(400);	
						} else {
							$.ajax({
								type: 'post',
								url: "../inscription/register.php",
								data: {
									'pseudo' : pseudo,
									'pass' : pass
								},
								beforeSend: function(){
									status.html("Connexion en cours...").fadeIn(400);
								},
								success: function(data){
									if(data == "login_failed"){
										status.html("Pseudo/mot de passe invalide !").fadeIn(400);
									} else {
										window.location = "profile.php";
									}
								}
							});
						}
					});
				});
			</script>
			</div>
		</div>

		
		
		