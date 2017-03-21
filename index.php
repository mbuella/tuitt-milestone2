<!DOCTYPE html>
<html>
<head>
	<title>Mabuhay! | kwntu</title>


	<!-- meta tags -->	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- FONTS -->

	<!-- Raleway font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<!-- Lora font -->
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

	<!-- Font Awesome! -->
	<link rel="stylesheet" type="text/css" href="vendors/fontawesome/styles/font-awesome.min.css">


	<!-- ASSETS TO USE IN DEVELOPMENT (for faster loading time)  -->

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="vendors/bootstrap/styles/bootstrap.min.css">

	<!-- jQuery -->
	<script src="vendors/jquery/scripts/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="vendors/bootstrap/scripts/bootstrap.min.js"></script>


	<!-- CUSTOM -->

	<!-- custom style -->
	<link rel="stylesheet" href="assets/styles/main.css">

	<!-- custom Javascript -->
	<script src="assets/scripts/main.js"></script>

</head>
<body>
	<header class="container">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button"
						class="navbar-toggle"
						data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
					<span class="navbar-brand logo-img visible-xs">	      		
						<img src="assets/images/kwntu.png" alt="kwntu">
					</span>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="pull-left">
							<a href="#">
								<span class="fa fa-home"></span>	        		
							</a>
						</li>
						<li class="pull-left"><a href="#">Genres</a></li>
						<li class="pull-left"><a href="#">Authors</a></li>

						<!-- Centered logo image -->
						<li class="hidden-xs logo-img">
							<img src="assets/images/kwntu.png" alt="kwntu">
						</li>

						<!-- Items on the right (first entry is last to display) -->
						<li class="pull-right">
							<a href="#">
								<span class="fa fa-search"></span>	        	
							</a>
						</li>
						<li class="pull-right">
							<a href="#"
								data-toggle="popover"
								title=""
								data-placement="auto">
								Login
								<strong class="caret"></strong>
							</a>
						</li>
						<li class="pull-right"><a href="#">About</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

	    <div id="popover-content" class="hide">
	      <form role="form">
	          <div class="form-group">
	            <label for="user">Username</label>
	            <input type="text" class="form-control" id="user" placeholder="Username">
	            <label for="password">Password</label>
	            <input type="password" class="form-control" id="password" placeholder="Password">
	          </div>
	          <button type="submit" class="btn btn-success">Sign in</button>
	          <span>or</span>
	          <a href="#" class="btn btn-link">Register</a>
	        </form>
	    </div>		
	</header>

	<main class="container">	
		<!-- Jumbotron -->	
		<div class="jumbotron text-center">
			<h2>Halina't magbasa ng mga kwentong sariling atin.</h2> 

			<a class="btn btn-primary btn-lg" href="#">Tara na!</a>

			<div class="arrow-scroll">
				<a class="btn btn-link" id="home-next">
					<span class="fa fa-angle-down fa-3x"
						  aria-hidden="true">
					</span>									
				</a>
			</div>
		</div>

		<!-- About -->
		<div class="carousel slide" data-ride="carousel" id="about-section">
			<!-- button div -->
			<div class="about-buttons">
				<a href="#" data-target="#about-section" data-slide-to="0" class="active">k</a>
				<a href="#" data-target="#about-section" data-slide-to="1">w</a>
				<a href="#" data-target="#about-section" data-slide-to="2">n</a>
				<a href="#" data-target="#about-section" data-slide-to="3">t</a>
				<a href="#" data-target="#about-section" data-slide-to="4">u</a>
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
		</div>
	</main>

	<footer class="container navbar-static-bottom">
		<div class="row">
			<div class="col-md-9 col-sm-6 col-xs-12" id="footer-left">	
				<span class="fa fa-copyright"></span> 2017 kwntu.ph
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12" id="footer-right">		
				<div id="social">	
					<a href="#">
						<i data-original-title="Google+" data-toggle="tooltip" class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
					</a>
					<a href="#">
						<i data-original-title="Instagram" data-toggle="tooltip" class="fa fa-instagram fa-2x" aria-hidden="true"></i>
					</a>	
					<a href="#">
						<i data-original-title="Twitter" data-toggle="tooltip" class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
					</a>			
					<a href="#">
						<i data-original-title="Facebook" data-toggle="tooltip" class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
					</a>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>