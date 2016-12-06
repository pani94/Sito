<?php
    include "function.php";
    session_start();
if(isset($_SESSION["accesso"])){
    if($_SESSION["accesso"] != "true"){
    $_SESSION["accesso"] = "ciao";
}
}


?>

<!DOCTYPE html>
<html>

    <head>
        <title>Tutor.it</title>
        <link rel="stylesheet" type="text/css" href="..css/stile.css"/>
        <script src="..js/form.js" ></script>


    </head>

    <body>



        <div id ="pos_barra">
        <ul>
          <li><a class="active menutitolo " href="..index.php" >Tutor.it</a></li>
          <li id="left"><a class="menu"href="#">Materie</a></li>
          <li id="left"><a class="menu" href="#">Tutor</a></li>
          <li id="left" ><a  class="menu"href="#">Come funziona</a></li>
             <?php
           barra();

          ?>
          <li id="left"><a class="menu" href="profilo.php">Profilo</a></li>
        </ul>

        </div>
        <div id="pos_form">
        <form method="post" action="registrazione.php" onsubmit= "return checkForm()" >
        <fieldset>
        <legend>Registrazione</legend>
            <table>
                <tr>
                    <td>e-mail</td>
                    <td><input type="text" name="mail" id="mail" onchange= "return validate(this.id)" oninput="pulisci(this.id)"> <span id="errmail"> <?php  regErr("mail"); ?>  </span></td>

                </tr>

                <tr>
                    <td>username</td>
                    <td><input type="text" name="user" id="user"  onchange= "return validate(this.id)"  oninput="pulisci(this.id)"> <span id="erruser"> <?php  regErr("user"); ?> </span></td>

                </tr>

                <tr>
                    <td>password</td>
                    <td><input type="password" name="password" id="password"  onchange= "return validate(this.id)"  oninput="pulisci(this.id)"> <span id="errpassword"> <?php  regErr("pass"); ?></span></td>

                </tr>

                <tr>
                    <td>ripeti password</td>
                    <td><input type="password" name="password1" id="password1" oninput="return confirm()"oninput="pulisci(this.id)"> <span id="errpassword1"> </span></td>

                </tr>

                <tr>
                    <td>nome</td>
                    <td><input type="text" name="nome" id="nome"  onchange= "return validate(this.id)" oninput="pulisci(this.id)"> <span id="errnome"> <?php  regErr("nome"); ?></span></td>

                </tr>

                <tr>
                    <td>cognome</td>
                    <td><input type="text" name="cognome" id="cognome"  onchange= "return validate(this.id)"oninput="pulisci(this.id)"> <span id="errcognome"><?php  regErr("cognome"); ?> </span></td>

                </tr>

                <tr>
                    <td>citt&agrave;</td>
                    <td><input type="text" name="citta" id="citta"  oninput="pulisci(this.id)"> <span id="errcitta"><?php  regErr("citta"); ?> </span></td>

                </tr>

                </table>
      </fieldset>
        <br>
         <input type="submit" id="bottone" value="Registrati">
        </form>
        </div>
        <div id = "footer">
            <p class="box_left"><a href="#">Contatti</a><br><a href="#">FAQ</a>
             <p class="box_right"><a href="#">Privacy</a><br><a href="#">Termini e condizioni</a>
             </p>
            <img src="Images/facebook.png" alt="facebook" id="pos_face">
             <img src="Images/twitter.png" alt="twitter" id="pos_twitter">
             <img src="Images/google_plus.png" alt="google_plus" id="pos_google">
             <img src="Images/you-tube.png" alt="youtube" id="pos_youtube">

        </div>



    </body>
</html>
