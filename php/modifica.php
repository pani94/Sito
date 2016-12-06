<?php
    include "function.php";
    session_start();
    autorizza();



?>

<!DOCTYPE html>
<html>

    <head>
        <title>Tutor.it</title>
        <link rel="stylesheet" type="text/css" href="stile.css"/>
        <link rel="stylesheet" type="text/css" href="stilemodifica.css"/>
        <script src="form.js" ></script>
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
          <li id="left"><a class="menu" href="profilo.php">Profilo</a></li>
        </ul>

        </div>
        <div id="pos_form">
     <form name ="myForm" method="post" enctype="multipart/form-data" action="actionmodifica.php" onsubmit= "return checkFormModifica()">

      <fieldset >
        <legend>Modifica</legend>
          <table>
              <tr>
                  <td>E-mail</td>
                  <td><input type="text" name="mail" id="mail" value ="<?php
                echo $_SESSION["email"]; ?>" onchange= "return validate(this.id)" oninput="pulisci(this.id)"> <span id="errmail"> <?php  regErr("mail"); ?>  </span> </td>

              </tr>

              <tr>
                  <td>Username</td>
                  <td><input type="text" name="user" id="user" value ="<?php
                echo $_SESSION["user"]; ?>" onchange= "return validate(this.id)" oninput="pulisci(this.id)"> <span id="erruser"> <?php  regErr("user"); ?>  </span></td>

              </tr>

               <tr>
                 <td>Nome</td>
                 <td><input type="text" name="nome" id="nome" value ="<?php
                echo $_SESSION["nome"]; ?>" onchange= "return validate(this.id)" oninput="pulisci(this.id)"> <span id="errnome"> <?php  regErr("nome"); ?>  </span></td>

             </tr>

               <tr>
                 <td>Cognome</td>
                 <td><input type="text" name="cognome" id="cognome" value ="<?php
                echo $_SESSION["cognome"]; ?>" onchange= "return validate(this.id)" oninput="pulisci(this.id)"> <span id="errcognome"> <?php  regErr("cognome"); ?>  </span></td>

             </tr>

               <tr>
                 <td>Sesso</td>
                 <td><input type="radio" name="sesso" id="sesso" value="maschio" checked>Maschio
          <input type="radio" name="sesso" id="sesso" value="femmina">Femmina</td>

             </tr>


              <tr>
                 <td>Citt&agrave;</td>
                 <td><input type="text" name="citta" id="citta" value ="<?php echo $_SESSION["citta"]; ?>" onblur= "return validate(this.id)" oninput="pulisci(this.id)" > <span id="errcitta"> <?php  regErr("citta"); ?>  </span></td>

             </tr>

              <tr>
                 <td>Titolo di studio</td>
                  <td><select  name="titolo" >
             <option value="elementari" <?php titolo("elementari"); ?>>Elementari</option>
              <option value="medie" <?php titolo("medie"); ?>>Medie</option>
               <option value="diploma" <?php titolo("diploma"); ?>>Diploma</option>
                <option value="laurea" <?php titolo("laurea"); ?>>Laurea</option>

         </select></td>

             </tr>

              <tr>
                <td>Data di nascita</td>
                  <td><input type="text" name = "data" id = "data" value ="<?php
                echo $_SESSION["data"]; ?>" onchange= "return validate(this.id)" oninput="pulisci(this.id)" > <span id="errdata"> <?php  regErr("data"); ?>  </span> </td>

              </tr>

              <tr>
                <td>Telefono</td>
                  <td><input type="text" name = "telefono" id = "telefono" value ="<?php
                echo $_SESSION["telefono"]; ?>" onchange= "return validate(this.id)" oninput="pulisci(this.id)"> <span id="errtelefono"> <?php  regErr("tel"); ?>  </span> </td>

              </tr>
              <tr>
                  <td> Inserisci foto</td>
                  <td>  <input type="file" name= "upload" id= "upload"></td>
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
