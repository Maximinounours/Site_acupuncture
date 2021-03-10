<?php

//class et autres fonctions utiles
require('classe_Utilisateur.php');

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$templatesDir = '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates';

$smarty->setTemplateDir($templatesDir);

$smarty->setCompileDir('/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates_c/');
$smarty->setCacheDir('/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/cache/');
$smarty->setConfigDir('/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/configs/');

require_once('fonctions_acupuncture.php');
session_start();
if (empty($_GET['page'])){ //Premiere visite du site pour la session en cours


  	$utilisateur = new Utilisateur();
  	$_SESSION['utilisateur'] = $utilisateur;

  	//Envoi des infos sur l'etat de connexion
  	$smarty->assign('utilisateur', $utilisateur);
  	
	$maPage = 'accueil';
	
	$smarty->display($maPage . '.tpl');
}

else{ //Sinon on est en train de naviguer sur le site
	
	//Si on est sur la page depuis trop longtemps et les caches/cookies sont timeout
	if(empty($_SESSION['utilisateur'])){
		$utilisateur = new Utilisateur();
  		$_SESSION['utilisateur'] = $utilisateur;
  	}
	
  	//Envoi des infos sur l'etat de connexion
  	$smarty->assign('utilisateur', $_SESSION['utilisateur']);

//Check si on est connecté avec utilisateur
//On va utiliser ca pour afficher ou non des elements sur les pages html (dans le menu notamment pour afficher
//le nom et prenom, et dans la liste pour afficher la recherche par mots-clés.
//Aussi ajouter un bouton de deconnexion dans le menu

	$maPage = $_GET['page'];
	switch($maPage){
		case "register":
			//Check si l'on a rempli le formulaire
			
			//Check s'il est bien rempli et si la connexion est acceptee
			//Donc plusieurs cas
				
			//Affichage de la page	
			break;
			
		case "connexion":
		
			//Check si on est deja connecté ou pas (option deconnexion si oui)
			
			
			//Sinon check le contenu du formulaire
			
			//Requete SQL pour savoir si l'utilisateur est connu et si la connexion est acceptée
			
			
			//Affichage de la page	
			break;
			
		case "listeSymptome":
			$dbh = connexionBDD();
			$filtre_actif = false;
			
			//Une table aurait ete utile pour ca mais tant pis
			//On peut faire ca par un algo mais ca change un peu
			$decodage_code = [
			"m" => ["m", "", ""],
			"me" => ["m", "e", ""],
			"mi" => ["m", "i", ""],
			"tf" => ["tf", "", ""],
			"tfp" => ["tf", "p", ""],
			"tfv" => ["tf", "v", ""],
			"tfv+" => ["tf", "v", ""],
			"tfv-" => ["tf", "v", ""],
			"tfc" => ["tf", "c", ""],
			"tff" => ["tf", "f", ""],
			"tfvf" => ["tf", "v", "f"],
			"tfvfi" => ["tf", "v", "f"],
			"tfvfm" => ["tf", "v", "f"],
			"tfvfs" => ["tf", "v", "f"],
			"tfpc" => ["tf", "p", "c"],
			"tfpci" => ["tf", "p", "c"],
			"tfpcm" => ["tf", "p", "c"],
			"tfpcs" => ["tf", "p", "c"],
			"j" => ["j", "", ""],
			"l" => ["l", "", ""],
			"l2p" => ["l", "p", ""],
			"l2v" => ["l", "v", ""],
			"lp" => ["l", "p", ""],
			"lv" => ["l", "v", ""],
			"mv" => ["mv", "", ""],
			"mva" => ["mv", "", ""],
			"mvi" => ["mv", "", ""],
			"mvp" => ["mv", "", ""],
			];
			
			
			//Code inutile pour les caract...
			$options_caracteristique = [
			"e" => "externe",
			"i" => "interne",
			"p" => "plein",
			"v" => "vide",
			"c" => "chaud",
			"f" => "froid"
			];
			
			$options_pathologie = [
				"mv" => "Merveilleux vaisseaux",
				"tf" => "Zang / Fu",
				"j" => "Jing jin",
				"l" => "Voie luo",
				"m" => "Méridien"
			];
			
			//Options filtre meridien
			$filtre_meridien_SQL = "SELECT 
				nom,
				code
				FROM meridien
				ORDER BY nom";
			$PDOrep = $dbh->prepare($filtre_meridien_SQL);
			$PDOrep->execute(array());
			$options_meridien = $PDOrep->fetchAll(PDO::FETCH_OBJ);
			

			
			//Requete en fonction du filtre
			$requeteSQLFiltre = "SELECT 
				name AS zoneDouleur,
				symptome.desc as detailDouleur,
				patho.desc AS detailMeridien,
				meridien.nom AS nomMeridien,
				patho.type AS code
				FROM keywords
				INNER JOIN keysympt ON keysympt.idk = keywords.idk
				INNER JOIN symptome ON keysympt.ids = symptome.ids
				INNER JOIN symptpatho ON symptpatho.ids = symptome.ids
				INNER JOIN patho ON patho.idp = symptpatho.idp
				INNER JOIN meridien ON patho.mer = meridien.code";
			$filtreEnPlus = false;

			//Check les options de filtre et prepare la requete en consequence
			if (!empty($_POST['meridien'])){
				$filtre_actif = true;
				$choixMeridien = $_POST['meridien'];
				$requeteSQLFiltre = $requeteSQLFiltre ." WHERE meridien.code = '". $choixMeridien . "'";
				$filtreEnPlus = true;
			}
			
			if (!empty($_POST['pathologie'])){
				$filtre_actif = true;
				$choixPathologie = $_POST['pathologie'];
				if($filtreEnPlus){
					$requeteSQLFiltre = $requeteSQLFiltre . "AND ";
				}
				else{
					$filtreEnPlus = true;
					$requeteSQLFiltre = $requeteSQLFiltre . " WHERE ";
				}
	 			$requeteSQLFiltre = $requeteSQLFiltre . "patho.type LIKE '". $choixPathologie . "%'";
	 			
	 			//Necessaire de part la structure de la base de donnée
	 			if($choixPathologie == "m"){
	 				$requeteSQLFiltre = $requeteSQLFiltre . "AND patho.type NOT LIKE 'mv%'";
	 			}
			}
			
			if (!empty($_POST['caracteristique'])){
			//Formulaire renvoie la chaine de caractere, pas le  code (parce que sinon on peut pas distinguer tff de tfc entre autre...)
				$filtre_actif = true;
				$choixCaracteristique = $_POST['caracteristique'];
				if($filtreEnPlus){
					$requeteSQLFiltre = $requeteSQLFiltre . "AND ";
				}
				else{
					$requeteSQLFiltre = $requeteSQLFiltre . " WHERE ";
				}
	 			$requeteSQLFiltre = $requeteSQLFiltre . "patho.desc LIKE '%". $choixCaracteristique . "%'";
	 		
				//a terme avoir les choix dynamique en fonction de la pathologie selectionnée
			}
			
			if($filtre_actif){
			$requete_association_meridien = "SELECT code, nom
			FROM meridien";
			$PDOrep = $dbh->prepare($requete_association_meridien);
			$PDOrep->execute(array());
			$reponsecode = $PDOrep->fetchAll(PDO::FETCH_OBJ);
						
			$nom_code_meridien = array_combine(
				array_column($reponsecode, 'code'),
				array_column($reponsecode, 'nom'));
			}
			
	// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
	
	//faire une partie visible ou non qui indique les options de filtre actif (utiliser $choixPathologie, $choixMeridien...)
	
	//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
	

			
			$requeteSQLFiltre = $requeteSQLFiltre . " ORDER BY name LIMIT 20;";
	//A ce stade la requete est prete a etre envoyée
			
			$PDOrep = $dbh->prepare($requeteSQLFiltre);
			$PDOrep->execute(array());
			$reponseREQ = $PDOrep->fetchAll(PDO::FETCH_OBJ);
	//Il faut pouvoir comprendre les données maintenant pour avoir un affichage correct (a partir du patho.type trouver
	//la pathologie et les caracteristiques de la donnée)

			$nb_resp = 0;
			foreach($reponseREQ as $ligne){
				$patho_caracteristiques = $decodage_code[$ligne->code];
				$ligne->nom_pathologie = $options_pathologie[$patho_caracteristiques[0]];
				if($patho_caracteristiques[1] != ""){
					$ligne->nom_caracteristique_1 = $options_caracteristique[$patho_caracteristiques[1]];
					}
				else{
					$ligne->nom_caracteristique_1 = "";
				}
				if($patho_caracteristiques[2] != ""){
					$ligne->nom_caracteristique_2 = $options_caracteristique[$patho_caracteristiques[2]];
					}
				else{
					$ligne->nom_caracteristique_2 = "";
				}
				$nb_resp++;
			}
/* Permet d'extraire la pathologie du code mais c'est quand meme plus facile d'avoir une table de code
			foreach($reponseREQ as $ligne){
				foreach($options_pathologie as $code_pathologie => $nom_pathologie){
					if(!empty(stristr($ligne->code, $code_pathologie))){
						print_r($code_pathologie . "   ");
						$ligne->nom_de_la_pathologie = $nom_pathologie;
						$ligne->code_de_la_pathologie = $code_pathologie;
						$ligne->code = preg_replace("/".$code_pathologie."/", "",$ligne->code, 1);
					}
				}
			}
*/



			//Envoi des données au template
			$smarty->assign('options_meridien', $options_meridien);
			$smarty->assign('options_pathologie', $options_pathologie);
			$smarty->assign('options_caracteristique', $options_caracteristique);
			$smarty->assign('reponseSQL', $reponseREQ);
			$smarty->assign('nb_resp', $nb_resp);
			$smarty->assign('filtre_actif', $filtre_actif);
			if($filtre_actif){
				$smarty->assign('choix_filtre', [$nom_code_meridien[$choixMeridien], $options_pathologie[$choixPathologie], $choixCaracteristique]);
			}


			break;		
		
		default:
			break;
	}
	
	//Affichage de la page apres avoir mis en place et envoyé toutes les données
	$smarty->display($maPage . '.tpl');
}	


