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
	$('#tabs').tabulous({});
	$("#tabs_container").animate({boxShadow: '5px 42px 64px 2px rgba(0, 0, 0, 0.7)'});
	//$("#tabs ul").prepend('<li><button id="but_cancel"><img src="css/media/img/wrong.png" /></button></li>');
})
}



/*function cacheVignette() {
	$( "#but_cancel" ).click(function( event ) {
  event.preventDefault();
  $( "#vignette" ).hide("slide", { direction: "right" }, "fast");
});
	}*/