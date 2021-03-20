<?php
/* Smarty version 3.1.39, created on 2021-03-20 17:12:20
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60561ee4a93223_10139218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba93bdd447996ae0fba3296b3006423f1c4180e7' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/menu.tpl',
      1 => 1616256713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60561ee4a93223_10139218 (Smarty_Internal_Template $_smarty_tpl) {
?>               <!-- Un petit menu avec les pages accessibles pratiques -->
               <div class="menu_simple" class='lignes'>
                <ul>
                    <li>
                        <a href="index.php?page=accueil">
                            <target=_ self></target> Home</a>
                    </li>
                    <li>
                        <a href="index.php?page=contact">
                            <target=_ self></target> About us </a>
                    </li>
                    <li>
                            <a href="index.php?page=info">
                                <target=_ self></target> Information </a>
                    </li>

<?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getIsConnected()) {?>
<li>
            <div id="container_name">
                <p><?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->_nom;?>
 <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->_prenom;?>
</p>
                <form action="index.php" method="POST">
                    <button type="submit" id="btn_deconnexion"><p>Déconnexion</p></button>
                </form>
            </div>
</li>
<?php } else { ?>

                    <li>
                        <a href="index.php?page=connexion">
                            <target=_ self></target> Connexion </a>
                    </li>
<?php }?>

                    <li>
                        <div id="image_logo">
                            <img src="./images/logo.png" alt="logo">
                        </div>
                    </li>

                </ul>   
            </div>
        </div>
<?php }
}
