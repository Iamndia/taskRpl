<?php 

// pengulangan
// for,while,do while,foreach(khusus array)

//contoh perulangan for
for ($i=0; $i < 5; $i++) { 
//<= artinya i dimulai dari 0,jika i lebih kecil dari lima akan melakukan penjumlahan sampai i nya sama dengan 5
	echo "Nadia cute <br>";
}

//contoh perulangan while
$i = 0;//nilai awal
while ($i < 5) { //akan melakukan pengulangan apabila kondisi bernilai true
	echo "Nadia<br>";

$i++;//melakukan penjumlahan atau disebut increment
}

//perulangan do while
$i = 0;
do{
	echo "Nadia keren<br>";
    $i++;

}while($i < 5);

?>


<!-- membuat tabel dengan perulangan  -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Day 2</title>
</head>
<body>
    <h6>Contoh 1</h6>
    <table cellpadding="10" cellspacing="0" border="1">
     <!-- cara pertama  -->
     <?php

     for ($i=1; $i <= 5; $i++) { 
      echo "<tr>";

      for ($j=1; $j <= 5; $j++) { 
         echo "<td>$i,$j</td>";
     }
     echo "<tr>";
 } 



 ?>

</table>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Day2</title>
</head>
<body>
  <!-- cara kedua -->
  <h6>Contoh 2</h6>
  <table border="1" cellpadding="10"cellspacing="0">
     <?php
     for ($i=1; $i <= 5; $i++) : ?>
        <tr>
           <?php for ($j = 1; $j <=5;$j++) : ?>
              <td><?php echo "$i,$j"; ?></td>
          <?php endfor; ?>
      </tr>


  <?php endfor;?>



</table>

<!-- menggunakan perulangan while -->
<h6>Contoh 3</h6>
<table border="1" cellpadding="10" cellspacing="0">
 <?php $i = 1;
 while ($i <= 5) {
    echo "<tr>";
    $j = 1;
    while ($j <= 5) {
        echo"<td>$i,$j</td>";
        $j++;
    }
    echo "</tr>";
    $i++;

} 

?>

</table>
<!-- menggunakan perulangan do while -->
<h6>contoh 4</h6>
<table border="1" cellpadding="10" cellspacing="0">
    <?php
    $i = 1;
    do {
        echo "<tr>";
        $j = 1;
        do {
            echo "<td>$i,$j</td>";
        $j++;
        } while ($j <= 5);
        echo "</tr>";
    $i++;
    } while ($i <= 5);

     ?>
</table>

</body>
</html>

