<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.<br>
Exemple :<br><code>
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</code></p>

<h2>Résultat</h2>

<?php

$elements = ["Choix 1"=>"","Choix 2"=>"checked","Choix 3"=>""];

function genererCheckbox($elements){

    foreach($elements as $name => $isChecked){
        echo '<input type="checkbox" id="scales" name="'.$name.'" '.$isChecked.'/>';
        echo '<label for="'.$name.'">'.$name.'</label><br>';
    }
}

genererCheckbox($elements);