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

    public function __constuct($marque, $modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }
    



}