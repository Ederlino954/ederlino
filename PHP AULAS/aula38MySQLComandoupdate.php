
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
		<title> Aula 38 de PHP - MySQL: Comando Update</title>
	</head>
	<body>	 
			
		<?php 

			include "conexao.inc"; 	

			// UPDATE= tabel //// SET= campo a ser alteraso ////// WHERE= condição

			$sql="UPDATE 2tb_cadastro SET telefone='31777777778' WHERE cod=8"; // definindo como o update irá funcionar nocaso com base no código // lemrar sempre de utilizar WHERE // obs quando o valor do código não existe na tabela ele ainda marca que o registro foi atualizado com sucesso. 

			$res=mysqli_query($con,$sql); // chamando a conexão e a variável com comando de update  

				if ($res) {  // condião para imprimir a na tela 
					echo "Registro atualizado com sucesso";
				} else {
					echo "ERRO na atualização do registro";
				}
						
						
			mysqli_close($con);
		?>		
		
		</form>  	
		
	</body>
</html>