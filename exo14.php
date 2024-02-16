<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br><br>
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :<br><code>
Peugeot 408 : $v1 = new Voiture("Peugeot","408");
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);</code><br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : <br><code>
echo $v1->getInfos()."br/";<br>
echo $ve1->getInfos()."br/";</code>

<h2>Résultat</h2>

<?php

class Voiture{

    private string $marque;
    private string $modele;

    public function __construct($marque, $modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function setMarque($marque){
        $this->marque=$marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function setModele($modele){
        $this->modele=$modele;
    }

    public function getInfo(){
        return  $this->getMarque()." ".$this-> getModele();
    }

}

class VoitureElec extends Voiture{
    
    private int $autonomie;

    public function __construct($marque, $modele, $autonomie){
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

    public function getCharger(){
        return $this->autonomie;
    }

    public function setCharger($autonomie){
        $this->autonomie = $autonomie;
    }

    public function getInfo(){
        return parent::getInfo()." ".$this->getCharger();
    }

}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);
echo $v1->getInfo()."<br>";
echo $ve1->getinfo()."<br>";