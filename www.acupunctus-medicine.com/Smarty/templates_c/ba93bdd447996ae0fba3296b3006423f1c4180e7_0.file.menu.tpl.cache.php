<?php
/* Smarty version 3.1.39, created on 2021-03-06 17:35:21
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6043af49475311_80084842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba93bdd447996ae0fba3296b3006423f1c4180e7' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/menu.tpl',
      1 => 1615047754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6043af49475311_80084842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4477243116043af49462a91_33123552';
?>
               <!-- Un petit menu avec les pages accessibles pratiques -->
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
                    <li id="menu_search_bar">
                        <input type="text" placeholder="Rechercher" />
                        <div id="menu_icon_search_bar">
                            <img src ="./images/icone_loupe.png" alt="icone de loupe">
                    </li>
                </ul>   
            </div>
        </div>
<?php }
}
