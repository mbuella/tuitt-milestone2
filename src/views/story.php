<?php

$title = "{$chapter_out['title']} - {$story['story_title']} | kwntu" ?>

<?php ob_start() ?>

<main class="container" id="story">
	<div class="row">
		<div class="col-md-3">
			<div class="panel">
				<div class="panel story-cover text-center">
					<div class="panel-heading" style="padding: 20px;">
						<img src="assets/images/covers/<?= $story['story_cover_filename'] ?>"
							 class="img-thumbnail img-responsive">						
					</div>
					<h4>
						<strong><?= $story['story_title'] ?></strong>
					</h4>
					<small>ni <?= $story['story_author'] ?></small>
				</div>
				<div class="list-group chapter-list">
					<?php
						// chapters
						echo $chapter_list;
					?>
				</div>
			</div>
		</div>
		<div class="col-md-7 story-body">
			<div class="panel">
				<div class="panel-heading">
					<div class="story-top" data-spy="affix" data-offset-top="75">
						<?= $chap_nav_btn ?>

						<div class="clearfix"></div>				
					</div>
					<h3 class="text-center">
						<span class="chapter-title"><?= $chapter_out['title'] ?></span>
					</h3>	
				</div>
				<div class="panel-body">
					<div class="chapter-text">
						<?= $chapter_out['text'] ?>						
					</div>
<!-- 					<nav class="text-center" aria-label="Chapter navigation">
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
							<li>
								<a href="#">1</a>
							</li>
							<li class="active">
								<span>2</span>
							</li>
							<li class="disabled">
								<span>3</span>
							</li>
							<li class="disabled">
								<span>
									<span aria-hidden="true">&raquo;</span>
								</span>
							</li>
						</ul>
					</nav> -->
				</div>
				<div class="panel-footer story-nav">		
					<?= $page_nav_btns ?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-2 story-recom">
			<div class="panel text-center">
				<div class="panel-heading">
					<h4>SIMILAR BOOKS</h4>
				</div>
				<div class="panel-body">	
					<a href="#">
						<img class="img-responsive img-thumbnail"
							 src="assets/images/covers/bakit-di-ka-crush-ng-crush-mo.jpg"
						 	 alt="Card image">						
					</a>				

					<a href="#">
						<img class="img-responsive img-thumbnail"
							 src="assets/images/covers/ang-tundo-man-may-langit-din.jpg"
						 	 alt="Card image">						
					</a>

					<a href="#">
						<img class="img-responsive img-thumbnail"
							 src="assets/images/covers/rizal-without-the-overcoat.jpg"
						 	 alt="Card image">						
					</a>

					<a href="#">
						<img class="img-responsive img-thumbnail"
							 	 src="assets/images/covers/titser.jpg"
						 alt="Card image">						
					</a>
				</div>
				
			</div>
		</div>
	</div>
</main>
<div class="screen">
	
</div>

<div class="modal fade" id="addChapModal" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Add Chapter</h3>
			</div>
			<div class="modal-body">
				<form method="POST" action="save_chapter">
					<div class="form-group">
						<label for="chapter-title">Title of the chapter</label>
						<input type="text"
							name="chapter[title]"
							id="chapter-title"
							class="form-control"
							placeholder="example: Chapter 20: Gabi ng Lagim!">						
					</div>
					<div class="form-group">
						<label for="chapter-text">Chapter content</label>
						<textarea name="chapter[text]"
							id="chapter-text"
							class="form-control"
							placeholder="example: One day, isang araw..." 
							rows=10></textarea>
					</div>
					<button type="submit"
						name = "chapter[submit]"
						id = "chapter-submit"
						class="btn btn-info pull-right">
						Create new chapter</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>


<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>