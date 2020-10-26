<?php

/**
 * convention:
 * nom de la classe sera par convention en PascalCase
 * Le nom du fichier sera le meme que le nom de la classe +extension .php
 * 
 */
class Ecran
{
    /**
     * attributs : camelCase en général
     * visibilité(public, protected, private)+ clé static ou pas (si l'attibut est lié a la clasee ou a l'objet) + nom de l'attribut
     
     */
    public $modele;
    public $prix;
    public $estAllume = false;
    public static $nbTotalEcrans = 0;
    // constantes : mot clé const + nom (convention Majuscules, séparateur)

    const FORME = 'rectangle';

    /**
     * méthodes : visibilité +mot clé static ou pas +mot clé function + prarametres +instructions
     */
    public function allumerEteindre()
    {
        // pour accéder aux attribut depuis la classe on va utiliser le mot clé $this
        $this->estAllume = !$this->estAllume;
        echo self::FORME;
    }

    public static function raz()
    {
        self::$nbTotalEcrans = 0;
    }


    //création d'un objet avec paramètres
    public function __construct($modele, $prix)
    {
        $this->modele = $modele;
        $this->prix = $prix;

        self::$nbTotalEcrans++;
    }

    //déstruction d'un objet avant la fin du script
    public function __destruct()
    {
        echo 'mon ecran ' . $this->modele . ' a été détruit';
    }

    // permet de récupere une variable name (ecran->name)
    public function __get($name)
    {
        echo "mon attribut $name n'existe pas";
    }

    // permet de récupere une variable name et la valeur qu'on veux lui 
    //attribuer (ecran->name)
    public function __set($name, $value)
    {
        echo " mon attribut $name n'existe pas on ne peut pas lui attribuer la valeur $value !";
    }

    //permet de choisir les variable a serialized
    public function __sleep()
    {

        return ['modele', 'prix'];
    }

    public function __toString()
    {
        return " cet ecran est un modele ". $this->modele." !";
        }
}
