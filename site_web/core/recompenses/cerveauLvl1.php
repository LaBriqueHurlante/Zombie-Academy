<style>
button#popup_but_cancel {
  background: none;
  border: none;
  display: block;
  margin: 30px auto auto;
  opacity: 0.1;
}
button#popup_but_cancel:hover {
  opacity: 1;
  transition: all linear 0.2s;
}
</style>

<section class="recomp_popup">
<img src="../site_web/css/media/img/recompenses/Cerveauactif.png" />
<h1>Cerveau moisi</h1>
<p>C'est l'état de ton cerveau au moment de ton arrivée. On ne voit pas vraiment la différence avec celui d'un Zombie...</p>
<p>Il te faudra en prendre soin si tu veux décrocher ton diplôme!</p>
<button id="popup_but_cancel"><img src="css/media/img/wrong.png" /></button>
</section>

<script>
	$(document).ready(function() {
	
$( "#popup_but_cancel" ).click(function( event ) {
  event.preventDefault();
  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
});
})
</script>