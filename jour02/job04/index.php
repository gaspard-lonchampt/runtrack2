<html>
<?php 

$var = 0;

    while ($var <= 100) {
        if (!($var%5) && !($var%3)) 
            echo "FizzBuzz <br>";
        else if (!($var%3)) 
            echo "Buzz <br>"; 
        else if (!($var%5)) 
            echo "Fizz <br>";
        else
            echo $var. "<br>";
        $var++;
    }
?>
</html>