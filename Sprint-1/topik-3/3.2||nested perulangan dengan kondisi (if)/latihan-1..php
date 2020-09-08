<?php



for ($i=1; $i <= 9; $i++) { 
    for ($j=1; $j <= 9; $j++) { 
        if ($i==$j || $i > $j) {
            echo "&nbsp+";            
        } else{
            echo "&nbsp-&nbsp";
        } 
    } 
    echo"<br>";
}

// for ($q=1; $q <= 9; $q++) { 
    // for ($w=1; $w <= 9; $w++) { 
        // echo "(" . $q . "'" . $w .")";
    // }
    // echo "<br>";
// }

