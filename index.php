<!-- 
Nama Progam : sistem Perulangan
Versi 1.0.0
Penulis : Faris Achmad JWD
Tanggal Pembuatan : 24 Juli 2024
Deskripsi : Membuat table dan menampilkan data, mengupdate data, dan menghapus data serta mengkoneksikan databases
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h2>list mahasiswa</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>nama</th>
            <th>gender</th>
            <th>jurusan</th>
        </tr>
        <?php
        include 'config.php';
        $mahasiswa = mysqli_query($conn, "SELECT * from mahasiswa");
        $no=1;
        foreach ($mahasiswa as $row){
            $jenis_kelamin = $row['jenis_kelamin']=='p'?'perempuan': 'laki laki';
            echo "<tr>
            
                <td>$no</td>
                <td>".$row['nim']."</td>
                <td>".$row['nama']."</td>
                <td>".$jenis_kelamin."</td>
                <td>".$row['jurusan']."</td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>