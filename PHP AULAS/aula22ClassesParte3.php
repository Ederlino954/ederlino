<?php 

	// Classes abstratas, classes instanciada que não pode instanciar objetos

	
	abstract class CarroBase{ // definindo uma classe abstrata// não se pode instânciar objetos de classes abstratas
		public $potencia;  // plubic ou var vai ter a mesma função
		public $velMax;
		public $portas;
		public $ligado=false;

		abstract function teste();  // metodo abstrato não pode ter código // tendo um método abstrato ele dever ser implementado para evitar erro

		function liga(){
			$this->ligado=true;
		}

		function desliga(){
			$this->ligado=false;
		}

		function status(){
			echo "<hr/>";
			echo "Potência: ".$this->potencia;
			echo "<br/> Velocidade máxima: ".$this->velMax;
			echo "<br/>Portas: ".$this->portas;
			echo "<br/>";
			if ($this->ligado) {
				echo "Carro ligado";
			}else{
				echo "Carro desligado";
			}
			echo "<hr/>";

		}
	}


	/**
	* 
	*/
	class Carro extends CarroBase{ // classe Carro extendendo de CarroBase
		
		function Carro($pt,$vm,$po){  // metodo acrescentando naclasse carro o que já tem da classe que deriva a CarroBase
			$this->potencia=$pt;
			$this->velMax=$vm;
			$this->portas=$po;
			$this->status();
		}

		function teste(){ // implementando método abstrato para que não gere erro 

		}
	}

	$carro1=new Carro(150,250,4); // criando objeto da classe Carro atribuindo os parâmetros
	$carro1->liga();
	$carro1->status();

	$carro1=new Carro(150,250,4);
	$carro2=new Carro(100,150,4);
	$carro3=new Carro(55,140,2);
	$carro4=new Carro(300,380,4);
	

 ?> 

 
 <!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 22 de PHP - Classes parte 3 </title>
	</head>
	<body>
		
	</body>
</html>