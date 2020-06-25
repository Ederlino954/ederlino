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

        public function OQueEstaFazendo(){
            echo '<p> Estou a limpar o pó! </p>';
        }

    }

    class mulher extends humano{

        public function OQueEstaFazendo(){
            echo '<p> Estou fazendo o jantar! </p>';
        }

    }

    $homem = new homem();
    $homem->OQueEstaFazendo();

    $mulher = new mulher();
    $mulher->OQueEstaFazendo();


?>