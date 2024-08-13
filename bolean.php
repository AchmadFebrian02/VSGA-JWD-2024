<?php 
    $benar = true;
    $salah = false;

    echo "benar = $benar, salah = $salah";
    // hasil output : benar = 1, salah = 0

    $x = false; //false
    echo "x = $x" . "<br>";
    $x = "";  //string kosong dianggap false
    echo "x = $x" . "<br>";
    $x = " "; // string karakter bernilai true
    echo "x = $x" . "<br>";
    $x = 0; // false
    echo "x = $x" . "<br>";
    $x = 1;//true
    echo "x = $x" . "<br>";
    $x = null; //false
    echo "x = $x" . "<br>";
?>