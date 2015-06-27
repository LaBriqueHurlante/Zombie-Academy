<?php
include_once 'includes/connexBDD.php';
if(isset($_GET['motclef'])){
    $motclef = $_GET['motclef'];
    $q = array('motclef'=>$motclef. '%');
    $sql = 'SELECT * FROM creations WHERE titre like :motclef or contenu like :motclef or auteur like :motclef';
    $req = $db->prepare($sql);
    $req->execute($q);
    $count = $req->rowCount($sql);
    $repertoire = "../../css/media/img/imgAvatar/";

    if($count){
        while ($result = $req->fetch(PDO::FETCH_OBJ)){
            echo " Titre : <b>".$result->titre."</b><br/>Message:".$result->contenu.":".$result->lien. "<br/><br/>";
        }
    }else{
         echo "Aucun resultat pour :".$motclef;
    }
}


?>