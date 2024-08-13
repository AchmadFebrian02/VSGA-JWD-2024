<?php
/** Nama Progam : sistem Perulangan foreach
 * Versi 1.0.0
 * Penulis : Faris Achmad JWD
 * Deskripsi : menampilkan array sesuai dengan value array tersebut menggunakan foreach * 
*/
$mahasiswa = array(
    "nama" => "Budi",
    "umur" => 21,
    "jurusan" => "Informatika",
    "universitas" => "Universitas Indonesia"
);
foreach($mahasiswa as $kunci => $nilai){
    echo "kunci: $kunci; Nilai: $nilai\n";
}
foreach($mahasiswa as $list){
    echo $list;
}
?>