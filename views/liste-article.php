<?php

require_once __DIR__ . '/header.php'; ?>
<?php require_once __DIR__ . '/nav.php';
?>
<h1>Liste des articles</h1>


<?php foreach ($articles as $a) { ?>
  <div class="card mb-4 d-inline-flex p-2 bd-highlight mt-5 " style="width: 18rem;">
    <img src="<?= $a->image ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">article</h5>

      <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $a->auteur ?></li>
        <li class="list-group-item"><?= $a->titre ?></li>

      </ul>
      <p class="card-text">
        <a class="text-align-right" href="index.php?route=detail&id=<?= $a->id ?>">detail</a>
      <div>
        <a class="text-align-right" href="index.php?route=modif&id=<?= $a->id ?>">modifier un article</a>
      </div>

      <div>
        <a class="text-align-right" href="index.php?route=sup-article&id=<?= $a->id ?>">supprimer un article</a>
      </div>

      <?php if (!empty($_SESSION['pseudo']) && $_SESSION['pseudo'] == 'Administrateur') : ?>
        <a class="text-align-right text-danger ml-2" href="index.php?route=sup-article&id=<?= $a->id ?>" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
      <?php endif; ?>

      </p>
    </div>

  </div>


<?php } ?>

<?php

require_once __DIR__ . '/footer.php'; ?>