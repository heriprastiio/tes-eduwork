<?php
function tahunKabisat($inputTahun)
{

    if ($inputTahun % 4 == 0) {
        echo "$inputTahun tahun kabisat";
    } else if ($inputTahun % 4 != 0) {
        echo "$inputTahun bukan tahun kabisat";
    }
}
tahunKabisat(2024);
