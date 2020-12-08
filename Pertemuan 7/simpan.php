<!--memasukkan inputan ke dalam tabel-->
<?php
	include 'koneksi.php';	//include file koneksi.php
	//method post untuk mengambil data
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];

	//menyimpan data inputan ke dalam tabel 'data'
	$sql = "INSERT INTO data(nama, kelas, alamat) VALUES('$nama','$kelas','$alamat')";
	$add = $conn->query($sql);

	//menampilkan file tes.php dengan fungsi if dan antisipasi errornya
	if ($add) {
		$conn->close();
		header("location:tes.php");
		exit();
	} else {	// akan menampilkan error dan close otomatis
		echo "Error : ".$conn->error;
		$conn->close();
		exit();
	}
?>