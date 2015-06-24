

<div id="mousemark" style="z-index:4;"></div>



<div id="container" class="container">
  <ul id="scene" class="scene nav">

<!-- START SURVOL -->


	<!-- Triggers des batiments -->

	<li class="layer m_layer" data-depth="2.00" style="z-index:100;">
      <div class="m_scroll scrollTo1"/>
      
    <li class="layer m_layer" data-depth="2.00" style="z-index:100;">
      <div class="m_scroll scrollTo2"/>

    <li class="layer m_layer" data-depth="2.00" style="z-index:100;">
      <div class="m_scroll scrollTo3"/>

    <li class="layer m_layer" data-depth="2.00" style="z-index:100;">
      <div class="m_scroll scrollTo4"/>

    <li class="layer m_layer" data-depth="2.00" style="z-index:100;">
      <div class="m_scroll scrollTo5"/>

    <li class="layer m_layer" data-depth="2.00" style="z-index:100;">
      <div class="m_scroll scrollTo6"/>

    <li class="layer m_layer" data-depth="2.00" style="z-index:100;">
      <div class="m_scroll scrollTo7"/>

    <li class="layer m_layer" data-depth="2.00" style="z-index:100;">
      <div class="m_scroll scrollTo8"/>



	<!-- Icones -->
	<li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="icon-cours map-icones"/>
	
    <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="icon-quiz map-icones"/>

	 <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="icon-wiki map-icones"/>
      
      <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="icon-ateliers map-icones"/>
      
      <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="icon-gazette map-icones"/>
      
      <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="icon-cafette map-icones"/>
      
      <li class="layer" data-depth="2.00" style="z-index:99;">
      <div class="icon-dortoir map-icones"/>
      
      
	<!-- Batiments -->
	
	<li class="layer" data-depth="2.00" style="z-index:2;">
      <div class="survol-fond map_layer"/>

    <li class="layer" data-depth="2.00" style="z-index:2;">
      <div class="survol-cours map_layer"/>
      
    <li class="layer" data-depth="2.00" style="z-index:2;">
      <div class="survol-quiz map_layer" />
      
    <li class="layer" data-depth="2.00" style="z-index:2;">
      <div class="survol-wiki map_layer" />

    <li class="layer" data-depth="2.00" style="z-index:2;">
      <div class="survol-ateliers map_layer" />
    
    <li class="layer" data-depth="2.00" style="z-index:2;">
      <div class="survol-gazette map_layer" />
      
    <li class="layer" data-depth="2.00" style="z-index:2;">
      <div class="survol-dortoir map_layer" />
      
    <li class="layer" data-depth="2.00" style="z-index:2;">
      <div class="survol-inscription map_layer" />
    
      <li class="layer" data-depth="2.00" style="z-index:2;">
      <div class="survol-cafette map_layer" />
<!-- END SURVOL -->
    
    <li class="layer" data-depth="2.00" style="z-index:1;">
      <div class="secondplan" />


      <li class="layer" data-depth="0.00" style="z-index:98;">
        <div class="firstplan" />
      </li>
  </ul>
</div>

<script>
$('.map_layer').hide();
$(document).ready(function(e) {

// Apparition des batiments au survol, au cas pas cas, puisque je ne sais pas encore optimiser mes codes...


//TRIGGERS sur la carte
$('.scrollTo1').hover(
	function(){
	$('.survol-cours').fadeIn()
	},
	function(){
		$(".survol-cours").fadeOut()
	});
$('.scrollTo2').hover(
	function(){
	$('.survol-quiz').fadeIn()
	},
	function(){
		$(".survol-quiz").fadeOut()
	});
$('.scrollTo3').hover(
	function(){
	$('.survol-wiki').fadeIn()
	},
	function(){
		$(".survol-wiki").fadeOut()
	});
$('.scrollTo4').hover(
	function(){
	$('.survol-ateliers').fadeIn()
	},
	function(){
		$(".survol-ateliers").fadeOut()
	});
$('.scrollTo5').hover(
	function(){
	$('.survol-gazette').fadeIn()
	},
	function(){
		$(".survol-gazette").fadeOut()
	});
$('.scrollTo6').hover(
	function(){
	$('.survol-dortoir').fadeIn()
	},
	function(){
		$(".survol-dortoir").fadeOut()
	});
$('.scrollTo7').hover(
	function(){
	$('.survol-inscription').fadeIn()
	},
	function(){
		$(".survol-inscription").fadeOut()
	});
$('.scrollTo8').hover(
	function(){
	$('.survol-cafette').fadeIn()
	},
	function(){
		$(".survol-cafette").fadeOut()
	});



// MENU
//cours	
    $('.survol1').hover(function() {
		$('.map-icones,.survol-cours').hide();
      	$(".secondplan").animate({
		  	'left': '-30%',
  			'top': '-70%'
		  },'fast',function(){
			  $('.survol-cours,.map-icones').css({
				  'left': '-30%',
  					'top': '-70%'
				  }).fadeIn(function(){
					 $('.map-icones').fadeIn(); 		
					  })
			  })
	},
	function(){
		$(".survol-cours,.map-icones").hide()
		$(".secondplan").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){	
		  	$('.survol-cours,.map-icones').css({
				  'left': '-40%',
  					'top': '-40%'
				  })
					 $('.map-icones').fadeIn(); 		 
		  })
				
		});

