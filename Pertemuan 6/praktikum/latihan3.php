<?php
	// https://www.w3schools.com/PHP/php_ref_timezones.asp
	date_default_timezone_set("Asia/Jakarta");
	
	//variabel t untuk mendeklarasikan waktu/date
	$t = date("H");

	// percabangan if untuk pembagian waktunya dan statement yang akan ditampilkan
	if($t < "10"){
		echo "Selamat Pagi";
	} else if($t < "20"){
		echo "Selamat Sore";
	} else{
		echo "Selamat Malam";
	}

	echo "<br>";

	//varibel favcolor dengan value blue
	$favcolor = "blue";

	// percabangan switch case
	switch ($favcolor) {
		case 'red':
			echo "Your favourite color is Red";
			break;
		case 'green':
			echo "Your favourite color is Green";
			break;
		case 'blue':
			echo "Your favourite color is Blue";
			break;
		default:
			echo "Your favourite color is neither Red, Green, or Blue";
			break;
	}
?>