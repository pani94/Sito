<?php
session_start();
// Password to be encrypted for a .htpasswd file
$clearTextPassword = $_SESSION["password"];

// Encrypt password
$password = crypt($clearTextPassword, base64_encode($clearTextPassword));

/* Print encrypted password
echo $password;*/
?>
