<?php
    include "function.php";
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="..css/stileHome.css"/>
         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
         <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="..js/autocomplete.js"> </script>
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
        <div id ="pos_centro" ><img src = "Images/libro.jpg" alt="libro" height="100%" width="100%"></div>
        <p id="pos_scritta">Trova il tutor adatto a te</p>
        <form>
          <input id = "pos_materia" type="text" name="search" placeholder="Materia">
          <input id = "pos_citta" type= "text" name="search" placeholder="Citt&agrave;">
        </form>
        <button id ="pos_bottone" class="button button2">Cerca</button>
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
