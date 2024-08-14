<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="simpan.php">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" onkeyup="isi_otomatis()" name="nim">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="Radio" name="jenis_kelamin" value="L">Laki-laki 
                    <input type="Radio" name="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>Jurusan </td>
                <td>
                    <select name="jurusan">
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                        <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                        <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
    </form>
</body>
</html>