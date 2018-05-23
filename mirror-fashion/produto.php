<!DOCTYPE html>
<html>
<head>
<title>Produto da Mirror Fashion</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="resource/css/produto.css">
<link rel="stylesheet" href="resource/css/mobile.css" media="(max-width: 939px)">
<link rel="stylesheet" href="resource/css/bootstrap.css">
</head>
<body>
	<?php 
		$conexao = mysqli_connect("127.0.0.1", "root", "@N33df0rsp33d%", "WD43");
		$dados = mysqli_query($conexao, "select * from produtos where id = $_GET[id]");
		$produto = mysqli_fetch_array($dados);
	?>
	<?php include ("cabecalho.php"); ?>
	<div class="produto-back">
		<div class="container">
			<div class="produto">
				<h1><?= $produto['nome'] ?></h1>
				<p>por apenas <?= $produto['preco'] ?></p>

				<form action="checkout.php?id=<?= $produto['id']?>" method="post">
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>
						<input type="radio" name="cor" value="verde" id="verde" checked> 
						<label for="verde"> 
							<img alt="verde" src="resource/img/produtos/foto<?= $produto['id'] ?>-verde.png">
						</label> 
						<input type="radio" name="cor" value="rosa" id="rosa"> 
						<label for="rosa"> 
							<img alt="rosa" src="resource/img/produtos/foto<?= $produto['id'] ?>-rosa.png">
						</label> 
						<input type="radio" name="cor" value="azul" id="azul"> 
						<label for="azul"> 
							<img alt="azul" src="resource/img/produtos/foto<?= $produto['id'] ?>-azul.png">
						</label>
					</fieldset>

					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>
						<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
						<output for="tamanho" name="valortamanho">42</output>
					</fieldset>
					<input type="submit" class="comprar" value="Comprar"> 
					<input type="hidden" name="nome" value="<?= $produto['nome'] ?>"> 
					<input type="hidden" name="preco" value="<?= $produto['preco'] ?>">
					<input type="hidden" name="id" value="<?= $produto['id'] ?>">
				</form>
			</div>
			<div class="detalhes">
				<h2>Detalhes do produto</h2>
				<p><?= $produto['descricao']?></p>
				<table>
					<thead>
						<tr>
							<th>Característica</th>
							<th>Detalhe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<?php include("rodape.php");?>
	<script type="text/javascript" src="resource/js/produto.js"></script>
</body>
</html>
