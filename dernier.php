<?php
    $min = 0;
    $max = 10;
    $nbr1 = ($_POST['tables']);
    $nbr2 = rand($min, $max);
    echo $nbr1."*".$nbr2;


$reponse = ($_POST['reponse']);
$vrai = $nbr1 * $nbr2;
    if($reponse == $vrai)
    {
        echo "Winner !".$vrai;
    }
    else
    {
        echo "Game Over !";
    }
?>