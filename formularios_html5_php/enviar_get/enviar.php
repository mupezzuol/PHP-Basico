<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Transportando dados</title>
</head>
<body>
<div>
	<?php
	$valor     = $_GET["v"]; //aqui puxa o 'name' do input
	$rq = sqrt($valor);//faz o calculo

	//mostro resultado
	echo "O resultado da raiz quadrada do número $valor é $rq";
	?>
	<a href="enviar_get.php">Voltar</a>
</div>
</body>
</html>