
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
		<title> Aula 33 de PHP - MySQL: Comando Select</title>
	</head>
	<body>
		<table border="1"> <!-- iniciando criando uma tabela para impressão da lista  -->
			<tr>
				<td>Código</td><td>Produto</td><td>Preço</td><td>Qtde</td><td>Categoria</td>
			</tr>

			<?php  //  listando elementos existentes dentro do banco de dados 

				include "conexao.inc"; /// fazendo a conexão
				
				$vcat1=$_POST["F_Cat1"]; // recebendo conteúdo da categoria
				$vcat2=$_POST["F_Cat2"]; // recebendo conteúdo da categoria 
				$vcat3=$_POST["F_Cat3"]; // recebendo conteúdo da categoria ----- 	ADAPTAÇÃO  ------- 
				
				$sql="SELECT * FROM 2tb_produtos WHERE cat = $vcat1 OR cat = $vcat2 OR cat = $vcat3"; // definindo condição de selecionamento de uma ou outra categoria 
				$res=mysqli_query($con,$sql);
				while($vreg=mysqli_fetch_row($res)) { // mysqli_fetch_row = organiza o resultado em vetor controlando o while
					$vcod=$vreg[0];  // variáveis guardando posições 
					$vprod=$vreg[1];
					$vpreco=$vreg[2];
					$vqtde=$vreg[3];
					$vcat=$vreg[4];


					echo "<tr>";
					//echo "$vcod <br/> $vprod <br/> $vpreco <br/> $vqtde <br/> $vcat <hr/>"; // listando sem formatação 
					echo "<td>$vcod</td> <td>$vprod</td> <td>$vpreco</td> <td>$vqtde</td> <td>$vcat</td>";  // listando em tabelas 
					echo "<tr/>";
				}
				 
				mysqli_close($con); // fechando a conexão 	 
			 
			?> 

    	</table> <!-- Finalizando a tabela de impressão da lista  -->
		
	</body>
</html>