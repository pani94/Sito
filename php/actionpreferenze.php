<?php
    session_start();
   include "function.php";
   autorizza();
?>
<!DOCTYPE html>
<html>
<body>
<?php
        if(isset($_POST['interessi'])){
             $interessi =  $_POST['interessi'] ;
             $conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");
             $user = $_SESSION["user"];
             $numero_preferenze = count($interessi);
             $count =0;
             foreach($interessi as $interesse) {
                 $sql = "INSERT INTO Preferenze SET username = '$user', id_materia = (SELECT id FROM Materie WHERE nome = '$interesse');";
                  if(mysqli_query($conn, $sql)){
                    $count++;
                 }


            }
            mysqli_close($conn);
            if($numero_preferenze == $count){
                header("Location: profilo.php");
                exit;
            }
            //Fare un else dove gli dico che le azione che ho fatto non sono andate a buon fine!
    }

















?>
</body>
</html>
