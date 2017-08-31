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
		$d     = isset($_GET["ds"]) ? $_GET["ds"]  : 0;
		
		//ESTOU FAZENDO switch
		switch ($d){
			case 1:
				echo "SÃO PAULO";
				break;
			case 2:
				echo "GAYVOTAS";
				break;
			case 3:
				echo "PEIXE";
				break;
			case 4:
				echo "PALMEIRAS";
				break;
			default:
				echo "INVÁLIDO";	
		}

	?>


	<a href="exe2.php">Voltar</a>

	<!--  	esse codigo JS volta página anterior
	<a href="javascrip:history.go(-1)">Voltar</a>
	 -->
</div>
</body>
</html>