<?php
    include "php/function.php";
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="css/style2p.css"/>
         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
         <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="autocomplete.js"> </script>
    </head>

    <body>
        <div id ="pos_barra">
        <ul>
          <li><a class="active menu_titolo " href="index.php" >Tutor.it</a></li>
          <li><a class="menu" href="#">Materie</a></li>
          <li><a class="menu" href="#">Tutor</a></li>
          <li><a class="menu" href="#">Come funziona</a></li>
            <li id ="right_log"><?php
            barra();
            ?>
            </li>

          <li id="right_pro"><a class="menu" href="php/profilo.php">Profilo</a></li>

        </ul>
        </div>
        <div id ="pos_centro" ><img src = "Images/libro.jpg" alt="libro" height="100%" width="100%"></div>
        <p id="pos_scritta">Trova il tutor adatto a te</p>
        <form>
          <input id = "pos_materia" type="text" name="search" placeholder="Materia">
          <input id = "pos_citta" type= "text" name="search" placeholder="Citt&agrave;">
        </form>
        <button id ="pos_bottone" class="button button2">Cerca</button>


        <div id="pos_contatto"><p class = "box"><a href="#">Contatti</a><br><a href="#">FAQ</a></p>
        <p class="box_right"><a href="#">Termini e condizioni</a><br><a href="#">Privacy policy</a></p>
        <img src="images/facebook.png" alt="icona facebook" id="pos_facebook">
        <img src="images/twitter.png" alt="icona twitter" id="pos_twitter">
        <img src="images/google_plus.png" alt="icona google_plus" id="pos_google">
        <img src="images/you-tube.png" alt="icona facebook" id="pos_youtube">
        </div>
    </body>
</html>
