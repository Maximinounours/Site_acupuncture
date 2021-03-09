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
		$options_meridien = $PDOrep->fetchAll(PDO::FETCH_OBJ);
		$smarty->assign('option_meridien', $options_meridien);
		
		$options_pathologie = [
		"j" => "Jing jin",
		"l" => "Voie luo",
		"m" => "Méridien",
		"mv" => "Branche",
		"tf" => "Zang / Fu"
		];
		$smarty->assign('options_pathologie', $options_pathologie);

		

		
		$PDOrep = $dbh->prepare($requeteSQLFiltre);
		
		$PDOrep->execute(array());	
		
		$reponseREQ = $PDOrep->fetchAll(PDO::FETCH_OBJ);
		
		foreach($reponseREQ as $ligne){
			$code = $ligne->
		}
		
		
		$smarty->assign('reponseSQL', $reponseREQ);	

$smarty->display('listeSymptome.tpl');
	

		
		


