<h1>Exercice 12</h1>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.<br>
Soit le tableau suivant :<br><code>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));</code><br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<h2>Résultat</h2>

<?php

$tableauValeurs=[true,"texte",10,25.369,array("valeur1","valeur2")];

function trierTableau($tableauValeurs){
    foreach($tableauValeurs as $valeur){ //permet de selectionner que les valeurs est pas les clefs)
        echo var_dump($valeur)."<br>";
    }
    
}
trierTableau($tableauValeurs);