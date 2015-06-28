<style>
/*.element-item { width: 25%; }
.element-item--width2 { width: 50%; }*/


.grid {
	height: 500px;
	width: 850px;
	margin: 0 auto;
}

.grid .element-item { overflow: hidden; }

.element-item img { width: 100%; }

.filter-button-group button {
	display: inline-block;
	padding: 10px 18px;
	margin-bottom: 10px;
	background: #EEE;
	border: none;
	border-radius: 7px;
	background-image: linear-gradient( to bottom, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0.2) );
	color: #222;
	font-family: sans-serif;
	font-size: 16px;
	text-shadow: 0 1px white;
	cursor: pointer;
}

.element-item {
	float: left;
	width: 150px;
	height: 150px;
	margin: 10px;
}

.grid:after {
	content: '';
	display: block;
	clear: both;
}

.element-item > * {
	margin: 0;
	padding: 0;
}
</style>
<div id="tabs" class="tabs_bleu">
<ul>
  <li><a href="#tabs-1" class="tabulous_a" title="">Wikiothèque</a></li>
  <li><a href="#tabs-2" class="tabulous_a" title="">Recherche</a></li>
  <li>
    <button id="but_cancel"><img src="css/media/img/wrong.png" /></button>
  </li>
</ul>
<div id="tabs_container">
  <div id="tabs-1" class="tabs_bleu"> 
    <!--isotope-->
    <div class="button-group filter-button-group">
      <button data-filter="*">Tout voir</button>
      <button data-filter=".comics">Comics</button>
      <button data-filter=".films">Films</button>
      <button data-filter=".livres">Livres</button>
      <button data-filter=".series">Séries</button>
      <button data-filter=".jeux">Jeux</button>
    </div>
    <div class="grid">
      <div class="element-item comics"><img src="../site_web/css/media/img/isotope/comics_Walking_Dead.jpg" /></div>
      <div class="element-item films"><img src="../site_web/css/media/img/isotope/film_World_War_Z.jpg" /></div>
      <div class="element-item films"><img src="../site_web/css/media/img/isotope/film_Zombeavers.jpg" /></div>
      <div class="element-item films"><img src="../site_web/css/media/img/isotope/film_Zombie.jpg" /></div>
      <div class="element-item films jeux"><img src="../site_web/css/media/img/isotope/Jeu+film_Resident_Evil.jpg" /></div>
      <div class="element-item jeux"><img src="../site_web/css/media/img/isotope/Jeu_Left_4_Dead_2.jpg" /></div>
      <div class="element-item jeux"><img src="../site_web/css/media/img/isotope/Jeu_The_Last_of_Us.jpg" /></div>
      <div class="element-item livres"><img src="../site_web/css/media/img/isotope/livre_Apocalypse_Zombie.jpg" /></div>
      <div class="element-item series"><img src="../site_web/css/media/img/isotope/serie_The_Walking_Dead.jpg" /></div>
      <div class="element-item series"><img src="../site_web/css/media/img/isotope/serie_znation.jpg" /></div>
    </div>
    </div>
    <div id="tabs-2" class="tabs_bleu">
      <aside class="search">
        <h2>Recherche</h2>
        <input type="text" name="recherche" class="film_recherche text" id="recherche"/>
      </aside>
    </div>
  </div>
  <!--End tabs container--> 
  
</div>
<!--End tabs--> 
<script>

$(document).ready(function() {

//isotope	
$('.grid').isotope({
  // options
  itemSelector: '.element-item',
  layoutMode: 'masonry'
  
});
// filter items on button click
var $container = $('.grid');
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $container.isotope({ filter: filterValue });
});	

//bouton cancel	
$( "#but_cancel" ).click(function( event ) {
  event.preventDefault();
  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
});
})
</script> 
