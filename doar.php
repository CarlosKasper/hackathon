<!DOCTYPE html>
<html>
<head>
	<title>Doar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="./static/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,500,700,900&display=swap" rel="stylesheet">
	
</head>
<body class="bg-login">
	<?php include "header.php" ?>
	<form>
		<div class="container">
			<div class="form-group">
				<label for="exampleInputEmail1">Nome do item:</label>
				<input type="email" class="form-control" id="item" aria-describedby="item" placeholder="Nome do item">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Descrição:</label>
				<input type="password" class="form-control" id="descricao" placeholder="Descrição do produto">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Local de retirada:</label>
				<input type="password" class="form-control" id="retirada" placeholder="Local de retirada">
			</div>
			<div class="form-group">
				<label for="select">Avalie o seu item:</label>
				<select class="form-control">
					<option disabled selected>Selecione</option>
					<option value="1">1 estrela</option>
					<option value="2">2 estrelas</option>
					<option value="3">3 estrelas</option>
					<option value="4">4 estrelas</option>
					<option value="5">5 estrelas</option>
				</select>
			</div><br>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
				</div>
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="inputGroupFile01"
					aria-describedby="inputGroupFileAddon01">
					<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
				</div>
			</div><br><br>
			<button type="button"  onclick="location.href='confirmadoacao.php';" class="btn  btn-block btn-cor">Doar</button>
			<button type="button" onclick="location.href='index_doador.php';"class="btn btn-secondary btn-block">Voltar
			</button>
		</div>
	</form>
	<script type="text/javascript" src="./static/js/bootstrap.min.js"></script>
</body>
</html>