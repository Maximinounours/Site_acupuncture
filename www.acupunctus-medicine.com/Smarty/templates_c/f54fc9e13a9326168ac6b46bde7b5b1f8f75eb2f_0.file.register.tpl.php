<?php
/* Smarty version 3.1.39, created on 2021-03-20 16:04:28
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60560efc14c195_74280960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f54fc9e13a9326168ac6b46bde7b5b1f8f75eb2f' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/register.tpl',
      1 => 1616191658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60560efc14c195_74280960 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/structure.css">
    <link rel="stylesheet" href="css/register.css">


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
            <h2>Create an account Acupunctus Medecine</h2>
        </div>
        <div id="pract" class="array">

<?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getIsConnected()) {?>
        <div id="pract" class="array">
            <div id="container">
                <p>Youa re already logged in</p>
                <form action="index.php" method="POST">

                    <button type="submit" id="btn_register"><p>Déconnexion</p></button>
                </form>
            </div>
        </div>

<?php } else { ?>
            <div id="container">
                <form action="index.php?page=register" method="POST">
        
                    <label for="name"><p>First Name</p></label>
                    <input type="text" name="register_firstname" placeholder="First Name" required>
        
                    <label for="firstname"><p>Last Name</p></label>
                    <input type="text" name="register_lastname" placeholder="Last name" required>
        
                    <label for="email"><p>Mail Address</p></label>
                    <input type="text" name="register_email" placeholder="exemple@de.bosh.com" required>
        
                    <label for="password"><p>Password</p></label>
                    <input type="password" name="register_password" placeholder="Password" required>
        
                    <label for="rpt-password"><p>Confirm Password</p></label>
                    <input type="password" name="register_rpt-password" placeholder="Confirm password" required>
                    <?php if ($_smarty_tpl->tpl_vars['passwordNotMatch']->value) {?>
                    <p style="color: rgb(121, 16, 16);">Passwords do not match</p>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['adresseMailUtilisee']->value) {?>
                    <p style="color: rgb(121, 16, 16);">Mail already used</p>
                    <?php }?>
                    <button type="submit" id="btn_register">Register</button>
        
                    <hr>
        
                    <div id="login">
                    <p>Already have an account ? <a href="index.php?page=connexion"> Log in</a></p>
                    </div>
                </form>
            </div>
            <?php }?>
        </div>
    </div>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html>
<?php }
}
