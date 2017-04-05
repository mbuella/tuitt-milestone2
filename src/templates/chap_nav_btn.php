<?php

//if user is registered/signed in
if ($current_user = getCurrentMember()):
	//if the story belongs to user
	if ($story['user_id'] == $current_user['user_id']): 
?>

<div id="writer-tools">
	<button
		class="btn btn-success"
		id="add-chapter-btn"
		data-toggle="modal"
		data-target="#addChapModal">
		<i class="fa fa-plus"></i>
		<span>Insert chapter</span>
	</button>			
	<button class="btn btn-info" id="edit-chapter-btn">
		<i class="fa fa-edit"></i>
		<span>Edit chapter</span>
	</button>			
	<button class="btn btn-danger" id="delete-chapter-btn">
		<i class="fa fa-trash"></i>
		<span>Delete chapter</span>
	</button>				
</div>

<?php
	else:
?>

<span class="react-icons">
	<button class="btn btn-info">
		<i class="fa fa-bookmark-o"></i>
	</button>				
	<button class="btn btn-info">
		<i class="fa fa-heart-o"></i>
	</button>						
</span>

<?php
	endif;
else: //user is not registered/signed in
?>

<button class="btn btn-info" id="signin-btn">
	<i class="fa fa-user"></i>
	<span>Signin to like this chapter.</span>
</button>			

<?php
endif;
?>