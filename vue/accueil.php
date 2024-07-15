<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualités</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
</head>
<body>
    <?php require_once 'inc/entete.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <div class="col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><a class="article_title" href="index.php?action=article&id=<?= htmlspecialchars($article->id, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($article->titre, ENT_QUOTES, 'UTF-8') ?></a></h5>
                                <p class="card-text"><?= htmlspecialchars(substr($article->contenu, 0, strrpos(substr($article->contenu, 0, 300), ' ')), ENT_QUOTES, 'UTF-8') . '...' ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="alert alert-info" role="alert">
                        Aucun article trouvé !
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
    
    <?php require_once 'inc/menu.php'; ?>

</html>