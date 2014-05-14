<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/css/uikit.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../public/css/tree.css">

	<title>Make your Career</title>
</head>
	<nav>
		
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
						<li class="active">
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

	</div>
</nav>

<body>

<br />
<br />

<div class="col-md-8">
	<div class="panel panel-primary cours">
		<div class="panel-heading">
			<h3 class="panel-title">Ajouter Un cours</h3>
		</div>
		<div class="panel-body">
			<div style="float: left">
				<script type="text/javascript">if (typeof swfobject == "undefined") {document.write('<script type="text/javascript" src="http://cpanel.hostinger.co.uk/scripts/swfobject.js"><\/script>');}swfobject.registerObject('referralBanner848', '8.0.0');</script>
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="160" height="600" id="referralBanner848">
				<param name="movie" value="http://www.hostinger.co.uk/banners/en/hostinger-160x600-1.swf?clickTAG=http%3A%2F%2Fapi.hostinger.co.uk%2Fredir%2F3546609" />
				<!--[if !IE]>
				-->
				<object type="application/x-shockwave-flash" data="http://www.hostinger.co.uk/banners/en/hostinger-160x600-1.swf?clickTAG=http%3A%2F%2Fapi.hostinger.co.uk%2Fredir%2F3546609" width="160" height="600">
					<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflashplayer">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
					<!--[if !IE]>--></object>
				<!--<![endif]-->
			</object>
		</div>
		<br />
		<br />
		<div style="width: 75%; float: right;">
			<form action="{{Route('AddCours')}}" method="POST">

				<input type="text" name="url_i" class="form-control" placeholder="URL de l'icone">
				<br />
				Categorie :
				<select name="categorie" class="form-control">
					<option value="Devlopement Web" class="form_control">Devlopement Web</option>
					<option value="Analyse Mathematique" class="form_control">Analyse Mathematique</option>
					<option value="Physique" class="form_control">Physique</option>
					<option value="Programation" class="form_control">Programation</option>
					<option value="Design" class="form_control">Design</option>
					<option value="Comptabilité" class="form_control">Comptabilité</option>
					<option value="Culture general" class="form_control">Culture general</option>
					<option value="Politique" class="form_control">Politique</option>
					<option value="Economie" class="form_control">Economie</option>
				</select>
				<br />
				<br />
				<input type="text" name="date_deb" class="form-control" value="{{ date("Y/m/d") }}" placeholder="{{ date("Y/m/d") }}">
				<br />
				<input type="text" name="dat_fin" class="form-control" placeholder=" Date du fin de cours" id="datepicker">
				<br />
				Type :
				<select name="type" id="" class="form-control">
					<option value="Video" class="form_control">Video</option>
					<option value="PDF" class="form_control">PDF</option>
				</select>
				<br />
				Reglement :
				<select name="reglement" id="" class="form-control">
					<option value="payant" class="form_control">Payant</option>
					<option value="free" class="form_control">Free</option>
				</select>
				<br />
				<input type="submit" value="Ajouter" class="btn btn-primary btn-lg btn-block" >
				<br />
			</form>
		</div>
	</div>
</div>
</div>

<div class="col-md-4">
	<div class="panel panel-primary cours">
		<div class="panel-heading">
			<h3 class="panel-title">Vos cours</h3>
		</div>
		
		<ul >
<?php 
if($er){
 
			for ($j = 0 ; $j < $i ; $j++){
			
			$help =  $img[$j]  ;
			$help2 = $id_c[$j] ;
			$progggg =  $progress[$j];

?>
			<il><img src="{{$help}}" style="width: 100px; heigh: 100px;" ></il>
			<il> <p>Categorie : {{ $cat[$j] }}</p></il>
			
			<il> <a href="addv/{{ $help2 }}"> Ajouter un video a ce cours</a></il><br />

			<div class="uk-progress uk-progress uk-progress-danger uk-progress-striped uk-active">
   				 <div class="uk-progress-bar" style="width: {{ $progggg }}%;">{{ $progggg }}%</div>
			</div>
			<hr>
<?php 
			}
}
 ?>
		</ul>
			
		
	</div>
</div>
</div>


</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/uikit.min.js"></script>

</html>