<?php $title = 'Mabuhay! | kwntu' ?>

<?php ob_start() ?>

<main class="container">	
	<!-- Jumbotron -->	
	<div class="jumbotron home-page text-center">
		<div class="row">
			<h2>Halina't magbasa ng mga kwentong sariling atin.</h2> 

			<a class="btn btn-primary btn-lg" href="genres">Tara na!</a>

			<div class="arrow-scroll">
				<a class="btn btn-link" id="home-next">
					<span class="fa fa-angle-down fa-3x"
						  aria-hidden="true">
					</span>									
				</a>
			</div>			
		</div>
	</div>

	<!-- About -->
	<?php
	$delete = '<div class="carousel slide" data-ride="carousel" id="about">
			<!-- button div -->
			<div class="about-buttons">
				<a href="#" data-target="#about" data-slide-to="0" class="active">k</a>
				<a href="#" data-target="#about" data-slide-to="1">w</a>
				<a href="#" data-target="#about" data-slide-to="2">n</a>
				<a href="#" data-target="#about" data-slide-to="3">t</a>
				<a href="#" data-target="#about" data-slide-to="4">u</a>
				<div class="clearfix"></div>
			</div>
			<!-- content div -->
			<div class="about-content carousel-inner" role="listbox">
				<div class="item active">
					<div class="row">
						<div class="col-md-3">
							<h3>Kasaysayan</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-md-3">
							<h3>Wika</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
				</div>
				<div class="item">	
					<div class="row">
						<div class="col-md-3">
							<h3>Nakakapagpalibang</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-md-3">
							<h3>Tagalog</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>				
				</div>
				<div class="item">
					<div class="row">
						<div class="col-md-3">
							<h3>Ugnayan</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>			
				</div>
			</div>
		</div>'
	?>

	<div class="row" id="about">
		<div class="col-md-12">
			<h2 class="main-heading">Ano ang kwntu?</h2>
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								<h3>Kasaysayan</h3>
							</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse in">
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								<h3>Wika</h3>
							</a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								<h3>Nakakapagpalibang</h3>
							</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">							
								<h3>Tagalog</h3>
							</a>
						</h4>
					</div>
					<div id="collapse4" class="panel-collapse collapse">
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">						
								<h3>Ugnayan</h3>							
							</a>
						</h4>
					</div>
					<div id="collapse5" class="panel-collapse collapse">
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div> 
		</div>
	</div>

</main>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>