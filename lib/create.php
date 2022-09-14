<?php
$archivo='texto.txt';
fopen($archivo, 'w+');
header('location:../index.php');
$escribir = fwrite($abrir, '1');
echo"<br>";
?>