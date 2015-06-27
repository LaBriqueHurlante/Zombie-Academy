<style>
/*.element-item { width: 25%; }
.element-item--width2 { width: 50%; }*/
.grid {

  height:500px;
  width:800px;
  margin: 0 auto;
}
.filter-button-group button{
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
.element-item  {
float: left;
  width: 184px;
  height: 184px;
  border: 2px solid #333;
  border-color: hsla(0, 0%, 0%, 0.7);
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
			<li><a href="#tabs-1" class="tabulous_a" title="">Wikiothèque!</a></li>
			<li><a href="#tabs-2" class="tabulous_a" title="">Tab 2</a></li>
			<li><button id="but_cancel"><img src="css/media/img/wrong.png" /></button></li>
		</ul>

		<div id="tabs_container">
			

			<div id="tabs-1" class="tabs_bleu">
                <!--isotope-->	
                <div class="button-group filter-button-group">
  <button data-filter="*">show all</button>
  <button data-filter=".metal">metal</button>
  <button data-filter=".transition">transition</button>
  <button data-filter=".alkali, .alkaline-earth">alkali & alkaline-earth</button>
  <button data-filter=":not(.transition)">not transition</button>
  <button data-filter=".metal:not(.transition)">metal but not transition</button>
</div>
                
                			
                 <div class="grid">
  <div class="element-item transition metal"><img src="../site_web/css/media/img/isotope/1.jpg" /></div>
  <div class="element-item post-transition metal"><img src="../site_web/css/media/img/isotope/2.jpg" /></div>
  <div class="element-item alkali metal"><img src="../site_web/css/media/img/isotope/3.jpg" /></div>
  <div class="element-item transition metal"><img src="../site_web/css/media/img/isotope/4.jpg" /></div>
  <div class="element-item lanthanoid metal inner-transition"><img src="../site_web/css/media/img/isotope/5.jpg" /></div>
  <div class="element-item halogen nonmetal"><img src="../site_web/css/media/img/isotope/6.jpg" /></div>
  <div class="element-item alkaline-earth metal"><img src="../site_web/css/media/img/isotope/1.jpg" /></div>

</div>

			<div id="tabs-2" class="tabs_bleu">
				   Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.
		
			</div>

		</div><!--End tabs container-->
		
	</div><!--End tabs-->
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
