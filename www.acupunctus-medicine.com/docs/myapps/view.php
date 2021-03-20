<?php

//Envoie des données aux template
function view_assign_info_template($passerelle, $donnees, $smarty){ //$passerelle = nom de la variable dans smarty et $donnee variable dans php
    $smarty->assign($passerelle, $donnees);
}

function VIEW_affichage($smarty, $page){
    $smarty->display($page . '.tpl');			
}


function VIEW_TRAITEMENT_PAGE_REGISTER($smarty){
    $maPage = 'register';
    $passwordNotMatch=false;
    $adresseMailUtilisee=false;

    //Pour savoir si on arrive sur la page on check une entree du formulaire
    if(!empty($_POST["register_firstname"])){
        //Cas ou on a rempli le formulaire correctement
        if (($_POST["register_password"])==($_POST["register_rpt-password"]) & !empty($_POST["register_rpt-password"])){

            //Prepare l'ajout dans la base de donnee du compte
            $requete = "SELECT * FROM client";
            $reponseUtilisateur = MODEL_SQL_envoi($requete);

            //Check si adresse mail nouvelle ou non
            $Utilisateur_already_known = false;
            foreach($reponseUtilisateur as $value){
                if ($value->mail_address == $_POST["register_email"]){
                    $Utilisateur_already_known = true;
                    break;
                }
            }

            //Si nouvel utilisateur on ajoute dans la base de donnees
            if (!$Utilisateur_already_known){
                $id_en_cours = $value->idp + 1;
                $requeteAjoutUtilisateur = 
                "INSERT INTO public.client(
                    Last_Name, First_Name, Password, Mail_Address, IDP)
                    VALUES ( '" . 
                    $_POST['register_firstname'] . "', '" .  
                    $_POST['register_lastname'] . "', '" .  
                    $_POST['register_password'] . "', '" .  
                    $_POST['register_email'] . "', '" .  
                    $id_en_cours . "');";
                $reponseUtilisateur = MODEL_SQL_envoi($requeteAjoutUtilisateur);

                $_SESSION['utilisateur']->connexion($_POST["register_lastname"], $_POST["register_firstname"], $_POST["register_email"]);
                $maPage = 'accueil';
            }

            //Sinon on indique que l'adresse mail est deja utilisee
            else{
                $adresseMailUtilisee=true;
            }
        }
        else {
            //affiche un message si les mdp ne sont pas les memes
            $passwordNotMatch=true;
        }
    }
    view_assign_info_template('passwordNotMatch', $passwordNotMatch, $smarty);
    view_assign_info_template('adresseMailUtilisee', $adresseMailUtilisee, $smarty);
    return $maPage;	
};


function VIEW_TRAITEMENT_PAGE_CONNEXION($smarty){
    $maPage = 'connexion';
    $wrong_password = false;
    $unknown_email=false;
    //Sinon check le contenu du formulaire
    
    //Requete SQL pour savoir si l'utilisateur est connu et si la connexion est acceptée
    if(!empty($_POST["login_email"])){

        //Recup les utilisateurs de la base de donnee
        $requete = "SELECT * FROM client WHERE Mail_Address = '" . $_POST["login_email"] . "'";
        $reponseUtilisateur = MODEL_SQL_envoi($requete);

        //Utilisateur inconnu
        if(empty($reponseUtilisateur)){
            $unknown_email=true;
            // Il faut envoyer toutes les variables que le template va utiliser
        }
        //Check si le mdp match
        else{
        $reponseUtilisateur = $reponseUtilisateur[0];
            if($_POST["login_password"] == $reponseUtilisateur->password){
                $_SESSION['utilisateur']->connexion($reponseUtilisateur->last_name, $reponseUtilisateur->first_name, $reponseUtilisateur->mail_address);
                $maPage = 'accueil';
            }
            else{
                $wrong_password = true;
            }
        }	
    }
    //Envoie des infos
    view_assign_info_template('wrong_password', $wrong_password, $smarty);
    view_assign_info_template('unknown_email', $unknown_email, $smarty);
    return $maPage;
};


