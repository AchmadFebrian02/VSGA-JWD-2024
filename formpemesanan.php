<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaPemesan = htmlspecialchars($_POST['nama_pemesan']);
    $noHp = htmlspecialchars($_POST['no_hp']);
    $durasi = intval($_POST['durasi']);
    $jumlahPeserta = intval($_POST['jumlah_peserta']);
    $penginapan = isset($_POST['penginapan']) ? 1000000 : 0;
    $transportasi = isset($_POST['transportasi']) ? 1200000 : 0;
    $makanan = isset($_POST['makanan']) ? 500000 : 0;

    // Menghitung jumlah tagihan
    $totalPerPeserta = ($penginapan + $transportasi + $makanan) * $durasi;
    $jumlahTagihan = $totalPerPeserta * $jumlahPeserta;
    
    echo "<h2>Detail Pemesanan</h2>";
    echo "Nama Pemesan: $namaPemesan<br>";
    echo "Nomor Telp/HP: $noHp<br>";
    echo "Durasi: $durasi hari<br>";
    echo "Jumlah Peserta: $jumlahPeserta orang<br>";
    echo "Penginapan: " . ($penginapan ? "Ya" : "Tidak") . "<br>";
    echo "Transportasi: " . ($transportasi ? "Ya" : "Tidak") . "<br>";
    echo "Makanan: " . ($makanan ? "Ya" : "Tidak") . "<br>";
    echo "<strong>Jumlah Tagihan: Rp " . number_format($jumlahTagihan, 2, ',', '.') . "</strong>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css-boostrap/bootstrap.min.css" rel="stylesheet" />
    <title>Pemesanan Paket Wisata</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Form Pemesanan Paket Wisata</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="nama_pemesan" class="form-label">Nama Pemesan:</label>
                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor Telp/HP:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi Pelaksanaan Perjalanan (hari):</label>
                <input type="number" class="form-control" id="durasi" name="durasi" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_peserta" class="form-label">Jumlah Peserta:</label>
                <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Pelayanan Paket Perjalanan:</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="penginapan" name="penginapan" value="1">
                    <label class="form-check-label" for="penginapan">Penginapan (Rp 1.000.000/hari)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="transportasi" name="transportasi" value="1">
                    <label class="form-check-label" for="transportasi">Transportasi (Rp 1.200.000/hari)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="makanan" name="makanan" value="1">
                    <label class="form-check-label" for="makanan">Makanan (Rp 500.000/hari)</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Hitung Jumlah Tagihan</button>
        </form>
        
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $output; ?>
    </div>
</body>
</html>
