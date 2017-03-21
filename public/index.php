<?php
	// index.php
	//set whether code is in dev or prod
	$debug = 1;
	
	// load and initialize any global libraries
	//require_once 'models/model.php';
	require_once '../src/controllers/controller.php';

	/*** URI ROUTES ***/
	// route the request internally
	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	//root uri - update accordingly when in a different directory
	$index = '/tuitt/kwntu/';

	/** Routing starts here **/
	switch ($uri) {
		case $index:
	    	home_action();
			break;
		
		case $index . "signup":
	    	echo "Hello!";
			break;

		default:
		    header('HTTP/1.1 404 Not Found');
		    echo '<html><body><h1>Page Not Found</h1></body></html>';
			break;
			
	}

?>