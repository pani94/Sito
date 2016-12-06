<?php
    include "php/function.php";
    session_start();
    autorizza();


?>

<!DOCTYPE html>
<html>

    <head>
        <title>Tutor.it</title>
        <link rel="stylesheet" type="text/css" href="css/stile.css"/>
        <link rel="stylesheet" type="text/css" href="css/stilemodifica.css"/>
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
     <form name ="myForm" method="post"  action="php/actionmodificapass.php" onsubmit= "return checkFormPass()">

      <fieldset >
        <legend>Modifica</legend>
          <table>
              <tr>
                  <td>Vecchia password</td>
                  <td><input type="password" name="oldpassword" id="oldpassword"  oninput="pulisci(this.id)"> <span id="erroldpassword"> <?php  regErr("oldpassword");  ?>  </span> </td>

              </tr>

              <tr>
                  <td>Nuova password</td>
                  <td><input type="password" name="password" id="password"  onblur= "return validate(this.id)" oninput="pulisci(this.id)"> <span id="errpassword"> <?php regErr("password");  ?>  </span></td>

              </tr>

               <tr>
                 <td>Ripeti password</td>
                 <td><input type="password" name="password1" id="password1"  onblur= "return confirm(this.id)" oninput="pulisci(this.id)"> <span id="errpassword1"> <?php regErr("password1"); ?>  </span></td>

             </tr>
          </table>

      </fieldset>



         <input type="submit" id="bottone" value="Modifica">
    </form>
        </div>
        <div id = "successo">
            <?php succMod(); ?>
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
