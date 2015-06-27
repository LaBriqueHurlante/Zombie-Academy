<style>
aside#recomp_cont {
	position: absolute;
	bottom: 0;
	text-align: right;
	right: 0;
}

.recomp_succes {
	width: 200px;
	height: 110px;
	background: #191919;
	z-index: 1111111;
	position: relative;
	vertical-align: bottom;
	border-radius: 5px 5px 0 0;
	box-shadow: #000 0px 1px 10px 1px inset;
	display: inline-block;
	outline: none;
	text-decoration: none;
	margin-right: 50px;
}
.recomp_succes a {text-decoration:none;}
.recomp_succes img { max-height: 65px; }

.recomp_succes h2 {
	font-family: goth;
	color: #DBDBDB;
	text-transform: uppercase;
	padding: 5px 0;
}

.recomp_close {
  width: 20px;
  top: 80px;
  left: 10px;
  position: absolute;
  cursor: pointer;
  opacity: 0.1;
}

a#carteEtud, a#cerveauLvl1, a#premierQuiz  {
	width: 200px;
	height: 110px;
	display: block;
}

.recomp_popup img {
  width: 100%;
  max-width: 330px;
}

section.recomp_popup {
	background-color: #191919;
	width: 40%;
	margin: 0 auto;
	border-radius: 640px 640px 9px 9px;
	padding: 40px;
	box-sizing: border-box;
	position: relative;
	z-index: 10;
	box-shadow: 0px 9px 13px 0px rgba(0, 0, 0, 0.8);
	cursor: default;
}

.recomp_popup p {
	font-family: goth;
	font-size: 20px;
	color: #ccc;
	padding: 5px;
}

.recomp_popup h1 {
	color: #FBF557;
	padding: 10px;
}

.recomp_popup a { outline: none; }
.recomp_popup a:focus { outline: none; }
</style>

<aside id="recomp_cont" class="nav">

  
    
 <div id="recomp_cont2" class="recomp_succes"> <a href="../recompenses/cerveauLvl1.php" id="cerveauLvl1">
    <h2>cerveau moisi</h2>
    <img src="../site_web/css/media/img/recompenses/Cerveauactif.png" /></a></div>
    
  <div id="recomp_cont1" class="recomp_succes"> <a href="../recompenses/carteEtud.php" id="carteEtud">
    <h2>carte etudiant</h2>
    <img src="../site_web/css/media/img/recompenses/BadgeA1_active.png" /> </a> </div>
    
  <div id="recomp_cont3" class="recomp_succes"> <a href="../recompenses/premierQuiz.php" id="premierQuiz">
    <h2>premier quiz</h2>
    <img src="../site_web/css/media/img/recompenses/BadgeA2_active.png" /></a></div>
    
</aside>
<script>

$(".recomp_succes").hide();

$(document).ready(function(e) {
	
//apparition du succes1 au click
$("#test_recompenses").click(function(){
	$(".recomp_succes").show("slide", { direction: "down" }, "fast");
	})	
	
	$("#recomp_cont1 a").click(function(){
		$("#recomp_cont1").delay(1000).hide("slide", { direction: "down" }, "fast");
	})
	
	$("#recomp_cont2 a").click(function(){
		$("#recomp_cont2").delay(1000).hide("slide", { direction: "down" }, "fast");
	})
	
	$("#recomp_cont3 a").click(function(){
		$("#recomp_cont3").delay(1000).hide("slide", { direction: "down" }, "fast");
	})
	
});
</script>