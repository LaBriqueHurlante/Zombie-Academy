<?php
session_start();
// stockage des données de sessions.
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

?>
    <section id="add-fan">
        <h1> Ajout : </h1>
        <!-- formulaire -->
        <form id="insertionfan" onsubmit="return false;" enctype="multipart/form-data">
          <p>
            <label for="titre">Titre :</label>
            <input type="text" placeholder="Entrez un titre" id="titre" name="titre" required/> 
            <br><br>

            <label for="auteur">Auteur :</label>
            <input type="text" placeholder="Entrez un titre" id="auteur" name="auteur" required/> 
            <br><br>

             <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
            Fichier : <input type="file" name="avatar" id="avatar">

            Genre:
            <SELECT name="genre" id="genre" size="1">
            <OPTION>Fan fiction
            <OPTION selected> Fan art
            <OPTION>Zombie exquis
            </SELECT>
            <br><br>     


            <label for="contenu">Contenu :</label>
            <input type="text" style="width:500px; height:200px;" placeholder="Entrez votre contenu" id="contenu" name="contenu" required/> 
            <br><br>
            <br><br>

            <br><br>
            <input type="submit" value="Ajouter" />
          </p>
        </form>
    </section>
