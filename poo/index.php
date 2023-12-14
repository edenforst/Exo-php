<?php

class Human {
    public string $name;
    public string $surname;
    public string $eyesColor;
    public string $hairColor;
    public int $nbLeg;

    public function __construct() {
        $this->name = 'Michelz';
        $this->surname = 'Jean';
        $this->eyesColor = 'Brun';
        $this->hairColor = 'Rouge';
        $this->nbLeg = 2;
    }

}

class Cat {
    public string $eyesColor;
    public string $color;
    public int $nbPaw;
    public string $name;

    public function __construct() {
        $this->eyesColor = 'Jaune';
        $this->color = 'Noir';
        $this->nbPaw = '4';
        $this->name = 'Anaana';
    }
}

$human = new Human();
$Ananaa = new Cat();

echo "humain 1 : ".'<br/>';
echo "Nom : ", $human->name.'<br/>';
echo "Prenom : ", $human->surname.'<br/>';
echo 'Couleurs Yeux', $human->eyesColor.'<br/>';


echo 'cat 1 :'.'<br/>';
echo 'nom :', $Ananaa->name.'<br/>';
echo "Couleurs yeux: ", $Ananaa->eyesColor.'<br/>';
echo "couleur pelage :", $Ananaa->color.'<br/>';


echo 'Nom du chat : ', $Ananaa->name.'<br/>';