<?php

/*** USER-RELATED FUNCTIONS ***/
//retrieve a specific user using his username
function getMember($uname) {
	global $conn;
	$sql = "SELECT user_name AS username,
				CONCAT(member_fname, ' ', member_lname) AS fullname,
    			user_pword AS pword,
    			user_role AS role
			FROM users
			LEFT JOIN members
			ON members.user_id = users.user_id
			WHERE user_name = '{$uname}'
			LIMIT 1;";
	//query database
	if($result = mysqli_query($conn,$sql)) {
		//Detect if there is a row retrieved
		if (mysqli_num_rows($result) > 0) {
			//get just one row, as an assoc array
			$user_info = mysqli_fetch_assoc($result);
			return $user_info;
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
	$_SESSION['user'] = $user_info;
}

//*edit user

/*** BOOK/STORY-RELATED FUNCTIONS ***/
//Retrieve books info by genre
//Retrieve books info by user
//Add new story by user
//Display chapters info of a book
//Add a new chapter by user (with pos option)
//Edit chapter info of a book
//Delete chapter from a book

?>