
<?php 
	// IF-ELSE
	/*

	if (condition) { // condição simples, não aceita, então sai do programa. 
		
	}
	*/
	
	$nota=70; // atribuindo valor

	if ($nota >= 70) {   
		echo "<font color=blue> Aprovado <font/>"; 
	}else if($nota >= 50){
		echo "<font color=orange> Recuperação <font/>";
	}else{
		echo "<font color=red> Reprovado <font/>";
	}


	if (($nota >= 40)&($nota <= 60)) {  // paraetro de comparação
		echo "<hr/> Aluno selecionado";
	}else{
		echo "<hr/> Aluno fora da faixa";
	}

?>

<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title>Aula 5 de PHP - Condicional IF/ELSE</title>
	</head>
	<body>
		
	</body>
</html5