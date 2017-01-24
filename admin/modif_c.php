<?php require '../connexion/connexion.php'; ?>


<?php 
//mise a jour de la compétence
if(isset($_POST['competence'])){
	if ($_POST['competence']!='') { // ! et = '' veut n'est pas vide
		$competence = addslashes($_POST['competence']); //addslashes permet d'echapper les contenus  pour eviter le piratage 
		$id_competence = $_POST['id_competence'];

		$pdo->exec(" UPDATE t_competences  SET competence='$competence' WHERE id_competence='$id_competence' ");
		header('location: competences.php');
		exit();
	}

}


//Recuperation de la compétence a modifier
$id_competence = $_GET ['id_competence'];
$sql= $pdo->query(" SELECT * FROM t_competences WHERE id_competence = '$id_competence'");
$ligne_competence = $sql->fetch();



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
			<h2> Modif Competences</h2>
			<div>
				<form action="modif_c.php" method="post" class="formulaire">
					<fieldset>
						<label>Competences</label>
						<input type="text" name="competence" value="<?php echo $ligne_competence['competence'];  ?>">

						<input hidden name="id_competence" value="<?php echo $ligne_competence['id_competence'];  ?>">


						<label></label>
						<input type="submit" value="modifier la compétences">

					</fieldset>
				</form>
				
					
				 
			</div>
			<footer class="pied">
			<?php include("admin_footer.php") ;  ?>	
			</footer>
	</body>
</html>