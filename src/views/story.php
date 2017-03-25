<?php $title = '<chapter> - <story title> | kwntu' ?>

<?php ob_start() ?>

<main class="container" id="story">
	<div class="row">
		<div class="col-md-3">
			<div class="panel">
				<div class="panel story-cover text-center">
					<div class="panel-heading" style="padding: 20px;">
						<img src="assets/images/covers/wuthering-heights.jpg"
							 class="img-thumbnail img-responsive">
						
					</div>
					<h4>
						<strong>Wuthering Heights</strong>
					</h4>
					<small>by Emily Jane Brontë</small>
				</div>
				<div class="list-group chapter-list">
					<a href="#" class="list-group-item">Chapter 1</a>
					<a href="#" class="list-group-item">Chapter 2</a>
					<a href="#" class="list-group-item">Chapter 3</a>
					<a href="#" class="list-group-item">Chapter 4</a>
					<span class="list-group-item active">Chapter 5</span>
					<span class="list-group-item disabled">Chapter 6</span>
					<span class="list-group-item disabled">Chapter 7</span>
					<span class="list-group-item disabled">Chapter 8</span>
					<span class="list-group-item disabled">Chapter 9</span>
					<!-- display this page when no user logged in (guest) -->
					<a href="#"
						class="list-group-item
							   list-group-item-info
							   text-center">
				   		More Chapters</a>
				</div>
			</div>
		</div>
		<div class="col-md-7 story-body">
			<div class="panel">
				<div class="panel-heading">
					<!-- Display if the story belongs to the current user -->
					<div class="story-top" data-spy="affix" data-offset-top="75">
						<button class="btn btn-info">
							<i class="fa fa-plus"></i>
							<span>Insert chapter</span>
						</button>			
						<span class="react-icons">
							<button class="btn btn-info">
								<i class="fa fa-thumbs-o-up"></i>
							</button>				
							<button class="btn btn-info">
								<i class="fa fa-heart-o"></i>
							</button>				
							<button class="btn btn-info">
								<i class="fa fa-smile-o"></i>
							</button>				
							<button class="btn btn-info">
								<i class="fa fa-frown-o"></i>
							</button>								
						</span>	
						<div class="clearfix"></div>						
					</div>
					<h3 class="text-center">Chapter 5</h3>	
				</div>
				<div class="panel-body">
					<!-- Divide each text lines per pagination count -->
					<p>
						In the course of time Mr. Earnshaw began to fail. He had been active and healthy, yet his strength left him suddenly; and when he was confined to the chimney-corner he grew grievously irritable. A nothing vexed him; and suspected slights of his authority nearly threw him into fits. This was especially to be remarked if any one attempted to impose upon, or domineer over, his favourite: he was painfully jealous lest a word should be spoken amiss to him; seeming to have got into his head the notion that, because he liked Heathcliff, all hated, and longed to do him an ill-turn. It was a disadvantage to the lad; for the kinder among us did not wish to fret the master, so we humoured his partiality; and that humouring was rich nourishment to the child’s pride and black tempers. Still it became in a manner necessary; twice, or thrice, Hindley’s manifestation of scorn, while his father was near, roused the old man to a fury: he seized his stick to strike him, and shook with rage that he could not do it.
					</p>
					<p>
						At last, our curate (we had a curate then who made the living answer by teaching the little Lintons and Earnshaws, and farming his bit of land himself) advised that the young man should be sent to college; and Mr. Earnshaw agreed, though with a heavy spirit, for he said ‘Hindley was nought, and would never thrive as where he wandered.’
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
		<div class="col-md-2 story-recom">
			<div class="panel text-center">
				<div class="panel-heading">
					<h4>SIMILAR BOOKS</h4>
				</div>
				<div class="panel-body">					
					<img class="img-responsive img-thumbnail"
						 src="assets/images/covers/panorama.jpg"
					 	 alt="Card image">

					<img class="img-responsive img-thumbnail"
						 src="assets/images/covers/pyramids.jpg"
					 	 alt="Card image">

					<img class="img-responsive img-thumbnail"
						 src="assets/images/covers/vintage.jpg"
					 	 alt="Card image">

					<img class="img-responsive img-thumbnail"
						 	 src="assets/images/covers/historic-building.jpg"
					 alt="Card image">
				</div>
				
			</div>
		</div>
	</div>
</main>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>