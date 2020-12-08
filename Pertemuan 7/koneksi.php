<!--koneksi database-->
<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "php_crud";

	//membuat koneksi baru dengan param dari var diatas
	$conn = new mysqli($host,$user,$pass,$dbname);

	//fungsi if hanya jika koneksi error/gagal mengeksekusi statement die (print message dan exit php script sekarang)
	if ($conn->connect_error) {
		die("Koneksi gagal : ".$conn->connect_error);
	}
?>