//quiz		
    $('.survol2').hover(function() {
		$('.map-icones,.survol-quiz').hide();
      	$(".secondplan").animate({
		  	'left': '-60%',
  			'top': '-60%'
		  },'fast',function(){
			  $('.survol-quiz,.map-icones').css({
				  'left': '-60%',
  					'top': '-60%'
				  }).fadeIn(function(){
					 $('.map-icones').fadeIn(); 		
					  })
			  })
	},
	function(){
		$(".survol-quiz,.map-icones").hide()
		$(".secondplan").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){	
		  	$('.survol-quiz,.map-icones').css({
				  'left': '-40%',
  					'top': '-40%'
				  })
					 $('.map-icones').fadeIn(); 		 
		  })
				
		});

//wiki		
    $('.survol3').hover(function() {
		$('.map-icones,.survol-wiki').hide();
      	$(".secondplan").animate({
		  	'left': '-50%',
  			'top': '-50%'
		  },'fast',function(){
			  $('.survol-wiki,.map-icones').css({
				  'left': '-50%',
  					'top': '-50%'
				  }).fadeIn(function(){
					 $('.map-icones').fadeIn(); 		
					  })
			  })
	},
	function(){
		$(".survol-wiki,.map-icones").hide()
		$(".secondplan").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){	
		  	$('.survol-wiki,.map-icones').css({
				  'left': '-40%',
  					'top': '-40%'
				  })
					 $('.map-icones').fadeIn(); 		 
		  })
				
		});


//ateliers		
    $('.survol4').hover(function() {
		$('.map-icones,.survol-ateliers').hide();
      	$(".secondplan").animate({
		  	'left': '-50%',
  			'top': '-10%'
		  },'fast',function(){
			  $('.survol-ateliers,.map-icones').css({
				  'left': '-50%',
  					'top': '-10%'
				  }).fadeIn(function(){
					 $('.map-icones').fadeIn(); 		
					  })
			  })
	},
	function(){
		$(".survol-ateliers,.map-icones").hide()
		$(".secondplan").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){	
		  	$('.survol-ateliers,.map-icones').css({
				  'left': '-40%',
  					'top': '-40%'
				  })
					 $('.map-icones').fadeIn(); 		 
		  })
				
		});

//gazette		
    $('.survol5').hover(function() {
		$('.map-icones,.survol-gazette').hide();
      	$(".secondplan").animate({
		  	'left': '-70%',
  			'top': '-60%'
		  },'fast',function(){
			  $('.survol-gazette,.map-icones').css({
				  'left': '-70%',
  					'top': '-60%'
				  }).fadeIn(function(){
					 $('.map-icones').fadeIn(); 		
					  })
			  })
	},
	function(){
		$(".survol-gazette,.map-icones").hide()
		$(".secondplan").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){	
		  	$('.survol-gazette,.map-icones').css({
				  'left': '-40%',
  					'top': '-40%'
				  })
					 $('.map-icones').fadeIn(); 		 
		  })
				
		});

//cafette		
	$('.survol6').hover(function() {
		$('.map-icones,.survol-cafette').hide();
      	$(".secondplan").animate({
		  	'left': '-60%',
  			'top': '-20%'
		  },'fast',function(){
			  $('.survol-cafette,.map-icones').css({
				  'left': '-60%',
  					'top': '-20%'
				  }).fadeIn(function(){
					 $('.map-icones').fadeIn(); 		
					  })
			  })
	},
	function(){
		$(".survol-cafette,.map-icones").hide()
		$(".secondplan").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){	
		  	$('.survol-cafette,.map-icones').css({
				  'left': '-40%',
  					'top': '-40%'
				  })
					 $('.map-icones').fadeIn(); 		 
		  })
				
		});


//dortoir		
	$('.survol7').hover(function() {
		$('.map-icones,.survol-dortoir').hide();
      	$(".secondplan").animate({
		  	'left': '-10%',
  			'top': '0%'
		  },'fast',function(){
			  $('.survol-dortoir,.map-icones').css({
				  'left': '-10%',
  					'top': '0%'
				  }).fadeIn(function(){
					 $('.map-icones').fadeIn(); 		
					  })
			  })
	},
	function(){
		$(".survol-dortoir,.map-icones").hide()
		$(".secondplan").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){	
		  	$('.survol-dortoir,.map-icones').css({
				  'left': '-40%',
  					'top': '-40%'
				  })
					 $('.map-icones').fadeIn(); 		 
		  })
				
		});
});			
</script>