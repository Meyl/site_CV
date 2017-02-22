accueil<?php require '../connexion/connexion.php'; ?>
<?php //Recuperation de la competence a modifier
$id_acceuil = $_GET['id_acceuil'];
$sql= $pdo->query(" SELECT * FROM t_acceuil WHERE id_acceuil = '$id_acceuil'");
$ligne_acceuil = $sql->fetch();

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
				<?php include("admin_nav.php");  ?>
			</header>
			<h2> Modif accueil</h2>
			<div>
			
			</div>
			<div>
				<form action="modif_aacceuil.php" method="post" class="formulaire">
					<fieldset>
						<label>Titre experience</label>
						<input type="text" name="accueil" value="<?php echo $ligne_accueil['titre_aacceuil'];  ?>">
						<input hidden name="id_accueil" value="<?php echo $ligne_accueil['accueil'];  ?>">
						<label>sous-titre accueil</label>
						<input type="text" name="sous_titre_e" value="<?php echo $ligne_accueil['sous_titre_aacceuil'];  ?>">
						<label>Date</label>
						<input type="text" name="date" value="<?php echo $ligne_accueil['date'];  ?>">
						<label>Description</label>
						<textarea name="description"><?php echo $ligne_accueil['description'];  ?></textarea>

						<label></label>
						<input type="submit" value="modifier la accueil">

					</fieldset>
				</form>
				
					
				 
			</div>
			<footer class="pied">
			<?php include("admin_footer.php") ;  ?>	
			</footer>
	</body>
</html>