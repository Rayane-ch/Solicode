<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>3D Asset Vault</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<header class="navbar">
		<h1 class="logo">3D Asset Vault</h1>
		<nav>
			<a href="#models">Models</a>
			<a href="#categories">Categories</a>
			<a href="#how">How it works</a>
		</nav>
		<div class="buttons">
			<a href="#" class="btn-light">Log in</a>
			<a href="#" class="btn">Sign up</a>
		</div>
	</header>

	<section class="hero">
		<h2>Find 3D models for your next project</h2>
		<p>Browse <?= $totalModels ?> Blender, FBX and OBJ files (<?= $freeModels ?> free assets available).</p>
		<form class="search">
			<input type="text" placeholder="Search for a sword, tree, car...">
			<button type="submit">Search</button>
		</form>
	</section>

	<section class="section" id="categories">
	<h2>Categories</h2>
		<div class="categories">
		<?php foreach ($categories as $category): ?>
			<a href="#"><?= htmlspecialchars($category) ?></a>
		<?php endforeach; ?>
		</div>
	</section>

	<section class="section" id="models">
		<h2>Popular models (<?= $totalModels ?>)</h2>
		<div class="grid">
			<?php foreach ($models as $model): ?>
				<article class="card">
					<div class="thumb <?= htmlspecialchars($model['color']) ?>">
						<?= htmlspecialchars($model['icon']) ?>
					</div>

					<div class="info">
						<a href="page-1.html?id=<?= $model['id'] ?>">
							<strong><?= htmlspecialchars($model['title']) ?></strong>
						</a>
						<p class="owner">by <?= htmlspecialchars($model['owner']) ?></p>
						<p class="specs">
							<?= number_format($model['polygons']) ?> polygons · <?= htmlspecialchars($model['format']) ?>
							<?= $model['polygons'] < 10000 ? '· Low-poly' : '' ?>
						</p>
						<p class="price">
							<?= $model['price'] === 0 ? 'Free' : '$' . $model['price'] ?>
						</p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="section" id="how">
		<h2>How it works</h2>
		<div class="steps">
			<div class="step">
				<h3>1. Create an account</h3>
				<p>Choose to be a buyer or a 3D creator.</p>
			</div>
			<div class="step">
				<h3>2. Upload or browse</h3>
				<p>Creators upload models. Buyers filter by category and format.</p>
			</div>
			<div class="step">
				<h3>3. Download</h3>
				<p>Get the files and rate the model.</p>
			</div>
		</div>
	</section>

	<footer class="footer">
		<p>3D Asset Vault - Solicode project</p>
	</footer>

</body>
</html>
