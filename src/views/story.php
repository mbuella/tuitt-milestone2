<?php $title = '<chapter> - <story title> | kwntu' ?>

<?php ob_start() ?>

<main class="container" id="story">
	<div class="row">
		<div class="col-md-3">
			<div class="panel">
				<div class="panel story-cover text-center">
					<div class="panel-heading" style="padding: 20px;">
						<img src="assets/images/covers/bata-bata.jpg"
							 class="img-thumbnail img-responsive">						
					</div>
					<h4>
						<strong>Bata, Bata... Pa'no Ka Ginawa?</strong>
					</h4>
					<small>ni Lualhati Bautista</small>
				</div>
				<div class="list-group chapter-list">
					<a href="#" class="list-group-item">Kabanata 1</a>
					<a href="#" class="list-group-item">Kabanata 2</a>
					<a href="#" class="list-group-item">Kabanata 3</a>
					<a href="#" class="list-group-item">Kabanata 4</a>
					<span class="list-group-item active">Kabanata 5</span>
					<span class="list-group-item disabled">Kabanata 6</span>
					<span class="list-group-item disabled">Kabanata 7</span>
					<span class="list-group-item disabled">Kabanata 8</span>
					<span class="list-group-item disabled">Kabanata 9</span>
					<!-- display this page when no user logged in (guest) -->
					<a href="#"
						class="list-group-item
							   list-group-item-info
							   text-center">
				   		Higit pang mga Kabanata</a>
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
								<i class="fa fa-bookmark-o"></i>
							</button>				
							<button class="btn btn-info">
								<i class="fa fa-heart-o"></i>
							</button>						
						</span>
						<button class="btn btn-info">
							<i class="fa fa-trash"></i>
							<span>Delete chapter</span>
						</button>				
						<div class="clearfix"></div>						
					</div>
					<h3 class="text-center">Kabanata 5</h3>	
				</div>
				<div class="panel-body">
					<!-- Divide each text lines per pagination count -->
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas diam sit amet nulla porttitor, sed luctus dolor consequat. Ut vehicula nunc nec libero cursus, nec convallis risus posuere. In finibus, nunc vitae faucibus bibendum, augue mauris bibendum quam, eu mattis eros urna aliquam augue. Sed rhoncus scelerisque est, eget consequat quam commodo et. Etiam faucibus metus pretium felis pulvinar ullamcorper. Nam finibus, leo a luctus faucibus, velit dolor suscipit nibh, eu pulvinar nisl turpis nec neque. Maecenas tellus sem, aliquet et tellus sed, suscipit vulputate nulla. Aliquam erat volutpat. Nam nec est eu risus vehicula imperdiet nec interdum ex. Fusce tristique iaculis sagittis.
					</p>
					<p>
					Aenean justo turpis, fermentum id magna eget, vehicula blandit purus. Ut auctor urna a metus bibendum fermentum. Suspendisse ultrices dignissim pellentesque. Donec condimentum, metus dictum gravida scelerisque, tortor dui porta ligula, eu laoreet odio sem non neque. Maecenas vitae sagittis mauris. Phasellus non leo in ex bibendum ultrices. Curabitur egestas, risus nec efficitur ultrices, urna sem scelerisque purus, vitae malesuada ex est ut sem. Ut rutrum, odio non accumsan laoreet, leo nisi fringilla nisi, nec congue felis erat viverra lacus. In vulputate odio quis ex suscipit, vel convallis urna sodales. Nam auctor arcu a varius eleifend. Duis vitae tellus ut dolor condimentum iaculis eu at velit. Morbi mi felis, congue ut arcu et, faucibus varius ex. Etiam tincidunt vel lacus posuere viverra.
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
							Nakaraang <span class="hidden-xs">Kabanata</span>
						</a>						
					</div>
					<div class="pull-right">
						<a href="#" class="btn btn-success">
							Susunod na <span class="hidden-xs">Kabanata</span>
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

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>