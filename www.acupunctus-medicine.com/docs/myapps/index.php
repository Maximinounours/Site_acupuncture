<?php



// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$templatesDir = '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates';

$smarty->setTemplateDir($templatesDir);

$smarty->setCompileDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates_c/');
$smarty->setCacheDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/cache/');
$smarty->setConfigDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/configs/');


if (empty($_GET['page'])){
	$smarty->display('accueil.tpl');
}
else{

	$maPage = $_GET['page'];
	if($maPage == 'listeSymptome'){
	
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

		$sql = $dbh->prepare("SELECT 
name,
symptome.desc,
patho.desc,
meridien.nom,
patho.type
FROM keywords
INNER JOIN keysympt ON keysympt.idk = keywords.idk
INNER JOIN symptome ON keysympt.ids = symptome.ids
INNER JOIN symptpatho ON symptpatho.ids = symptome.ids
INNER JOIN patho ON patho.idp = symptpatho.idp
INNER JOIN meridien ON patho.mer = meridien.code
ORDER BY name
LIMIT 20;");
		
		$sql->execute(array());	
		$test = array([["1","2","3","4","5"],["11","22","33","44","55"],["111","222","333","444","555"]]);
		$smarty->assign('reponseSQL', $sql);
	}
	$smarty->display($maPage . '.tpl');
}

