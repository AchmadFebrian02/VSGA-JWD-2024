<?php
// Configuration KONEKSI ke databases
$host = "localhost";
$user = "root";
$password = "";
$database = "dbwisata";
$port = '3306';

// membuat koneksi

$conn = new mysqli($host, $user, $password, $database);

// memeriksa koneksi
if ($conn->connect_error){
    die("koneksi gagal:".$conn->connect_error);

}

echo "koneksi berhasil ke database $database";

// menutup koneksi

// $conn->close();
?>