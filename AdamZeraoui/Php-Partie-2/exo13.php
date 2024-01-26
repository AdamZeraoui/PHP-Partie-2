<h1>Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes :<code> marque, modèle, nbPortes et
vitesseActuelle </code> ainsi que les méthodes <code>demarrer( ), accelerer( )</code> et <code>stopper( )</code> en plus
des accesseurs (<code>get</code>) et mutateurs (<code>set</code>) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.<br>
v1 ➔ "Peugeot","408",5<br>
v2 ➔ "Citroën","C4",3<br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. <br>
<b>Bonus</b>: ajouter une méthode <code>ralentir(vitesse)</code> dans la classe Voiture.
 </p>

 <h2>Résultat</h2>

 <?php

 class Voiture{
    private $marque;
    private $modele;
    private $nbPorte;
    private $vitesseActuelle;

    public function __construct($marque, $modele, $nbPorte, $vitesseActuelle){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPorte = $nbPorte;
        $this->vitesseActuelle = $vitesseActuelle;
    }

    public function getMarque(){
        return $this->marque;
    }

    public fuctio




 }