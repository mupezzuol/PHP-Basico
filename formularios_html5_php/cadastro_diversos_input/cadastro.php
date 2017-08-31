<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Transportando dados</title>
</head>
<body>
<div>
	<form method="get" action="enviar.php">

		Nome: <input type="text" name="nome" /> <br/>
		Ano de nascimento: <input type="number" name="ano" /> <br/>

		<!--Fieldset é uma borda, legend é a legenda dessa borda-->
		<!--CHECKED já deixa marcado o radio-->
		<fieldset><legend>Sexo</legend>
			<input type="radio" name="sexo" id="masc" value="Homem" checked></input>
			<label for="masc">Masculino</label><br/>
			<input type="radio" name="sexo" id="fem" value="Mulher"></input>
			<label for="fem">Feminino</label><br/>
		</fieldset>
		
		<!--Botões Enviar e Limpar-->
		<input type="submit" value="ENVIAR"/>
		<input type="reset" value="LIMPAR"/>
	</form>

</div>
</body>
</html>