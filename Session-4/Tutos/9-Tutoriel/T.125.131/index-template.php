<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= htmlspecialchars($article['titre']) ?></title>
</head>
<body>
	<main>
		<h1><?= htmlspecialchars($article['titre']) ?></h1>
		<p><?= htmlspecialchars($article['contenu']) ?></p>
	</main>
</body>
</html>
