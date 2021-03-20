<?php
/* Smarty version 3.1.39, created on 2021-03-20 23:48:01
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/pageSymptome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60567ba177ab20_43179750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '043232459ae132458d49e220150cb00dbcb868c5' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/pageSymptome.tpl',
      1 => 1616280474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60567ba177ab20_43179750 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="./css/structure.css">

<?php $_smarty_tpl->_subTemplateRender('file:menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo $_smarty_tpl->tpl_vars['info_symptome']->value->detaildouleur;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['info_symptome']->value->nom_pathologie;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['info_symptome']->value->detailmeridien;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['info_symptome']->value->zonedouleur;?>
<br>
<?php echo $_smarty_tpl->tpl_vars['info_symptome']->value->lien;?>
<br>
<p>HTML a venir si on a le time</p>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
