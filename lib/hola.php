<?php
    //el autor es Javier Nieto
    //email: capeniet@gmail.com
    // si no hay argumento, el valor es Javier Nieto
    print "Introduce tu nombre:";
    $nombre = trim(fgets(STDIN));
    print new HolaMundo($nombre);
    
?>