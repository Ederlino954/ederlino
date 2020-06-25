<?php

    $a =  10;
    $b = null;

    echo gettype($a); /// tipo do valor da variável 

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

    if (isset($b)) {
        echo '<p> Sim </p>';
    } else {
        echo '<p> Não </p>';
    }  

    /// referencia de comparações https://www.php.net/types.comparisons

?>