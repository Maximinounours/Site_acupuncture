<?php

function API_REST_GET($code){
    $code = explode("-", $code);
    $IDK = $code[0];
    $IDS = $code[1];
    $IDP = $code[2];
    $requete = "SELECT
    name AS zoneDouleur,
    symptome.desc as detailDouleur,
    patho.desc AS detailMeridien,
    meridien.nom AS nomMeridien,
    patho.type AS code,
    keywords.idk AS IDK,
    symptome.ids AS IDS,
    symptpatho.idp AS IDP
    FROM keywords
    INNER JOIN keysympt ON keysympt.idk = keywords.idk
    INNER JOIN symptome ON keysympt.ids = symptome.ids
    INNER JOIN symptpatho ON symptpatho.ids = symptome.ids
    INNER JOIN patho ON patho.idp = symptpatho.idp
    INNER JOIN meridien ON patho.mer = meridien.code
    WHERE symptome.ids = '" . $IDS . "' 
    AND patho.idp = '" . $IDP . "' 
    AND keywords.idk = '" . $IDK . "'";
    $dbh = MODEL_connexion_BDD();
    $rep = MODEL_SQL_envoi($requete, $dbh);
    return $rep;
} 

?>