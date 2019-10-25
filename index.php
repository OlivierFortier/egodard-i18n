<!-- DÉBUT : partie commune - haut de page -->
<?php

	//obtenir la page actuelle
    $page = "accueil";
	
	include("inclusions/haut-de-page.php");

?>
<!-- FIN : partie commune - haut de page -->
			<div class="accueil-principal">
				<div class="diaporama">
					<div class="masque">
						<div class="diapos" style="margin-left: 0px;">
							<article>
								<img src="ressources/images/diaporama/diapo1.jpg" alt="<?= $altImgDiapo1; ?>">
								<div class="etiquette"><?= $titreDiapo1; ?>
									<div class="sous-etiquette"><?= $dateDiapo1; ?></div>
								</div>
							</article>
							<article>
								<img src="ressources/images/diaporama/diapo2.jpg" alt="<?= $altImgDiapo2; ?>">
								<div class="etiquette"><?= $titreDiapo2; ?></div>
							</article>
							<article>
								<img src="ressources/images/diaporama/diapo3.jpg" alt="<?= $altImgDiapo3; ?>">
							</article>
						</div>
					</div>
					<div class="controleur"></div>
				</div>
				<p>
					<?= $paragraphe1; ?>
				</p>
				<p>
					<?= $paragraphe2; ?>
				</p>
			</div>
<!-- DÉBUT : partie commune - bas de page -->
<?php
	include("inclusions/bas-de-page.php");
?>		
<!-- FIN : partie commune - bas de page -->