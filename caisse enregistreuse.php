<?php
//Remplir tableau des valeurs de la monnaie et les associer a ce qui existe dans la caisse
$caisse = [
    "500" => 1,
    "200" => 1,
    "100" => 0,
    "50" => 2,
    "20" => 3,
    "10" => 4,
    "5" => 10,
    "2" => 20,
    "1" => 4,
    "0.5" => 2,
    "0.2" => 20,
    "0.1" => 15,
    "0.05" => 23,
    "0.02" => 14,
    "0.01" => 30];
$estvide = false; // tant que la caisse n'est pas vide
$valeur = 0;
$ARendre = 0; //monnaie que le client donne

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
    "0.50" => 20,
    "0.20" => 25,
     "0.10" => 30,
     "0.05" => 30,
     "0.02" => 30,
     "0.01" => 30];

$mireille = "";

$montantDonne = [ // total 320
    "200" => 1,
    "100" => 1,
    "20" => 1];

foreach ($montantDonne as $valeur => $quantite) {
    $ARendre += $valeur * $quantite;

}

function valueToCash($caisse, &$montantDonne){
    $montantRendu = [];
    arsort($caisse);
    $ARendre = $montantDonne;
    
    
    foreach ($caisse as $valeur => $quantite) { //on parcours le tableau associatif
        $quantite = 0;
        $quantiteARendre = 0;
        if ($ARendre >= (float)$valeur && $quantite > 0) { //Si la monnaie du client est >= valeur et la quantité et tant qu'il en reste
            $quantiteARendre = min($quantite, floor($ARendre / (float)$valeur));
            $caisse[$valeur] -= $quantiteARendre; // valeur et quantité <= a la quantité a rendre
            $ARendre -= $quantiteARendre * (float)$valeur;
            $ARendre = number_format($ARendre, 2); // Arrondir le montant
            $montantRendu[$valeur] = $quantiteARendre; // Stockez les valeurs rendues
        }

    }
    return $montantRendu;
}

$montantRendu = valueToCash($caisse, $ARendre);

// Si la caisse est vide
$estvide = array_sum($caisse) == 0;

// Affichage du résultat
echo "La caisse est vide : " . ($estvide ? "Oui" : "Non") . "\n";
echo "Montant restant à rendre (si caisse vide) : " . number_format($ARendre, 2) . "\n";
print_r($montantRendu);

?>