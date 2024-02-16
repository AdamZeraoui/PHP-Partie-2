<h1>Exercie 2</h1>
<p>Soit le tableau suivant : <code>$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"]</code><br>
Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays s'affichera en Majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grace à une fonction personnalisée.</p>
<h2>Résultat</h2>

<?php
$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
];

function afficherTableHTML($capitales){
    ksort($capitales);
    $result ="<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                </thead>
                <tbody>";               //On utilise le HTML pour mettre en forme le tableau//
    foreach($capitales as $pays =>$capitale){
        $result.="  <tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                    </tr>";
    }
    $result.="</tbody></table>"; //on ferme la balise après la boucle//

    return $result;
}

echo afficherTableHTML($capitales);