

<div id="mousemark" style="z-index:4;"></div>



<div id="container" class="container">
  <ul id="scene" class="scene nav">

<!-- START SURVOL -->


	<!-- Triggers des batiments -->

	<li class="layer m_layer" data-depth="2.00" style="z-index:101;">
      <a href="cours.php" class="m_scroll scrollTo1"></a>
      
    <li class="layer m_layer" data-depth="2.00" style="z-index:101;">
      <a href="quiz.php" class="m_scroll scrollTo2"></a>

    <li class="layer m_layer" data-depth="2.00" style="z-index:101;">
      <a href="wikiotheque.php" class="m_scroll scrollTo3"></a>

    <li class="layer m_layer" data-depth="2.00" style="z-index:101;">
      <a href="ateliers.php" class="m_scroll scrollTo4"></a>

    <li class="layer m_layer" data-depth="2.00" style="z-index:101;">
      <a href="gazette.php" class="m_scroll scrollTo5"></a>

    <li class="layer m_layer" data-depth="2.00" style="z-index:101;">
      <a href="../connexion/index.php?ajax=1.php" class="m_scroll scrollTo7"></a>

    <li class="layer m_layer" data-depth="2.00" style="z-index:101;">
      <a href="../pages/chambre.php" class="m_scroll scrollTo6"></a>

    <li class="layer m_layer" data-depth="2.00" style="z-index:101;">
      <div class="m_scroll scrollTo8"/>



	<!-- Icones -->
	<li class="layer" data-depth="2.00" style="z-index:100;">
      <div class="icon-cours map-icones"/>
	
    <li class="layer" data-depth="2.00" style="z-index:100;">
      <div class="icon-quiz map-icones"/>

	 <li class="layer" data-depth="2.00" style="z-index:100;">
      <div class="icon-wiki map-icones"/>
      
      <li class="layer" data-depth="2.00" style="z-index:100;">
      <div class="icon-ateliers map-icones"/>
      
      <li class="layer" data-depth="2.00" style="z-index:100;">
      <div class="icon-gazette map-icones"/>
      
      <li class="layer" data-depth="2.00" style="z-index:100;">
      <div class="icon-cafette map-icones"/>
      
      <li class="layer" data-depth="2.00" style="z-index:100;">
      <div class="icon-dortoir map-icones"/>
      
      <li class="layer" data-depth="2.00" style="z-index:100;">
      <div class="icon-inscription map-icones"/>
      
	<!-- Batiments -->
	
    <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="survol-cours map_layer"/>
      
    <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="survol-quiz map_layer" />
      
    <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="survol-wiki map_layer" />

    <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="survol-ateliers map_layer" />
    
    <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="survol-gazette map_layer" />
      
    <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="survol-dortoir map_layer" />
      
    <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="survol-inscription map_layer" />
    
      <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="survol-cafette map_layer" />
<!-- END SURVOL -->
    
    <li class="layer" data-depth="2.00" style="z-index:1;">
      <div class="secondplan" />


      <li class="layer" data-depth="0.00" style="z-index:98;">
        <div class="firstplan" />
      </li>
  </ul>
</div>
<div id="overlay_map"></div>

<script>
$('.map_layer, #overlay_map').hide();
$(document).ready(function(e) {

// Apparition des batiments au survol, au cas pas cas, puisque je ne sais pas encore optimiser mes codes...
//TRIGGERS sur la carte
$('.scrollTo1,.survol1').hover(
	function(){
	$('.survol-cours').fadeIn()
	},
	function(){
		$(".survol-cours").fadeOut()
	});
$('.scrollTo2,.survol2').hover(
	function(){
	$('.survol-quiz').fadeIn()
	},
	function(){
		$(".survol-quiz").fadeOut()
	});
$('.scrollTo3,.survol3').hover(
	function(){
	$('.survol-wiki').fadeIn()
	},
	function(){
		$(".survol-wiki").fadeOut()
	});
$('.scrollTo4,.survol4').hover(
	function(){
	$('.survol-ateliers').fadeIn()
	},
	function(){
		$(".survol-ateliers").fadeOut()
	});
$('.scrollTo5,.survol5').hover(
	function(){
	$('.survol-gazette').fadeIn()
	},
	function(){
		$(".survol-gazette").fadeOut()
	});
$('.scrollTo6,.survol8').hover(
	function(){
	$('.survol-dortoir').fadeIn()
	},
	function(){
		$(".survol-dortoir").fadeOut()
	});
$('.scrollTo7,.survol7').hover(
	function(){
	$('.survol-inscription').fadeIn()
	},
	function(){
		$(".survol-inscription").fadeOut()
	});
$('.scrollTo8,.survol6').hover(
	function(){
	$('.survol-cafette').fadeIn()
	},
	function(){
		$(".survol-cafette").fadeOut()
	});
});			
</script>