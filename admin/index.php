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
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title> Site CV : <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?> </title>
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="../framework/font-awesome-4.7.0/css/font-awesome.min.css">
			<link href="https://fonts.googleapis.com/css?family=Merriweather|Ubuntu" rel="stylesheet">
	</head>
		<body>
			<header>
			<?php include("admin_nav.php");  ?>
			</header>
			<div id="date">
			
			<h2 id="salut">Hello Yannis</h2>
		

			<?php $date = date("d M Y"); $heure = date("H:i:s");?>
			<p class="txt" style="display:inline-block;margin-top: 58px;margin-left: 35px;"><?php echo 'Nous sommes le '. $date . ' et il est ' . $heure; ?> </p>
           
			<img src="../img/HypeBart_IG.jpg" style="margin-bottom: 0px;float:left" alt="img">

			</div>
		</body>
			<footer>
			<?php include("admin_footer.php");  ?>	
			</footer>
</html>
