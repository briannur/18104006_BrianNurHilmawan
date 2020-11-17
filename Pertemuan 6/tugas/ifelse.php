<?php 
	// deklarasi variabel
	$x = 80;

	// percabangan if
	if($x == "100"){	// jika x = 100 maka statement yang akan ditampilkan yaitu 'Nilai A'
		echo "Nilai A";
	} else if($x > "80"){	// jika x > 80 maka statement yang akan ditampilkan yaitu 'Nilai B'
		echo "Nilai B";
	} else{	// jika x tidak ada yang memenuhi kondisi di atas maka statement yang akan ditampilkan yaitu 'Nilai C'
		echo "Nilai C";
	}
?>