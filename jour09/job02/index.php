<?php

    $db = mysqli_connect("localhost", "root", "root", "jour08");

    $requete = "SELECT nom, capacite FROM salles;";
    $query = mysqli_query($db, $requete);
    $resultats = mysqli_fetch_all($query);

    $nom = ["nom", "capacite"];

    mysqli_close($db);
?>

<html>
<body>

<table>
    <thead>
        <tr> 
            <?php
            for ($i=0; isset($nom[$i]); $i++) { 
                echo "<th>". $nom[$i] ."</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
            <?php 
            for ($i=0; isset($resultats[$i]) ; $i++) {
                echo "<tr>"."</tr>";
                for ($y=0; isset($resultats[$i][$y]); $y++) {
                    echo "<td>". $resultats[$i][$y] ."</td>";
                }
            } 
            ?>
    </tbody>
</table>

</body>
</html>