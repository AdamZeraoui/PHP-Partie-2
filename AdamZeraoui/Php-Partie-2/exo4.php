<h1>Exercice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :<code>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</code><p>

<h2>Résultat</h2>

<?php

$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
];

function afficherTableHTML($capitales){
    ksort($capitales);
    $result ="<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                        <th>Lien Wiki</th>
                    </tr>
                </thead>
                <tbody>";
    foreach($capitales as $pays =>$capitale){
        $liens ="https://fr.wikipedia.org/wiki/".$capitale; //On rajoute les liens dans le tableau, suivi de la variable capitale pour compléter le lien//
        $result.="  <tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                        <td><a href='". $liens."'target='_blank'>Lien</a> 
                    </tr>";
    }
    $result.="</tbody></table>";

    return $result;
}

echo afficherTableHTML($capitales);