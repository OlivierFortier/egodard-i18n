<?php
    
    //langue par défaut
    $lang = "fr";

    //sauvegarder dans un cookie le choix de langue

    //si un choix à été fait, alors affecter à la variable
  if(isset($_COOKIE["i18n"])) {
    $lang = $_COOKIE["i18n"];
  }

// Choix de langue explicitement requis par l'utilisateur
// Vérifier si le paramètre existe avant de l'utiliser
if(isset($_GET["langue"])) {
    
    $lang = $_GET["langue"];

    // Mémoriser le choix de l'utilisateur dans un "témoin HTTP" (HTTP Cookie)
    // Écriture d'un cookie
    setcookie("i18n", $lang, time()+3600*24*365);
    setcookie("bla", "blablabla", time()+3600*24*3650);
    setcookie("yada", "yadayadayada", time()+3600*24*30);
  }

  //Inclusion des fichiers des traductions
  include("textes/$lang/commun.txt.php");
  include("textes/$lang/$page.txt.php");

  //Inclusion du fichier du code supplémentaire
  include("lib/utilitaires.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet'>
		<title>Eric Godard ::: <?= $page; ?></title>
		<meta charset="utf-8">
		<meta name="robots" content="noindex, nofollow">
		<meta name="description" content="Site Web de l'artiste-peintre Eric Godard">
		<link rel="stylesheet" href="ressources/css/normalize.css">
		<link rel="stylesheet" href="ressources/css/polices.css">
		<link rel="stylesheet" href="ressources/css/eg.css">
	</head>
	<body>
		<div id="conteneur">
			<header>
				<nav class="primaire">
					<ul class="gauche">
                        <li class="<?= $page == "accueil" ? 'actif' : ''; ?>">
                            <a href="index.php"><?= $titreNavAccueil; ?></a></li>
                        <li class="<?= $page == "portfolio" ? 'actif' : ''; ?>">
                            <a href="portfolio.php"><?= $titreNavPortfolio; ?></a></li>
						<li><a href="#"><?= $titreNavDossier; ?></a></li>
					</ul>
					<ul class="droite">
                        <?php for($i =2;  $i < count($languesDispos); $i++ ) : ?>
                            <li class = 'groupe <?= $languesDispos[$i]==$lang ? "actif": ""; ?>'>
                            <a href="?langue=<?=$languesDispos[$i]; ?>"                            
                            title="<?=$nomLangues[$languesDispos[$i]]; ?>">
                            <?= strtoupper($languesDispos[$i]); ?> |
                            </li>
                            </a>
                        <?php endfor; ?>


						<li><a href="#"><span class="icone-courriel"></span><?= $titreContact; ?></a></li>
					</ul>
				</nav>
				<h1><span>ERIC</span> GODARD</h1>
			</header>