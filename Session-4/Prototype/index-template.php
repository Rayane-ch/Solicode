<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Mon Portfolio — Projets</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>Mon Portfolio</h1>
		<p>Mes réalisations web, JavaScript et Desktop</p>
		<div class="status">
			<span>Total: <strong><?= $total ?></strong>Project</span>
			<span>Terminé : <strong><?= $termines ?></strong></span>
		</div>
	</header>

	<main class="conteneur">
		<section class="grille-projets">
			<?php foreach($projects as $project): ?>
				<article class="carte-projet">
					<img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['titre']) ?>">

			<div class="carte-contenu">
				<div class="carte-badges">
					<span class="categorie"><?= htmlspecialchars($project['category']) ?></span>
					<span class="status <?= $project['status'] === 'Terminé' ? 'termine' : 'en-cours' ?>">
						<?= htmlspecialchars($project['status']) ?>
					</span>
				</div>

				<h2><?= htmlspecialchars($project['titre']) ?></h2>
				<p><?= htmlspecialchars($project['description']) ?></p>

				<div class="technologies">
					<?php foreach ($project['technologies'] as $tech): ?>
						<span class="tech-tag"><?= htmlspecialchars($tech) ?></span>
					<?php endforeach; ?>
				</div>
			</div>
				</article>
			<?php endforeach; ?>
		</section>
	</main>
</body>
</html>
