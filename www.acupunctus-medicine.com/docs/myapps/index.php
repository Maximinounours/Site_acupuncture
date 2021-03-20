<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$templatesDir = '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates';
$smarty->setTemplateDir($templatesDir);
$smarty->setCompileDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates_c/');
$smarty->setCacheDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/cache/');
$smarty->setConfigDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/configs/');

//class et autres fonctions utiles
require('classe_Utilisateur.php');
require('fonctions_acupuncture.php');
require('view.php');
require('model.php');
require('data.php');
require('API_REST.php');
session_start();

//Premiere visite du site pour la session en cours
if (empty($_GET['page'])){
  	$_SESSION['utilisateur'] = new Utilisateur();
//Envoi des infos sur l'etat de connexion
  	view_assign_info_template('utilisateur', $_SESSION['utilisateur'], $smarty);
	$maPage = 'accueil';
	$smarty->display($maPage . '.tpl');
}
//Sinon on est en train de naviguer sur le site
else{
//Si on est sur la page depuis trop longtemps et les caches/cookies sont timeout
	if(empty($_SESSION['utilisateur'])){
		$_SESSION['utilisateur'] = new Utilisateur();
	}
//Envoi des infos sur l'etat de connexion
	
	view_assign_info_template('utilisateur', $_SESSION['utilisateur'], $smarty);
	//Check si on est connecté avec utilisateur
//On va utiliser ca pour afficher ou non des elements sur les pages html (dans le menu notamment pour afficher
//le nom et prenom, et dans la liste pour afficher la recherche par mots-clés.
//Aussi ajouter un bouton de deconnexion dans le menu
	$maPage = $_GET['page'];

	switch($maPage){
		case "register":

			$passwordNotMatch=false;
			$adresseMailUtilisee=false;
			//Check si l'on a rempli le formulaire ---> on a utilisé required ok
			
			//Fais tous les traitements
			VIEW_TRAITEMENT_PAGE_REGISTER();

			//Envoi des infos
			view_assign_info_template('passwordNotMatch', $passwordNotMatch, $smarty);
			view_assign_info_template('adresseMailUtilisee', $adresseMailUtilisee, $smarty);			
			break;
			
		case "connexion":
			$wrong_password = false;
			$unknown_email=false;
			//Traitement
			VIEW_TRAITEMENT_PAGE_CONNEXION();

			//Envoie des infos
			view_assign_info_template('wrong_password', $wrong_password, $smarty);
			view_assign_info_template('unknown_email', $unknown_email, $smarty);
			break;
			
		case "listeSymptome":
			$filtre1_actif = false;
			$filtre2_actif = false;
			//Traitement
			VIEW_TRAITEMENT_PAGE_LISTE_SYMPTOME();
			//Envoi des données au template
			VIEW_ASSIGN_PAGE_LISTE_SYMPTOME();
			break;	
				
		
		case "contact":
			break;

		case "info":
			break;
			
		case "pageSymptome":
			VIEW_TRAITEMENT_PAGE_SYMPTOME();
			view_assign_info_template('info_symptome', $info_symptome, $smarty);
			break;
	
		default:
			$maPage = 'accueil';

			break;
	}
	
	//Affichage de la page apres avoir mis en place et envoyé toutes les données
	VIEW_affichage($smarty, $maPage);
}	
