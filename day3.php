<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan</title>
</head>
<body>
	<h5>Perkalian dengan looping For</h5>
	<?php
	for ($i=1; $i <= 10; $i++) { 
	 	for ($j=1; $j <= 10; $j++) { 
	 		$a = $i;
	 		$b = $j;
	 		$c = $a * $b;

	 		echo "$a * $b = $c<br>";

	 	}
	 } 

	 ?>

	 <h5>Perkalian dengan looping While</h5>
	 <?php
	 $i = 0;
	 while ($i <= 10) {
	 	$i++;

	 	$j = 0;
	 	while ($j <= 10) {
	 		$a = $i;
	 		$b = $j;
	 		$c = $a * $b;
	 		echo "$a * $b = $c<br>";
	 	$j++;
	 	}
	 }

	  ?>
<h2>Perulangan dengan do while</h2>
	  <?php
	  $i = 0;
	  do {
	  	$j = 0;
	  	$i++;
	  	do {
	  		$a = $i;
	  		$b = $j;
	  		$c = $a*$b;
	  		echo "$a * $b = $c<br>";
	  		$j++;
	  	
	  	} while ($j <= 10);
	  } while ($i <= 10);

	   ?>

</body>
</html>