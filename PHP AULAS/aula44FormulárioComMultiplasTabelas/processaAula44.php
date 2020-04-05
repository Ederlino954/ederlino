<?php 

	include "../conexao.inc";
	
	$vnome=$_GET["fnome"];  // recebendo nome
	$vuf=$_GET["fuf"]; // recebendo estados 
	$vt_tmp=array(0,0,0,0);  // variável com array temporário gravando posições dos transportes 

	echo "Nome: $vnome - Estado: $vuf <br/>"; // esecevendo o nome e estado
	echo "Transportes selecionados: <br/>";

	foreach ($_GET["ftransp"] as $tra) { // usando loop para transportes selecionados pegando o array do formulário  
		$vt_tmp[$tra-1]=1;
		echo "$tra<br/>"; // sem necessidade essa escrita, somente utilizada para referenciar o que está sendo usado 
	}

	echo "<hr/>";

	$sql="INSERT INTO 2tb_pesquisa VALUES(NULL, '$vnome', '$vuf', '$vt_tmp[0]', '$vt_tmp[1]', '$vt_tmp[2]', '$vt_tmp[3]')"; // valor NULL por causa do autoincremento do banco de dados 
	$res=mysqli_query($con,$sql);  // pegando conexão e a variável como funçaõ de insert 

	echo "Pesquisa gravada";

	mysqli_close($con);

  ?> 