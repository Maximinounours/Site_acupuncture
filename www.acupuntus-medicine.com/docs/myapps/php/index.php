

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="structure.css">

    <title>Document</title>
</head>
<body>
<?php include(menu.tpl) ?>


    <?php

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/html/www.exemple.com/Smarty/templates');
$smarty->setCompileDir('/var/www/html/www.exemple.com/Smarty/templates_c');
$smarty->setCacheDir('/var/www/html/www.exemple.com/Smarty/cache');
$smarty->setConfigDir('/var/www/html/www.exemple.com/Smarty/configs');

$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');

?>

</body>
</html>