function VIEW_TRAITEMENT_PAGE_LISTE_SYMPTOME($smarty){
    require('data.php');
    $maPage = 'listeSymptome';
    $filtre1_actif = false;
    $filtre2_actif = false;
    //Options filtre meridien
    $filtre_meridien_SQL = "SELECT 
        nom,
        code
        FROM meridien
        ORDER BY nom";
    $options_meridien = MODEL_SQL_envoi($filtre_meridien_SQL);
    //Options caracteristiques pour les utilsiateurs connectes
    $filtre_keyword_SQL = "SELECT *
        FROM keywords
        ORDER BY name";
    $options_keywords = MODEL_SQL_envoi($filtre_keyword_SQL);
    //Requete en fonction du filtre
    $requeteSQLFiltre = "SELECT
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
    INNER JOIN meridien ON patho.mer = meridien.code";
    $filtreEnPlus = false;
    //Check les options de filtre et prepare la requete en consequence

    $choixMeridien = "";
    $choixPathologie = "";
    $choixCaracteristique = "";
    $choixKeyword = "";
    
    if (!empty($_POST['keywords-input'])){
        $filtre2_actif = true;
        $choixKeyword = $_POST['keywords-input'];
        $requeteSQLFiltre = $requeteSQLFiltre ." WHERE keywords.name LIKE '%". $choixKeyword . "%'";
        $filtreEnPlus = true;
    }
    else{
        if (!empty($_POST['meridien'])){
            $filtre1_actif = true;
            $choixMeridien = $_POST['meridien'];
            $requeteSQLFiltre = $requeteSQLFiltre ." WHERE meridien.code = '". $choixMeridien . "'";
            $filtreEnPlus = true;
        }
        if (!empty($_POST['pathologie'])){
            $filtre1_actif = true;
            $choixPathologie = $_POST['pathologie'];
            if($filtreEnPlus){
                $requeteSQLFiltre = $requeteSQLFiltre . "AND ";
            }
            else{
                $filtreEnPlus = true;
                $requeteSQLFiltre = $requeteSQLFiltre . " WHERE ";
            }
            $requeteSQLFiltre = $requeteSQLFiltre . "patho.type LIKE '". $choixPathologie . "%'";
        //Necessaire de part la structure de la base de donnée
            if($choixPathologie == "m"){
                $requeteSQLFiltre = $requeteSQLFiltre . "AND patho.type NOT LIKE 'mv%'";
            }
        }
        if (!empty($_POST['caracteristique'])){
        //Formulaire renvoie la chaine de caractere, pas le  code (parce que sinon on peut pas distinguer tff de tfc entre autre...)
            $filtre1_actif = true;
            $choixCaracteristique = $_POST['caracteristique'];
            if($filtreEnPlus){
                $requeteSQLFiltre = $requeteSQLFiltre . "AND ";
            }
            else{
                $requeteSQLFiltre = $requeteSQLFiltre . " WHERE ";
            }
            $requeteSQLFiltre = $requeteSQLFiltre . "patho.desc LIKE '%". $choixCaracteristique . "%'";
            //a terme avoir les choix dynamique en fonction de la pathologie selectionnée
        }
    //Comprendre quel meridien on a choisi pour le filtrage
        if($filtre1_actif){
            $requete_association_meridien = "SELECT code, nom
            FROM meridien";
            $reponsecode = MODEL_SQL_envoi($requete_association_meridien);
            $nom_code_meridien = array_combine(
                array_column($reponsecode, 'code'),
                array_column($reponsecode, 'nom'));
            $nom_code_meridien[""] = "";
        }
    }
    
    $requeteSQLFiltre = $requeteSQLFiltre . " ORDER BY name LIMIT 200;";
    //A ce stade la requete est prete a etre envoyée
    $reponseREQ = MODEL_SQL_envoi($requeteSQLFiltre);
    //Il faut pouvoir comprendre les données maintenant pour avoir un affichage correct (a partir du patho.type trouver
    //la pathologie et les caracteristiques de la donnée)

    $nb_resp = 0;
    foreach($reponseREQ as $ligne){
        $ligne = traitement_rep_SQL($ligne);
        $nb_resp++;
    }
    //Envoi des données au template
    view_assign_info_template('options_keywords', $options_keywords, $smarty);
    view_assign_info_template('options_meridien', $options_meridien, $smarty);
    view_assign_info_template('options_pathologie', $DATA_options_pathologie, $smarty);
    view_assign_info_template('options_caracteristique', $DATA_options_caracteristique, $smarty);
    view_assign_info_template('reponseSQL', $reponseREQ, $smarty);
    view_assign_info_template('nb_resp', $nb_resp, $smarty);
    view_assign_info_template('filtre1_actif', $filtre1_actif, $smarty);
    view_assign_info_template('filtre2_actif', $filtre2_actif, $smarty);

    if($filtre1_actif){
        view_assign_info_template('choix_filtre', [$nom_code_meridien[$choixMeridien], $DATA_options_pathologie[$choixPathologie], $choixCaracteristique], $smarty);
    }
    else if ($filtre2_actif){
        view_assign_info_template('choix_filtre', $choixKeyword, $smarty);
    }
    return $maPage;
};



function VIEW_TRAITEMENT_PAGE_SYMPTOME($smarty){
    $maPage = 'pageSymptome';
    $code_sympt = $_GET['code_sympt'];
    $reponse = API_REST_GET($code_sympt);
    $info_symptome = traitement_rep_SQL($reponse[0]);

    view_assign_info_template('info_symptome', $info_symptome, $smarty);
    return $maPage;
}

?>
