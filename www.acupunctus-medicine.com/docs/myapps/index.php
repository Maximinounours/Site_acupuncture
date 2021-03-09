<?php



// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$templatesDir = '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates';

$smarty->setTemplateDir($templatesDir);

$smarty->setCompileDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates_c/');
$smarty->setCacheDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/cache/');
$smarty->setConfigDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/configs/');

$cherche = "/Bonjour/";
$remplace = "";
$chaine = "Bonjour Maxime";
$chaine2 = preg_replace($cherche, $remplace, $chaine, 1);
echo $chaine;
echo $chaine2;

if (empty($_GET['page'])){
	$smarty->display('accueil.tpl');
}
else{

	$maPage = $_GET['page'];
	if($maPage == 'listeSymptome'){
		
		$options_pathologie = [
		"j" => "Jing jin",
		"l" => "Voie luo",
		"m" => "Méridien",
		"mv" => "Branche",
		"tf" => "Zang / Fu"
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

