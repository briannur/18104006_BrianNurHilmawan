<!--koneksi ke database-->
<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "php_crud";

	//membuat koneksi baru
	$conn = new mysqli($host,$user,$pass,$dbname);

	//jika koneksi gagal
	if ($conn->connect_error) {
		die("Koneksi gagal : ".$conn->connect_error);
	}
?>