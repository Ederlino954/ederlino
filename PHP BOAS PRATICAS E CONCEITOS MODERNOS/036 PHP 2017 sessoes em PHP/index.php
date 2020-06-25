<?php
    // Abertura da plataforma
    session_start();

    if (isset($_SESSION['nome'])) {
        echo '<p>'.$_SESSION['nome'].'</p>';
    } else {
        # code...
    }
    
?>

    <h3>LOGIN</h3>


<?php

    // inserir o formulário 
    require 'formulario.php';

?>