<?php
	/*2 environment*/
	/*Production*/

	/*development*/
	//Define o nome do banco de dados
	define('DB_NAME','prjpc_crud');

	//Define o user do banco
	define('DB_USER', 'root');

	//DEFINE O PASSWORD
	define('DB_PASSWORD', '');

	//define a hospedagem
	define('DB_HOST', 'localhost');

	//define o caminho absoluto da app
	if (!defined('ABSPATH')) {
		define('ABSPATH', dirname(__FILE__) . '/');
	}

	//define o caminho para o sistema dentro do server
	if (!defined('BASEURL')) {
		define('BASEURL', '/prjpc/');
	}

	//define o caminho para o arquivo do banco de dados
	if (!defined('DBAPI')) {
		define('DBAPI', ABSPATH . 'inc/database.php');
	}

	//define o cabeçalho e rodapé a ser montado com nossa app
	define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
	define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
?>