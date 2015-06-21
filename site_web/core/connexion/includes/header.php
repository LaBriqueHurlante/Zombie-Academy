<?php
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

//Si le titre est indiqué, on l'affiche entre les balises <title>
echo (!empty($titre))?'<title>'.$titre.'</title>':'<title> Forum </title>';
?>
