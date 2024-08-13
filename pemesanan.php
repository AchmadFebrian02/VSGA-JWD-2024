<!-- 
Nama Progam : Tugas menghitung jumlah dorm
Versi 1.0.0
Penulis : Faris Achmad JWD
Deskripsi : TUGAS MENGHITUNG JUMLAH total FORM PEMESANAN melalui yang di input
-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Pembelian dengan jQuery</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div style="border: solid;">
    <h2>Form Pemesanan Makanan</h2>
    <table>
        <tr>
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <tr>
            <td>Nasi Goreng</td>
            <td>Rp10.000</td>
            <td><input type="text" id="qty1"></td>
        </tr>
        <tr>
            <td>Ayam Goreng</td>
            <td>Rp12.000</td>
            <td><input type="text" id="qty2"></td>
        </tr>
        <tr>
            <td>Es Teh</td>
            <td>Rp2.000</td>
            <td><input type="text" id="qty3"></td>
        </tr>
        <tr>
            <td>Kopi</td>
            <td>Rp3.000</td>
            <td><input type="text" id="qty4"></td>
        </tr>
    </table>
    <button id="tambah">Hitung Total Belanja</button>
    <p>Total Belanja: <span id="total-belanja">Rp0</span></p>
</div>

<script>
$(document).ready(function(){
    $("#tambah").click(function(){  
    var totalBelanja = 0;
    var harga = [10000, 12000, 2000, 3000];

        for(var i = 1; i <= 4; i++) {
            var qty = parseInt($("#qty" + 1).val());
            if(!isNaN(qty) && qty > 0){
                totalBelanja += qty * harga[i - 1];
            }
        }

        $("#total-belanja").text("RP"+ totalBelanja);
    });
});
</script>
</body>
</html>

