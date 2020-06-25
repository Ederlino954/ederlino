<?php


    // $dados = $g->EXE_QUERY("SELECT * FROM cliente WHERE id_cliente < 3");
/*
    require 'config.php';

    require 'gestor.php';
    */

// =============================================================
// BD
$usuario = "Joao";
$pass = md5("123456"); // "123456" - asagsdguas6gyfyufsd6t89t7fg9876GUGIUG5Q85


// =======================
// formulário 
// Usuário : _____________
// Senha : _____________


$f_usuario = "Joao";
$f_pass = "123456";

// lógica 
$hash = md5($f_pass);

// Analisar o login 
if ($f_usuario == $usuario && $hash = $pass) {
    echo '<p>Sucesso!</p>';
} else {
    echo '<p>Insucesso!</p>';
}



?>