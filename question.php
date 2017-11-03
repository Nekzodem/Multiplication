<?php
echo($_POST["resultat"]);
$resultat = $_POST["resultat"];

if ($resultat == 20)
{
echo ( "WINNER!");
}
else
{
echo ("GAME OVER");
}

?> 