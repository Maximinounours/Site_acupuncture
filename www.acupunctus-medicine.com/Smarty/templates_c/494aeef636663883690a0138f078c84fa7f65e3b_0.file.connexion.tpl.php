<?php
/* Smarty version 3.1.39, created on 2021-03-20 23:28:53
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60567725acfe34_65832591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '494aeef636663883690a0138f078c84fa7f65e3b' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/connexion.tpl',
      1 => 1616256184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60567725acfe34_65832591 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/structure.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Formulaire pour s'enregistrer-->
    <div id="wrapper">
        <div id="contact"> 
            <h2> Connexion </h2>
            
        </div>
        <div id="pract" class="array">


<?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getIsConnected()) {?>
        <div id="pract" class="array">
            <div id="container">
                <p>You are already logged in</p>
                <form action="index.php" method="POST">

                    <button type="submit" id="btn_register"><p>Déconnexion</p></button>
                </form>
            </div>
        </div>
<?php } else { ?>
            <div id="container">
                <form action="index.php?page=connexion" method="POST">
                    <label for="email"><p>Mail address</p></label>
                    <input type="text" name="login_email" placeholder="exemple@de.bosh.com">
            
                    <label for="password"><p>Password</p></label>
                    <input type="password" name="login_password" placeholder="Password">

                    <?php if ($_smarty_tpl->tpl_vars['wrong_password']->value) {?>
                    <p style="color: rgb(121, 16, 16);">Invalid password</p>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['unknown_email']->value) {?>
                    <p style="color: rgb(121, 16, 16);">Unknown mail</p>
                    <?php }?>
            
                    <button type="submit" id="btn_register"><p>Log in</p></button>
            
                    <hr>

            
                    <div id="login">
                        <p>No account ? <a href="index.php?page=register"> Register</a></p> 
                    </div>
                </form>
<?php }?>
            </div>
        </div>
    </div>
       

	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
