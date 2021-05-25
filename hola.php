<?php
    // si no hay argumento, el valor es Javier Nieto
    $nombre = isset($argv[1]) ? $argv[1] : "Javier Nieto";
    @print 'Hola, {$nombre}\n';
    
?>