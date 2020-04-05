<?php 
	// Isset faz verificação de objeto valor variável, etc..

	//$aula="";  // definida
	// $aula=NULL; NÂO  nula é diferente de vazio 
	// $aula;      NÂO


	/*if (isset($aula)) {   // isset simples verificando o valor
		echo "Variável aula foi definida";
	}else{
		echo "Variável NÂO foi definida";
	}

	posso usar quando necessitar de utilizar um cadastro e verificar se as opões essenciais foram escritas, se sim o arquivo vai para a próxia sequencia 
	*/

	if (isset($_POST["f_nome"])) {  // isset verificando o post do name f_nome 
		$vnome=$_POST["f_nome"];  // recebendoo nome do nome do formulário
		echo "Nome: $vnome<br/>";	// escrevendo o nome do nome do formulário e não executando mais o formulário 	
	}else{   // iniciando e fechando após html
		echo "Dados não submetidos"; // form dentro do else que possibilita a verificação com o isset caso as verificações sejam concluídas e liberação do preenchimento.



 ?>


<!DOCTYPE html> 
	<html>
		<head>
			<meta charset="utf-8" />
			<title> Aula 17 de PHP - Isset </title>
		</head>
		<body>
			<br/><br/>
			<form name="f_aula" method="post" action="aula17FuncaoIsset.php">
				<label>Nome:</label><br/>
				<input type="text" name="f_nome"><br/>
				<input type="submit" value="Enviar">
			</form>
			
		</body>
	</html>

<?php

		} // fechando após html, refernte ao else 

?>