<?php
$tables=$_POST["tables"];

function numero($tables){ /*prototype = function nom (paramêtre)*/
    $n=-1; /* variable vaut -1 */
    while($n <= 9){ /*tant que (variable est inferieure ou egale à 9) */
    $n++; /* variable + 1*/
    /* Autres manières 
    $n = $n + 1; (variable egale variable +1)
    $n += 1; (fonctionne aussi avec * & -)
    */
    echo ($n."*".$tables."=".$n*$tables."</br>");
    /*(.variable."multiplie".paramêtre."égale".variablemultiplieparamêtre.)*/
    }
}
numero($tables); /*nom(paramêtre voulu)*/
?>