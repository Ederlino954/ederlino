<?php

    //$dataatual = date('d-m-Y H:i:s');
   // echo $dataatual;

    //$dataatual1 = new DateTime(); // abordagem diferente e atual 
    //echo $dataatual1->format('d-m-Y');

    // referencia na documentação para questão de data para funcionamento de servidores com relaçaão aos fuso horários 


    $datahoje = new DateTime('today');

    // hoje
    echo $datahoje->format('d-m-Y');

    $datahoje->add(new DateInterval('P10D'));

    // hoje + 10 dias 
    echo $datahoje->format('d-m-Y');

?>