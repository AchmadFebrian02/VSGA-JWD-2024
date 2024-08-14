<?php
    $matrik = [
        [2, 3, 4],
        [7, 5, 0],
        [4, 3, 8]
    ];

    foreach($matrik as $subarray){
        echo "<br>";
        foreach($subarray as $isi){
        echo $isi;
        }
    }
?>