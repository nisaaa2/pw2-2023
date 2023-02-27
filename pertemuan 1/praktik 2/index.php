<?php

/*
    variable sistem
    variable built in php (variabel yg sudah ada di php
    )
*/
    echo $_SERVER["DOCUMENT_ROOT"];
    echo '<br>';
    echo '<br>';


/*
    variable user
    variable yg dibuat user
*/

    $name = "nis";
    $age = 15;
    $wight = 50.5;

    echo $name = "nisa";

    // Menampilkan variable
    echo 'Nama saya '.$name.' umur saya '.$age.' berat saya '.$weight;
    echo "<br />";
    echo "<br />";  

    
    /*
        Variable konstan
        variable yang tidak bisa diubah nilainya
        1. Menggunakan define | define('fruit', "Apel");
        2. Menggunakan const  | const fruit = "Apel";
    */

    define ("SITE_NAME", "Elena");
    const BASE_URL = "https://elena.nurulfikri.ac.id/";

	// Variable konstan tidak bisa dirubah nilainya
	// define ("SITE_NAME", "AIS"); // ---> error

    // Menampilkan variable konstanta
    echo "Site name: " . SITE_NAME . "<br/>";
    echo "URL: " . BASE_URL . "<br/>";
?>




?>