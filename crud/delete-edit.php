<?php
include 'config.php';

// Ambil ID mahasiswa dari POST data
$id_mhs = $_POST['id_mhs'];

// Query untuk menghapus data
$query = "DELETE FROM mahasiswa WHERE id_mhs='$id_mhs'";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
