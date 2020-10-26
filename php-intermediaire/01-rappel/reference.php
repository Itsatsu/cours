<?php
//en php une variable peut etre soit une valeur, soit une référence

$valeur = 10;

// une référence va être un alias d'une variable, on va utilisé le symbole &
// pour oasser une variable par référence

$reference =&$valeur;

// une copie sera une autre variable de type valeur
$copie = $valeur ;

$valeur = 12;

echo $reference;

echo $copie
?>