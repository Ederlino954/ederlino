<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8" />
		<title> Aula 45 de PHP - MySQL - Revisão de formuláriox X banco de dados </title>

	</head>
	<body>		

		<form name="F_revisao" method="post" action="revisao45.php">

			<label>Nome: </label><br>
			<input type="text" name="f_nome" size="30" maxlength="30"><br/><br/>

			<label>Senha: </label><br>
			<input type="password" name="f_senha" size="20" maxlength="20"><br/><br/>

			<label>Sexo: </label><br/>
			<input type="radio" name="f_sexo" value="F" checked="checked" /> Feminino <br/> <!-- SEMPRE DEFINIR value nessa situação  -->
			<input type="radio" name="f_sexo" value="M" />Masculino <br/>

			<label>Esporte: </label><br/>
			<select name="f_esporte">
				<option value="futebol">Futebol</option>  <!-- SSerá enviado o que estiver no value  -->
				<option value="volei">Volei</option>
				<option value="basquete">Basquete</option>
				<option value="lutas">Lutas</option>
				<option value="outros">Outros</option>
			</select><br/><br/>		

			<label>Selecione o seus meios de transportes utilizados no dia-a-dia: </label><br/>
			<input type="checkbox" name="f_tcarro" value="1">Carro<br/>
			<input type="checkbox" name="f_tmoto" value="1">Moto<br/>
			<input type="checkbox" name="f_tonibus" value="1">Ônibus<br/><br/> <!-- controle com boolean no banco de dados para comparação com valeu para envio  -->

			<label>Comentário: </label><br/>
			<textarea name="f_coment" rows="5" cols="50"></textarea><br/><br/>	

			<input type="submit" value="Enviar" />
			<input type="reset" name="Limpar" />

		</form>


	</body>
</html>
