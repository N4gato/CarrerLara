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
<h2>Gestion des Utilisateur</h2>

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

<div>
<?php 

	$cours = Cours::all();
?>
<h2>Gestion des cours</h2>
   <table  class="table table-striped"	>
    	<tr>
			<td>#ID</td>
    		<td>Categorie </td>
			<td>date_Debut</td>
			<td>date_Fin</td>
			<td>Type</td>
    		<td>Created at</td>
    		<td>Updated at</td>
    		<td>Suprimer</td>
    	</tr>

 @foreach ($cours as $cour)
<tr>
		<td>{{ $cour->id_c }}</td>	
		<td>{{ $cour->categorie }}</td>
		<td>{{ $cour->date_deb }}</td>		
		<td>{{ $cour->date_fin }}</td>		
		<td>{{ $cour->type_cours }}</td>		
		<td>{{ $cour->created_at }}</td>
		<td>{{ $cour->updated_at }}</td>	
		<td><a href="supcour/{{ $cour->id_c }}">Suprimer</a></td>
		
    </tr>
@endforeach

    </table>
</div>








<div>
<?php 

	$videos = Video::all();
?>
<h2>Gestion des Video</h2>
   <table  class="table table-striped"	>
    	<tr>
			<td>#ID</td>
    		<td>id_c </td>
	 		<td>Created at</td>
    		<td>Updated at</td>
    		<td>Suprimer</td>
    	</tr>

 @foreach ($videos as $video)
<tr>
		<td>{{ $video->id_v }}</td>	
		<td>{{ $video->id_c }}</td>	
		<td>{{ $video->created_at }}</td>
		<td>{{ $video->updated_at }}</td>	
		<td><a href="supvideo/{{ $video->id_v }}">Suprimer</a></td>
		
    </tr>
@endforeach

    </table>
</div>





<div>
<?php 

	$coms = Comment::all();
?>
<h2>Gestion des Comment</h2>
   <table  class="table table-striped"	>
    	<tr>
			<td>#ID</td>
    		<td>id_c </td>
    		<td>Comment </td>
    		<td>Poster </td>
	 		<td>Created at</td>
    		<td>Updated at</td>
    		<td>Suprimer</td>
    	</tr>

 @foreach ($coms as $com)
<tr>
		<td>{{ $com->id_com }}</td>	
		<td>{{ $com->id_v }}</td>	
		<td>{{ $com->comm }}</td>
		<td>{{ $com->poster }}</td>

		<td>{{ $com->created_at }}</td>
		<td>{{ $com->updated_at }}</td>	
		<td><a href="supcom/{{ $com->id_com }}">Suprimer</a></td>
		
    </tr>
@endforeach

    </table>
</div>


<div>
<?php 

	$profs = Prof::all();
?>
<h2>Gestion des Prof</h2>
   <table  class="table table-striped"	>
    	<tr>
			<td>#ID</td>
    		<td>Name </td>
    		<td>Prenom </td>
    		<td>CIN </td>
    		<td>Mail </td>
	 		<td>Created at</td>
    		<td>Updated at</td>
    		<td>Action</td>
    	</tr>

 @foreach ($profs as $prof)
<tr>
		<td>{{ $prof->id_p }}</td>	
		<td>{{ $prof->name }}</td>	
		<td>{{ $prof->prenom }}</td>
		<td>{{ $prof->CIN }}</td>
		<td>{{ $prof->mail_p }}</td>

		<td>{{ $prof->created_at }}</td>
		<td>{{ $prof->updated_at }}</td>	
		<td><a href="revocprof/{{ $prof->id_com }}">Suprimer</a></td>
		
    </tr>
@endforeach

    </table>
</div>

<div>
<?php 

	$users = User::where('admin' , '=' , 1)->get();
?>
<h2>Gestion des Admin</h2>
   <table  class="table table-striped"	>
    	<tr>
			<td>#ID</td>
    		<td>Name </td>
    		<td>Prenom </td>
    		<td>CIN </td>
    		<td>Mail </td>
	 		<td>Created at</td>
    		<td>Updated at</td>
    		<td>Action</td>
    	</tr>

 @foreach ($users as $user)
<tr>
		<td>{{ $user->id_u }}</td>	
		<td>{{ $user->name_u }}</td>	
		<td>{{ $user->username}}</td>
		<td>{{ $user->CIN }}</td>
		<td>{{ $user->mail_u }}</td>

		<td>{{ $user->created_at }}</td>
		<td>{{ $user->updated_at }}</td>	
		<td><a href="revocadmin/{{ $user->id_u }}">Revoc</a></td>
		
    </tr>
@endforeach

    </table>
</div>






</body>
</html>