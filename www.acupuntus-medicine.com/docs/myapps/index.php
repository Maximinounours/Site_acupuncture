<?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();


$templatesDir = '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates';

$smarty->setTemplateDir($templatesDir);

$smarty->setCompileDir('/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates_c/');
$smarty->setCacheDir('/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/cache/');
$smarty->setConfigDir('/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/configs/');

$maPage = $_GET['page'];
echo $maPage;

$smarty->display('accueil.tpl');

$smarty->display($maPage . '.tpl');
