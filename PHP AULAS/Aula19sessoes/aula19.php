<?php 
	
	session_start();    // iniciar a sessão
	$_SESSION['vnome']="Ederlino";
	$_SESSION['vtexto']="texto para teste";
	$_SESSION['vlog']="n"; //------ BASTA CRIAR UMA CONDIÇÃO PARA DEFINIR n ou s // marcando a sessão habilitada para dar acesso a segunda página ------


	// unset ($_SESSION['vnome']); // deleta o que marcar. No exemplo seria o vnome.

	echo $_SESSION['vnome'];
	echo "<br/>".$_SESSION['vtexto'];	

	if (isset($_SESSION['vcanal'])) {
		echo "<br/>".$_SESSION['vcanal'];  // vcal está no arquivo pg1
	}else{
		echo "<br/>Variável vcanal NÂO foi definida";
	}

	// session_destroy(); // finalizando sessão 

 ?> 
 
 <!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 19 de PHP - Sessão </title>
	</head>
	<body>

		<br/>
		<a href="pg1.php" target="_self">Segunda página</a> <!-- link da páginas --> 
		
	</body>
</html>


