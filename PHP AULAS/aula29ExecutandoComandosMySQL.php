<?php 

		// obs Aula 27 foi direta no mysql
		// Conexão com o banco de dados
		// incluindo o arquivo de coneç=xão com extensão.inc

	include "conexao.inc";  // arquivo de conexão adaptado para teste 

	$res=mysqli_query($con,"SELECT * FROM 2tb_cadastro"); // selecionando tabela 
	$linhas=mysqli_num_rows($res); //  Procurando quantidade de registros nas tabelas 
	echo "Encontrados $linhas registros na tabela 2tb_cadastro";  // imprimindo os registros em $linhas  


	mysqli_close($con);  // fechament da conexão padrão 
	
 
 ?> 

 
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 29 de PHP - Executando comandos MySQL</title>
	</head>
	<body>
		
	</body>
</html>