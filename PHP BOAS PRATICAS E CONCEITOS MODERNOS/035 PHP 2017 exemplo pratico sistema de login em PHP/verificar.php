<?php

    // verifica se os dados estão corretos 

    $usuario = $_POST['txt_usuario'];
    $senha = $_POST['txt_senha'];

    require 'config.php';
    require 'gestor.php';

    $parametros = [
        ":usuario" => $usuario,
        ":senha" => md5($senha)
    ];

    $gest = new gestor();
    $resultados = $gest->EXE_QUERY("SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha", $parametros);

    if (count($resultados)==0) {
        echo 'Login inválido.';
    } else {
        echo 'Login válido.';

        // entrar na plataforma..... .
    }
    




?>