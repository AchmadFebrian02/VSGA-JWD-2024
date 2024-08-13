<?php 
/** Nama Progam : mendefinisikan fungsi sebagai prosedur php
 * Versi 1.0.0
 * Penulis : Faris Achmad JWD
 * tanggal pembuatan : 24 Juli 2024
 * Deskripsi : fungsi php 
*/
function sapaan($nama, $umur = 10){
    echo "Halo, " . $nama . "umur" . $umur . "!";
}
// memanggil fungsi sebagai prosedur 
sapaan("20","John");
?>

<script>
    //mendefinisikan prosedur di javascript
    function sapaan(nama){
        console.log("Halo, " + nama + "!");
    }

    sapaan ("john");
</script>