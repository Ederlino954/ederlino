<?php


    // $dados = $g->EXE_QUERY("SELECT * FROM cliente WHERE id_cliente < 3");

    require 'config.php';

    require 'gestor.php';


    $g = new gestor();

    $parametros = [
        ":id_minimo" => 3
    ];

    $dados = $g->EXE_QUERY("SELECT * FROM cliente WHERE id_cliente > :id_minimo", $parametros);

    print_r($dados); // exebição mais direta resumida 


?>