<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Welcome to My Website</h1>

<!-- proses form -->
<form action="proses.php" method="post">
 	Username = <input type="text" name="nama"><br><br>
 	Password = <input type="password" name="password"><br>

 <!-- pembuatan button -->
 <input type="submit" name="kirim" value="Login">
</form>
</body>
</html>