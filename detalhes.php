<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

<body>
	<div class="container">
		<div class="row">
			<h1>Detalhes do produtos</h1>
		</div>
	  	<div class="row">
	    	<div class="col-md-4">
			<?php 

				$id_produto = $_POST['id_produto'];

				$detalhes[1] = "<h3>Detalhes da Cadeiras</h3> <p> Cadeira de MDF puro vernisada com reforço nas lateral</p>";
				
				$detalhes[2] = "<h3>Detalhes do Fogão</h3> <p>Automatico com forno auto limpate 6 bocas com relogio que marca a hora quando terminar o conzimento</p> ";

				$detalhes[3] = "<h3>Detalhes do Roteador</h3> <p>330 dbi com auto alcanse com porta usb para adaptadores</p>";

				$detalhes[4] = "<h3>Detalhes da TV</h3><p> TV smart com conversor digital 3D com 8 oculos</p>";

				echo $detalhes[$id_produto];
			 ?>
			 <a href="catalogo_produtos.php" class="btn btn-default">Voltar</a>
	 		</div>
		</div>
	</div>
	</body>
</html>