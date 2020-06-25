<?php 
// Namespace = evita conflito de nomes de funções dentro de arquivos quando carregados e com nomes iguais 

    function falar(){
        echo "Falei.";
    }

    require 'amigo.php';

    MinhasFuncoes\falar(); // chamando namespaces 
    ?>
        <hr>
    <?php
    falar();


?>