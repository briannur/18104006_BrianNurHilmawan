<?php
	// deklarasi variabel
	$x = 5985;
	var_dump(is_int($x));	// mengecek $x merupakan integer
	echo "<br>";

	// deklarasi variabel
	$x = 10.365;
	var_dump(is_float($x));	// mengecek $x merupakan float
	echo "<br>";

	// deklarasi variabel
	$x = 1.9e411;
	var_dump($x);	// mengembalikan infinity value
	echo "<br>";

	// deklarasi variabel
	$x = acos(8);
	var_dump($x);	// mengembalikan NaN value
	echo "<br>";

	// deklarasi variabel
	$x = "Hello";
	var_dump(is_numeric($x));	// mengecek $x merupakan number atau numerik
	echo "<br>";
	
	// deklarasi variabel
	$x = 23465.768;
	$int_cast = (int)$x;	// mengkonversi float ke integer
	echo $int_cast;
?>