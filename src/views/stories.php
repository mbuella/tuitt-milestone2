<?php $title = 'Classics | kwntu' ?>

<?php ob_start() ?>

<main class="container" id="stories-home">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<a href="#">
				<div class="panel week-story">
					<h4>Story of the week</h4>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 stories-right">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="#">
					 <div class="panel new-stories">
					 	<h4>New</h4>
					 </div>
				</a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="#">
					 <div class="panel rising-stories">
					 	<h4>Rising</h4>
					 </div>
				</a>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<a href="#">
					 <div class="panel featured-stories">
					 	<h4>Featured</h4>
					 </div>
				</a>
			</div>
		</div>
	</div>

	<div class="stories">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<a href="story">
					<img class="img-responsive img-thumbnail"
						 src="assets/images/stories/apple.jpg"
					 	 alt="Card image">
				 </a>	

				<a href="#">
					<img class="img-responsive img-thumbnail"
						 src="assets/images/stories/panorama.jpg"
					 	 alt="Card image">
				 </a>			
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="#">
					<img class="img-responsive img-thumbnail"
						 src="assets/images/stories/pyramids.jpg"
					 	 alt="Card image">
				 </a>
				
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="#">
					<img class="img-responsive img-thumbnail"
						 src="assets/images/stories/vintage.jpg"
					 	 alt="Card image">
				 </a>
				
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="#">
					<img class="img-responsive img-thumbnail"
						 	 src="assets/images/stories/historic-building.jpg"
					 alt="Card image">
				 </a>
				
			</div>
		</div>
	</div>

</main>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>