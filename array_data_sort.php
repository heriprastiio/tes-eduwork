<?php

$dataArray = array(1, 3, 4, 7, 8, 10, 12, 15, 19, 20);
$low = 3;
$high = 18;

echo "Array = [";
foreach ($dataArray as $key => $array) {
    echo $array . " ";
}
echo "]";
echo "<br>";
echo "Nilai Int Low = " . $low . "<br>";
echo "Nilai Int High = " . $high . "<br>";

echo "<br>";

echo "Output = [";
foreach ($dataArray as $key => $urut) {
    if ($urut > $low and $urut < $high) {
        echo $urut . " ";
    }
}
echo "]";
