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
	<title>Cadastro Fornecedores</title>
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
	<h3> Cadastro de Fornecedores </h3>
	<br>
	<section>
		<!-- FORMULARIO DO FORNECEDOR -->
		<div class="container-fluid">
			<form action ="#" method="GET" autocomplete="on">				
				
				<div class="row">
					<div class="form-group col-xs-12 col-md-12">
						<label for="razaoSocialFornecedor">Razão Social</label>
						<input type="text" name = "razaoSocialFornecedor" class="form-control" id="razaoSocialFornecedor" placeholder="Digite a razão social">
					</div>
				</div>
			
				<div class="row">
					<div class="form-group col-xs-12 col-md-12">
						<label for="nomeFantasiaFornecedor">Nome Fantasia</label>
						<input type="text" name = "nomeFantasiaFornecedor" class="form-control" id="nomeFantasiaFornecedor" placeholder="Digite o nome Fantasia">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-xs-12 col-md-7">
						<label for="enderecoFornecedor">Endereço</label>
						<input type="text" name = "enderecoFornecedor" class="form-control" id="enderecoFornecedor" placeholder="Digite o endereço">
					</div>
					<div class="form-group col-xs-12 col-md-3">
						<label for="bairroFornecedor">Bairro</label>
						<input type="text" name = "bairroFornecedor" class="form-control" id="bairroFornecedor" placeholder="Digite o bairro">
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-xs-12 col-md-2">
						<label for="cepFornecedor">CEP</label>
						<input type="text" name = "cepFornecedor" class="form-control" id="cepFornecedor" placeholder="Digite a CEP">
					</div>
					<div class="form-group col-xs-12 col-md-4">
						<label for="cidadeFornecedor">Cidade</label>
						<input type="text" name = "cidadeFornecedor" class="form-control" id="cidadeFornecedor" placeholder="Digite a cidade">
					</div>
					<div class="form-group col-xs-12 col-md-4">
						<label for="estadoFornecedor">Estado</label>
						<input type="text" name = "estadoFornecedor" class="form-control" id="estadoFornecedor" placeholder="Digite o estado">
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-2">
						<label for="telefoneFornecedor">Telefone</label>
						<input type="text" name = "telefoneFornecedor" class="form-control" id="telefoneFornecedor" placeholder="Digite o telefone">
					</div>
					<div class="form-group col-md-2">
						<label for="celularFornecedor">Celular</label>
						<input type="text" name = "celularFornecedor" class="form-control" id="celularFornecedor" placeholder="Digite o celular">
					</div>
					<div class="form-group col-md-6">
						<label for="emailFornecedor">Email</label>
						<input type="email" name = "contatoFornecedor" class="form-control" id="contatoFornecedor" placeholder="Digite email do fornecedor">
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-2">
						<label for="CNPJFornecedor">Inscrição</label>
						<select class ="form-control" name = "CNPJFornecedor" id="CNPJFornecedor">
							<option> --- </option>
							<option> CPNJ </option>
							<option> CPF </option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="inscricaoEstadualFornecedor">Inscrição Estadual</label>
						<input type="text" name = "inscricaoEstadualFornecedor" class="form-control" id="inscricaoEstadualFornecedor" placeholder="Digite inscrição estadual">
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-4">
						<label for="atividadeFornecedor">Ramo Atividade</label>
						<input type="text" name = "atividadeFornecedor" class="form-control" id="atividadeFornecedor" placeholder="Digite o ramo de atividade">
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-4">
						<label for="contatoFornecedor">Contato</label>
						<input type="text" name = "contatoFornecedor" class="form-control" id="contatoFornecedor" placeholder="Digite contato com fornecedor">
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