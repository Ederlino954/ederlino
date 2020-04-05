
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
		<title> Aula 40 de PHP - Trabalhando com arquivos </title>
	</head>
	<body>	 

			
		<?php 

			// basicamente o trabalho com arquivo serve para armqzenagem de informações simples 

			// r = Abre  p/leitura, ponteiro no início
			// r+ = Abre p/leitura e escrita 
			// w = Abre p/ escrita, ponteiro no início e zera, se o arquivo não estiver ele o cria
		    // w+ = Abre p/ leitura e escrita 
		    // a = Abre p/ escrita, ponteiro no final, se o arquivo não existir ele o cria 
		    // a+ = Abre p/ leitura e escrita
		    // x = Abre p/ escrita, ponteiro no início, se o arquivo já existir ele gera um erro do tipo E_WARNING
		    // x+ = Abre p/ leitura e escrita. 


			$arquivo=fopen("aula.txt", "a"); // abrindo o arquivo com a escrita no final 
			fwrite($arquivo, "\r\ncanal Fessor Bruno. "); // escrevendo no arquivo a strig \r \r escreve linha baixo no txt

			$arquivo=fopen("aula.txt", "r"); // abrindo novamente o arquivo para a leitura  
			$conteudo=fread($arquivo, 200);  // lendo arquivo os primeiros 200/ bytes 

			echo $conteudo;

			fclose($arquivo); // fechando arquivo
		?>		
		
		</form>  	
		
	</body>
</html>