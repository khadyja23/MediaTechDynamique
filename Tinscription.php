<?php

 if (isset($_POST['inscrire'])) {

  //$nom = ($_POST['nom']);
  //$email=($_POST['email']);
  //$login=($_POST['login']);
  //$pwd=($_POST['pwd']);
  extract($_POST);
   include'connectbd.php';
    $result=$mabase->query("INSERT INTO user (nom,email,login,pwd) VALUES ('$nom','$email','$login','$pwd')");
    
    header('location:index.php');
  
 }
 
?>