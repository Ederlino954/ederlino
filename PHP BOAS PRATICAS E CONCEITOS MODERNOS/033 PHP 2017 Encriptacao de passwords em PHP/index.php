<?php


    // $dados = $g->EXE_QUERY("SELECT * FROM cliente WHERE id_cliente < 3");
/*
    require 'config.php';

    require 'gestor.php';
    */
/*
    $pass1 = "123456";
    $enc1 = md5($pass1);
    echo "<p>$pass1</p>
         <p>$enc1</p>";
         */

// ================================
    $pass1 = "abcdef";
    $enc1 = md5($pass1);
    echo "<p>$pass1</p>
        <p>$enc1</p>";

// ================================

    $pass2 = "abcdef";
    $enc2 = password_hash($pass2, PASSWORD_DEFAULT);
    echo "<p>$pass2</p>
         <p>$enc2</p>";

// ================================

    $pass3 = "abcdef";
    $enc3 = password_hash($pass3, PASSWORD_BCRYPT);
    echo "<p>$pass3</p>
         <p>$enc3</p>";




?>