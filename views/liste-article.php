<?php

require_once __DIR__ . '/header.php'; ?>
<?php require_once __DIR__ . '/nav.php';
?>
<h1 class="ml-4">Liste des articles</h1>

<div class="d-flex flex-wrap justify-content-between"  >

<?php foreach ($articles as $a) { ?>
  <div class="card text-left m-4" style="width: 28%">
    <img src="<?= $a->image ?>" class="card-img-top" alt="...">
    <div class="card-body">
      

      <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $a->auteur ?></li>
        <li class="list-group-item"><?= $a->titre ?></li>

      </ul>
      <p class="card-text">
     

        <a class="btn btn-primary" href="index.php?route=detail&id=<?= $a->id ?>">Lire</a>
        


        <?php if (!empty($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>
      
        <div>
        <a class="btn btn-warning" href="index.php?route=modif&id=<?= $a->id ?>">modifier</a>
      </div>
    
        <a class="btn btn-danger mt-3" href="index.php?route=sup-article&id=<?= $a->id ?>" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
      <?php endif; ?>

      </p>
    </div>
  </div>


<?php } ?>

<?php

require_once __DIR__ . '/footer.php'; ?>