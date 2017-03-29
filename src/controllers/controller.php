<?php

/*** STANDARD ROUTE FUNCTIONS ***/

function home_action() {
	require_once('../src/views/home.php');
}

function signup_action() {
	require_once('../src/views/signup.php');	
}

function genres_action() {
	require_once('../src/views/genres.php');
}

function stories_action() {
	require_once('../src/views/stories.php');
}

function story_action() {
	require_once('../src/views/story.php');
}

function authors_action() {
	require_once('../src/views/pendingpage.php');
}


/*** AJAX ROUTE FUNCTIONS ***/

function ajax_action($action) {
	switch ($action) {
		case 'signin':
			$uname = $_POST['signin_uname'];
			$pword = $_POST['signin_pword'];
			global $index_html;
			//validate user credentials
			if ($user_info = getMember($uname)) {
				//validate if valid password
				if (sha1($pword) == $user_info['pword']) {					
					//set current SESSION signin data
					setCurrentMember($user_info);
					//prepare JSON data
					$ajax_si = [
						'status' => 'success',
						'content' => "<strong>Welcome {$user_info['username']}!</strong><p>Please wait while we bring you home...</p>",
						'redirect' => $index_html
					];
				}
				else { //invalid password
					//prepare JSON data
					$ajax_si = [
						'status' => 'danger',
						'content' => "<strong>Invalid password!</strong><p>Please enter the valid password.</p>",
						'redirect' => $index_html
					];
				}
			}
			else { //no user found
				//prepare JSON data
				$ajax_si = [
					'status' => 'danger',
					'content' => "<strong>Oh snap!</strong><p>That username hasn't been found!...</p>"
				];
			}

		break;
		
		default:
			$ajax_si = [
				'status' => 'error',
				'content' => 'Invalid request!'
			];
		break;
	}
	//set output as JSON
    header('Content-Type: application/json');
	echo json_encode($ajax_si);
}


/*** GLOBAL VARIABLES ***/

/*** APPLICATION LOGIC MAIN ENTRY ***/

if (isset($_GET['signout'])) {
	var_dump($_GET['signout']);
	//destroy current session
	session_destroy();
	header("Location: ./");
}

# detect if signin is triggered (detect pressed signin button)
if (isset($_POST['signin_submit'])) {
	setCurrentMember();
	header("Location: ./");
}

# detect if a user is actively signed in
if(!getCurrentMember()) {
	# set signin dropdown
	ob_start();

	include_once('../src/templates/header_signin.html');
	$user_dropdn = ob_get_clean();
}
else {
	# profile dropdown vars
	$current_user = getCurrentMember();
	$username = $current_user['username'];
	//determine username/fullname to display
	if ($current_user['fullname']) 
		$fullname = $current_user['fullname'];
	else
		$fullname = $username;

	# set profile dropdown	
	ob_start();
	include_once('../src/templates/header_profile.php');
	$user_dropdn = ob_get_clean();
}

?>