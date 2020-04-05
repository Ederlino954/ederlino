
<?php 
	// Funções ajuda a deixar o código menor usando quando solicitada
// sem parâmetro e sem retorno, bem básica
	function aula(){  // função com seu bloco de comando // existem funcomcom e sem parâmetros // retorno e sem retorno 
	    echo "<hr/>Olá mundo!<br/>";
	    echo "Aula sobre funções modo básico<hr/>";
    }
	
	aula(); // exemplo de chamada da função acima
	aula();
	aula();
	aula();
	aula();

//------------------------------------------------------------------------------------------------
// com parâmetros
	function soma($n1,$n2){  // função com 2 parâmetros de entrada $n1  e $n2
		$res=$n1+$n2;  // bloco da função mostrando a variável que vai receber a soma dos parâmetros 
		echo "<hr/> <br/>Soma de $n1 com $n2 = $res com parâmetros <br/> <hr/>";
	}

	soma(3,7); // exemplo da funçaõ com os parãmetros passados  
	soma(5,5); 
	soma(20,20);
	soma(30,30);

//------------------------------------------------------------------------------------------------
// com parâmetros e retorno
	function soma2($n1,$n2){
		$res=$n1+$n2;
		return $res;
	}

	$so=soma2(10,5);  // variável recebendo o resultado de uma função
	echo "<br/> O resultado é = $so <br/>";	

//------------------------------------------------------------------------------------------------
// parâmetro e retorno usando array
	$valores=array(1,3,5,7,9,12,6,4,20,18,19,34,2);
	function media($val){  // parâmetro para calcular a média
		$tam=count($val);  // variável contando tamanho de $val
		$soma=0;
		for ($i=0; $i < $tam; $i++) { // for para estabelecer padrão de contagem e imcremento
			$soma+=$val[$i]; // incremetnando $soma 
		}
		return $soma/$tam; // retornando os valores do array incrementado e dividindo por tam
	}

	$med=media($valores);
	echo "<br/>Média = $med<br/>";


?>

<!DOCTYPE html> 
<html> 
	<head>
		<meta charset="utf-8" />
		<title>Aula 11 de PHP - Funções </title>
	</head>
	<body>
		
	</body>
</html5