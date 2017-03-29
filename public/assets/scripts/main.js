$(document).ready(function() {

/*	$("[data-toggle=popover]").popover({
	    html: true, 
		content: function() {
  			return $('#popover-content').html();
		}
	});*/

	$(".story").hover(
		function(e){
			$(this).children("a:first").children("div").toggleClass("hide");
		}
	);

	$('#home-next').on('click', function(e){
	    $('html, body').animate({
	        scrollTop: $("#about").offset().top +10
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


	/* AJAX REQUESTS */

	$("#signin-form").submit(function(){
		console.log("form begin");
		//prevent default posting
    	event.preventDefault();

    	//get form data
    	var $form = $(this);

    	//cache all fields
    	var $fields = $form.find("input,button");

    	//serialize data
    	var data = $form.serialize();

    	//disable form fields
    	$fields.prop("disabled",true);

    	$.post('ajax/signin', data,
    		function(response,status){
    			if (status == 'success') {
	    			$form.delay(1000).queue(function(next) {
		    			//load message template
		    			$("#signin-msg-holder").load('assets/html/alert.html',
		    				function(){
								//add class for alert type
								$("#signin-msg-holder > div.alert").addClass("alert-"+response.status);	 
								//write message
								$("#signin-msg").html(response.content);
								//redirect to home if successful
								if (response.status == 'success') {
									//redirect to home page (after 3 seconds)
									$(this).delay(3000).queue(function(next){
										window.location = response.redirect;
									});
								}
								else {
							    	//enable form fields if signin not successful
							    	$fields.prop("disabled",false);								
								}
		    				}
	    				);
		            	next();
		            });
	    		}
	    		else {
	    			//handle ajax error
	    		}
    		}
    	);

	});

});
