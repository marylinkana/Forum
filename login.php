<?php
     require("includes/header.php");
?>


<?php
     if(isset($_POST['submit']))//si formulaire validé
	 {
	 $email=$_POST['email'];
	 $mdp=sha1($_POST['mdp']);
	 
	 $requete=$bdd->query("SELECT * FROM users WHERE email='$email' AND mdp='$mdp'");
	 if($reponse=$requete->fetch())
	 {
		 $_SESSION['connect']=true;
	     $_SESSION['id_u']=$reponse['id_u'];
		 header("location:index.php");//redirection
	 }
	 else
	 {
		 echo"<p class='red'>Adress mail ou mot de passe incorrect</p>";
	 }
	 }
?>
 <img class="logologin" src="image/logoco.jpg" alt="img">
<form class="login2" action="#" method="post"enctype="multipart/form-data">
	 <input type="email" name="email" id="email" placeholder="Adress email..."/></br></br>
	 <input type="password" name="mdp" id="mdp" placeholder="Mot de passe..."/></br></br>
	 <input type="submit" name="submit"/></br></br>
	 <a href="inscription.php">Pas encore inscrit?</a><br><br>
	 <a href="generer.php">Mot de passe oublié?</a><br><br>
</form>
<?php 
      require("includes/footer.php");
?>   