<?php
	session_start();

	define('INCLUDE_PATH', 'http://localhost/sistemaLoja/');
	define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'Painel/');
	define('INCLUDE_PATH_PAINEL_PAGES', INCLUDE_PATH.'Painel/Pages/');
	/**Conectando ao banco de dados**/
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'eshop');

?>