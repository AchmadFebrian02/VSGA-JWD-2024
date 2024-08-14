<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <?php
    include 'config.php';
    $id_mhs = $_GET['id_mhs'];
    $query = "SELECT * FROM mahasiswa WHERE id_mhs='$id_mhs'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    ?>

    <form method="post" action="update.php">
        <input type="hidden" name="id_mhs" value="<?php echo $data['id_mhs']; ?>">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="nim" value="<?php echo $data['nim']; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo $data['jenis_kelamin'] == 'L' ? 'checked' : ''; ?>> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo $data['jenis_kelamin'] == 'P' ? 'checked' : ''; ?>> Perempuan
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan">
                        <option value="TEKNIK INFORMATIKA" <?php echo $data['jurusan'] == 'TEKNIK INFORMATIKA' ? 'selected' : ''; ?>>TEKNIK INFORMATIKA</option>
                        <option value="TEKNIK MESIN" <?php echo $data['jurusan'] == 'TEKNIK MESIN' ? 'selected' : ''; ?>>TEKNIK MESIN</option>
                        <option value="TEKNIK KIMIA" <?php echo $data['jurusan'] == 'TEKNIK KIMIA' ? 'selected' : ''; ?>>TEKNIK KIMIA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
