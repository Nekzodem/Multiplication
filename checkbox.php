<?php
foreach($_POST["choix"] as $variable)
    for($i=0; $i <= 10; $i++)
    {
    echo ($i."*".$variable."=".$i*$variable."</br>");
    }
?>