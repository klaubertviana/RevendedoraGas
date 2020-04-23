<!DOCTYPE html>
<html lang="pt-br">

<head>
 <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="klaubert">
 	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/cadastroCliente.css" rel="stylesheet">
	<title>Cadastro Cliente</title>
</head>  

<body>
	
	<header class=" cabecario">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4"><span class="border"><img id = "logo" src="imagem/logoChama.jpg" class="img-rounded" alt="logo"></span></div>
  			<div class="col-md-4"><h3 id = "textoLogo">Sistema ChamaMais 2.0</h3></div>
  			<div class="col-md-4" id = "bemvindoLogo">Bem Vindo, Klaubert</div>
			</div>
		</div>		
	</header>
	
	<section class="menu">
		<nav>
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link active" href="#">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastro</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Cliente</a>
						<a class="dropdown-item" href="#">Fornecedor</a>
						<a class="dropdown-item" href="#">Produto</a>
						<a class="dropdown-item" href="#">Usuario</a>					
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Venda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Estoque</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Indicadores</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Sair</a>
				</li>				
			</ul>
		</nav>
	</section>

 	<section class="formulario">
		<div class="container-fluid">
			<form action ="#" method="POST" autocomplete="off">				
 				<div class="row">
					<div class="form-group col-md-5">
						<label for="nomeCliente">Nome</label>
						<input type="text" name = "nomeCliente" class="form-control" id="nomeCliente" placeholder="Digite o nome">
					</div>
					<div class="form-group col-md-2">
						<label for="cpfCliente">CPF</label>
						<input type="text" name = "cpfCliente" class="form-control" id="cpfCliente" placeholder="Digite CPF">
					</div>
					<div class="form-group col-md-1">
						<label for="sexoCliente">Sexo</label>
						<select class ="form-control" name = "sexoCliente" id="sexoCliente">
							<option> --- </option>
							<option> Masculino </option>
							<option> Feminino </option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="emailCliente">Email</label>
						<input type="email" name = "emailCliente" class="form-control" id="emailCliente" placeholder="Digite email">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label for="enderecoCliente">Endereço</label>
						<input type="text" name = "enderecoCliente" class="form-control" id="enderecoCliente" placeholder="Digite o endereço">
					</div>
					<div class="form-group col-md-2">
						<label for="bairroCliente">Bairro</label>
						<input type="text" name = "bairroCliente" class="form-control" id="bairroCliente" placeholder="Digite o bairro">
					</div>
					<div class="form-group col-md-2">
						<label for="bairroCliente">Complemento</label>
						<input type="text" name = "ComplementoCliente" class="form-control" id="bairroCliente" placeholder="Complemento">
					</div>
					<div class="form-group col-md-2">
						<label for="telefoneCliente">Telefone</label>
						<input type="text" name = "telefoneCliente" class="form-control" id="telefoneCliente" placeholder="Digite o telefone">
					</div>
					<div class="form-group col-md-2">
						<label for="celularCliente">Celular</label>
						<input type="text" name = "celularCliente" class="form-control" id="celularCliente" placeholder="Digite o celular">
					</div>
				</div>
				<div class="row">					
					<div class="form-group col-md-4">
						<label for="cidadeCliente">Cidade</label>
						<input type="text" name = "cidadeCliente" class="form-control" id="cidadeCliente" placeholder="Digite a cidade">
					</div>
					<div class="form-group col-md-2">
						<label for="estadoCliente">Estado</label>
						<input type="text" name = "estadoCliente" class="form-control" id="estadoCliente" placeholder="Digite o estado">
					</div>
					<div class="form-group col-md-2">
						<label for="cepCliente">CEP</label>
						<input type="text" name = "cepCliente" class="form-control" id="cepCliente" placeholder="Digite a CEP">
					</div>
				</div>
				<div class = "row">
					<div class = "form-group col-md-12">
						<button type="submit" class="btn btn-primary">CADASTRAR</button>
				</div>
			</form>
		</div>
	</section>
	
	<footer class="rodape">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12"><p> TCC - SENAI - 2020<br> Klaubert & James</div>
			</div>
		</div>
	</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>