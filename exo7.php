<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.<br>
Exemple :<br><code>
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</code></p>

<h2>Résultat</h2>

<?php

$elements = ["Choix 1"=>"","Choix 2"=>"checked","Choix 3"=>"checked"];

function genererCheckbox($elements){
    $result = "<form>";
    foreach($elements as $name => $isChecked){
  
        $result.="<input type='checkbox' id='$name' name='$name' $isChecked/>"; //checkbox permet de crée des cas à cocher //
        $result.="<label for='$name'>$name</label><br>";

    }
    $result.="</form>";
    return $result;
}

echo genererCheckbox($elements);