<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Operadores de Incremento</title>
</head>
<body>
<div>
	<?php
		//Declarações de variavéis, elas pegam os tipos automático, como string, integer, etc..
		$ano = $_GET["ano"]; //Pego variavel direto do browser
		
		echo "O ano atual é $ano e o ano posterior é ". ++$ano; //faço ano + 1
		echo "<br/>";
		echo "O ano atual é $ano e o ano anterior é ". --$ano; //faço ano - 1


	//	echo "O ano atual é $ano e o ano posterior é ". $ano++; //mostro o ano e depois somo + 1
	//	echo "O ano atual é $ano e o ano anterior é ". $ano--; //mostro o ano e depois subtraiu - 1

		/*
		PRÉ-incremento $a= $a+1  posso usar ++$a
		PÓS-incremento $a= $a+1  posso usar $a++
		PRÉ-decremento $a= $a-1  posso usar --$a
		PÓS-decremento $a= $a-1  posso usar $a--  
		*/
	?>
</div>
</body>
</html>