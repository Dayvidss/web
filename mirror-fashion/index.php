<!DOCTYPE html>
<html>
<head>
<title>Mirror Fashion</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<!--<link rel="stylesheet" href="resource/css/reset.css">-->
<link rel="stylesheet" href="resource/less/estilo.less">
<link rel="stylesheet" href="resource/css/mobile.css"
	media="(max-width: 939px)">
<link rel="stylesheet" href="resource/css/bootstrap.css">
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script">
<link rel="stylesheet/less" type="text/css" href="styles.less" />
<script src="less.js" type="text/javascript"></script>
</head>
<body>
	<?php include("cabecalho.php");?>
	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>

			<form>
				<input type="search"> <input type="image"
					src="resource/img/busca.png">
			</form>
		</section>
		<section class="menu-departamentos">
			<h2>Departamentos</h2>

			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul></li>
					<li><a href="#">Calsas</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section>

		<img alt="Promoção Big City Night"
			src="resource/img/destaque-home.png">
		<button type="button" class="pause"></button>
	</div>

	<div class="container paineis">
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
			<?php
                $conexao = mysqli_connect("127.0.0.1", "root", "@N33df0rsp33d%", "WD43");
                $dados = mysqli_query($conexao, "select * from produtos");
                while ($produto = mysqli_fetch_array($dados)):
                ?>
				<li>
    				<a href="produto.php?id=<?= $produto['id']; ?>">
						<figure>
							<img src="resource/img/produtos/miniatura<?= $produto['id']; ?>.png" alt="<?= $produto['nome']; ?>">
							<figcaption><?= $produto['nome']; ?> por <?= $produto['preco']; ?></figcaption>
						</figure>
				</a>
				</li>
			<?php endwhile; ?>
			</ol>
			<button type="button">Mostra mais</button>
		</section>
		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
			<?php 
			$dados = mysqli_query($conexao, "select * from produtos where vendas >= 40 order by vendas desc");
			while ($produto = mysqli_fetch_array($dados)):
			?>
				<li><a href="produto.php?id=7">
						<figure>
							<img src="resource/img/produtos/miniatura<?= $produto['id']; ?>.png" alt="<?= $produto['nome']; ?>">
							<figcaption><?= $produto['nome']; ?> por <?= $produto['preco']; ?></figcaption>
						</figure>
				</a></li>
			<?php endwhile;?>	
			</ol>
			<button type="button">Mostra mais</button>
		</section>
	</div>
	<?php include("rodape.php");?>
	<script src="resource/js/jquery.js"></script>
	<script src="resource/js/bootstrap.js"></script>
	<script src="resource/js/animacao.js"></script>
	<script src="resource/js/home.js"></script>
</body>
</html>
