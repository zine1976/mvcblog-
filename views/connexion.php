<?php

require_once __DIR__ . '/header.php'; ?>
<?php require_once __DIR__ . '/nav.php';
?>

<div class="ml-5 mr-5">
<h1>Connexion</h1>

<form method="post" action="index.php?route=connexion-handler">
    
    <div class="form-group row">
        <label for="login" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="login" id="login" placeholder="Identifiant" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <input type="checkbox" name="remember_me">
            <label for="remember_me">se souvenir de moi</label><br>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
    </div>
</form>
<p>
    Vous n'avez pas encore de compte ? <a href="<?= url('creer-compte-handler') ?>">Créez-en-un</a> !
</p>

</div>

<?php
require_once __DIR__ . '/footer.php'; ?>