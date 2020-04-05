
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
		<title> Aula 38 de PHP - MySQL: Comando Update</title>
	</head>
	<body>	 

			
		<?php // página responsável por recever os dados de login fazera consulta no banco de Dados dando ou não permissão caso respeitada a condiçaõ da consulta 

			include "conexao.inc";	

			$user=$_POST['f_user'];  // pegando os dados do campo user de usuário 
			$senha=$_POST['f_senha'];  // pegando dados do campo senha com o  valora da senha 

			$sql="SELECT * FROM 2tb_cadastro WHERE username='$user' AND senha='$senha' "; // condição comparando com base nos dados forenecidos em user e senha 
			$res=mysqli_query($con,$sql); // chamando banco de dados e vari´pavel con condiçaõ de validaçaõ de senha e usuário 
			$linha=mysqli_affected_rows($con);  // armazenando quantas linhas foram afetadas por este select 

			if ($linha > 0) {  // condição > 0 significando que registro foi encontrado 
				$num=rand(100000,900000); // faixa de geração de número aleatório para usar de comparção para permitir acesso ou não.
				setcookie("numLogin",$num); // criando cookie para número gerado 
				header("Location:aula39B.php?num1=$num"); // passando o arquivo que será chamado 
			} else {
				echo " ERRO no login <br/> ";
				echo " <a href='formAula-39.html'> Voltar </a> "; // imprimindo o link de volta ao formulário 
			}		

						
			mysqli_close($con);
		?>		
		
		</form>  	
		
	</body>
</html>