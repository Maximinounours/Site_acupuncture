<?php



// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$templatesDir = '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates';

$smarty->setTemplateDir($templatesDir);

$smarty->setCompileDir('/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates_c/');
$smarty->setCacheDir('/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/cache/');
$smarty->setConfigDir('/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/configs/');


if (empty($_GET['page'])){
	$smarty->display('accueil.tpl');
}
else{

	$maPage = $_GET['page'];
	if($maPage == 'listeSymptome'){
		$idp = array([1002,1000],[011,5540],[33015,540]);
		$smarty->assign('idp', $idp);
	}
	
	$smarty->display($maPage . '.tpl');
}

