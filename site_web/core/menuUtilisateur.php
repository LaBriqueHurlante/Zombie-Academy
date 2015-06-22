<div id="menuUti">

	<ul class="nav">
    	
    	
 
  	<li id="cerveauDeco" class="cerveau-avatar deco"><img src="css/media/img/imgAvatar/cerveauAvatar.png" /></li>
    <li id="cerveauCo" class="cerveau-avatar co"><a href="../pages/chambre.php"><img src="css/media/img/imgAvatar/cerveauAvatar.png" /></a></li>
	<li class="deco"><a class="rouge" href="../inscription/inscription.php">Inscription</a></li>
    <li class="deco"><a class="orange" href="../connexion/index.php?ajax=1">Connexion</a></li>
	<li class="co"><a class="orange" href="../connexion/deconnexion.php">Deconnexion</a></li>

        
        <li>
        	<?php
				if ($id>0) 
{
	echo '<span id="coOuPas"></span>';
}
if ($id == 0) 
{
	echo '<span id="coOuPas">Pas connecté poulet</span>';
}
			?>
        </li>  
    </ul>


</div>
<script>
	$(document).ready(function(e) {
        $('.nav a').hover(function() {
    $( this ).addClass( "animated bounceIn" );
  }, function() {
    $( this ).removeClass( "animated bounceIn" );
  })
    });
</script>