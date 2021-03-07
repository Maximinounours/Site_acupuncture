<?php
/* Smarty version 3.1.39, created on 2021-03-07 23:36:05
  from '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/listeSymptome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604555552c0ce3_14638647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '898effb25ab5f2f84ad670f45c3a76e28ccaafe0' => 
    array (
      0 => '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/listeSymptome.tpl',
      1 => 1615156563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_604555552c0ce3_14638647 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
        <ul >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['idp']->value, 'nom');
$_smarty_tpl->tpl_vars['nom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nom']->value) {
$_smarty_tpl->tpl_vars['nom']->do_else = false;
?>
            <li style="color : black;">
                <?php echo $_smarty_tpl->tpl_vars['nom']->value[0];?>

                <?php echo $_smarty_tpl->tpl_vars['nom']->value[1];?>

            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
