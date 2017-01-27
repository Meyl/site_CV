<?php require '../connexion/connexion.php'; ?> 
<?php //Affiche un seul enregistrement
				$sql= $pdo->query("SELECT * FROM t_utilisateur");
				$ligne = $sql->fetch();
				
				?>
				
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title> Site CV : <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?> </title>
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="../framework/font-awesome-4.7.0/css/font-awesome.min.css">
			<link href="https://fonts.googleapis.com/css?family=Merriweather|Ubuntu" rel="stylesheet">
	</head>
		<body>
		 	<header>
				<?php include("admin_nav.php");  ?>
			</header>
			<div>
			<div class="infos">
			<h3>Prenom Nom:</h3>
			<p><?php echo $ligne['nom'].' '.$ligne['prenom']; ?></p><br>
			</div>
			<div class="infos">
			<h3>Email</h3>
			<p><?php echo $ligne['email']; ?></p><br>
			</div>
			<div class="infos">
			<h3>Age Sexe :</h3>
			<p><?php echo $ligne['age'].' '.$ligne['sexe']; ?></p><br>
			</div>
			<div class="infos">
			<h3>Statut Marital</h3>
			<p><?php echo $ligne['statut_marital']; ?></p><br>
			</div>
			<div class="infos">                     
			<h3>Adresse :</h3>
			<p><?php echo $ligne['adresse'].' '.$ligne['code_postal'].' '.$ligne['ville']; ?></p><br>
			</div>
			<div class="infos">
			<h3>Telephone:</h3>
			<p><?php echo $ligne['tel']?><p>
			</div>
			<div class="infos">
			<h3>Pays</h3>
			<p><?php echo $ligne['pays']; ?></p><br>
			</div>
			<div class="infos">
			<h3>Etat Civil</h3>
			<p><?php $ligne['etat_civil'] ; ?></p><br>
			</div>
			<div class="infos">
			<h3>Mdp</h3>
			<p><?php echo $ligne['mdp']; ?></p><br>
			</div>
			<div class="infos">
			<h3>Avatar</h3>
			<p><img src="../img/<?php echo $ligne['avatar']; ?>" width="99px" height=""><p><br>
			</div>
			<div class="infos">
			<h3>Pseudo</h3>
			<p><?php echo $ligne['pseudo'].' '.$ligne['notes']; ?></p>
			</div>

			<footer class="pied">
			<?php include("admin_footer.php");  ?>	
			</footer>