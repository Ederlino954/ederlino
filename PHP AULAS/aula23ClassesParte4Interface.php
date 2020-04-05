<?php 
	// interface /  não pode ter seus objetos instanciados / serve de rascnho para outras classes // po-se implementar várias interfaces em uma mesma classe // tudo que está definido na interface tem que ser implementado, é como se fosse um guia // a interface não cntém variáveis / 

	interface CarroPadrao{ // criando a interface // a interface aje como um guia 
		function liga();  // implementando os métodos 
		function desliga(); // lembrar sempre que na interface todos os métodos tem que ser implementados 
		function status();
		function acelera();
		function freia();
	}
	
	interface CarroGuerra{  // criando outra interface
		function atiraCanhao(); // implementando os métodos 
		function atiraMetralhadora();
	}
	
	abstract class CarroBase implements CarroPadrao, CarroGuerra {  // qualquer classe pode implementar uma interface 
		public $potencia;
		public $velMax;
		private $ligado=false;

		function liga(){
			$this->ligado=true;
		}

		function desliga(){
			$this->ligado=false;
		}

		function status(){
			echo "<hr/>";
			echo "Potência: ".$this->potencia;
			echo "<br/> Velocidade Máxima: ".$this->velMax; 
			echo "<br/>";
			if ($this->ligado) {
				echo "Este carro está ligado";
			}else{
				echo "Este carro NÂO está ligado";
			}
			echo "<hr/>";
		}

		function acelera(){}
		function freia(){}
		function atiraCanhao(){}
		function atiraMetralhadora(){}

	} 

	class Carro extends CarroBase{ // classe carro hedando de classe CarroBase // classe para instanciar objetos 
		function Carro($pt,$vm){
			$this->potencia=$pt;
			$this->velMax=$vm;

			$this->liga();
			$this->status(); 
		}
	}

	$carro1=new Carro(150,280);  // Objeto instanciado
	//$carro1->liga();
	//$carro1->status();


 ?> 

 
 <!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 23 de PHP - Classes parte 4 </title>
	</head>
	<body>
		
	</body>
</html>