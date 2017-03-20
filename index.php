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
	<!-- <link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css"> -->

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
		}

		h1, h2, h3, h4 {
			font-family: "Lora","Times New Roman";	
		}/*

		.navbar {
			border-radius: 0;
		}
*/
		  .navbar-nav {
		    width: 100%;
		    text-align: center;

		    > li {
		      float: none;
		      display: inline-block;
		    }
		  }
/*

		.navbar-brand {
			float:none;
		}

		.popover {
			width: 200px;
			left: -85px !important;
		}

		.navbar-right {
		    margin-right: 0; 
		}

		input.form-control {}

		div#popover-content {
			width: 200px;
		}*/
	</style>

</head>
<body>

	<!-- <nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">
					<span class="glyphicon glyphicon-home"></span>
				</a>
			</li>
			<li><a href="#">Genre</a></li>
			<li><a href="#">Author</a></li>
			<li>
				<a href="#">kwntu</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"> About</a></li>
			<li>
				<a href="#"
					data-toggle="popover"
					title=""
					data-placement="auto"
					data-original-title="Login">
						Login
						<strong class="caret"></strong>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-search"></span>
				</a>
			</li>
		</ul>
	</nav> -->

	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand Logo</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="pull-left"><a href="#">Home</a></li>
	        <li class="pull-left"><a href="#">Genres</a></li>
	        <li class="pull-left"><a href="#">Authors</a></li>
	        <li><a href="#">kwntu</a></li>
	        <li class="social pull-right"><a href="#">About</a></li>
	        <li class="social pull-right"><a href="#">Login</a></li>
	        <li class="social pull-right"><a href="#">Search</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

    <div id="popover-content" class="hide">
      <form role="form">
          <div class="form-group">
            <label for="user">User</label>
            <input type="text" class="form-control" id="user" placeholder="User">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-default">Sign in</button>
        </form>
    </div>

	<script type="text/javascript">	

        $(document).ready(function() {
        	$("[data-toggle=popover]").popover({
			    html: true, 
				content: function() {
          			return $('#popover-content').html();
        		}
			});
        });

	</script>

</body>
</html>