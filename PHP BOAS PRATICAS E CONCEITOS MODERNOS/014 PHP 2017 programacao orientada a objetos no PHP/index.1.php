<?php

    class minhaClasse{

        public $valor="teste";

        public function Criar(){
            echo "método da classe.";
        }
    }

    $a = new minhaClasse();

    $a->Criar();
    echo '<br>' . $a->valor;  // chamando 'teste'

    $a->valor = "novo valor";

    echo '<br>' . $a->valor;  // valor alterado 

?>