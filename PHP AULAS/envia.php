<?php 

		// obs erro ao tentar enviar email, tentar achar uma soluçaõ posteriormente.erro pode ter sido ocasionado pela falata de rrestauração do programa easyphp, tentar mais tarde com ele reiniciado,  arquivo da hora também, tentar depois de reiniciado.

	$vmail=$_POST['email_txt'];  // coletando o escrito na caixa de texto através da opção name 
	$vassunto=$_POST['assunto_txt'];
	$vmsg=$_POST['msg_txt'];

	if (mail($vmail,$vassunto,$vmsg /* , "Reply-to:outroemail@gmail.com\nresp_canal@gmail.com" */)) { /* Cc Bcc Comments Content-Type:text/hmtl Date */ 
		echo "Mensagem enviada<br/>";
		echo "<a href=aula26EnviandoEmail.php target=_self>Voltar</a>";
	} else {
		echo "Erro ao enviar, tente de novo <br/>";
		echo "<a href=aula26EnviandoEmail.php target=_self>Voltar</a>";
	}
	 
 ?> 
 
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 26 de PHP - Enviando e-mails</title>
	</head>
	<body>
		
	</body>
</html>