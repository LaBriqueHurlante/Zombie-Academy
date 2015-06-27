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
<img src="../site_web/css/media/img/recompenses/BadgeA2_active.png" />
<h1>Premier quiz</h1>
<p>Bravo, tu as gagné ce badge en répondant à ton premier Quiz!</p>
<p>Si tu continues de travailler dur, tu pourras obtenir d'autres badges... et même une gourmette plaquée or! </p>
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