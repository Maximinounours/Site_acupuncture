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



        <!--foreach-->
            <div >
                
                <a id="container_liste_symptome" href="">
                    <div style="grid-column: 1/4; grid-row: 1;">
                        <p>Type de symptôme</p>
                    </div>
                    <div style="grid-column: 1/4; grid-row: 2/4;">
                        <p><I>Detail pathologie</I></p>
                    </div>
                    <div style="grid-column: 1/4; grid-row: 4;">
                        <p>type de pathologie</p>
                    </div>
                    <div style="grid-column: 4/7; grid-row: 1/5;">
                        <p><I>DescriptionDescriptionDescriptionDescription symptome</I></p>
                    </div>
                    <div style="grid-column: 7/9; grid-row: 1;">
                        <p>meridien</p>
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
            </div>
                <!--/foreach-->

    {include file = 'footer.tpl'}

</body>

</html>
