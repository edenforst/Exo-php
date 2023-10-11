<?php

$word1 = "a";
$word2 = "y";
$word3 = "x";

$firstWordBeforeSecond = word1BeforeWord2($word1, $word2);
$secondWordBeforeThird = word1BeforeWord2($word2, $word3);

if ($firstWordBeforeSecond && $secondWordBeforeThird) {
    echo "C'est dans l'ordre !";
} else {
    echo "Ce n'est pas dans l'ordre !";
}

function word1BeforeWord2(string $word1, string $word2) {
    return strcmp($word1, $word2) < 0;
}
?>