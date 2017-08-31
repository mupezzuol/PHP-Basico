<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Variavéis - Concatenação</title>
</head>
<body>
<div>
	<?php
		//Declarações de variavéis, elas pegam os tipos automático, como string, integer, etc..
		$profissao = "Desenvolvedor Web"; //string
		$nome      = "Murillo Pezzuol";//string
		$idade     = 18;//integer ou int

		//Se eu utilizar "DUPLAS" eu só chamo a variavél que ele concatena automático
		echo "Com $idade anos o profissional $nome trabalha atualmente como $profissao.";

		//Pulo a linha no PHP
		echo "<br>";
		echo "<br>";

		//Se eu utilizar 'SIMPLES' eu devo concatena com "STRING" e .$variavel. como é feito abaixo
		echo 'Com '.$idade.' anos o profissional '.$nome.' trabalha atualmente como '.$profissao;
	?>
</div>
</body>
</html>