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
		$n1   = $_GET["a"];
		$n2   = $_GET["b"];
		$m    = ($n1+$n2)/2;

		echo "A média entre $n1 e $n2 é $m <br/>";

		echo "A situacao do aluno é: ". (($m>=6) ? "APROVADO" : "REPROVADO");//coloco a expressao em ()

		/*
		Posso fazer assim tambem
		$sit = ($m>=6) ? "APROVADO" : "REPROVADO";
		echo "A situacao do aluno é: $sit";

			Ele verifica, se a média foir maior ou igual 6 ele recebe o verdadeiro primeiro,
			que é aprovado, caso contrario será reprovado

		*/
	?>
</div>
</body>
</html>