<?php
session_start();
include('bdd.php')

// Le mot de passe n'a pas été envoyé ou n'est pas bon
if (isset($_POST['login']) AND isset($_POST['mdp'] ))
{
	$login=$_POST['login'];
	$mdp=$_POST['mdp'];
	$result = $bdd->query("SELECT login,mdp
	FROM Logins
	WHERE login= '".$login."' AND password='".$mdp."' ");
	if($row = $result->fetch())
		{
		echo "console.log(\"Good !\"); Bienvenue ".$login;
		$_SESSION['login']=$login;
		echo $_SESSION['login'];
		echo "$('#connect').css('color','red')";

		echo"var couleur = $('#connect').css('color'); //un getter
		$('.connect').css('font-size', '40px');	//un setter;
		console.log(couleur);";
		header('Location: Index.php');

		}
	else
		{
		echo "Erreur d'authentification\</br>
		<a onclick='ajax(\"Connexion.html\"); return false;' href=\"Index.php\">";
		}
}
else
{
	echo "Erreur\" </br>
			<a onclick='ajax(\"Connexion.html\"); return false;' href=\"Index.php\">";
}

?>
