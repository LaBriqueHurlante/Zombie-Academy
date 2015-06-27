<div id="menuUti">

	<ul class="nav">
    	
    	
 
  	<li id="cerveauDeco" class="cerveau-avatar deco"><img src="css/media/img/imgAvatar/cerveauAvatar.png" /></li>
    <li id="cerveauCo" class="survol7 cerveau-avatar co"><a href="../pages/chambre.php"><img src="css/media/img/imgAvatar/cerveauAvatar.png" /></a></li>
	<li class="deco"><a class="survol8 rouge" href="../inscription/inscription.php">Inscription</a></li>
    <li class="deco"><a class="survol8 orange" href="../connexion/index.php?ajax=1">Connexion</a></li>
	<li class="co"><a class="survol8 orange" href="../connexion/deconnexion.php">Déconnexion</a></li>

        
        <li>
        	<?php
				if ($id>0) 
{
	echo '<span id="coOuPas"></span>';
}
if ($id == 0) 
{
	echo '<span id="coOuPas">Non connecté</span>';
}
			?>
        </li>  
    </ul>


</div>
