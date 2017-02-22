<?php require '../connexion/connexion.php'; ?>

<?php  //mise a jour de la compétence
if(isset($_POST['loisir'])){
	if ($_POST['loisir']!='') { // ! et = '' veut dire n'est pas vide
		$loisir = addslashes($_POST['loisir']); //addslashes permet d'echapper les contenus  pour eviter le piratage 
		$id_loisir = $_POST['id_loisir'];

		$pdo->exec(" UPDATE t_loisirs  SET loisir='$loisir' WHERE id_loisir='$id_loisir' ");
		header('location: loisirs.php');
		exit();
	}

}

//Recuperation de la competence a modifier
$id_loisir = $_GET['id_loisir'];
$sql= $pdo->query(" SELECT * FROM t_loisirs WHERE id_loisir = '$id_loisir'");
$ligne_loisirs = $sql->fetch();

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
				<?php include("admin_nav.php");  ?>
			</header>
			<h2>Modif loisirs</h2>
			<div>
			
			</div>
			<div>
				<form action="modif_l.php" method="post" class="formulaire">
					<fieldset>
						<label>Titre loisirs</label>
						<input type="text" name="loisir" value="<?php echo $ligne_loisirs['titre_loisir'];  ?>">
						<input name="titre_loisir" value="<?php echo $ligne_loisirs['titre_loisir'];  ?>">
						<input type="submit" value="modifier le loisir">
					</fieldset>
				</form>
				
				 
			</div>
			<footer class="pied">
			<?php include("admin_footer.php") ;  ?>	
			</footer>
	</body>
</html>