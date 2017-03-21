$(document).ready(function() {

	$("[data-toggle=popover]").popover({
	    html: true, 
		content: function() {
  			return $('#popover-content').html();
		}
	});

	$('#home-next').click(function(){
	    $('html, body').animate({
	        scrollTop: $("#about-section").offset().top -30
	    }, 1500);
	});

});
