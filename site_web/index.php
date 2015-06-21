<?php
//Cette fonction doit être appelée avant tout code html
session_start();
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
include("core/connexion/includes/connexBDD.php");
//On inclue les 2 pages restantes
include("core/connexion/includes/functions.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zombie Academy</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/menuUti.css" rel="stylesheet" type="text/css">
<link href="css/tabulous.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">

<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/tabulous/tabulous.min.js"></script>
<script src="js/jquery.animate-shadow.js"></script>


</head>

<body>
<section id="page">
<?php

include_once ("inc/header.php");
include_once ("inc/map.php");
include_once ("core/menuUtilisateur.php");
?>
<div id="vignette" style="display:none;">
<?php

$d="core/pages/";
if(isset($_GET['p'])){
	$p=strtolower($_GET['p']);
	if(preg_match("/^[a-z0-9\-]+$/",$p) && file_exists($d.$p.".php")){
		include $d.$p.".php";
	}
	else{
		include $d."404.php";
	}
}
else{

}

?>

 </div><!--Vignette tabs-->
 <?php
include_once ("inc/footer.php");

?>
</section>
<script src="js/navigation.js"></script>
<script src="js/map.js"></script>

</body>
</html>