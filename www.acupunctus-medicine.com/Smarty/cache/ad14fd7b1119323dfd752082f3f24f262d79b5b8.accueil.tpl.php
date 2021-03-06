<?php
/* Smarty version 3.1.39, created on 2021-03-04 22:00:40
  from '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates/accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60414a78e13ce3_45306398',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'a764f46546803e4f8005cb5cd87931c7616d0a1e' => 
    array (
      0 => '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates/accueil.tpl',
      1 => 1614891635,
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
function content_60414a78e13ce3_45306398 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Accueil</title>

        <link rel="stylesheet" href="css/structure.css">
        <link rel="stylesheet" href="css/css_accueil.css">
        
        <?php echo '<?php ';?>
$page=accueil <?php echo '?>';?>

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

        <!--Deux icônes d'accès sur un fond cosy -->

        <div id="tout">

            <div id="gauche" class="container">
                <a id="gauche1" class="noirci" href="index.php?page=register">
                Register</a>
                <a id="gauche2" class="noirci" href="index.php?page=connexion">Login</a>
            </div>
    
            <div id="droite" class="container">
                <a id="droite0" class="noirci" href="index.php?page=listeSymptome">Liste</a>
            </div>
    
        </div>

        <!--Blabla sur l'acupuncture-->
        <div>
            <p>
                L’acupuncture ou acuponcture1 (du latin médical du xviie siècle « acupunctura » formé de acus, « aiguille » et punctura, « piqûre ») est un système thérapeutique dont les origines historiques sont très liées avec la tradition médicale chinoise. L'acupuncture consiste en une stimulation de zones précises de l'épiderme : les « points d’acupuncture ». Les techniques de stimulation des points d’acupuncture sont effectuées avec des moyens divers : des aiguilles le plus souvent, mais aussi d'autres moyens physiques (mécaniques, électriques, magnétiques, thermiques, lumineux) ou physico-chimiques, voire d'autres méthodes alternatives dangereuses (apipuncture, apithérapie avec des piqûres d'abeille)2.
            </p>
            <p>
                L'acupuncture ne s'est pas construite sur le savoir scientifique moderne3 et ses fondements sont considérés comme relevant de la pseudo-science4,5. Cependant, des travaux réalisés depuis les années 1990 par des équipes de chercheurs tendent à montrer une efficacité discutée, avec des mécanismes neuropsychologiques avérés (effet placebo), ou neurophysiologiques6,7,8 réels, indiquant une efficacité notamment dans le traitement de la douleur. Le risque d'iatrogénie existe9, notamment par la transmission d'agents pathogènes si les conditions d'asepsie sont insuffisantes. L'utilisation de l'acupuncture a été critiquée sur le plan éthique lorsqu'elle se fait au détriment de traitements efficaces10.
            </p>
            <p>
                La pratique de l'acupuncture est attestée depuis plusieurs millénaires en Asie (en particulier en Inde, Chine, Corée et Japon), même si son succès a beaucoup fluctué avec le temps. De par ses racines historiques, géographiques et culturelles, de ses conditions d’implantation en Occident, l’acupuncture n'intéresse pas seulement la médecine mais aussi l'anthropologie, l'histoire des sciences, l'épistémologie, la sociologie et ce depuis son introduction en Europe au xviie siècle. L'UNESCO l'a inscrite au patrimoine culturel immatériel de l'humanité le 16 novembre 2010.
            </p>
            
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

        </div>
    </body>
</html>
<?php }
}
