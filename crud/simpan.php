<?php 
    include 'config.php';
    // menyimpan data kedalam variabel
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jeni_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan',jenis_kelamin='$jeni_kelamin', alamat='$alamat'";

    mysqli_query($conn, $query);
    header("location:index.php")
?>