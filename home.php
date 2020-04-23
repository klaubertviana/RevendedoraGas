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
	<title>Home</title>
</head>  
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" >
				<?php include ("layoutTitulo.php"); ?>			
				<?php include ("layoutNavBar.php");?>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4 p-10 bg-primary text-white" align="center">
					<br>
					<h2>Vendas - Dia</h2>
					<h3> r$ 123,00</h3>
					<br>
				</div>
				<div class="col-md-4 p-10 bg-primary text-white" align="center">
					<br>
					<h2>Vendas - Mês</h2>
					<h3> r$ 123,00</h3>
					<br>
				</div>
				<div class="col-md-4 p-10 bg-primary text-white" align="center">
					<br>
					<h2>Nº Entregas - Dia</h2>
					<h3> 1234 </h3>
					<br>
				</div>
			</div>
			<br>
	<div class="row">
		<div class="col-md-8"></div>
		<div class="col-md-4">
			<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm"> Pesquisa Produto &nbsp</span>
  </div>
  <input type="text" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default">
</div>
		</div>



	</div>
	<div class="row">
		<div class="col-md-12">
		<table class="table table-bordered table-sm">
				<thead>
					<tr>
						<th> Id </th>
						<th> Produto </th>
						<th> Pedido </th>
						<th> Vendedor </th>
						<th> Status </th>					
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr class="table-active">
						<td> 1 </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>										
						<td> <a href="index.html"><button type="button" class="btn btn-success btn-md btn-block">Entregue</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Cancelado</button></a></td> 
					</tr>
					<tr>
						<td> 2 </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>										
						<td> <a href="index.html"><button type="button" class="btn btn-success btn-md btn-block">Entregue</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Cancelado</button></a></td> 						
					</tr>
					<tr class="table-active">
						<td> 3 </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>										
						<td> <a href="index.html"><button type="button" class="btn btn-success btn-md btn-block">Entregue</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Cancelado</button></a></td> 
					</tr>
					<tr>
						<td> 4 </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>										
						<td> <a href="index.html"><button type="button" class="btn btn-success btn-md btn-block">Entregue</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Cancelado</button></a></td> </tr>
					<tr class="table-active">
						<td> 5 </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>										
						<td> <a href="index.html"><button type="button" class="btn btn-success btn-md btn-block">Entregue</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Cancelado</button></a></td> 
					</tr>
					<tr>
						<td> 6 </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>											
						<td> <a href="index.html"><button type="button" class="btn btn-success btn-md btn-block">Entregue</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Cancelado</button></a></td> </tr>
					<tr class="table-active">
						<td> 7 </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>											
						<td> <a href="index.html"><button type="button" class="btn btn-success btn-md btn-block">Entregue</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Cancelado</button></a></td>   
					</tr>
					<tr>
						<td> 8 </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>									
						<td> <a href="index.html"><button type="button" class="btn btn-success btn-md btn-block">Entregue</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Cancelado</button></a></td> 
					</tr>
				</tbody>
		</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
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