<h1>Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes :<code> marque, modèle, nbPortess et
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
    private int $nbPortes;
    private float $vitesseActuelle;
    private bool $isDemarree; 

    public function __construct($marque, $modele, $nbPortes){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle =0;
        $this->isDemarree = false;
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

    public function getNbPortes(){
        return $this->nbPortes;
    }
    public function setNbPortes($nbPortes){
        $this->nbPortes = $nbPortes;
    }

    public function getVitesseActuelle(){
        return $this->vitesseActuelle;
    }
    public function setVitesseActuelle($vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
    }

        //méthodes
    
    public function accelerer($vitesseAccelerer){
        if($this->isDemarree){
            $this->vitesseActuelle += $vitesseAccelerer;
            return  "La voiture accélère de ".$this->vitesseActuelle." km/h.";
        }return "La voiture veux accélèrer de ".$vitesseAccelerer." km/h.<br> Pour accélerer, il faut démarrer le véhicule ". $this->marque ." ".$this->modele." !";
    
    }    
    public function ralentir($vitesseRalentir){
        $this->vitesseActuelle -= $vitesseRalentir;
        return $this->vitesseActuelle;
    }

    public function demarrer(){
        if(!$this->isDemarree){
            $this->isDemarree = true;
            return "Le véhicule ". $this->marque ." ".$this->modele." est demarré.";   
        }return "Vous devez Demarrer !!";
    }
    public function stopper(){
        if($this->isDemarree){
            $this->isDemarree = false;
            return "Le véhicule ". $this->marque ." ".$this->modele." est stoppé.";
        }return "<br> ";
    }


    public function __toString()
    {
        return "La vitesse du véhicule ".$this->marque ." ".$this->modele." est de ". $this->vitesseActuelle ." km/h.";
    }

    public function getInfoVoiture(){
        return "<br>******************<br>Nom et modèle du véhicule : ". $this->getMarque()." ".$this->getModele()."<br>Nombre de porte : ".$this->getNbPortes().'<br>'.$this->demarrer().'<br>Sa vitesse actuelle est de : '.$this->getVitesseActuelle(). ' km/h.';
    }
 }

$v1= new Voiture("Peugeot","408",5);
$v2= new Voiture("Citroën","C4",3);

echo $v1->demarrer()."<br>"; $v1->accelerer(50).'<br>';
echo $v2->demarrer().'<br>'. $v2->stopper().'<br>'.$v2->accelerer(20);
echo "<br>".$v1."<br>".$v2;
echo "<br><br><br>Info véhicule 1 ". $v1->getInfoVoiture().'<br><br><br>Info véhicule 2 '. $v2->getInfoVoiture().'<br>';