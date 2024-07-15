<!DOCTYPE html>
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	<!--<h1>Actualités du Sénégal</h1>-->
<html>
<head>
	<meta charset="utf-8">
	<title>Affichage d'un article</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
</head>
<body>
    <?php require_once 'inc/entete.php'; ?>
    <div class="container mt-4">
        <?php if (!empty($article)): ?>
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title"><?= htmlspecialchars($article->titre, ENT_QUOTES, 'UTF-8') ?></h1>
                    <span class="text-muted">Publié le <?= htmlspecialchars($article->dateCreation, ENT_QUOTES, 'UTF-8') ?></span>
                    <p class="card-text mt-3"><?= htmlspecialchars($article->contenu, ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-warning" role="alert">
                L'article demandé n'existe pas.
            </div>
        <?php endif ?>
        <?php require_once 'inc/menu.php'; ?>
    </div>

</body>
</html>