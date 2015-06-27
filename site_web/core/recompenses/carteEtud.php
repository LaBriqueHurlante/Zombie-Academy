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
<img src="../site_web/css/media/img/recompenses/BadgeA1_active.png" />
<h1>Carte étudiant</h1>
<p>Bienvenue!</p>
<p>Cette carte prouve à la face du monde dévasté que tu es officiellement un étudiant de la prestigieuse Zombie Academy.</p>
<p>Non échangeable, non remboursable.</p>
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