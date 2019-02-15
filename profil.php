<?php require"includes/header.php";?>
                  <img class="Profil1" src="image/profil.jpg" alt="img">
				  
<?php
    if(isset($_POST['submit']))
	{
		$login=$_POST['login'];
		$mdp=sha1($_POST['mdp']);
		$email=$_POST['email'];
		$requete=$bdd->query("UPDATE users SET login='$login' , mdp='$mdp' , email='$email' WHERE id_u=".$_SESSION['id_u']);
		
		echo "<p class='red'><b> Modification effectué</b></p>";
		
		
		
	}
	
	    $requete = $bdd->query("SELECT * FROM users WHERE id_u = ".$_SESSION['id_u']);
		$reponse = $requete->fetch();
		
?>
                      <div class="profil2">
	                         <form action="#" method="post" enctype="multipart/form-data">
		                        <p>
		                           <input type="text" name="login" placeholder="Login..."required value="<?php echo $reponse['login']; ?>"/></br></br>
	                               <input type="email" name="email" placeholder="Adresse email..."required value="<?php echo $reponse['email']; ?>"/></br></br>
	                               <input type="password" name="mdp" placeholder="mot de passe..."required/></br></br>
	                               <input type="submit" name="submit"/></br></br>
			                    </p>
                             </form>
	                   </div>
	   
<?php 
				
                require("includes/footer.php");
?>