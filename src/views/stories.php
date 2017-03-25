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

	<hr>

	<div class="row">
		<div class="grid" data-columns>
			<a href="story">
				<img class="img-responsive img-thumbnail"
					 src="assets/images/covers/wuthering-heights.jpg"
				 	 alt="Card image">
			</a>			
			<a href="#">
				<img class="img-responsive img-thumbnail"
					 src="assets/images/covers/panorama.jpg"
				 	 alt="Card image">
		 	</a>			
			<a href="#">
				<img class="img-responsive img-thumbnail"
					 src="assets/images/covers/pyramids.jpg"
				 	 alt="Card image">
			</a>
			<a href="#">
				<img class="img-responsive img-thumbnail"
					 src="assets/images/covers/vintage.jpg"
				 	 alt="Card image">
			</a>	
			<div class="clearfix"></div>	
		</div>
		
	</div>

</main>

<!-- Salvattore -->
<script src="vendors/salvattore/scripts/salvattore.min.js"></script>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>