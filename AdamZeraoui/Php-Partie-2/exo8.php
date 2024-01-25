<h1>Exercice 8</h1>
<p>Soit l’URL suivante :
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
Exemple :<br><code>
repeterImage($url,4);</code>
</p>
<h2>Résultat</h2>

<?php

$url= "http://my.mobirise.com/data/userpic/764.jpg";
$n=4;

function repeterImage($url,$n){
   
        if($n == 4){
            echo '<img class="image" src="'.$url.'" alt="chien"/>';
        }
        else {$n++;
            echo '<img class="image" src="'.$url.'" alt="chien"/>';
        }
        while($n>4){
    }
return $n;
}
repeterImage($url,$n);