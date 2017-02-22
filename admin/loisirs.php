<?php require '../connexion/connexion.php'; ?>
<?php
session_start();//a mettre dans toute les session et identification 
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
<?php //Isertion des loisirss 

if (isset($_POST['loisirs'])){
	if($_POST['loisirs']!=''){
		$loisirs = addslashes($_POST['loisirs']);

		$pdo->exec("INSERT INTO t_loisirs VALUES (NULL, '$loisirs') ");

		header("location: ../admin/loisirs.php");
		exit();
	}
}
//Suppression d'une loisirs
if(isset($_GET['id_loisirs'])){
	$efface = $_GET[id_loisirs];
	$sql = "DELETE FROM t_loisirs WHERE id_loisirs = '$efface' ";
	$pdo -> query($sql);
header('location: ../admin/loisirs.php');
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
				<h2 class="titre">Loisirs</h2>
				<?php //Affiche un seul enregistrement
				$sql= $pdo->prepare("SELECT * FROM t_loisirs");
				$sql->execute();
				$nbr_loisirs = $sql->rowCount();
				
				?>
				<p>il y a <?php echo $nbr_loisirs; ?> loisirs </p>
				<form action="loisirs.php" method="post">
					<fieldset>
						<label for="loisir">loisir</label>
						<input type="text" name="loisir">
						<input type="submit" value="Insérer un loisir">

					</fieldset>
				</form>
				<?php while($ligne=$sql ->fetch()){ 
					echo $ligne['loisir'].' 
					<a href="modif_l.php?id_loisir='. $ligne['id_loisir'].'">Modifier</a> 
					<a href="loisirs.php?id_loisir='. $ligne['id_loisir'].'">Supprimer</a><br>';
				}
					 '</div>';
				 ?>
			</div>
			<footer class="pied">
			<?php include("admin_footer.php") ;  ?>	
			</footer>
	</body>
</html>