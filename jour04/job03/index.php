<?php

$x=0;

foreach ($_POST as $_POST[$x]) {
        $x++;
    }

echo $x;

?>

<html>
<body>
    


<form action="index.php" method="post">
    <label for="prénom"> prénom </label>
    <input type="text" name="duchesse" id="prénom"> <br> <br>
    <label for="nom">nom</label>
    <input type="text" name="petitprés" id="nom"> <br> <br>
    <label for="password">password</label>
    <input type="password" name="password" id="password"> <br> <br>
    <input type="submit" valeur="Submit">
</form>

</html>
</body>