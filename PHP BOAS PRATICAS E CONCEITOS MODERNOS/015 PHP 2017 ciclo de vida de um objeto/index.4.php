<?php

    class humano{

        function __construct(){ // padrão de execução 
            echo '<p>Um humano nasceu.</p>';
        }

        public function Falar($texto){ // não executado pois não foi instanciado 
            echo "<p> Eu disse $texto. </p>";
        }

        function __destruct(){ // executando quando um objeto e destruido dentro do nosso código 
            echo '<p>Um humano morreu.</p>';
        }
    }

    $homem = new humano();
    


?>