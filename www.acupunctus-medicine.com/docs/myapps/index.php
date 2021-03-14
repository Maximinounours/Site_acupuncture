<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$templatesDir = '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates';
$smarty->setTemplateDir($templatesDir);
$smarty->setCompileDir('/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates_c/');
$smarty->setCacheDir('/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/cache/');
$smarty->setConfigDir('/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/configs/');

//class et autres fonctions utiles
require('classe_Utilisateur.php');
require_once('fonctions_acupuncture.php');
require_once('view.php');
require_once('model.php');
require_once('data.php');
session_start();

//Premiere visite du site pour la session en cours
if (empty($_GET['page'])){
  	$utilisateur = new Utilisateur();
  	$_SESSION['utilisateur'] = $utilisateur;
//Envoi des infos sur l'etat de connexion
  	view_assign_info_template('utilisateur', $utilisateur, $smarty);
	$maPage = 'accueil';
	$smarty->display($maPage . '.tpl');
}
//Sinon on est en train de naviguer sur le site
else{
//Si on est sur la page depuis trop longtemps et les caches/cookies sont timeout
	if(empty($_SESSION['utilisateur'])){
		$utilisateur = new Utilisateur();
  		$_SESSION['utilisateur'] = $utilisateur;
  	}
//Envoi des infos sur l'etat de connexion
	$_SESSION['utilisateur']->connexion("Sophie", "Maxime", "coucou@mail.com");
	view_assign_info_template('utilisateur', $_SESSION['utilisateur'], $smarty);
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
			$dbh = MODEL_connexion_BDD();

			$filtre1_actif = false;
			$filtre2_actif = false;

			
		//Code inutile pour les caract...

		//Options filtre meridien
			$filtre_meridien_SQL = "SELECT 
				nom,
				code
				FROM meridien
				ORDER BY nom";
			$options_meridien = MODEL_SQL_envoi($filtre_meridien_SQL, $dbh);
		//Options caracteristiques pour les utilsiateurs connectes
			$filtre_keyword_SQL = "SELECT *
				FROM keywords
				ORDER BY name";
			$options_keywords = MODEL_SQL_envoi($filtre_keyword_SQL, $dbh);
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

			$choixMeridien = "";
			$choixPathologie = "";
			$choixCaracteristique = "";
			$choixKeyword = "";
			
			if (!empty($_POST['keywords-input'])){
				$filtre2_actif = true;
				$choixKeyword = $_POST['keywords-input'];
				$requeteSQLFiltre = $requeteSQLFiltre ." WHERE keywords.name LIKE '%". $choixKeyword . "%'";
				$filtreEnPlus = true;
			}
			else{
				if (!empty($_POST['meridien'])){
					$filtre1_actif = true;
					$choixMeridien = $_POST['meridien'];
					$requeteSQLFiltre = $requeteSQLFiltre ." WHERE meridien.code = '". $choixMeridien . "'";
					$filtreEnPlus = true;
				}
				if (!empty($_POST['pathologie'])){
					$filtre1_actif = true;
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
					$filtre1_actif = true;
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
			//Comprendre quel meridien on a choisi pour le filtrage
				if($filtre1_actif){
					$requete_association_meridien = "SELECT code, nom
					FROM meridien";
					$reponsecode = MODEL_SQL_envoi($requete_association_meridien, $dbh);
					$nom_code_meridien = array_combine(
						array_column($reponsecode, 'code'),
						array_column($reponsecode, 'nom'));
					$nom_code_meridien[""] = "";
				}
			}
			
			$requeteSQLFiltre = $requeteSQLFiltre . " ORDER BY name LIMIT 200;";
	//A ce stade la requete est prete a etre envoyée
			$reponseREQ = MODEL_SQL_envoi($requeteSQLFiltre, $dbh);
	//Il faut pouvoir comprendre les données maintenant pour avoir un affichage correct (a partir du patho.type trouver
	//la pathologie et les caracteristiques de la donnée)

			$nb_resp = 0;
			foreach($reponseREQ as $ligne){
				$patho_caracteristiques = $DATA_decodage_code[$ligne->code];
				$ligne->nom_pathologie = $DATA_options_pathologie[$patho_caracteristiques[0]];
				if($patho_caracteristiques[1] != ""){
					$ligne->nom_caracteristique_1 = $DATA_options_caracteristique[$patho_caracteristiques[1]];
					}
				else{
					$ligne->nom_caracteristique_1 = "";
				}
				if($patho_caracteristiques[2] != ""){
					$ligne->nom_caracteristique_2 = $DATA_options_caracteristique[$patho_caracteristiques[2]];
					}
				else{
					$ligne->nom_caracteristique_2 = "";
				}
				$nb_resp++;
			}
			//Envoi des données au template
			view_assign_info_template('options_keywords', $options_keywords, $smarty);
			view_assign_info_template('options_meridien', $options_meridien, $smarty);
			view_assign_info_template('options_pathologie', $DATA_options_pathologie, $smarty);
			view_assign_info_template('options_caracteristique', $DATA_options_caracteristique, $smarty);
			view_assign_info_template('reponseSQL', $reponseREQ, $smarty);
			view_assign_info_template('nb_resp', $nb_resp, $smarty);
			view_assign_info_template('filtre1_actif', $filtre1_actif, $smarty);
			view_assign_info_template('filtre2_actif', $filtre2_actif, $smarty);


			if($filtre1_actif){
				view_assign_info_template('choix_filtre', [$nom_code_meridien[$choixMeridien], $DATA_options_pathologie[$choixPathologie], $choixCaracteristique], $smarty);
			}
			else if ($filtre2_actif){
				view_assign_info_template('choix_filtre', $choixKeyword, $smarty);
			}
			break;		
		
		default:
			break;
	}
	
	//Affichage de la page apres avoir mis en place et envoyé toutes les données
	$smarty->display($maPage . '.tpl');
}	