<?php

	require_once('../config.php'); 
	require_once(DBAPI);

	$clientes = null;
	$cliente = null;

	//EXIBIR REGISTROS
	function index(){
		global $clientes;
		$clientes = find_all('clientes');
	}

	//ADICIONAR REGISTROS
	function add()
	{
		if (!empty($_POST['cliente'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$cliente = $_POST['cliente'];
			$cliente['modified'] = $cliente['created'] = $today->format("Y-m-d H:i:s");

			save('clientes', $cliente);
			header('location: index.php');
		}
	}

	//Editar Cliente
	function edit(){
		$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

		if(isset($_GET['id'])){
			$id = $_GET['id'];
			if (isset($_POST['cliente'])) {
				$cliente = $_POST['cliente'];
				$cliente['modified'] = $now->format("Y-m-d H:i:s");
				update('clientes', $id, $cliente);
				header('location: index.php');
			}else{
				global $cliente;
				$cliente = find('clientes', $id);
			}
		}else{
			header('location: index.php');
		}
	}
?>