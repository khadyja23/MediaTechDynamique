<?php
 if (isset($_POST['sub'])){

    $pseudo=htmlspecialchars(trim($_POST['pseudo']));
    $password=htmlspecialchars(trim($_POST['password']));

  if (empty($pseudo) or empty($password)) {

  	 echo "tu doit remplir les champs";
  } else

    if (isset($pseudo) and !empty($pseudo)){
    	
    	if (isset($password) and !empty($password)){

    		 
               //Christophe
    		 $admin1="Christophe";
    		 $mdp1="0000";

    		 //
    		 $admin2="Khadija23";
    		 $mdp2="12345";


            
            if ($pseudo===$admin1 and $password===$mdp1) {
                
                $_SESSION['admin']=$pseudo;
            	
       
    		}elseif ($pseudo===$admin2 and $password===$mdp2) {

    			  $_SESSION['admin']=$pseudo;
    		}
    		else{
    			echo "pseudo et mot de passe inconnu!";
    		}
    	}
    		
    	}else {
    		echo "vérifie ton pseudo";
    	}
 }
?>




<!DOCTYPE html>
    <html>
       <head>
	      <title>Administrateur</title>
	      <meta charset="utf-8">
       </head>
   <body>
   <h4>Espace Admin:</h4>

<?php
   if (isset($_SESSION['admin'])) {
?>   

  
        
      <h4>ARTICLE 1</h4>
         <p>Visible pour tout le monde</p>


          <h4>ARTICLE 2</h4>
         <p> Pour les administrateurs seulement</p>

<?php
}else {
?>   


<form action="" method="post" > 
    <input type="text" name="pseudo" placeholder="Insere ton pseudo"><br><br>
    <input type="password" name="password" placeholder="*******"><br><br>
    <input type="submit" name="sub" value="Connecte toi!">
   </form>
        
      <h4>ARTICLE 1</h4>
         <p>Visible pour tout le monde</p>

    <?php

    }
    ?>           
</body>
</html>