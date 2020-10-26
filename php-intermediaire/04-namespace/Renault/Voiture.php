<?php
namespace Renault;
class Voiture{

    public $modele;
    public $prix;
    public $lieuDeContruction;

    public function __toString()
    {
        echo "votre voiture est une renault !";
    }
}

?>