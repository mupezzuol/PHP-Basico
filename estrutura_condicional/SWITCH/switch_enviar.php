<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Estrutura Condicional</title>
</head>
<body>
<div>
	<?php
		//se foi setado, jogo valor ano, caso contrario da erro
		$n     = isset($_GET["num"]) ? $_GET["num"]  : 0;
		$op    = isset($_GET["oper"]) ? $_GET["oper"]  : 1;
		
		switch ($op){

			case 1: //será o dobro do número
				$r = $n * 2;
				break; // para aqui
			case 2: //será o cubo do número
				$r = $n ^ 3;	
				break;
			case 3:
				$r = sqrt($n);
		}
		echo "o resultado da operação solicitada foi $r"

	?>


	<a href="switch1	.php">Voltar</a>
</div>
</body>
</html>