<!DOCTYPE html>
<html>
<head>
	<title>Mabuhay! | kwntu</title>

	<!-- meta tags -->	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Raleway font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<!-- Lora font -->
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

	<!-- Font Awesome! -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/font-awesome.min.css">

	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="styles/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- custom style -->
	<!-- <link rel="stylesheet" href="styles/style.css"> -->

	<!-- jQuery -->
	<!-- <script src="scripts/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- <script src="scripts/bootstrap.min.js"></script> -->

	<!-- custom Javascript -->
	<!-- <script src="scripts/main.js"></script> -->

	<style>
		body {
			font-family: "Raleway",Arial;	
			background-color: #0a0020;
			color: #866183;
			font-size: 15px;
		}

		*.container {
			width: 1000px;
		}

		h1, h2, h3, h4 {
			font-family: "Lora","Times New Roman";	
		}

		.navbar,
		.jumbotron {
			border-radius: 0 !important;
		}

		.navbar {	
    		background-color: #554b6b;
    		/*color: #866183;*/
			margin-bottom: 0;
			border: 0;
		}

		.navbar > .container-fluid {
			padding: 0;
		}

		.navbar > .container-fluid > .navbar-collapse {
			padding: 0 10px;
		}

		.navbar-nav {
			width: 100%;
			text-align: center;
		}
		.navbar-nav > li {
			float: none;
			display: inline-block;
		}

		.navbar-brand {
			float:none;
		}

		.popover {
			width: 225px;
			left: -75px !important;
		}

		.navbar-right {
		    margin-right: 0; 
		}

		input.form-control {}

		.logo-img {
			padding: 5px;
		}

		.logo-img img {
			width: 84px;
		}

		.jumbotron {
    		height: 600px;
    		margin-bottom: 0 !important;
    		padding-top: 130px;
    		padding-bottom: 10px;		
    		color: #f5f5f5;
    		background: linear-gradient(
					      rgba(41, 7, 36, 0.7), 
					      rgba(41, 7, 36, 0.7)
					    ),
    					url("assets/images/hero.jpg") 
							no-repeat
							bottom center/cover;
		}

		.jumbotron > * {
			margin-top: 60px;
		}

		.jumbotron > h2 {
		    width: 400px;
		    margin: 60px auto 0;			
		}

		.arrow-scroll {			
		    bottom: 0;
		    position: absolute;
		    left: 48%;
		}

		#about-section {
			margin: 20px 0;
		}

		.about-buttons {	
			position: absolute;
			z-index: 1;
    		margin-left: 370px;
			margin-top: -24px;
		}

		.about-buttons > a {			
		    width: 40px;
		    height: 40px;
		    border: 1px solid white;
		    padding: 5px;
		    text-align: center;
		    border-radius: 50%;
		    background: white;
		    font-weight: bold;
		    font-size: 1.5em;
		    float: left;
		    margin: 3px;
		    text-decoration: none;
		}

		.about-content {
			margin-top: 40px;
		}

		.about-content > div > div {			
    		background: lightblue;
    		padding: 10px 30px;
    		height: 500px;
		}

		.about-content > div > div > div:nth-child(even) {
			text-align: right;
			float: right;
		}

		/*footer*/

		#social a {
			float: right;
			margin: 0 5px;
    		margin-bottom: 10px;
		}
	</style>

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
								<span class="glyphicon glyphicon-home"></span>	        		
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
								<span class="glyphicon glyphicon-search"></span>	        	
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

	<script type="text/javascript">	

        $(document).ready(function() {
        	$("[data-toggle=popover]").popover({
			    html: true, 
				content: function() {
          			return $('#popover-content').html();
        		}
			});

			$('#home-next').click(function(){
			    $('html, body').animate({
			        scrollTop: $("#about-section").offset().top
			    }, 1500);
			});
        });

	</script>

</body>
</html>