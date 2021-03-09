<?php



// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$templatesDir = '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates';

$smarty->setTemplateDir($templatesDir);

$smarty->setCompileDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates_c/');
$smarty->setCacheDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/cache/');
$smarty->setConfigDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/configs/');

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
		$option_meridien = $PDOrep->fetchAll(PDO::FETCH_OBJ);
		$smarty->assign('option_meridien', $option_meridien);	

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
INNER JOIN meridien ON patho.mer = meridien.code
WHERE meridien.code = '";



		

if (!empty($_POST['meridien'])){
			$choixMeridien = $_POST['meridien'];
			$requeteSQLFiltre = $requeteSQLFiltre . $choixMeridien;
		}

if (!empty($_POST['pathologie'])){
			echo $_POST['pathologie'];
		}
		
if (!empty($_POST['caracteristique'])){
			echo $_POST['caracteristique'];
		}

$requeteSQLFiltre = $requeteSQLFiltre . "' ORDER BY name;";
		
		$PDOrep = $dbh->prepare($requeteSQLFiltre);
		
		$PDOrep->execute(array());	
		
		$reponseREQ = $PDOrep->fetchAll(PDO::FETCH_OBJ);
		$smarty->assign('reponseSQL', $reponseREQ);	

$smarty->display('listeSymptome.tpl');
	

		
		


