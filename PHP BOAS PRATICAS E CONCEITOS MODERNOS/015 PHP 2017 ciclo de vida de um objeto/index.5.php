<?php

    class humano{  // executando na ordem das funções a classe  

        function __construct(){ // padraõ de execução 
            echo '<p>Um humano nasceu.</p>';
        }

        public function Falar($texto){ 
            echo "<p> Eu disse $texto. </p>";
        }

        function __destruct(){ // executando quando um objeto e destrido dentro do nosso código 
            echo '<p>Um humano morreu.</p>';
        }
    }

    $homem = new humano();
    $homem->Falar('Estou vivo!');


?>