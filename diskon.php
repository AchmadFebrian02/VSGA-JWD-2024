<?php
/** Nama Progam : Tugas menghitung diskon
 * Versi 1.0.0
 * Penulis : Faris Achmad JWD
 * Deskripsi : menghitung jumlah total diskon yang di input 
 * 
*/
function hitungDiskon($totalBelanja){
    if ($totalBelanja >= 100000){
        return 10;
    }elseif ($totalBelanja >= 50000 && $totalBelanja <= 100000){
        return 5;
    }else{
        return 0;
    }
} 
function tampilkanHasil($totalBelanja) {
        $diskon = hitungDiskon($totalBelanja);
        $jumlahDiskon = $totalBelanja * ($diskon / 100);
        $totalSetelahDiskon = $totalBelanja - $jumlahDiskon;
    
        echo "Total Belanja: Rp " . number_format($totalBelanja, 2, ',', '.') . "<br>";
        echo "Diskon: " . $diskon . "% (Rp " . number_format($jumlahDiskon, 2, ',', '.') . ")<br>";
        echo "Total yang Harus Dibayar: Rp " . number_format($totalSetelahDiskon, 2, ',', '.') . "<br>";
    }
    

$totalBelanja = 120000; // Contoh total belanja

tampilkanHasil($totalBelanja);
?>