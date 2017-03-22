$(document).ready(function() {

	$("[data-toggle=popover]").popover({
	    html: true, 
		content: function() {
  			return $('#popover-content').html();
		}
	});

	$('#home-next').on('click', function(e){
	    $('html, body').animate({
	        scrollTop: $("#about").offset().top -30
	    }, 1500);
	});


	var submitIcon = $('.search-button');
	var inputBox = $('.search-box');
	var searchForm = $('.search-form');
	var isOpen = false;

	submitIcon.click(function(){
	    if(isOpen == false){
	        $('.search-form').css('display','inherit')
	        				 .animate({width: "500%"},400);
	        inputBox.focus();
	        isOpen = true;
	    } else {
	        $('.search-form').animate(
	        					{width: "0"},
	        					{
	        						duration: 400,
	        						complete: function() {
	        							$(this).css('display','none')
	        						}
	        					}
        					  );
	        				 
	        inputBox.focusout();
	        isOpen = false;
	    }
	});

});
