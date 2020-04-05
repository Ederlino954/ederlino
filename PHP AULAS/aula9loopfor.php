
<?php 
	// Loop For

	$i = 0;
	$tam = 5;
	$vet=array($tam);


	for ($i=0; $i < $tam; $i++) {    // valorando a variável , definindo condição , incrementando 
		echo "Valor de i: $i<br/>";
	}

	echo "<br/> --------------------------------------- <br/><br/>";

	/*
	for ($i=0; $i < $tam; $i++) { 
		$vet[$i]=0;   //  $vet[$i]=$i*2 outra opção de uso;
	}
	*/
	

	echo "<br/>";
		for ($i=0; $i < 40; $i++) {   // for para construir a linha
			echo "-";
		}
	echo "<br/><br/>";



	for ($i=0; $i < $tam; $i++) { 
		$vet[$i]=$i*2;
	}

	for ($i=0; $i < $tam; $i++) { 
		echo "Valor da pos. $i: $vet[$i]<br/>";
	}


/*
outras opções de for

	for ($i=0; $i < ; $i++) { 
		# code...
	}

	foreach ($variable as $key => $value) {
		# code...
	}
*/



?>

<!DOCTYPE html> 
<html> 
	<head>
		<meta charset="utf-8" />
		<title>Aula 9 de PHP - Loop Do For</title>
	</head>
	<body>
		
	</body>
</html5