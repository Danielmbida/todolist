<?php

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);
$userRepo = $entityManager->getRepository(\todolist\Entity\User::class);
use todolist\Entity\User;
use todolist\Entity\Task;
//$queryBuilder = $entityManager->createQueryBuilder();

$userRepo = $entityManager->getRepository(User::class);

$queryBuilder = $entityManager->createQueryBuilder();
$queryBuilder->select('tsk')
    ->from(Task::class, 'tsk')
    ->join(User::class, 'usr', 'tsk.id=usr.id')
    ->where('usr.id = :user_id')
    ->setParameter('user_id', 1);

$query = $queryBuilder->getQuery();

echo $query->getDQL(), "\n";
foreach($query->getResult() as $task){
    echo "<br>".$task->getTache();
}

//
//$user = $userRepo->find(1);
//
//echo $user;
//foreach ($user->getTask() as $task) {
//    echo "- ", $task->getTache();
//}