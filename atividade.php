<!-- Feito por Samuel Silva Costa -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário</title>
</head>
<body>
	<form name = "cadastro" method = "get" action="acao.php">
		<b>O que você achou do site?</b>
		<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="opcao"> Muito bom
		<input type="radio" name="opcao"> Bom
		<input type="radio" name="opcao"> Regular
		<input type="radio" name="opcao"> Um lixo
		<br><br>

		<b>Qual é seção que você mais gostou ?</b> 
		<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp<select>
			<option>Em cartaz</option>
			<option>Trilha Sonora</option>
			<option>Galeria de Fotos</option>
			<option>Bilheteria</option>
			<option>Outra</option>
		</select>

		Outra: <input type="text" name="outra">
		<br><br>

		<b>Digite seus comentários no espaço abaixo:</b>
		<br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp<textarea name="comentários" cols="50" rows="5"></textarea> <br><br>

		<b>Diga-nos como entrar em contato com você:</b>
		<br><br> 
	
		<p>&nbsp&nbsp&nbsp&nbsp<label>Nome&nbsp</label> <input type="text" name="nome" size="40"></p>
	 	<p>&nbsp&nbsp&nbsp&nbsp<label>Email&nbsp</label> <input type="text" name="email" size="40"></p>
		<p>&nbsp&nbsp&nbsp&nbsp<label>Fone&nbsp&nbsp&nbsp</label><input type="text" name="fone" size="40"></p> 
		<p>&nbsp&nbsp&nbsp&nbsp<label>Fax&nbsp&nbsp&nbsp&nbsp</label> <input type="text" name="fax" size="40"></p>
		

		<br> &nbsp&nbsp&nbsp<input type="checkbox" name="check"> Quero receber as novidades do site por e-mail <br><br>

		<input type="submit" name="submit" value="Enviar dados">
		<input type="reset" name="limpar" value="Limpar Formulário">

	</form>

</body>
</html>