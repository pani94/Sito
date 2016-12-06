<?php
if(isset($_POST['user'])){
    $user=$_POST['user'];
    $conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");
    $sql = "SELECT * FROM Utenti WHERE user = '".$user."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if($count == 0){
            echo "";
    }
    else{
        echo "*Username già in uso";
    }


    mysqli_close($conn);
}
else if(isset($_POST['mail'])){
    $mail=$_POST['mail'];
    $conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");
    $sql = "SELECT * FROM Utenti WHERE mail = '".$mail."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if($count == 0){
            echo "";
    }
    else{
        echo "*Email già in uso";
    }


    mysqli_close($conn);
}

?>
