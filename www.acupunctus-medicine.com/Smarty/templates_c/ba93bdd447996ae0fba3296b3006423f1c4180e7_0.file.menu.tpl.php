<?php
/* Smarty version 3.1.39, created on 2021-03-15 08:30:31
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604f0d17972413_93891785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba93bdd447996ae0fba3296b3006423f1c4180e7' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/menu.tpl',
      1 => 1615459774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604f0d17972413_93891785 (Smarty_Internal_Template $_smarty_tpl) {
?>               <!-- Un petit menu avec les pages accessibles pratiques -->
               <div class="menu_simple" class='lignes'>
                <ul>
                    <li>
                        <a href="index.php?page=accueil">
                            <target=_ self></target> Home</a>
                    </li>
                    <li>
                        <a href="index.php?page=connexion">
                            <target=_ self></target> Connexion </a>
                    </li>
                    <li>
                        <a href="index.php?page=contact">
                            <target=_ self></target> About us </a>
                    </li>
                    <li>
                            <a href="index.php?page=info">
                                <target=_ self></target> Information </a>
                    </li>


                    <li style=" background-color: red; width: 100%;">
                    <div id="info_utilisateur" >
                        <p>Nom prénom</p>
                    </div>

                    <div><button>Déconnexion</button></div>
                    </li>


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
