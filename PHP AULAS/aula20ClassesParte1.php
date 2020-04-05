<?php 

	// classe é um conjunto de variáveis e funções que são  propriedades e métodos 
	
	
	class carro{ // classe carro contendo várias funções 
		var $tipo;   // 1=Passeio  /  2=Esporte  /  3=Utilitário
		var $velMax; 
		var $nome;
		var $liga;	
		var $vel;

		function carro($tp,$no){ // método construtor com o mesmo nome da classe, é o método padrão // função com parâmetro   
			$this->tipo=$tp;  // $this == serefere a variável da classe e não areferente a função dentro da classe
			$this->liga=false; // definindos as varíaveis da classe dentro do método
			$this->nome=$no;
			$this->vel=0;
			if ($tp==1) {    // definindo condição 
				$this->velMax=160;
			}else if ($tp==2) {  
				$this->velMax=300;
			}else{
				$this->velMax=100;
			}
		}

		function ligar(){  // método de ligar // métodos trabalhando com variáveis da classe 
			$this->liga=true;
		}

		function desligar(){ // método de desligar
			$this->liga=false;
		}

		function velocidade($vl){ // método desligar
			if ($vl > $this->velMax) {  // $this == serefere a variável da classe
				$this->vel=$this->velMax;
			}else {
				$this->vel=$vl;
			}
		}

		function id(){   // método de identificação 
			echo "<hr/>";
			echo "Nome do carro: ".$this->nome;    // atribuição recebendo nome
			echo "<br/>Tipo do carro: ".$this->tipo;  // atribuição recebendo tipo
			echo "<br/>Velocidade Máxima: ".$this->velMax; // atribuição recebendo velMax
			echo "<br/>Velocidade atual: ".$this->vel; // atribuição recebendo vel
			if ($this->liga) { // liga com valor de true
				echo "<br/> Este carro está LIGADO";
			}else{
				echo "<br/> Desligado";
			}
			echo "<hr/>";
		}
	}

	$carro1=new Carro(2,"Rapid");  // criando um OBJETO da classe carro com os parâmetros
	$carro2=new Carro(3,"Carregador");
	$carro3=new Carro(1,"Basic");
	$carro4=new Carro(2,"Veloz");
	$carro5=new Carro(2,"Flecha");

	$carro1->ligar();  // chamando métodod ligar 
	$carro3->ligar();
	$carro5->ligar();

	$carro5->velocidade(200);  // indicação de velocidade máxima com limite ja definido anteriormente 

	$carro3->desligar(); // desligando o carro 3 do tipo

	$carro1->id(); // chamando método id
	$carro2->id();
	$carro3->id();
	$carro4->id();
	$carro5->id();
	
 ?> 
 
 <!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 20 de PHP - Classes parte 1 </title>
	</head>
	<body>
		
	</body>
</html>