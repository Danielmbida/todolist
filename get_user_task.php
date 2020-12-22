<?php

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);
$userRepo = $entityManager->getRepository(\todolist\Entity\User::class);
use todolist\Entity\User;
use todolist\Entity\Task;
//$queryBuilder = $entityManager->createQueryBuilder();

$userRepo = $entityManager->getRepository(User::class);

$users = new User();
$usersByRole = $userRepo->findBy(["firstname" => $_GET['user_name']]);
echo "Taches :";
foreach ($usersByRole as $user) {
    foreach ($user->getTask() as $task) {
        echo "<br>". $task->getTache();
    }
    echo "<br>". " Créée par : " .$user->getFirstname();
}

//$queryBuilder = $entityManager->createQueryBuilder();
//$queryBuilder->select('tsk')
//    ->from(Task::class, 'tsk')
//    ->join(User::class, 'usr', 'tsk.user_id=usr.id')
//    ->where('usr.firstname = :user_name')
//    ->setParameter('user_name', $_GET['user_name']);
//
//$query = $queryBuilder->getQuery();
//
////echo $query->getDQL(), "\n";
//echo "Nom des tâches: \n";
//foreach($query->getResult() as $task){
//    echo "<br>".$task->getTache();
//}
