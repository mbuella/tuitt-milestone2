<?php

//if user is registered/signed in

$chapter_list_last = "";

if ($current_user = getCurrentMember()) {
	//if the story belongs to user
	if ($story['user_id'] == $current_user['user_id']) { 
		//nothing to show as for now
/*		$tag = "a";
		$href = "href='#'";
		//set color to green
		$active = "list-group-item-success";
		$disabled = "";
		$chapter_title = "<i class='fa fa-plus'></i>Add a chapter";*/
	}
	else {
		//nothing to show as for now
	}
}
else {
	//show more articles
	$tag = "a";
	$href = "href='#'";
	//set color to green
	$active = "list-group-item-info text-center";
	$disabled = "";
	$chapter_title = "Load more chapters";

	$chapter_list_last = require('../src/templates/chapter_list_item.php');
}


?>