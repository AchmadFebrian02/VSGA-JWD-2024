<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <button name="action" value="save"></button>
    <button name="action" value="edit"></button>
    <button name="action" value="delete"></button>
    <script>
        $("button[name='action']").on("click", function(){
            var action = $(this).attr("value");
            alert ("tombol dengan attribute name 'action' dan value '"+ action + "' diklik!");
        })
    </script>
</body>

</html>