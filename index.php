<?php

$mot1 = $_POST['mot1'];
$mot2 = $_POST['mot2'];
$mot3 = $_POST['mot3'];

$premiermotavant2 = FALSE;
$deuxiememotavant3 = FALSE;
$si1motestavant2 = FALSE;

var_dump($_POST);

if($premiermotavant2 == TRUE){
    $deuxiememotavant3 == $si1motestavant2($mot2, $mot3);
    if($deuxiememotavant3 == TRUE){
    echo ("c'est dans l'ordre !");
    }
    echo ("Ce n'est pas dans l'ordre !");
};

$premiermotavant2 <= $si1motestavant2($mot1, $mot2);

function si1motestavant2(string $mot1, string $mot2){

$longueurMotPlusCourt = 0;
$dernierindexmotcourt = 0;
$sontegaux = false;
$iterateur = 0;
$mot1avantmot2 = false;
$longueurDuMotLePlusCourt = 0;
$longueurMotPlusCourt = 0;

$longueurMotPlusCourt = $longueurDuMotLePlusCourt ($mot1, $mot2);
$dernierindexmotcourt = $longueurMotPlusCourt -1;
$iterateur = 0;
$sontegaux = TRUE;
$mot1avantmot2 = TRUE;

while($sontegaux and $iterateur = $dernierindexmotcourt){
    if($mot1[$iterateur] != $mot2[$iterateur])
    $sontegaux = FALSE;
        if($mot1[$iterateur] > $mot2[$iterateur]){
            $mot1avantmot2 = FALSE;
        }else{
            $iterateur++;
        };

}
return $mot1avantmot2;
}



function longueurDuMotLePlusCourt ($mot1, $mot2){
    $longueurMot1 = strlen($mot1);
    $longueurMot2 = strlen($mot2);

    if ($longueurMot1 > $longueurMot2){
        return $longueurMot2;
    }else {
        return $longueurMot1;
    }
};

?>