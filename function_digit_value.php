<?php

$data = "9.86-A5.321";
echo "Nilai String = " . $data . '<br><br>';

function digitValue($input)
{
    $angka = preg_replace("/[^0-9]/", "", $input);
    $panjang = strlen($angka);
    $str = strval($angka);
    $arrnum = str_split($str);

    echo $angka . '<br>';
    foreach ($arrnum as $key => $value) {
        $a = $panjang - 1 - $key;
        echo $value;
        for ($i = 0; $i < $a; $i++) {
            echo '0';
        }
        echo '<br>';
    }
}
echo digitValue($data);
