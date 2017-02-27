<?php require '../connexion/connexion.php'; ?> 
<?php

session_start();// à mettre dans toutes les pages SESSION et identification

if(isset($_POST['connexion'])){// on envoie le formulaire avec le name du bouton, connexion on a cliqué sur le bouton
	$email=addslashes($_POST['email']);
	$mdp=addslashes($_POST['mdp']);
	
		$sql = $pdo->prepare("SELECT * FROM t_utilisateur WHERE email='$email' AND mdp='$mdp' "); //on vérifie le courriel et le mot de passe et … 
		$sql->execute(); 
		$nbr_utilisateur= $sql->rowCount(); // … on compte, et s'il y est, le compte répond 1 sinon, le compte répond 0 (est-ce le vrai admin ou pas ?)

		if($nbr_utilisateur==0){//on ne l'a pas trouvé
			$msg_connexion_err="Erreur D'authenfication";
			}else{//on trouve l'email et le mdp c'est bien l'admin il est bien inscrit
				$ligne =$sql->fetch();// pour retrouver son nom prenom

				echo $mdp;
				

			$_SESSION['connexion']='connecté';//	
			$_SESSION['id_utilisateur']=$ligne['id_utilisateur'];	
			$_SESSION['prenom']=$ligne['prenom'];	
			$_SESSION['nom']=$ligne['nom'];

				header('location:index.php');// vers la page d'acceuil de  l'admin	
			}
}


  ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Site CV</title>
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="../framework/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
		<body>

		<div class="login">
			<h2>Bienvenue</h2>
    		<form method="post" action="authentification.php">
	    		<input type="text" name="email" placeholder="email" required="required" />
	       	 	<input type="password" name="mdp" placeholder="Password" required="required" />
	       		<button name="connexion" type="submit" class="btn btn-primary btn-block btn-large">Me connecter</button>
    		</form>
		</div>
			<footer class="pied">
			
			</footer>
	</body>
</html>
