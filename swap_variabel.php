<?php
$dataA = 3;
$dataB = 7;
$dataasliA = $dataA;
$dataasliB = $dataB;
// print_r($dataasliA, $dataasliB);
echo "Sebelum Swap Data:" . "<br>";
echo "Data A $dataasliA" . "<br>";
echo "Data B $dataasliB" . "<br>";
echo "<br>";
echo "Data Setelah Swap:" . "<br>";
$swap = [$dataA, $dataB] = [$dataB, $dataA];
echo implode('<br>', $swap);
