<?php

//Deplacee dans model.php
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


function traitement_rep_SQL($ligne){
	require('data.php');
	//Generation du lien pour obtenir la page du symptome
	$ligne->lien = "index.php?page=pageSymptome&code_sympt=" . $ligne->idk . "-" . $ligne->ids . "-" . $ligne->idp;

	//Deduit les codes de la pathologie et des carateristiques à partir du code complet
	$patho_caracteristiques = $DATA_decodage_code[$ligne->code];
	//Retrouve le nom de la pathologie et des caract a partir du code
	$ligne->nom_pathologie = $DATA_options_pathologie[$patho_caracteristiques[0]];
	$ligne->nom_caracteristique_1 = $DATA_options_caracteristique[$patho_caracteristiques[1]];
	$ligne->nom_caracteristique_2 = $DATA_options_caracteristique[$patho_caracteristiques[2]];
	//Trouve le chemin vers l'image a partir du nom de la pathologie/caract
	$ligne->img_pathologie = "./images/blank.png";
	$ligne->img_caracteristique_1 = $DATA_caract_to_image[$ligne->nom_caracteristique_1];
	$ligne->img_caracteristique_2 = $DATA_caract_to_image[$ligne->nom_caracteristique_2];
	return $ligne;
};


?>
