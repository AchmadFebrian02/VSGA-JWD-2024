<?php 
    $nama = "John Dee";
    $umur = 25;
    $tinggi_cm = 175.5;
    $status_menikah = true; 

    echo "nama : " . $nama . "<br>";
    echo "umur : " . $umur . "<br>";
    echo "tinggi : " . $tinggi_cm . "<br>";
    echo "status menikah : " . ($status_menikah ? "status menikah" : "Belum Menikah") . "<br>";
?>

<script>
    var nama = "john doe";
    var umur = 25;
    var tinggiCm = 175.5;
    var statusMenikah = false;

    console.log ("Nama: " + nama);
    console.log ("Umur: " + umur + "tahun");
    console.log ("Tinggi: " + tinggiCm + "cm");
    console.log ("Status Menikah: " + (statusMenikah ? "status menikah" : "Belum menikah"));

</script>