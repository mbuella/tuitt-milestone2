<?php
	// index.php
	//start session
	session_start();

	//general web app config file
	require_once '../src/config/config.php';
	
	// load and initialize any global libraries
	require_once '../src/models/model.php';
	require_once '../src/controllers/controller.php';

	/*** URI ROUTES ***/
	// route the request internally
	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	/** Routing starts here **/
	switch ($uri) {
		# STANDARD REQUEST ROUTES
		case $index:
	    	home_action();
			break;
		
		case $index . "signup":
	    	signup_action();
			break;

		case $index . "genres":
	    	genres_action();
			break;

		case $index . "authors":
	    	authors_action();
			break;

		case $index . "stories":
	    	stories_action();
			break;

		case $index . "story":
	    	story_action();
			break;

		# AJAX REQUEST ROUTE

		case $index . "story":
	    	story_action();
			break;

		default:
			# AJAX REQUEST ROUTE
			# Restrict access to AJAX-calls only
			if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )
				&& ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) ) {
					if($index . "ajax/signin") {
						ajax_action("signin");
					}
				break;
			}
			else {
			    // ignore....
			    header('HTTP/1.1 404 Not Found');
			    echo '<html><body><h1>Page Not Found</h1></body></html>';
				break;
			}
	}

	/*** DO NOT PRINT/ECHO ANYTHING AFTER THIS LINE!!! ***/

?>