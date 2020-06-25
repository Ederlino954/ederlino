<?php

    class humano{

        public $nome;
        public $idade;
        //...

        public function Falar($mensagem){
            echo "<p> Eu falei $mensagem</p>";
        }
    }

    class homem extends humano{

    }

    class mulher extends humano{

    }

    $homem = new humano();
    $homem->Falar('Bom dia, eu sou homem.');

    $mulher = new humano();
    $mulher->Falar('Bom dia, eu sou mulher.');

    


?>