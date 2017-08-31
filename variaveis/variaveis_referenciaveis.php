<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Variaveis referenciadas</title>
</head>
<body>
<div>
	<?php
		//Declarações de variavéis, elas pegam os tipos automático, como string, integer, etc..
		$a = 3;
	//	$b = $a;    // modo normal
		$b = &$a;  //estou referenciado, ou seja, valor mudará junto com variavel b
		$b += 5;
		echo "A variavel A vale $a";
		echo "<br/>";
		echo "A variavel B vale $b";

		/*
			$a = 3;
			$b = &$a; ESSE & FAZ COM QUE A VARIAVEL '$b' SEJA REFERENCIA DA '$a'
			$b += 5;
			echo $a;
			echo $b;

			TUDO QUE ACONTECER COM A VARIAVEL '$b' a variavel '$a' sofrerá alteração

			Valores de A e B serão: 8
		*/
	?>
</div>
</body>
</html>