<?php
      require("includes/header.php");
	  
	  $requete = $bdd->query("SELECT count(*) AS nb FROM posts");
	  $reponse = $requete->fetch();
	  $nb = $reponse['nb'];
	  $perPage = 2;
	  
	  if(isset($_GET['page']))
	  {
		  $page = ($_GET['page']*$perPage);
	  }
	  else
	  {
		  $page = 0;
	  }
	  
	  $requete = $bdd->query("SELECT * FROM posts LIMIT ".$page.",".$perPage);
	  
	  while($reponse = $requete->fetch())
	  {
		  echo "<p>".$reponse['contenu']."</p>";
	  }
	  
	  for($i = 1; $i <= 2; $i++)
	  {
		  echo "<a href='index.php?page=".($i-1)."'>".$i."</a>";
	  }
	  
	   $requete = $bdd->query("SELECT * FROM posts");
	  
	  if(isset($_GET['id_p']))
	  {
		  $requete = $bdd->query("DELETE FROM posts WHERE id_p=".$_GET['id_p']);
	  }
	  
	  if(isset($_POST['submit']))
	  {
		  $bdd->query("INSERT INTO posts(contenu,id_t,id_u)VALUES('$commentaire',1,".$_SESSION['id_u'].")");
	  }
      
	  $requete = $bdd->query("SELECT * FROM posts");
	  
      while($reponse=$requete->fetch())
	  {
		 if($reponse['id_u'] == $_SESSION['id_u'])
		 {
			 echo"<a href='index.php?id_p=".$reponse['id_p']."'>supprimer</a>";
		 }
		 echo"<p>".$reponse['contenu']."</p>";
	  }
	   if(isset($_SESSION['connect']))
				{

	   ?>

<form action="#" method="post">
  <textarea name="post" id="post" cols="30" rows="10"></texarea><br>
  <input type="submit" name="submit" value="post"/>
</form>

