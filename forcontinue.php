<?php
/** Nama Progam : sistem Perulangan foreach
 * Versi 1.0.0
 * Penulis : Faris Achmad JWD
 * tanggal pembuatan : 24 Juli 2024
 * Deskripsi : melakukan operasi continue pada perulangan for * 
*/
for ($i=1; $i<=6; $i++){
    if ($i == 2 ){
        continue;
    }
    echo "nilai i : ". $i . "<br>";
}
// statement ini akan di jalankan
echo "Belajar For";
?>
