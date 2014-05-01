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
<style>

	.table_u{

		border: 5px;
		padding: 5px;
	}

</style>

</head>
<body >

<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Brand</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="">ShowUsers</a>
				</li>
				<li>
					<a href="#">Link</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!--The container-------------------------------------------------------------------------->

<div>
	<?php 

	$users = User::where('type', '=', 0 )->get();
?>

    <table  class="table table-striped"	>
    	<tr>
			<td>#ID</td>
    		<td>Name</td>
			<td>eMail</td>
    		<td>Created at</td>
    		<td>Updated at</td>
    		<td>Make Admin</td>
    		<td>Make prof</td>
    	</tr>

 @foreach ($users as $user)
<tr>
		<td>{{ $user->id_u }}</td>	
		<td>{{ $user->name_u }}</td>
		<td>{{ $user->mail_u }}</td>		
		<td>{{ $user->created_at }}</td>
		<td>{{ $user->updated_at }}</td>	
		<td><a href="makeAdmin/{{ $user->id_u }}">makeAdmin</a></td>
		<td><a href="makeProf/{{ $user->id_u }}">makeProf</a></td>
    </tr>
@endforeach

    </table>

</div>

</body>
</html>