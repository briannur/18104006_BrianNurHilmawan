<?php
	// deklarasi variabel
	$x = 8;  
	$y = 10;

	// operator aritmatika
	echo $x + $y;	// menjumlahkan nilai dalam variabel
	echo "<br>";

	// operator penugasan
	$x = 100;
	$x -= 50;
	echo $x;	// menampilkan hasil dari 100-50
	echo "<br>";

	// deklarasi variabel
	$x = 100;  
	$y = "50";
	var_dump($x !== $y); // operator perbandingan, mengembalikan nilai true jika $x tidak sama dengan $y
	echo "<br>";

	// operator increment  
	$x = 10;  
	echo ++$x; //mengitung 10 ditambah 1
	echo "<br>";

	// operator logika
	$x = 100;  
	$y = 50;
	if ($x == 100 && $y == 50) {
	    echo "Hello world!";
	}
	echo "<br>";
?>