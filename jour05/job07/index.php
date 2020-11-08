<html>
<body>

<form action="index.php" method="get">
    <label for="str"> string </label>
    <input type="text" name="str" id="str"> <br> <br>
    <label for="fonction"> liste déroulante </label>
    <select name="fonction" id="fonction"> 
    <option value="gras">
    gras
    </option>
    <option value="cesar">
    cesar
    </option>
    <option value="plateforme">
    plateforme
    </option>
    </select>
    <input type="submit" valeur="Submit">
</form>

<?php

var_dump($_GET['fonction']);

   
$str = $_GET['str'];     

var_dump ($str);

// fonction gras //
function gras($str) {
    for ($g=0; $g <= $str ;$g++) 
        if ($g==0) 
        {
            if (ctype_upper($g)) 
                return "<b> $str </b>";
        }
}
$gras = gras($str);


// fonction cesar //
$decalage = 2;
function cesar($str, $decalage) {
    for ($i=$decalage; isset($str[$i]) ; $i++) 
        echo $str[$i];
    for ($i=0; $i < $decalage ; $i++) 
        echo $str[$i];
}

$cesar = cesar($str, $decalage);



// Conditions pour activer les différentes fonctions

if ($_GET['fonction'] == 'gras')
{
    echo $gras; 
}
elseif ($_GET['fonction'] == 'cesar') {
    echo $cesar;
}
else {
    echo $plateforme;
}

?>
</body>
</html>