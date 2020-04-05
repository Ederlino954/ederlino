
 
<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
		<title> Aula 34 de PHP - MySQL: Operador LIKE </title>
	</head>
	<body>
		<table border="1"> <!-- iniciando tabela -->
			<tr>
				<td>Código</td><td>Produto</td><td>Preço</td><td>Qtde</td><td>Categoria</td>
			</tr>

			<?php 

			// Comando LIKE pesquisa, sinal de % = letra qualquer // '%a%' = letra no meio // 'a%' = letra no início 
			// '%a' = letra no final // _o = marca posicionamento, exemplo o na segunda posição // a assim sucessivamente 
			// NOT LIKE marca letras e caracteres escludentes da pesquisa 

				include "conexao.inc"; 	

				$vpes="c"."%"; // acita esta forma caso precise concatenar
				//$vpes="%c%";  // forma de escrita direta 			
				

				$sql="SELECT * FROM 2tb_produtos WHERE produto LIKE '$vpes'"; // aceita duplo teste de itens 
				$sql="SELECT * FROM 2tb_produtos WHERE codigo LIKE '$vpes'"; // (( WHERE codigo == marcando o item de comparação0 )) ///  variavel com condição do LIKE
				$res=mysqli_query($con,$sql); // chamando conexão com banco de dados e acionando a variável de condição 
				while($vreg=mysqli_fetch_row($res)) { // mysqli_fetch_row = organuza o resultado em vetor controlando o while
					$vcod=$vreg[0];
					$vprod=$vreg[1];
					$vpreco=$vreg[2];
					$vqtde=$vreg[3];
					$vcat=$vreg[4];


					echo "<tr>";
					//echo "$vcod <br/> $vprod <br/> $vpreco <br/> $vqtde <br/> $vcat <hr/>";
					echo "<td>$vcod</td> <td>$vprod</td> <td>$vpreco</td> <td>$vqtde</td> <td>$vcat</td>";
					echo "<tr/>";
				}
				 
				mysqli_close($con);			 
			 
			?> 

    	</table>  <!-- Finalizando tabela -->	
		
	</body>
</html>