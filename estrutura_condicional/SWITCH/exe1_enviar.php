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
			case 2: //segunda-feira
			case 3: //terça-feira
			case 4: //quarta-feira
			case 5: //quinta-feira
			case 6: //sexta-feira
				echo "ALUNO ESTUDA";
				break;
			case 7: //sabado-feira
			case 8: //domingo-feira
				echo "ALUNO DESCANSA";
				break;
			default:
				echo "dia da semana inválido";	
		}

	?>


	<a href="exe1.php">Voltar</a>

	<!--  	esse codigo JS volta página anterior
	<a href="javascrip:history.go(-1)">Voltar</a>
	 -->
</div>
</body>
</html>