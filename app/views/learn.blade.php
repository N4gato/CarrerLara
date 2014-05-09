<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/css/uikit.min.css">
<link rel="stylesheet" href="../public/css/tree.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	

	<title>Make your Career</title>
</head>
<body>
	------------------------------------------------
	<div class="navbar navbar-inverse navbar-fixed-top" >
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" 
				data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" id="logo" href="#">Career</a>
			</div>

			<!-- --------------------------------------------------------The Nav-->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li >
						<a href="{{ Route('home') }}
">Home</a>

					</li>
					<li class="active">
						<a href="{{ Route('learn') }}
">Learn</a>
					</li>
					<li >
						<a href="{{ Route('teach') }}
">Teach</a>
					</li>
					<li class="dropdown">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Classed <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">

								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</li>
				</ul>
				<!-- --------------------------------------------------------User name and manager-->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="{{ Route('profile') }}">{{ Auth::user()->username }}</a>
					</li>
					<li>
						<a href="#manager" data-uk-offcanvas>Action Manager</a>
					</li>
				</ul>
			</li>

			<!-- --------------------------------------------------------Manager-->
			<div id="manager" class="uk-offcanvas">
				<div class="uk-offcanvas-bar uk-offcanvas-bar-flip uk-offcanvas-bar-show">
					<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>

						<li class="uk-active">
							<a href="">Action Manager</a>
						</li>

						<li class="uk-parent">
							<a href="{{ Route('logout') }}">Log out</a>
						</li>

						<li class="uk-parent">
							<a href="#mdpch" data-uk-modal>Change Password</a>
						</li>

						<li>
							<a href="">Item</a>
						</li>

						<li class="uk-nav-header">Header</li>
						<li class="uk-parent">
							<a href=""> <i class="uk-icon-star"></i>
								Parent
							</a>
						</li>
						<li>
							<a href=""> <i class="uk-icon-twitter"></i>
								Item
							</a>
						</li>
						<li class="uk-nav-divider"></li>
						<li>
							<a href="">
								<i class="uk-icon-rss"></i>
								Item
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- --------------------------------------------------------Change password-->
			<div id="mdpch" class="uk-modal">
				<div class="uk-modal-dialog">
					<a class="uk-modal-close uk-close"></a>

					<form action="{{Route('change')}}" method="POST">
						<h1>Change your password</h1>
						<br />
						<br />
						<input class="form-control input-sm" name="username" type="text" value="{{ Auth::user()->
						username }}
						" placeholder="UserName">
						<br />
						<input class="form-control input-sm" type="text" name="mail" id="maillll" value="{{ Auth::user()->
						mail_u }}" onblur="maile(this.id)">
						<small>You gonna receive a message</small>
						<br />
						<br />

						<input class="form-control input-sm" id="newpwd" name="newpwd" type="password" placeholder="New password">
						<br />

						<input class="form-control input-sm" id="confirmepwd" name="confirmepwd" type="password" placeholder="Confirme password">
						<br />

						<br />
						<br />
						<input type="submit" name="submit2" class="btn btn-primary btn-sm" onmousemove="password()" value="Change Now"></form>
				</div>
			</div>

		</div>

		<!-- /.navbar-collapse -->
	</div>

	<!-- /.container-fluid -->
</div>
------------------------------------------------
<br />
<br />
<br />
<br />
<div class="col-md-8">
	<div class="panel panel-primary cours">
		<div class="panel-heading">
			<h3 class="panel-title">Videos</h3>
		</div>
		<?php 
	$i=1;
	while ( $i <= 10) {
		# code...
	 ?>
		<div class="media">
			<a class="pull-left" href="#">
				<img class="media-object taill" src="http://upload.wikimedia.org/wikipedia/commons/thumb
				/6/61/HTML5_logo_and_wordmark.svg/512px-HTML5_logo_and_wordmark.svg.png" alt="..."></a>
			<div class="media-body">
				<h4 class="media-heading">Media heading</h4>

				<p>blablalalalalalalalalalalalalalalaalalalalalalalalal</p>
			</div>
		</div>
		<?php $i++; } ?></div>
</div>
<div class="col-md-4">
	<div class="panel panel-primary cours">
		<div class="panel-heading">
			<h3 class="panel-title">Cours</h3>
		</div>
		<?php 
	$i=1;
	while ( $i <= 10) {
		# code...
	 ?>
		<div class="panel-body">
			<a href="#">
				Link to Cours
				<?php echo $i ?></a>
		</div>
		<?php $i++; } ?></div>
</div>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/uikit.min.js"></script>
</html>