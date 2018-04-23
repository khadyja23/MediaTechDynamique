<?php

 if (isset($_POST['connect'])) {

  //$nom = ($_POST['nom']);
  //$email=($_POST['email']);
  //$login=($_POST['login']);
  //$pwd=($_POST['pwd']);
  extract($_POST);
   include'connectbd.php';
   $sql = "SELECT * FROM user WHERE email = '$email' AND pwd = '$pwd'";
   $result = $mabase->query($sql);
   
  

    if($result->num_rows == 1){
    	
      header('location: affichage-videos.php');
    }
    else{
    	
    	header('location:index.php');
    }
    
   
  
 }
 
?>