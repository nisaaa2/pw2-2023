<?php
    require_once 'class_kendaraan.php';

    $motor = new Motor("Motor","Bensin",2);
    $submarine = new submarine("kapal selam","biogas",700);



    echo "info Motor:<br>";
    $motor->getInfo();
    echo "<br><br>";
    echo "info kapal selam:<br>";
    $submarine->getInfo();



?>