<?php
/* Smarty version 3.1.39, created on 2021-03-06 17:36:01
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/listeSymptome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6043af71640604_61053518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7e774c7b720b699646a7b8401aad6e2ff12fad6' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/listeSymptome.tpl',
      1 => 1615047754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6043af71640604_61053518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15032077356043af71639565_05116139';
?>
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
 <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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


    <div id="liste_symptomes">

        

    </div>

 <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
