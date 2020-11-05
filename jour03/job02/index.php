<?php 

$str ="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
$i = 0;
$var = 0;

for ($i=0; isset($str[$i]) ; $i++) {
    if ($var % 2  == 0) {
        echo "$str[$var]";
    }
    else {
        echo " ";
    }
    $var++;
}

?> 
