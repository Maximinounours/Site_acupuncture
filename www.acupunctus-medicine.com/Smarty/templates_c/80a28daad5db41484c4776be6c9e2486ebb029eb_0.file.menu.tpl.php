<?php
/* Smarty version 3.1.39, created on 2021-03-03 17:36:35
  from '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603fbb134fcb15_03984255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80a28daad5db41484c4776be6c9e2486ebb029eb' => 
    array (
      0 => '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates/menu.tpl',
      1 => 1614789312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603fbb134fcb15_03984255 (Smarty_Internal_Template $_smarty_tpl) {
?>               <!-- Un petit menu avec les pages accessibles pratiques -->
               <div class="menu_simple" class='lignes'>
                <ul>
                    <li>
                        <a href="Accueil.html">
                            <target=_ self></target> Home</a>
                    </li>
                    <li>
                        <a href="index.php?page=register">
                            <target=_ self></target> Connexion </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            <target=_ self></target> About us </a>
                    </li>
                    <li>
                            <a href="pageInfo.html">
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
