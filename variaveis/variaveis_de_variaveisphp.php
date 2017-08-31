<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Variaveis de variaveis</title>
</head>
<body>
<div>
	<?php
		//Declarações de variavéis, elas pegam os tipos automático, como string, integer, etc..
		$site  = "cursovideo1";
		$$site = "cursoPHP2";

		echo $site;
		echo "<br/>";
		echo $cursovideo1;
		echo "<br/>";
		echo "<br/>";
		//outro exemplo

		$x  = "ABC";
		$$x = "DEF";
		echo "A variavel X é $x";
		echo "<br/>";
		echo "A variavel criada recebu o valor $ABC";


		/*
			Ele cria uma variavel com um valor, chama outra variavel que tera esse mesmo nome, porém com outro valor;

			$site = "cursovideo1" ele cria um $cursovideo1 que receberá 'cursoPHP2'


		*/
	?>
</div>
</body>
</html>