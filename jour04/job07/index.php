<html>
<body>
<!-- 

    1.3 Quick Checklist for Choosing HTTP GET or POST (source WC3)

        Use GET if:
            The interaction is more like a question (i.e., it is a safe operation such as a query, read operation, or lookup).
        Use POST if:
            The interaction is more like an order, or
            The interaction changes the state of the resource in a way that the user would perceive (e.g., a subscription to a service), or
            The user be held accountable for the results of the interaction

Nous sommes dans le cas d'un formulaire de connexion, il faut donc choisir POST.
 -->

<form action="index.php" method="post">
    <label for="largeur"> largeur </label>
    <input type="text" name="largeur" id="largeur"> <br> <br>
    <label for="hauteur"> hauteur </label>
    <input type="text" name="hauteur" id="hauteur"> <br> <br>
    <input type="submit" valeur="Submit">
</form>


<?php

foreach ($_POST as $key => $x) {    
    $hauteur = $_POST['hauteur'];
    $largeur = $_POST['largeur'];     
}

// $hauteur = null;
// $largeur = null;


if (isset($hauteur)&&isset($largeur)) 
    if ($largeur % $hauteur == 0) {
// Boucle pour le haut du carré
    for ($l=0; $l <= $largeur ;$l++) 
        if ($l==0) 
            echo "&nbsp";
        elseif ($l== $largeur) {
            echo "&nbsp";
        }
        else 
            echo "_";   
// Boucle pour les côtés
    for ($h=0; $h <= $hauteur-2 ;$h++) 
            echo "<br />" . "|". str_repeat('&nbsp;', (($largeur-1)*2)) . "|";
// première boucle pour faire le bas
    for ($l=0; $l <= $largeur ;$l++) 
        if ($l == 0) 
            echo "<br />". "|";
        
        elseif ($l == $largeur) 
            echo "|";
        
        else 
            echo "_";
} 

?>

</body>
</html>