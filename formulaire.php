<html>
<?php
$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use todolist\Entity\User;
use todolist\Entity\Task;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cidisi - Games</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="header">
            <h3>Todo list</h3>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            Questions
        </div>

        <div class="panel-body">
            <form id="sondage_form" action="create_user_task.php" method="post">
                <div class="form-group row">
                    <label for="date_debut" class="col-sm-2 col-form-label">date de début</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nom_per" name="nom_per" placeholder="Votre nom">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="prenom_per" class="col-sm-2 col-form-label">Prénom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prenom_per" name="prenom_per" placeholder="Votre prénom">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email_per" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email_per" name="email_per" placeholder="Votre adresse e-mail">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password_conf" class="col-sm-2 col-form-label">Password (confirmation)</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password_conf" name="password_conf" placeholder="Saisissez votre mot de passe une seconde fois">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-offset-8 col-sm-2">
                        <input type="submit" class="form-control btn btn-primary submit" id="submit_conf" name="submit_conf" value="S'inscrire">
                    </div>

                    <div class="col-sm-2">
                        <input type="reset" class="form-control btn btn-warning" id="reset_conf" name="reset_conf" value="Annuler">
                    </div>
                </div>
            </form>
            <div class="panel-footer">

            </div>
        </div>
    </div>
</div>
</body>
</html>

