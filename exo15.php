<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.</p>

<h2>Résultat</h2>

<?php

$emailElan = "elan@elan-formation.fr";
$emailInvalide = "contact@elan";

function verifier($email){ //j'ai préféré faire une fonction, plutôt que de faire une répétition

    if (filter_var($email, FILTER_VALIDATE_EMAIL)){ //filter_var() permet de filtrer une $variable avec un FILTRE_SPECIFIQUE
        echo "L'adresse « $email » est une adresse e-mail valide.<br>";
    } else {
        echo "L'adresse « $email » est une adresse e-mail invalide.<br>";
    }
}

verifier($emailElan);
verifier($emailInvalide);