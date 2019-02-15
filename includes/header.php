
<?php
     session_start();
	 
	 try
	 {
		 $bdd=new PDO(
		 "mysql:host=localhost;dbname=forumitic","root","");
	 }
	 catch(Exception $e)
	 {
		 die("BDD non trouvee");
	 }
?>
<html>
    <head>
        <title>entrepeneurs_leaders</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/test.css" type="text/css" media="screen" charset="utf-8">
    </head>
    <body>
	    <nav>
		    <ul>

				
				<?php
				if(isset($_SESSION['connect']))
				{
					
					
					$requete = $bdd->query("SELECT * FROM users WHERE id_u = ".$_SESSION['id_u']);
		            $reponse = $requete->fetch();
					?>
					<div class="menu">
					   <ul class="cat">
					     <li><a href="#"><h3>CATEGORIES</h3></a>
						    <ul>
						        <li><a href="categorie.php?id_cat=1"><h2> ENTREPREUNEURE</h2></a>
								<li><a href="categorie.php?id_cat=2"><h2> ENTREPREUNEUR </h2></a>
								<li><a href="categorie.php?id_cat=3"><h2> BUSINESS ENGLISH</h2></a>
								<li><a href="categorie.php?id_cat=4"><h2> SOLUTION </h2></a>
								<li><a href="categorie.php?id_cat=5"><h2> FORMATION </h2></a>
								<li><a href="categorie.php?id_cat=6"><h2> SERVICES </h2></a>
								<li><a href="categorie.php?id_cat=7"><h2> CAOCHING </h2></a>
								<li><a href="categorie.php?id_cat=8"><h2> SECURITE </h2></a>
								<li><a href="categorie.php?id_cat=9"><h2> MANAGEMENT </h2></a>
                            </ul>
                        </li>							
					   </ul>
					     <li><h3><a class="logout" href="logout.php">DECONNEXION</a></h3></li>
						 <li><h3><a class="accueil" href="index.php"> ACCUEIL</a></h3></li>
						 <li><h3><a class="profil" href="profil.php"> PROFIL</a></h3></li>
						 <?php echo' Bienvenue ' .$reponse ['login'];
						       echo' ,   '. strftime(' <strong>%d %B %Y</strong>,
						              <strong> %Hh%M</strong>'); ?>
						        
					</div>
					<img class="imghead" src="image/head2.jpg"  alt="img">

						
					 
					<?php
				}
				else
			    {
					?>
					<ul class="menu">
					    <li><h3><a class="login" href="login.php">CONNEXION</a></h3></li>
						<li><h3><a class="accueil" href="index.php"> ACCUEIL</a></h3></li>
					    <li><h3><a class="ins" href="inscription.php">INSCRIPTION</a></h3></li>
						<?php echo' Bienvenue';
						       echo', nous sommes le : '. strftime(' <strong>%d %B %Y</strong>,
						             et il est : <strong> %Hh%M</strong>'); ?>
					</ul>
					<img class="imghead" src="image/heada.jpg"  alt="img">
					  
					<style> body {background:white;} 
					        .couleurpost{color:black;}</style>
					
					<?php
				}
				?>
			

	    