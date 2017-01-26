<?php require '../connexion/connexion.php'; ?>
<?php //Affiche un seul enregistrement
				$sql= $pdo->query("SELECT * FROM t_utilisateur");
				$ligne = $sql->fetch();
				
				?>
				
				<h1><?php echo $ligne['nom'].' '.$ligne['prenom']; ?> Admin</h1>
				<img src="../img/moi.jpg" style=" width:45px; height:45px;">
				<nav class="liste">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="utilisateur.php">Utilisateur</a></li>
						<li><a href="experiences.php">Expériences</a></li>
						<li><a href="loisirs.php">Loisirs</a></li>
						<li><a href="competences.php">Compétences</a></li>
						<li><a href="index.php?deconnect=oui">Deconnexion</a></li>

					</ul>
				</nav>

				