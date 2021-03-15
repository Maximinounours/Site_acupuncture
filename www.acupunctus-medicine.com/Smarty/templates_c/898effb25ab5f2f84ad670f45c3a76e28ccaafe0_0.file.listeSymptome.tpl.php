<?php
/* Smarty version 3.1.39, created on 2021-03-14 16:31:13
  from '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/listeSymptome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604e2c41ec2038_27891954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '898effb25ab5f2f84ad670f45c3a76e28ccaafe0' => 
    array (
      0 => '/var/www/html/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/listeSymptome.tpl',
      1 => 1615735871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_604e2c41ec2038_27891954 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!--Corps de la page-->

    <form action="index.php?page=listeSymptome" method="post">

        <div class="filter">


            <div class="filter_choice">
                <label for="meridien-select">Méridien</label>
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
                <select name="pathologie" id="pathologie-select" onchange="">
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
            <div class="filter_submit">
                <input type="submit" value="Filtrer" >
            </div>
        </div>

    </form>


<?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->getIsConnected()) {?>
    <form action="index.php?page=listeSymptome" method="post">
        <div class="filter">
            <div class="filter_choice">
                <label for="keywords-input">Mot-clé</label>
                <input type="search" id="keywords-input" name="keywords-input" class="form_box" list="keywords"/>
                <datalist id="keywords">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options_keywords']->value, 'valeur');
$_smarty_tpl->tpl_vars['valeur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['valeur']->value) {
$_smarty_tpl->tpl_vars['valeur']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['valeur']->value->name;?>
"></option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </datalist>
            </div>
            <div class="filter_submit">
                <input type="submit" value="Filtrer" onclick="localStorage.clear();">
            </div>

        </div>

    </form>
<?php }?>


    <?php if ($_smarty_tpl->tpl_vars['filtre1_actif']->value) {?><p>Nombre de reponses : <?php echo $_smarty_tpl->tpl_vars['nb_resp']->value;
echo $_smarty_tpl->tpl_vars['choix_filtre']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['choix_filtre']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['choix_filtre']->value[2];?>
</p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['filtre2_actif']->value) {?><p>Nombre de reponses : <?php echo $_smarty_tpl->tpl_vars['nb_resp']->value;?>
 Critere de recherche par mot clé : <?php echo $_smarty_tpl->tpl_vars['choix_filtre']->value;?>
</p><?php }?>




        <div id="pract" class="array">
                <ul class="arrayStern">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reponseSQL']->value, 'itemSQL');
$_smarty_tpl->tpl_vars['itemSQL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemSQL']->value) {
$_smarty_tpl->tpl_vars['itemSQL']->do_else = false;
?>
                    <a href = "">
                    <li class="arrayHeader">
                        <div class="col"id="grid">
                            <div id="title">
                                <h4>Description</h4>
                                <p>
                                    <I><?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->detaildouleur;?>
</I>
                                </p>
                            </div>
                            <div id="text">
                                <h5>Pathologie : </h5>
                                <p><?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->nom_pathologie;?>
</p>
                            </div>
                        </div>
                        <span class="vertical-line"></span>
                        <div class="col" id="grid2" >
                            <div id="title2">
                                <div id="pres">
                                    <img class="presimg" src="<?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->img_pathologie;?>
" alt="Pathologie">
                                    <img class="presimg" src="<?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->img_caracteristique_1;?>
" alt="Caracteristique">
                                    <img class="presimg" src="<?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->img_caracteristique_2;?>
" alt="Caracteristique2">
                                </div>
                            </div>
                            <div id="text2">
                                <h5><I><?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->detailmeridien;?>
</I></h5>
                            </div>
                            <div id="mot-cle">
                                <h5>Key-words</h5>
                                <div id="key"> 
                                    <h5>Mot-clé : <?php echo $_smarty_tpl->tpl_vars['itemSQL']->value->zonedouleur;?>
</h5>
                                </div>
                            </div>
                        </div>
                        
                </li>
                </a>
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
