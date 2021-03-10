
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Accueil</title>

        <link rel="stylesheet" href="css/structure.css">
        <link rel="stylesheet" href="css/css_accueil.css">
        
    </head>

    
    <body>
{include file="menu.tpl"}

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
        
        {include file="footer.tpl"}

        </div>
    </body>
</html>
