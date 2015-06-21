<div id="menuUti">

	<ul class="nav">
    	<li class="cerveau-avatar"></li>
    	<li><a class="rouge" href="../inscription/inscription.php">Inscription</a></li>
        <li><a class="orange" href="../connexion/index.php">Connexion</a></li>    
    </ul>


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