<?php
    require_once('functionsprodutos.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Produtos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="addprodutos.php"><i class="fa fa-plus"></i> Novo Produto</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="30%">Descrição</th>
		<th>Unidade</th>
		<th>Quantidade</th>
		<th>Fabricante</th>
		<th>Data Fabricação</th>
		<th>Atualizado em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($produtos) : ?>
<?php foreach ($produtos as $produto) : ?>
	<tr>
		<td><?php echo $produto['id']; ?></td>
		<td><?php echo $produto['descricao']; ?></td>
		<td><?php echo $produto['unidade']; ?></td>
		<td><?php echo $produto['quantidade']; ?></td>
		<td><?php echo $produto['fabricante']; ?></td>
		<td><?php echo $produto['datafabricacao']; ?></td>
		<td><?php echo $produto['modified']; ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="editprodutos.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-cliente="<?php echo $produto['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include(FOOTER_TEMPLATE); ?>