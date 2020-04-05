<?php 
 // NO CASO DO TEXT DE E-MAIL SERVIDOR, USEI O SENDMAIL, MAS NÃO DEU CERTO 

 ?> 

 
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 26 de PHP - Enviando e-mails</title>
	</head>
	<body>

		<form name="email" method="post" action="envia.php"> <!-- ARQUIVO DESTINADO A RECEBER EMAIL APÓS CONFIGURAÇÃO DO SENDMAIL --> 
			<label>e-mail</label><br/>
			<input type="text" name="email_txt"><br/>

			<label>Assunto</label><br/>
			<input type="text" name="assunto_txt"><br/>

			<label>Mensagem</label><br/>
			<textarea name="msg_txt" rows="5" cols="50"></textarea><br/><br/>

			<input type="submit" value="enviar">			
		</form>
		
	</body>
</html>