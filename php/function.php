<?php
function barra(){
    if(isset($_SESSION["accesso"])){
                 if($_SESSION["accesso"]!= "true"){
             ?>   <a class="menu" href="login.php">Login</a>
          <a class="menu" href="registrati.php">Registrati</a> <?php
          }
                 else{
                  ?>   <a class="menu" href="logout.php">Logout</a><?php
                 }
            }
              else{
                ?>  <a class="menu" href="login.php">Login</a>
          <a class="menu" href="registrati.php">Registrati</a> <?php
            }

}
function barraIndex(){
   if(isset($_SESSION["accesso"])){
                 if($_SESSION["accesso"]!= "true"){
             ?>   <a class="menu" href="php/login.php">Login</a>
          <a class="menu" href="php/registrati.php">Registrati</a> <?php
          }
                 else{
                  ?>   <a class="menu" href="php/logout.php">Logout</a><?php
                 }
            }
              else{
                ?>  <a class="menu" href="php/login.php">Login</a>
          <a class="menu" href="php/registrati.php">Registrati</a> <?php
            }


}
function test_input($data){
    $data = trim($data);
    return $data;
}
function autorizza(){
     if(isset($_SESSION["accesso"])){
         if($_SESSION["accesso"] != "true"){
              header("Location: login.php");
              exit;
         }

     }
    else{
         header("Location: login.php");
         exit;
    }
}
function welcome(){
    if(isset($_SESSION["accesso"])){
        if($_SESSION["accesso"] == "true"){
            ?>
            <div id = "pos_imm_prof">
            <img src="<?php
                echo $_SESSION["imm"]; ?>" width="120" height="180" alt="immagine profilo" >
        </div>
                <form >
                <fieldset id="pos_field">
                    <legend>Dati</legend>
                        <table>
                             <tr>
                                <td>Email</td>
                                <td ><?php
                                    echo $_SESSION["email"];
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Nome</td>
                                <td ><?php
                                    echo $_SESSION["nome"];
                                     ?>
                                </td>
                            </tr>

                             <tr>
                                <td>Cognome</td>
                                <td ><?php
                                    echo $_SESSION["cognome"];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Citta</td>
                                <td > <?php
                                    echo $_SESSION["citta"];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Sesso</td>
                                <td > <?php
                                    echo $_SESSION["sesso"];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Titolo di studio</td>
                                <td > <?php
                                    echo $_SESSION["titolo"];
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Telefono</td>
                                <td > <?php
                                    echo $_SESSION["telefono"];
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Data di nascita</td>
                                <td > <?php
                                    echo $_SESSION["data"];
                                    ?>
                                </td>
                            </tr>

                    </table>


                 </fieldset>

             </form>
             <p id ="pos_modifica">
                 <a href = "modifica.php">Modifica il tuo profilo</a> <br>
                 <a href = "modificapass.php">Modifica la tua password</a>
                 <br>
                 <a href = "preferenze.php">Inserisci le tue materie preferite</a>
                </p>

            <?php
                $_SESSION["accesso"] = "true";

                  }
                   else{
                         ?> <div id = "pos_scritta" >Per accedere alla pagina effettua il  <a  href="login.php">login</a>  oppure  <a href="registrati.php"> registrati </a></div> <?php

                     }

        }
        else{
          ?> <div id = "pos_scritta" >Per accedere alla pagina effettua il  <a  href="login.php">login</a>  oppure  <a href="registrati.php"> registrati </a></div> <?php

        }

}

