<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeur paramètre ("Masculin", "Féminin", "Autre").<br>
Exemple :<br>
<code>afficherRadio($nomsRadio)
</code></p>

<h2>Résultat</h2>

<?php

$nomsRadio = ["Masculin", "Féminin", "Autre"];

function afficherRadio($nomsRadio){

    foreach($nomsRadio as $gender){
        echo '<input type="radio" id="gender" nom="'.$gender.'" />';
        echo '<label for="'.$gender.'">'.$gender.'</label><br>';
    }
}

afficherRadio($nomsRadio);