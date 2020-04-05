<?php 

		// obs Aula 27 foi direta no mysql
		// Conexão com o banco de dados
		// incluindo o arquivo de coneç=xão com extensão.inc

	include "conexao.inc"; 

	$vnome="vbbb";  // variável para inserção 
	$vuser="vaaziccao";
	$vsenha="vaazig123333";
	$vmail="vcanalfessorbruno@gmail.com";

	$vtel="08000000";
	$vst=1;
	$vobs="vTudo ok zigaaaa";

	// primeiro campo é nulo porque é o do código que está com incremento automático 
	// variável sem aspas simples é de valor INT
	$sql="INSERT INTO 2tb_cadastro VALUES (NULL, '$vnome', '$vuser', '$vsenha', '$vmail', '$vtel', $vst, '$vobs')"; // variáveis para a inserção 
	$res=mysqli_query($con,$sql); // pegando a conexão e inserindo as variáveis da variável $sql. 
	$num=mysqli_affected_rows($con); // marcando linhas afetadas 
	echo "$num registro inserido. ";

	mysqli_close($con);
	
 
 ?> 

  
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 30 de PHP - MySQL: Comando Insert</title>
	</head>
	<body>
		
	</body>
</html>