<?php
function cekBilanganKecilBesar($nilai)
{
    $max = $nilai[0];
    for ($i = 1; $i < $max; $i++)
        if ($max < $nilai[$i])
            $max = $nilai[$i];
    echo "Nilai terbesar adalah $max";
    return $max;
}
cekBilanganKecilBesar(100);
