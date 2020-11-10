
<pre>
<?php 
session_start(); 

if(isset($_POST['reset'])) {
    unset ($_SESSION);
    session_destroy();
}

if (isset($_POST['ajouter'])) {
    $user=array('prenom'=>$_POST['prenom']);
    $_SESSION['user'][]=$user;
}

if (isset($_SESSION['user'])) {
    for ($i=0; $i < count($_SESSION['user']) ; $i++) { 
        echo ($_SESSION['user'][$i]['prenom'])."<br/>";
    }
}

@var_dump($_SESSION)

?> 
</pre>

<html>
<body>

<form method=post action="">
<label for="prenom"> prénom </label>
<input type="text" name="prenom" id="prenom">
<input type="submit" name="ajouter" class="button" value="ajouter" >
<input type="submit" name="reset" class="button" value="reset" >
</form>

</body>
</html>