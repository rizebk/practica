<?php
  include_once 'conn.php';

  $prenume = $_POST['prenume'];
  $nume = $_POST['nume'];
  $email = $_POST['email'];
  $parola = $_POST['parola'];

  $sql = "INSERT INTO users (userPrenume, userNume, userEmail, userParola)
  VALUES ('".$_POST['prenume']."','".$_POST['nume']."','".$_POST['email']."','".$_POST['parola']."');";
  mysqli_query($conn, $sql);
header('Location: index.html');
 ?>
