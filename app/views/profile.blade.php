<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../public/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" href="../public/css/tree.css">

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
					<li>
						<a href="{{ Route('learn') }}
">Learn</a>
					</li>
					<li>
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
					<li class="active">
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

		<div class="container demo-3">
		<br />
		<br />
			<!-- Top Navigation -->
			<ul class="grid cs-style-3">
				<li>
					<figure>
						<img src="http://winsupersite.com/site-files/winsupersite.com/files/imagecache/galleryformatter_slide_penton/gallery_images/xbox-video-01.jpg" alt="img04" >
						<figcaption>
							<h3>Watch Videos tutorial</h3>
							<span>Nagato</span>
							<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://cdn.windows8freeware.com/wp-content/uploads/2012/03/windows-8-reader-app.png" alt="img01">
						<figcaption>
							<h3>Read PDF</h3>
							<span>Nagato</span>
							<a href="http://dribbble.com/shots/1115632-Camera">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://www.c-sharpcorner.com/UploadFile/7e39ca/send-message-using-windows-8-messaging-app/Images/Start-Scree-Mess-Windows8.jpg" alt="img06">
						<figcaption>
							<h3>Send a Message</h3>
							<span>Nagato</span>
							<a href="http://dribbble.com/shots/1118904-Game-Center">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://winsupersite.com/site-files/winsupersite.com/files/archive/winsupersite.com/content/content/142231/win8_arm_cal1_0.jpg" alt="img02">
						<figcaption>
							<h3>Brows your calendar</h3>
							<span>Nagato</span>
							<a href="http://dribbble.com/shots/1115960-Music">Take a look</a>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div><!-- /container -->

</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/toucheffects.js"></script>
</html>