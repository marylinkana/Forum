<?php
     require("includes/header.php");
?>
<?php
    if(isset($_POST['submit']))
	{
		$login = $_POST['login'];
		$mdp = sha1($_POST['mdp']);
		$email = $_POST['email'];
		
		$requete = $bdd->query("INSERT INTO users(login , mdp , email) values ('$login' , '$mdp' , '$email' )");
		
		header("location:login.php");
	}
?>

                  <img class="ins1" src="image/logoins1.jpg" alt="img">

                      <div class="ins2">
	                         <form action="#" method="post" enctype="multipart/form-data">
		                        <p>
		                           <input type="text" name="login" placeholder="Login..."required/></br></br>
	                               <input type="email" name="email" placeholder="Adresse email..."required/></br></br>
	                               <input type="password" name="mdp" placeholder="mot de passe..."required/></br></br>
	                               <input type="submit" name="submit"/></br></br>
			                    </p>
                             </form>
	                   </div>
	   
<?php 
              require("includes/footer.php");
?>