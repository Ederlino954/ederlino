<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8" />
		<title> Aula 43 de PHP - Trabalhando com Arquivos - Parte 3 - Contador de acessos </title>

	</head>
	<body>

		<?php 

			// r = abre p/ leitura, ponteiro no início
		    // w = Abre p/ escrita, ponteiro no in´cio e zera, se o arquivo não existir 

			$arquivo=fopen("contador.txt", "r");  // abrindo arquivo para a leitura 
			$cont=fread($arquivo, 21);    // funçaõ de leitura  999 999 999 999 999 999 999 quantidae referente ao valor de 21 Bytes
			$cont++; // a cada acesso incrementando o contador 
			$arquivo=fopen("contador.txt", "w"); // escrevendo o valor no arquivo e zera antes de escrever para atualizar o valor 
			fwrite($arquivo,$cont);  // escrevendo novo valor 
			fclose($arquivo);  // fechando arquivo 

			echo "Quantidade de acessos: $cont<br/>";  // escrevevndo a quantidade de acesso 

		 ?>


	</body>
</html>