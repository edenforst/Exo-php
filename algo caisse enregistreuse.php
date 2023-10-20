<!-- Le client envoie une liste de billets qui correspond a une somme de valeurs, pour payer un montant défini par le commercant : il peut y avoir la somme exact, moins, ou plus.

Le caisse contient une liste de billets dans un certains nombres pour chaque billet

le client donne donc sa argent en plusieurs valeurs, pour une somme défini.

On parcours le tableau associatif de la caisse, avec la somme qui sera divisé pour savoir quel valeur rendre au bon moment et si elle est en nombres suffisant selon la somme donné.

Le marchand doit donc savoir si le client a donné la bonne somme, si c'est le cas :
Il faut faire un CALCUL de DIFFERENCE entre la somme donné et le montant de l'article.

    - la somme donné est EGAL a la valeur montant article 
        > le marchand ne rend rien
    - La somme donnée est SUPERIEUR a la valeur montant article
        > le marchand doit rendre le surplus : la caisse utilise son contenu avec la quantité de chaque valeur pour savoir combien de chaque billet il doit rendre.
    On créer une boucle qui va s'incrementer et vérifier si la quantité de la valeur est présente pour chaque situation.
    Si la monnaie a rendre est de 15, on va verifier si la somme est égale a une valeur correspondante a celle exprimé, sinon decrémenter, et prendre cette valeur, vérifier la disponibilté de la quantité, et regarder si 15 vaut 2 x 10, si ce n'est pas le cas, rendre qu'un seule quantité,
    et recommencer pour la suite avec 5, on va regarder si 5 est égale a la valeur, et si elle l'est, on rend.
    
    Une fois que le montant a Rendre a atteint 0, on regarde les valeurs qui ont changé d'état initial dans la caisse, avec les opérations final, puis on affiche le tableau des valeurs et quantité rendu.


    - la somme est INFERIEUR a la valeur montant article
        > le marchand dit que la transaction n'est pas possible : IMPOSSIBLE ou "veuillez completez le montant nécessaire".

    Quelque soit le choix de résolution, on ajoute les billets dans la caisse a la fin. -->

<?php

$QtValueCustomer = [
    "200" => 8,
    "100" => 0,
    "20" => 1,
    "0.5" => 1,
    "0.2" => 1,
    "0.01" => 9];
$MoneyCustomer = 0;

$PriceArticle = 38.77;
$MONEYBOX = [
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

$change = [];


Function isPaymentExact($customerPayment, $PriceArticle) {
    return $customerPayment == $PriceArticle;
}

Function SumCustomer($QtValueCustomer, $MoneyCustomer){
    $MoneyCustomer = 0;
    foreach ($QtValueCustomer as $value => $quantity){
        $MoneyCustomer += $value * $quantity;
    }
    return ($MoneyCustomer);
}

Function SumMoneyBox($MONEYBOX, $TotalMoneyBox){
    $TotalMoneyBox = 0;
    foreach ($MONEYBOX as $value => $quantity){
        $TotalMoneyBox += $value * $quantity;
    }
    return ($TotalMoneyBox);
}

Function DifferenceCustomerArticle($QtValueCustomer, $PriceArticle){ //difference entre la somme cliente donné et le prix de l'article
    $MoneyCustomer = 0;
        foreach ($QtValueCustomer as $value => $quantity){
        $MoneyCustomer += $value * $quantity;
        }
        return $MoneyCustomer - $PriceArticle; //renvoie une valeur + - ou =
    } 

Function DistributeChange($MONEYBOX, $surplus){ //permet de rendre le trop percu
    $change = [];

    // Triez le tableau MONEYBOX en ordre décroissant de valeur et clé
        krsort($MONEYBOX);

         // Parcourez le tableau MONEYBOX pour distribuer la monnaie
        foreach ($MONEYBOX as $value => $quantity) {
            while ($surplus >= (float)$value && $quantity > 0) {
                if (isset($change[$value])) {
                    $change[$value]++; // Incrémente la valeur existante.
                } else {
                    $change[$value] = 1; // Initialise à 1 s'il n'existe pas encore.
                }               
                $surplus -= (float)$value;
                $quantity--;
            }
        }
        return $change;
} 

Function DisplayResult($change){ //Affiche un tableau contenant tout ce qui a été rendu en trop percu

    print_r($change);
}

$MoneyCustomer = SumCustomer($QtValueCustomer, $MoneyCustomer);
$customerPayment = DifferenceCustomerArticle($QtValueCustomer, $PriceArticle);

if (isPaymentExact($MoneyCustomer, $PriceArticle)) {
    $resultMessage = "Le compte est bon.";
} elseif ($MoneyCustomer > $PriceArticle) {
    $change = distributeChange($MONEYBOX, $MoneyCustomer - $PriceArticle);
    $resultMessage = "Votre paiement est exédentaire, je vous rends : ".$surplus. print_r($change); // RENVOIE UNIQUEMENT CE QUI EST DANS LA CAISSE
} else {
    $resultMessage = "Veuillez compléter le paiement. Il manque : ".abs($customerPayment)." €";
}

echo $resultMessage;

?>