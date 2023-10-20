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
$key = 0;

// $monnayeur = [
//     "500" => 1,
//     "200" => 1,
//     "100" => 2,
//     "50" => 2,
//     "20" => 4,
//     "10" => 4,
//     "5" => 10,
//     "2" => 15,
//     "1" => 20,
//     "0.50" => 20,
//     "0.20" => 25,
//      "0.10" => 30,
//      "0.05" => 30,
//      "0.02" => 30,
//      "0.01" => 30];

$mireille = "";

$montantDonne = [ // total 520.5
    "200" => 2,
    "100" => 1,
    "20" => 1,
    "0.5" => 1];

    foreach ($montantDonne as $key => $val) { //$key est le billet. $val est la quantité de billet
        if ($caisse[$key]) {
            $caisse[$key] += $val;
        } else {
            $caisse[$key] = $val;
        }
    }

        function valueToCash(&$caisse, $montantDonne){
            $montantRendu = [];
            arsort($caisse);

            
            foreach ($caisse as $key => $val) { //on parcours le tableau associatif
                $quantiteARendre = 0;
                if ($montantDonne >= (float)$key && $val > 0) { //Si la monnaie du client est >= valeur et la quantité et tant qu'il en reste
                    $quantiteARendre = min($key, floor($montantDonne / (float)$key));
                    $caisse[$key] -= $quantiteARendre; // valeur et quantité <= a la quantité a rendre
                    $montantDonne -= $quantiteARendre * (float)$key;
                    $montantDonne = number_format($montantDonne, 2); // Arrondir le montant
                    $montantRendu[(float)$key] = $quantiteARendre; // Stockez les valeurs rendues
                }

            }
            return $montantRendu;
        }

        $montantRestant = array_sum($montantDonne);
        $montantRendu = valueToCash($caisse, $montantRestant);
        
        $estvide = array_sum($caisse) == 0;

// Affichage du résultat
echo "La caisse est vide : " . ($estvide ? "Oui" : "Non") . "\n";
echo "Montant restant à rendre (si caisse vide) : " . (float)$montantRestant . "\n";
print_r($montantRendu);

?>