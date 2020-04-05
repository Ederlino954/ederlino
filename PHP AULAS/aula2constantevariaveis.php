<?php 
	// Variável= basicamente varia os dados recebidos
	// Variável sempre começa com o simbolo $
    //  a variável se adapta ao uso dela não precisando especificar se é string, int, etc.

	$vnome="Bruno";  // sempre lembrar do $ para indicar variável e string entre aspas
	$vnum=10;
	$vnum2="20.5"; 
	$vsoma="0";

	// Constantes = é constante no seu dado
	// constante não altera o valor, variável altera o valor

	define("cnome", "Bruno"); // define: define a instrução de constante.('nome','valor')
	define("ver", PHP_VERSION); // PHP_VERSION: constante padrão definida de versão// constante 'ver' com valor de PHP_VERSION
	define("dir",__DIR__);// constante 'dir' com o valo __DIR__ mostra o diretório
	
 
	echo "nome: $vnome <br/>"; // exibindo a variável
	$vnome="Campos";
	echo "nome: $vnome <br/>";
	$vnome="Bruno";
	echo "Nome:".$vnome."<br/>";
	$vsoma=10+20;
	echo "Soma: $vsoma<br/>";

	echo "<hr/>";

	echo "Constante cnome: ".cnome."<br/>"; // deve-se concatenar quando se trabalha com constante

	echo "Caminho do arquivo: ".   __FILE__; // indica o nome do arquivo
	echo "Versão do PHP: ".ver."<br/>";
	echo "Diretório: ".dir."<br/>";

	echo "Versão do SO: ".PHP_OS."<br/>"; // versão do sistema operacional

	TRUE; // Constantes
	FALSE;// cosntantes 

	echo "Número da linha: ".__LINE__."<br/>"; // imprime o número da linha
 
?>

<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<title>Aula 2 de PHP - Constantes e variáveis</title>
	</head>
	<body>
		
	</body>
</html>