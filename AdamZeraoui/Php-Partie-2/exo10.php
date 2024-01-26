<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).</p>
<h2>Résultat</h2>

<?php

function afficherInput($nomsInput) {

    foreach ($nomsInput as $input) {
        echo '<label for="' . $input . '">' . $input . ' :</label><br>';
        echo '<input type="text" name="' . $input . '" id="' . $input . '" required><br>';
    }

}

$nomsInput = array("Nom", "Prénom", "Adresse email","Ville");
afficherInput($nomsInput);
echo "<br>";

$nomsRadio = ["Masculin", "Féminin", "Autre"];

function afficherRadio($nomsRadio){

    foreach($nomsRadio as $gender){
        echo '<input type="radio" id="gender" nom="'.$gender.'" />';
        echo '<label for="'.$gender.'">'.$gender.'</label><br>';
    }
}

afficherRadio($nomsRadio);
echo "<br>";


$elements = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet"); 

function alimenterListeDeroulante($elements){
    echo '<select name="civil" id="civil-select">';
                
    foreach($elements as $civil){
        echo    '<label for="pet-select">Civilités</label><br>';
        echo    '<option value="'.$civil.'">'.$civil.'</option>';
    }
    echo '</select><br><br><input type="submit" value="Envoyer le formulaire" />';
}

alimenterListeDeroulante($elements);
echo "<br>";

