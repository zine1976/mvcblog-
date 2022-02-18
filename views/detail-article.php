<?php 

require_once __DIR__ . '/header.php';?>
<?php require_once __DIR__ . '/nav.php';
?>

<h1><?= nom($article) ?></h1>

<dl>
    <dt>article</dt>
    <dd><?= nom($article) ?></dd>

    <dt>auteur</dt>
    <dd>
        <a href="prix:<?= $article->auteur ?>"><?= $article->auteur ?></a>
    </dd>

    <dt>titre</dt>
    <dd>
        <a href="stock:<?= $article->titre ?>"><?= $article->titre ?></a>
    </dd>

    <dt>image</dt>
    <dd><a href="image:<?= $article->image ?>"><?= $article->image ?></dd>
</dl>

<?php 

require_once __DIR__ . '/footer.php';?>
