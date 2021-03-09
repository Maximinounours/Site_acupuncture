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
		$smarty->assign('options_meridien', $options_meridien);


		//Option filtre pathologie
		$options_pathologie = [
		"mv" => "Merveilleux vaisseaux",
		"tf" => "Zang / Fu",
		"j" => "Jing jin",
		"l" => "Voie luo",
		"m" => "Méridien"
		];
		$smarty->assign('options_pathologie', $options_pathologie);


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
		
//On prend le code du meridien
if (!empty($_POST['meridien'])){
	$choixMeridien = $_POST['meridien'];
	$requeteSQLFiltre = $requeteSQLFiltre ." WHERE meridien.code = '". $choixMeridien . "'";
	$filtreEnPlus = true;
}

//Code de la pathologie qu'il va falloir chercher (LIKE "code%")
if (!empty($_POST['pathologie'])){
	$choixPathologie = $_POST['pathologie'];
	if($filtreEnPlus){
		$requeteSQLFiltre = $requeteSQLFiltre . "AND ";
	}
	else{
		$requeteSQLFiltre = $requeteSQLFiltre . " WHERE ";
	}
	 $requeteSQLFiltre = $requeteSQLFiltre . "patho.type LIKE '". $choixPathologie . "%'";
}
		
//Pareil mais LIKE "%code%" et faut virer le code de la pathologie
//L'ideal reste de faire une nouvelle table avec patho.idp, code pathologie, caracteristiques (jusqu'a 3 et eventuellement vide) mais flemme (pour l'instant)
if (!empty($_POST['caracteristique'])){
			echo $_POST['caracteristique'];
		}

$requeteSQLFiltre = $requeteSQLFiltre . " ORDER BY name;";
		
		$PDOrep = $dbh->prepare($requeteSQLFiltre);
		
		$PDOrep->execute(array());	
		
		$reponseREQ = $PDOrep->fetchAll(PDO::FETCH_OBJ);
		
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
		
		$smarty->assign('reponseSQL', $reponseREQ);	

$smarty->display('listeSymptome.tpl');
	

		
		


