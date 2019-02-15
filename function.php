<?php
    function bdd(){
		try
		{
			$pdo_option[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXPECTION;
			$bdd = new PDO('mysql:host=localhost;dbname=forumitic","root","root",$pdo_option);')
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		return $bdd;
    }
?>