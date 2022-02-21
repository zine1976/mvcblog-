<?php 

require_once __DIR__ . '/header.php';?>
<?php require_once __DIR__ . '/nav.php';
?>
<h1>Liste des articles</h1>


    <?php foreach ($articles as $a) { ?>
        <div class="card mb-4 d-inline-flex p-2 bd-highlight mt-5 "style="width: 18rem;">
  <img src="<?= $a->image ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">article</h5>
    
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $a-> auteur?></li>
    <li class="list-group-item"><?= $a-> titre?></li>
    
  </ul>
  <div class="card-body">
    <a href="<?= url('detail&id='.$a->id) ?>" class="card-link">detail</a>
    <!-- <a href="<?= url('connexion') ?>" class="card-link">connexion</a> -->
  </div>

  <div class="card-body">
    <a href="index.php?route=supprimer-article-controller&id=<?= $article->id ?>" onclick="return confirm('Êtes-vous sûr ?')" class="text-align-right text-danger ml-2">supprimer</a>
    <!-- <a href="<?= url('connexion') ?>" class="card-link">connexion</a> -->
  </div>

   

<?php } ?>

<?php

require_once __DIR__ . '/footer.php';?>
