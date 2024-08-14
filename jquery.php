<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh penggunaan jQuery</title>
    <script src="vendor/components/jquery/jquery.min.js"></script>
</head>
<body>
    <button id="clickme">Klik saya</button>

    <script>
        $(document).ready(function (){
            $("#clickme").click(function (){
                alert("anda mengklik tombol");
            });
        });
    </script>
</body>
</html>