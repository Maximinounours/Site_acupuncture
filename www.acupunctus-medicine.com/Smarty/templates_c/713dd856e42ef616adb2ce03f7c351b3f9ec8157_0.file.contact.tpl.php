<?php
/* Smarty version 3.1.39, created on 2021-03-10 17:22:29
  from '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6048f24562dac9_04095129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '713dd856e42ef616adb2ce03f7c351b3f9ec8157' => 
    array (
      0 => '/var/www/html/Site_acupuncture/Site_acupuncture/www.acupunctus-medicine.com/Smarty/templates/contact.tpl',
      1 => 1615276442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6048f24562dac9_04095129 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Contact</title>
        <link rel="stylesheet" href="./css/css_contact.css">
        <link rel="stylesheet" href="./css/structure.css">
    </head>
    
    <body>
    
       <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="wrapper">
            <div id="contact"> 
                <h2> Acupunctus Medicine </h2>
                <hr id="style"></hr>
                <br>
                <p>acupunctus.medicine@hotmail.fr</p>
                <p>+33 667570683</p>
                <p> 15 rue Etienne Richerand </p>
                <p>69003 Lyon, France </p>
            </div>
            <div id="pract" class="array">
                <h2> Our practiciens</h2>
                    <ul class="arrayStern">
                        <li class="arrayHeader">
                            <div class="col col-1">Name</div>
                            <div class="col col-2">City</div>
                            <div class="col col-3">Phone Number</div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1">Mary Roberts</div>
                        <div class="col col-2">Saint-Helier</div>
                        <div class="col col-3"><a href="tel:+33667570683">+33 667570683</a></div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1">Emma Hope</div>
                        <div class="col col-2">Ponta Delgada</div>
                        <div class="col col-3"><a href="tel:+33667570683">+33 667570683</a></div>
                    </li>
                    <li class="table-row">
                        <div class="col col-1">Justin Gut</div>
                        <div class="col col-2">Kahului</div>
                        <div class="col col-3"><a href="tel:+33667570683">+33 667570683</a></div>
                    </li>
                    </ul> 
            </div>
        </div>
        <div id="touch">
            <h2 id="line1"> We'd love to chat </h2>
            <div id="iconeChat">
                <a href="mailto:acuponctus.medicine@hotmail.fr"><img src="./images/icone_loupe.png" alt="mail"width="20px" height="20px" div="col1"/></a>
                <a href="tel:+33667570683"><img src="./images/icone_loupe.png" alt="phone" width="20px" height="20px" div="col2"/></a>
                <a href="http://www.insta.fr"><img src="./images/icone_insta.png" alt="phone" width="20px" height="20px" div="col3"/></a>
            </div>
            <!-- Je n'arrive pas a les aligner
            <a href="mailto:acuponctus.medicine@hotmail.fr"><img src="../images/icone_loupe.png" alt="mail"width="20px" height="20px" div="col1"/></a>
            <a href="tel:+33667570683"><img src="../images/icone_loupe.png" alt="phone" width="20px" height="20px" div="col2"/></a>
            <a href="http://www.insta.fr"><img src="../images/icone_insta.png" alt="phone" width="20px" height="20px" div="col3"/></a>
       --> </div>
                <!--Map-->
        <div id="sectionMap">
            <iframe id="map" style="border: 0;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.4256003779906!2d4.864751315348368!3d45.76266022149979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea80aadee45b%3A0x6b7a065737cd1549!2s15%20Rue%20Etienne%20Richerand%2C%2069003%20Lyon!5e0!3m2!1sfr!2sfr!4v1614461735580!5m2!1sfr!2sfr" width="1425" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>    
           <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html>
<?php }
}
