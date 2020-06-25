<?php

    $a =  null;

    echo gettype($a);

    if (empty($a)) {
        echo '<p> Sim (vazia) </p>';
    } else {
        echo '<p> Sim (tem valor) </p>';
    }
    
    if (is_null($a)) {
        echo '<p> Sim (nula) </p>';
    } else {
        echo '<p> Não Nula (tem valor) </p>';
    }    

?>