<?php
/* Smarty version 3.1.39, created on 2021-03-10 18:41:24
  from '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/listeSymptome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604904c4d4a0f4_19384719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '898effb25ab5f2f84ad670f45c3a76e28ccaafe0' => 
    array (
      0 => '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/listeSymptome.tpl',
      1 => 1615393703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_604904c4d4a0f4_19384719 (Smarty_Internal_Template $_smarty_tpl) {
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

    <form action="index.php?page=listeSymptome" method="post">

        <div id="filter">


            <div class="filter_choice">
                <label for="meridien-select">Méridien</label>
                <!--Faire avec smarty apres, prendre les options possbiles avec ce qu'il y a dans la base de données-->
                <select name="meridien" id="meridien-select">
                    <option value="">Choisir un méridien</option>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options_meridien']->value, 'meridien');
$_smarty_tpl->tpl_vars['meridien']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meridien']->value) {
$_smarty_tpl->tpl_vars['meridien']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['meridien']->value->code;?>
 ><?php echo $_smarty_tpl->tpl_vars['meridien']->value->nom;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </select>
            </div>

            <div class="filter_choice">
                <label for="pathologie-select">Type de pathologie</label>
                <select name="pathologie" id="pathologie-select" on>
                    <option value="">Choisir une pathologie</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options_pathologie']->value, 'i', false, 'k');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>

            <div class="filter_choice">
                <label for="caracteristique-select">Caractéristique</label>
                <select name="caracteristique" id="caracteristique-select">
                    <option value="">Choisir une caractéristique</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options_caracteristique']->value, 'i', false, 'k');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div id="filter_submit">
                <input type="submit" value="Filtrer" >
            </div>
        </div>

    </form>

    <?php if ($_smarty_tpl->tpl_vars['filtre_actif']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['nb_resp']->value;
echo $_smarty_tpl->tpl_vars['choix_filtre']->value[0];
echo $_smarty_tpl->tpl_vars['choix_filtre']->value[1];
echo $_smarty_tpl->tpl_vars['choix_filtre']->value[2];?>
</p><?php }?>


            <div id = "container_liste_symptomes">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reponseSQL']->value, 'itemSQL');
$_smarty_tpl->tpl_vars['itemSQL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemSQL']->value) {
$_smarty_tpl->tpl_vars['itemSQL']->do_else = false;
?>

                <a id="container_liste_symptome" href="">
                    <div style="grid-column: 1/4; grid-row: 1;">
                        <p><?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->zonedouleur;?>
</p>
                    </div>
                    <div style="grid-column: 1/4; grid-row: 2/4;">
                        <p><I><?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->detailmeridien;?>
</I></p>
                    </div>
                    <div style="grid-column: 1/4; grid-row: 4;">
                        <p><?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->nom_pathologie;?>
</p>
                    </div>
                    <div style="grid-column: 4/7; grid-row: 1/5;">
                        <p><I><?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->detaildouleur;?>
</I></p>
                    </div>
                    <div style="grid-column: 7/9; grid-row: 1;">
                        <p>Méridien : <?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->nommeridien;?>
</p>
                    </div>
                    <div style="grid-column: 7/9; grid-row: 2;">
                        <p><?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->nom_caracteristique_1;?>
</p>
                    </div>
                    <div style="grid-column: 7/9; grid-row: 3;">
                        <p><?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->nom_caracteristique_2;?>
</p>
                    </div>
                    <div style="grid-column: 7/9; grid-row: 4;">
                        <p></p>
                    </div>
                    <div style="grid-column: 9; grid-row: 1;"><img src="" alt=""></div>
                    <div style="grid-column: 9; grid-row: 2;"><img src="" alt=""></div>
                    <div style="grid-column: 9; grid-row: 3;"><img src="" alt=""></div>
                    <div style="grid-column: 9; grid-row: 4;"><img src="" alt=""></div>
                </a>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
