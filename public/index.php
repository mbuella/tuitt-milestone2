<?php
	// index.php
	
	// load and initialize any global libraries
	require_once '../src/config/config.php';
	//require_once 'models/model.php';
	require_once '../src/controllers/controller.php';

	/*** URI ROUTES ***/
	// route the request internally
	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	/** Routing starts here **/
	switch ($uri) {
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

		default:
		    header('HTTP/1.1 404 Not Found');
		    echo '<html><body><h1>Page Not Found</h1></body></html>';
			break;
			
	}

?>