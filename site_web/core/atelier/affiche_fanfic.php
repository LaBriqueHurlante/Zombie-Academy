<?php
session_start();

include("includes/connexBDD.php");


$req = $db->prepare("SELECT * FROM creations WHERE genre = 'Fan fiction'");
$req->execute();	
$donnees = $req->fetch();
?>

<div id='fan-fiction'>
		<?php 
		echo $donnees['titre'];
		echo " par : ";
		echo $donnees['auteur'];
		echo "<br><br>";
		echo $donnees['contenu'];
		 ?>
</div>
<style>
</style>
