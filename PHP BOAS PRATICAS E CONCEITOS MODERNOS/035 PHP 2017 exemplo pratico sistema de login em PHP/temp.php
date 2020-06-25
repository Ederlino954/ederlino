<?php

    // usuario 
    $usuario = 'Admin';
    $senha = 'abc';
    $nome_completo = 'Administrador';

    require 'config.php';
    require 'gestor.php';

    // parametros do usuario 
    $parametros = [
        ":usuario" => $usuario,
        ":senha" => md5($senha),
        ":nome_completo" => $nome_completo
    ];

    // inserir usuário na BD
    $gest = new gestor();
    $gest -> EXE_NON_QUERY("INSERT INTO usuarios(usuario, senha, nome_completo) VALUES(:usuario, :senha, :nome_completo)", $parametros);                                      

    echo 'TERMINADO';

?>