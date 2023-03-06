<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>learn</title>
</head>
<body>
	<h2>segitiga pertama</h2>
	
<?php 
 
 for ($i=1; $i <= 5 ; $i++) { //untuk baris
 	for ($j=1; $j <= $i ; $j++) { //untuk kolom
 		echo "$j";

 	}
 	echo "<br>";
 }

 ?>
 <h2>segitiga kedua</h2>
 <?php 

for ($i=1; $i <= 5 ; $i++) { 
	for ($j=1; $j <= 5-$i; $j++) { 
		echo "$j";
	}
	echo "<br>";
}

  ?>

</body>
</html>