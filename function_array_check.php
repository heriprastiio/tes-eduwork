<?php

$dataArray = [4, 2, 6, 88, 3, 11];

function dataArrayHighLow($data)
{

    $b = $data[0];

    for ($i = 1; $i < count($data); $i++) {

        if ($b < $data[$i]) {
            $b = $data[$i];
        }
    }
    echo "\nData array high: ", $b, "<br/>";

    $sm = $data[0];

    for ($i = 1; $i < count($data); $i++) {

        if ($sm > $data[$i]) {
            $sm = $data[$i];
        }
    }
    echo "\nData array low: ", $sm, "\n";
}
dataArrayHighLow($dataArray);
