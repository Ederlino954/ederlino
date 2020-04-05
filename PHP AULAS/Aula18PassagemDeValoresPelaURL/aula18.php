<?php 
	// Função passagem de valores pela URL
	$texto="Curso de PHP";
	$nome="Bruno";
	$canal="Vlog do Fessor Bruno";

 
	echo "<a href=pg1.php?tx=" .urlencode($texto). "&no=" .urlencode($nome). "&cn=" .urlencode($canal). " target=_self> Abre pg1 </a> "; 
	// link referente a pa´gina chamando a concatenação da variável para passagem pela url 
	//  urlencode($texto)   === serve para o texto na URL acitar espaços.

	//tx=" "&no=" "&cn="   ==== representam a variável da pagina que recebem a passagem


 ?>


 <!DOCTYPE html> 
 <!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 18 de PHP - Passagem de valores pela url </title>
	</head>
	<body>
		
	</body>
</html>