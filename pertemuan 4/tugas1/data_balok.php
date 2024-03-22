<?php
    require_once 'class_balok.php';


    $balok = new Balok(29, 16, 7);
    echo $balok->getLuas() . "<br>";
    echo $balok->getKeliling() . "<br>"; 
    echo $balok->getVolume() . "<br>"; 

?>