<?php $title = 'Genres | kwntu' ?>

<?php ob_start() ?>

<main class="container" id="genres">
<!-- 	<div class="card-columns" id="genre-divider">
		<div class="card genre-box-lg">
			<div class="card-block">
				<div class="card-columns genre-box-lg">
					  <div class="card">
					  		<a href="#" class="tile-1 btn btn-link">
					  			<h2>Genres</h2>
					  		</a>
					  </div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-block">
				<div class="card-columns genre-box-sm">
					  <div class="card">
					  		<a href="stories" class="tile-3">
					  			<h4>Classics</h4>
				  			</a>
					  </div>
					  <div class="card">
					  		<a href="#" class="tile-3">
					  			<h4>Science Fiction</h4>
				  			</a>
					  </div>
					  <div class="card">
					  		<a href="#" class="tile-1">
					  			<h4>Humor</h4>
				  			</a>
					  </div>
					  <div class="card">
					  		<a href="#" class="tile-5">
					  			<h4>Horror</h4>
				  			</a>
					  </div>
				</div>

			</div>
		</div>
		<div class="card">
			<div class="card-block">

				<div class="card-columns genre-box-sm">
					  <div class="card">
					  		<a href="#" class="tile-3">
					  			<h4>Fantasy</h4>
				  			</a>
					  </div>
					  <div class="card">
					  		<a href="#" class="tile-4">
					  			<h4>History</h4>
				  			</a>
					  </div>
					  <div class="card">
					  		<a href="#" class="tile-5">
					  			<h4>Poetry</h4>
				  			</a>
					  </div>
					  <div class="card">
					  		<a href="#" class="tile-2">
					  			<h4>Short Story</h4>
				  			</a>
					  </div>
				</div>

			</div>
		</div>
		<div class="card">
			<div class="card-block">
				<div class="card-columns genre-box-lg">
					  <div class="card">
					  		<a href="#" class="tile-a">
					  			<h4>Romance</h4>
				  			</a>
					  </div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12 stories-right">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<a href="#" class="genre-box-lg">
					 <div class="panel text-center tile-1">
					 	<h2>Genres</h2>
					 </div>
				</a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="stories" class="genre-box-sm">
					 <div class="panel tile-3">
					 	<h4>Classics</h4>
					 </div>
				</a>
				<a href="#" class="genre-box-sm">
					 <div class="panel tile-3">
					 	<h4>Science Fiction</h4>
					 </div>
				</a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="#" class="genre-box-sm">
					 <div class="panel tile-1">
					 	<h4>Humor</h4>
					 </div>
				</a>
				<a href="#" class="genre-box-sm">
					 <div class="panel tile-5">
					 	<h4>Horror</h4>
					 </div>
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 stories-right">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="#" class="genre-box-sm">
					 <div class="panel tile-3">
					 	<h4>Fantasy</h4>
					 </div>
				</a>
				<a href="#" class="genre-box-sm">
					 <div class="panel tile-4">
					 	<h4>History</h4>
					 </div>
				</a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="#" class="genre-box-sm">
					 <div class="panel tile-5">
					 	<h4>Poetry</h4>
					 </div>
				</a>
				<a href="#" class="genre-box-sm">
					 <div class="panel tile-2">
					 	<h4>Short Story</h4>
					 </div>
				</a>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<a href="#" class="genre-box-lg">
					 <div class="panel tile-a">
					 	<h4>Romance</h4>
					 </div>
				</a>
			</div>
		</div>
	</div>

</main>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>