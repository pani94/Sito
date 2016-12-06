<?php
    session_start();
   include "php/function.php";
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Tutor.it</title>
        <link rel="stylesheet" type="text/css" href="stile.css"/>
        <script src="js/form.js" ></script>
    </head>

    <body>
        <div id ="pos_barra">
        <ul>
          <li><a class="active menutitolo " href="index.php" >Tutor.it</a></li>
          <li id="left"><a class="menu"href="#">Materie</a></li>
          <li id="left"><a class="menu" href="#">Tutor</a></li>
          <li id="left" ><a  class="menu"href="#">Come funziona</a></li>
         <?php
           barra();

          ?>
          <li id="left"><a class="menu" href="php/profilo.php">Profilo</a></li>
        </ul>
        </div>
        <div id="pos_form">
        <form method="post" action="php/accesso.php" >
        <fieldset>
        <legend>Login</legend>
            <table>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><p >
            <?php
            if(isset($_SESSION["accesso"])){
                 if($_SESSION["accesso"] == "false"){
                 echo "Credenziali errate!";
                 $_SESSION["accesso"] = "ciao";
             }
            }

            ?>
        </p></td>
                </tr>

            </table>
      </fieldset>
        <br>
         <input type="submit" id="bottone" value="Login">
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
