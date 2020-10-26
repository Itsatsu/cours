<?php
require 'compteB.php';

$compte1 = new CompteB(125595);
var_dump($compte1);

$compte1->depot(1000);
$compte1->retrait(50);
var_dump($compte1);
?>