<?php require '../connexion/connexion.php'; ?>
<?php //Isertion d'une competences 

if (isset($_POST['competence'])){
	if($_POST['competence']!=''){
		$competence = addslashes($_POST['competence']);

		$pdo->exec("INSERT INTO t_competences VALUES (NULL, '$competence') ");

		header("location: ../admin/competences.php");
		exit();
	}

}
//Suppression d'une competence
if(isset($_GET['id_competence'])){
	$efface = $_GET[id_competence];
	$sql = "DELETE FROM t_competences WHERE id_competence = '$efface' ";
	$pdo -> query($sql);
header('location: ../admin/competences.php');
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
		 	<header>
				<h1>Yannis Admin</h1>
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
			<h2>Competences</h2>
			<div>
				<?php //Affiche un seul enregistrement
				$sql= $pdo->prepare("SELECT * FROM t_competences");
				$sql->execute();
				$nbr_competences = $sql->rowCount();
				
				?>
			</div>
			<p>il y a <?php echo $nbr_competences; ?> compétences </p>
			<div>
				<form action="competences.php" method="post" class="formulaire">
					<fieldset>
						<label>Competences</label>
						<input type="text" name="competence">
						<label></label>
						<input type="submit" value="Insérer mes compétences">

					</fieldset>
				</form>
				<?php while($ligne=$sql ->fetch()){ 
					echo $ligne['competence'].' 
					<a href="modif_c.php?id_competence='. $ligne['id_competence'].'">Modifier</a>
					<a href="competences.php?id_competence='. $ligne['id_competence'].'">Supprimer</a> <br>';
				}
					
				 ?>
			</div>
			<footer>
			<?php include("admin_footer.php") ;  ?>	
			</footer>
	</body>
</html>