function checkFormBool(){
    $count = 0;
    $_SESSION["passerr"] = "";
    $_SESSION["usererr"] = "";
    $_SESSION["nomeerr"] = "";
    $_SESSION["mailerr"] = "";
    $_SESSION["cognomeerr"] = "";
    $_SESSION["cittaerr"] = "";
    $_SESSION["dataerr"] = "";
    $_SESSION["telerr"] = "";
   foreach ($_POST as $key => $value){
      if(isset($key)){
          if($key == "password"){
            if($value == ""){
                $_SESSION["passerr"]= "Campo oblligatorio";
                 $count++;
            }
             else if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/",$value)){
                    $_SESSION["passerr"]= "*Formato password non corretto. La password deve avere una lunghezza minima di 6 caratteri,contenere almeno una maiuscola ed almeno un numero.";
                     $count++;
                }

          }

      else if($key == "nome"){
                if($value == ""){
                $_SESSION["nomeerr"]= "Campo oblligatorio";
                 $count++;
            }
                else if(!preg_match("/^([a-zA-Z\xE0\xE8\xE9\xF9\xF2\xEC\x27]\s?)+$/",$value)){
                   $_SESSION["nomeerr"]=  "*Formato non valido. Campo formato da sole lettere";
                   $count++;
                }
        }
      else if($key == "cognome"){
                 if($value == ""){
                $_SESSION["cognomeerr"]= "Campo oblligatorio";
                 $count++;
            }
                else if(!preg_match("/^([a-zA-Z\xE0\xE8\xE9\xF9\xF2\xEC\x27]\s?)+$/",$value)){
                     $_SESSION["cognomeerr"]=  "*Formato non valido. Campo formato da sole lettere";
                     $count++;
                }
        }
      else if($key == "citta"){
           if($value == ""){
                 $_SESSION["cittaerr"]= "Campo oblligatorio";
                 $count++;
            }
              else if(!preg_match("/^([a-zA-Z\xE0\xE8\xE9\xF9\xF2\xEC\x27]\s?)+$/",$value)){
                    $_SESSION["cittaerr"]=  "*Formato non valido. Campo formato da sole lettere";
                    $count++;
                }

        }
      else if($key == "mail"){
                if($value == ""){
                     $_SESSION["mailerr"]= "Campo oblligatorio";
                     $count++;
            }
                else if(!preg_match("/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,40}$/",$value)){
                   $_SESSION["mailerr"]=  "*Formato email non valido.";
                   $count++;
                }
                else if(!checkMail($value)){
                            $_SESSION["mailerr"]= "*Mail già in uso";
                            $count++;
                          }
        }
        else if($key == "user"){
                if($value == ""){
                $_SESSION["usererr"]= "Campo oblligatorio";
                 $count++;
                }
                   else  if(!preg_match("/^[A-Za-z0-9_]{1,20}$/",$value)){
                        $_SESSION["usererr"]=  "*Formato username non valido. Campo formato da lettere,numeri e _";
                         $count++;
                    }
                  else if(!checkUser($value)){
                        $_SESSION["usererr"]= "*Username già in uso";
                        $count++;
                  }
            }
          else if($key == "data"){
              if($value != ""){
                  if(!preg_match("/[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/",$value)){
                        $_SESSION["dataerr"]=  "*Formato non valido.Usare il seguente formato GG/MM/AAAA";
                         $count++;
                    }
              }

            }
          else if($key == "telefono"){
                if($value != ""){
                    if(!preg_match("/^[0-9]{1,5}\-[0-9]{2,8}$/",$value)){
                        $_SESSION["telerr"]=  "*Formato non valido.Dopo il prefisso inserire un trattino (Es 019-6775)";
                         $count++;
                    }
                }

            }



    }


   }
    $up = upload();
        if($up == "false"){
            $count++;
        }

     if($count == 0){
        return true;
    }
    else{
        return false;
    }

}
function checkFormPassBool(){
    $count = 0;
    $_SESSION["passworderr"] = "";

    $_SESSION["password1err"] = "";
    $_SESSION["oldpasserr"] = "";
   foreach ($_POST as $key => $value){
      if(isset($key)){
          if($key == "password"){
            if($value == ""){
                $_SESSION["passworderr"]= "Campo oblligatorio";
                 $count++;
            }
             else if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/",$value)){
                    $_SESSION["passworderr"]= "*Formato password non corretto. La password deve avere una lunghezza minima di 6 caratteri,contenere almeno una maiuscola ed almeno un numero.";
                     $count++;
                }

          }

      else if($key == "password1"){
                if($value == ""){
                $_SESSION["password1err"]= "Campo oblligatorio";
                 $count++;
            }
        }
      else if($key == "oldpassword"){
                 if($value == ""){
                $_SESSION["oldpassworderr"]= "Campo oblligatorio";
                 $count++;
            }
                $conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");
                $myusername = $_SESSION["user"];
                $ciao= $_POST["oldpassword"];
                $mysalt = substr($ciao,0,2);
                $pass_crypt = crypt($ciao,$mysalt);
                $pass = mysqli_real_escape_string($conn, $pass_crypt);
                $sql = "SELECT * FROM Utenti WHERE user = '$myusername' AND password = '$pass'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if($pass == $row["password"]){
                     mysqli_close($conn);
                   }
          else{
               $count++;
                    $_SESSION["oldpassworderr"]= "La password è sbagliata";
               mysqli_close($conn);
          }



        }




    }


   }


     if($count == 0){
        return true;
    }
    else{
        return false;
    }

}
function azzeraErrSession(){
     $_SESSION["passerr"] = "";
    $_SESSION["usererr"] = "";
    $_SESSION["nomeerr"] = "";
    $_SESSION["mailerr"] = "";
    $_SESSION["cognomeerr"] = "";
    $_SESSION["cittaerr"] = "";
}
function regErr($id){
 $err = $id . "err";

 if(isset($_SESSION[$err])){
	echo $_SESSION[$err];

 }
}
function infoUtente($row){
           $_SESSION["user"] = $row["user"];
           $_SESSION["nome"] = $row["nome"] ;
           $_SESSION["cognome"] = $row["cognome"] ;
           $_SESSION["email"] = $row["mail"] ;
           $_SESSION["citta"] = $row["citta"] ;
           $_SESSION["telefono"] = $row["telefono"] ;
           $_SESSION["data"] = $row["data"] ;
           $_SESSION["sesso"] = $row["sesso"] ;
           $_SESSION["titolo"] = $row["titolo"] ;
           $_SESSION["imm"] = $row["immagine"] ;

            if( $_SESSION["data"] == ""){
                $_SESSION["data"] = "GG/MM/AAAA";
            }
}
function succMod(){
        if(isset($_SESSION["modifica"])){
           if($_SESSION["modifica"] == "false"){
            echo "La modifica del profilo non è andata a buon fine.Riprovare.";
            $_SESSION["modifica"] = "";
        }
        else{
            echo "";
        }
    }

}
function upload(){

$cartella_upload ="Images/";
$nome_file = $cartella_upload.$_SESSION["user"];
$tipi_consentiti = array("gif","png","jpeg","jpg");
$max_byte = 10000000;

if(isset($_FILES["upload"]))
   {


    if( $_FILES["upload"]["name"] != ""){
         if(file_exists($nome_file)){
            unlink($nome_file);
    }
        if(!is_uploaded_file($_FILES["upload"]["tmp_name"]) or $_FILES["upload"]["error"]>0)
      {
       return 'false';

      }

   // verifichiamo che il tipo è fra quelli consentiti
   else if(!in_array(strtolower(end(explode('.', $_FILES["upload"]["name"]))),$tipi_consentiti))
      {
    return 'false';

      }

   // verifichiamo che la dimensione del file non eccede quella massima
   else if($_FILES["upload"]["size"] > $max_byte)
      {
      return 'false';
      }

    // verifichiamo che la cartella di destinazione settata esista
    else if(!is_dir($cartella_upload))
        {
        return 'false';
        }

    // verifichiamo che la cartella di destinazione abbia i permessi di scrittura
    else if(!is_writable($cartella_upload))
        {
        return 'false';
        }

   // verifichiamo il successo della procedura di upload nella cartella settata
   else if(!move_uploaded_file($_FILES["upload"]["tmp_name"], $nome_file))
      {
       return 'false';

      }
        else
      {
      return 'true';

      }
    }


}
    else{
        return "true";
        //se nn vuole cambiare immagine la
    }
}
function checkUser($value){
    $user=$value;
    if(isset($_SESSION["user"])){
         if($user == $_SESSION["user"]){
            return true;
        }
        else{
            $conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");
            $sql = "SELECT * FROM Utenti WHERE user = '".$user."'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if($count == 0){
                    mysqli_close($conn);
                    return true;
            }
            else{
                mysqli_close($conn);
                return false;
            }
        }

    }

}
function checkMail($value){
    $mail=$value;
    if(isset($_SESSION["email"])){
        if($mail ==  $_SESSION["email"]){
            return true;
        }
        else{
                $conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");
                $sql = "SELECT * FROM Utenti WHERE mail = '".$mail."'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $count = mysqli_num_rows($result);
                if($count == 0){
                    return true;
                    mysqli_close($conn);
                }
                else{
                    return false;
                    mysqli_close($conn);
                }

        }
    }

}
function titolo($value){
    if(isset($_SESSION["titolo"])){
        if($_SESSION["titolo"] == $value){
            echo "selected";
        }
    }
}

?>
