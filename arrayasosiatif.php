<?php 
    // $artikel = [
    //     "judul" => "Belajar pemograman PHP",
    //     "penulis" => "Digital Talent",
    //     "view" => 128
    // ];

    // $artikel["judul"] = "Belajar pemograman Javasript";

    // print_r($artikel);

    // $cars = array (
    //     ["volvo","BMW","toyota"], ["xxx", "yyy", "zzz"],
    // );

    // foreach ($cars as $car){
    //     foreach ($car as $carArray){
    //         echo $carArray . " ";
    //     }
    // }

    $cars = array(    
        ["merk"=>"volvo", "warna"=>"merah", "roda"=>4],
        ["merk"=>"honda", "warna"=>"hijau", "roda"=>6]
    );

    foreach ($cars as $mobil){
        echo $mobil["roda"].$mobil["warna"].$mobil["merk"];
    }
?>