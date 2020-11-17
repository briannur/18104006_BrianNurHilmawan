<?php 
	$a = "Hello";	//tipe data string
	$b = 20;	//tipe data integer
	$c = 3.14;	//tipe data float
	$d = true; //tipe data boolean

	// menampilkan value pada masing-masing variabel
	echo $a;
	echo "<br>";
	echo $b;
	echo "<br>";
	echo $c;
	echo "<br>";
	echo $d;
	echo "<br>";

	// menampilkan value pada variabel nama 
	$nama = "Brian";
	echo "Nama ".$nama;

	// menampilkan teks yang dibuat menggunakan html dan css 
	print "<br> <h1 style='background-color: #f00;'>PHP Keren!</h1>";

	// menampilkan teks 'Hasil' dari hasil perhitungan value pada variabel b + c
	echo "Hasil = " . ($b + $c);
	echo "<br>";

	// fungsi var_dump untuk mengetahui informasi pada variabel
	var_dump($a);
	echo "<br>";
	var_dump($b);
	echo "<br>";
	var_dump($c);
	echo "<br>";
	var_dump($d);
	echo "<br>";
?>