<?php

    require_once 'class_kasus.php';

    //object
    $Almaidah = new Almaun('المائدة', 104 ,125);
    $Albaqarah = new Albaqarah('البقرة', 79, 12);
    $Aliimran = new Aliimran('ال عمرن', 109,64);
    //echo
    echo "Info Surah المائدة:<br>";
    $Almaidah->getInfoAlmaun();
    echo "<br>";

    echo "Info Surah البقرة:<br>";
    $Albaqarah->getInfoAlbaqarah();
    echo "<br>";

    echo "Info Surah ال عمرن:<br>";
    $Aliimran->getInfoAliimran();

?>