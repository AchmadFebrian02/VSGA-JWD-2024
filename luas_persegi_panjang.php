<!-- Nama Program : Luas Persegi Panjang -->
<!-- Versi : 1.0.0 -->
<!-- Tanggal Pembuatan : 25 Juli 2024 -->
<!-- Deskripsi : Program ini dirancang untuk membantu pengguna dalam menghitung luas persegi panjang -->
<!-- fitur utama termasuk perkalian sederhana -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hitung Luas Persegi Panjang</h2>
    <form method="post" action="">
        <label for="panjang">Panjang</label>
        <input type="text" id="panjang" name="panjang" require>
        <br><br>
        <label for="lebar">Lebar</label>
        <input type="text" id="lebar" name="lebar" require>
        <br><br>
        <input type="submit" value="hitung">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            // Mendapatkan Nilai dari form 
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            //Fungsi untuk menghitung luas persegi panjang
            function hitungluas($panjang, $lebar){
                return $panjang * $lebar;
            }

            // menghitung luas
            $luas = hitungluas($panjang,$lebar);

            // menampilkan hasil 
            echo "<h3>Hasil Perhitungan </h3>";
            echo "Panjang: $panjang<br>";
            echo "Lebar: $lebar<br>";
            echo "luas Persegi panjang: $luas";
        }
    ?>
</body>
</html>