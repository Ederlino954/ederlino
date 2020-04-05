
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
		<title> Aula 36 de PHP - MySQL: Deletando registros selecinados</title>
	</head>
	<body>	 

		<form name="f_excluir" method="post" action="aula36MySQLDeletandoRegistrosSelecionados.php"> 

			<table border="1">
				<tr>
					<td>Codigo</td><td>Nome</td><td>Selecionar</td>
				</tr>	
					<?php 	// marcando itens para deletar os Registros // deletação que será finalizada na sequencia 

						include "conexao.inc"; // iniciando conexão

						$sql="SELECT * FROM 2tb_cadastro order by cod"; // condição de selecionamneto para deletar 
						$res=mysqli_query($con,$sql);

						while ($vreg=mysqli_fetch_row($res)) {
							$vcod=$vreg[0];  // posição dos registros no banco de dados 
							$vnome=$vreg[1]; // posição dos registros nos bancos de dados 

							echo "<tr/>";
							echo "<td>$vcod</td> <td>$vnome</td>";
							echo "<td align=center> <input type=checkbox value=$vcod name=sel[]></td>"; // escrevendo o conteúdo da variável com checkbox com valor da variável 
							echo "<tr/>";
						}

						mysqli_close($con); // finalizando conexão 
					?>				
			</table>

			<br/>

			<input type="submit" value="Excluir" name="bt_excluir">			
				
		</form>  	
		
	</body>
</html>