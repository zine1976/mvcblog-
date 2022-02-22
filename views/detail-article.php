<?php

require_once __DIR__ . '/header.php'; ?>
<?php require_once __DIR__ . '/nav.php';
?>

<h1><?= $article->titre ?></h1>

<dl>


    <dt>auteur</dt>
    <dd>
        <p><?= $article->auteur ?></p>
    </dd>


    <dt>contenu</dt>
    <dd>
        <p><?= $article->contenu ?></p>
    </dd>

    <dt>image</dt>

    <dd>
        <img src="<?= $article->image ?>" class="card-img-top" alt="...">

    </dd>

    <?php foreach ($commentaire as $c) { ?>
        <dt>commentaires</dt>
        <dt><?= $c->contenu ?></dt>
    <?php } ?>

</dl>


<form method="post" action="index.php?route=commenter">



    <div class="form-group row">
        <label for="commentaire" class="col-12 col-form-label">commentaires</label>
        <div class="col-12">


            <textarea class="form-control" name="contenu" id="contenu" rows="5">Ecrivez votre commentaire ici </textarea>
        </div>
    </div>



    <div class="form-group row">
        <button href="<?= url('liste&id=' . $a->id) ?>" type="submit" class="btn btn-primary">Envoyer</button>


    </div>
</form>

<?php

require_once __DIR__ . '/footer.php'; ?>