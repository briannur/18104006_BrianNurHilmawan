<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- menampilkan form input dengan action $_SERVER untuk menyimpan informasi dan mengembalikannya -->
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Name : <input type="text" name="fname">
		<input type="submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {	// $_SERVER dengan elemen REQUEST_METHOD mengembalikan metode permintaan pada method POST
			$name = $_POST['fname'];	// menyimpan nilai dan melakukan method POST
			if (empty($name)) {	// kondisi percabangan untuk menampilkan inputan
				echo "Name is empty";
			} else {
				echo "<br>Namaku ".$name;
			}
		}
	?>

	<!-- memanggil method GET -->
	<br>
	<p>Method GET</p>
	<a href="get.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body>
</html>
