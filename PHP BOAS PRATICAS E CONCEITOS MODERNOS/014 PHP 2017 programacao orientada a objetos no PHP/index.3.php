<?php

    class minhaClasse{

        public $valor="</br>teste";

        public function Criar(){
            echo "método da classe.";
        }
    }

    $a = new minhaClasse();
    $b = new minhaClasse();

    echo $a->valor;

    $b->valor = "</br>Novo Valor";

    echo $b->valor;

    
?>