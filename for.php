<?php
/** Nama Progam : sistem Perulangan for
 * Versi 1.0.0
 * Penulis : Faris Achmad JWD
 * Tanggal Pembuatan : 24 Juli 2024
 * Deskripsi : Menampilkann Array menggunakan sistem for
 * 
*/

// Menggunakan For
$nama = array("Adi", "Budi", "Carli","Dedy", "heru");
for ($i=0; $i<count($nama); $i++){
    echo "$nama[$i]";
    echo "<br/>";
}
?>