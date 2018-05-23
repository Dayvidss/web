<!DOCTYPE html>
<html>
<head>
<title>Checkout Mirror Fashion</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="resource/css/bootstrap-flatly.css">
<link rel="styesheet" href="resource/css/checkout.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-id">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Mirror Fashion</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-id">
			<ul class="nav navbar-nav">
				<li class="active"><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
				<li><a href="#">Perguntas frequentes</a></li>
				<li><a href="#">Entre em contato</a></li>
			</ul>
		</div>
	</nav>
	<div class="jumbotron">
		<div class="container">
			<!-- h1 e p que já tínhamos -->
			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para
				efetivar a compra.</p>
		</div>
		<!-- fim .container dentro do jumbotron -->
	</div>
	<!-- fim .jumbotron -->

	<div class="container">
	<div class="row">
	<div class="col-sm-4 col-lg-3">
		<!--Inicio .panel-default -->
		<div class="panel panel-success">
			<div class="panel-heading">
				<h2 class="panel-title">Sua compra</h2>
			</div>
			<!-- fim .panel-heading -->

			<div class="panel-body">
				<img src="resource/img/produtos/foto<?= $_POST['id'];?>-<?= $_POST['cor']; ?>.png" class="img-thumbnail img-responsive">
				<dl>
					<dt>Produto</dt>
					<dd><?= $_POST['nome']; ?></dd>
					<dt>Preço</dt>
					<dd id="preco">R$ <?= $_POST['preco']; ?></dd>
					<dt>Cor</dt>
					<dd><?= $_POST['cor']; ?></dd>
					<dt>Tamanho</dt>
					<dd><?= $_POST['tamanho']; ?></dd>
				</dl>
						<div class="form-group">
							<label for="qt">Quantidade</label> 
							<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
						</div>
						<div class="form-group">
							<label for="total">Total</label>
							<output for="qt preco" id="total" class="form-control">
							<?= $_POST["preco"]; ?>
							</output>
						</div>
					</div>
			</div>
			<!-- fim .panel-body -->
		</div>
		<!-- fim .panel -->
		<!-- Inicio do formulário -->
		<form class="col-sm-8 col-lg-9">
		<div class="row">
			<fieldset class="col-md-6">
				<legend>Dados pessoais</legend>
				<div class="form-group">
					<label for="nome">Nome completo</label> 
					<input type="text" class="form-control" id="nome" name="nome" autofocus required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<!-- <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com"> -->
					<div class="input-group">
						<span class="input-group-addon">@</span> 
						<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
					</div>
				</div>
				<div class="form-group">
					<label for="cpf">CPF</label> 
						<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required data-mask="999.999.999-99" >
				</div>
				<div class="checkbox">
					<label> <input type="checkbox" value="sim" name="spam" checked>
						Quero receber spam da Mirror Fashion
					</label>
				</div>
			</fieldset>
			<fieldset class="col-md-6">
				<legend>Cartão de crédito</legend>
				<div class="form-group">
					<label for="numero-cartao">Número - CVV</label> 
					<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
				</div>
				<div class="form-group">
					<label for="bandeira-cartao">Bandeira</label> 
					<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
						<option value="master">MasterCard</option>
						<option value="visa">VISA</option>
						<option value="amex">American Express</option>
					</select>
				</div>
				<div class="form-group">
					<label for="validade-cartao">Validade</label> <input type="month"
						class="form-control" id="validade-cartao" name="validade-cartao">
				</div>
			</fieldset>
			</div>
			<button type="submit" class="btn btn-primary btn-lg pull-right">
				<span class="glyphicon glyphicon-thumbs-up"></span> Confirmar Pedido
			</button>
		</form>
		<!-- Fim do formulário -->
		</div>
		<!-- Fim do row -->
	</div>
	<!-- Fim do container -->
	<script src="resource/js/jquery.js"></script>
	<script src="resource/js/bootstrap.js"></script>
	<script src="resource/js/inputmask-plugin.js"></script>
	<script src="resource/js/total.js"></script>
</body>
</html>
