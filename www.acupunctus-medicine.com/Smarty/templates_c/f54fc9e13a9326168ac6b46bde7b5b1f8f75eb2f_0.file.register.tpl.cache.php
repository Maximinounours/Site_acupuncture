<?php
/* Smarty version 3.1.39, created on 2021-03-06 17:36:06
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6043af767daab0_57584921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f54fc9e13a9326168ac6b46bde7b5b1f8f75eb2f' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/register.tpl',
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
function content_6043af767daab0_57584921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10954312426043af767d55c9_48217876';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/structure.css">
    <link rel="stylesheet" href="./css/register.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Formulaire pour s'enregistrer-->

    <form action="">

        <div id="container">

            <h1>Créer un compte ACUPUNCTURA</h1>

            <hr>

            <label for="name">Prénom</label>
            <input type="text" name="name" placeholder="Prénom">

            <label for="firstname">Nom</label>
            <input type="text" name="firstname" placeholder="Nom">

            <label for="email">Adresse mail</label>
            <input type="text" name="email" placeholder="exemple@de.bosh.com">

            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe">

            <label for="rpt-password">Confirmer le mot de passe</label>
            <input type="password" name="rpt-password" placeholder="Répeter le mot de passe">

            <button type="submit" id="btn_register">Créer un compte</button>

            <hr>

            <div id="login">
            <p>Vous avez déjà un compte ? <a href="index.php?page=connexion"> Se connecter</a></p>

          </div>
        </div>
        
    </form>

	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html>
<?php }
}
