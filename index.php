<?php
if (!isset($_GET["page"])) { $page = ""; }else{ $page = $_GET["page"]; } // contrôle de $_GET["page"]
// et assignation d'une valeur à $page include("moteur.php"); // inclusion de moteur.php
echo template($page); // appel à la fonction template() et affichage du résultat
?>
