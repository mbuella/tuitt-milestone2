<?php

/*** STANDARD ROUTE FUNCTIONS ***/

function home_action() {
	require_once('../src/views/home.php');
}

function signup_action() {
	require_once('../src/views/signup.php');	
}

function read_action() {
	if (isset($_GET['genre'])) {
		//remove dashes from the genres
		$genre = str_replace('-', ' ', $_GET['genre']);
		$stories = "";
		//query for stories according to genre
		if ($stories_query = getStoriesByGenre($genre)) {
			ob_start();
			foreach ($stories_query as $key => $story) { //1 row
				//replace all non-aphnumeric chars into dashes to make a friendly url :)
				$story_url = "{$story['story_id']}-" . rtrim(preg_replace('/\W+/', '-', strtolower($story['story_title'])),'-');
				require('../src/templates/story_preview.php');
			}
			$stories = ob_get_clean();
			
		}

		//include genre php page
		require_once('../src/views/genre.php');
	}
	else
		//include genre php page
		require_once('../src/views/read.php');
}

function story_action() {
	if (isset($_GET['title'])) {
		//get the id of the story (first char of the title)
		$story_id_str = strtok($_GET['title'], "-");
		if(!is_numeric($story_id_str)) {
			die("The system cannot parse that story URL!");		
		}
		else {
			$story_id = $story_id_str;
			//query for story with the specific story_id
			$story = getStoryByID($story_id);
			//query for story's chapter titles
			$chapters = getChaptersByStoryID($story_id);
			//set the current story being read (default intro)
			setCurrentStoryRead($story_id);

			//detect if chapter is already provided
			if (!isset($_GET['chapter'])) {
				$_GET['chapter'] = "intro";
			}

			# disable the prev and next buttons
			$page_nav_btns = "";
			$dxn = "left";
			$tag = "span";
			$btn_link = "";
			$disabled = "disabled";
			$arrow = "&larr;";
			$btn_txt = "Previous Chapter";



			ob_start();

			//display the current chapter (for bookmarked stories)
			if ($_GET['chapter'] == 'intro') {
				#display the trailer
				$title = 'Introduction';
				$text = addPgphTags($story['story_short_desc']);

				# prev button
				$page_nav_btns .= require("../src/templates/page_prev_next_btn.php");

				//chapter list - activate intro
				$tag = 'span';
				$href = "";
				$active = "active";
				$disabled = "";
			}
			else {
				//current chapter read is not intro
				setCurrentStoryRead($story_id,$_GET['chapter']);
				//retrieve the chapter from the database
				$chapter = getChapterById($story_id,$_GET['chapter']);
				#display the current chapter
				$title = $chapter['chapter_title'];
				$text = addPgphTags($chapter['chapter_text']);
				//echo $text;

				# set the previous button to current chap_id - 1 or
				# intro if it becomes 0
				$tag = "a";
				$disabled = "";				
				if ($_GET['chapter'] == 1)
					$btn_link = "href='story?title=" . $_GET['title'] . "&chapter=intro'";
				else
					$btn_link = "href='story?title="
								. $_GET['title']
								. "&chapter="
								. ($_GET['chapter']-1) . "'";

				$page_nav_btns .= require("../src/templates/page_prev_next_btn.php");

				//chapter list
				$tag = 'a';
				$href = "href='story?title={$_GET['title']}&chapter=intro'";
				$active = "";
				$disabled = "";		
			}

			//Story nav buttons
			ob_start();
			require('../src/templates/chap_nav_btn.php');
			$chap_nav_btn = ob_get_clean();

			//format the intro link text
			$chapter_title = "Introduction";
			//display intro link
			$chapter_list = require('../src/templates/chapter_list_item.php');

			//chapter list - other chaps
			foreach ($chapters as $chap) {
				//select active link
				if ($_GET['chapter'] == $chap['chapter_id']) {		
					$tag = 'span';
					$href = "";
					$active = "active";
					$disabled = "";				
				}
				else {					
					$tag = 'a';
					$href = "href='story?title={$_GET['title']}&chapter={$chap['chapter_id']}'";
					$active = "";
					$disabled = "";				
				}		

				$chapter_title = $chap['chapter_title'];

				$chapter_list .= require('../src/templates/chapter_list_item.php');

				//include chapter list last				
				require('../src/templates/chapter_list_last.php');
			}

			# set the next button to current chap_id + 1
			# if it is less than or equal to size				
			$arrow = "&rarr;";
			$btn_txt = "Next Chapter";
			$dxn = "right";
			$tag = "span";
			$btn_link = "";
			$disabled = "disabled";
			if ($_GET['chapter'] < count($chapters)) {
				$tag = "a";
				$disabled = "";
				$btn_link = "href='story?title="
							. $_GET['title']
							. "&chapter="
							. ($_GET['chapter']+1) . "'";
			}

			$page_nav_btns .= require "../src/templates/page_prev_next_btn.php";

			$chapter_out = [
				"id" => $_GET['chapter'],
				"title" => $title,
				"text" => $text
			];
		}
	}

	require_once('../src/views/story.php');
}

