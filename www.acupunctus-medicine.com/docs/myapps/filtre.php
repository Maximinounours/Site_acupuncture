<?php



// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$templatesDir = '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates';

$smarty->setTemplateDir($templatesDir);

$smarty->setCompileDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates_c/');
$smarty->setCacheDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/cache/');
$smarty->setConfigDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/configs/');

if (!empty($_POST['meridien'])){
			echo $_POST['meridien'];
		}

if (!empty($_POST['pathologie'])){
			echo $_POST['pathologie'];
		}
		
if (!empty($_POST['caracteristique'])){
			echo $_POST['caracteristique'];
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
		
		//WHERE meridien.nom = 'Foie'

		$PDOrep = $dbh->prepare("SELECT 
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
WHERE meridien.nom = 'Estomac'
ORDER BY name
LIMIT 20;");
		
		$PDOrep->execute(array());	
		
		$reponseREQ = $PDOrep->fetchAll(PDO::FETCH_OBJ);
		$smarty->assign('reponseSQL', $reponseREQ);	

$smarty->display('listeSymptome.tpl');
	

		
		