/*

if (empty($_GET['page'])){
	$smarty->display('accueil.tpl');
}
else{

	$maPage = $_GET['page'];
	if($maPage == 'listeSymptome'){
		
		//Option filtre pathologie
		$options_pathologie = [
		"mv" => "Merveilleux vaisseaux",
		"tf" => "Zang / Fu",
		"j" => "Jing jin",
		"l" => "Voie luo",
		"m" => "Méridien"
		];

		
		//Filtrage ?
		if (!empty($_POST['meridien'])){
			echo $_POST['meridien'];
		}
	
		//Connexion a la base de donnees
		$dsn = 'pgsql:dbname=acudb;host=localhost';
		$user = 'postgres-tli';
		$password = 'tli';
		try{
			$dbh = new PDO($dsn, $user, $password);
		}
		catch (PDOException $e){
		echo 'connexion echouee : ' . $e->getMessage();
		};
		
		//Option filtre meridien
		$filtre_meridien_SQL = "SELECT 
		nom,
		code
		FROM meridien
		ORDER BY nom";
        $PDOrep = $dbh->prepare($filtre_meridien_SQL);
        $PDOrep->execute(array());
		$options_meridien = $PDOrep->fetchAll(PDO::FETCH_OBJ);
		$smarty->assign('options_meridien', $options_meridien);		
		
		//Option filtre pathologie

		$smarty->assign('options_pathologie', $options_pathologie);
		
		
		//WHERE meridien.nom = 'Foie'

		$requeteSQL = "SELECT 
name AS zoneDouleur,
symptome.desc as detailDouleur,
patho.desc AS detailMeridien,
meridien.nom AS nomMeridien,
patho.type AS code
FROM keywords
INNER JOIN keysympt ON keysympt.idk = keywords.idk
INNER JOIN symptome ON keysympt.ids = symptome.ids
INNER JOIN symptpatho ON symptpatho.ids = symptome.ids
INNER JOIN patho ON patho.idp = symptpatho.idp
INNER JOIN meridien ON patho.mer = meridien.code
ORDER BY name
LIMIT 20;";

		$PDOrep = $dbh->prepare($requeteSQL);
		
		$PDOrep->execute(array());	
		
		
		$reponseREQ = $PDOrep->fetchAll(PDO::FETCH_OBJ);
		
		foreach($reponseREQ as $ligne){
			$code = $ligne->code;
			foreach($options_pathologie as $code_pathologie => $nom_pathologie){
				if(!empty(stristr($code, $code_pathologie))){
					$ligne->nom_de_la_pathologie = $nom_pathologie;
					$ligne->code_de_la_pathologie = $code_pathologie;
					$ligne->code = preg_replace("/".$code_pathologie."/", "", $code, 1);
					
					
				}
			}
			
		}
		
		$smarty->assign('reponseSQL', $reponseREQ);
		
	}
		$smarty->display($maPage . '.tpl');
		
}
*/
