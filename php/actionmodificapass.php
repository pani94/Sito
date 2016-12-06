<?php
    session_start();
   include "php/function.php";
   autorizza();
?>
<!DOCTYPE html>
<html>
<body>
<?php

   if(checkFormPassBool()){
       $conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");
        $ciao= test_input($_POST["password"]);
        $mysalt = substr($ciao,0,2);
        $pass_crypt = crypt($ciao,$mysalt);
        $pass = mysqli_real_escape_string($conn, $pass_crypt);
        $myuser = $_SESSION["user"];
       $sql = "UPDATE Utenti SET  password = '$pass' WHERE user = '$myuser'";





 if(mysqli_query($conn, $sql)){

     $_SESSION["modificapass"] = "true";
     mysqli_close($conn);
     header("Location: php/profilo.php");
     exit;
 }
else{
     mysqli_close($conn);
     $_SESSION["modificapass"] = "false";
     $_SESSION["oldpasserr"] = "Password Sbagliata";
     header("Location: php/modificapass.php");
     exit;
}

    }
   else{
        $_SESSION["modificapass"] = "false";
        header("Location: php/modificapass.php");
        exit;
    }







?>
</body>
</html>
