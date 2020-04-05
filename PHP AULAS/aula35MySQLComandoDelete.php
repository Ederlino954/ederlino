
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
		<title> Aula 35 de PHP - MySQL: Comando Delete</title>
	</head>
	<body>		
			<?php 

				// Delete = deleta o índice indicado por meio de qualquer campo da tabela  

				include "conexao.inc"; 	

				$sql="Delete FROM 2tb_uf WHERE sigla= 'RJ' "; // Delete sendo usado no campo do cod 
				$res=mysqli_query($con,$sql);  // chamando banco de dados e variável com condiçaõ de delete  
				$lin=mysqli_affected_rows($con); // elementos afetados 

				if ($lin > 0) { // condição de registro  
					echo "Registro deletado"; 
				} else {
					echo "Nenhum registro deletado"; 
				}
								
				mysqli_close($con);			 
			 
			?>     	
		
	</body>
</html>