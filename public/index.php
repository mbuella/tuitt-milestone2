<?php
	// index.php
	
	// load and initialize any global libraries
	require_once '../src/config/config.php';
	//require_once 'models/model.php';
	require_once '../src/controllers/controller.php';

	/*** URI ROUTES ***/
	// route the request internally
	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	#echo $uri;

	//root uri - update accordingly when in a different directory
	$index = '/mbuella/kwntu/';

	/** Routing starts here **/
	switch ($uri) {
		case $index:
	    	home_action();
			break;
		
		case $index . "signup":
	    	echo "Hello!";
			break;

		case $index . "genres":
	    	genres_action();
			break;

		case $index . "stories":
	    	stories_action();
			break;

		default:
		    header('HTTP/1.1 404 Not Found');
		    echo '<html><body><h1>Page Not Found</h1></body></html>';
			break;
			
	}

?>