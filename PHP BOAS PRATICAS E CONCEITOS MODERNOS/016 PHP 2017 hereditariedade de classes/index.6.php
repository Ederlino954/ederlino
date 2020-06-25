<?php

    class humano{

        public $nome;

        function __construct($nome){
            $this->nome = $nome;
        }

        public function Falar($mensagem){
            echo "<p> Eu falei $mensagem</p>";
        }

        public function Identifique_se(){
            echo '<p>'. $this->nome.'</p>';
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

    $homem1 = new humano('Antônio');
    $homem1->Identifique_se();
    

    $homem = new homem('João');
    $homem->Identifique_se();
    $homem->OQueEstaFazendo();

    $mulher = new mulher('Maria');
    $mulher->Identifique_se();
    $mulher->OQueEstaFazendo();


?>