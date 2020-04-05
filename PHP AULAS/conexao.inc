<?php 

	//$con=mysqli_connect("localhost","root","canalfb");

	// melhor forma de realizar chamada
	$con=mysqli_connect("localhost","root",""); // chamada de conexão
	mysqli_select_db($con,"2canalfb"); // chamando variável de conexão junto com a tabela 
	
 
 ?>  