<?php include('header.php'); ?>
				
<section>
	<div class="row">
		<div class="col-xs-12 i-fond">
			<div id="imagesRestos" style="display:flex; flex-direction: column; justify-content: center;" class="imagesIndex">
				<h1 id="textVille" class="text-center-xs txt-white">RATATOUILLE</h1>
				<p id="textRestos" style="color: white; margin-left:20px; margin-right:20px;" class="text_pres text-center-xs">La franchise ratatouille vous présente ses restaurants. Dans un esprits d’authenticité et de savoir faire traditionnelle, les différents restaurants vous proposent de savoureux plats réalisé à partir de produits locaux et de grandes qualités. Les restaurants ratatouille vous accueille du lundi au dimanche dans un cadre chaleureux et conviviale.</p>
			</div>
		</div>
	</div>
	<div class="restos">
		<ul style="display: flex; flex-wrap: wrap; margin-bottom: 2em;" class="center-block">
			<h1 class="col-xs-5" style="margin-bottom: 1em; min-width: 250px; color: #4B4E58;">LES NOUVEAUX RESTOS:</h1>
			<li><img id="ratatouille" src="images/mini-ratatouille.jpg" alt="restaurants de Ratatouille" onclick="changeImage('ratatouille');" class="pointer"/></li>
			<li><img id="laloupe" src="images/mini-laloupe.jpg" alt="restaurant Toulouse" onclick="changeImage('laloupe');" class="pointer"/></li>
			<li><img id="lyon" src="images/mini-lyon.jpg" alt="restaurant de lyon" onclick="changeImage('lyon');" class="pointer"/></li>
			<li><img id="bordeaux" src="images/mini-bordeaux.jpg" alt="restaurant de lyon" onclick="changeImage('bordeaux');" class="pointer"/></li>
		</ul>
	</div>
</section>
<?php include('footer.php'); ?>

