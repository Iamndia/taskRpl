<!-- perulangan pada php -->
<?php 

// menggunakan for
for ($i=0; $i < 5; $i++) { 
	echo "hasil for = $i<br>";
}

// dengan while
$i = 0;
while ($i < 5) {
	echo "hasil while = $i<br>";
$i++;
}

// dengan do while
$i = 0;
do {
	echo "hasil do = $i<br>";
$i++;
} while ($i < 5);

 ?>

<!-- studi kasus -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tabel</title>
</head>
<body>
	<table border="" cellpadding="10" cellspacing="0">
		<?php 
			for ($i=1; $i <= 5 ; $i++) { 
				echo "<tr>";
				for ($j=1; $j <= 5; $j++) { 
					echo "<td>$i,$j</td>";
				}
				echo "</tr>";
			}

		 ?>
		
	</table>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php 

			$i = 0;
			while ($i < 5) {
				echo "<tr>";
			$i++;
			$j = 0;
			while ($j < 5) {
				echo "<td>$i,$j</td>";
			$j++;
			}echo "</tr>";
			}
			


		 ?>
	</table>
	<table border="1" cellpadding="10" cellspacing="">
		<?php 
			$i = 1;
			do {
				echo "<tr>";
			$i++;
			$j =1;
			do {
				echo "<td>$i,$j</td>";
			$j++;
			} 
			while ($j <= 5);
			echo "</tr>";
			} while ($i <= 5);

		 ?>
		
	</table>

</body>
</html>