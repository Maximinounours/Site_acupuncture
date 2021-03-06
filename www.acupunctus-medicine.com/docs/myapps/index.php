<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();


$templatesDir = '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates';

$smarty->setTemplateDir($templatesDir);

$smarty->setCompileDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates_c/');
$smarty->setCacheDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/cache/');
$smarty->setConfigDir('/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/configs/');

$smarty->caching = 1;

if(!($smarty->isCached("accueil.tpl"))){
	$smarty->display('accueil.tpl');
}

else {
	$maPage = $_GET['page'];
	$smarty->display($maPage . '.tpl');
}
