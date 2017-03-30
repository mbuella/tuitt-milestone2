<div class="story">
	<button class="btn btn-info prevw-btn hide" style="position: absolute; right: 0; z-index: 1">Sneek Peek</button>
	<a href="story?title=<?= $story_url ?>">
		<img class="img-responsive img-thumbnail"
			 src="assets/images/covers/<?= $story['story_cover_filename'] ?>"
		 	 alt="Card image">
		<div class="panel hide">
			<i class="fa fa-bookmark fa-2x"></i>
			<h4>
				<strong><?= $story['story_title'] ?></strong>
			</h4>
			<h5>ni <?= $story['story_author'] ?></h5>
			<div>
				<span>
					<i class="fa fa-eye"></i>
					123										
				</span>
				<span>										
					<i class="fa fa-heart"></i>
					123
				</span>
			</div>
		</div>
	</a>
</div>	