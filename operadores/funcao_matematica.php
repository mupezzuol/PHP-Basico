<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Função Matemática</title>
</head>
<body>
<div>
	<?php
		//Declarações de variavéis, elas pegam os tipos automático, como string, integer, etc..
		$v1 = 5;
		$v2 = 2;
		$v3 = 6.3;
		echo "<h4>Valores Recebidos: $v1 e $v2</h4>";

		//Chama função ABS que mostra o valor absoluto
		echo "O valor absoluto de $v2 é: ".abs($v2);
		echo "<br>";

		/*
		Chama função POW que faz potenciacao do primeiro valor e o valor elevado, sempre na ordem
		Colocamos <sup></sup> para que ele escreve em cima do número o valor elevado, 5² <<
		*/
		echo "O valor de $v1<sup>$v2</sup> é: ".pow($v1, $v2);
		echo "<br>";

		echo "O valor de $v3 arredondado padrao é: ".round($v3); //arredonda padra
		echo "<br>";
		echo "O valor de $v3 arredondado pra cima é: ".ceil($v3); //arredonda pra cima
		echo "<br>";
		echo "O valor de $v3 arredondado pra baixo é: ".floor($v3); //arredonda pra baixo
		echo "<br>";
		echo "A raiz quadrada de 100 é: ".sqrt(100); //Raiz quadrada de um número
		echo "<br>";
		echo "A valor inteiro de 7.43 é: ".intval(7.43); //Pega valor inteiro
		echo "<br>";

		/*
		Formata casas milhar, dezena, decimal
		sequncia é (Valor,casas decimais, virgula na dezena, ponto na milhar)
		*/
		echo "Formatando casas milhar, dezena, decimal: R$ ".number_format(8000,2,",",".");

		/*
			Temos funções matematicas
			abs() Valor Absoluto
			pow() Potenciação
			sqrt() Raiz quadrada
			round() Arredondamento padrão exemplo: (4.6 é 5) e (4.4 é 4); 
			No lugar do round pode ser usado o ceil ou o floor
			(ceil = pra cima) exemplo: 4.1 será 5
			(floor = pra baixo) exemplo: 4.7 será 4
			intval() ele pega valor inteiro da variavel
			Formatação de números	
		*/
	?>
</div>
</body>
</html>