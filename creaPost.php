<?php 
  include './conn.php';


  $titolo = $_POST['titolo'];
  $desc = $_POST['desc'];
  $location = $_POST['location'];

  // sanificazione dati 


  $conn->query("insert into post (titolo,descrizione) values ('$titolo', '$desc')");
  


  header("location: $location")
  

?>
