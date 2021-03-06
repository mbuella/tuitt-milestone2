<?php

/*** USER-RELATED FUNCTIONS ***/
//retrieve a specific user using his username
function getMember($uname) {
	global $conn;
	$sql = "SELECT u.user_id,
				user_name AS username,
				CONCAT(member_fname, ' ', member_lname) AS fullname,
    			user_pword AS pword,
    			user_role AS role
			FROM users u
			LEFT JOIN members m
			ON m.user_id = u.user_id
			WHERE user_name = '{$uname}'
			LIMIT 1;";
	//query database
	if($result = mysqli_query($conn,$sql)) {
		//Detect if there is a row retrieved
		if (mysqli_num_rows($result)) {
			//get just one row, as an assoc array
			$members = mysqli_fetch_assoc($result);
			return $members;
		}
		//else no username found
		return false;
	}
	//else error has happened
	return false;
}

//get current user (SESSION)
function getCurrentMember() {
	if (isset($_SESSION['user'])) {
		return $_SESSION['user'];
	}
	return false;
}

//set current user (SESSION)
function setCurrentMember($user_info) {
	$_SESSION['user'] = [
		"user_id" => $user_info["user_id"],
		"username" => $user_info["username"],
		"fullname" => $user_info["fullname"],
		"role" => $user_info["role"]
	];
}

//*edit user

/*** BOOK/STORY-RELATED FUNCTIONS ***/
//Retrieve story info by genre
function getStoriesByGenre($genre) {	
	global $conn;
	$sql = "SELECT s.story_id, s.story_title, s.story_author,
				CONCAT(g.genre_name, '/', s.story_cover_filename) AS story_cover_filename,
    			s.story_short_desc
			FROM stories s, genres g
			WHERE s.genre_id = g.genre_id
			AND g.genre_name = '{$genre}';";
	//query database
	if($result = mysqli_query($conn,$sql)) {
		//get just one row, as an assoc array
		$stories = mysqli_fetch_all($result,MYSQLI_ASSOC);
		return $stories;
	}
	//else error has happened
	return false;
}

//Retrieve story by id
function getStoryByID($id) {	
	global $conn;
	$sql = "SELECT s.story_id, s.story_title, s.story_author,
				CONCAT(g.genre_name, '/', s.story_cover_filename)
					AS story_cover_filename,
				s.story_short_desc, s.user_id
			FROM stories s, genres g
			WHERE s.genre_id = g.genre_id
			AND s.story_id = {$id}
			LIMIT 1;";

	//query database
	if($result = mysqli_query($conn,$sql)) {
		//get just one row, as an assoc array
		$story = mysqli_fetch_assoc($result);
		return $story;
	}
	//else error has happened
	return false;
}

//Retrieve all chapters names and IDs of a certain book
function getChaptersByStoryID($id) {
	global $conn;
	$sql = "SELECT chapter_id, chapter_title
			FROM chapters c
			WHERE c.story_id = {$id}
			ORDER BY c.chapter_id, c.story_id;";

	//query database
	if($result = mysqli_query($conn,$sql)) {
		//all rows
		$chapters = mysqli_fetch_all($result,MYSQLI_ASSOC);
		return $chapters;
	}
	//else error has happened
	return false;	
}	

//Count all chapters of a certain book
//max instead of count
function countChaptersByStoryID($id) {
	global $conn;
	$sql = "SELECT MAX(c.chapter_id) as count
			FROM chapters c
			WHERE c.story_id = {$id}
			LIMIT 1;";

	//query database
	if($result = mysqli_query($conn,$sql)) {
		//all rows
		$count = mysqli_fetch_assoc($result);
		return $count;
	}
	//else error has happened
	return false;		
}

//Retrieve chapter by id
function getChapterById($story_id, $chapter_id = 0) {
	global $conn;
	$sql = "SELECT chapter_id, chapter_title, chapter_text
			FROM chapters c
			WHERE c.story_id = $story_id
			AND c.chapter_id = $chapter_id
			LIMIT 1;";

	//query database
	if($result = mysqli_query($conn,$sql)) {
		//all rows
		$chapter = mysqli_fetch_assoc($result);
		return $chapter;
	}
	//else error has happened
	return false;	
}

//Retrieve story info by user
//Add new story by user
//Display chapters info of a story
//Add a new chapter by user
function addChapter($id,$story_id,$title,$text) {
	global $conn;
	$sql = "INSERT INTO chapters(
				chapter_id,
				story_id,
				chapter_title,
				chapter_text
			) VALUES (
				$id,
				$story_id,
				\"$title\",
				\"$text\"
			);";

	//disable autocommit
	mysqli_autocommit($conn, FALSE);

	//query database
	if($result = mysqli_query($conn,$sql)) {
		//all rows
		//successful update
		//commit
		mysqli_commit($conn);
		return true;
	}
	//else error has happened
	echo "ADD CHAPTER FAILED!<br>" . mysql_error($conn);
	mysqli_rollback($conn);
	return false;	
}

//Edit chapter info of a story
function updateChapter($story_id, $chapter_id, $chapter_title, $chapter_text) {
	global $conn;
	$sql = "UPDATE chapters 
 			SET chapter_title = '{$chapter_title}',
				chapter_text = '{$chapter_text}'
			WHERE story_id = '{$story_id}' 
			AND chapter_id = '{$chapter_id}'";

	//disable autocommit
	mysqli_autocommit($conn, FALSE);

	//query database
	if($result = mysqli_query($conn,$sql)) {
		//all rows
		//successful update
		//commit
		mysqli_commit($conn);
		return true;
	}
	//else error has happened
	mysqli_rollback($conn);
	return false;	
}

//Delete chapter from a story
function deleteChapter($story_id, $chapter_id) {
	global $conn;
	$sql = "DELETE FROM chapters
			WHERE story_id = '{$story_id}' 
			AND chapter_id = '{$chapter_id}'";

	//disable autocommit
	mysqli_autocommit($conn, FALSE);

	//query database
	if($result = mysqli_query($conn,$sql)) {
		//all rows
		//successful update
		//commit
		mysqli_commit($conn);
		return true;
	}
	//else error has happened
	mysqli_rollback($conn);
	return false;	
}

//set current story/chapter being read by the user
function setCurrentStoryRead($story_id, $chapter_id = 'intro') {
	$_SESSION['current_story'] = [
		"story_id" => $story_id,
		"chapter_id" => $chapter_id
	];
}

//get current story/chapter being read by the user
function getCurrentStoryRead() {
	if (isset($_SESSION['current_story'])) {
		return $_SESSION['current_story'];
	}
	return false;
}

?>