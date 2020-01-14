<!DOCTYPE html>
<html>
<head>
	<title>Instituição</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="./static/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./static/css/style.css">

</head>
<body class="bg-login">
	<?php include "headervazio.php"?>
	<div class="container">
		<form>
			<div class="form-group"> <img  src="./static/lupa.png" alt="" width="5%">
				<label for="pesq"> Pesquise o item que deseja encontrar:</label>
				<input type="text" class="form-control" id="intem" placeholder="Digite o nome do item">
			</div>
		</form>

		<a class="media box-container mt-3" href="item1.php" style="color:black">
			<img class="mr-3" src="./static/camiseta.jpg" alt="Imagem da camiseta" width="100" height="100">
			<div class="media-body">
				<h4 class="mt-0">Camiseta</h4>
				<div>
					<strong>Categoria:</strong>
					<span>Roupas</span>
				</div>
				<div>
					<strong>Cidade:</strong>
					<span>Porto Alegre</span>
				</div>
			</div>
		</a>

		<a class="media box-container mt-3" href="item2.php" style="color:black">
			<img class="mr-3" src="./static/televisao.jpg" alt="Imagem da televisão" width="100" height="100">
			<div class="media-body">
				<h4 class="mt-0">Televisão</h4>
				<div>
					<strong>Categoria:</strong>
					<span>Eletrônicos</span>
				</div>
				<div>
					<strong>Cidade:</strong>
					<span>Porto Alegre</span>
				</div>
			</div>
		</a>

		<a class="media box-container mt-3" href="item3.php" style="color:black">
			<img class="mr-3" src="./static/cadeiras.jpg" alt="Imagem das cadeiras" width="100" height="100">
			<div class="media-body">
				<h4 class="mt-0">Cadeiras</h4>
				<div>
					<strong>Categoria:</strong>
					<span>Móvel</span>
				</div>
				<div>
					<strong>Cidade:</strong>
					<span>Canoas</span>
				</div>
			</div>
		</a>

		<a class="media box-container mt-3" href="item4.php" style="color:black">
			<img class="mr-3" src="./static/mesa.jpg" alt="Imagem da mesa" width="100" height="100">
			<div class="media-body">
				<h4 class="mt-0">Mesa</h4>
				<div>
					<strong>Categoria:</strong>
					<span>Móvel</span>
				</div>
				<div>
					<strong>Cidade:</strong>
					<span>Canoas</span>
				</div>
			</div>
		</a>

	</div>
	<script type="text/javascript" src="./static/js/bootstrap.min.js"></script>
</body>
</html>