<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).</p>
<h2>Résultat</h2>

<?php


function afficherInput($nomsInput) {
    $result1="<from>";
    foreach ($nomsInput as $input) {
        $result1 .= "<label for='$input'>$input :</label><br>";
        $result1 .= "<input type='text' name='$input' id='$input' required><br>";
    }
    $result1.="</from>";
    return $result1;
}

$nomsInput = array("Nom", "Prénom", "Adresse email","Ville");


$nomsRadio = ["Masculin", "Féminin", "Autre"];

function afficherRadio($nomsRadio){
    $result2="<form>";
    foreach($nomsRadio as $gender){
        $result2.= "<input type='radio' id='$gender' name='gender'/>";
        $result2.= "<label for='$gender'>$gender</label><br>";
    }
    $result2.="</form>";
    return $result2;
}


$elements = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet"); 

function alimenterListeDeroulante($elements){
    $result= "<select name='civil' id='civil-select'>";
                
    foreach($elements as $civil){
        $result.= "<label for='pet-select'>Civilités</label><br>";
        $result.= "<option value='$civil'>$civil</option>";
    }
    $result.= "</select><br><br><input type='submit' value='Envoyer le formulaire'/>";
    return $result;
}
echo afficherInput($nomsInput)."<br>";
echo afficherRadio($nomsRadio)."<br>";
echo alimenterListeDeroulante($elements);

