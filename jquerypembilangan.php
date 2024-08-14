<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh pembilangan Jquery</title>
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <p id="hasil"></p>
    <p id="hasil_kurang"></p>
    <p id="hasil_bagi"></p>
    <p id="hasil_kali"></p>
    <p id="hasil_modulus"></p>
    <script>
        // penjumlahan 
        var total = 20;
        total += 5;

        $(document).ready(function(){
            $("#hasil").text(total);
        });
        // pengurangan
        var total1 = 20;
        total1 -= 5;

        $(document).ready(function(){
            $("#hasil_kurang").text(total1);
        });
        // pembagian
        var total2 = 20;
        total2 /= 5;

        $(document).ready(function(){
            $("#hasil_bagi").text(total2);
        });
        // perkalian
        var total3 = 20;
        total3 *= 5;

        $(document).ready(function(){
            $("#hasil_modulus").text(total3);
        });
    </script>
</body>
</html>