<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Day 3</title>
</head>
<body>
	<!-- percabangan pada php -->
	<!-- if,else if,else,switch -->

	<!-- 1.if -->
	<?php
	$x = 30;
	if ($x < 20) {
	 	echo "benar";
	 } 
	 elseif ($x == 20) {
	 	echo "Nice";
	 }
	 else{
	 	echo "salah";
	 }

	 ?>
	 <br>
	 <!-- menampilkan bilangan ganjil -->
	 <h1>Bilangan ganjil</h1>
	 <?php
	 for ($i=1; $i < 40 ; $i++) { 
	 	if ($i % 2 == 1) {
	 		echo "$i<br>";
	 	}
	 }
	 // bilangan genap
	 ?>
	 <h1>Bilangan genap</h1>
	 <?php
	 for ($i=1; $i < 40; $i++) { 
	 	if ($i % 2 == 0) {
	 		echo "$i<br>";
	 	}
	 }
   
	  ?>
<script>
	alert("nadia");
</script>
</body>
</html>