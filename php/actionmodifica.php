<?php
    session_start();
   include "php/function.php";
?>
<!DOCTYPE html>
<html>
<body>
<?php

   if(checkFormBool()){
       $conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");

    foreach ($_POST as $key => $value){

        if($key == "nome"){
                $pul= test_input($value);
$nome = mysqli_real_escape_string($conn, $pul);
        }
      else if($key == "cognome"){
                $pul= test_input($value);
$cognome = mysqli_real_escape_string($conn, $pul);
        }
     else if($key == "sesso"){
                $pul= test_input($value);
$sesso = mysqli_real_escape_string($conn, $pul);
        }
      else if($key == "citta"){
                $pul= test_input($value);
$citta = mysqli_real_escape_string($conn, $pul);
        }
      else if($key == "mail"){
                $pul= test_input($value);
$mail = mysqli_real_escape_string($conn, $pul);
        }
        else if($key == "user"){
                $pul= test_input($value);
$user = mysqli_real_escape_string($conn, $pul);
        }
          else if($key == "titolo"){
                $pul= test_input($value);
$titolo = mysqli_real_escape_string($conn, $pul);
        }
        else if($key == "data"){
                $pul= test_input($value);
$data = mysqli_real_escape_string($conn, $pul);
        }
        else if($key == "telefono"){
                $pul= test_input($value);
$telefono = mysqli_real_escape_string($conn, $pul);
        }

}
        if($_FILES["upload"]["name"] != ""){
            $percorso =  "Images/" .$_SESSION["user"];

        }
       else{
          $percorso = $_SESSION["imm"] ;
       }

        $myuser = $_SESSION["user"];
        $sql = "UPDATE Utenti SET user='$user', mail='$mail', nome ='$nome', cognome ='$cognome', citta ='$citta', sesso ='$sesso', titolo ='$titolo', data ='$data', telefono ='$telefono', immagine = '$percorso' WHERE user = '$myuser' ";
 if(mysqli_query($conn, $sql)){

     $sql = "SELECT * FROM Utenti WHERE user = '$user'";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     infoUtente($row);
     $_SESSION["modifica"] = "true";
     mysqli_close($conn);
     header("Location: php/profilo.php");
     exit;
 }
else{
     mysqli_close($conn);
     $_SESSION["modifica"] = "false";
     header("Location: php/modifica.php");
     exit;
}

    }
   else{
        $_SESSION["modifica"] = "false";
        header("Location: php/modifica.php");
        exit;
    }







?>
</body>
</html>
