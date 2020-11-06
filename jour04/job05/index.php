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
    <label for="username"> username </label>
    <input type="text" name="username" id="username"> <br> <br>
    <label for="password">password</label>
    <input type="password" name="password" id="password"> <br> <br>
    <input type="submit" valeur="Submit">
</form>


<?php


$cegenre = "John";
$deref ="Rambo";

foreach ($_POST as $key => $x) {    
    $username = $_POST['username'];
    $password = $_POST['password'];     
}

if (isset($username)&&isset($password)) {
    if (($username == $cegenre)&&($password == $deref)) 
                echo "C'est pas ma guerre"; 
                else {
                echo "Votre pire cauchemard"; }   
            }

?>
</body>
</html>
