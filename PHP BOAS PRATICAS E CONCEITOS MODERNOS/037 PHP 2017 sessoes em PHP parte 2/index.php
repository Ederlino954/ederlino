<?php
    // Abertura da plataforma    
    ini_set('session_cookie_httponly', true);
    session_start();
    if (isset($_SESSION['last_IP']) === FALSE) {
        $_SESSION['last_IP']= $_SERVER['REMOTE_ADDR'];
    } 
    if ($_SESSION['last_IP'] !== $_SERVER['REMOTE_ADDR']) {
        session_destroy();
    }


    $sessao=false;

    if (isset($_SESSION['nome'])) {        
        $sessao = true;
    }
    
    if (!$sessao) {
        // inserir o formulário 
        require 'formulario.php';
    } else {
        echo '<p>Bem vindo'.$_SESSION['nome'].' | <a href="Logout.php">Logout</a> </p>';
    }
    



?>