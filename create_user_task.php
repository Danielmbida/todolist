<?php

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);

use todolist\Entity\User;
use todolist\Entity\Task;

$userRepo = $entityManager->getRepository(User::class);

$users = new User();
$usersByRole = $userRepo->findBy(["firstname" => $_POST['user_name']]);
echo "Users by role:\n";
foreach ($usersByRole as $user) {
//    echo $user;
    $task = new Task();
    $task->setDateFrom(new \Datetime($_POST['date_db']));
    $task->setDateTo(new \Datetime($_POST['date_fin']));
    $task->setTache($_POST['tache']);

    $entityManager->persist($user);

    $task->setUser($user);
    $entityManager->persist($task);
    $entityManager->flush();
}


//$queryBuilder = $entityManager->createQueryBuilder();
//$queryBuilder->select('usr')
//    ->from(User::class, 'usr')
//    ->where('usr.firstname=:user_name')
//    ->setParameter('user_name', $_POST['user_name']);
//
//
//$query = $queryBuilder->getQuery();
//
////echo $query->getDQL(), "\n";
//
//foreach ($query->getResult() as $user) {

//    $task = new Task();
//    $task->setDateFrom(new \Datetime($_POST['date_db']));
//    $task->setDateTo(new \Datetime($_POST['date_fin']));
//    $task->setTache($_POST['tache']);
//
//    $entityManager->persist($user);
//
//    $task->setUser($user);
//    $entityManager->persist($task);
//    $entityManager->flush();
//}
echo "La tâche suivant ". $task->getTache() . " à été créée  par l'utilisateur " . $user->getFirstname();


