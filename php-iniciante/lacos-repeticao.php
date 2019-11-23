<?php 

$idades = [10, 20, 30, 40, 50];

//foreach, while, do...while, for
//echo $idades[0];

foreach($idades as $idade) {
    print $idade . '<br>';
}

for($i = 0; $i < count($idades); $i++)  {
    print $idades[$i] . "<br>";
}

$i = 0;

while($i < count($idades)) {
    print $idades[$i] . "<br>";
    $i++;
}

$i = 0;
do {
   
    print $idades[$i] . "<br>";
    $i++;

} while($i < count($idades));