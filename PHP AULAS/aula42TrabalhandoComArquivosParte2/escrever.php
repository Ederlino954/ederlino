<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8" />
		<title> Aula 42 de PHP - Trabalhando com Arquivos - Parte 2 - Livro de visitas </title>

	</head>
	<body>

		<?php  // arquivo de escrita 

			$nome=$_POST['f_nome'];  // pegando o nome do formulário html 
			$msg=$_POST['f_msg'];    // pegando a mensagem do formulário html 
			$conteudo=$msg."\r\n".$nome; // variável armazenando conteúdos  

			$arquivo=fopen("visitas.txt","a"); // variável abrindo oarquivo em txt com escrita no final do arquivo
			fwrite($arquivo,$conteudo);  // escrevendo no arquivo txt 

			echo "Mensagem gravada: $conteudo ";  // imprimindo mensagme de confirmação com o conteudo referente. 			

			fclose($arquivo); 

		 ?>

		 <hr/>
		 <a href="index.html" target="_self">Voltar</a>

	</body>
</html>