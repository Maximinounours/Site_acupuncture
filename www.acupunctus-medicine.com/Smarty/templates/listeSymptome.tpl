

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

    <form action="index.php?page=listeSymptome" method="post">

        <div class="filter">


            <div class="filter_choice">
                <label for="meridien-select">Méridien</label>
                <select name="meridien" id="meridien-select">
                    <option value="">Choisir un méridien</option>

                    {foreach from=$options_meridien item = meridien}
                        <option value={$meridien->code} >{$meridien->nom}</option>
                    {/foreach}

                </select>
            </div>

            <div class="filter_choice">
                <label for="pathologie-select">Type de pathologie</label>
                <select name="pathologie" id="pathologie-select" onchange="">
                    <option value="">Choisir une pathologie</option>
                    {foreach from=$options_pathologie key=k item = i}
                    {if $i} != ""}
                        <option value={$k} >{$i}</option>
                        {/if}
                    {/foreach}
                </select>
            </div>

            <div class="filter_choice">
                <label for="caracteristique-select">Caractéristique</label>
                <select name="caracteristique" id="caracteristique-select">
                    <option value="">Choisir une caractéristique</option>
                    {foreach from=$options_caracteristique key=k item = i}
                    {if $i} != ""}
                        <option value={$i} >{$i}</option>
                        {/if}
                    {/foreach}
                </select>
            </div>
            <div class="filter_submit">
                <input type="submit" value="Filtrer" >
            </div>
        </div>

    </form>


{if $utilisateur->getIsConnected()}
    <form action="index.php?page=listeSymptome" method="post">
        <div class="filter">
            <div class="filter_choice">
                <label for="keywords-input">Mot-clé</label>
                <input type="search" id="keywords-input" name="keywords-input" class="form_box" list="keywords"/>
                <datalist id="keywords">
                    {foreach from=$options_keywords item = valeur}
                        <option value="{$valeur->name}"></option>
                    {/foreach}
                </datalist>
            </div>
            <div class="filter_submit">
                <input type="submit" value="Filtrer" onclick="localStorage.clear();">
            </div>

        </div>

    </form>
{/if}

    <div id="filtre_actif">
    {if $filtre1_actif}
        <p>Nombre de reponses : {$nb_resp}</p> <p>Méridien : {$choix_filtre[0]}</p><p>Pathologie : {$choix_filtre[1]}</p><p>Caractéristique : {$choix_filtre[2]}</p>
    {/if}
    {if $filtre2_actif}
    <p>Nombre de reponses : {$nb_resp} </p><p>Critere de recherche par mot clé : {$choix_filtre}</p>
    {/if}
    </div>




        <div id="pract" class="array">
                <ul class="arrayStern">

                    {foreach from=$reponseSQL item = itemSQL}
                    <a href = "">
                    <li class="arrayHeader">
                        <div class="col"id="grid">
                            <div id="title">
                                <h4>Description</h4>
                                <p>
                                    <I>{$itemSQL->detaildouleur}</I>
                                </p>
                            </div>
                            <div id="text">
                                <h5>Pathologie : </h5>
                                <p>{$itemSQL->nom_pathologie}</p>
                            </div>
                        </div>
                        <span class="vertical-line"></span>
                        <div class="col" id="grid2" >
                            <div id="title2">
                                <div id="pres">
                                    <img class="presimg" src="{$itemSQL->img_pathologie}" alt="Pathologie">
                                    <img class="presimg" src="{$itemSQL->img_caracteristique_1}" alt="Caracteristique">
                                    <img class="presimg" src="{$itemSQL->img_caracteristique_2}" alt="Caracteristique2">
                                </div>
                            </div>
                            <div id="text2">
                                <h5><I>{$itemSQL->detailmeridien}</I></h5>
                            </div>
                            <div id="mot-cle">
                                <h5>Key-words</h5>
                                <div id="key"> 
                                    <h5>Mot-clé : {$itemSQL->zonedouleur}</h5>
                                </div>
                            </div>
                        </div>
                        
                </li>
                </a>
                {/foreach}
                </ul>
                </div>


    {include  file = 'footer.tpl'}

</body>

</html>
