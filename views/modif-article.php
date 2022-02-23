<?php

require_once __DIR__ . '/header.php'; ?>
<?php require_once __DIR__ . '/nav.php';

?>

<h1>modifier un article</h1>


<form method="post" action="index.php?route=modif-article-handler&id=<?= $article->id ?>">


    <div class="form-group row">
        <label for="titre" class="col-12 col-form-label">titre</label>
        <div class="col-12">
            <input type="text" class="form-control" name="titre" id="titre" placeholder="titre" value="<?= $article->titre ?>" required autofocus>
        </div>
    </div>


    <div class="form-group row">
        <label for="auteur" class="col-12 col-form-label">auteur</label>
        <div class="col-12">



            <input type="text" class="form-control" name="auteur" id="auteur" placeholder="auteur" value="<?= $article->auteur ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="contenu" class="col-12 col-form-label">contenu</label>
        <div class="col-12">
            <input type="text" class="form-control" name="contenu" id="contenu" placeholder="contenu" value="<?= $article->contenu ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="contenu" class="col-12 col-form-label">image</label>
        <div class="col-12">
            <input type="url" class="form-control" name="image" id="image" placeholder="image" value="<?= $article->image ?>" required>
    
        
        </div>
    </div>

    <div class="form-group row">
        <button href="<?= url('liste&id=' . $a->id) ?>" type="submit" class="btn btn-primary">Envoyer</button>


    </div>


</form>
<?php
require_once __DIR__ . '/footer.php'; ?>