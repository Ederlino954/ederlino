<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8" />
		<title> Aula 42 de PHP - Trabalhando com Arquivos - Parte 2 - Livro de visitas </title>

	</head>
	<body>

		<?php 

			$arquivo=fopen("visitas.txt","r"); /// abrindo o arquivo no modo de leitura com ponteiro no início do arquivo 
			while (!feof($arquivo)) {  // lendo linha por linha enquanto não chega no final do arquivo /// feof = avisa quando chega no final/// !feof significando enquanto não for o final   
				echo fgets($arquivo,4096); // ler a linha retorna a string da linha com a quantidade de Byte 
				echo "<br/>". fgets($arquivo,100);  
				echo "<br/> <br/>";				
			} 

			fclose($arquivo);  // fechando o arquivo 

		 ?>

		 <hr/>
		 <a href="index.html" target="_self">Voltar</a>

	</body>
</html>