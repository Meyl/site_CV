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
<?php //Isertion d'une competences 

if (isset($_POST['titre_cv'])){
	if($_POST['titre_cv']!='' && $_POST['accroche']!='' ){
		$titre_cv = addslashes($_POST['titre_cv']);
		$accroche = addslashes($_POST['accroche']);

		$pdo->exec("INSERT INTO t_titre_cv VALUES (NULL, '$titre_cv','$accroche') ");

		header("location: ../admin/titres.php");
		exit();
	}
}
//Suppression d'une competence
if(isset($_GET['id_titre'])){
	$efface = $_GET['id_titre'];
	$sql = "DELETE FROM t_titre_cv WHERE id_titre = '$efface' ";
	$pdo -> query($sql);
header('location: ../admin/titres.php');
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
		 	<?php include("admin_nav.php");  ?>
		 	</header>
			<div class="formulaire">
				<h2 class="titre">Titre</h2>
				<?php //Affiche un seul enregistrement
				$sql= $pdo->prepare("SELECT * FROM t_titre_cv");
				$sql->execute();
				$nbr_titres = $sql->rowCount();
				?>
				<p>il y a <?php echo $nbr_titres; ?> titres cv </p>
				<form action="titres.php" method="post" >
					<fieldset>
						<label>Titre CV</label>
						<input type="text" name="titre_cv">
						<label>accroche</label>
						<input type="text" name="accroche">
						<label></label>
						<input type="submit" value="Insérer mes titres">

					</fieldset>
				</form>
				<?php while($ligne=$sql ->fetch()){ 
					echo $ligne['titre_cv'].' 
					<a href="modif_t.php?id_titre='. $ligne['id_titre'].'">Modifier</a>
					<a href="titres.php?id_titre='. $ligne['id_titre'].'">Supprimer</a> <br>';
				}
					
				 ?>
			</div>
			<footer class="pied">
			<?php include("admin_footer.php") ;  ?>	
			</footer>
	</body>
</html>