<?php 
	
	session_start();	

/***/	if ($_SESSION['vlog']=="s") { // sessão iniciada aqui finalizando depois do HTML

		echo "<h3>Segunda página<h3/>";
		echo $_SESSION['vnome'];
		echo "<br/>".$_SESSION['vtexto'];
		echo "<br/>".$_SESSION['vcanal'];
 ?> 
   
 <!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<title> Aula 19 de PHP - Sessão </title>
	</head>
	<body>

		<br/><br/>
		<a href="aula19.php" target="_self">Voltar aula 19</a><br/>
		<a href="pg1.php" target="_self">Segunda página</a>
		
	</body>
</html>




<!----> <?php
/***/
/***/	}else{ // sessão finalizando aqui, será habilita de vlog for = 's'
/***/			echo "acesso indevido...";
/***/		}
/***/
/***/	?>

