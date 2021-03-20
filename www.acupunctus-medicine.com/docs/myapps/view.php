<?php

//Envoie des données aux template
function view_assign_info_template($passerelle, $donnees, $smarty){ //$passerelle = nom de la variable dans smarty et $donnee variable dans php
    $smarty->assign($passerelle, $donnees);
}




?>
