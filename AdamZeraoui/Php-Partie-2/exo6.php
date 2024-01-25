<h1>Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.<br>
Exemple :<br><code>
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);</code>
</p>
<h2>Résultat</h2>
<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($elements){
    echo '<select name="civil" id="civil-select">';
                
    foreach($elements as $civil){
        echo    '<label for="pet-select">Civilités</label><br>';
        echo    '<option value="'.$civil.'">'.$civil.'</option>';
    }
    echo '</select>';
}

alimenterListeDeroulante($elements);