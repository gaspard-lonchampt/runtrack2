<html>
<body>
<form action="index.php" method="get">
    <label for="prénom"> prénom </label>
    <input type="text" name="duchesse" id="prénom"> <br> <br>
    <label for="nom">nom</label>
    <input type="text" name="petitprés" id="nom"> <br> <br>
    <label for="password">password</label>
    <input type="password" name="password" id="password"> <br> <br>
    <input type="submit" valeur="Submit">
</form>

<table>
<?php
foreach ($_GET as $key => $x) {
        echo "<tr>
                <td> $key <br/> </td>
                <td> $x <br/> </td>
            </tr>";
}
?>
</table>
</html>
</body>