<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Produto</h2>

<form action="edit.php?id=<?php echo $produto['id']; ?>" method="post">
	<hr />
	<div class="row">
		<div class="form-group col-md-7">
			<label for="name"> Descrição</label>
			<input type="text" class="form-control" name="produto['descricao']" valeu="<?php echo $produto['descricao']; ?>">
		</div>

		<div class="form-group col-md-3">
			<label for="name"> Unidade</label>
			<input type="text" class="form-control" name="produto['unidade']" valeu="<?php echo $produto['unidade']; ?>">
		</div>

		<div class="form-group col-md-3">
			<label for="name"> Quantidade</label>
			<input type="text" class="form-control" name="produto['quantidade']" valeu="<?php echo $produto['quantidade']; ?>">
		</div>

		<div class="form-group col-md-7">
			<label for="name"> Fabricante</label>
			<input type="text" class="form-control" name="produto['fabricante']" valeu="<?php echo $produto['fabricante']; ?>">
		</div>

		<div class="form-group col-md-2">
			<label for="name"> Data Fabricação</label>
			<input type="text" class="form-control" name="produto['datafabricacao']" valeu="<?php echo $produto['datafabricacao']; ?>">
		</div>
	</div>

	<div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>