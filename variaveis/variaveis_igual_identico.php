<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Operadores Relacionais</title>
</head>
<body>
<div>
	<?php
		//Declarações de variavéis, elas pegam os tipos automático, como string, integer, etc..
		$a = 3;
		$b = "3";
		echo "A=3 e B=string '3'.<br/>";

		//comparando com ==
		$r = ($a == $b) ? "SIM" : "NÃO"; //Ele compara, eles são iguais, diz sim
		echo "As variaveis A e B são iguais?(usando ==) $r <br/>";

		//comparando com ===
		$r = ($a === $b) ? "SIM" : "NÃO"; //Ele compara, eles são iguais mas de tipos diferente, diz nao
		echo "As variaveis A e B são iguais?(usando ===) $r <br/>";

		/*
			IGUAL ==
			IDENTICO === NESSE CASO ELE É IGUAL E DO MESMO TIPO

		*/
	?>
</div>
</body>
</html>