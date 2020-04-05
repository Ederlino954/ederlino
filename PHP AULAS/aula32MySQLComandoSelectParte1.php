<?php // selecionar dados para consulta interagindo com formaula-32.html

	include "conexao.inc"; 

	//$vcat=$_POST["F_Cat"];
	$vcat1=$_POST["F_Cat1"];
	$vcat2=$_POST["F_Cat2"];
	// $sql="SELECT * FROM tb_produtos WHERE cat = $vcat";  // encontrar os registros das categorias conforme solicitado
	$sql="SELECT * FROM 2tb_produtos WHERE cat = $vcat1 OR cat = $vcat2";// definindo a condição de selecionamento do MySQL
	$res=mysqli_query($con,$sql);  // chamando o banco de dados com a variávela da conexão 
	$lin=mysqli_num_rows($res);   // quantas linhas consutadas 
	echo "$lin registros encontrados"; // impriminod quantos registros encontrados 
 
	mysqli_close($con);
	
 
 ?> 

 
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 32 de PHP - MySQL: Comando Select</title>
	</head>
	<body>

		
	</body>
</html>