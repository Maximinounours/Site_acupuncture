<?php
/* Smarty version 3.1.39, created on 2021-03-06 17:36:04
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6043af74476361_78979439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '494aeef636663883690a0138f078c84fa7f65e3b' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/connexion.tpl',
      1 => 1615047754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6043af74476361_78979439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1283270786043af74470970_79807797';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/structure.css">
    <link rel="stylesheet" href="./css/connexion.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
   <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Formulaire pour s'enregistrer-->

    <form action="">

        <div id="container">

            <h1>Connexion</h1>

            <hr>

            <label for="email">Adresse mail</label>
            <input type="text" name="email" placeholder="exemple@de.bosh.com">

            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe">

            <button type="submit" id="btn_register">Se connecter</button>

            <hr>

            <div id="register">
            <p>Pas de compte ? <a href="index.php?page=register"> Créer un compte</a></p>
            
          </div>
        </div>

    </form>


	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html>
<?php }
}
