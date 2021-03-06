<?php
/* Smarty version 3.1.39, created on 2021-03-06 17:36:01
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/listeSymptome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6043af71663362_55006898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7e774c7b720b699646a7b8401aad6e2ff12fad6' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/listeSymptome.tpl',
      1 => 1615047754,
      2 => 'file',
    ),
    'ba93bdd447996ae0fba3296b3006423f1c4180e7' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/menu.tpl',
      1 => 1615047754,
      2 => 'file',
    ),
    '93f47ecd9a61208a8d6267b47fff612ace099181' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/footer.tpl',
      1 => 1615047754,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_6043af71663362_55006898 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/structure.css">
    <link rel="stylesheet" href="./css/listeSymptome.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
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


    <!--Corps de la page-->

    <form action="">

        <div id="filter">

            <div class="filter_choice">
                <label for="meridien-select">Méridien</label>
                <!--Faire avec smarty apres, prendre les options possbiles avec ce qu'il y a dans la base de données-->
                <select name="meridiens" id="meridien-select">
                    <option value="">Choisir un méridien</option>
                    <option value="Shao_yin">Shao yin</option>
                    <option value="Tai_yang">Tai yang</option>
                </select>
            </div>

            <div class="filter_choice">
                <label for="symptome-select">Zone des symptômes</label>
                <select name="symptomes" id="symptome-select">
                    <option value="">Choisir un symptôme</option>
                    <option value="cote_gauche_3">Troisième cotes gauche</option>
                    <option value="orteil_10">Petit orteil droit</option>
                </select>
            </div>
        </div>

    </form>


    <div id="liste_symptomes">

        

    </div>

         <!--Eventuellement quelquechose tout en bas-->
        <div id="bot_panel">
            <div onclick='location.href="https://www.instagram.com/maximinounours0/";'>
                <img src="./images/icone_insta.png" alt="Page insta">
            </div>
            <div onclick="location.href='https://twitter.com';">
                <img src="./images/icone_twitter.png" alt="Page twitter">
            </div>
            <div onclick="location.href='https://www.facebook.com/';">
                <img src="./images/icone_fb.png" alt="Page facebook">
            </div>

</body>

</html>
<?php }
}
