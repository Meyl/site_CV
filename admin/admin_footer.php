<?php require '../connexion/connexion.php'; ?>
<?php //Affiche un seul enregistrement
				$sql= $pdo->query("SELECT * FROM t_utilisateur");
				$ligne = $sql->fetch();
				
				?>
				<p> copyright 2017 - <?php echo $ligne['prenom'].' '.$ligne['nom']; ?></p>
				<div>
				<a href="https://github.com/"><i class="fa fa-github" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/__miyagi__/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="https://mail.google.com/"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				</div>