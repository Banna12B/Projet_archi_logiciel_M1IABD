<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualités </title>
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php require_once 'inc/entete.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <div id="" class="col-12">
                <?php if (!empty($articles)): ?>
                    <?php foreach ($articles as $article): ?>
                        <div class="col-sm-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a class="article_title" href="index.php?action=article&id=<?= htmlspecialchars($article->id, ENT_QUOTES, 'UTF-8') ?>">
                                            <?= htmlspecialchars($article->titre, ENT_QUOTES, 'UTF-8') ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?= htmlspecialchars(substr($article->contenu, 0, strrpos(substr($article->contenu, 0, 300), ' ')), ENT_QUOTES, 'UTF-8') . '...' ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else: ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            Aucun article trouvé !
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>

    <?php require_once 'inc/menu.php'; ?>
	
</body>
</html>