<!-- DÉBUT : partie commune - haut de page -->
<?php
	//obtenir la page actuelle
	$page = "portfolio";
	
	//variables pour les miniatures
	$annees = scandir("ressources/images/portfolio", 1); //scanner le dossier en ordre inverse pour afficher exactement comme le html

	//tableau pour enlever des lettres à une alt
	$altEnlever = [".jpg","-t"];

	//inclusions
	include("inclusions/haut-de-page.php");
?>
<!-- FIN : partie commune - haut de page -->
			<div class="portfolio-principal">
				<h2><?= $titrePage; ?></h2>
				<p class="introtext">
					<?= $introTexte; ?>
				</p>
				<section class="affichage-oeuvre">
					<div class="info">
						<div class="gauche">
							<h4><?= $titreOeuvre; ?></h4>
							<p><?= $mediumOeuvre; ?></p>
						</div>
						<div class="flexibouton droite">
							<span><?= $info; ?></span>
						</div>
					</div>
					<div class="affichage-image">
						<div class="precedent gauche"><a href="#" title="<?= $ctrlGauche; ?>"></a></div>
						<div class="cadre-image">
							<img src="ressources/images/portfolio/2019/t2019-001.jpg" alt="&OElig;uvre t2019-001"/>
						</div>
						<div class="suivant droite"><a href="#" title="<?= $ctrlDroite; ?>"></a></div>
					</div>
					<div class="legende"><?= $compteImg; ?> 1 / 18</div>
				</section>
				<!-- DÉBUT : Images miniatures dans le portfolio -->
				<section class="categorie">

				<!--pour chaque dossier d'années, faire un élément article + scanner le dossier de l'année actuelle|| (j'enlève -2 au count() pour éviter les naiseries que PHP fait avec scandir)-->
					<?php for($i = 0; $i< count($annees) - 2; $i++): 
						$lesImg = scandir("ressources/images/portfolio/$annees[$i]"); //variable pour avoir les images selon l'année courante
					?>	
					<article>
						<h3><?= $annees[$i]; ?></h3>
						<ul class="miniatures">

						<!-- pour chaque image dans le dossier courant -->
						<?php for($e = 2; $e< count($lesImg); $e++): ?>
						
							<!-- si L,image est une thumbnail, effectuer son rendu -->
							<?php if(strpos($lesImg[$e],"-t")): ?>
							<li class="<?= $lesImg[$e]=="t2019-001-t.jpg" ? 'actif' : ''; ?>"><img alt="&OElig;uvre <?= str_replace($altEnlever, "" ,$lesImg[$e]); ?>" src="ressources/images/portfolio/<?= $annees[$i]; ?>/<?php echo $lesImg[$e]; ?>"/></li>
							<?php endif; ?>
		
						<?php endfor; ?>
						</ul>
					</article>
					<?php endfor; ?>
						
				</section>
				<!-- FIN : Images miniatures dans le portfolio -->
			</div>
<!-- DÉBUT : partie commune - bas de page -->
<?php
	include("inclusions/bas-de-page.php");

?>		
<!-- FIN : partie commune - bas de page -->