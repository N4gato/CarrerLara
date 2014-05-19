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

</head>
<body>


{{ Session::get('id_cour_add') }}

	<!-- This is the modal -->
<div style="width: 300px; margin-left: 500; margin-top: 150">
	<div id="addcours" class="uk-modal">
	    <div class="uk-modal-dialog">
	        <a class="uk-modal-close uk-close"></a>
				<form action="{{ Route('commit') }}" method="POST">


					<input type="text" name="url_v" class="form-control" placeholder="URL du video"> 
					<a href="">  how to generate the URL</a>
					<br />
					<input type="text" name="prog" class="form-control" placeholder="progresse en %">
							<br />
					<br />
							
					<br />
					<input type="submit" value="Ajouter" class="btn btn-primary btn-lg btn-block" >
					<br />
				</form>
		</div>
	</div>
</div>

</body>
</html>