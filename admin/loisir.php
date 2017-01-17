<?php require '../connexion/connexion.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Loisir</title>
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
			<h2>loisir</h2>
			<div>
			</div>
			<footer>
			<?php include("admin_footer.php") ;  ?>	
			</footer>
	</body>
</html>;
