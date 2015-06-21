<div id="menuUti">

	<ul class="nav">
    	
    	
<?php if ($id == 0) 
{   echo '<li class="cerveau-avatar"><img src="css/media/img/imgAvatar/cerveauAvatar.png" /></li>';
	echo '<li><a class="rouge" href="../inscription/inscription.php">Inscription</a></li>';
    echo '<li><a class="orange" href="../connexion/index.php">Connexion</a></li>';

}else{
	echo '<li class="cerveau-avatar"><a href="../pages/chambre.php"><img src="css/media/img/imgAvatar/cerveauAvatar.png" /></a></li>';
	echo '<li><a class="orange" href="../connexion/deconnexion.php">Deconnexion</a></li>';
}

?>
        
        <li>
        	<?php
				if ($id>0) 
{
	echo '<span id="coOuPas">Bonjour ' . $_SESSION['pseudo'] . '</span>';
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