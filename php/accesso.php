<!DOCTYPE html>
<html>
<body>
<?php
include "function.php";
session_start();
$conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");
 $mypass= $_POST["password"];
 $mysalt = substr($mypass,0,2);
 $pass = crypt($mypass,$mysalt);
 $myusername = mysqli_real_escape_string($conn,$_POST["user"]);
 $mypassword = mysqli_real_escape_string($conn,$pass);
$sql = "SELECT * FROM Utenti WHERE user = '$myusername' and password = '$mypassword'";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
 $count = mysqli_num_rows($result);

       if($count == 1){
           infoUtente($row);
            $_SESSION["accesso"] = "true";
           header("Location: profilo.php");
          exit;
           }
     else{
           $_SESSION["accesso"] = "false";


     }




    if( $_SESSION["accesso"] == "false"){
         header("Location: login.php");
          exit;

    }
mysqli_close($conn);
?>
    </body>
</html>
