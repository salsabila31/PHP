<?php 
    // OPERATOR MATEMATIKA

    $a = 2;
    $b = 5;

    $c = $a + $b;
    echo $c . '<br>';

    $c = $a - $b;
    echo $c . '<br>';

    $c = $a * $b;
    echo $c . '<br>';

    $c = $a / $b;
    echo floor ($c) . '<br>';

    $c = $a % $b;
    echo $c . '<br>';

    // OPERATOR LOGIKA

    $c = $a < $b;
    echo $c;

    $c = $a > $b;
    echo $c;

    $c = $a == $b;
    echo $c . '<br>';

    $c = $a != $b;
    echo $c . '<br>';

    // INCREMENT

    $a++;
    echo $a . '<br>';

    // OPERATOR STRING

    $kata = 'Sura';
    $kota = 'baya';

    $hasil = $kata . $kota;

    $hasil .= ' Kota Pahlawan';
    echo $hasil;
?>