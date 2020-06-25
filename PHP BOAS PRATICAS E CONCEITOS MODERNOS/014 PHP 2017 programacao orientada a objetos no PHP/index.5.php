<?php

    class humano{
        public function falar($texto){
            echo $texto;
        }
    }

    echo humano::falar('Eu falei isto.');  /// deu erro talvez atualização da versão do PHP 
    
?>