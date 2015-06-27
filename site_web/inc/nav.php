<div id="menu2" class="nav">
<nav>
	<ul class="menu">
    	<li class="logo"></li>
       <!-- <li><a class="violet" href="../connexion/index2.php">Inscription</a></li>-->
    	<li><a class="survol1 rouge" href="cours.php"><img src="../site_web/css/media/img/Books_stack_of_three_64R.png"/>Salle de Cours</a></li>
        <li><a class="survol2 orange" href="quiz.php"><img src="../site_web/css/media/img/Signing_the_contract_64O.png"/>Salle d'Exam'</a></li>
        <li><a class="survol3 bleu" href="wikiotheque.php"><img src="../site_web/css/media/img/Grid_world_64b.png"/>Wikiothèque</a></li>
        <li><a class="survol4 jaune" href="ateliers.php"><img src="../site_web/css/media/img/Lightbulb_idea_64j.png"/>Ateliers Créatifs</a></li>
        <li><a class="survol5 rose" href="gazette.php"><img src="../site_web/css/media/img/World_64r.png"/>La Gazette</a></li>
        <li><a class="survol6 marron" ><img src="../site_web/css/media/img/coffee.png"/>La Cafèt'</a></li>  
    </ul>
</nav>
</div>
<script>
	$(document).ready(function(e) {
        $('#menu2 a,#menuUti a').hover(function() {
    $( this ).addClass( "animated bounceIn" );
  }, function() {
    $( this ).removeClass( "animated bounceIn" );
  })
    });
</script>