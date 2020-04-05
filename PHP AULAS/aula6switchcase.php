
<?php 
	// Switch case gera opções para se escolher dentro de opções postas

	$opc = 2;  // 1:Carro - 2:Moto - 3:Bcicicleta - 4:Navio - 5:Avião

	switch ($opc) { // em () a variável para se fazer o teste 
		case 1:            // valor especificado pelo xase
			echo "Carro";
			break;
		case 2:
			echo "Moto";
			break;
		case 3:
			echo "Bicicleta";
			break;
		case 4:
			echo "Navio";
			break;
		case 5:
			echo "Avião";
			break;		
		default:     // caso as opções anteriores não forem utilizadas 
			echo "Transporte inválido";
			break;
	}

	echo "<hr/>";

	switch ($opc) {
		case ($opc <= 3 and $opc > 0): // case aceita condição também, nesse caso condição de faixa de valores para a opção
			echo "Transporte terrestre";
			break;
		case 4:
			echo "Transporte marítimo";
			break;
		case 5:
			echo "Transporte aéreo";
			break;

		default: // caso as opções anteriores não forem utilizadas 
			echo "grupo inexistente";
			break;
	}


?>

<!DOCTYPE html> 
<html> 
	<head>
		<meta charset="utf-8" />
		<title>Aula 6 de PHP - Condicional SWITCH CASE</title>
	</head>
	<body>
		
	</body>
</html5