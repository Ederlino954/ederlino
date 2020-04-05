
<?php // Operaçõe com variáveis
	
	$num1=10;  // declarando variáveis
	$num2=5;

	// Aritméticos
	$res = $num1 + $num2; // operando
	echo "Soma de $num1 com $num2 = $res <hr/>"; // imprimindo e traçando a linha

	$res = $num1 - $num2;
	echo "A subtração de $num1 com $num2 = $res <hr/>";

	$res = $num1 / $num2;
	echo "A divisão de $num1 por $num2 = $res <hr/>";

	$res = $num1 % $num2; 
	echo "Resto da divisão de $num1 com $num2 = $res <hr/>";

	$res = $num1 * $num2; 
	echo "Multiplicação de $num1 com $num2 = $res <hr/>";

	$res = $num1 <> $num2; 
	echo "Diferença de $num1 com $num2 = $res <hr/>";

	//$num1 = $num1 + 1;
	$num1++;   // incremento muito usado dependendo da situação.
	echo "Novo valor de num1: $num1 <br/>";

	$num2 = $num2 + 2; //$num2*=10    ///  $num2/=10 exemplos funcionais   
	$num2 += 2;
	$num2 += 10;
	echo "Novo valor de num2: $num2 <br/>"; // mostrando o resultado

	$num1 == $num2; // iguadade
	$num1 != $num2; // diferente
	$num1 > $num2;  // maior que
	$num1 < $num2;  // menor que
	$num1 >= $num2; // maior ou igual
	$num1 <= $num2; // menor ou igual
	$num1 <> $num2; // diferença

	//  AND && = comparação 
	//  OR || = ou



?>

<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title>Aula 3 de PHP - Operações com variáveis</title>
	</head>
	<body>
		
	</body>
</html>