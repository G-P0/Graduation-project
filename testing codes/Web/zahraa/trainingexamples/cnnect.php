<?php

	$dsn = 'mysql:host = localhost; dbname = products' ; //data source name
	$user = 'root'; //user name
	$pass = ''; //password
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		);

	try{

		$connection = new PDO($dsn, $user, $pass, $options);
		$connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$q = "INSERT INTO products.items (name) VALUES ('منتج')";
		$connection -> exec($q);

	}

	catch(PDOException $e){

		echo "failed" . $e->getMessage();

	}

	

?>