<nav class="nav justify-content-center">
    <a class="nav-link" href="<?= url('article') ?>">articles</a>
    <a class="nav-link" href="<?= url('accueil') ?>">accueil</a>
    <?php if (!empty($_SESSION['identifiant']) && $_SESSION['identifiant'] == 'admin') : ?>

        <a class="nav-link" href="index.php?route=ajout">Ajouter un article</a>
    <?php endif; ?>



    <?php if (empty($_SESSION['identifiant'])) : ?>
        <a class="nav-link" href="index.php?route=connexion">Connexion</a>
    <?php else : ?>
        <a class="nav-link" href="index.php?route=deconnexion">Déconnexion</a>
        <img src="<?= $_SESSION['avatar'] ?>" class="nav-item" alt="...">
        <a class="nav-item"><?= $_SESSION['pseudo'] ?></a>

    <?php endif; ?>
    <?php if (empty($_SESSION['identifiant'])) : ?>
        <a class="nav-link" href="index.php?route=creer-compte-handler">Creer un compte</a>
    <?php else : ?>


    <?php endif; ?>




</nav>