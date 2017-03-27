<?php $title = 'Classics | kwntu' ?>

<?php ob_start() ?>

<main class="container">
	<div class="row" id="stories-home">
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
<!-- 			<a href="story">
				<img class="img-responsive img-thumbnail"
					 src="assets/images/covers/wuthering-heights.jpg"
				 	 alt="Card image">
				<div>
					<h5>Hello World!</h5>
				</div>
			</a>	 -->		
			<div class="story">
				<a href="story">
					<img class="img-responsive img-thumbnail"
						 src="assets/images/covers/bata-bata.jpg"
					 	 alt="Card image">
					<div class="panel hide">
						<i class="fa fa-bookmark fa-2x"></i>
						<h4>
							<strong>Bata, Bata... Pa'no Ka Ginawa?</strong>
						</h4>
						<h5>ni Lualhati Bautista</h5>
						<small>
							Hanggang sa ang bata ay hindi na bata kundi ama, o ina. Ano ang ituuro niya ngayon sa kanyang mga anak?
						</small>
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
			<div class="story">
				<a href="#">
				<img class="img-responsive img-thumbnail"
					 src="assets/images/covers/illustrado.jpg"
				 	 alt="Card image">
						<div class="panel hide">
							<h4><strong>Illustrado</strong></h4>
							<h5>ni Miguel Syjuco</h5>
							<small>
								Garnering international prizes and acclaim before its publication, Ilustrado has been called "brilliantly conceived...
							</small>
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
			<div class="story">
				<a href="#">
				<img class="img-responsive img-thumbnail"
					 src="assets/images/covers/titser.jpg"
				 	 alt="Card image">
						<div class="panel hide">
							<h4><strong>Titser</strong></h4>
							<h5>ni Liwayway A. Arceo</h5>
							<small>
								Tells of how Amelita and Mauro engage themselves in answering the needs of their community and 	succeed in its upliftment and development.
							</small>
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
			<div class="story">
				<a href="#">
				<img class="img-responsive img-thumbnail"
					 src="assets/images/covers/ang-tundo-man-may-langit-din.jpg"
				 	 alt="Card image">
						<div class="panel hide">
							<h4><strong>Ang Tundo Man May Langit Din</strong></h4>
							<h5>ni Andres Cristobal Cruz</h5>
							<small>
								As in the Noli, we have in Ang Tundo Man a story of individuals in love...
							</small>
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
			<div class="clearfix"></div>	
		</div>
		
	</div>

</main>

<!-- Salvattore -->
<script src="vendors/salvattore/scripts/salvattore.min.js"></script>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>