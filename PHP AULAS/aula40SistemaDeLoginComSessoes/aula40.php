
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
		<title> Aula 40 de PHP - MySQL: Login com Sessões </title>
	</head>
	<body>	 

			
		<?php 

			include "../conexao.inc"; // carregando arquivo de conexão a pasta externa ao projeto 

			$user=$_POST['f_user']; // pegando o valor de user
			$senha=$_POST['f_senha']; // pegando o valor de senha

			$sql="SELECT * FROM 2tb_cadastro WHERE username='$user' AND senha='$senha' "; // selecionando no banco de dados e comparando os os dois valores
			$res=mysqli_query($con,$sql); // cahamando a conexão e varipavel de comparaçaõ no banco de dados 
			$linha=mysqli_affected_rows($con); // linhas afetadasd no banco de dados 

			if ($linha > 0) {  
				$num=rand(100000,900000);  // faixa de numeraçaõ aleatória para comparação 
				session_start();  // iniciando a sessão 
				$_SESSION['numLogin']=$num; // criando a variável na sessão e atribuindo o valor de $num // variável em sessão pode ser resgatada em qualquer página, isso é uma vantagem 
				$_SESSION['username']=$user; // criando a variável na sessão e atribuindo o vlor de $user 
				header("Location:aula40B.php?num1=$num"); // // passando o arquivo que será chamado
			} else {
				echo "ERRO no login <br/>";
				echo " <a href='formAula-40.html'> Voltar </a> ";  // voltanod ao formulário  
			}
			

						
			mysqli_close($con);  // fechando conexão 
		?>		
		
		</form>  	
		
	</body>
</html>