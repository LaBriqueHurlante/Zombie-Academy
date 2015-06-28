<?php
include_once 'includes/connexBDD.php';
if(isset($_GET['motclef'])){
    $motclef = $_GET['motclef'];
    $q = array('motclef'=>$motclef. '%');
    $sql = 'SELECT * FROM cours WHERE titre like :motclef or contenu like :motclef';
    $req = $db->prepare($sql);
    $req->execute($q);
    $count = $req->rowCount($sql);

    if($count){
        while ($result = $req->fetch(PDO::FETCH_OBJ)){
            echo "
			
				<section id='quiz_search_result'>
          	 <span style='color:#F34336;'> Titre du cours </span> " .$result->titre."<br/>
          	 <span style='color:#F34336;'> Genre </span> " .$result->genre."<br/>
        	<span style='color:#F34336;'> Message: </span> " .$result->contenu."<br/><br/>
           <div class='bouton'> <a href='#'>Voir le cours</a> </div>
		   </section>";
        }
    }else{
         echo "Aucun resultat pour :".$motclef;
    }
}

?>
<style>
#quiz_search_result .bouton a {
  display: block;
  width: 150px;
  color: white;
  text-decoration: none;
  margin: 5px 1px 1px auto;
  padding: 15px;
  background-color: #F34235;
}
.bouton a:hover {
	opacity:0.5;
	transition:color linear 0.1s;
}
#quiz_search_result a
{
color:white;
}
#quiz_search_result span {
  text-transform: uppercase;
  padding: 5px;
  width: 150px;
}
#quiz_search_result {
  width: 50%;
  margin: 20px auto;
  background-color: #191919;
  text-align: left;
  padding: 10px;
  box-sizing: border-box;
  color: #ccc;
}
</style>