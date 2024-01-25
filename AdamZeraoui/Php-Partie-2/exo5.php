<h1>Exercice 5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.<br>
Exemple :<br><code>
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);</code></p>

<h2>Résultat</h2>

<?php

function afficherInput($nomsInput) {

    foreach ($nomsInput as $input) {
        echo '<label for="' . $input . '">' . $input . ' :</label><br>';
        echo '<input type="text" name="' . $input . '" id="' . $input . '" required><br>';
    }

}

$nomsInput = array("Nom", "Prénom", "Ville");
afficherInput($nomsInput);

