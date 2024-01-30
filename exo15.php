<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.</p>

<h2>Résultat</h2>

<?php

$emailElan = "elan@elan-formation.fr";
$emailInvalide = "contact@elan";

if (filter_var($emailElan, FILTER_VALIDATE_EMAIL)){
    echo
}