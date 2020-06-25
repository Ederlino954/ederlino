<?php

    //$gestor->EXE_NON_QUERY("INSERT INTO cliente (nome, atualizacao) VALUES('Luis', NOW())"); // inserção

    require 'config.php';

    require 'gestor.php';

    //  inserção do primeiro cliente 

    /*
    $parametros = array('Nome do cliente');

    $gestor = new gestor();
    $gestor->EXE_NON_QUERY("INSERT INTO cliente(nome, atualizacao) VALUES(?, NOW())", $parametros);
    */

    /*

    $nome
    $idade
    $morada

    $parametros = [ 
        ":nome" => $nome,
        ":idade" => $idade,
        ":morada" => $morada, 
    ];

    $gestor = new gestor();
    $gestor->EXE_NON_QUERY("INSERT INTO cliente(nome, idade, morada) VALUES(:nome, $idade, $morada", $parametros);



    */



    $parametros = [ ":nome" => 'Cliente NOVO' ];

    $gestor = new gestor();
    $gestor->EXE_NON_QUERY("INSERT INTO cliente(nome, atualizacao) VALUES(:nome, NOW())", $parametros);

    echo '<p> TERMINADO. <p/>'


?>