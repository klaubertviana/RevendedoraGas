<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="klaubert">
	<!-- LINK -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>Cadastro Produto</title>
  </head>  
  <body>
	<?php
	// TITULO 
	include ("layoutTitulo.php");
	echo '<br>';
	// NAV BAR ADMINISTRADOR
	include ("layoutNavBar.php");
	echo '<br>';
	?>
	<h3> Cadastro Produto </h3>
	<br>
	<section>
		<!-- FORMULARIO DO PRODUTO -->
		<div class="container-fluid">
			<form action ="#" method="GET" autocomplete="on">				
				
				<div class="row">
					<div class="form-group col-xs-12 col-md-2">
						<label for="codigoProduto">Codigo</label>
						<input type="text" name = "codigoProduto" class="form-control" id="codigoProduto" placeholder="Digite codigo do produto">
					</div>
					<div class="form-group col-xs-12 col-md-6">
						<label for="nomeProduto">Nome</label>
						<input type="text" name = "nomeProduto" class="form-control" id="nomeProduto" placeholder="Digite o nome produto">
					</div>
				</div>	
				
				<div class="row">
					<div class="form-group col-xs-12 col-md-2">
						<label for="precoProduto">Preço</label>
						<input type="text" name = "precoProduto" class="form-control" id="precoProduto" placeholder="Digite o preço do produto">
					</div>
					<div class="form-group col-xs-12 col-md-2">
						<label for="quantidadeProduto">Quantidade</label>
						<input type="text" name = "quantidadeProduto" class="form-control" id="quantidadeProduto" placeholder="Digite a quantidadeProduto">
					</div>
					<div class="form-group col-xs-12 col-md-4">
						<label for="categoriaProduto">Categoria</label>
						<input type="text" name = "precoProduto" class="form-control" id="precoProduto" placeholder="Digite o preço do produto">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-xs-12 col-md-8">
						<label for="descricaoProduto">Descrição</label>
						<input type="text" name = "descricaoProduto" class="form-control" id="descricaoProduto" placeholder="Digite o preço do produto">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</form>
		</div>
	</section>
  <footer >
	<?php
	include ("layoutRodape.php");
	?>
  </footer>
</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
  </body>
</html>