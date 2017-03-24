<?php $title = '<chapter> - <story title> | kwntu' ?>

<?php ob_start() ?>

<main class="container" id="story">
	<div class="row">
		<div class="col-md-3">
			<div class="panel">
				<div class="panel story-cover text-center">
					<div class="panel-heading" style="padding: 20px;">
						<img src="assets/images/stories/apple.jpg"
							 class="img-thumbnail img-responsive">
						
					</div>
					<h4>
						<strong>Wuthering Heights</strong>
					</h4>
					<small>by Emily Bronte</small>
				</div>
				<div class="list-group chapter-list">
					<a href="#" class="list-group-item">Chapter 1</a>
					<a href="#" class="list-group-item">Chapter 2</a>
					<a href="#" class="list-group-item">Chapter 3</a>
					<a href="#" class="list-group-item">Chapter 4</a>
					<a href="#" class="list-group-item active">Chapter 5</a>
					<a href="#" class="list-group-item disabled">Chapter 6</a>
					<a href="#" class="list-group-item disabled">Chapter 7</a>
					<a href="#" class="list-group-item disabled">Chapter 8</a>
					<a href="#" class="list-group-item disabled">Chapter 9</a>
					<!-- display this page when no user logged in (guest) -->
					<a href="#"
						class="list-group-item
							   list-group-item-info
							   text-center">
				   		More Chapters</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 story-body">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="text-center">Chapter 5</h3>					
				</div>
				<div class="panel-body">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<nav class="text-center" aria-label="Chapter navigation">
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
					</nav>
				</div>
				<div class="panel-footer">					
					<div class="pull-left">
						<a href="#" class="btn btn-success">
				    		<span aria-hidden="true">&larr;</span>
							Previous <span class="hidden-xs">Chapter</span>
						</a>						
					</div>
					<div class="pull-right">
						<a href="#" class="btn btn-success">
							Next <span class="hidden-xs">Chapter</span>
				    		<span aria-hidden="true">&rarr;</span>
						</a>						
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-3 story-recom">
			<div class="panel text-center">
				<div class="panel-heading">
					<h4>SIMILAR BOOKS</h4>
				</div>
				<div class="panel-body">					
					<img class="img-responsive img-thumbnail"
						 src="assets/images/stories/panorama.jpg"
					 	 alt="Card image">

					<img class="img-responsive img-thumbnail"
						 src="assets/images/stories/pyramids.jpg"
					 	 alt="Card image">

					<img class="img-responsive img-thumbnail"
						 src="assets/images/stories/vintage.jpg"
					 	 alt="Card image">

					<img class="img-responsive img-thumbnail"
						 	 src="assets/images/stories/historic-building.jpg"
					 alt="Card image">
				</div>
				
			</div>
		</div>
	</div>
</main>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>