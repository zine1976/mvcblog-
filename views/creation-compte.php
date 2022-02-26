<?php

require_once __DIR__ . '/header.php'; ?>
<?php require_once __DIR__ . '/nav.php';
?>
<div class="ml-5 mr-5">
<h1>Creer son compte</h1>

<form method="post" action="index.php?route=creer-compte-handler">

<div class="form-group row">
        <label for="pseudo" class="col-sm-12 col-form-label">pseudo</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="pseudo" required>
        </div>
    </div>

<div class="form-group row">
        <label for="identifiant" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="identifiant" id="identifiant" placeholder="Identifiant" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="confirmpassword" class="col-sm-12 col-form-label">confirmer</label>
        <div class="col-sm-12">
            <input type="confirmpassword" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="confirmer votre mot de passe" required>
        </div>
    </div>
    

    <div class="form-group row">
        <label for="avatar" class="col-12 col-form-label">avatar</label>
        <div class="col-12">
            <input type="url" class="form-control" name="avatar" id="avatar" placeholder="avatar" required>
        </div>
    </div>

    <div class="form-group row">
        <button  type="submit" class="btn btn-primary">Envoyer</button>


    </div>
</form>
</div> 
<?php
require_once __DIR__ . '/footer.php'; ?>