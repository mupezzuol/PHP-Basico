<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Operadores Lógicos</title>
</head>
<body>
<div>
	<?php
		//Declarações de variavéis, elas pegam os tipos automático, como string, integer, etc..
		$ano   = $_GET["ano"];
		$idade = 2016 - $ano;
		echo "Quem nasceu em $ano tem $idade anos de idade<br/>";

		$tipo = ($idade>=18 && $idade<=64) ? "VOTO OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
		echo $tipo;
		/*
		Quando for:
		AND é &&
		OR é ||
		XOR é XOR  Ele pode ser uma coisa ou outra, mas nunca as duas
		Não é !  coloco ! antes;
		*/
	?>
</div>
</body>
</html>