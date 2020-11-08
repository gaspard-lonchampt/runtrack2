<html>
<body>
<?php

$str = "Hey le Glaude ! Mon eau, elle a une température de haute précision pour le Perniflar ! ça te descend dans les boyaux comme la rosée du matin [Le Bombé]";

function leetspeak($str) {
    for ($i=0; isset($str[$i]) ; $i++)
     {
    if ( ($str[$i] == "a") || ($str[$i] == "A")) $str[$i] = 4 ;
    elseif ( ($str[$i] == "b") || ($str[$i] == "B")) $str[$i] = 8 ;
    elseif ( ($str[$i] == "e") || ($str[$i] == "E")) $str[$i] = 3 ;
    elseif ( ($str[$i] == "g") || ($str[$i] == "G")) $str[$i] = 6 ;
    elseif ( ($str[$i] == "l") || ($str[$i] == "L")) $str[$i] = 1 ;
    elseif ( ($str[$i] == "s") || ($str[$i] == "S")) $str[$i] = 5 ;
    elseif ( ($str[$i] == "t") || ($str[$i] == "T")) $str[$i] = 7 ;

    echo $str[$i];
    }       
}

$résultat = leetspeak($str);
echo $résultat;

?>
</body>
</html>