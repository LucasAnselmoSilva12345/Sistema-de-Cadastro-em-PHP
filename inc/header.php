<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Projeto PHP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-top: 10px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>fonts/fontawesome-free-5.11.2-web/css/all.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">-->
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" role="navigation">
      <div class="container">
        <div class="navbar-header">
          
          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">Sistema de Cadastro</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Clientes <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>clientes">Gerenciar Clientes</a></li>
                    <li><a href="<?php echo BASEURL; ?>clientes/add.php">Novo Cliente</a></li>
                </ul>
            </li>
          </ul>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Produtos <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>produtos">Gerenciar Produtos</a></li>
                    <li><a href="<?php echo BASEURL; ?>produtos/addprodutos.php">Novo Produto</a></li>
                </ul>
            </li>
          </ul>
        </div>







		<form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
         </form>
      </div>
    </nav>

<main class="container">