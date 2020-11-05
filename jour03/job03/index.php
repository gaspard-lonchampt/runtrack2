<?php 

$str ="I'm sorry Dave I'm afraid I can't do that";
$tab = ["a","e","i", "I", "o", "u", "y"];

// etape 1 parcourir sa chaine de caractère sans i < 13

for ($i=0; isset($str[$i]) ; $i++) { 
    
    for ($x=0; isset($tab[$x]) ; $x++) {
        if ( $str[$i] == $tab[$x] ) 
            echo "$tab[$x]";
        }
}

// checker pour chacun des caratères si il est dans tab 

// pour chaque string de i on parcour tab pour voir si c'est égal 

?>