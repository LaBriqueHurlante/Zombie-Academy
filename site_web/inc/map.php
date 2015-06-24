

<div id="mousemark" style="z-index:4;"></div>



<div id="container" class="container">
  <ul id="scene" class="scene">

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


      <li class="layer" data-depth="0.00" style="z-index:99;">
        <div class="firstplan" />
      </li>
  </ul>
</div>

<script>
$('.map_layer').hide();
$(document).ready(function(e) {
// fond blanc transparent au survol des liens du menu	
	/*$('nav a').hover(function(){
		$(".survol-fond").fadeIn().animate({
		  'background-color':'rgba(0, 0, 0, 0.4)'
		  },'fast')
		  },
	function(){
		$(".survol-fond").fadeOut().animate({
		  'background-color':'rgba(0, 0, 0, 0.0)'
		  },'fast')	
		});*/

// Apparition des batiments au survol, au cas pas cas, puisque je ne sais pas encore optimiser mes codes...

//TRIGGERS statiques
$('.scrollTo1').append("<aside class='aside-survol'><img src='../site_web/css/media/img/Books_stack_of_three_64R.png' /><p>Cours</p></aside>")
$('.scrollTo2').append("<aside class='aside-survol'><img src='../site_web/css/media/img/Signing_the_contract_64O.png' /><p>Quiz</p></aside>")
$('.scrollTo3').append("<aside class='aside-survol'><img src='../site_web/css/media/img/Grid_world_64b.png' /><p>Wikiothèque</p></aside>")
$('.scrollTo4').append("<aside class='aside-survol'><img src='../site_web/css/media/img/Lightbulb_idea_64J.png' /><p>Ateliers créatifs</p></aside>")
$('.scrollTo5').append("<aside class='aside-survol'><img src='../site_web/css/media/img/World_64r.png' /><p>La Gazette</p></aside>")
$('.scrollTo6').append("<aside class='aside-survol'><img src='../site_web/css/media/img/dortoir.png' /><p>Chambre étudiante</p></aside>")
$('.scrollTo7').append("<aside class='aside-survol'><img src='../site_web/css/media/img/administration.png' /><p>administration</p></aside>")
$('.scrollTo8').append("<aside class='aside-survol'><img src='../site_web/css/media/img/coffee.png' /><p>La cafet'</p></aside>")


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
		
      	$(".secondplan").animate({
		  	'left': '-30%',
  			'top': '-70%'
		  },'fast',function(){
			  $('.survol-cours').css({
				  'left': '-30%',
  					'top': '-70%'
				  }).fadeIn(function(){
					  })
			  })
	},
	function(){
		$(".survol-cours").hide()
		$(".secondplan, .survol-cours").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){
			  
			  })
		  
			
		});

//quiz		
	$('.survol2').hover(function() {
		
      $(".secondplan").animate({
		  	'left': '-60%',
  			'top': '-60%'
		  },'fast',function(){
			  $('.survol-quiz').css({
				  'left': '-60%',
  					'top': '-60%'
				  }).fadeIn()
			  })
	},
	function(){
		$(".survol-quiz").hide()
		$(".secondplan, .survol-quiz").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){
			  
			  })	
		});

//wiki		
	$('.survol3').hover(function() {
		
      $(".secondplan").animate({
		  	'left': '-50%',
  			'top': '-50%'
		  },'fast',function(){
			  $('.survol-wiki').css({
				  'left': '-50%',
  					'top': '-50%'
				  }).fadeIn()
			  })
	},
	function(){
		$(".survol-wiki").hide()
		$(".secondplan, .survol-wiki").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){
			  
			  })	
		});


//ateliers		
	$('.survol4').hover(function() {
		
      $(".secondplan").animate({
		  	'left': '-50%',
  			'top': '-10%'
		  },'fast',function(){
			  $('.survol-ateliers').css({
				  'left': '-50%',
  					'top': '-10%'
				  }).fadeIn()
			  })
	},
	function(){
		$(".survol-ateliers").hide()
		$(".secondplan, .survol-ateliers").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){
			  
			  })	
		});

//gazette		
	$('.survol5').hover(function() {
		
      $(".secondplan").animate({
		  	'left': '-70%',
  			'top': '-60%'
		  },'fast',function(){
			  $('.survol-gazette').css({
				  'left': '-70%',
  					'top': '-60%'
				  }).fadeIn()
			  })
	},
	function(){
		$(".survol-gazette").hide()
		$(".secondplan, .survol-gazette").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){
			  
			  })	
		});

//cafette		
	$('.survol6').hover(function() {
		
      $(".secondplan").animate({
		  	'left': '-60%',
  			'top': '-20%'
		  },'fast',function(){
			  $('.survol-cafette').css({
				  'left': '-60%',
  					'top': '-20%'
				  }).fadeIn()
			  })
	},
	function(){
		$(".survol-cafette").hide()
		$(".secondplan, .survol-cafette").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){
			  
			  })	
		});


//dortoir		
	$('.survol7').hover(function() {
		
      $(".secondplan").animate({
		  	'left': '-10%',
  			'top': '0%'
		  },'fast',function(){
			  $('.survol-dortoir').css({
				  'left': '-10%',
  					'top': '-0%'
				  }).fadeIn()
			  })
	},
	function(){
		$(".survol-dortoir").hide()
		$(".secondplan, .survol-dortoir").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow',function(){
			  
			  })	
		});

//administration		
	/*$('.survol8').hover(function() {
      $(".secondplan").animate({
		  	'left': '0%',
  			'top': '-20%'
		  },'fast',function(){
			  $('.survol-inscription').css({
				  'left': '0%',
  					'top': '-20%'
				  }).fadeIn()
			  })
	},
	function(){
		$(".survol-inscription").hide()
		$(".secondplan, .survol-inscription").animate({
		  	'left': '-40%',
  			'top': '-40%'
		  },'slow')	
		});*/

//gestion des icones (à cause du menu)
/*$('nav a').hover(function(){
	$('.aside-survol').hide()
	},	
	function(){
	$('.aside-survol').show()	
	})
*/
});

/*
$(".survol-quiz")
$(".survol-wiki")
$(".survol-ateliers")
$(".survol-gazette")
$(".survol-dortoir")
$(".survol-inscription")
$(".survol-cafette")*/
			
</script>