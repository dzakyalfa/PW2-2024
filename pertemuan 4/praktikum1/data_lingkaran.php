<?php
    require_once 'class_lingkaran.php';

    echo 'Nilai PHI = ' . Lingkaran::PHI;

    $lingkar1 = new Lingkaran(8);
    $lingkar2 = new Lingkaran(27);

    echo '<br><br>';
    echo '<br> Luas Lingkaran1 adalah' . $lingkar1->getLuas() . 'cm';
    echo '<br> Luas Lingkaran2 adalah' . $lingkar2->getLuas() . 'cm';

    //Keliling

    echo '<br><br>';
    echo '<br> Luas keliling Lingkaran1 adalah' . $lingkar1->getKel() . 'cm';
    echo '<br> Luas keliling Lingkaran2 adalah' . $lingkar2->getKel() . 'cm';


?>