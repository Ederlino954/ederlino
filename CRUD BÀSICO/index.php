<!DOCTYPE html>

<?php
		include("conexao.php");
		$grupo = selectAllPessoa();

		//var_dump($grupo); // apenas para teste 
?>

<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>Agenda pessoal</h1>
		<a href="inserir.php">Add Pessoa</a>

		<table border="1">

			<tbody>
				<thead>
					<tr>
						<th>Nome</th>
						<th>Nascimento</th>
						<th>Telefone</th>
						<th>Endereço</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
				</thead>
			</tbody>

			<tbody>	
				
		<?php   foreach ($grupo as $pessoa) {  ?>
					<tr>
						<td><?=$pessoa["nome"]?></td>
						<td><?=formatoData($pessoa["nascimento"])?></td>
						<td><?=$pessoa["telefone"]?></td>
						<td><?=$pessoa["endereco"]?></td>
						<td>
							<form name="alterar" action="alterar.php" method="POST">
								<input type="hidden" name="id" value=<?=$pessoa["id"]?>>
								<input type="submit" value="Editar" name="editar">
							</form>
						</td> 
						<td>
							<form name="excluir" action="conexao.php" method="POST">
								<input type="hidden" name="id" value=<?=$pessoa["id"]?>>
								<input type="hidden" name="acao" value="excluir">
								<input type="submit" value="Excluir" name="excluir">
							</form>
						</td>					
					</tr>

		<?php   }  ?>

								
			</tbody>
			
		</table>
		<?php
			function formatoData($data){
				$array = explode("-", $data);
				// $data = 2016-04-14
				// $array[0]=2016 $array[1]=04 $array[0]=14
				$novaData = $array["2"]."/".$array["1"]."/".$array["0"];
				return $novaData;
			}

		?>

	</body>
</html>