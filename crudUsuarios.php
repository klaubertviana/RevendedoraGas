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
	<title>Usuários</title>
</head>  
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" >
				<?php
				// TITULO 
				include ("layoutTitulo.php");
				echo '<br>';
				// NAV BAR ADMINISTRADOR
				include ("layoutNavBar.php");				
				?>
	<div class="row">
		<div class="col-md-12">
			<h2>Usuários</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		<table class="table table-bordered table-sm">
				<thead>
					<tr>
						<th> Id </th>
						<th> Nome </th>
						<th> Departamento </th>
						<th> Setor </th>
						<th> Telefone </th>
						<th> E-mail </th>
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
						<td>  Lorem ipsum dolor. </td>						
						<td> <a href="index.html"><button type="button" class="btn btn-primary btn-md btn-block">Editar</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Apagar</button></a></td> 
					</tr>
					<tr>
						<td> 2 </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>					
						<td> <a href="index.html"><button type="button" class="btn btn-primary btn-md btn-block">Editar</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Apagar</button></a></td>  						
					</tr>
					<tr class="table-active">
						<td> 3 </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>						
						<td> <a href="index.html"><button type="button" class="btn btn-primary btn-md btn-block">Editar</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Apagar</button></a></td> 
					</tr>
					<tr>
						<td> 4 </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>					
						<td> <a href="index.html"><button type="button" class="btn btn-primary btn-md btn-block">Editar</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Apagar</button></a></td>  						
					</tr>
					<tr class="table-active">
						<td> 5 </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>						
						<td> <a href="index.html"><button type="button" class="btn btn-primary btn-md btn-block">Editar</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Apagar</button></a></td> 
					</tr>
					<tr>
						<td> 6 </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>					
						<td> <a href="index.html"><button type="button" class="btn btn-primary btn-md btn-block">Editar</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Apagar</button></a></td>  						
					</tr>
					<tr class="table-active">
						<td> 7 </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>
						<td>  Lorem ipsum dolor. </td>						
						<td> <a href="index.html"><button type="button" class="btn btn-primary btn-md btn-block">Editar</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Apagar</button></a></td> 
					</tr>
					<tr>
						<td> 8 </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>
						<td> Lorem ipsum dolor. </td>					
						<td> <a href="index.html"><button type="button" class="btn btn-primary btn-md btn-block">Editar</button></a></td>
						<td> <a href="index.html"><button type="button" class="btn btn-md btn-block btn-danger">Apagar</button></a></td>  						
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