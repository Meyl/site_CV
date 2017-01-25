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

		unset($_SESSION['connexion']); // on supprime cette variable

		session_destroy();// on detruit la session

		header('location:../index.php');
	}
  ?>
<?php //Isertion d'une experiencess 

if (isset($_POST['titre_e'])){

	if($_POST['titre_e']!='' && $_POST['sous_titre_e']!='' && $_POST['date']!='' && $_POST['description']!=''){
		$titre_e= addslashes($_POST['titre_e']);
		$sous_titre_e = addslashes($_POST['sous_titre_e']);
		$date = addslashes($_POST['date']);
		$description = addslashes($_POST['description']);

		$pdo->exec("INSERT INTO t_experiences VALUES (NULL, '$titre_e', '$sous_titre_e', '$date', '$description', '1') ");

		header("location: ../admin/experiences.php");
		exit();
	}

}
//Suppression d'une experiences
if(isset($_GET['id_experiences'])){
	$efface = $_GET['id_experiences'];
	$sql = "DELETE FROM t_experiences WHERE id_experiences = '$efface' ";
	$pdo -> query($sql);
header('location: ../admin/experiences.php');
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
			<h2>Experiences</h2>
			<div>
				<?php //Affiche un seul enregistrement
				$sql= $pdo->prepare("SELECT * FROM t_experiences");
				$sql->execute();
				$nbr_experiences = $sql->rowCount();
				?>
			</div>
			<p>il y a <?php echo $nbr_experiences; ?> experiences </p>
			<div>
				<form action="experiences.php" method="post" class="formulaire">
					<fieldset>
						<label>titre experiences</label>
						<input type="text" name="titre_e">
						<label>sous-titre experiences</label>
						<input type="text" name="sous_titre_e">
						<label>Date</label>
						<input type="text" name="date">
						<label>Description</label>
						<textarea name="description"></textarea>
						<label></label>
						<input type="submit" value="inserer une expérience">

					</fieldset>
				</form>
				<?php while($ligne=$sql ->fetch()){ 
					echo $ligne['titre_e'].' 
					<a href="modif_e.php?id_experiences='. $ligne['id_experiences'].'">Modifier</a>
					<a href="experiences.php?id_experiences='. $ligne['id_experiences'].'">Supprimer</a> <br>';
				}
					
				 ?>
			</div>
			<footer class="pied">
			<?php include("admin_footer.php") ;  ?>	
			</footer>
	</body>
</html>