<?php
	require_once('../config.php'); 
	require_once(DBAPI);

	$produtos = null;
	$produto = null;

	function index(){
		global $produtos;
		$produtos = find_all('produtos');
	}

	function add()
	{
		if (!empaty($_POST['produto'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
			$produto = $_POST['produto'];
			$produto['modified'] = $produto['created'] = $today->format("Y-m-d H:i:s");

			save('produtos', $produto);
			header('location: index.php');
		}
	}

	function edit(){
		$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			if (isset($_POST['cliente'])) {
				$produto = $_POST['produto'];
				$produto['modified'] = $now->format("Y-m-d H:i:s");

			update('produtos', $id, $produto);
			header('location: index.php');
			}else{
				header('location: index.php');
			}
		}
	}
?>