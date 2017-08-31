<html>
<head>
	<?php
		$txt = isset($_GET["t"])   ? $_GET["t"] : "Texto generico";
		$tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
		$cor = isset($_GET["cor"]) ? $_GET["cor"] : "#f1f1f1";
	?>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo_modelo.css">
	<title>Transportando dados</title>

	<style>
		span.texto{
			color : <?php echo $cor; ?>;
			font-size: <?php echo $tam; ?>;
		}
	</style>
</head>
<body>
<div>
	<?php
		//mostro resultado
		echo "<span class='texto'> $txt </span>";
	?>
	<a href="enviar_cores.php">Voltar</a>
</div>
</body>
</html>