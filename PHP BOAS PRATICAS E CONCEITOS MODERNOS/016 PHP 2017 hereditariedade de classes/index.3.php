<?php

    class humano{

        public $nome;

        function __construct($nome){
            $this->nome = $nome;
        }

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

    $homem = new homem('João');
    $homem->OQueEstaFazendo();

    $mulher = new mulher('Maria');
    $mulher->OQueEstaFazendo();


?>