<?php

require_once __DIR__ . '/header.php'; ?>
<?php require_once __DIR__ . '/nav.php';
?>

<h1 class="ml-5"><?= $article->titre ?></h1>

<dl class="ml-5">


    <dt>auteur</dt>
    <dd>
        <p><?= $article->auteur ?></p>
    </dd>


    <dt>contenu</dt>
    <dd>
        <p><?= $article->contenu ?></p>
    </dd>

    

    <dd>
        <img src="<?= $article->image ?>" class="img-fluid object-cover mt-3 mb-5"  alt="...">

    </dd>

    

</dl>

<?php
!empty($_SESSION['utilisateur']);  ?>
<form method="post" action="<?= url('commenter&id_article=' . $article->id) ?> ">



    <div class="form-group row ml-5">
        <label for="commentaire" class="col-12 col-form-label">commentaire</label>
        <div class="col-12">


            <textarea class="form-control" name="contenu" id="contenu" placeholder="Ecrivez votre commentaire ici" rows="5"></textarea>
        </div>
    </div>

    <div class="form-group row ml-5">
        <button href="<?= url('liste&id=' . $a->id) ?>" type="submit"  class="btn btn-primary">Poster</button>

    </div>
    
</form>
<?php  ?>
<?php foreach ($commentaire as $commentaire) : ?>
    <div class="row my-2 ml-5">
        <div class="col-1">
            <img src="https://picsum.photos/40" alt="" class="rounded-circle" width="40" height="40">
        </div>
        <p class="col-10 ml-5">
            <b>Utilisateur #<?= $commentaire->id_utilisateur ?></span> <br>
            <?= $commentaire->contenu ?>
        </p>
    </div>
<?php endforeach; ?>



<?php

require_once __DIR__ . '/footer.php'; ?>