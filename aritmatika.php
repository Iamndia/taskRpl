<?php
$x = 12;
$y = 8;
$z = 5;
$hasil = $x + $y - $z;
$hasil1 = $x * $y /$z;
$hasil2 = $x + $y * $z;
$hasil3 = $x + $y / $z;
$hasil4 = ($x + $y) * $z;
$hasil5 = ($x - $y) *$z;
echo $hasil."<br>";
echo $hasil1."<br>";
echo $hasil2."<br>";
echo $hasil3."<br>";
echo $hasil4."<br>";
echo $hasil5."<br>";

//cara membatasi 2 angka dibelakang koma mmenggunakan number_format
$angka = 123.456789;
echo number_format($angka, 3)."<br>"; // Output: 123.46

//cara kedua menggunakan fungsi round()
$nilai = 134.543849;
$singkat = round($nilai,2);
echo $singkat;

//

?>