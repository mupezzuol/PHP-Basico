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
		$tipo = $_GET["op"];

		echo "Os valores passados foram $n1 e $n2 <br/>";
		$r = ($tipo == "soma") ? $n1+$n2 : $n1*$n2;
		echo "O resultado será: $r";
		/*
			MAIOR >
			MENOR <
			MAIOR OU IGUAL >=
			MENOR OU IGUAL <=
			DIFERENTE <> OU !=
			IGUAL ==
			IDENTICO === NESSE CASO ELE É IGUAL E DO MESMO TIPO


			OPERADOR UNÁRIO
			expressao ? verdadeiro : falso;
			$maior = $a>$b?$a:$b; Variavel maior recebe o maior número, se o A for mais que b, variavel recebe A, caso contrario recebe B
			outros exemplos:

			$sit = $m < 7?"Recuperação":"Aprovado"; A média é menor que 7? se sim, recuperacao, caso
			contrario será aprovado


		*/
	?>
</div>
</body>
</html>