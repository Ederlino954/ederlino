<?php

    // logout
    ini_set('session_cookie_httponly', true);
    session_start();
    if (isset($_SESSION['last_IP']) === FALSE) {
        $_SESSION['last_IP']= $_SERVER['REMOTE_ADDR'];
    } 
    if ($_SESSION['last_IP'] !== $_SERVER['REMOTE_ADDR']) {
        session_destroy();
    }

    


    echo '<p> Até apróxima, ' . $_SESSION['nome'] . '.</p>';    

    session_unset();
    session_destroy();

    echo '<p><a href="index.php">Voltar</a></p>';


?>