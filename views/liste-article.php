<?php 

require_once __DIR__ . '/header.php';?>
<?php require_once __DIR__ . '/nav.php';
?>
<h1>Liste des articles</h1>


    <?php foreach ($articles as $a) { ?>
        <div class="card mb-4 d-inline-flex p-2 bd-highlight mt-5 "style="width: 18rem;">
  <img src="<?= $p->image ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">article</h5>
    
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $p-> auteur?></li>
    <li class="list-group-item"><?= $p-> titre?>$</li>
    
  </ul>
  

   

<?php } ?>



<?php require_once view('footer');