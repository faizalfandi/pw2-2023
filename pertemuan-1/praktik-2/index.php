<?php

/*
     variable sistem
     variable build in php (variable yang sudah ada di php)
*/
    echo $_SERVER["DOCUMENT_ROOT"] ;
    echo '<br>' ;
    echo '<br>' ;
/*
    variable user
    variable yang dibuat user
*/
    $name = "jal";
    $age = 20;
    $weight = 62.5;

    echo 'Nama saya adalah ' . $name;

    echo '<br>' ;
    echo '<br>' ;

/*
    Variable konstan
    variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
  */
  define ("SITE_NAME", "Elena");
  const BASE_URL = "https://elena.nurulfikri.ac.id/";

	// Variable konstan tidak bisa dirubah nilainya
	define ("SITE_NAME", "AIS"); // ---> error

  // Menampilkan variable konstanta
  echo "Site name: " . SITE_NAME . "<br/>";
  echo "URL: " . BASE_URL . "<br/>";

?>