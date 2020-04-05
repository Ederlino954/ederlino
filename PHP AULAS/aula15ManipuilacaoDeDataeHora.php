<?php 
	// Manipulação de data e Hora

	$dia = date("d"); 
	$mes = date("m"); 
	$ano = date("Y"); // y minúsculo com 2 dígitos maiúculo com 4 dígitos

	$meses=array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

	// echo $dia. " de " .$mes. " de " .$ano;

	$hora=date("H");   // h:12 horas // // H:24 horas //
	$minuto=date("i");
	$segundo=date("s");

	echo $dia. " de " .$meses[$mes-1]. " de " .$ano. "<br>"; // impressão da data com mês por extenso.
	echo $hora. ":" .$minuto. ":" .$segundo; 
	// obs: testar a atualização do Timezone no arquivo httpd.conf, pois não funcionou a restauração do timezone.
 ?>


 <!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 15 de PHP - Mnipulação de data e Hora </title>
	</head>
	<body>
		
	</body>
</html>