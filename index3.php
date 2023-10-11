<?php

$word1 = "aaaa";
$word2 = "cccc";
$word3 = "cccccc";

$firstwordBeforeSecond = FALSE;
$SecondwordBeforeThird = FALSE;

// Vous n'avez pas besoin de ces commentaires pour les valeurs initiales des variables.

if ($firstwordBeforeSecond == TRUE) {
    // Vous utilisez $SecondwordBeforeThird à gauche, cela doit être une simple affectation avec un seul signe égal.
    $SecondwordBeforeThird = word1BeforeWord2($word2, $word3);
    
    if ($SecondwordBeforeThird == TRUE) {
        echo ("C'est dans l'ordre !");
    } else {
        echo ("Ce n'est pas dans l'ordre !");
    }
}

// Vous n'avez pas besoin de cette ligne vide.

$firstwordBeforeSecond = word1BeforeWord2($word1, $word2);

function word1BeforeWord2(string $word1, string $word2) {
    // Vous devez initialiser $shortwordlenght en utilisant la fonction shortestwordlenght.
    $shortestWordLength = shortestwordlenght($word1, $word2);
    $lastIndexShortWord = $shortestWordLength - 1;
    $iterator = 0;
    $areEqual = TRUE;
    $word1BeforeWord2 = TRUE;

    while ($areEqual == TRUE && $iterator <= $lastIndexShortWord) {
        if ($word1[$iterator] != $word2[$iterator]) {
            $areEqual = FALSE;
        } elseif ($word1[$iterator] > $word2[$iterator]) {
            $word1BeforeWord2 = FALSE;
        }

        $iterator++;
    }

    return $word1BeforeWord2;
}

function shortestwordlenght($word1, $word2) {
    $wordLength1 = strlen($word1);
    $wordLength2 = strlen($word2);

    if ($wordLength1 < $wordLength2) {
        return $wordLength1;
    } else {
        return $wordLength2;
    }
}
?>
