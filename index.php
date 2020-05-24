<?php
	/*
	require_once 'config.php';
	require_once DBAPI;

	$db = open_database();

	if($db){
		echo "<h1>Banco de Dados Conectado!</h1>";
	}
	else{
		echo "<h1>Não foi possível conectar-se ao Banco!</h1>";
	}
	*/
	require_once 'config.php';
	require_once DBAPI;

	include(HEADER_TEMPLATE);
	$db = open_database();
?>


	<h1 style="text-align: center;">Sistema de cadastro</h1>
	<hr />

	<?php if ($db) : ?>
		<div class="row">
			<div class="col-xs-6 col-sm-3 col-md-2">
				<a href="clientes/add.php" class="btn btn-primary">
					<div class="row">
						<div class="col-xs-12 text-center">
							<i class="fa fa-plus fa-5x"></i>
						</div>
						<div class="col-xs-12 text-center">
							<p>Novo Cliente</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-xs-6 col-sm-3 col-md-2">
				<a href="clientes" class="btn btn-default">
					<div class="row">
						<div class="col-xs-12 text-center">
							<i class="fa fa-user fa-5x"></i>
						</div>
						<div class="col-xs-12 text-center">
							<p>Clientes</p>
						</div>
					</div>
				</a>
			</div>
		</div>

		<br>
		<br>


		<div class="row">
			<div class="col-xs-6 col-sm-3 col-md-2">
				<a href="produtos/addprodutos.php" class="btn btn-primary">
					<div class="row">
						<div class="col-xs-12 text-center">
							<i class="fa fa-plus fa-5x"></i>
						</div>
						<div class="col-xs-12 text-center">
							<p>Novo Produto</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-xs-6 col-sm-3 col-md-2">
				<a href="produtos" class="btn btn-default">
					<div class="row">
						<div class="col-xs-12 text-center">
							<i class="fa fa-user fa-5x"></i>
						</div>
						<div class="col-xs-12 text-center">
							<p>Produto</p>
						</div>
					</div>
				</a>
			</div>
		</div>

	<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

	<?php endif; ?>

	<?php
		include(FOOTER_TEMPLATE); 
	?>
