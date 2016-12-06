<?php
    include "function.php";
    session_start();
    autorizza();



?>

<!DOCTYPE html>
<html>

    <head>
        <title>Tutor.it</title>
        <link rel="stylesheet" type="text/css" href="../css/stile.css"/>
        <link rel="stylesheet" type="text/css" href="../css/stilemodifica.css"/>
        <script src="../js/form.js" ></script>
    </head>

    <body>
        <div id ="pos_barra">
        <ul>
          <li><a class="active menutitolo " href="../index.php" >Tutor.it</a></li>
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
         <form method="post" action="actionpreferenze.php">
              <h3>Quali sono le tue materie preferite?</h3>
              <input type="checkbox" name="interessi[]" value="matematica"/> Matematica <br/><br/>
              <input type="checkbox" name="interessi[]" value="italiano"/> Italiano<br/><br/>
              <input type="checkbox" name="interessi[]" value="latino"/> Latino<br/><br/>
              <input type="checkbox" name="interessi[]" value="inglese"/>
              Inglese<br/><br/>
              <input type="checkbox" name="interessi[]" value="Francese"/> Francese<br/><br/>
              <input type="checkbox" name="interessi[]" value="tedesco"/>  Tedesco<br/><br/>
              <input type="checkbox" name="interessi[]" value="informatica"/> Informatica<br/><br/>

              <input type="submit" id="bottone" value="Invia il modulo"/>
        </form>
        </div>
        <div id = "successo">
            <?php succMod(); ?>
            </div>
        <div id = "footer">
            <p class="box_left"><a href="#">Contatti</a><br><a href="#">FAQ</a>
             <p class="box_right"><a href="#">Privacy</a><br><a href="#">Termini e condizioni</a>
             </p>
            <img src="../Images/facebook.png" alt="facebook" id="pos_face">
             <img src="../Images/twitter.png" alt="twitter" id="pos_twitter">
             <img src="../Images/google_plus.png" alt="google_plus" id="pos_google">
             <img src="../Images/you-tube.png" alt="youtube" id="pos_youtube">

        </div>



    </body>
</html>
