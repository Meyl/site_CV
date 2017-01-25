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
		 	<?php include("admin_nav.php");  ?>
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
			<footer class="pied">
			<?php include("admin_footer.php") ;  ?>	
			</footer>
	</body>
</html>