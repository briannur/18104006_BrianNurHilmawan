<?php
	// deklarasi variabel
	$mobil = "blue";

	// percabangan switch case
	switch ($mobil) {
		case 'red':
			echo "Mobil anda berwarna Merah";	// statement yang akan ditampilkan jika value dalam variabel adalah 'red'
			break;
		case 'green':
			echo "Mobil anda berwarna Hijau";	// statement yang akan ditampilkan jika value dalam variabel adalah 'green'
			break;
		case 'blue':
			echo "Mobil anda berwarna Biru";	// statement yang akan ditampilkan jika value dalam variabel adalah 'blue'
			break;
		default:
			echo "Not Defined";	// statement yang akan ditampilkan jika value dalam variabel tidak ada yang cocok
			break;
	}
?>