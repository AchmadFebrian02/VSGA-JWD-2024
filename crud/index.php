<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title>List Mahasiswa</title>
    <script>
        function confirmDelete(event) {
            if (!confirm("Anda yakin ingin menghapus data ini?")) {
                event.preventDefault(); 
            }
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">List Mahasiswa</h2>
        <a href="inputform.php" class="btn btn-primary mb-4">Tambahkan Data</a>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");
                $no = 1;
                foreach ($mahasiswa as $row) {
                    $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['nim']}</td>
                            <td>{$row['nama']}</td>
                            <td>{$jenis_kelamin}</td>
                            <td>{$row['jurusan']}</td>
                            <td>{$row['alamat']}</td>
                            <td>
                                <a href='form-edit.php?id_mhs={$row['id_mhs']}' class='btn btn-primary'>Edit</a>
                                <form action='delete-edit.php' method='post' style='display:inline;' onsubmit='confirmDelete(event)'>
                                    <input type='hidden' name='id_mhs' value='{$row['id_mhs']}'>
                                    <button type='submit' class='btn btn-danger'>Delete</button>
                                </form>
                            </td>
                          </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
