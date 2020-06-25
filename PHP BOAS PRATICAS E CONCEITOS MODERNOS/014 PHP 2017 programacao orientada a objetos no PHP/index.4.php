<?php

    class minhaClasse{

        public $valor="</br>teste";

        public function Criar(){
            echo 'método da classe.';
        }
    }

    echo minhaClasse::Criar(); // deu erro talvez versão atualizada do PHP 
    
?>