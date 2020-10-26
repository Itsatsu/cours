<?php
    session_start();
 require 'Ecran.php';
// instantuauin d'un objet avec le mot clé new
$ecran1 =new Ecran ('apple 30',150);
$aliasecran1 = $ecran1;
// modification d"une valeur d'attribut pubic
//$ecran1->modele = "Dell 24";
//$ecran1->prix = 150;

//accès à un attribut de class
echo $ecran1->modele;
echo '<br>';


//accès à un attibut de class
echo Ecran::$nbTotalEcrans;
echo '<br>';


//accès a une constante de classe
//echo Ecran::FORME;
echo '<br>';


//utilisation d'une méthode d'instance
$ecran1->allumerEteindre();
echo '<br>';

//appel à la methode static raz
Ecran::raz();
echo Ecran::$nbTotalEcrans;



echo '<br>';
echo '<pre>';
var_dump($ecran1);
echo '</pre>';

//unset($ecran1);
unset($aliasecran1);

echo "<br>";
echo Ecran::$nbTotalEcrans;


echo "<br>";
echo 'une phrase pas ouf';
echo "<br>";

echo $ecran1->marque;
echo "<br>";

$ecran1->noSerie = 100;
echo "<br>";


$serializedEcran1 = serialize($ecran1);

$_SESSION['ecran'] = $serializedEcran1;


echo "<br>";
echo $ecran1;
echo "<br>";
?>