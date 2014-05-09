<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="../public/css/uikit.min.css">
	<link rel="stylesheet" href="../public/css/tree.css">

	<title>Make your Career</title>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

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
			<?php 
	if (Auth::check()) {
		# code...
?>
			<!-- --------------------------------------------------------The Nav-->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active">
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
									<a href="#my-id" data-uk-offcanvas>Register</a>
								</li>
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
		<?php
}else{
 ?>
		<!--The loging Forme -->
		<ul class="nav navbar-nav navbar-right">
			<li>

				<form class="navbar-form navbar-right" role="form" method="POST" action="{{ Route('Authentification') }}">
					<div class="form-group">
						<input type="text" name="username" placeholder="Username" class="form-control"></div>
					<div class="form-group">
						<input type="CNE" name="pwd" placeholder="Password" class="form-control"></div>
					<button type="submit" name="submit" class="btn btn-success">Sign in</button>
				</form>
			</li>
		</ul>
		<?php } ?>
		<!-- /.navbar-collapse -->
	</div>

	<!-- /.container-fluid -->
</div>
<article>

	<div class="acc">

		<div class="subacc">
			<!-- --------------------------------------------------------the main-->

			<?php 
	if (Auth::check()) {
		
?>
			<div>
				<div class="fb-share-button" data-href="https://www.facebook.com/otmane.bouayad.9" 
			data-type="button_count" data-uk-toggle="{target:'#my-id'}"></div>

			</div>
			<br />
			<div>
				<!-- Place this tag where you want the share button to render. -->
				<div class="g-plus" data-action="share" data-annotation="bubble"></div>

				<!-- Place this tag after the last share tag. -->
				<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
			</div>
			<?php 
				}else{
?>
			<!-- This is a button toggling the off-canvas sidebar -->
			<button type="button" class="btn btn-primary btn-lg" data-uk-offcanvas="{target:'#my-id'}">Register Now</button>
			<?php 
}
 ?>

			<!-- This is the off-canvas sidebar -->
			<div id="my-id" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<br />
					<br />
					<br />

					<div class="uk-panel">Regestration</div>

					<div class="uk-panel">
						<form action="{{action('UserController@register')}}" method="POST">
							<fieldset>
								<legend></legend>
							</fieldset>
							<br />
							<br />
							<br />
							<input class="form-control input-sm"  name="reg_name" type="text" placeholder="Name">
							<br />
							<input class="form-control input-sm"  name="reg_prenom" type="text" placeholder="Prenom">
							<br />
							<input class="form-control input-sm"  name="reg_mail" type="text" placeholder="Mail">
							<br />
							<input class="form-control input-sm"  name="reg_CNE" type="text" placeholder="CNE = mdp">
							<br />
							<input class="form-control input-sm"  name="reg_username" type="text" placeholder="UserName">
							<br />

							<button type="submit" class="btn btn-primary btn-sm">Small Regist</button>
						</form>
						<br />

						<div class="uk-panel">
							Vous pouvez a tout memont suprimer vitre compte ou c
							hanger votre mot de passe. il est possible que votre compte 
							subis un controle administrative
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>

	<div class="uk-grid">
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-fade" 
			data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true ,delay:1000}">
				<h3>Fade</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4 uk-push-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-scale-up"
			 data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true ,delay:1000}">
				<h3>Scale up</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4 uk-push-3-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true}">
				<h3>Slide top</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4 uk-push-2-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">
				<h3>Slide bottom</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4 uk-push-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true}">
				<h3>Slide right</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">
				<h3>Slide left</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</div>
	<div class="uk-grid">
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
				<h3 class="uk-panel-title">Delay</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
				<h3 class="uk-panel-title">Delay</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-fade', delay:600, repeat: true}">
				<h3 class="uk-panel-title">Delay</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
		<div class="uk-width-medium-1-4">
			<div class="uk-panel uk-panel-box uk-scrollspy-init-inview" data-uk-scrollspy="{cls:'uk-animation-fade', delay:900, repeat: true}">
				<h3 class="uk-panel-title">Delay</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
	</div>
</article>

</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/tree.js"></script>
</html>