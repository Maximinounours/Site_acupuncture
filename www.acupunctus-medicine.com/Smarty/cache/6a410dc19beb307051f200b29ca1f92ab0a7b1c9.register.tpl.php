<?php
/* Smarty version 3.1.39, created on 2021-03-04 21:59:22
  from '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60414a2a1c9924_86655076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92a3379a7db475af31822164cc91456f43c785c7' => 
    array (
      0 => '/var/www/html/Site_acupuncture/www.acupuntus-medicine.com/Smarty/templates/register.tpl',
      1 => 1614891188,
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
function content_60414a2a1c9924_86655076 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
