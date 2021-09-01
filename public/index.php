<?php
	// index.php
	//start session
	session_start();

	//Composer autoload file
	require_once '../vendor/autoload.php';

	// Load env vars from .env file
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
	$dotenv->load();

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

		case $index . "read":
	    	read_action();
			break;

		case $index . "story":
	    	story_action();
			break;

		case $index . "authors":
	    	authors_action();
			break;

		case $index . "story":
	    	story_action();
			break;

		case $index . "save_chapter":
	    	save_chapter_action();
			break;

		default:
			# AJAX REQUEST ROUTE
			# Restrict access to AJAX-calls only
			if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )
				&& ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) ) {
					if($uri === $index . "ajax/signin") {
						ajax_action("signin");
					}
					else if($uri === $index . "ajax/updatechap") {
						ajax_action("updatechap");						
					}
					else if($uri === $index . "ajax/deletechap") {
						ajax_action("deletechap");						
					}
					else if($uri === $index . "ajax/addchapform") {
						ajax_action("addchapform");						
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