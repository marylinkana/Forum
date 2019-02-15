<meta charset="utf-8" />
<?php
      require("includes/header.php");
	  
	  $requete = $bdd->query("SELECT count(*) AS nb FROM posts");
	  $reponse = $requete->fetch();
	  $nb = $reponse['nb'];
				
	  if(isset($_POST['submit']))
	  {
		  $image = $_POST['file'];
		  $date = strftime('<strong>%Hh%M</strong> / <strong>%d %B %Y</strong>');
		  
		  $bdd->query("INSERT INTO posts(chemin, date_i , id_u) VALUES ('$image' , '$date' , ".$_SESSION['id_u'].")");
	  }
	  
	  if(isset($_GET['id_p']))
	     {
		  $requete = $bdd->query("DELETE FROM posts WHERE id_p=".$_GET['id_p']);
		 }
		 
	 if(isset($_SESSION['id_cat']))	
	    {		 
	      $requete = $bdd->query("SELECT titre FROM topics WHERE id_cat=".$_SESSION['id_cat']);
		  while($reponse=$requete->fetch())
		  {
	            echo"<p class='titre'><h1><b>" .$reponse['titre']."</b></h1></p>";
		  }
		}
		  
	      $requete = $bdd->query("SELECT * FROM posts");
		  while($reponse=$requete->fetch())
	        {	
				$_SESSION['id_u'] = $_SESSION['id_u'];
		        if($reponse['id_u'] == $_SESSION['id_u'])
		         {
			        echo"<a href='categorie.php?id_p=".$reponse['id_p']."'><b>SUPPRIMER</b></a>";
		         }		
                				 
			    echo"<h2><p class='couleurpost'>" .$reponse['contenu']. "</p></h2>";
				echo"<p class='red'><b>" .$reponse['date_p']. "</b></p>";
	        } 
	     
	    
	     if(isset($_SESSION['connect']))	
	   {
		  
?>

				

	   
	   
	   
<form action="#" method="post">
  <textarea name="file" id="file" cols="188" rows="5"></textarea><br>
  <input type="submit" name="submit" value="post"/>
</form>


	  

<?php
	   }
     require("includes/footer.php");
?>