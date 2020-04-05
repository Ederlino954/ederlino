<?php 

	include "../conexao.inc"; // chamando conexão 
	
	$vnome=$_POST['f_nome'];   // pegando os dados 
	$vsenha=$_POST['f_senha'];
	$vsexo=$_POST['f_sexo'];
	$vesporte=$_POST['f_esporte'];

	if (isset($_POST['f_tcarro'])) { // verificando existencia com isset e retorno 1 ou 0 dependendo do caso
		$vtcarro=$_POST['f_tcarro']; // ou  $vtcarro=1 ////== aceitável desta forma representando o valor 1
	} else {
		$vtcarro=0;
	}


	if (isset($_POST['f_tmoto'])) { // verificando existencia com isset e retorno 1 ou 0 dependendo do caso
		$vtmoto=$_POST['f_tmoto'];
	} else {
		$vtmoto=0;
	}


	if (isset($_POST['f_tonibus'])) { // verificando existencia com isset e retorno 1 ou 0 dependendo do caso
		$vtonibus=$_POST['f_tonibus'];
	} else {
		$vtonibus=0;
	}	

	$vcoment=$_POST['f_coment']; // pegando os comentários 

	$sql="INSERT INTO 2tb_revisao VALUES (NULL, '$vnome', '$vsenha', '$vsexo', '$vesporte', '$vtcarro', '$vtmoto', '$vtonibus', '$vcoment' )"; // NULL porque é auto incremento e pegando as variáveis pertinentes 
	$res=mysqli_query($con,$sql);

	echo "Registro gravado <br/>";
	echo "<a href=formRevisao45.php target=_self> Voltar </a>"; // retorno 

	mysqli_close($con);

  ?>