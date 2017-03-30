<?php $title = 'Stories | kwntu' ?>

<?php ob_start() ?>

<main class="container" id="genres">
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
				<a href="read?genre=classics" class="genre-box-sm">
					 <div class="panel tile-3">
					 	<h4>Classics</h4>
					 </div>
				</a>
				<a href="read?genre=science-fiction" class="genre-box-sm">
					 <div class="panel tile-3">
					 	<h4>Science Fiction</h4>
					 </div>
				</a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="read?genre=humor" class="genre-box-sm">
					 <div class="panel tile-1">
					 	<h4>Humor</h4>
					 </div>
				</a>
				<a href="read?genre=horror" class="genre-box-sm">
					 <div class="panel tile-5">
					 	<h4>Horror</h4>
					 </div>
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 stories-right">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="read?genre=fantasy" class="genre-box-sm">
					 <div class="panel tile-3">
					 	<h4>Fantasy</h4>
					 </div>
				</a>
				<a href="read?genre=history" class="genre-box-sm">
					 <div class="panel tile-4">
					 	<h4>History</h4>
					 </div>
				</a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="read?genre=poetry" class="genre-box-sm">
					 <div class="panel tile-5">
					 	<h4>Poetry</h4>
					 </div>
				</a>
				<a href="read?genre=short-story" class="genre-box-sm">
					 <div class="panel tile-2">
					 	<h4>Short Story</h4>
					 </div>
				</a>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<a href="read?genre=romance" class="genre-box-lg">
					 <div class="panel tile-a">
					 	<h4>Romance</h4>
					 </div>
				</a>
			</div>
		</div>
	</div>

	<?php //Display all stories here (possibly other categories) ?>

</main>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>