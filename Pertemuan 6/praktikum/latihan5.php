<?php
	// fungsi sum dengan parameter a dan b kemudian mengembalikan nilainya
    function sum($a, $b) {
        return $a + $b;
    }

    // fungsi message untuk menampilkan teks dengan parameter a
    function message($a) {
        echo "Hello ".$a;
    }

    // menampilkan hasil perhitungan dengan memanggil fungsi sum
    echo "Hasil 5 + 6 = ".sum(5,6);

    echo "<br>";

    // menampilkan message dengan menggunakan fungsi message
    message("Rifky");
?>