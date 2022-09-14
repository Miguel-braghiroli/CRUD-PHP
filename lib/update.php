<?php
function contador(){
    $archivo = 'texto.txt';
    $abrir = fopen($archivo, 'r+');
    $tama = filesize($archivo);
    $leer = fread($abrir, $tama);
    $conte = $leer+1;
    $posicion = ftell($abrir);
    if ($posicion == $tama) {
        fseek($abrir, 0);
    }
    fwrite($abrir, $conte);
    fclose($abrir);
    return($conte);
}
echo contador();
?>