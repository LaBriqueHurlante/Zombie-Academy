
<!--<nav id="nav1" class="nav" style="display:block;">
	<ul class="menu">
    	<li><a class="rouge" href="cours.php">Cours</a></li>
        <li><a class="orange" href="quiz.php">Quiz</a></li>
        <li><a class="bleu" href="wikiotheque.php">Wikiothèque</a></li>
        <li class="logo"></li>
        <li><a class="vert" href="ateliers.php">Ateliers de création</a></li>
        <li><a class="rose" href="gazette.php">La Gazette</a></li>
        <li><a class="violet" href="">Inscription</a></li>
    </ul>
</nav>-->

<div id="menu2" class="nav">
<nav>
	<ul class="menu">
    	<li class="logo"></li>
       <!-- <li><a class="violet" href="../connexion/index2.php">Inscription</a></li>-->
    	<li><a class="rouge" href="cours.php"><img src="../site_web/css/media/img/Books_stack_of_three_64.png"/>Cours</a></li>
        <li><a class="orange" href="quiz.php"><img src="../site_web/css/media/img/Signing_the_contract_64.png"/>Quiz</a></li>
        <li><a class="bleu" href="wikiotheque.php"><img src="../site_web/css/media/img/Grid_world_64.png"/>Wikiothèque</a></li>
        <li><a class="jaune" href="ateliers.php"><img src="../site_web/css/media/img/Lightbulb_idea_64.png"/>Les Ateliers</a></li>
        <li><a class="rose" href="gazette.php"><img src="../site_web/css/media/img/World_64.png"/>La Gazette</a></li>      
    </ul>
</nav>
</div>
<script>
	$(document).ready(function(e) {
        $('.nav a').hover(function() {
    $( this ).addClass( "animated bounceIn" );
  }, function() {
    $( this ).removeClass( "animated bounceIn" );
  })
    });
</script>