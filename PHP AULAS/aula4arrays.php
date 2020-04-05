
<?php 
	// Arrays =  conjuntos de variáveis do mesmo tipo / exemplos com vários padrões de arrays.
	/*$vet2 = array(100,200,300);  ==== exemplo de arrray com seus elementos já definidos*/			

	$vet = array(7);  // variavel recebendo array com  elementos	
	$vet2 = array('nome' => "Bruno", "cidade" => "BH", "curso" => "PHP"); // array atribuindo valor dentro das posições /'nome' => "Bruno", = nome cebendo bruno

	$mat = array(    //  array com arrays dentro                                                                              // array //////////////////////////////
		array("Carro1", 65000), // 0 , 1 valores referentes as posições
		array("Carro2", 35000), // 1 , 1  
		array("Carro3", 50000)  // 2 , 1
	);

	$i = 6;

	echo "Carro A ". $mat[0] [0] ." - Valor: ". $mat[0] [1] ."<br/>"; // imrimindo as posições comforme especificado no array // array //////////////////////////////
	echo "Carro B ". $mat[1] [0] ." - Valor: ". $mat[1] [1] ."<br/>"; //valores referentes as posições                        // array //////////////////////////////
	echo "Carro C ". $mat[2] [0] ." - Valor: ". $mat[2] [1] ."<br/>";                                                         // array //////////////////////////////
 
	$vet[0]="Carro";          // 1 posicionamento dos elementos dentro do array seguindo a ordem decrescente 
	$vet[1]="Aviao";          // 2 $vet[] === padrão para indicar o indice que o array vai receber
	$vet[2]="Navio";          // 3
	$vet[3]="Moto";           // 4
	$vet[4]="Onibus";         // 5
	$vet[5]=123456;           // 6 
	$vet[6]=$vet2["nome"];    // 7

	echo "Elemento de indice $i = ".$vet[$i]."<br/>";	
	echo "Nome:" .$vet2["nome"]." - cidade: ".$vet2["cidade"]." - curso: ".$vet2["curso"]."<br/>";

?>

<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title>Aula 4 de PHP - Vetores / Arrays</title>
	</head>
	<body>
		
	</body>
</html>