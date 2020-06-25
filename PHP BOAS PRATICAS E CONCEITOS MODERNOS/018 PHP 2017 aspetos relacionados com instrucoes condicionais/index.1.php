<?php 

    function teste($valor){
        // verifica se a variável é do tipo string

        if(gettype($valor) === 'string'){
            return true;
        } else {
            return false;
        }
    }

        $a = 'Joao';

        echo teste($a);
    


?>