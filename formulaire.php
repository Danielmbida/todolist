<html>
<?php
$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use todolist\Entity\User;
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" Content="no-cache">
    <meta http-equiv="Pragma" Content="no-cache">
    <meta http-equiv="Cache" Content="no store">
    <meta http-equiv="Expires" Content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taches</title>


    <!-- CSS utilisée sur tout le site -->
    <!--    <link rel="stylesheet" href="--><?//= URL ?><!--/css/global.css">-->
    <link rel="stylesheet" href="css/module.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Jquery validation plugin -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
</head>
<body>
<div class="row">
    <div class="header">

    </div>
</div>

<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Formulaire</h1>
        </div>

        <div class="panel-body">

            <h4 class="space">Tâches</h4>

            <form id="task_form" action="get_user_task.php" method="get">
                <div class="form-group row col-sm-offset-4">
                    <div class="col-sm-4">
                        <label for="user_name">rechercher par l'utilisateur</label>
                        <input class="form-control" type="text" id="user_name" name="user_name" placeholder="Rechercher">
                    </div>
                </div>
            </form>

            <form id="task_form" action="get_task.php" method="get">
                <div class="form-group row col-sm-offset-4">
                    <div class="col-sm-4">
                        <label for="tache">rechercher par la tache</label>
                        <input class="form-control" type="text" id="tache" name="tache" placeholder="Rechercher">
                    </div>
                </div>
            </form>


            <form id="task_form" action="create_user_task.php" method="post">
                <?php
                $queryBuilder = $entityManager->createQueryBuilder();
                $queryBuilder->select('usr')
                    ->from(User::class, 'usr');

                $queryAllUsers = $queryBuilder->getQuery();
                ?>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="user_name">Nom utilisateur</label>
                        <select id="user_name" name="user_name" class="form-control">
                            <?php
                            foreach($queryAllUsers->getResult() as $user):
                                ?>
                                <option id="nom"><?= $user->getFirstname() ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="date_db">Date de début</label>
                        <input class="form-control" type="date" name="date_db" id="date_db">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="date_fin">Date de fin</label>
                        <input class="form-control" type="date" name="date_fin" id="date_fin">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="tache">Tâche</label>
                        <input class="form-control" type="text" id="tache" name="tache" placeholder="Votre tâche">
                    </div>
                </div>

                <div class="form-group action-button col-sm-offset-4">
                    <input type="submit" class="btn btn-primary submit" id="submit_conf" name="submit_conf" value="Envoyer">
                    <a href="form.php" role="button" class="btn btn-warning">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

