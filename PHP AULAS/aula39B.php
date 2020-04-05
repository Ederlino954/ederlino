
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
		<title> Aula 38 de PHP - MySQL: Comando Update</title>
	</head>
	<body>	 

			
		<?php 	
			// página não acessável sem login no formulário pertinente 
			//-----------------------------
			// DICA == transformar bloco de validação de acesso em arquivo inc, para incluir onde precisar

			if (isset($_COOKIE['numLogin'])) { // verificando se o cookie foi criado 
				$n1=$_GET["num1"]; // variável pegando o valor passado em header no arquivo aula39MySQL 
				$n2=$_COOKIE["numLogin"]; // pegando valor da variável do cookie 

				if ($n1 != $n2) { // comparação de diferença de $n1 com $n2
					echo "Login não efetuado"; 
					exit; // comando de saída 
				}
			} else {
				echo "Login não efetuado";  
				exit;
			}

			//----------------------------------------------

			include "conexao.inc"; // chamando  o arquivo de inclusão
			
			echo "Página inicial"; // imprimindo para teste de acesso a página  
						
			mysqli_close($con);  // fechando oarquivo 
		?>		
		
		</form>  	
		
	</body>
</html>