<<<<<<< HEAD
<?php
function template($page) {
// on s'occupe du skin
$skin = "skin.html"; // chemin du fichier
$ouvrir = fopen ($skin, "rb"); // ouverture du fichier
$affichage = fread ($ouvrir, filesize ($skin)); // lecture du fichier et stockage du skin dans une 
// variable
fclose ($ouvrir); // fermeture du fichier 
// on s'occupe du contenu
switch ($page) { // contrôle du contenu demandé par la page
case "presentation": $include = "presentation.inc"; break;
case "catalogue": $include = "catalogue.inc"; break;
case "contact": $include = "contact.inc"; break; 
default: $include = "accueil.inc";
}
$ouvrir = fopen ($include, "rb"); // ouverture du fichier
$contenu = fread ($ouvrir, filesize ($include)); // lecture du fichier et stockage du contenu dans une 
  // variable
fclose ($ouvrir); // fermeture du fichier 
// détermination de la date du jour au format JJ/MM/AA
$date = date("j/n/y"); 
// expression régulière pour le remplacement des variables
$affichage = ereg_replace("\[CONTENU\]", $contenu, $affichage); // remplacement de [CONTENU]
                                                                                               // par le contenu demandé par         la page
$affichage = ereg_replace("\[DATE\]", $date, $affichage); // remplacement de [DATE] par la date du
                                                                                    // jour 
// on retourne le code à afficher
return $affichage;
}
?>
=======
>>>>>>> 04c42d2f2ac5e519a9c44c05469c436cdb12c021
