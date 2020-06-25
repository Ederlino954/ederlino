<?php

    //$dataatual = date('d-m-Y H:i:s');
   // echo $dataatual;

    //$dataatual1 = new DateTime(); // abordagem diferente e atual 
    //echo $dataatual1->format('d-m-Y');

    $dataontem = new DateTime('yesterday');
    $datahoje = new DateTime('today');

    echo '<p>'.$dataontem->format('d-m-Y').'</p>';
    echo '<p>'.$datahoje->format('d-m-Y').'</p>';

    if ($dataontem < $datahoje) {
        echo 'sim';
    } else {
        echo 'não';
    }

    // referencia na documentação para questão de data para funcionamento de servidores com relaçaão aos fuso horários 

?>