<?php
class CompteB{

    public $numeroCompte = 0;
    public $solde = 0;

    public function depot($ajout){
        $this->solde += $ajout;

    }
    
    public function retrait($retrait){

        $this->solde -=$retrait;

    }

    public function __construct($numeroCompte)
    {
        $this->numeroCompte= $numeroCompte;
    
        
    }

}
