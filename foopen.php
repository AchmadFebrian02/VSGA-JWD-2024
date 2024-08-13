<?php 
$file = fopen("welcome.txt", "r");

echo fgets($file);

fclose($file);
?>