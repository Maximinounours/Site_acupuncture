<!DOCTYPE html>
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
    {include file = 'menu.tpl'}


    <!--Corps de la page-->

    <form action="filtre.php" method="post">

        <div id="filter">


            <div class="filter_choice">
                <label for="meridien-select">Méridien</label>
                <!--Faire avec smarty apres, prendre les options possbiles avec ce qu'il y a dans la base de données-->
                <select name="meridien" id="meridien-select">
                    <option value="">Choisir un méridien</option>

                    {foreach from=$options_meridien item = meridien}
                        <option value={$meridien->code} >{$meridien->nom}</option>
                    {/foreach}

                </select>
            </div>

            <div class="filter_choice">
                <label for="pathologie-select">Type de pathologie</label>
                <select name="pathologie" id="pathologie-select">
                    <option value="">Choisir une pathologie</option>
                    {foreach from=$options_pathologie key=k item = i}
                        <option value={$k} >{$i}</option>
                    {/foreach}
                </select>
            </div>

            <div class="filter_choice">
                <label for="caracteristique-select">Caractéristique</label>
                <select name="caracteristique" id="caracteristique-select">
                    <option value="">Choisir une caractéristique</option>
                    <option value="cote_gauche_3">Externe</option>
                    <option value="orteil_10">Froid</option>
                </select>
            </div>
            <div id="filter_submit">
                <input type="submit" value="Filtrer" >
            </div>
        </div>

    </form>


            <div id = "container_liste_symptomes">

            {foreach from=$reponseSQL item = itemSQL}

                <a id="container_liste_symptome" href="">
                    <div style="grid-column: 1/4; grid-row: 1;">
                        <p>{$itemSQL->zonedouleur}</p>
                    </div>
                    <div style="grid-column: 1/4; grid-row: 2/4;">
                        <p><I>{$itemSQL->detailmeridien}</I></p>
                    </div>
                    <div style="grid-column: 1/4; grid-row: 4;">
                        <p>Type de pathologie</p>
                    </div>
                    <div style="grid-column: 4/7; grid-row: 1/5;">
                        <p><I>{$itemSQL->detaildouleur}</I></p>
                    </div>
                    <div style="grid-column: 7/9; grid-row: 1;">
                        <p>Méridien : {$itemSQL->nommeridien}</p>
                    </div>
                    <div style="grid-column: 7/9; grid-row: 2;">
                        <p>carac 1</p>
                    </div>
                    <div style="grid-column: 7/9; grid-row: 3;">
                        <p>carac 2</p>
                    </div>
                    <div style="grid-column: 7/9; grid-row: 4;">
                        <p>carac 3</p>
                    </div>
                    <div style="grid-column: 9; grid-row: 1;"><img src="" alt=""></div>
                    <div style="grid-column: 9; grid-row: 2;"><img src="" alt=""></div>
                    <div style="grid-column: 9; grid-row: 3;"><img src="" alt=""></div>
                    <div style="grid-column: 9; grid-row: 4;"><img src="" alt=""></div>
                </a>

            {/foreach}

            </div>

    {include file = 'footer.tpl'}

</body>

</html>
