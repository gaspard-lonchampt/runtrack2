<html>
<body>


<?php 

session_start(); 

if(isset($_POST['reset'])) {
    unset ($_SESSION['nbvisites']);
    session_destroy();
}

if(isset($_SESSION['nbvisites'])) 
    $_SESSION['nbvisites'] = $_SESSION['nbvisites']+1; 
else
    $_SESSION['nbvisites']=1; 
      
echo"nbvisites = ".$_SESSION['nbvisites']; 

?> 


<form method=post action="index.php">

<input type="submit" name="reset" class="button" value="reset" >
</form>

</body>
</html>
