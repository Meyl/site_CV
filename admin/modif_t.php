<?php require '../connexion/connexion.php'; ?>


<?php 
//mise a jour de la compétence
if(isset($_POST['titre_cv'])){
	if ($_POST['titre_cv']!='') { // ! et = '' veut n'est pas vide
		$titrecv = addslashes($_POST['titre_cv']); //addslashes permet d'echapper les contenus  pour eviter le piratage 
		$accroche = addslashes($_POST['accroche']);
		$id_titre = addslashes($_POST['id_titre']);

		$pdo->exec(" UPDATE t_titre_cv  SET titre_cv='$titrecv' , accroche='$accroche' WHERE id_titre='$id_titre' ");
		header('location: titres.php');
		exit();
	}

}


//Recuperation de la compétence a modifier
$id_competence = $_GET ['id_titre'];
$sql= $pdo->query(" SELECT * FROM t_titre_cv WHERE id_titre = '$id_titre'");
$ligne_titre = $sql->fetch();



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
				<?php require('admin_nav.php'); ?>
			</header>
			<h2> Modif Titres</h2>
			<div>
				<form action="modif_t.php" method="post" class="formulaire">
					<fieldset>
						<label>Titre CV</label>
						<input type="text" name="titre_cv" value="<?php echo $ligne_titre['titre_cv'];  ?>">
						<label>Accroche</label>
						<input type="text" name="accroche" value="<?php echo $ligne_titre['accroche'];  ?>">

						<input hidden name="id_competence" value="<?php echo $ligne_titre['id_titre'];  ?>">


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