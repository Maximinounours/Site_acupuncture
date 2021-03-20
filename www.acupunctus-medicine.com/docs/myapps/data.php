<?php

//Une table aurait ete utile pour ca mais tant pis
//On peut faire ca par un algo mais ca change un peu
$DATA_decodage_code = [
    "m" => ["m", "", ""],
    "me" => ["m", "e", ""],
    "mi" => ["m", "i", ""],
    "tf" => ["tf", "", ""],
    "tfp" => ["tf", "p", ""],
    "tfv" => ["tf", "v", ""],
    "tfv+" => ["tf", "v", ""],
    "tfv-" => ["tf", "v", ""],
    "tfc" => ["tf", "c", ""],
    "tff" => ["tf", "f", ""],
    "tfvf" => ["tf", "v", "f"],
    "tfvfi" => ["tf", "v", "f"],
    "tfvfm" => ["tf", "v", "f"],
    "tfvfs" => ["tf", "v", "f"],
    "tfpc" => ["tf", "p", "c"],
    "tfpci" => ["tf", "p", "c"],
    "tfpcm" => ["tf", "p", "c"],
    "tfpcs" => ["tf", "p", "c"],
    "j" => ["j", "", ""],
    "l" => ["l", "", ""],
    "l2p" => ["l", "p", ""],
    "l2v" => ["l", "v", ""],
    "lp" => ["l", "p", ""],
    "lv" => ["l", "v", ""],
    "mv" => ["mv", "", ""],
    "mva" => ["mv", "", ""],
    "mvi" => ["mv", "", ""],
    "mvp" => ["mv", "", ""],
    ];

$DATA_options_caracteristique = [
    "e" => "externe",
    "i" => "interne",
    "p" => "plein",
    "v" => "vide",
    "c" => "chaud",
    "f" => "froid",
    ""=>""
    ];
$DATA_options_pathologie = [
    "" => "",
    "mv" => "Merveilleux vaisseaux",
    "tf" => "Zang / Fu",
    "j" => "Jing jin",
    "l" => "Voie luo",
    "m" => "Méridien"
];

$DATA_caract_to_image = [
    "chaud" => "./images/chaud_nb.png",
    "froid" => "./images/froid_nb.png",
    "externe" => "./images/exterior.png",
    "interne" => "./images/interior.png",
    "vide" => "./images/vide.png",
    "plein" => "./images/plein.png",
   	""=>"./images/blank.png"
];

?>
