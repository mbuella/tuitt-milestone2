<?php $title = 'Genres | kwntu' ?>

<?php ob_start() ?>

<main class="container" id="genres">

	<div class="card-columns" id="genre-divider">
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
	</div>

</main>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>