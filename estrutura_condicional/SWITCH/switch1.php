<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Estrutura condicional</title>
</head>
<body>
<div>
	<form method="get" action="switch_enviar.php">
		Número:
		<input type="number" placeholder="digite um número" name="num"/><br/>
		<fieldset><legend>Operação</legend>
		<input type="radio" name="oper" id="dobo" value="1" checked="" />
		<label for="dobro">Dobro</label>
		<input type="radio" name="oper" value="2" id="cubo"/>
		<label for="cubo">cubo</label>
		<input type="radio" name="oper" value="3" id="raiz"/>
		<label for="raiz">raiz quadrada</label>
		</fieldset>

		<input type="submit" value="CALCULAR"/>
		<input type="reset" value="LIMPAR"/>
	</form>

</div>
</body>
</html>