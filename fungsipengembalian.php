<?php
/** Nama Program : Mendefinisikan fungsi sebagai prosedur PHP
 * Versi 1.0.0
 * Penulis : Faris Achmad JWD
 * Tanggal Pembuatan : 24 Juli 2024
 * Deskripsi : Fungsi pengembalian nilai
 */

// Perkalian
function perkalian($bil_1, $bil_2){
    $hasil = $bil_1 * $bil_2;
    return $hasil;
}
echo "5 x 10 = ".perkalian(5, 10);
echo "<br>";

// Pertambahan
function pertambahan($bil_1, $bil_2){
    $hasil = $bil_1 + $bil_2;
    return $hasil;
}
echo "5 + 10 = ".pertambahan(5, 10);
echo "<br>";

// Pengurangan
function pengurangan($bil_1, $bil_2){
    $hasil = $bil_1 - $bil_2;
    return $hasil;
}
echo "5 - 10 = ".pengurangan(5, 10);
echo "<br>";

// Pembagian
function pembagian($bil_1, $bil_2){
    if ($bil_2 != 0) {
        $hasil = $bil_1 / $bil_2;
        return $hasil;
    } else {
        return "Tidak dapat membagi dengan nol";
    }
}
echo "5 : 10 = ".pembagian(5, 10);
?>
