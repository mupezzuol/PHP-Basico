<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Transportando dados</title>
</head>
<body>
<div>
	<?php
	/*
	isset = se foi setado, se foi passado como parametro na URL,
	eu uso valor LUNÁRIO, para verificar se foi passado para nao dar erro
	*/
	$nome  = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
	$ano   = isset($_GET["ano"]) ? $_GET["ano"] : "[Não informado]";

	//pega do value do input dentro do fieldset
	$sexo  = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
	$idade = date("Y") - $ano;

	//mostro resultado
	echo "$nome é $sexo e possue $idade anos de idade";
	?>

	<a href="cadastro.php">Voltar</a>
</div>
</body>
</html>