<?php
/* Smarty version 3.1.39, created on 2021-03-20 23:37:53
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/pageInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60567941e2c633_88796132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '631028e7ab5fa7aaef56c18b3f8937fa0cfd3462' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/pageInfo.tpl',
      1 => 1616279871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60567941e2c633_88796132 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html>
<?php }
}
