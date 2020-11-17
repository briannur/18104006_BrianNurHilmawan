<?php
	// menampilkan panjang/length string
	echo "Hello! = ".strlen("Hello!"); 
	echo "<br>";

	// menampilkan jumlah kata
	echo "Hello World = ".str_word_count("Hello World");
	echo "<br>";

	// mereverse/membalikan kata
	echo "Hello = ".strrev("Hello");
	echo "<br>";

	//mencari lokasi kata 'at' dalam string
	echo "Learn PHP at w3schools = ".strpos("Learn PHP at w3schools", "at"); 
	echo "<br>";

	// mereplace kata vicky dengan febiola
	echo str_replace("brian", "bagor", "hai brian"); 
?>