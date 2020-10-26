<?php
namespace Peugeot;


class Voiture{

    public $modele;
    public $prix;
    public $lieuDeContruction;

    public function __toString()
    {
        echo "votre voiture est une peugeot !";
    }
}
?>