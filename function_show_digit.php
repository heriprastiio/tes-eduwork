<?php
$data = "9.86-A5.321";
$count = strlen($data) - 1;
for ($i = $data - 1; $i >= 0; $i--) {
    // for ($j = 0; $j < $i; $j++) {
    echo $data[$i];
    // }
}
