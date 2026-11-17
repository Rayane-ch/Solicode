<!DOCTYPE html>
<html lang="fr">
<head>
	<title>ToDo List</title>
	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>
		<header>
			<div class="icone-titre">
				<i data-lucide="check-square"></i>
			</div>
			<div>
				<h1>Ma Todo List</h1>
				<p>Gérez et suivez vos tâches quotidiennes</p>
			</div>
		</header>

		<section class="statistiques">
				<div class="carte-stat total">
				<i data-lucide="layers"></i>
					<div>
						<span>Total</span>
						<strong><?= $total ?></strong>
						<small>tâches</small>
					</div>
				</div>

				<div class="carte-stat terminees">
					<i data-lucide="check"></i>
					<div>
						<span>Treminées</span>
						<strong><?= $finish ?></strong>
						<small>tâches</small>
					</div>
				</div>

				<div class="carte-stat restantes">
					<i data-lucide="circle"></i>
					<div>
						<span>Non terminées</span>
						<strong><?= $remain ?></strong>
						<small>tâches</small>
					</div>
				</div>
		</section>

		<section class="liste-section">
			<h2><i data-lucide="list-todo"></i>List des tâches</h2>

			<div class="grille-taches">
				<?php foreach ($taches as $tache): ?>
					<article class="carte-tache <?= $tache['terminee'] ? 'terminee' : 'non-terminee' ?>">

						<div class="statut-icone">
							<?php if ($tache['terminee']): ?>
								<i data-lucide="check-square"></i>
							<?php else: ?>
								<i data-lucide="square"></i>
							<?php endif; ?>
						</div>

						<div class="tache-info">
							<h3><?= htmlspecialchars($tache['titre']) ?></h3>
							<p><?= htmlspecialchars(substr($tache['description'], 0, 80)) ?></p>
						</div>

						<div class="tache-meta">
							<span class="badge-priorite <?= strtolower($tache['priorite']) ?>"><?= htmlspecialchars($tache['priorite']) ?></span>

							<span class="date-limite">
								<i data-lucide="calendar"></i>
								<?= date('d/m/Y', strtotime($tache['date_limite'])) ?>
							</span>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</section>
	</main>

	<script src="https://unpkg.com/lucide@latest"></script>
	<script>
		lucide.createIcons();
	</script>
</body>
</html>
