<?php

// $word1 = $_POST['word1'];
// $word2 = $_POST['word2'];
// $word3 = $_POST['word3'];

$word1 = "a";
$word2 = "c";
$word3 = "b";

$firstwordBeforeSecond = FALSE;
$SecondwordBeforeThird = FALSE;
// $word1beforeWord2 = FALSE;


if($firstwordBeforeSecond == TRUE){
    $SecondwordBeforeThird == $word1beforeWord2($word2, $word3);
    if($SecondwordBeforeThird == TRUE){
    echo ("c'est dans l'ordre !");
    }
    echo ("Ce n'est pas dans l'ordre !");
    
};

$firstwordBeforeSecond = word1beforeWord2($word1, $word2);

function word1beforeWord2(string $word1, string $word2){

$lastIndexShortWord = 0;
$shortestWordLength = shortestwordlenght($word1, $word2);
    $lastIndexShortWord = $shortestWordLength - 1;
$iterateur = 0;
$arequal = TRUE;
$word1avantword2 = TRUE;

while($arequal == TRUE && $iterateur <= $lastIndexShortWord){ //compare l'égalité avec la boucle intérateur qui incrémente selon le dernier caractere
    if($word1[$iterateur] != $word2[$iterateur])
    $arequal = FALSE;
        if($word1[$iterateur] < $word2[$iterateur]){
            $word1avantword2 = TRUE;
        }else{
            $iterateur++;
        };

}
return $word1avantword2;
}



function shortestwordlenght ($word1, $word2){   //compare les 2 premiers mots en calculant leur longueur
    $wordlenght1 = strlen($word1);
    $wordlenght2 = strlen($word2);

    if ($wordlenght1 > $wordlenght2){
        return $wordlenght2;
    }else {
        return $wordlenght1;
    }
}

?>