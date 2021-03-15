<?php
/* Smarty version 3.1.39, created on 2021-03-11 10:08:40
  from '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/docs/myapps/fonctions_acupuncture.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6049de182b9536_77860991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd808c68b96d12e070a7c1f854213653778020d49' => 
    array (
      0 => '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/docs/myapps/fonctions_acupuncture.php',
      1 => 1615453710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6049de182b9536_77860991 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>
function connexionBDD(){
	//Connexion base de données
	$dsn = 'pgsql:dbname=acudb;host=localhost';
	$user = 'postgres-tli';
	$password = 'tli';
	try{
		$dbh = new PDO($dsn, $user, $password);
	}
	catch (PDOException $e){
		echo 'connexion echouee : ' . $e->getMessage();
	}
	return $dbh;
};

function test(){
echo 'Bonjour';
};

<?php echo '?>';?>

<?php }
}
