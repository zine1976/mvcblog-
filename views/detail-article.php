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
        <a article="auteur:<?= $article->auteur ?>"><?= $article->auteur ?></a>
    </dd>
    

    <dt>titre</dt>
    <dd>
        <a article="titre:<?= $article->titre ?>"><?= $article->titre ?></a>
    </dd>

    <dt>image</dt>
    <dd><a article="image:<?= $article->image ?>"><?= $article->image ?></dd>
</dl>

<?php 

require_once __DIR__ . '/footer.php';?>
