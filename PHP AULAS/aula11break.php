
<?php 
	// Break = coamndo de parada, interrompe um processamento  

	$vet=array("mouse","monitor","memória","sair","microfone","impressora"); // criando um vetor coom opções 

	$tam=count($vet);  // count faz a contagem
	$i=0;

	echo "Loop While<br/>";
	$i=0;
	while ($i < $tam) {   // para usar o while lembrar da variável dele está inicializada com um valor, normalmente 0
		echo "$vet[$i]<br/>";
		$i++;                 // incremento da variável $i
		if ($vet[$i] == "sair") { // parametro para seguir
			Break;  // interromper caso seguir a opção
		}
	}
	//-----------------------------------------------------------------------------
	echo "<br/><hr/><br/>";  // imprimindo linha com brs


	echo "Loop Do While<br/>";
	$i=0;
	do{
		echo "$vet[$i]<br/>";
		$i++;
		if ($vet[$i] == "sair") {
			Break;
		}
	} while ($i < $tam);
	//-----------------------------------------------------------------------------
	echo "<br/><hr/><br/>";


	echo "Loop For<br/>";
	for ($i=0; $i < $tam; $i++) { 
		echo "$vet[$i]<br/>";
		if ($vet[$i] == "sair") {
			Break;
		}
	}
	//-----------------------------------------------------------------------------
	echo "<br/><hr/><br/>";


	echo "Loop Foreach<br/>";
	foreach ($vet as $pc) { 
		echo "$pc<br/>";
	//	/*
		if ($pc == "sair") {
			Break;
		}
	//	*/
	}
	//-----------------------------------------------------------------------------
	echo "<br/><hr/><br/>";


	echo "Loop For<br/>";
	for ($i=0; $i < $tam; $i++) { 		
		if ($vet[$i] == "sair") {
			Break;
		}
		echo "$vet[$i]<br/>"; // impressão abaixo do if
	}

		echo "<br/><hr/><br/>";

	//-----------------------------------------------------------------------------
	echo "Loop Foreach<br/>";
	foreach ($vet as $pc) { 		
	//	/*
		if ($pc == "sair") {
			Break;
		}
	//	*/
		echo "$pc<br/>"; // impressão abaixo do if
	}

?>

<!DOCTYPE html> 
<html> 
	<head>
		<meta charset="utf-8" />
		<title>Aula 11 de PHP - Break </title>
	</head>
	<body>
		
	</body>
</html5