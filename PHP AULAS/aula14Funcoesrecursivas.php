<?php 
	// Função recursiva chama a ela mesma: 
	
	function aula($num){ // função com parâmetro 

		if ($num != 0) {		
		
			echo "Função aula com valo $num <br/>";  // função imprimindo o próprio parâmetro
			aula($num-1); // $num da função sendo decrementado // função chamando a si prórpia
		}
	}

	aula(10); // chamando a função 


	// -------------------------------------------------------------------------------

	// fatorial 4! = 4x3x2x1 = 24.
	// fatorial 0 = 1.

	echo "<br><hr><br>";

	function fat($num){   // função de fatorial usando parâmetro
		if ($num < 0) {  // menor que zero retona -1
			return -1;
		}
		if ($num <= 1) { // menor ou igual retorna 1
			return 1;
		}
		return $num*fat($num-1); //  calculo do fatorial 
	}
	
	echo "Fatorial de 5: ".fat(7);

 ?>

 
 <!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 14 de PHP - FUnções Recursivas </title>
	</head>
	<body>
		
	</body>
</html>