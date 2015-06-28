<div id="menuUti">

	<ul class="nav">
    	
    	
 
  	<li id="cerveauDeco" class="cerveau-avatar deco"><img src="css/media/img/cerveauAvatar.png" /></li>
    <li id="cerveauCo" ><a class="survol8 cerveau-avatar co" href="../pages/chambre.php" style="margin-top: 6px;display: block;"><img src="css/media/img/recompenses/Cerveauactif.png" /></a></li>
	<li class="deco"><a class="survol7 rouge" href="../inscription/inscription.php">Inscription</a></li>
    <li class="deco"><a class="survol7 orange" href="../connexion/index.php?ajax=1">Connexion</a></li>
	<li class="co"><a class="survol7 orange" href="../connexion/deconnexion.php">Déconnexion</a></li>

        
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
