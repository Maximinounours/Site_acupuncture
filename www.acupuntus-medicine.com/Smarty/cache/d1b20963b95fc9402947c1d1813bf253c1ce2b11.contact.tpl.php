<?php
/* Smarty version 3.1.39, created on 2021-03-04 21:59:24
  from '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60414a2cd3f4a3_33130380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43908e1026adcc195a997e5ad53ff5d3a9346ef3' => 
    array (
      0 => '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates/contact.tpl',
      1 => 1614891502,
      2 => 'file',
    ),
    '80a28daad5db41484c4776be6c9e2486ebb029eb' => 
    array (
      0 => '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates/menu.tpl',
      1 => 1614891555,
      2 => 'file',
    ),
    '3c57d32423a9aee14bc238d06cb50e24ed1f397c' => 
    array (
      0 => '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates/footer.tpl',
      1 => 1614788986,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_60414a2cd3f4a3_33130380 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Contact</title>
        <link rel="stylesheet" href="./css/css_contact.css">
        <link rel="stylesheet" href="./css/structure.css">
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

        <div id="wrapper">
            <div id="contact"> 
                <h2> Acupunctus Medicine </h2>
                <hr id="style"></hr>
                <br>
                <p>acupunctus.medicine@hotmail.fr</p>
                <p>+33 667570683</p>
                <p> 15 rue Etienne Richerand </p>
                <p>69003 Lyon, France </p>
            </div>
            <div id="pract" class="array">
                <h2> Our practiciens</h2>
                    <ul class="arrayStern">
                        <li class="arrayHeader">
                            <div class="col col-1">Name</div>
                            <div class="col col-2">City</div>
                            <div class="col col-3">Phone Number</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1">Mary Roberts</div>
                        <div class="col col-2">Saint-Helier</div>
                        <div class="col col-3"><a href="tel:+33667570683">+33 667570683</a></div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1">Emma Hope</div>
                        <div class="col col-2">Ponta Delgada</div>
                        <div class="col col-3"><a href="tel:+33667570683">+33 667570683</a></div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1">Justin Gut</div>
                        <div class="col col-2">Kahului</div>
                        <div class="col col-3"><a href="tel:+33667570683">+33 667570683</a></div>
                    </li>
                    </ul> 
            </div>
        </div>
        <div id="touch">
            <h2 id="line1"> We'd love to chat </h2>
            <div id="iconeChat">
                <a href="mailto:acuponctus.medicine@hotmail.fr"><img src="./images/icone_loupe.png" alt="mail"width="20px" height="20px" div="col1"/></a>
                <a href="tel:+33667570683"><img src="./images/icone_loupe.png" alt="phone" width="20px" height="20px" div="col2"/></a>
                <a href="http://www.insta.fr"><img src="./images/icone_insta.png" alt="phone" width="20px" height="20px" div="col3"/></a>
            </div>
            <!-- Je n'arrive pas a les aligner
            <a href="mailto:acuponctus.medicine@hotmail.fr"><img src="../images/icone_loupe.png" alt="mail"width="20px" height="20px" div="col1"/></a>
            <a href="tel:+33667570683"><img src="../images/icone_loupe.png" alt="phone" width="20px" height="20px" div="col2"/></a>
            <a href="http://www.insta.fr"><img src="../images/icone_insta.png" alt="phone" width="20px" height="20px" div="col3"/></a>
       --> </div>
                <!--Map-->
        <div id="sectionMap">
            <iframe id="map" style="border: 0;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.4256003779906!2d4.864751315348368!3d45.76266022149979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea80aadee45b%3A0x6b7a065737cd1549!2s15%20Rue%20Etienne%20Richerand%2C%2069003%20Lyon!5e0!3m2!1sfr!2sfr!4v1614461735580!5m2!1sfr!2sfr" width="1425" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
