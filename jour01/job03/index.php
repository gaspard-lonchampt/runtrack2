<html>
<body>

<?php
$string = "Que des numéros";
$integer = 10;
$float = 0.10;
$bool = true;
?>

<table>
    <thead>
        <tr>
            <th>type</th>
            <th>nom</th>
            <th>valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo gettype($string) ?> </td>
            <td> <?php echo '$string' ?> </td>
            <td> <?php echo $string ?> </td>
        </tr>
        <tr>
            <td> <?php echo gettype($integer) ?> </td>
            <td> <?php echo '$integer' ?> </td>
            <td> <?php echo $integer ?> </td>
        </tr>
        <tr>
            <td> <?php echo gettype($float) ?> </td>
            <td> <?php echo '$float' ?> </td>
            <td> <?php echo $float ?> </td>
        </tr>
        <tr>
            <td> <?php echo gettype($bool) ?> </td>
            <td> <?php echo '$bool' ?> </td>
            <td> <?php echo $bool ?> </td>
        </tr>
    </tbody>
</table>


</body>
</html>