<?php

    Require_once "class_lingkaran.php";

    echo "Nilai PHI:" . Lingkaran::PHI;

    $lingkar1 = new Lingkaran(7);
    $lingkar1 = new Lingkaran(15);
  
    
    echo '<br>Luas Lingkaran 1' . $lingkar1->getLuas();
    echo '<br>Luas Lingkaran 1' . $lingkar1->getLuas();
    echo'<br>';
    echo '<br>Kel Lingkaran 1' . $lingkar1->getKel();
    echo '<br>Kel Lingkaran 1' . $lingkar1->getKel();



?>