<?php 

	include "../conexao.inc"; // condigo de conexão logo no início // arquivo falhando, mas no original funcionou// revisar aesta parte  
	
?>



<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8" />
		<title> Aula 44 de PHP - MySQL - Formulário com múltiplas tabelas </title>

	</head>
	<body>	

		<h1>Pesquisa: </h1> <!-- título -->
 
		<form name="fcad" action="processaAula44.php" method="get">

			<label>Nome: </label><br>   <!-- nome do botão -->
			<input type="text" name="fnome"><br/><br/> <!-- Area do botão  -->

			<label>Selecione o seu estado: </label>

			<select name="fuf">
				<?php  // criando opções do select dos estados 
					$sql="SELECT * FROM 2tb_uf order by uf ";  // variável sleecionando do banco de dados 
					$res=mysqli_query($con,$sql);  // query buscando conexão eo comando 
					while($vreg=mysqli_fetch_row($res)){ // lendo linhas retornadas pela consulta 
						$vuf=$vreg[0];  // primeira coluna com o indice 0
						$vsigla=$vreg[1]; // segunda coluna com o indice 1
						echo "<option value=$vsigla> $vuf </option>"; // option com o valor de sigla mostrando o uf 
					}

				?>
				
			</select>
			<br/><br/>

			<label>Selecione o seus meios de transportes favoritos: </label><br/>

				<?php   // selecionando meios de transporte 
					$sql="SELECT * FROM 2tb_transportes"; // selecionando tabela de transportes atravéz de array 
					$res=mysqli_query($con,$sql);
					while($vreg=mysqli_fetch_row($res)) {
						$vcod=$vreg[0]; // primeira coluna com o indice 0
						$vtra=$vreg[1]; // segunda coluna com o indice 1
						echo "<input type=checkbox name=ftransp[] value=$vcod>$vtra<br/>"; // criando a checkbox com nome em vetor e valor do codigo 
					}

				?>

			<br/>

			<input type="submit" value="Gravar Pesquisa" />

		</form>


	</body>
</html>

<?php

	mysqli_close($con);  // finalizando conexão 

  ?>