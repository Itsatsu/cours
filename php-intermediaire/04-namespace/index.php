<?php
require 'Peugeot/Voiture.php';
require 'Renault/Voiture.php';


// utilisation du fqcn (full qualified class name)

$v1 = new Peugeot\Voiture();
$v2 = new Renault\Voiture();
echo $v1;
?>
