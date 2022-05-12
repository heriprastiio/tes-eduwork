<?php
// PHP program to print multiples
// of 3 and 5 without using % operator.

function findMultiples($n)
{
    $a = 3; // To keep track of multiples of 3
    $b = 5; // To keep track of multiples of 5
    for ($i = 0; $i <= $n; $i++) {
        $s = "";

        // Found multiple of 3
        if ($i == $a) {
            $a = $a + 3; // Update next multiple of 3
            $s = $s . "Edu ";
        }

        // Found multiple of 5
        if ($i == $b) {
            $b = $b + 5; // Update next multiple of 5
            $s = $s . "Work";
        }

        if ($s == "")
            echo ($i) . "<br/>";
        else
            echo ($s) . "<br/>";
    }
}

// Driver Code
findMultiples(15);

// This code is contributed
// by Akanksha Rai(Abby_akku)
