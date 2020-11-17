<?php
	// tipe data pada PHP terdefinisi bergantung value dalam variabel tersebut

	$string = "Hello";	//tipe data string
	$int = 20;	//tipe data integer
	$float = 3.14;	//tipe data float
	$boolean = true; //tipe data boolean
	$array = ['Toyota','Honda','Ferari']; //tipe data array

	// menampilkan output dari masing-masing variabel
	echo $string;
	echo "<br>";
	echo $int;
	echo "<br>";
	echo $float;
	echo "<br>";
	echo $boolean;
	echo "<br>";
	echo $array[2];
	echo "<br>";

	// menampilkan informasi dari variabel
	var_dump($string);
	echo "<br>";
	var_dump($int);
	echo "<br>";
	var_dump($float);
	echo "<br>";
	var_dump($boolean);
	echo "<br>";
	var_dump($array);
	echo "<br>";
?>