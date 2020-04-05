
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />  
		<title> Aula 37 de PHP - MySQL: Deletando registros selecinados</title>  
	</head>
	<body>	 

		<form name="f_excluir" method="post" action="aula37MySQLDeletandoRegistrosSelecionadosParte2.php">  

			<table border="1">
				<tr>
					<td>Codigo</td><td>Nome</td><td>Selecionar</td>  <!-- CRIANDO PRIEMIRAS LINHAS DA TABELA -->
				</tr>	
					<?php // funcionando bem graças a Deus
					
						include "conexao.inc";	// inclusão do arquivo

						if (isset($_POST['sel'])) { // O isset verifica se o item já foi criado com base no campo sel, no caso a variável $_POST
							foreach ($_POST['sel'] as $codigo) {  // fazendo a verificação e sel contendo os elementos selecionados 
								$sql="delete FROM 2tb_cadastro WHERE cod=$codigo"; // variável deletando quando a condição definir 
								$res=mysqli_query($con,$sql); // chamando o banco de dados e a variaável de exclusão 
							}
						} else {
							echo "form NÃO submetido";
						}						

						$sql="SELECT * FROM 2tb_cadastro order by cod"; // condição de selecionamneto para deletar
						$res=mysqli_query($con,$sql);

						while ($vreg=mysqli_fetch_row($res)) {
							$vcod=$vreg[0];  // posição dos registros no banco de dados 
							$vnome=$vreg[1];  // posição dos registros no banco de dados 

							echo "<tr/>";
							echo "<td>$vcod</td> <td>$vnome</td>";
							echo "<td align=center> <input type=checkbox value=$vcod name=sel[]> </td>";  // escrevendo o conteúdo da variável com checkbox com valor da variável
							echo "<tr/>";
						}

						mysqli_close($con);
					?>				
			</table>

			<br/>

			<!-- <input type="hidden" name="f_del" value="f_del">   campo em oculto vutilizando co o isset  -->
			<input type="submit" value="Excluir" name="bt_excluir" />
				
		</form>  	
		
	</body>
</html>