<?php require '../connexion/connexion.php'; ?>
<?php //Recuperation de la competence a modifier
$id_experiences = $_GET['id_experiences'];
$sql= $pdo->query(" SELECT * FROM t_experiences WHERE id_experiences = '$id_experiences'");
$ligne_experiences = $sql->fetch();

/**/



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
		 	<header>
				<h1>Yannis Admin</h1>
				<?php echo $ligne_experiences['id_experiences'];  ?>
				<nav class="liste">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="utilisateur.php">Utilisateur</a></li>
						<li><a href="experiences.php">Experiences</a></li>
						<li><a href="loisir.php">Loisir</a></li>
						<li><a href="competences.php">competences</a></li>
					</ul>
				</nav>
			</header>
			<h2> Modif experiences</h2>
			<div>
			
			</div>
			<div>
				<form action="modif_e.php" method="post" class="formulaire">
					<fieldset>
						<label>Titre experience</label>
						<input type="text" name="experiences" value="<?php echo $ligne_experiences['titre_e'];  ?>">
						<input hidden name="id_experiences" value="<?php echo $ligne_experiences['experiences'];  ?>">
						<label>sous-titre experiences</label>
						<input type="text" name="sous_titre_e" value="<?php echo $ligne_experiences['sous_titre_e'];  ?>">
						<label>Date</label>
						<input type="text" name="date" value="<?php echo $ligne_experiences['date'];  ?>">
						<label>Description</label>
						<textarea name="description"><?php echo $ligne_experiences['description'];  ?></textarea>

						<label></label>
						<input type="submit" value="modifier la experiences">

					</fieldset>
				</form>
				
					
				 
			</div>
			<footer>
			<?php include("admin_footer.php") ;  ?>	
			</footer>
	</body>
</html>