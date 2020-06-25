<?php


    // $dados = $g->EXE_QUERY("SELECT * FROM cliente WHERE id_cliente < 3");
/*
    require 'config.php';

    require 'gestor.php';
    */

// =============================================================
// BD
$usuario = "Joao";
$pass = password_hash("123456", PASSWORD_DEFAULT); 


// =======================
// formulário 
// Usuário : _____________
// Senha : _____________


$f_usuario = "Joao";
$f_pass = "123456";

// lógica 


// Analisar o login 
if ($f_usuario == $usuario && password_verify($f_pass, $pass) ) {
    echo '<p>Sucesso!</p>';
} else {
    echo '<p>Insucesso!</p>';
}



?>