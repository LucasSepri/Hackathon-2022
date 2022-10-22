<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'nie');
define('PORT', 3306);

$conn = new PDO('mysql:host=' . HOST . ';port='.PORT.';dbname=' . DBNAME . ';', USER, PASS);


    $servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco_dados = "nie";

	
	$connn = mysqli_connect($servidor, $usuario, $senha, $banco_dados);
