<?php
    //el autor es Javier Nieto
    //email: capeniet@gmail.com
    // si no hay argumento, el valor es Javier Nieto
    $nombre = isset($argv[1]) ? $argv[1] : "Mundo";
    print new HolaMundo($nombre);
    
?>