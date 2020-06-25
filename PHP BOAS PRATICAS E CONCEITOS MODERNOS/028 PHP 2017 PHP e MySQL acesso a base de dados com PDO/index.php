<?php

    $host="localhost";
    $dbname="loja";
    $dbusername="root";
    $dbpassword="";

    // $gestor = new PDO(ligação, username, password);

    // $gestor = new PDO("mysql:host=$host;dbname=$dbname", "root", "");

    $gestor = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);

    $estado = $gestor->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo $estado;


?>