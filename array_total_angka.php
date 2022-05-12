<?php

$dataArray = array(1, 4, 7, 9, 12);
$low = 2;
$high = 15;

echo "Array = [";
foreach ($dataArray as $key => $array) {
    echo $array . " ";
}
echo "]";
echo "<br>";
echo "Nilai Int Low = " . $low . "<br>";
echo "Nilai Int High = " . $high . "<br>";

echo "<br>";

echo "Jumlah array ";
$arrayLength = $dataArray;

echo count($arrayLength);
