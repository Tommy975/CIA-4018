<?php
//if (NULL!==$_SESSION=['Commande']){
	if ((!isset($_POST['nom']) or empty($_POST['nom']))or
		(!isset($_POST['prenom']) or empty($_POST['prenom'])) or
        (!isset($_POST['email']) or empty($_POST['email'])) or
        (!isset($_POST['mdp']) or empty($_POST['mdp'])) or
		(!isset($_POST['tel']) or empty($_POST['tel'])))
		{echo "Tous les champs n'ont pas ete remplis";}
	else
		{

            include('bdd.php');
			$nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
			$email = $_POST['email'];
			$mdp = $_POST['mdp'];
			$tel = $_POST['tel'];

			
		echo " Tous les champs ont ete bien recu ";
		$requete = "INSERT INTO Membres
		(nom,prenom,tel)
		VALUES
		('$nom','$prenom','$tel')";

		if( $bdd->query($requete) == true)
		{
			$result = $bdd->query ("SELECT membreID FROM Membres WHERE tel='".$tel."'");
			$row = $result->fetch();
			echo "Le numero de ce client est : ".$row['membreID'];
			$id = $row['membreID'];
			$requete2 = "INSERT INTO Logins
			(login,mdp,membreID)
			VALUES
			( '$email','$mdp','$id')";
			if( $bdd->query($requete2) == true)
				echo" 	ajout reussi";
	
//			header('Location: Connexion.php');
		}
	}
//}
//else {
	//echo "Veuillez passer une commande avant de vous inscrire.";
	 //}
?>
