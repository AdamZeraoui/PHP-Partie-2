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

        //attribut
    private string $marque;
    private string $modele;
    private int $nbPorte;
    private float $vitesseActuelle;
        //constructeur
    public function __construct($marque, $modele, $nbPorte, $vitesseActuelle){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPorte = $nbPorte;
        $this->vitesseActuelle = $vitesseActuelle;
    }
        //getters & setters
    public function getMarque(){
        return $this->marque;
    }

    public function setMarque($marque){
        $this->marque = $marque;
    }
    
    public function getModele(){
        return $this->modele;
    }

    public function setModele($modele){
        $this->modele = $modele;
    }

    public function getNbPorte(){
        return $this->nbPorte;
    }
    public function setNbPorte($nbPorte){
        $this->nbPorte = $nbPorte;
    }

    public function getVitesseActuelle(){
        return $this->vitesseActuelle;
    }
    public function setVitesseActuelle($vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
    }
        //méthode
    public function demarrer(){
        $vitesseVoiture = $this-> vitesseActuelle;
        if($vitesseVoiture > 0){
            echo "démarrée";
        }
    }
    public function stopper(){
        $vitesseVoiture = $this-> vitesseActuelle;
        if($vitesseVoiture == 0){
            echo "stoppée";
        }
    }
 }