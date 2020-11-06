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
    <label for="nombre"> nombre </label>
    <input type="text" name="nombre" id="nombre"> <br> <br>
    <input type="submit" valeur="Submit">
</form>


<?php


$cegenre = "John";
$deref ="Rambo";

foreach ($_POST as $key => $x) {    
    $nombre = $_POST['nombre'];     
}

if (isset($nombre)) {
    if ($nombre % 2 == 0) 
                echo "Nombre pair"; 
                else {
                echo "Nombre impair"; }   
            }

?>
</body>
</html>