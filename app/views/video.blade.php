<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php 
for ($j=0; $j < $i; $j++) { 
	# code...

 ?>

<div >
  <video controls="controls" width="550" height="300" autoplay>
    <source src="{{ $url[$j] }}">
 
  </video>

<?php 
}
 ?>
</div>
</body>
</html>