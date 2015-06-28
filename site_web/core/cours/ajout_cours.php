<?php
//actuel
session_start();
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
if ($id>0) 
{
    echo $_SESSION['pseudo'];
    echo '    -     ';
}
require "includes/connexBDD.php"; 
// récupération des variables du formulaire.
$titre = $_POST["titre"] ;
$genre = $_POST["genre"] ;
$tag1 = $_POST["tag1"] ;
$tag2 = $_POST["tag2"] ;
$tag3 = $_POST["tag3"] ;
$contenu = $_POST["contenu"] ;

                                       //Début des vérifications de sécurité..
$req = $db->prepare("INSERT INTO cours (titre, genre, tag1, tag2, tag3, contenu ) 
                     VALUES( '$titre','$genre','$tag1','$tag2','$tag3','$contenu' )");
$req->execute();  
$donnees = $req->fetch();

  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($req)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>