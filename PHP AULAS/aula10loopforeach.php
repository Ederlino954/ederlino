
<?php 
	// Loop FOREACH = VARRE O ARRAY E FAZ UM TESTE PARA CADA ITEM

	$transp=array("Carro","Moto","Bicicleta","Ônibus","Avião","Navio"); // VARIAVEL TRANSP COM ARRAY E ITENS

	foreach ($transp as $veiculo ) { // indicando variável para receber elementos do array
		echo "$veiculo<br/>"; // lisdta todos os elementos da variável com array
		/*if ($veiculo == "Bicicleta") {  // condição de parada do loop
			break;  // elemento de parada
		}*/
	}

	echo "<hr/>";

	foreach ($transp as $veiculo) {  // indicando variável para receber elementos do array
		if ($veiculo == "Bicicleta") { // condição de comparação
			echo "Bicicleta está na lista de veículos<br/>";
		}
		if ($veiculo == "Trem") {  // condiçaõ de comparação
			echo "Trem está na lista de veículos<br/>";
		}else{
			echo "Trem não está na lista<br/> "; // saída das comparações 
		}
	}

?>

<!DOCTYPE html> 
<html> 
	<head>
		<meta charset="utf-8" />
		<title>Aula 10 de PHP - Loop FOREACH</title>
	</head>
	<body>
		
	</body>
</html5