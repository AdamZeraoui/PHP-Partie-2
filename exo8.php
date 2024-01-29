<h1>Exercice 8</h1>
<p>Soit l’URL suivante :
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
Exemple :<br><code>
repeterImage($url,4);</code>
</p>
<h2>Résultat</h2>

<?php

$url= "http://my.mobirise.com/data/userpic/764.jpg";
// $alphabet = range(1, 100);
// var_dump($alphabet);

function repeterImage($url,$nombre){
   
    foreach (range(1, $nombre) as $nb) {
        echo "<img src='$url'alt='chien'>";
    }

    for($n = 0; $n < $nombre; $n++){     //ici le for est plus indiqué pour crée la boucle ici. J'ai eu du mal à trouver quel boucle été approprier.//
        echo "<img src='$url'alt='chien'>";
    }

    $n = 0;
    while ($n < $nombre) {
        echo "<img src='$url'alt='chien'>";
        $n++;
    }

}
// repeterImage($url,4);