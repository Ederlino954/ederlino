<?php 

	// Heranças
	
	class aula{

		//var $var1="Bom dia";  sem private com acesso externo private ela fica privada
		// private    == ela só pode ser acessada pela própria classe original
		// protected  == permite acesso da classe original e variante, mas não o acesso externo.
		// var        == acesso livre em qualquer circunstância.
		// private    == pode ser usado em um método

		// opções / var / private / protected 

		protected $var1="Bom dia";  // variável protegida, permite acesso da classe e da classe variante e não permite acesso externo
		protected $var2="canalfessorbruno@gmail.com"; 
		protected $var3="www.webveste.com.br";

//		private function escreve(){ // deixando o método privado se necessitar
		function escreve(){
			echo "<br/> Método da classe aula";
			echo "<br/>".$this->var1;// imprimindo variável da classe n~çao do método
			echo "<br/>".$this->var2;
			echo "<br/>".$this->var3;
		}
	}

	/**
	* classe para herdar // herança
	*/
	class canal extends aula  // classe canal herdando características de aula.
	{
		var $vc1="Curso de PHP";
		var $vc2="Bruno";
		
		function escreve2()
		{
			echo "<br/> Método da classe canal";
			echo "<br/>".$this->vc1;
			echo "<br/>".$this->vc2;
			// echo "<hr/>";
	        echo "<br/>".$this->var1;
	        echo "<br/>".$this->var2;
	        echo "<br/>".$this->var3;
		}
	}

	$aulaOBJ=new aula();   // criando objeto da classe aula
	$canalOBJ=new canal(); // criando objeto da classe extendida canal// ela herda a classe aula

	$aulaOBJ->escreve();
	echo "<hr/>";
	// $canalOBJ->escreve();
	$canalOBJ->escreve2();
	echo "<hr/>";
	// echo $aulaOBJ->var3;

	//echo "<br/>".$aulaOBJ->var1;
	//echo "<br/>".$aulaOBJ->var2;
	//echo "<br/>".$aulaOBJ->var3;

	

 ?> 

 
 <!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 21 de PHP - Classes parte 2 </title>
	</head>
	<body>
		
	</body>
</html>