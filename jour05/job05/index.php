<html>
<body>
<?php

$str = "la vie est un long fleuve tranquille";
$char = "l";

function occurences($str, $char) {
    $x=0;
    for ($i=0; isset($str[$i]) ; $i++) 
        if ($char == $str[$i]) 
            $x++;
        return $x; 
}

$résultat = occurences($str, $char);
echo $résultat;

?>
</body>
</html>