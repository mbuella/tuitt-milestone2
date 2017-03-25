<header class="container">
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button"
					class="navbar-toggle"
					data-toggle="collapse"
					data-target="#main-nav">
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
			<div class="collapse navbar-collapse" id="main-nav">
				<ul class="nav navbar-nav">
					<li class="pull-left">
						<a href="#">
							<span class="fa fa-home"></span>	        		
						</a>
					</li>
					<li class="pull-left"><a href="genres">Genres</a></li>
					<li class="pull-left"><a href="authors">Authors</a></li>

					<!-- Centered logo image -->
					<li class="hidden-xs logo-img">
						<img src="assets/images/kwntu.png" alt="kwntu">
					</li>

					<!-- Items on the right (first entry is last to display) -->
					<li class="pull-right">
						<form class="search-form">
							<input name="search-keyword"
								   class="search-box form-control"
								   placeholder="Search author, genre, etc..."></input>
						</form>
						<button class="search-button btn btn-link navbar-btn">
							<span class="fa fa-search"></span>        	
						</button>
					</li>
					<li class="pull-right">
						<button class="btn btn-link navbar-btn" 
							data-toggle="popover"
							title=""
							data-placement="auto">
							Login
							<strong class="caret"></strong>
						</button>
					</li>
					<li class="pull-right">
						<a href="#about">About</a>
					</li>
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
          <a href="signup" class="btn btn-link">Register</a>
        </form>
    </div>		
</header>