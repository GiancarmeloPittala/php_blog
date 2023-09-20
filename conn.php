<?php 


$host = "localhost";
$username = "root";
$password =null;
$db = "sara";



$conn = new mysqli($host, $username, $password, $db);

if ( !$conn )
  die("Errore di connessione")


?>