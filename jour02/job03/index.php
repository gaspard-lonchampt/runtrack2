<html>
<?php 

$var = 0;

    while ($var <= 100) {
        if ( $var <= 20 ) 
            echo "<i>" . $var . "</i><br>"; 
        else if ($var == 42)
            echo "La Plateforme_"."<br>";
        else if ($var >= 25 && $var <= 50 ) 
            echo "<u>". $var . "</u><br>";
        else
            echo $var. "<br>";
        $var++;
    }
?>
</html>