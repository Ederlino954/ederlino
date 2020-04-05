
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
		<title> Aula 40 de PHP - MySQL: Login com Sessões </title>
	</head>
	<body>	 

			
		<?php

			session_start(); // inicianod a sessão	

			// $_SESSION=array(); // elimina todas as sessoes == ver melhor caso necessite 			

			if (isset($_SESSION['numLogin'])) {  // verificando se numLogin foi criado 
				$n1=$_GET["num1"]; // atribuindo o valor 
				$n2=$_SESSION["numLogin"]; // atribuindo o valor 

				if ($n1 != $n2) { // comparação 
					echo "Login não efetuado";
					exit; // comando de saída 
				} 
			} else {
				echo "Login não efetuado";
				exit;
			}

			include "../conexao.inc"; // incuindo a conexão 
			
			echo "Página inicial <br/>";
			echo "Username: ".$_SESSION['username']."<br/>"; // escreve o nome do  user

			//  eliminar a variável da sessão opções

			//unset($_SESSION['numLogin']);   // também elimina variáveis na sessão 
			//session_unregister('numLogin'); // elimina variáveis da sessão 


			//session_destroy(): // finaliza a sessão  
						
			mysqli_close($con);
		?>		
		
		</form>  	
		
	</body>
</html>