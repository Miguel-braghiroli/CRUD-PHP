<?php
$archivo = 'texto.txt';
$abrir = fopen($archivo, 'r+');
$tama = filesize($archivo);
$leer = fread($abrir, $tama);
echo $leer;
fclose($abrir);
?>