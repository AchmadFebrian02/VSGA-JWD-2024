<?php
/** Nama Progam : sistem Perulangan
 * Versi 1.0.0
 * Penulis : Faris Achmad JWD
 * Tanggal Pembuatan : 24 Juli 2024
 * Deskripsi : Menggunakan sistem foreach untuk menampilkan array variabel nama
 * 
*/
$nama = array (
    ["adi","budi","Carli","Dedy"], ["asad","safa","td","fef"],
);

foreach($nama as $subArray) {
    foreach($subArray as $val)
    {
        echo "$val ";
    }
    echo "<br/>";
}
?>