function authors_action() {
	require_once('../src/views/pendingpage.php');
}

function save_chapter_action() {
	//prepare new data
	$new_chapter = $_POST['chapter'];
	print_r($new_chapter);
	$current_story = getCurrentStoryRead();
	$chapters_size = countChaptersByStoryID($current_story['story_id']);
	//increment chapter id by one
	$new_chapter_id = $chapters_size['count']+1;
	echo "$new_chapter_id";
	//call add chapter function
	if(addChapter(
		$new_chapter_id,
		$current_story['story_id'],
		$new_chapter['title'],
		$new_chapter['text']
	)) {
		//redirect to new chapter URL
		//$story_title
		header("Location: story?title={$current_story['story_id']}&chapter={$new_chapter_id}");
	}
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
						'content' => "<strong>Welcome {$user_info['username']}!</strong><p>Please wait while we reload the page...</p>"
					];
				}
				else { //invalid password
					//prepare JSON data
					$ajax_si = [
						'status' => 'danger',
						'content' => "<strong>Invalid password!</strong><p>Please enter the valid password.</p>"
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

		case 'updatechap':
			//get current story and chapter
			$current_story = getCurrentStoryRead();
			//execute sql to update the chapter
			if (updateChapter(
				$current_story['story_id'],
				$current_story['chapter_id'],
				$_POST['chap_title'],
				$_POST['chap_par']
				)) {
					$ajax_si = [
						'status' => 'success',
						'content' => 'Chapter has been updated successfully!'
					];
			}
			else {
				$ajax_si = [
					'status' => 'danger',
					'content' => 'Error encountered while updating your chapter!'
				];
			}
			break;
		
		case 'deletechap':		
			//get current story and chapter
			$current_story = getCurrentStoryRead();
			if (deleteChapter($current_story['story_id'],$current_story['chapter_id'])) {
					$ajax_si = [
						'status' => 'success',
						'content' => 'Chapter has been removed successfully!'
					];
			}
			else {
				$ajax_si = [
					'status' => 'danger',
					'content' => 'Error encountered while removing your chapter!'
				];				
			}
		break;

		case 'addchapform':
			ob_start();
			require "../src/templates/form_add_chapter.php";
			$ajax_si = [
				'status' => 'success',
				'content' => ob_get_clean()
			];
		break;

		default:
			$ajax_si = [
				'status' => 'danger',
				'content' => 'Invalid request!'
			];
		break;
	}
	//set output as JSON
    header('Content-Type: application/json');
	echo json_encode($ajax_si);
}

/*** USER-DEFINED FUNCTIONS ***/
function addPgphTags($text) {
	$pText = "";
	//get the first fragment of the string
	$paragraph = strtok($text, "\n");
	//continue adding p tags until
	//the last fragment is found
	while($paragraph !== false) {
		if (strlen($paragraph) >= 1 && $paragraph !== "")
			$pText .= "<p>" . $paragraph . "</p>";
		$paragraph = strtok("\n");
	}
	return $pText;
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