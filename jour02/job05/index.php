<html>
<?php

function premier($nombre) {
    
    for ($i = 2;$nombre > $i; $i++) {
        //test du quotien de la division
        if ($nombre % $i === 0) {
            return FALSE;
        }
     }
    // Si appelée depuis une fonction, la commande return termine immédiatement la fonction, et retourne l'argument qui lui est passé. Donc plus besoin de Else.
    return TRUE;
}
 
for ($i = 3; $i <= 1000; $i++) {
    if (premier($i)) {
        echo "$i <br/>";  
    }
}

?>
</html>