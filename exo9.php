<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeur paramètre ("Masculin", "Féminin", "Autre").<br>
Exemple :<br>
<code>afficherRadio($nomsRadio)
</code></p>

<h2>Résultat</h2>

<?php

$nomsRadio = ["Masculin", "Féminin", "Autre"];

function afficherRadio($nomsRadio){
    $result= "<form>";
    foreach($nomsRadio as $gender){
        $result.= "<input type='radio' id='$gender' name='gender'/>";
        $result.= "<label for='$gender'>$gender</label><br>";
    }
    $result.= "</form>";
    return $result;
}

echo afficherRadio($nomsRadio);