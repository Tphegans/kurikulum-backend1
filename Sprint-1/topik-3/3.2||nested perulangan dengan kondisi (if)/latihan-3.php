<?php

for ($p=1; $p <= 9; $p++) { 
    for ($q=1; $q <= 9 ; $q++) { 
        if ($p + $q == 10 || $p == $q || $p > $q && $p + $q > 10 || $p < $q && $p + $q < 10) {
            echo "&nbsp+&nbsp";
        } else {
            echo "&nbsp&nbsp-&nbsp";
        }
    }
    echo "<br>";
}