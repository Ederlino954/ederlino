<?php

    $a =  null;

    echo gettype($a);

    if (empty($a)) {
        echo '<p> Sim (vazia) </p>';
    } else {
        echo '<p> Sim (tem valor) </p>';
    }
    

?>