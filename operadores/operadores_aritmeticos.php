<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Operadores Aritméticos</title>
</head>
<body>
<div>
	<?php
		//Declarações de variavéis, elas pegam os tipos automático, como string, integer, etc..
		$n1     = 50;
		$n2     = 50;
		$soma 	= $n1+$n2; //Somatória +
		$sub    = $n1-$n2; //Subtração -
		$mult   = $n1*$n2; //Multiplicação *
		$div    = $n1/$n2; //Divisão /
		$modulo = $n1%$n2; //Módulo %
		$media  = ($n1+$n2)/2;

		//Mostro o resultado dos calculos
		echo "A soma vale: $soma";
		echo "<br>";
		echo "A subtração vale: $sub";
		echo "<br>";
		echo "A multiplicação vale: $mult";
		echo "<br>";
		echo "A divisão vale: $div";
		echo "<br>";
		echo "A módulo vale: $modulo";
		echo "<br>";
		echo "A média vale: $media";
		echo "<br>";
		echo "<br>";
		//Posso mostrar dessa forma também
		echo "A soma vale: ".($n1+$n2);

		/*
			Posso também pegar valores de variaveis pela URL do browser pelo metodo GET
			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			..operadores_aritmeticos.php?a=3&b=b  //ELE RECEBE DIRETO DO BROWSER


			Temos funções matematicas
			abs() Valor Absoluto
			pow() Potenciação
			sqrt() Raiz quadrada
			round() Arredondamento padrão exemplo: (4.6 é 5) e (4.4 é 4); 
			No lugar do round pode ser usado o ceil ou o floor
			(ceil = pra cima) exemplo: 4.1 será 5
			(floor = pra baixo) exemplo: 4.7 será 4
			intval() ele pega valor inteiro da variavel
			numer_format() Formatação de números
		*/
	?>
</div>
</body>
</html>