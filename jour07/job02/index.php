
<html>
<body>


<?php 

if(isset($_POST['reset'])) {
    unset ($_COOKIE['nbvisites']);
}

$nbvisites=0;

if(isset($_COOKIE['nbvisites'])) 
    $nbvisites= $_COOKIE['nbvisites'];
    $nbvisites++;


setcookie('nbvisites', $nbvisites, time()+3600);
      
echo "nbvisites =". " ". $nbvisites; 

?> 


<form method=post action="">

<input type="submit" name="reset" class="button" value="reset" >
</form>

</body>
</html>