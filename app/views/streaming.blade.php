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


	<style>

	
	.vid{
		margin: 50px;
		margin-top: 10px;
		float: left;

	}
	.com{
		float: right;
		margin-left: -30px;
		margin: 5px;
		padding: 5px;
		border-radius: 5px;
		background-color: #999;
		height: 440px;
		width: 50%;


	} 
	.add{
		float: left;
		margin: 5px;
		padding: 5px;
		border-radius: 5px;
		background-color: #999;
		width: 45%;
		height: 440px;

	}

	.global{
		float: right;
		border-radius: 5px;
		background-color: #555;
		width: 40%;
		margin-top: 40px;
		margin-right: 40px;

	}

	.cont{
		margin-top: 60px;
		
	}

</style>
</head>




<body>
		<?php 
		for ($j=0; $j < $lil; $j++) { 
			# code...

		 ?>

<div class="cont">
		<div class="vid">
			<h1></h1>

		{{ $url[$j] }}
		</div>

		<div class="global">
			<div class="com" >
				<?php 
					# code...
				$commm = $comms[$j];
				
				foreach ($commm as $data)
				{
				    echo "<p><kbd>".$data->poster."</kbd> - ".$data->comms."</p>";
				    echo "<hr>";
				    
				}
				
				 ?>
			</div>
			<div class="add" >
					<form method="POST" action="addcomS/{{$id_s[$j]}}">
						<input type="text" class="form-control" value="{{ Auth::user()->username }}"><br />
						<textarea name="comS" class="form-control" rows="15"></textarea><br />
						<button type="submit" class="btn btn-default">Comment</button>
					</form>
			</div>
		</div>
 </div>


		<?php 
		}
		 ?>

</body>
</html>
<!--
