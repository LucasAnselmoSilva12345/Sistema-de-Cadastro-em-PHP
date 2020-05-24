<?php 
  require_once('functionsprodutos.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Produto</h2>

<form action="editprodutos.php?id=<?php echo $produto['id']; ?>" method="post">
<hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Descrição</label>
      <input type="text" class="form-control" name="produto['descricao']" value="<?php echo $produto['descricao']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Unidade</label>
      <input type="text" class="form-control" name="produto['unidade']" value="<?php echo $produto['unidade']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Fabricação</label>
      <input type="text" class="form-control" name="produto['datafabricacao']" value="<?php echo $produto['datafabricacao']; ?>">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Fabricante</label>
      <input type="text" class="form-control" name="produto['fabricante']" value="<?php echo $produto['fabricante']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Quantidade</label>
      <input type="text" class="form-control" name="produto['quantidade']" value="<?php echo $produto['quantidade']; ?>">
    </div>
    
    
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>