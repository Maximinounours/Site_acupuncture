<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Accueil</title>

        <link rel="stylesheet" href="structure.css">
        <link rel="stylesheet" href="css_accueil.css">
    </head>

    
    <body>
        <!-- MENU 
        <nav class="menu_top">
            <div><a href="page_menu.html" class="menu_tab page_active">Accueil</a></div>
            <div><a href="page_contact.html" class="menu_tab">Contact</a></div>
            <div class="menu_tab_filler"></div>
            <div><a id="menuConnexion" href="page_connexion.html" class="menu_tab menu_tab_droite">Connexion</a></div>
            <div><a href="page_panier.html" class="menu_tab menu_tab_droite">Panier</a></div>
        </nav>
    -->

        <!--Menu en haut-->


               <!-- Un petit menu avec les pages accessibles pratiques -->
               <div class="menu_simple" class='lignes'>
                <ul>
                    <li>
                        <a href="Accueil.html">
                            <target=_ self></target> Home</a>
                    </li>
                    <li>
                        <a href="connexion.html">
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
                        <input type="text" value="Rechercher" onfocus="if(this.value=='Rechercher'){this.value='';}" onblur="if(this.value==''){this.value='Rechercher';}" />
                        <div id="menu_icon_search_bar">
                            <img src ="images/icone_loupe.png" alt="icone de loupe">
                    </li>
                </ul>   
            </div>
        </div>
        <?php echo "ezr"; ?>

        <!--Deux icônes d'accès sur un fond cosy -->
        <div id="contain_icones">
        <!--Connexion avec signIn et SingUp -->
            <div id="icone_connexion" class="icone_menu couleur_c0cfb2">
                <div id="icone_sign"  onclick="location.href='./connexion.html';" style="cursor: pointer;">
                    <div id="signIn" class="noircissement">
                        Sign in 
                    </div>
                </div>
                <div id="icone_sign"  onclick="location.href='./connexionSup.html';" style="cursor: pointer;">
                    <div id="signUp"class="noircissement">
                        Sign up
                    </div>
                </div>
            </div>

            <div id="icone_liste" class="icone_menu" onclick="location.href='./listeSymptome.html';" style="cursor: pointer;">
                <div>
                    Symptoms list
                </div>
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

