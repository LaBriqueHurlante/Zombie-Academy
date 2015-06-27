// JavaScript Document

$(document).ready(function() {
    $(".nav a").click(function(){
		page=$(this).attr("href");
		$.ajax({
			url: "core/pages/"+page,
			cache:false,
			success:function(html){
				afficher(html);
				
				/*cacheVignette( event);*/
				
			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				alert(textStatus);
			}
		})
		return false;
	});
});

function afficher(data){
	
$("#vignette").hide("slide", { direction: "left" }, "fast", function(){
	$("#vignette").empty();
	$("#vignette").append(data);		
	$("#vignette").show("slide", { direction: "right" }, "fast");
	$( "#tabs" ).tabs({show: 'fade', hide: 'fade',active: '#tabs-1'});	
	$("#tabs_container").animate({boxShadow: '5px 42px 64px 2px rgba(0, 0, 0, 0.7)'});
	$("#vignette").prepend('<div id="vign_overlay">');
})
}


function fermetureAuto(){
	setTimeout(function(){
			$( "#vignette" ).hide("slide", { direction: "up" }, "fast")}, 1000);
			
}
function decoVignette(){
	setTimeout(function(){
			$(".co").fadeOut('slow', function(){
			$(".deco").fadeIn('slow');
			$("#coOuPas").html("Vous n'êtes pas connecté");
	});		
			$( "#vignette" ).hide("slide", { direction: "left" }, "slow")}, 1000);
}
