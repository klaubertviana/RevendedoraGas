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
	<title>Estoque</title>
</head>  
<body>
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<?php
				// TITULO 
				include ("layoutTitulo.php");
				echo '<br>';
				// NAV BAR ADMINISTRADOR
				include ("layoutNavBar.php");				
				?>
				<div class="row">
					<div class="col-md-12">
						<h2>Movimentação de Estoque</h2>
					</div>
				</div>

	
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
					<div class="form-group col-xs-12 col-md-4">
						<label for="nomeProduto">Categoria</label>
						<input type="text" name = "categoriaProduto" class="form-control" id="categoriaProduto" placeholder="Categoria">
					</div>
				</div>	
				
				<div class="row">
					<div class="form-group col-xs-12 col-md-2">
						<label for="precoProduto">Unidade</label>
						<input type="text" name = "unidadeProduto" class="form-control" id="unidadeProduto" placeholder="Unidade">
					</div>
					<div class="form-group col-xs-12 col-md-2">
						<label for="precoProduto">Preço</label>
						<input type="text" name = "precoProduto" class="form-control" id="precoProduto" placeholder="Digite o preço do produto">
					</div>
					<div class="form-group col-xs-12 col-md-2">
						<label for="quantidadeProduto">Quantidade Lançamento</label>
						<input type="text" name = "lancamentoProduto" class="form-control" id="lancamentoProduto" placeholder="Lançamento">
					</div>
					<div class="form-group col-xs-12 col-md-4">
						<label for="categoriaProduto">Quantidade Estoque</label>
						<input type="text" name = "quantidadeProduto" class="form-control" id="quantidadeProduto" placeholder="Quantidade">
					</div>
					<div class="form-group col-xs-12 col-md-2">
						<label for="categoriaProduto">Data Movimentação </label>
						<input type="date" name = "dataProduto" class="form-control" id="dataProduto">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Registrar</button><br><br>

			</form>

				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered table-sm">
							<thead>
								<tr>
									<th> Id </th>
									<th> Produto </th>
									<th> Categoria </th>
									<th> Quantidade Atual </th>
									<th> Data Registro </th>			
									
								</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<td> 1 </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>										
									
								</tr>
								<tr>
									<td> 2 </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>										
								 						
								</tr>
								<tr class="table-active">
									<td> 3 </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>										
									
								</tr>
								<tr>
									<td> 4 </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>										
									  						
								</tr>
								<tr class="table-active">
									<td> 5 </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>										
									
								<tr>
									<td> 6 </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>											
															
								</tr>
								<tr class="table-active">
									<td> 7 </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>
									<td>  Lorem ipsum dolor. </td>											
									
								</tr>
								<tr>
									<td> 8 </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>
									<td> Lorem ipsum dolor. </td>									
									  						
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-6">
						<nav>
							<ul class="pagination">
								<li class="page-item">
									<a class="page-link" href="#">Anterior</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">1</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">2</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">3</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">4</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">5</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">Próximo</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-4"></div>
				</div>
				<?php include("layoutRodape.php"); ?>
			</div>
		</div> 
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
	</html>