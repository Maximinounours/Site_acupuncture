<?php

//Envoie des données aux template
function view_assign_info_template($passerelle, $donnees, $smarty){
    $smarty->assign($passerelle, $donnees);
}




?>