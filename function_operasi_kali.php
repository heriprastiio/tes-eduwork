<?php
function fungsiOperasi($int)
{
    if ($int == 1) {
        return 1;
    } else {
        return $int * fungsiOperasi($int - 1);
    }
}
echo (fungsiOperasi(8));
