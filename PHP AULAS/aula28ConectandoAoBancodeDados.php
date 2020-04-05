<?php 

		// obs Aula 27 foi direta no mysql
		// Conexão com o banco de dados
		// incluindo o arquivo de coneç=xão com extensão.inc
    /*
	$con=mysqli_connect("localhost","root",""); // chamada padrão para chamar ao banco de dados
	mysqli_select_db($con,"tb_cadastro"); // comando chamando variável acima com banco de dados carregado
	*/

	include "conexao.inc";  // código acima passado para arquivo conexão.inc com syntax de PHP e sendo chamado como o include que inclui.

	mysqli_close($con); // chamada para fechar conexão, deve-se sempre fechar a conexão 
	
 
 ?> 
 
 
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 28 de PHP - Conexão com o banco de dados</title>
	</head>
	<body>
		
	</body>
</html>