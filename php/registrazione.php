<?php
    session_start();
   include "function.php";
?>
<!DOCTYPE html>
<html>
<body>
<?php

   if(checkFormBool()){
       $conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");

    foreach ($_POST as $key => $value){

        if($key == "password"){
             $ciao = test_input($value);
             $mysalt = substr($ciao,0,2);
             $pass_crypt = crypt($ciao,$mysalt);
            $pass = mysqli_real_escape_string($conn, $pass_crypt);

          }

      else if($key == "nome"){
                $pul= test_input($value);
$nome = mysqli_real_escape_string($conn, $pul);
        }
      else if($key == "cognome"){
                $pul= test_input($value);
$cognome = mysqli_real_escape_string($conn, $pul);
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

 }
       $imm = "Images/generic.jpg";
        $sql = "INSERT INTO Utenti (mail, user, password,nome,cognome,citta,immagine) VALUES ('$mail', '$user', '$pass','$nome','$cognome','$citta','$imm')";
 if(mysqli_query($conn, $sql)){
    header("Location: login.php");
    exit;
    mysqli_close($conn);
 }
else{
    echo "Username o email gia usate.";
     mysqli_close($conn);
}

    }
   else{
        header("Location: registrati.php");
    exit;
    }







?>
</body>
</html>
