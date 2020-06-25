<?php

    class humano{

        function __construct(){ // executado automaticamente com a inicialização da classe 
            echo '<p>Um humano nasceu.</p>';
        }

        public function Falar($texto){
            echo "<p> Eu disse $texto. </p>";
        }
    }

    $homem = new humano();
    //$homem->Falar('bom dia');



?>