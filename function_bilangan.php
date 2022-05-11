<?php
function bilangan($int)
{
    $dataBilangan = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan ", "sembilan ", "sepuluh", "sebelas");
    if ($int < 12) {
        echo $dataBilangan[$int];
    } elseif ($int < 20) {
        echo bilangan($int - 10) . " belas";
    } elseif ($int < 100) {
        echo bilangan($int / 10) . "puluh";
    } else if ($int < 100) {
        echo bilangan($int % 10);
    } else {
        echo "silahkan input range angka 1 - 99";
    }
}
bilangan(81);
