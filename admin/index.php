<?php require '../connexion/connexion.php'; ?>
<?php
	session_start();//a mettre dans toute les pas session et identification 
	// faire ensuite le require si on veut sut toutes les pages admin
	if(isset($_SESSION['connexion']) && $_SESSION['connexion']=='connecté'){ //Si la personne est connecter et la valeur est bien celle de la page authentification

		$id_utilisateur=$_SESSION['id_utilisateur'];
		$prenom=$_SESSION['prenom'];
		$nom=$_SESSION['nom'];
		//echo $8SESSION['connexion']; verification de la connexion
	}else{//l'utilisateur n'est pas connecter
		header('location:authentification.php'); 
	}

	if(isset($_GET['deconnect'])){

		$_SESSION ['connexion']='';//on vide les variables de session
		$_SESSION ['id_utilisateur']='';
		$_SESSION ['prenom']='';
		$_SESSION ['nom']='';

		unset($_SESSION['connexion']);// on supprime cette variable

		session_destroy();// on detruit la session

		header('location:../index.php');
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"
			<title>Site CV : <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?> </title>
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="../framework/font-awesome-4.7.0/css/font-awesome.min.css">
			<link href="https://fonts.googleapis.com/css?family=Merriweather|Ubuntu" rel="stylesheet">
	</head>
		<body>
		 	<header>
				<?php //Affiche un seul enregistrement
				$sql= $pdo->query("SELECT * FROM t_utilisateur");
				$ligne = $sql->fetch();
				
				?>
				<h1><?php echo $ligne['nom'].' '.$ligne['prenom']; ?> Admin</h1>
				<nav class="liste">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="utilisateur.php">Utilisateur</a></li>
						<li><a href="experiences.php">Experiences</a></li>
						<li><a href="loisir.php">Loisir</a></li>
						<li><a href="competences.php">competences</a></li>
						<li><a href="index.php?deconnect=oui">Deconnexion</a></li>

					</ul>
				</nav>
			</header>
			<div>
			<div class="titre">
			<h3>Prenom Nom:</h3>
			<p><?php echo $ligne['nom'].' '.$ligne['prenom']; ?></p><br>
			</div>
			<div class="titre">
			<h3>Email</h3>
			<p><?php echo $ligne['email']; ?></p><br>
			</div>
			<div class="titre">
			<h3>Age Sexe :</h3>
			<p><?php echo $ligne['age'].' '.$ligne['sexe']; ?></p><br>
			</div>
			<div class="titre">
			<h3>Statut Marital</h3>
			<p><?php echo $ligne['statut_marital']; ?></p><br>
			</div>
			<div class="titre">                     
			<h3>Adresse :</h3>
			<p><?php echo $ligne['adresse'].' '.$ligne['code_postal'].' '.$ligne['ville']; ?></p><br>
			</div>
			<div class="titre">
			<h3>Telephone:</h3>
			<p><?php echo $ligne['tel']?><p>
			</div>
			<div class="titre">
			<h3>Pays</h3>
			<p><?php echo $ligne['pays']; ?></p><br>
			</div>
			<div class="titre">
			<h3>Etat Civil</h3>
			<p><?php $ligne['etat_civil'] ; ?></p><br>
			</div>
			<div class="titre">
			<h3>Mdp</h3>
			<p><?php echo $ligne['mdp']; ?></p><br>
			</div>
			<div class="titre">
			<h3>Avatar</h3>
			<p><img src="../img/<?php echo $ligne['avatar']; ?>" width="99px" height="" "><p><br>
			</div>
			<div class="titre">
			<h3>Pseudo</h3>
			<p><?php echo $ligne['pseudo'].' '.$ligne['notes']; ?></p>
			</div>

			<footer class="pied">
			<?php include("admin_footer.php");  ?>	
			</footer>
			
	</body>
</html>
