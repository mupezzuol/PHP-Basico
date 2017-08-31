<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Operadores de Atribuição</title>
</head>
<body>
<div>
	<?php
		//Declarações de variavéis, elas pegam os tipos automático, como string, integer, etc..
		$preco = $_GET["p"]; //Pego variavel direto do browser
		echo "O preço do produto é R$ ".number_format($preco,2,",",".");

		//$preco recebe ele mesmo, + o calculo que ira ser feito, assim será um aumento
		// se eu utilizar "-=" ele fará o inverso, ou seja, dará desconto de 10%
		$preco += $preco*10/100; 

		echo "<br/>E o novo preço com 10% de aumento será de R$ ".number_format($preco,2,",",".");

	?>
</div>
</body>
</html>