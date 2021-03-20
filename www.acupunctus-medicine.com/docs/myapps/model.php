<?php

function MODEL_connexion_BDD(){
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

function MODEL_SQL_envoi($requete){
	$dbh = MODEL_connexion_BDD();
    $PDOrep = $dbh->prepare($requete);
    $PDOrep->execute(array());
    $reponse = $PDOrep->fetchAll(PDO::FETCH_OBJ);
    return $reponse;
}

?>