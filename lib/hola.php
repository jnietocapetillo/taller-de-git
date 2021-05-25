<?php
    //el autor es Javier Nieto
    //email: capeniet@gmail.com
    // si no hay argumento, el valor es Javier Nieto
    require('holaMundo');
    $nombre = isset($argv[1]) ? $argv[1] : "Javier Nieto";
    print new holaMundo($nombre);
    
?>