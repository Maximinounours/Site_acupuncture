<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/structure.css">
    <link rel="stylesheet" href="./css/pageinfo.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'informations</title>
</head>

<body>

{include file = 'menu.tpl'}

<!--A ajouter au template du menu,
     aussi faire la condition si on est connecté ou pas-->
            <!--
                CSS : structure.css
            -->
            <div id="wrapper">
                <h2>Autor </h2>
                <div id="posimage">
                    <img src="./images/sophie.PNG" alt="sophie">
                    <div class="explication">
                        <p>
                            Sophie Béraud <br>
                            Etudiante à CPE Lyon <br>
                            4ETI<br>
                            Majeur Robotique<br>
                        </p>
                    </div>
                    <img src="./images/maxime.PNG" alt="maxime">
                    <div class="explication">
                        <p>
                            Maxime Leriche <br>
                            Etudiant à CPE Lyon <br>
                            4ETI <br>
                            Majeur Robotique<br>
                        <p>
                    </div>
                </div>
            </div>
            <div id="wrapper2">
                <div id="pic">
                    <div id="t1">
                        <div class="picture">
                            <ul>
                                <li>
                                    <a href="#!"><img src="./images/paysage.jpg" alt="paysage"></a>
                                    <span>
                                        <img src="./images/paysage.jpg" alt="paysage">
                                    </span>
                                </li>
                                <li>
                                    <a href="#!"><img src="./images/paysage3.jpg" alt="paysage"></a>
                                    <span>
                                        <img src="./images/paysage3.jpg" alt="paysage">
                                    </span>
                                </li>
                                <li>
                                    <a href="#!"><img src="./images/paysage2.jpg" alt="paysage"></a>
                                    <span>
                                        <img src="./images/paysage2.JPG" alt="paysage">
                                    </span>
                                </li>
                            </ul>   
                        </div>
                        <div id="prise">
                            <p id="prise">Picture taken by Sophie or found on Pinterest</p>
                        </div>
                    </div>
                </div>
                <div id="pract" class="array">
                    <h2> Our references</h2>
                        <ul class="arrayStern">
                            <li class="arrayHeader">
                                <div class="col col-1">Name</div>
                                <div class="col col-2">URL</div>
                                
                        </li>
                        <li class="table-row">
                            <div class="col col-1">OpenClassroom</div>
                            <div class="col col-2">https://openclassrooms.com/fr/</div>
                            
                        </li>
                        <li class="table-row">
                            <div class="col col-1">Smarty</div>
                            <div class="col col-2">https://www.smarty.net/</div>
                            
                        </li>
                        <li class="table-row">
                            <div class="col col-1">W3Schools</div>
                            <div class="col col-2">https://www.w3schools.com/</div>
                            
                        </li>
                        <li class="table-row">
                            <div class="col col-1">Stackoverflow</div>
                            <div class="col col-2">https://stackoverflow.com/</div>
                        </li>
                        </ul> 
                </div>
            </div>

            
                
<!--fin a ajouter au template du menu-->
            <li>
                <div id="image_logo">
                    <img src="./images/logo.png" alt="logo">
                </div>
            </li>
        </ul>
    </div>


{include file = 'footer.tpl'}
</body>

</html>
