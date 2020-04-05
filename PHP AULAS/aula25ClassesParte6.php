<?php 
	// final é aplicado em métodos não em propriedades
	/*final*/ abstract class CarroBase{ // final não permite a herdação criando a mensagem de erro.
		public $cor;
		public $vel=0;       // // static usa	self::$	

		function CarroBase($cr){ 
			$this->cor=$cr;	      // static usa	self::$			
		}
		
		function status(){
			echo "<hr/>";
			echo "cor: ".$this->cor;
			echo "<br/> Velocidade: ".$this->vel;
			echo "<hr/>";			
		}

		final function Cor(){   // final não permite a sobrescrição do método criando a mensagem de erro.
			echo "<hr/>";
			echo "Minha cor: ".$this->cor;
			echo "<br/>Método original <hr/>";			
		}
	}


		class Carro extends CarroBase{ // esse método cor sobrescreve o método cor anterior
			/*
			function Cor(){
				echo "<hr/>";
				echo "Cor: ".$this->cor,"<hr/>";
			}
			*/
		}

		class transp extends CarroBase{
			
		}		

		

		$car=new Carro("Vermelho");  // criando objeto 
		$tra=new Transp("Azul");

		$car->cor();
		$tra->cor();


 ?> 

 
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 25 de PHP - Classes parte 6</title>
	</head>
	<body>
		
	</body>
</html>