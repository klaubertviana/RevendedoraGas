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
	<title>Cadastro Usuario</title>
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
	<h3> Cadastro de Usuario </h3>
	<br>
	<section>
		<!-- FORMULARIO DO FORNECEDOR -->
		<div class="container-fluid">
			<form action ="#" method="GET" autocomplete="on">				
				
				<div class="row">
					<div class="form-group col-xs-12 col-md-6">
						<label for="nomeUsuario">Nome</label>
						<input type="text" name = "nomeUsuario" class="form-control" id="nomeUsuario" placeholder="Digite o nome">
					</div>

					<div class="form-group col-md-2">
						<label for="cpfUsuario">CPF</label>
						<input type="text" name = "cpfUsuario" class="form-control" id="cpfUsuario" placeholder="Digite CPF">
					</div>
					<div class="form-group col-xs-12 col-md-2">
						<label for="sexoUsuario">Sexo</label>
						<select class ="form-control" name = "sexoUsuario" id="sexoUsuario">
							<option> --- </option>
							<option> Masculino </option>
							<option> Feminino </option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-xs-12 col-md-7">
						<label for="enderecoUsuario">Endereço</label>
						<input type="text" name = "enderecoUsuario" class="form-control" id="enderecoUsuario" placeholder="Digite o endereço">
					</div>
					<div class="form-group col-xs-12 col-md-3">
						<label for="bairroUsuario">Bairro</label>
						<input type="text" name = "bairroUsuario" class="form-control" id="bairroCliente" placeholder="Digite o bairro">
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-xs-12 col-md-2">
						<label for="cepUsuario">CEP</label>
						<input type="text" name = "cepUsuario" class="form-control" id="cepUsuario" placeholder="Digite a CEP">
					</div>
					<div class="form-group col-xs-12 col-md-4">
						<label for="cidadeUsuario">Cidade</label>
						<input type="text" name = "cidadeUsuario" class="form-control" id="cidadeUsuario" placeholder="Digite a cidade">
					</div>
					<div class="form-group col-xs-12 col-md-4">
						<label for="estadoUsuario">Estado</label>
						<input type="text" name = "estadoUsuario" class="form-control" id="estadoUsuario" placeholder="Digite o estado">
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-2">
						<label for="telefoneUsuario">Telefone</label>
						<input type="text" name = "telefoneUsuario" class="form-control" id="telefoneUsuario" placeholder="Digite o telefone">
					</div>
					<div class="form-group col-md-2">
						<label for="celularUsuario">Celular</label>
						<input type="text" name = "celularUsuario" class="form-control" id="celularUsuario" placeholder="Digite o celular">
					</div>
					<div class="form-group col-md-6">
						<label for="emailUsuario">Email</label>
						<input type="email" name = "emailUsuario" class="form-control" id="emailUsuario" placeholder="Digite email">
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