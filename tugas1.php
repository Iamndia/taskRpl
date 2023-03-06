<?php 
$HargaSemen = 60000;
$beli = $_POST['harga'];
if ($beli >= 200) {
	$harga = $HargaSemen*$beli;
	$total = $harga-(5/100 * $HargaSemen);
	echo "Harga sebelum diskon = " .$harga."<br>";
	echo "Harga setelah diskon = " .$total;
}elseif ($beli >= 100) {
	$harga = $HargaSemen * $beli;
	$total = $harga-(2/100 * $HargaSemen);
	echo "Harga sebelum diskon = " .$harga."<br>";
	echo "Harga setelah diskon = " .$total;
}else{
	$harga = $HargaSemen * $beli;
	echo "Total Harga = ".$harga."<br>";
	echo "Anda tidak mendapatkan diskon";
}
 ?>