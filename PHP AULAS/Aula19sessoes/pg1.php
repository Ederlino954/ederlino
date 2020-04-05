		<?php 
		// pg1 pegando os ddos da sessão
		session_start();

/***/   if ($_SESSION['vlog']=="s") { // sessão iniciada aqui finalizando depois do HTML
/***/
/***/			$_SESSION['vcanal']="Vlog do Fessor Bruno"; // variével definida no pg1
/***/			echo "<h3>Segunda página<h3/>";  // título da página 3
/***/			echo $_SESSION['vnome'];
/***/			echo "<br/>".$_SESSION['vtexto'];
/***/
/***/	?> 
<!---->	  
		 <!DOCTYPE html> 
			<html>
				<head>
					<meta charset="utf-8" />
					<title> Aula 19 de PHP - Sessão </title>
				</head>
				<body>

					<br/><br/>
					<a href="aula19.php" target="_self">Voltar aula 19</a><br/>
					<a href="pg2.php" target="_self">Terceira página</a>
					
				</body>
			</html>

<!----> <?php
/***/
/***/	}else{ // sessão finalizando aqui, será habilita Se vlog for = 's'
/***/			echo "acesso indevido...";
/***/		}
/***/
/***/	?>