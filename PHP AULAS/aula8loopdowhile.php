
<?php 
	// Do while = faça enquanto
	$i = 4;
	$tam = 3;

	echo "Loop Do While<br/>";
	do {                                                   // Faça, obs: ele executa pelo menos uma vez o comando, por causa da ordem da sua estrtura
		echo "<pre>Variável i tem o valor: $i<br/>";         //....
		echo "Variável tam tem o valor: $tam<pre/><br/>";    //.....
		$i++;                                                //....
	} while ($i < $tam);                                   // Enquanto 
 
	echo "<hr/> <br/> <br/>";

	$i = 4;
	$tam = 3;

	echo "Loop While <br/> <br/>";
	while ($i < $tam) {                                      // while dependendo não executara nenhuma vez o comando, por causa da ordem de sua estrutura.
		echo "<pre>Variável i tem o valor: $i<br/>";
		echo "Variável tam tem o valor: $tam<pre/><br/>";
		$i++;
	}


?>

<!DOCTYPE html> 
<html> 
	<head>
		<meta charset="utf-8" />
		<title>Aula 8 de PHP - Loop Do While</title>
	</head>
	<body>
		
	</body>
</html5