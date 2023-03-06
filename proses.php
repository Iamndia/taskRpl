<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proses</title>
</head>
<body>
	<?php 
	if (isset($_POST['kirim'])) {
	$nama = $_POST['nama'];
	$pass = $_POST['password'];

	echo "Username anda = $nama<br>";
	echo "password anda = $pass<br>";

}
 ?>
 <a href="form.php">Kembali</a>

</body>
</html>