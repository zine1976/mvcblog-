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
        <p article="auteur:<?= $article->auteur ?>"><?= $article->auteur ?></p>
    </dd>
    

    <dt>titre</dt>
    <dd>
        <p article="titre:<?= $article->titre ?>"><?= $article->titre ?></p>
    </dd>

    <dt>image</dt>

    <dd> <img src="<?= $a->image ?>" class="card-img-top" alt="...">

</dd> 
</dl>

<?php 

require_once __DIR__ . '/footer.php';?>
