<h1>Exercice 11</h1>
<p> Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.<br>
Exemple :<br><code>
formaterDateFr("2018-02-23");</code></p>

<?php



function formaterDateFr($dateFR){
    $date= new DateTime($dateFR);
    $fr = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE); //Ici on utilise la fonction IntlDateFormatter pour indiquer qu'elle information de la date nous voulons. 'fr_FR' permet d'afficher le texte en français. IntlDateFormatter::FULL indique que nous voulons toute les informations de la date et IntlDateFormatter::NONE permet de ne pas afficher l'heure précise qui n'est pas demander//
    return $fr->format($date)."<br>";
}

echo formaterDateFr("2018-02-23");
echo formaterDateFr("now");