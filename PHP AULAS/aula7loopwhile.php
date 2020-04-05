
<?php 
	// whilwe estrutura de repetição, repete conforme uma condiçãoe estabelecida

	$i=0;   // atribuindo valor
	$tam=20;  // especificando o valor
	$vet=array($tam); // variável recebendo array

	while ( $i <= $tam) {  // executando o bloco 5 vezes pois é o valor de $tam
		echo "Valor da Variável i: $i<br/>"; // imprimindo a sequencia de $vet
		$i++; // incrementando $i
	}

	echo "<br/><br/><br/>";  // tarçando a linha

	$i = 0;
	while ($i < $tam) {
		$vet[$i]="PHP";       /// associando valores as posições dos vetores 
		/*echo "$vet[$i] <br/>";*/
		$i++;
	}

	$i = 0;
	while ($i < $tam) {      // imprimindo as posições dos vetores 
		echo "$vet[$i] <br/>"; // imprimindo o vetor com o valor do array
		$i++;
	}

	/*do {  // faça, enquanto
		# code...
	} while ( <= 10);*/


?>

<!DOCTYPE html> 
<html> 
	<head>
		<meta charset="utf-8" />
		<title>Aula 7 de PHP - Loop While</title>
	</head>
	<body>
		
	</body>
</html5