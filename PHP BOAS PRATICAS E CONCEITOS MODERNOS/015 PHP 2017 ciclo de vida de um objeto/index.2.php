<?php

    class humano{
        public function Falar($texto){
            echo "<p> Eu disse $texto. </p>";
        }
    }

    $homem = new humano();
    $homem->Falar('bom dia');



?>