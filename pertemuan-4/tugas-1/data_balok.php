<?php

    require_once 'class_balok.php';

    $balok_pertama = new Balok(28, 6, 3);
    echo "<br>Balok pertama memiliki p = 28, l = 6, t = 3";
    echo '<br>Luas balok pertama = '.$balok_pertama->getLuas();
    echo '<br>Keliling balok pertama = '.$balok_pertama->getKeliling();
    echo '<br>Volume Balok 1 = '.$balok_pertama->getVolume();
    echo '<br>';
    $balok_kedua = new Balok(34, 10, 23);
    echo "<br>Balok kedua memiliki p = 34, l = 10, t = 23";
    echo '<br>Luas balok kedua = '.$balok_kedua->getLuas();
    echo '<br>Keliling balok kedua = '.$balok_kedua->getKeliling();
    echo '<br>Volume Balok kedua = '.$balok_kedua->getVolume();
    echo '<br>';
    $balok_ketiga = new Balok(14, 27, 12);
    echo "<br>Balok ketiga memiliki p = 14, l = 27, t = 12";
    echo '<br>Luas balok ketiga = '.$balok_ketiga->getLuas();
    echo '<br>Keliling balok ketiga = '.$balok_ketiga->getKeliling();
    echo '<br>Volume Balok ketiga = '.$balok_ketiga->getVolume();
    echo '<br>';
    $balok_keempat = new Balok(13, 7, 8);
    echo "<br>Balok keempat memiliki p = 13, l = 7, t = 8";
    echo '<br>Luas balok keempat = '.$balok_keempat->getLuas();
    echo '<br>Keliling balok keempat = '.$balok_keempat->getKeliling();
    echo '<br>Volume Balok keempat = '.$balok_keempat->getVolume();
    ?>