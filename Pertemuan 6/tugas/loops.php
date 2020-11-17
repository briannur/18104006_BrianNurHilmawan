<?php 
	// perulangan for 0 sampai 10 secara increment
    for($i = 0; $i <= 10; $i++) {
        echo $i." ";
    }
    echo "<br>";

    // perulangan while dari 1 sampai 15 secara increment
    $no = 1;
    while($no <= 15) {
        echo $no." ";
        
        $no++;
    }
    echo "<br>";

    // perulangan do while dari 1 sampai 18 secara increment
    $j = 1;
    do {
        echo $j." ";
        
        $j++;
    } while($j < 19);
    echo "<br>";

    // perulangan foreach array
    $data = [
        "Nilai A" => 100,
        "Nilai B" => 80,
        "Nilai C" => 40
    ];

    foreach($data as $x => $val) {
        echo "$x => $val"."<br>";
    }
?>