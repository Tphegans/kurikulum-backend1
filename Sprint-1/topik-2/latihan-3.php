<?php
$celcius=34;
$kelvin=273.15;
$hasilcelcius=$celcius+$kelvin;
$hasilfarenheit=(9/5)*$celcius+32;
$hasilreamur=(4/5)*$celcius;

echo "Rumus mengubah Celcius ke Kelvin adalah C+K, jadi <br>".$celcius."+" .$kelvin."=".$hasilcelcius."<br>";
echo "Rumus mengubah Celcius ke Farenheit adalah 9/5 x Celcius + 32 = <br> ".$celcius." + 32 = ".$hasilfarenheit."<br>";
echo "Rumus mengubah Celcius ke Reamur adalah 4/5 x celcius = <br>".$hasilreamur;