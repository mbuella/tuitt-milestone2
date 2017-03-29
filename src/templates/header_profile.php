<li class="dropdown pull-right">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
		<?= $username ?>
		<strong class="caret"></strong>
	</a>
	<ul class="dropdown-menu signin-form">
		<li class="text-center">
			<img src="assets/images/avatar.png">
			<h4><?= $fullname ?></h4>
		</li>
		<li role="separator" class="divider"></li> 
		<li class="profile-sub">
			<a href="#">
				My Profile
			</a>
		</li>
		<li class="profile-sub">
			<a href="#">
				My Stories
			</a>
		</li>
		<li role="separator" class="divider"></li>            				
		<li class="profile-sub">
			<a href="?signout">
				Sign out
			</a>
		</li>
	</ul>
</li>
