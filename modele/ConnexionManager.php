<?php
	/**
	 * Connexions à la base de données
	 */
	class ConnexionManager
	{
		public static function getInstance()
		{
			try
			{
				$bdd = new PDO('mysql:host=localhost;port=3308;dbname=mglsi_news;charset=utf8', 'root', 'passer');
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch (Exception $e)
			{
				echo "Erreur de connexion à la base de données : ".$e->getMessage();
				$bdd = null;
			}
			return $bdd;
		}
	}
?>