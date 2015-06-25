
<div id="tabs" class="tabs_orange">
  <ul>
    <li><a href="#tabs-1" class="tabulous_a" title="">Quiz!</a></li>
    <li><a href="#tabs-2" class="tabulous_a" title="">Chercher un quiz</a></li>
    <li>
      <button id="but_cancel"><img src="css/media/img/wrong.png" /></button>
    </li>
  </ul>
  <div id="tabs_container">
    <div id="tabs-1" class="tabs_orange nav">
      
      <h1>Quiz du jour</h1>
      <span id="testH1">Go</span>
      <script>
	  $("#testH1").click(function(){
	  $("#tabs_contenu").hide();
	  $("#tabs_contenu").load("../site_web/core/quizz/quiz7.html").fadeIn("fast");
	  })
      </script>
      
      <section id="tabs_contenu">go</section>
    <div id="tabs-2" class="tabs_orange"> </div>
  </div>
  <!--End tabs container--> 
</div>
<!--End tabs--> 
<script>
	

$(document).ready(function() {
	
$( "#but_cancel" ).click(function( event ) {
  event.preventDefault();
  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
});
})
</script> 
