<?php 

	include "conexao.inc"; // incluindo arquivo de conexão 

	$vcod=$_POST["F_Cod"];  // pegando no arquivo da tabela o item refente ao nome
	$vprod=$_POST["F_Prod"]; // pegando no arquivo da tabela o item refente ao nome
	$vpreco=$_POST["F_Preco"]; // pegando no arquivo da tabela o item refente ao nome
	$vqtde=$_POST["F_Qtde"]; // pegando no arquivo da tabela o item refente ao nome

	$sql="INSERT INTO 2tb_produtos VALUES ('$vcod', '$vprod', $vpreco, $vqtde)"; // variável recebendo a função de inserir os avalores refentes 
	$res=mysqli_query($con,$sql);  // gravação no banco de dados 
	$linhas=mysqli_affected_rows($con); // verificação se tudo deu certo 

	if ($linhas == 1) {  // 1 baseando no insert de 1 registro 
		echo "Reistro gravados com sucesso<br/>";
	}else{
		echo "Falha na gravação do registro<br/>";
	}

	mysqli_close($con);
	
 
 ?> 

 
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 31 de PHP - MySQL: Comando Insert com formulário</title>
	</head>
	<body>

		<br/>
		<a href="formAula-31.html">Voltar</a>
		
	</body>
</html>