<?php 
	// pendeklarasian konsanta yaitu menggunakan fungsi define()
	
	define("GREETING", "WELCOME!"); // membuat konsanta GREETING
	echo GREETING;
	echo "<br>";

	define("GREETING", "Belajar PHP", true); // membuat konsanta greeting
	echo greeting;
	echo "<br>";

	define("mobil", [	// membuat konsanta array dengan nama mobil
		"Toyota",
		"Honda",
		"Ferari"
	]);
	echo mobil[2];
	echo "<br>";

	define("welcome", "Welcome to w3schools!");

	// fungsi untuk menampilkan konsanta
	function myTest() {
	echo welcome;
	}

	myTest();
?>