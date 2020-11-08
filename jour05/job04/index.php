<html>
<body>
<?php

$a = 2;
$operation = "*";
$b = 3;

function calcule($a, $operation, $b) {
    if ($operation == "+") 
        return ($a+$b);
    if ($operation == "-") 
        return ($a-$b);
    if ($operation == "*") 
        return ($a*$b);
    if ($operation == "/") 
        return ($a/$b);
    if ($operation == "%") 
        return ($a%$b);
} 

$resultat = calcule($a, $operation, $b);
echo $resultat;

?>
</body>
</html>