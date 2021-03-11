<?php

function connexionBDD(){
	//Connexion base de données
	$dsn = 'pgsql:dbname=acudb;host=localhost';
	$user = 'postgres-tli';
	$password = 'tli';
	try{
		$dbh = new PDO($dsn, $user, $password);
	}
	catch (PDOException $e){
		echo 'connexion echouee : ' . $e->getMessage();
	}
	return $dbh;
};

function test(){
echo 'Bonjour';
};

?>
