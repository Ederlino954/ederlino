<?php
// Classe para gerir datas e horas 

require "cl_data_hora.php";



$d = new cl_data_hora();
echo $d->getDataHora();
echo '</br>';

$d->addHoras(39);

echo $d->getDataHora();
echo '</br>';


?>