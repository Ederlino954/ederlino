<?php 
	// static é o que pertence Á classe e não ao objeto 
	class Carro{
		public $cor;
		public static $vel;   // // static usa	self::$	 em o mesmo registro de memória 

		function Carro($cr){  // método construtor
			$this->cor=$cr;
			self::$vel=0;    // static usa	self::$	 == padrão de acesso a variável static 		
		}

		function mudaVel($vl){ 
			self::$vel=$vl;
		}

		function status(){
			echo "<hr/>";
			echo "cor: ".$this->cor;  // variável públic da classe Carro 
			echo "<br/> Velocidade: ".self::$vel;
			echo "<hr/>";			
		}
 
	}

	$car1=new Carro("Vermelho");
	$car2=new Carro("Verde");
	$car3=new Carro("Azul");


	$car1->status(); 
	$car2->status();
	$car3->status();

	echo "<br/> Velocidade alterada<br/><br/>";
	$car1->mudaVel(100);

	$car1->status(); // o valor static por ter o mesmo endereço de memória não altera o valor
	$car2->status();
	$car3->status();

	echo "<br/> Velocidade alterada<br/><br/>";
	$car2->mudaVel(230);

	$car1->status();// o valor static por ter o mesmo endereço de memória não altera o valor
	$car2->status();
	$car3->status();

 ?> 

 
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 24 de PHP - Classes parte 5</title>
	</head>
	<body>
		
	</body>
</html>