<h1>Exercice 8</h1>
<p>Soit l’URL suivante :
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
Exemple :<br><code>
repeterImage($url,4);</code>
</p>
<h2>Résultat</h2>

<?php

$url= "http://my.mobirise.com/data/userpic/764.jpg";


function repeterImage($url,$nombre){
   
    for($n= 0; $n < $nombre; $n++){     //ici le for est plus indiqué pour crée la boucle ici. J'ai eu du mal à trouver quel boucle été approprier.//
        echo '<img src="'.$url.'"alt="chien">';
    }

}
repeterImage($url,4);