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
		$ano     = isset($_GET["ano"]) ? $_GET["ano"]  : "[Sem valor]";
		$idade   = date("Y") - $ano;	
		
		echo "Você nasceu em $ano e atualmente tem $idade anos de idade <br/>";

		if ($idade<16){
			$tipoVoto = "não vota";
		}elseif($idade>=16 && $idade<18 || $idade>=65 ){
			$tipoVoto= "voto opcional";
		}else{
			$tipoVoto= "Voto obrigatório";
		}
		
		echo "Para essa idade, $tipoVoto";

		/*	
		//condição IF para verificar idade
		if ($idade>=18){
			$v = "já pode votar";
			$d = "já pode dirigir";
		}else{
			$v = "não pode votar";
			$d = "não pode dirigir";
		}
		*/


		//mostra resultado
		//echo "Com essa idade você $v e também $d";

	?>


	<a href="if1.php">Voltar</a>
</div>
</body>
</html>