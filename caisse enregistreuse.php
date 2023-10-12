<?php
//Remplir tableau des valeurs de la monnaie et les associer a ce qui existe dans la caisse
$caisse = ["500" => 1,"200" => 1,"100" => 0,"50" => 2,"20" => 3,"10" => 4,"5" => 10,"2" => 20,"1" => 4,"0.5" => 2,"0.2" => 20,"0.1" => 15,"0.05" => 23,"0.02" => 14,"0.01" => 30];
$estvide = false;
$Indice = 0;
$ARendre = 50; //valeur que le client donne
$monnayeur = [
    "500" => 1,
    "200" => 1,
    "100" => 2,
    "50" => 2,
    "20" => 4,
    "10" => 4,
    "5" => 10,
    "2" => 15,
    "1" => 20,
    "0,50" => 20,
    "0,20" => 25, 
    "0,10" => 30,
    "0,05" => 30,
    "0,02" => 30,
    "0,01" => 30,
];

while ($ARendre > 0 || !$estvide) { //tant qu'il reste de l'argent dans la caisse
    //si la valeur a rendre est plus élevé que la case actuelle
    //ET que la monnaie n'est pas vide
    if ($ARendre > (int)$caisse[$Indice] && $caisse[$Indice] > 0) {
        //On rend la monnaie inférieur a celle qui est donné, et selon celle qui est disponible
        $ARendre = $ARendre - (int)$caisse[$Indice];

        //on décrémente le compteur de la monnaie
        $caisse[$Indice] = $caisse[$Indice] - 1;

        //Sinon, on rend une monnaie plus petite
    }
        $Indice = $Indice + 1;
    
    // On vérifie que la caisse ne soit pas vide
    $estvide = verifierCaisse($caisse);
};

echo "Voici votre monnaie :";


function verifierCaisse($caisse) {
    //pour chaque case de caisse
    for ($i = 0; $i < count($caisse); $i++) {

        // Si une seule case de caisse n'est pas vide
        if ($caisse[$i] > 0) {

            //On retourne que la caisse n'est pas vide

            return false;
        }
    }
    //Sinon on retourne la valeur que la caisse est vide
    return true;
};

?>