<?php 
	echo(pi());	// mengembalikan nilai 3.1415926535898
	echo "<br>";

	// mencari nilai terkecil
	echo(min(0, 150, 30, 20, -8, -200));  // menampilkan -200
	echo "<br>";

	// mencari nilai terbesar
	echo(max(0, 150, 30, 20, -8, -200));	// menampilkan 150
	echo "<br>";

	// mengembalikan nilai positif dari sebuah angka
	echo(abs(-6.7));  // menampilkan 6.7
	echo "<br>";

	// mengembalikan nilai dari akar kuadrat sebuah angka
	echo(sqrt(64));  // menampilkan 8
	echo "<br>";

	// membulatkan angka ke nilai terdekat
	echo(round(0.60)); // menampilkan 1
	echo "<br>"; 

	// menghasilkan nilai acak
	echo(rand());
	echo "<br>";

	// menghasilkan nilai acak antara angka 10 sampai 100
	echo(rand(10, 100));
?>